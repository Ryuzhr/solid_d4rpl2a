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
$whatsapp->sendPhotosAndVideos();
$whatsapp->callGroupVideo();
echo "<br>";

$instagram->chat();
$instagram->publishPost();
$instagram->sendPhotosAndVideos();
?>
