<?php
// Database configuration
$db_config_path = '/var/www/secure-config/';

$db_host = trim(file_get_contents($db_config_path . '.db_host.txt'));
$db_user = trim(file_get_contents($db_config_path . '.db_user.txt'));
$db_pass = trim(file_get_contents($db_config_path . '.db_pass.txt'));
$db_name = trim(file_get_contents($db_config_path . '.db_name.txt'));

// Create connection
$conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);

// Check connection
if (!$conn) {
    // Fallback to simple message if connection fails
    echo "Page Views: Many";
    error_log("MySQL connection error: " . mysqli_connect_error());
    return;
}

// Set the page identifier
$page_url = 'global_counter';

// Safely increment the counter
$query = "INSERT INTO page_views (page_url, view_count) 
          VALUES ('$page_url', 1)
          ON DUPLICATE KEY UPDATE view_count = view_count + 1";

if (!mysqli_query($conn, $query)) {
    error_log("Counter update error: " . mysqli_error($conn));
}

// Get the current count
$query = "SELECT view_count FROM page_views WHERE page_url = '$page_url'";
$result = mysqli_query($conn, $query);

if ($result && mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_assoc($result);
    echo "Page Views: " . number_format($row['view_count']);
} else {
    echo "Page Views: Many";
}

// Close connection
mysqli_close($conn);
?>
