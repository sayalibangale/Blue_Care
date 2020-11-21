<?php
$conn = mysqli_connect("localhost:3307","root","root","wdl_project");

$postDetails = array();

$search_key = $_GET['term'];

//get rows query
$query = "SELECT * FROM beach where bname like '%".$search_key."%'";
$result = mysqli_query($conn, $query);

//number of rows
$rowCount = mysqli_num_rows($result);

if($rowCount > 0){
    while($row = mysqli_fetch_assoc($result)){
			$postDetails[] = $row['bname'];
	}
}
echo json_encode($postDetails);
?>
