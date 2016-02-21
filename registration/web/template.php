<?php
session_start();

?>

<html>
    <head>
        <meta charset="UTF-8">
        <title><?php echo $title ?></title>
      <!--  <link rel="stylesheet" type="text/css" href="style/style.css"/>
		<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
		<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
      -->
      	<link rel="stylesheet" type="text/css" href="style/style.css"/>
		<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
		<script src="bootstrap/js/bootstrap.min.js"></script>
		
		

         
	</head>
<body >
       
    <div id="wrapper">
     	<div id="myCarousel" class="carousel slide" data-ride="carousel">
  		<!-- Indicators -->
    	<ol class="carousel-indicators">
 			<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    		<li data-target="#myCarousel" data-slide-to="1"></li>
    		<li data-target="#myCarousel" data-slide-to="2"></li>
   			<li data-target="#myCarousel" data-slide-to="3"></li>
 		 </ol>

  		<!-- Wrapper for slides -->
  		<div class="carousel-inner" role="listbox">
   			<div class="item active">
   				<img src="one.jpg" alt="one">
			</div>

   		 	<div class="item">
     			<img src="two.jpg" alt="two">
    		</div>
    		<div class="item">
    	 		<img src="three.jpg" alt="three">
    		</div>
		</div>

 		 <!-- Left and right controls -->
		 <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
		    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
		    <span class="sr-only">Previous</span>
		 </a>
		 <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
		    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
		    <span class="sr-only">Next</span>
		 </a>
		</div>
		</br>

		<nav class="navbar navbar-inverse">
		  <div class="container-fluid">
		    <div class="navbar-header">
		     	<a class="navbar-brand" href="#"><?php echo $_SESSION["username"];?></a>
		    </div>
		    <ul class="nav navbar-nav">
			    <li><a href="http://localhost:85/theme/registration/web/home.php">Home</a></li>
  				<li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Page 1 <span class="caret"></span></a>
		        	<ul class="dropdown-menu">
			          <li><a href="#">Page 1-1</a></li>
			          <li><a href="#">Page 1-2</a></li>
			          <li><a href="#">Page 1-3</a></li>
		        	</ul>
		      	</li>
		      	<li><a href="announcement.php">Announcements</a></li>
		      	<li><a href="#">Page 3</a></li>
		    </ul>
		    <ul class="nav navbar-nav navbar-right">
		      	
		      	<li><a href="http://localhost:85/theme/registration/web/logout.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
		    </ul>
		  </div>
		</nav>
        <div id="content-area">
        	<?php echo $str1;
        		  echo $content;?>
        		 
        		  <div class="container">
        		  <?php foreach ($bilal as $value) {
                   echo "$value <br>";}?>
        	</div>
        	
        </div>
        <div id="sidebar"></div>
        
        <footer>
        <div class="footer">
        	<p>all right reserved are sjdkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkddjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjj</p>
        	</br><p>all right reserved are sjdkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkddjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjj</p>
        	</div>
        </footer>
    </div>
</body>
</html>
