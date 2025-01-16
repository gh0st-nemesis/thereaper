<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The Reaper</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <div class="glitch">
        <h1 class="glitch-title">
            The Reaper
            <span class="drip" style="--i: 1;"></span>
            <span class="drip" style="--i: 2;"></span>
            <span class="drip" style="--i: 3;"></span>
            <span class="drip" style="--i: 4;"></span>
            <span class="drip" style="--i: 5;"></span>
            <span class="drip" style="--i: 6;"></span>
            <span class="drip" style="--i: 7;"></span>
            <span class="drip" style="--i: 8;"></span>
            <span class="drip" style="--i: 9;"></span>
            <span class="drip" style="--i: 10;"></span>
        </h1>
        <button id="play-button" onclick="window.location.href='begingame'">Play</button>
    </div>
    <div class="kill-message"></div>
    <audio id="background-audio" src="./assets/sounds/Londonbridge.mp3" autoplay loop></audio>
    <script src="./assets/js/killmessage.js"></script>
</body>
</html>
