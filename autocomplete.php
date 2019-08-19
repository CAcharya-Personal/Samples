<?
$title = trim(strip_tags($_GET['title']));
$returnArray = array();
$returnJsonArray = array();

$sql = "select distinct title from movie 
	where title like '$term%'";

$result = getRows($sql,$sqlconn);
while($row = array_shift($result)) {
	$returnArray['value'] = $row['title'];
	$returnArray['data'] = $row['title'];
	array_push($returnJsonArray,$returnArray);
}

header('Content-Type: application/json');
echo json_encode($returnJsonArray);
?>
