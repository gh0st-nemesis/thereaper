<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The Reaper - Real Fight</title>
    <link rel="stylesheet" href="../../assets/css/chap1nightdream.css">
</head>
<body>
    <div class="glitch">
        <p class="glitch-title">
            Tu es une menace je dois te tuer avant que tu ne me trouves
        </p>
        <div id="timer">30</div>
        <form id="code-form" method="post">
            <input type="text" name="code" placeholder="Enter the code" required>
            <!-- save&run -->
            <button type="submit">Submit</button>
        </form>
        <?php
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $code = $_POST['code'];
            if (strtolower($code) === 'save&run') {
                echo '<p class="success-message">Correct! You found the code.</p>';
                header('Location: /chap3/daymorning');
            } else {
                echo '<p class="error-message">Incorrect code. Try again.</p>';
            }
        }
        ?>
    </div>
    <div class="kill-message"></div>
    <div id="game-over-modal" class="modal">
        <div class="modal-content">
            <h2>Game Over : Jack vous a tué</h2>
            <button onclick="location.reload()">Refresh</button>
        </div>
    </div>
    <script src="../../assets/js/killmessage.js"></script>
    <script src="../../assets/js/timer.js"></script>
</body>
</html>
