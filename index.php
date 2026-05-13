<?php include 'db.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Blast Processing Level List</title>
    <style>
        @font-face { font-family: 'MainFont'; src: url('tff/main.ttf'); }
        body { background-color: black; color: white; font-family: 'MainFont', sans-serif; margin: 0; padding: 20px; }
        .header { display: flex; align-items: center; border-bottom: 2px solid white; padding-bottom: 10px; }
        .level-card { display: flex; align-items: center; border: 1px solid white; margin: 10px 0; padding: 10px; background: #111; }
        .level-icon { width: 50px; height: 50px; margin-right: 20px; border: 1px solid #444; }
        .level-info h2 { margin: 0; font-size: 24px; color: #00ffcc; }
        .level-info p { margin: 0; color: #888; }
        .footer { margin-top: 50px; font-size: 14px; color: #555; text-align: center; }
    </style>
</head>
<body>
<div class="header">
    <img src="icon.png" style="width:40px; margin-right:15px;">
    <h1>BPLL List</h1>
</div>
<div class="container">
    <?php
    $stmt = $pdo->query("SELECT * FROM levels ORDER BY position ASC");
    while ($row = $stmt->fetch()) {
        echo "<div class='level-card'>";
        echo "<img src='{$row['icon_url']}' class='level-icon' onerror=\"this.src='icon.png'\">";
        echo "<div class='level-info'>";
        echo "<h2>#{$row['position']} - {$row['name']}</h2>";
        echo "<p>by {$row['creator']}</p>";
        echo "</div></div>";
    }
    ?>
</div>
<div class="footer">Created by MivinaGD</div>
</body>
</html>