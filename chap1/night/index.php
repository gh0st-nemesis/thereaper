<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The Reaper - Night dream</title>
    <link rel="stylesheet" href="../../assets/css/chap1nightdream.css">
</head>
<body>
    <div class="glitch">
        <p class="glitch-title">
            Voici mes pulsions, dis mon nom, crie le
        </p>
        <form id="code-form" method="post">
            <input type="text" name="code" placeholder="Enter the code" required>
            <button type="submit">Submit</button>
        </form>
        <?php
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $code = $_POST['code'];
            if (strtolower($code) === 'jack the ripper') {
                echo '<p class="success-message">Correct! You found the code.</p>';
            } else {
                echo '<p class="error-message">Incorrect code. Try again.</p>';
            }
        }
        ?>
    </div>
    <div class="kill-message"></div>
    <script src="../../assets/js/killmessage.js"></script>
</body>
</html>
