<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The Reaper - Letter</title>
    
</head>
<body>
    <div class="glitch">
        <p class="glitch-title">
            Enter the keyword to reveal the first part of cipher (word in the path after chap1):
        </p>
        <form id="keyword-form" method="post" style="z-index: 1;">
            <input type="text" name="keyword" placeholder="Enter the keyword" required>
            <button type="submit">Submit</button>
        </form>
        <?php
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $keyword = $_POST['keyword'];
            if (strtolower($keyword) === 'history') {
                echo '<p class="success-message" style="z-index:2;" >Correct! Here is your cipher: <strong>XlRDXF5BUVtKV1FLXFhDXV9BVQ5KU1NLXABDXV9BUVtKVlBLXFBDXVNBVFhKU1NLXVBDXF9BVV</strong></p>';
                echo '<a href="/chap2" class="next-chapter" style="z-index:2;">Go to Chapter 2</a>';
            } else {
                echo '<p class="error-message">Incorrect keyword. Try again.</p>';
            }
        }
        ?>
    </div>
    
    
</body>
</html>
