<?php
header("Content-Type: application/json");

$lyricsFile = __DIR__ . '/lyrics.json';

if (file_exists($lyricsFile)) {
    $json = file_get_contents($lyricsFile);
    echo $json;
} else {
    echo json_encode([]);
}
