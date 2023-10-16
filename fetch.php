<?php
session_start();


$q = $_SESSION['q'];
$url = "https://www.youtube.com/results?search_query=" . urlencode($q);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.124 Safari/537.36');

$content = curl_exec($ch);

if ($content !== false) {
    echo $content;
} else {
    $error_message = curl_error($ch) ?? 'Unknown error';
    echo 'Failed to retrieve content from the external website. Error: ' . $error_message;
}

curl_close($ch);
?>