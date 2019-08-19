<? include_once('header.php'); ?>
<div id="content">
<form name="addMovie" method="post" action='insertMovie.php'>
	<table>
		<tr><th colspan='2'>Add a Movie</th></tr>
		<tr>
			<td>Title:</td>
			<td><input type="text" name="title"></td>
		</tr>
		<tr>
			<td>Genre:</td>
			<td><input type="text" name="genre"></td>
		</tr>
		<tr>
			<td>Release Date:</td>
			<td><input type="text" name="releaseDate"></td>
		</tr>
		<tr>
			<td>Director:</td>
			<td><input type="text" name="director"></td>
		</tr>
		<tr>
			<td>Studio:</td>
			<td><input type="text" name="studio"></td>
		</tr>
		<tr>
			<td colspan='2' align='center'>
				<input type='submit' name='newMovie' value='Submit'>
				&nbsp;&nbsp;&nbsp;
				<input type="button" onclick="location.href='/index.php'" value="Cancel" />
			</td>
		</tr>
	</table>
</form>
</div>
</body>
</html>