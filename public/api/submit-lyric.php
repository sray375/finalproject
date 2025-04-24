<?php
header("Content-Type: application/json");

$lyricsFile = __DIR__ . '/lyrics.json';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $lyric = htmlspecialchars(trim($_POST['lyric']));
    $word = htmlspecialchars(trim($_POST['word']));

    if (empty($lyric)) {
        echo json_encode(['message' => 'Please enter a lyric.']);
        exit;
    }

    $newEntry = ['word' => $word, 'lyric' => $lyric];

    // Load existing
    $lyrics = file_exists($lyricsFile)
        ? json_decode(file_get_contents($lyricsFile), true)
        : [];

    $lyrics[] = $newEntry;

    file_put_contents($lyricsFile, json_encode($lyrics, JSON_PRETTY_PRINT));

    echo json_encode(['message' => "Your lyric with '{$word}' was received: \"$lyric\""]);
    exit;
}

echo json_encode(['message' => 'Invalid request.']);
