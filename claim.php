<?php
$room=$_POST['room'];
if(strlen($room)>20 or strlen($room)<2){
	$ms="Enter_valid_name";
	echo ("<SCRIPT LANGUAGE='JavaScript'>
        window.alert('$ms');
        window.location.href='http://localhost/code/chatroom';
        </SCRIPT>");
}
else if(!ctype_alnum($room)){
		$ms="Alphanumeric";
		echo ("<SCRIPT LANGUAGE='JavaScript'>
        window.alert('$ms');
        window.location.href='http://localhost/code/chatroom';
        </SCRIPT>");
}
else{
	include 'db_connect.php';
	$sql = "SELECT * from rooms where roomname='$room';";
	$result = mysqli_query($conn,$sql);
	if($result){
		if(mysqli_num_rows($result)>0){
		$ms="Choose Different Name";
		echo ("<SCRIPT LANGUAGE='JavaScript'>
        window.alert('$ms');
        window.location.href='http://localhost/code/chatroom';
        </SCRIPT>");
		}
		else{
			$sql="Insert into `rooms` (`roomname`,`stime`) Values ('$room',CURRENT_TIMESTAMP);";
			if(mysqli_query($conn,$sql)){
				$ms="Room Ready";
				echo ('<SCRIPT LANGUAGE="JavaScript">
		        window.alert("'.$ms.'");
		        window.location.href="http://localhost/code/chatroom/room.php?roomname='.$room. '"
		        </SCRIPT>');
			}
		}
	}
}
?>

