<?php
$conn = mysqli_connect('localhost', 'root', '111111', 'opentutorials');
$sql = "SELECT * FROM topic";
$result = mysqli_query($conn, $sql);
while($row = mysqli_fetch_array($result)){
    $escape_title = htmlspecialchars($row['title']);
    $list = $list."<li><a href=\"index.php?id={$row['id']}\">{$escape_title}</a></li>";
}

$article = array(
    'title'=>'Welcome',
    'description'=>'Hello, web'
);
$update_link = '';
$delete_link = '';
$author = '';
if(isset($_GET['id'])){
    $filtered_id = mysqli_real_escape_string($conn, $_GET['id']);
    $sql = "SELECT * FROM topic LEFT JOIN author ON topic.author_id = author.id WHERE topic.id={$filtered_id}";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($result);
    $article['title'] = htmlspecialchars($row['title']);
    $article['description'] = htmlspecialchars($row['description']);
    $article['name'] = htmlspecialchars($row['name']);
    
    $update_link = '<a href="update.php?id=<?=$_GET['id']?>">update</a>';
    $delete_link = '
        <form action="process_delete.php" method="post">
            <input type="hidden" name="id" value="'.$_GET['id'].'">
            <input type="submit" value="delete">
        </form>
    ';
    $author = "<p>by {$article['name']}</p>";
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>WEB</title>
</head>
<body>
    <h1><a href="index.php">WEB</a></h1>
    <a href="author.php">author</a>
    <ol>
        <?=$list?>
    </ol>
    <p><a href="create.php">create</a></p>
    <?=$update_link?>
    <h2><?=$article['title']?></h2>
    <?=$article['description']?>
    <?=$author?>
</body>
</html>