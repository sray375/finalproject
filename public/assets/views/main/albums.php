<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>lana writes </title>
  <link rel="stylesheet" href="/assets/styles/homepage.css">
  <style>
    .album-grid {
      display: grid;
      grid-template-columns: repeat(2, 1fr);
      gap: 30px;
      justify-items: center;
      margin-top: 40px;
    }
    .container {
      max-width: 1000px;
      margin: 0 auto;
    }
    .album-preview {
      background: none;
      box-shadow: none;
      padding: 0;
    }
  </style>
</head>
<body>
  <div class="container">
    <h1>lana writes</h1>

    <div class="album-grid">
      <div class="album-preview">
        <a href="/album/born-to-die">
          <img src="/assets/images/born-to-die.webp" alt="Born to Die" width="200" />
          <h2>Born to Die (2012)</h2>
        </a>
      </div>

      <div class="album-preview">
        <a href="/album/ultraviolence">
          <img src="/assets/images/ultraviolence.webp" alt="Ultraviolence" width="200" />
          <h2>Ultraviolence (2014)</h2>
        </a>
      </div>

      <div class="album-preview">
        <a href="/album/honeymoon">
          <img src="/assets/images/honeymoon.jpg" alt="Honeymoon" width="200" />
          <h2>Honeymoon (2015)</h2>
        </a>
      </div>

      <div class="album-preview">
        <a href="/album/blue-banisters">
          <img src="/assets/images/blue-banisters.jpg" alt="Blue Banisters" width="200" />
          <h2>Blue Banisters (2021)</h2>
        </a>
      </div>
    </div>

    <div style="margin-top: 60px; text-align: center;">
      <div class="album-preview">
        <a href="/album/lyric-challenge">
          <img src="/assets/images/typewriter.jpg" alt="Lyric Challenge" width="200" />
          <h2>write your own lyric</h2>
        </a>
      </div>
    </div>
  </div>
</body>
</html>