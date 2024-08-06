<?php 
require "includes/header.php"; 
require "config.php";

session_start();

// Redirect to login page if not logged in
if(!isset($_SESSION['username'])) {
  header("location: login.php");
  exit;
}

$isEditing = false;
$editTitle = '';
$editBody = '';
$editId = 0;

$pdo = getDatabaseConnection();

// Check if we are editing a post
if(isset($_GET['edit'])) {
  $isEditing = true;
  $editId = $_GET['edit'];

  // Fetch the post data from the database
  $stmt = $pdo->prepare("SELECT * FROM posts WHERE ID = :id");
  $stmt->execute([':id' => $editId]);
  $editPost = $stmt->fetch(PDO::FETCH_ASSOC);

  if($editPost) {
    $editTitle = $editPost['title'];
    $editBody = $editPost['body'];
  }
}

// Handle form submission
if(isset($_POST['submit'])) {
  $title = $_POST['title'];
  $body = $_POST['body'];

  if($isEditing) {
    // Update the existing post
    $updateStmt = $pdo->prepare("UPDATE posts SET title = :title, body = :body WHERE ID = :id");
    $updateStmt->execute([':title' => $title, ':body' => $body, ':id' => $editId]);
    header("Location: index.php");
    exit;
  } else {
    // Insert a new post
    $insert = $pdo->prepare("INSERT INTO posts (username, title, body) VALUES (:username, :title, :body)");
    $insert->execute([
      ':username' => $_SESSION['username'],
      ':title' => $title,
      ':body' => $body
    ]);
    header("Location: index.php");
    exit;
  }
}
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php echo $isEditing ? 'Edit Post' : 'Create Post'; ?></title>
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
</head>
<body>

<div class="w3-container w3-card-4 w3-light-grey w3-margin" style="max-width: 600px;">
  <h2 class="w3-center"><?php echo $isEditing ? 'Edit Post' : 'Create Post'; ?></h2>
  <form class="w3-container" method="post" action="create.php<?php echo $isEditing ? '?edit='.$editId : ''; ?>">
    <p>      
      <label class="w3-text-black">Title</label>
      <input class="w3-input w3-border" type="text" id="title" name="title" value="<?php echo htmlspecialchars($editTitle); ?>" required>
    </p>
    <p>      
      <label class="w3-text-black">Body</label>
      <textarea class="w3-input w3-border" id="body" name="body" required><?php echo htmlspecialchars($editBody); ?></textarea>
    </p>
    <p>
      <button class="w3-button w3-black" type="submit" name="submit"><?php echo $isEditing ? 'Update Post' : 'Create Post'; ?></button>
    </p>
  </form>
</div>

</body>
</html>

<?php require "includes/footer.php"; ?>
