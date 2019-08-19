<? 
$title = $_POST['title'];
$genre = $_POST['genre'];
$releaseDate = $_COOKIE['releaseDate'];
$director = $_COOKIE['director'];
$studio = $_COOKIE['studio'];

$sql = "insert into movies (title, genre, releaseDate, director, studio)
values ('$title', '$genre', '$releaseDate', '$director', '$studio')";

$result = executeSQL($sql,$sqlconn);

header('location: index.php');
?>
