<? 
include_once('header.php'); 

$titleSearch = $_POST['titleSearch'];

$title = $_GET['title'];

if(!empty($title)){
	$titleSearch = $title;
}
?>

<script>
	
	$(function() {
		$( "#title_Search" ).autocomplete({
      			source: function( request, response ) {
        				$.ajax({
          					url: "autocomplete.php",
          				   dataType: "json",
          					data: {
            						title: request.term
          						},
          					success: function( data ) {
            							response( data );
          						}
        					});
      				}
    		});		
	});
</script>

<div id="content">
<table cellspacing='10'>
	<tr bgcolor='#CCCCCC'>
		<th colspan='5'>Search Title</th>
	</tr>
	<tr bgcolor='#CCCCCC'>
				<td colspan='5' align='center'>
					<a href='addMovie.php'>Add Movie</a>
				</td>
				</tr>
	<tr>
	<form name='searchMovies' method='post' action='/index.php'>
		<td align='right'>Title:</td>
		<td><input type="text" name="title_Search" id="title_Search" <? if(!empty($title)){echo "value='$title'";} ?>></td>
		<td><input type='submit' name='titleSearch' value='Search'></td>
	</form>
	</tr>	
</table>

<br>

<table cellspacing='10'>
<tr>
	<td valign="top">
	<? if(!empty($titleSearch)){ ?>
		<table cellspacing='5'>
			<tr bgcolor='#CCCCCC'>
				<th colspan="4">
					Movies
				</th>
			</tr>
			
			<?
			$SQL = "select * from movies ";
			
			if(!empty($titleSearch)){
				$SQL .= " where title like '$titleSearch%'";
			}
			
			$SQL .= " order by title";
			
			$movieResult = getRows($SQL,$sqlconn);
			while($movieRow = array_shift($movieResult)){
				$movieTitle = $movieRow['title'];
				$movieGenre = $movieRow['genre'];
				$movieDate = $movieRow['releaseDate'];
				$movieDirector = $movieRow['director'];
				$movieStudio = $movieRow['studio'];
				
				if($color == "#FFFFFF"){
					$color="#EEEEEE";
				} else {
					$color="#FFFFFF";
				}
				
				echo "
				<tr bgcolor='$color'>
					<td>$movieTitle</td>	
					<td>$movieGenre</td>
					<td>$movieDate</td>
					<td>$movieDirector</td>
					<td>$movieStudio</td>					
					<td><a href='/lcam/editMovie.php?title=$movieTitle'>Edit</a></td>						
				</tr>
				";				
			}
			?>		
		</table>
	<? } ?>
	</td>	
</tr>
</table>
</div>

</body>
</html>
