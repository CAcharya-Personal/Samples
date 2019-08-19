<? include_once('header.php'); 
$title = $_GET['title'];

$SQL = "select * from movies where title = '$title'";

$movieResult = getRow($SQL,$sqlconn);
while($movieRow = array_shift($movieResult)){
	$genre = $movieRow['genre'];
	$releaseDate = $movieRow['releaseDate'];
	$director = $movieRow['director'];
	$studio = $movieRow['studio'];
}
?>
<div id="content">
<form name="updateMovie" method="post" action='updateMovie.php'>
	<table>
		<tr><th colspan='2'>Update Movie</th></tr>
		<tr>
			<td>Title:</td>
			<td><input type="text" name="title" value="<? echo $title; ?>"></td>
		</tr>
		<tr>
			<td>Genre:</td>
			<td><input type="text" name="genre" value="<? echo $genre; ?>"></td>
		</tr>
		<tr>
			<td>Release Date:</td>
			<td><input type="text" name="releaseDate" value="<? echo $releaseDate; ?>"></td>
		</tr>
		<tr>
			<td>Director:</td>
			<td><input type="text" name="director" value="<? echo $director; ?>"></td>
		</tr>
		<tr>
			<td>Studio:</td>
			<td><input type="text" name="studio" value="<? echo $studio; ?>"></td>
		</tr>
		<tr>
			<td colspan='2' align='center'>
				<input type='submit' name='editMovie' value='Update'>
				&nbsp;&nbsp;&nbsp;
				<input type="button" onclick="location.href='/index.php'" value="Cancel" />
			</td>
		</tr>
	</table>
</form>
</div>
</body>
</html>