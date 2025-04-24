<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Lyric Challenge</title>
  <link rel="stylesheet" href="/assets/styles/homepage.css">
  <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
</head>
<body>
  <div class="container">
    <h1>Write a Lana-Inspired Lyric</h1>
    <p>Use the word: <strong id="promptWord"></strong></p>

    <form id="lyricForm">
      <textarea name="lyric" id="lyric" placeholder="Write your lyric here..." required></textarea>
      <button type="submit">Submit Lyric</button>
    </form>

    <div id="lyricResponse"></div>
  </div>


<!-- Add this below -->
<button id="viewLyricsBtn">View Submitted Lyrics</button>
<div id="submittedLyrics" style="margin-top: 20px;"></div>

  <script>

        // Lana-inspired word list
    const lanaWords = ["bluebird", "honeymoon", "lilac", "violet", "summertime", "peaches", "lover", "silk", "cherry", "paradise"];

    // Pick a random one on page load
    const randomWord = lanaWords[Math.floor(Math.random() * lanaWords.length)];
    $("#promptWord").text(randomWord);

    $("#lyricForm").on("submit", function(e) {
      e.preventDefault();

      $.post("/api/submit-lyric.php", {
        lyric: $("#lyric").val(),
        word: $("#promptWord").text()
      }, function(response) {
        $("#lyricResponse").html("<p><strong>" + response.message + "</strong></p>");
      }, "json");
    });

    $("#viewLyricsBtn").on("click", function () {
  $.get("/api/lyrics.php", function (data) {
    if (Array.isArray(data)) {
      let output = "<h3>Submitted Lyrics</h3><ul>";
      data.forEach(entry => {
        output += `<li><em>${entry.word}</em>: "${entry.lyric}"</li>`;
      });
      output += "</ul>";
      $("#submittedLyrics").html(output);
    } else {
      $("#submittedLyrics").html("<p>No lyrics submitted yet.</p>");
    }
  }, "json");
});


  </script>
</body>
</html>
