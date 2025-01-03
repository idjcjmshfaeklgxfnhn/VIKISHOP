<?php
// File to store logs
$log_file = 'ips.txt';

// Get visitor IP address
$ip_address = $_SERVER['REMOTE_ADDR'];

// Get current timestamp
$time = date("Y-m-d H:i:s");

// Format the log entry
$log_entry = "$time - IP: $ip_address\n";

// Save to file
file_put_contents($log_file, $log_entry, FILE_APPEND | LOCK_EX);
?>
