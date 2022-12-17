<!DOCTYPE html>
<html>
<head>
	<title>My CV</title>
	<style>
		.head1 {
			font-size:40px;
			color:#910099;
			font-weight:bold;
            background-position: center;
            text-align: center;
		}
		.head2 {
			font-size:17px;
			margin-left:10px;
			margin-bottom:15px;
            text-align: center;
            color:#3b1953;
		}
		body {
			margin: 0 auto;
			background-position:center;
			background-size: contain;
		}
	
		.menu {
			position: sticky;
			top: 0;
			background-color: #229def;
			padding:10px 0px 10px 0px;
			color:rgb(192, 55, 87);
			margin: 0 auto;
			overflow: hidden;
		}
		.menu a {
			float: left;
			color: rgb(15, 228, 175);
			text-align: center;
			padding: 14px 16px;
			text-decoration: none;
			font-size: 20px;
		}
		.menu-log {
			right: auto;
			float: right;
		}
		footer {
			width: 100%;
			bottom: 0px;
			background-color: rgb(196, 18, 18);
			color: rgb(103, 181, 54);
			position: absolute;
			padding-top:20px;
			padding-bottom:50px;
			text-align:center;
			font-size:30px;
			font-weight:bold;
		}
		.body_sec {
			margin-left:20px;
		}
        .button1 {
  background-color: white;
  color: black;
  border: 2px solid #4CAF50;
}

.button1:hover {
  background-color: #4CAF50;
  color: white;
}

.button2 {
  background-color: white;
  color: black;
  border: 2px solid #008CBA;
}

.button2:hover {
  background-color: #008CBA;
  color: white;
}
	</style>
</head>

<body>
	
<?php 
if(isset($_GET['uname'])&&isset($_GET['email'])&&isset($_GET['message'])){
	$text = $_GET['uname']."\n".$_GET['email']."\n".$_GET['message'];
	$name = count(glob("*.txt"))+1;
	$filename = $name.".txt";
	$file = fopen($filename,"w");
	fwrite($file,$text);

	fclose($file);

}


?>
	<!-- Header Section -->
	<header>
		<div class="head1">CV</div>
		<div class="head2">Mohammad Amin Heidari</div>
	</header>
	
	<!-- Menu Navigation Bar -->
	<nav class="menu">
		<a href=".\About.php">About me</a>
		<a href=".\Skills.php">Skills</a>
		<a href=".\Achievments.php">Achievments</a>
		<div class="menu-log">
			<a href=".\Form.php">Contact Me</a>
		</div>
	</nav>
	
	<!-- Body section -->
	
    <form action="/form.php" >
        
      
        
          
          <input type="text" placeholder="Name and Last Name" name="uname" required>
          <br>
          
          <input type="email" placeholder="Enter email" name="email" required>
          <br>
          
          <input type="psw" placeholder="Enter Message" name="message" required>
      
          <input type="submit" action="submit" id="submit" onclick="tabe()" value = "submit">
      
          
      </form>

 

    <!-- Footer Section -->
	<footer>
        <a href="https://github.com/Mehradina/">Git Hub</a>
    </footer>
    <script src="Form.js"></script>
   
</body>
</html>
