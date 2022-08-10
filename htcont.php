<?php
$room = $_POST['room'];
include "db_connect.php";
$sql = "select msg,stime,ip from msgs where room = '$room'";

$html_content="";
$res='';
$result=mysqli_query($conn,$sql);
if(mysqli_num_rows($result)>0)
{
	while($row = mysqli_fetch_assoc($result))
	{
		$res = $res . '<div class="container">';
		$res = $res . $row['ip'];
		$res = $res . "says <p><b>" . $row['msg'];
		$res = $res . '</b></p><span class="time-right"><em>' . $row['stime'] . '</em></span></div>';
	}
}
echo $res;
?>
