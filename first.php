<!DOCTYPE html>
<html>
<head>

	<style>
		body{
			margin: 0px;
			background-image: url(pexels-photo-597331.jpeg);
    /* Center and scale the image nicely */
    		background-position: center;
    		background-repeat: no-repeat;
    		background-size: cover;
    		padding : 150px 0px 0px 0px;
    
		}
h1{
	color: #d2e9e2;
	font-style: Risque;
}
h5{
	color: #b8a79e;
}
footer{
	text-align: center;
	color: white;
}

</style>
		
	<!-- </style> -->
	<title>HNG</title>
</head>
<body>
	<div class="all">
		<!-- <h2>Welcome to my page</h2> -->
		<div class="center">
			<center>	
				<h1>HNG INTERNSHIP 4</h1>
				<h5>Date </h5>
				<h1>
				<?php  echo date('D-F-Y'); 
				?>
				</h1>
				<h5>Time</h5>
				<h1>
					<?php echo date(' h:i:s') ?>
				</h1>
			</center>
		</div>
		<footer>
			 &copy copyright All Right reserved. Salami Saad
		</footer>
	</div>
<!-- <nav>
	Navbar 
</nav> -->

</body>
</html>