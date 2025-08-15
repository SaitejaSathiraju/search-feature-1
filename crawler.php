<?php
// Simple NRSC File Crawler - No Base URLs, Just File Processing
session_start();

// Function to extract content from a PHP file
function extractFileContent($filePath) {
    if (!file_exists($filePath)) {
        return ['error' => 'File not found: ' . $filePath];
    }
    
    $content = file_get_contents($filePath);
    if ($content === false) {
        return ['error' => 'Cannot read file: ' . $filePath];
    }
    
    // Extract title from HTML if present
    $title = 'No title found';
    if (preg_match('/<title>(.*?)<\/title>/i', $content, $matches)) {
        $title = trim($matches[1]);
    }
    
    // Extract visible text content (remove PHP code, HTML tags, scripts, styles)
    $textContent = $content;
    
    // Remove PHP code
    $textContent = preg_replace('/<\?php.*?\?>/s', '', $textContent);
    
    // Remove HTML tags but keep text
    $textContent = strip_tags($textContent);
    
    // Remove scripts and styles content
    $textContent = preg_replace('/<script.*?<\/script>/s', '', $textContent);
    $textContent = preg_replace('/<style.*?<\/style>/s', '', $textContent);
    
    // Clean up whitespace
    $textContent = preg_replace('/\s+/', ' ', $textContent);
    $textContent = trim($textContent);
    
    // Limit content to 1000 characters
    if (strlen($textContent) > 1000) {
        $textContent = substr($textContent, 0, 1000) . '...';
    }
    
    return [
        'filename' => basename($filePath),
        'filepath' => $filePath,
        'title' => $title,
        'content' => $textContent,
        'content_length' => strlen($textContent),
        'file_size' => filesize($filePath),
        'last_modified' => date('Y-m-d H:i:s', filemtime($filePath))
    ];
}

// Handle AJAX requests
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['action'])) {
    header('Content-Type: application/json');
    
    switch ($_POST['action']) {
        case 'crawl_files':
            $selectedFiles = $_POST['files'] ?? [];
            
            if (empty($selectedFiles)) {
                echo json_encode(['error' => 'No files selected']);
                exit;
            }
            
            $results = [];
            $successful = 0;
            $failed = 0;
            
            foreach ($selectedFiles as $file) {
                $result = extractFileContent($file);
                
                if (isset($result['error'])) {
                    $failed++;
                    $result['status'] = 'failed';
                } else {
                    $successful++;
                    $result['status'] = 'success';
                }
                
                $results[] = $result;
            }
            
            echo json_encode([
                'results' => $results,
                'total' => count($selectedFiles),
                'successful' => $successful,
                'failed' => $failed
            ]);
            break;
            
        default:
            echo json_encode(['error' => 'Invalid action']);
    }
    exit;
}

// Get list of available PHP files
function getAvailableFiles() {
    $files = glob('*.php');
    $categories = [];
    
    foreach ($files as $file) {
        if ($file === 'crawler.php') continue;
        
        if (strpos($file, 'Apps_') === 0) {
            $category = 'Applications';
        } elseif (strpos($file, 'archive_') === 0) {
            $category = 'Archive & Orders';
        } elseif (strpos($file, 'announcements') === 0) {
            $category = 'Announcements';
        } else {
            $category = 'Other';
        }
        
        $categories[$category][] = $file;
    }
    
    return $categories;
}

$availableFiles = getAvailableFiles();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NRSC File Content Extractor</title>
    <style>
        * { margin: 0; padding: 0; box-sizing: border-box; }
        body { font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif; line-height: 1.6; color: #333; background: #f5f5f5; padding: 20px; }
        .container { max-width: 1400px; margin: 0 auto; background: white; border-radius: 8px; box-shadow: 0 2px 10px rgba(0,0,0,0.1); overflow: hidden; }
        .header { background: linear-gradient(135deg, #2c3e50, #3498db); color: white; padding: 30px; text-align: center; }
        .header h1 { font-size: 2.5rem; margin-bottom: 10px; }
        .header p { opacity: 0.9; font-size: 1.1rem; }
        .main-content { padding: 30px; }
        .tabs { display: flex; border-bottom: 2px solid #e1e5e9; margin-bottom: 30px; }
        .tab { padding: 15px 30px; cursor: pointer; border-bottom: 3px solid transparent; transition: all 0.3s; font-weight: 600; }
        .tab.active { border-bottom-color: #3498db; color: #3498db; }
        .tab:hover { background: #f8f9fa; }
        .tab-content { display: none; }
        .tab-content.active { display: block; }
        .file-selector { margin: 20px 0; }
        .file-category { margin-bottom: 20px; background: #f8f9fa; padding: 20px; border-radius: 6px; border: 1px solid #e1e5e9; }
        .file-category h4 { color: #2c3e50; margin-bottom: 15px; border-bottom: 2px solid #e1e5e9; padding-bottom: 10px; }
        .file-item { display: inline-block; margin: 5px; }
        .file-checkbox { margin-right: 8px; }
        .file-label { background: #e9ecef; padding: 8px 12px; border-radius: 4px; font-size: 0.9rem; color: #495057; cursor: pointer; transition: all 0.3s; }
        .file-label:hover { background: #3498db; color: white; }
        .file-checkbox:checked + .file-label { background: #27ae60; color: white; }
        .button-group { display: flex; gap: 15px; margin: 30px 0; flex-wrap: wrap; }
        .btn { padding: 15px 30px; border: none; border-radius: 6px; font-size: 16px; font-weight: 600; cursor: pointer; transition: all 0.3s; min-width: 150px; }
        .btn-primary { background: #3498db; color: white; }
        .btn-primary:hover:not(:disabled) { background: #2980b9; transform: translateY(-1px); }
        .btn-success { background: #27ae60; color: white; }
        .btn-success:hover:not(:disabled) { background: #229954; transform: translateY(-1px); }
        .btn-warning { background: #f39c12; color: white; }
        .btn-warning:hover:not(:disabled) { background: #e67e22; transform: translateY(-1px); }
        .btn:disabled { opacity: 0.6; cursor: not-allowed; transform: none; }
        .status { margin: 20px 0; padding: 15px; border-radius: 6px; font-weight: 500; }
        .status.info { background: #d1ecf1; color: #0c5460; border: 1px solid #bee5eb; }
        .status.success { background: #d4edda; color: #155724; border: 1px solid #c3e6cb; }
        .status.error { background: #f8d7da; color: #721c24; border: 1px solid #f5c6cb; }
        .progress-bar { width: 100%; height: 20px; background: #e1e5e9; border-radius: 10px; overflow: hidden; margin: 20px 0; }
        .progress-fill { height: 100%; background: linear-gradient(90deg, #3498db, #2ecc71); width: 0%; transition: width 0.3s ease; }
        .log-console { background: #2c3e50; color: #ecf0f1; padding: 20px; border-radius: 6px; font-family: 'Courier New', monospace; font-size: 14px; max-height: 400px; overflow-y: auto; white-space: pre-wrap; margin-top: 20px; }
        .log-entry { margin-bottom: 8px; padding: 4px 0; }
        .log-entry.success { color: #2ecc71; }
        .log-entry.error { color: #e74c3c; }
        .log-entry.info { color: #3498db; }
        .stats { display: grid; grid-template-columns: repeat(auto-fit, minmax(200px, 1fr)); gap: 20px; margin: 20px 0; }
        .stat-card { background: #f8f9fa; padding: 20px; border-radius: 6px; text-align: center; border: 1px solid #e1e5e9; }
        .stat-number { font-size: 2rem; font-weight: bold; color: #2c3e50; margin-bottom: 5px; }
        .stat-label { color: #6c757d; font-size: 0.9rem; }
        .results-table { width: 100%; border-collapse: collapse; margin-top: 20px; }
        .results-table th, .results-table td { padding: 12px; text-align: left; border-bottom: 1px solid #e1e5e9; }
        .results-table th { background: #f8f9fa; font-weight: 600; color: #2c3e50; }
        .results-table tr:hover { background: #f8f9fa; }
        .select-all-section { background: #e8f4fd; padding: 15px; border-radius: 6px; border: 1px solid #bee5eb; margin-bottom: 20px; }
        .select-all-section button { margin: 0 10px; padding: 8px 16px; border: none; border-radius: 4px; cursor: pointer; background: #3498db; color: white; font-size: 14px; }
        .select-all-section button:hover { background: #2980b9; }
        @media (max-width: 768px) { .container { margin: 10px; border-radius: 6px; } .main-content { padding: 20px; } .button-group { flex-direction: column; } .btn { width: 100%; } .tabs { flex-direction: column; } }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>📁 NRSC File Content Extractor</h1>
            <p>Extract content from your PHP files for search functionality - No URLs needed!</p>
        </div>

        <div class="main-content">
            <div class="tabs">
                <div class="tab active" onclick="showTab('files')">📁 Select Files</div>
                <div class="tab" onclick="showTab('crawler')">🚀 Extract Content</div>
                <div class="tab" onclick="showTab('results')">📊 Results</div>
            </div>

            <!-- File Selection Tab -->
            <div id="files" class="tab-content active">
                <h3>📁 Select PHP Files to Extract Content From</h3>
                <p>Choose which files you want to process. The extracted content will be perfect for building your own search functionality!</p>
                
                <div class="select-all-section">
                    <strong>Quick Selection:</strong>
                    <button onclick="selectAll()">✅ Select All</button>
                    <button onclick="deselectAll()">❌ Deselect All</button>
                    <button onclick="selectCategory('Applications')">📱 Applications Only</button>
                    <button onclick="selectCategory('Other')">🔧 Other Files Only</button>
                </div>

                <?php foreach ($availableFiles as $category => $fileList): ?>
                <div class="file-category">
                    <h4><?php echo htmlspecialchars($category); ?> (<?php echo count($fileList); ?> files)</h4>
                    <?php foreach ($fileList as $file): ?>
                    <div class="file-item">
                        <input type="checkbox" id="file_<?php echo htmlspecialchars($file); ?>" class="file-checkbox" value="<?php echo htmlspecialchars($file); ?>">
                        <label for="file_<?php echo htmlspecialchars($file); ?>" class="file-label"><?php echo htmlspecialchars($file); ?></label>
                    </div>
                    <?php endforeach; ?>
                </div>
                <?php endforeach; ?>
                
                <div style="margin-top: 30px; padding: 20px; background: #d4edda; border: 1px solid #c3e6cb; border-radius: 6px;">
                    <h4>💡 How This Works</h4>
                    <ul style="margin-left: 20px;">
                        <li><strong>Select files</strong> - Choose which PHP files to process</li>
                        <li><strong>Extract content</strong> - Get titles, text content, and metadata</li>
                        <li><strong>Download JSON</strong> - Perfect for building your own search system</li>
                        <li><strong>No external URLs</strong> - Works directly with your local files</li>
                    </ul>
                </div>
            </div>

            <!-- Content Extraction Tab -->
            <div id="crawler" class="tab-content">
                <h3>🚀 Extract Content from Selected Files</h3>
                <p>Click the button below to start extracting content from your selected PHP files.</p>
                
                <div class="button-group">
                    <button id="extractBtn" class="btn btn-primary">🚀 Start Content Extraction</button>
                    <button id="downloadBtn" class="btn btn-success" disabled>📥 Download Results</button>
                    <button id="clearBtn" class="btn btn-warning">🗑️ Clear All</button>
                </div>

                <div id="status" class="status info" style="display: none;"></div>
                <div class="progress-bar" style="display: none;"><div class="progress-fill"></div></div>

                <div class="stats" id="stats" style="display: none;">
                    <div class="stat-card"><div class="stat-number" id="totalFiles">0</div><div class="stat-label">Total Files</div></div>
                    <div class="stat-card"><div class="stat-number" id="successfulExtractions">0</div><div class="stat-label">Successful</div></div>
                    <div class="stat-card"><div class="stat-number" id="failedExtractions">0</div><div class="stat-label">Failed</div></div>
                    <div class="stat-card"><div class="stat-number" id="progressPercent">0%</div><div class="stat-label">Progress</div></div>
                </div>

                <div class="log-console" id="logConsole" style="display: none;"></div>
            </div>

            <!-- Results Tab -->
            <div id="results" class="tab-content">
                <h3>📊 Extraction Results</h3>
                <div id="resultsContent">
                    <p>No results yet. Select files and start extraction to see results here.</p>
                </div>
            </div>
        </div>
    </div>

    <script>
        let extractionResults = [];
        let isRunning = false;

        function showTab(tabName) {
            document.querySelectorAll('.tab-content').forEach(content => content.classList.remove('active'));
            document.querySelectorAll('.tab').forEach(tab => tab.classList.remove('active'));
            document.getElementById(tabName).classList.add('active');
            event.target.classList.add('active');
        }

        function selectAll() {
            document.querySelectorAll('.file-checkbox').forEach(checkbox => {
                checkbox.checked = true;
            });
        }

        function deselectAll() {
            document.querySelectorAll('.file-checkbox').forEach(checkbox => {
                checkbox.checked = false;
            });
        }

        function selectCategory(category) {
            // Find the category div and select all checkboxes in it
            const categoryDivs = document.querySelectorAll('.file-category');
            categoryDivs.forEach(div => {
                if (div.querySelector('h4').textContent.includes(category)) {
                    div.querySelectorAll('.file-checkbox').forEach(checkbox => {
                        checkbox.checked = true;
                    });
                } else {
                    div.querySelectorAll('.file-checkbox').forEach(checkbox => {
                        checkbox.checked = false;
                    });
                }
            });
        }

        function showStatus(message, type = 'info') {
            const statusDiv = document.getElementById('status');
            statusDiv.textContent = message;
            statusDiv.className = `status ${type}`;
            statusDiv.style.display = 'block';
        }

        function log(message, type = 'info') {
            const logConsole = document.getElementById('logConsole');
            const timestamp = new Date().toLocaleTimeString();
            const logEntry = document.createElement('div');
            logEntry.className = `log-entry ${type}`;
            logEntry.textContent = `[${timestamp}] ${message}`;
            logConsole.appendChild(logEntry);
            logConsole.scrollTop = logConsole.scrollHeight;
        }

        function updateProgress(processed, total) {
            const percent = Math.round((processed / total) * 100);
            document.querySelector('.progress-fill').style.width = percent + '%';
            document.getElementById('progressPercent').textContent = percent + '%';
        }

        function updateStats(total, successful, failed) {
            document.getElementById('totalFiles').textContent = total;
            document.getElementById('successfulExtractions').textContent = successful;
            document.getElementById('failedExtractions').textContent = failed;
        }

        function updateUI() {
            const extractBtn = document.getElementById('extractBtn');
            const downloadBtn = document.getElementById('downloadBtn');
            const progressBar = document.querySelector('.progress-bar');
            const statsDiv = document.getElementById('stats');
            const logConsole = document.getElementById('logConsole');
            
            extractBtn.disabled = isRunning;
            downloadBtn.disabled = extractionResults.length === 0;
            
            if (isRunning || extractionResults.length > 0) {
                progressBar.style.display = 'block';
                statsDiv.style.display = 'grid';
                logConsole.style.display = 'block';
            } else {
                progressBar.style.display = 'none';
                statsDiv.style.display = 'none';
                logConsole.style.display = 'none';
            }
        }

        async function startExtraction() {
            const selectedFiles = Array.from(document.querySelectorAll('.file-checkbox:checked')).map(cb => cb.value);
            
            if (selectedFiles.length === 0) {
                showStatus('Please select at least one file to extract content from', 'error');
                return;
            }

            isRunning = true;
            extractionResults = [];
            updateUI();
            showStatus(`Starting to extract content from ${selectedFiles.length} selected files...`, 'info');
            log(`🚀 Starting content extraction from ${selectedFiles.length} files...`, 'info');

            let successful = 0;
            let failed = 0;

            for (let i = 0; i < selectedFiles.length; i++) {
                if (!isRunning) break;

                const file = selectedFiles[i];
                
                try {
                    log(`📖 Processing: ${file}`, 'info');

                    const formData = new FormData();
                    formData.append('action', 'crawl_files');
                    formData.append('files[]', file);

                    const response = await fetch('crawler.php', { method: 'POST', body: formData });
                    const result = await response.json();

                    if (result.error) {
                        failed++;
                        log(`❌ Failed: ${file} - ${result.error}`, 'error');
                    } else {
                        successful++;
                        log(`✅ Success: ${file} - ${result.results[0].content_length} characters extracted`, 'success');
                        extractionResults.push(result.results[0]);
                    }

                    updateProgress(i + 1, selectedFiles.length);
                    updateStats(selectedFiles.length, successful, failed);

                } catch (error) {
                    failed++;
                    log(`❌ Error: ${file} - ${error.message}`, 'error');
                    updateProgress(i + 1, selectedFiles.length);
                    updateStats(selectedFiles.length, successful, failed);
                }
            }

            isRunning = false;
            updateUI();

            if (extractionResults.length > 0) {
                showStatus(`Content extraction completed! Successfully processed ${successful} files.`, 'success');
                log(`🎉 Content extraction completed! ${successful} successful, ${failed} failed.`, 'success');
                updateResultsTable();
            } else {
                showStatus('Content extraction completed but no files were successfully processed.', 'error');
                log('⚠️ No files were successfully processed.', 'error');
            }
        }

        function updateResultsTable() {
            const resultsContent = document.getElementById('resultsContent');
            
            if (extractionResults.length === 0) {
                resultsContent.innerHTML = '<p>No results yet. Select files and start extraction to see results here.</p>';
                return;
            }
            
            let html = `
                <table class="results-table">
                    <thead><tr><th>Status</th><th>Filename</th><th>Title</th><th>Content Length</th><th>File Size</th><th>Last Modified</th><th>Actions</th></tr></thead><tbody>
            `;
            
            extractionResults.forEach((result, index) => {
                const statusClass = result.status === 'success' ? 'success' : 'error';
                const statusIcon = result.status === 'success' ? '✅' : '❌';
                
                html += `
                    <tr>
                        <td><span class="log-entry ${statusClass}">${statusIcon} ${result.status}</span></td>
                        <td><strong>${result.filename}</strong></td>
                        <td>${result.title || 'N/A'}</td>
                        <td>${result.content_length || 'N/A'} chars</td>
                        <td>${(result.file_size / 1024).toFixed(1)} KB</td>
                        <td>${result.last_modified || 'N/A'}</td>
                        <td><button onclick="viewResult(${index})" class="btn" style="padding: 5px 10px; font-size: 12px;">👁️ View</button></td>
                    </tr>
                `;
            });
            
            html += '</tbody></table>';
            resultsContent.innerHTML = html;
        }

        function viewResult(index) {
            const result = extractionResults[index];
            const content = result.content || 'No content available';
            alert(`Filename: ${result.filename}\nTitle: ${result.title}\n\nContent:\n${content}`);
        }

        function downloadResults() {
            if (extractionResults.length === 0) return;
            
            const dataStr = JSON.stringify(extractionResults, null, 2);
            const dataBlob = new Blob([dataStr], { type: 'application/json' });
            
            const link = document.createElement('a');
            link.href = URL.createObjectURL(dataBlob);
            link.download = 'nrsc_file_content.json';
            link.style.display = 'none';
            
            document.body.appendChild(link);
            link.click();
            document.body.removeChild(link);
            
            URL.revokeObjectURL(link.href);
            log('📥 Results downloaded as nrsc_file_content.json', 'success');
        }

        function clearAll() {
            extractionResults = [];
            isRunning = false;
            
            // Uncheck all checkboxes
            document.querySelectorAll('.file-checkbox').forEach(checkbox => {
                checkbox.checked = false;
            });
            
            document.getElementById('status').style.display = 'none';
            document.querySelector('.progress-bar').style.display = 'none';
            document.getElementById('stats').style.display = 'none';
            document.getElementById('logConsole').style.display = 'none';
            document.getElementById('logConsole').innerHTML = '';
            
            updateUI();
            showStatus('All data cleared', 'info');
            
            document.querySelector('.progress-fill').style.width = '0%';
            updateStats(0, 0, 0);
            document.getElementById('resultsContent').innerHTML = '<p>No results yet. Select files and start extraction to see results here.</p>';
        }

        // Event listeners
        document.getElementById('extractBtn').addEventListener('click', startExtraction);
        document.getElementById('downloadBtn').addEventListener('click', downloadResults);
        document.getElementById('clearBtn').addEventListener('click', clearAll);

        // Initialize UI
        updateUI();
    </script>
</body>
</html>

