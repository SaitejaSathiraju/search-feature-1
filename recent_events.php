<?php
    // Database configuration
    $db_host = '172.19.1.118';
    $db_user = 'events_user';
    $db_pass = 'mhVqV6rP@2025';
    $db_name = 'events_db';

    $conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);

    if (!$conn) {
        echo "<div class='error'>Currently unable to load events. Please check back later.</div>";
        error_log("MySQL connection error: " . mysqli_connect_error());
        exit;
    }
    
    mysqli_set_charset($conn, 'utf8mb4');

    // Fetch events with dynamic is_new calculation
    $query = "SELECT id, title, event_date, pdf_path, gallery_path, is_new FROM events ORDER BY event_date DESC;";
    $result = mysqli_query($conn, $query);
    
    if (!$result) {
        echo "<div class='error'>Error loading events.</div>";
        error_log("Events query error: " . mysqli_error($conn));
        mysqli_close($conn);
        exit;
    }

    $this_month_events = [];
    $past_events = [];
    while ($row = mysqli_fetch_assoc($result)) {
        if ($row['is_new']) {
            $this_month_events[] = $row;
        } else {
            $past_events[] = $row;
        }
    }
    
    mysqli_close($conn);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recent Events</title>
    <style>
        .events-container {
            display: flex;
            flex-direction: column;
            gap: 20px;
            max-width: 1000px;
            margin: 0 auto;
            padding: 20px;
        }

        .events-section {
            background: white;
            border-radius: 10px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            overflow: hidden;
        }

        .section-header {
            background-color: #404b86;
            color: white;
            padding: 12px 16px;
            font-weight: 600;
            font-size: 18px;
            display: flex;
            align-items: center;
        }

        .new-badge {
            background: #ff4d6d;
            color: white;
            padding: 2px 8px;
            border-radius: 10px;
            font-size: 12px;
            margin-left: 10px;
        }

        .scroll-box-recents {
            max-height: 350px;
            height: 350px;
            overflow-y: scroll; /* Changed to auto for better compatibility */
            padding: 12px;            
        }

        .scroll-box-recents {
            scrollbar-width: none; /* For Firefox */
            -ms-overflow-style: none; /* For IE and Edge */
        }

        .scroll-box-recents::-webkit-scrollbar {
            display: none; /* For Chrome, Safari, and Opera */
        }

        .event-item {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 14px 12px;
            margin-bottom: 10px;
            background: #f9f5ff;
            border: 1px solid #e2d6f3;
            border-radius: 10px;
            transition: all 0.3s ease;
        }

        .event-item:hover {
            background: #f2e7ff;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
            transform: translateY(-2px);
        }

        .event-left {
            flex: 1;
            font-weight: 500;
            color: #2e2e2e;
            font-size: 18px;
            margin-right: 20px;
        }

        .event-right {
            text-align: right;
            white-space: nowrap;
            font-size: 14px;
            min-width: 130px;
        }

        .event-date {
            display: block;
            color: #7d659e;
            font-weight: 600;
            margin-bottom: 6px;
            font-size: 16px;
        }

        .event-links a {
            display: inline-block;
            color: #6c2ab5;
            font-size: 16px;
            margin-left: 8px;
            text-decoration: none;
            font-weight: 600;
            transition: color 0.2s;
        }

        .event-links a:hover {
            color: #8e44ad;
            text-decoration: underline;
        }
        .no-events {
            padding: 20px;
            text-align: center;
            color: #666;
            font-style: italic;
        }

        .bi {
            font-size: 1.1em;
            vertical-align: middle;
        }
    </style>
</head>
<body>
    <div class="events-container">
        <!-- Latest Events Section -->
        <div class="events-section">
            <div class="section-header">
                Latest Events <span class="new-badge">NEW</span>
            </div>
            <div class="scroll-box-recents" id="this-month">
                <?php if (empty($this_month_events)): ?>
                    <div class="no-events">No recent events this month</div>
                <?php else: ?>
                    <?php foreach ($this_month_events as $event): ?>
                        <div class="event-item">
                            <div class="event-left"><?= htmlspecialchars($event['title']) ?></div>
                            <div class="event-right">
                                <span class="event-date"><?= date('M d, Y', strtotime($event['event_date'])) ?></span>
                                <div class="event-links">
                                    <?php if (!empty($event['pdf_path'])): ?>
                                        <a href="<?= htmlspecialchars($event['pdf_path']) ?>" target="_blank">
                                            <i class="bi bi-file-earmark-pdf-fill"></i> PDF
                                        </a>
                                    <?php endif; ?>
                                    <?php if (!empty($event['gallery_path'])): ?>
                                        <a href="<?= htmlspecialchars($event['gallery_path']) ?>" target="_blank">
                                            <i class="bi bi-images"></i> Gallery
                                        </a>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                <?php endif; ?>
            </div>
        </div>

        <!-- Past Events Section -->
        <div class="events-section">
            <div class="section-header">
                Past Events
            </div>
            <div class="scroll-box-recents" id="past-events">
                <?php if (empty($past_events)): ?>
                    <div class="no-events">No past events available</div>
                <?php else: ?>
                    <?php foreach ($past_events as $event): ?>
                        <div class="event-item">
                            <div class="event-left"><?= htmlspecialchars($event['title']) ?></div>
                            <div class="event-right">
                                <span class="event-date"><?= date('M d, Y', strtotime($event['event_date'])) ?></span>
                                <div class="event-links">
                                    <?php if (!empty($event['pdf_path'])): ?>
                                        <a href="<?= htmlspecialchars($event['pdf_path']) ?>" target="_blank">
                                            <i class="bi bi-file-earmark-pdf-fill"></i> PDF
                                        </a>
                                    <?php endif; ?>
                                    <?php if (!empty($event['gallery_path'])): ?>
                                        <a href="<?= htmlspecialchars($event['gallery_path']) ?>" target="_blank">
                                            <i class="bi bi-images"></i> Gallery
                                        </a>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                <?php endif; ?>
            </div>
            <div class="view-more-btn">
                <a href="./viewmoreevents.php" target="_blank">View More <i class="bi bi-arrow-right"></i></a>
            </div>
        </div>
    </div>

    <script>
        function initAutoScroll() {
    const sections = [
        { id: 'this-month', speed: 0.5 }, 
        { id: 'past-events', speed: 0.5 },   
        { id: 'announcements-scroll', speed: 0.5 } // Faster speed (2 pixels per frame)
    ];

    sections.forEach(section => {
        const element = document.getElementById(section.id);
        if (!element || element.children.length === 0) return;

        let isScrolling = true;
        let scrollPosition = 0;
        let requestId;

        function scrollStep() {
            if (!isScrolling) {
                scrollPosition = element.scrollTop;
                return;
            }

            // Calculate new scroll position with controlled speed
            scrollPosition += section.speed;
            
            if (scrollPosition >= element.scrollHeight - element.clientHeight) {
                // Reset to top
                element.scrollTo({ top: 0, behavior: 'smooth' });
                scrollPosition = 0;
            } else {
                element.scrollTop = scrollPosition;
            }

            requestId = requestAnimationFrame(scrollStep);
        }

        // Start scrolling
        requestId = requestAnimationFrame(scrollStep);

        // Pause on hover
        element.addEventListener('mouseenter', () => {
            isScrolling = false;
        });

        element.addEventListener('mouseleave', () => {
            isScrolling = true;
            requestId = requestAnimationFrame(scrollStep);
        });
    });
}

document.addEventListener("DOMContentLoaded", initAutoScroll);
    </script>
</body>
</html>