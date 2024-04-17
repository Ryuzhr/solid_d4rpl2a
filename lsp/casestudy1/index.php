<?php
include_once 'SocialMedia.php';
include_once 'PostMediaManager.php';
include_once 'VideoGroupManager.php';
include_once 'Whatsapp.php';
include_once 'Instagram.php';

// Membuat objek dari kelas-kelas yang telah didefinisikan
$socialMedia = new SocialMedia();
$whatsapp = new Whatsapp();
$instagram = new Instagram();


$whatsapp->chat();
echo "<br>";
$whatsapp->sendPhotosAndVideos();
echo "<br>";
$whatsapp->callGroupVideo();
echo "<br>";
echo "<br>";

$instagram->chat();
echo "<br>";
$instagram->publishPost();
echo "<br>";
$instagram->sendPhotosAndVideos();
?>
