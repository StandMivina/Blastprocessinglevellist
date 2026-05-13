<?php
include 'db.php';
$is_admin = true; 

if ($is_admin && isset($_POST['add_level'])) {
    $stmt = $pdo->prepare("INSERT INTO levels (name, creator, position) VALUES (?, ?, ?)");
    $stmt->execute([$_POST['name'], $_POST['creator'], $_POST['pos']]);
}
?>
<body style="background: #222; color: white; font-family: sans-serif; padding: 20px;">
    <h2>Admin Panel (Owner: MivinaGD)</h2>
    <form method="POST">
        <input type="text" name="name" placeholder="Level Name" required><br><br>
        <input type="text" name="creator" placeholder="Creator" required><br><br>
        <input type="number" name="pos" placeholder="Position" required><br><br>
        <button type="submit" name="add_level">Add Level</button>
    </form>
    <hr>
    <h3>Pending Records</h3>
    <?php
    $recs = $pdo->query("SELECT r.*, l.name as lname FROM records r JOIN levels l ON r.level_id = l.id WHERE status='pending'");
    while($r = $recs->fetch()) {
        echo "<p>{$r['player_name']} on {$r['lname']} - <a href='{$r['video_link']}' style='color:cyan'>Video</a></p>";
    }
    ?>
</body>