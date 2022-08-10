<?php

$roomname=$_GET['roomname'];

include "db_connect.php";
$sql = "select * from rooms where roomname='$roomname'";
$result=mysqli_query($conn,$sql);
if($result){
		if(mysqli_num_rows($result)==0){
		$ms="Choose Different Name";
		echo ("<SCRIPT LANGUAGE='JavaScript'>
        window.alert('$ms');
        window.location.href='http://localhost/code/chatroom';
        </SCRIPT>");
		}
		else{

		}
		
}
else{
	echo "Error : ".mysqli_error($conn);
}
?>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="canonical" href="https://getbootstrap.com/docs/4.6/examples/product/">

    

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <!-- Favicons -->
<!-- <link rel="apple-touch-icon" href="/docs/4.6/assets/img/favicons/apple-touch-icon.png" sizes="180x180"> -->
<!-- <link rel="icon" href="/docs/4.6/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
<link rel="icon" href="/docs/4.6/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
<link rel="manifest" href="/docs/4.6/assets/img/favicons/manifest.json">
<link rel="mask-icon" href="/docs/4.6/assets/img/favicons/safari-pinned-tab.svg" color="#563d7c">
<link rel="icon" href="/docs/4.6/assets/img/favicons/favicon.ico">
<meta name="msapplication-config" content="/docs/4.6/assets/img/favicons/browserconfig.xml">
<meta name="theme-color" content="#563d7c"> -->


    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
      .leftmenu{
        @include 'product.css';
      }
    </style>

<style>
body {
  margin: 0 auto;
  max-width: 800px;
  padding: 0 20px;
}

.container {
  border: 2px solid #dedede;
  background-color: #f1f1f1;
  border-radius: 5px;
  padding: 10px;
  margin: 10px 0;
}

.darker {
  border-color: #ccc;
  background-color: #ddd;
}

.container::after {
  content: "";
  clear: both;
  display: table;
}

.container img {
  float: left;
  max-width: 60px;
  width: 100%;
  margin-right: 20px;
  border-radius: 50%;
}

.container img.right {
  float: right;
  margin-left: 20px;
  margin-right:0;
}

.time-right {
  float: right;
  color: #aaa;
}

.time-left {
  float: left;
  color: #999;
}
.anyclass{
  height: 350px;
  overflow: scroll;
}

</style>
</head>
<body>
    
<nav class="site-header sticky-top py-1 leftmenu">
  <div class="container d-flex flex-column flex-md-row justify-content-between">
    <a class="py-2" href="#" aria-label="Product">
      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="d-block mx-auto" role="img" viewBox="0 0 24 24" focusable="false"><title style="color: white">MyChatApp</title><circle cx="12" cy="12" r="10"/><path d="M14.31 8l5.74 9.94M9.69 8h11.48M7.38 12l5.74-9.94M9.69 16L3.95 6.06M14.31 16H2.83m13.79-4l-5.74 9.94"/></svg>
    </a>
    <div justify-content-right >
    <a class="py-2 d-none d-md-inline-block px-2" href="#">Home</a>
    <a class="py-2 d-none d-md-inline-block px-2" href="#">About</a>
    <a class="py-2 d-none d-md-inline-block px-2" href="#">Contact</a>
  </div>
  </div>
</nav>
<h2>Chat Messages = <?php echo $roomname?></h2>

<div class="container">
  <div class="anyclass">
  </div>
</div>

</div>

<input type="text" class="form-control" name="usermsg" id="usermsg" placeholder="Add message"><br>
<button class="btn btn-primary" name="submitmsg" id="submitmsg">Send</button>

<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
 <!--      <script>window.jQuery || document.write('<script src="/docs/4.6/assets/js/vendor/jquery.slim.min.js"><\/script>')</script><script src="/docs/4.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script> -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
      <script type="text/javascript">

setInterval(runFunction,1000);
function runFunction()
{
  $.post("htcont.php",{room:'<?php echo $roomname ?>'},
    function(data,status){
      document.getElementsByClassName('anyclass')[0].innerHTML = data;
    }
    )
}



        // Get the input field
var input = document.getElementById("usermsg");

input.addEventListener("keypress", function(event) {
  if (event.key === "Enter") {
    event.preventDefault();
    document.getElementById("submitmsg").click();
  }
});
        $("#submitmsg").click(function(){
          var clientmsg = $("#usermsg").val();
        $.post("postmsg.php",{text:clientmsg,rooms:'<?php echo $roomname ?>',ip:'<?php echo $_SERVER['REMOTE_ADDR']?>'},function(data,status){
          document.getElementsByClassName("anyclass")[0].innerHTML=data;
        });
        $("#usermsg").val("");
        return false;
        });
      </script>
</body>
</html>
