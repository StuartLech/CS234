<?php 
require "includes/header.php"; 
require "config.php";

session_start();

if(!isset($_SESSION['username'])) {
    header("location: login.php");
    exit;
}

$pdo = getDatabaseConnection();
$select = $pdo->prepare("SELECT p.ID, p.title, p.body, p.username, p.created_at, COALESCE(s.liked, 0) as liked, COALESCE(s.disliked, 0) as disliked FROM posts p LEFT JOIN stats s ON p.ID = s.ID ORDER BY p.created_at DESC");
$select->execute();
$rows = $select->fetchAll(PDO::FETCH_OBJ);

if(isset($_POST['like'])) {
    $id = $_POST['like'];
    $insert1 = $pdo->prepare("INSERT INTO stats (id, liked, disliked) VALUES (:id, 1, 0) ON DUPLICATE KEY UPDATE liked = liked + 1");
    $insert1->execute([':id' => $id]);
}

if(isset($_POST['dislike'])) {
    $id = $_POST['dislike'];
    $insert2 = $pdo->prepare("INSERT INTO stats (id, liked, disliked) VALUES (:id, 0, 1) ON DUPLICATE KEY UPDATE disliked = disliked + 1");
    $insert2->execute([':id' => $id]);
}

if(isset($_POST['delete'])) {
    $id = $_POST['delete'];
    try {
        $pdo->beginTransaction();
        $del = $pdo->prepare("DELETE FROM stats WHERE id = :id");
        $del->bindParam(':id', $id, PDO::PARAM_INT);
        $del->execute();

        $del2 = $pdo->prepare("DELETE FROM posts WHERE ID = :id");
        $del2->bindParam(':id', $id, PDO::PARAM_INT);
        $del2->execute();

        $pdo->commit();
        header("Location: index.php");
        exit;
    } catch (PDOException $e) {
        $pdo->rollBack();
        echo "Error: " . $e->getMessage();
        exit;
    }
}

if(isset($_POST['update'])) {
    $id = $_POST['update'];
    header("location: create.php?edit=".$id);
    exit;
}

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Posts</title>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
</head>
<body>

<div class="w3-container">
    <h2 class="w3-center">Posts</h2>
    <div class="w3-row-padding w3-margin-top">
        <?php foreach($rows as $row): ?>
            <div class="w3-third w3-margin-bottom">
                <div class="w3-card">
                    <div class="w3-container">
                        <h3><?php echo htmlspecialchars($row->title); ?></h3>
                        <p><?php echo htmlspecialchars($row->body); ?></p>
                        <small>Posted by: <?php echo htmlspecialchars($row->username); ?> on <?php echo $row->created_at; ?></small>
                        <div>Likes: <?php echo $row->liked; ?>, Dislikes: <?php echo $row->disliked; ?></div>
                        <form method="post" action="index.php" class="w3-container">
                            <p>
                                <button class="w3-button w3-green" type="submit" name="like" value="<?php echo $row->ID; ?>">Like</button>
                                <button class="w3-button w3-red" type="submit" name="dislike" value="<?php echo $row->ID; ?>">Dislike</button>
                                <?php if($_SESSION['username'] == $row->username): ?>
                                    <button class="w3-button w3-blue" type="submit" name="delete" value="<?php echo $row->ID; ?>">Delete</button>
                                    <button class="w3-button w3-orange" type="submit" name="update" formaction="create.php?edit=<?php echo $row->ID; ?>">Edit</button>
                                <?php endif; ?>
                            </p>
                        </form>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>

</body>
</html>

<?php require "includes/footer.php"; ?>
