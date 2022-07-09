<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>404 Page Not Found</title> 
<style type="text/css">
	@import url('https://fonts.googleapis.com/css?family=Roboto:400,500');
	body{
		padding: 0;
		margin:0;
		font-family: 'Roboto', sans-serif; 
		color: #454646;
	}
	h1{
		margin:10px 0 5px 0;
		font-weight: 500;
		font-size: 36px;
	}
	img{
		max-width: 100%;
	}
	.content{
		position: absolute;
		top: 80px;
		width: 100%;
		text-align: center;
	}
	.content p{
		margin-top: 0;
	}
	.btn-primary {
    color: #fff;
    background-color: #1b6a95;
    border-color: #1b6a95;
}
.btn {
    display: inline-block;
    font-weight: 400;
    text-align: center;
    white-space: nowrap;
    vertical-align: middle;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
    border: 1px solid transparent;
    padding: 0.5rem 1rem;
    font-size: 1.2rem;
    line-height: 1.5;
    border-radius: 0.25rem;
    transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
}
a{
	text-decoration: none;
}
.logo_symbol{
	margin-bottom: 10px;
}
@media (max-width: 767px){
	.content{
		position: relative;
		top: 20px;
	}
	h1{font-size: 26px;}
	.btn {
		font-size: 1rem;
	}
}
</style>
</head>
<body>
	<div id="container" class="bg_404 container-fluid">
		<div class="row">
			<div class="col-lg-12"> 
				<div> 
					<img src="assets/images/404-banner.jpg" alt="">
				</div>
				<div class="content">
					<div class="logo_symbol"> 
						<img src="assets/images/loader.png" alt="" style="max-width: 80px;">
					</div>
					<img src="assets/images/logo.png" alt="">			
					<h1><?php echo $heading; ?></h1>
					<?php echo $message; ?>
					<a href="https://www.adventourist.in" class="btn btn-primary">
					Go to Home</a>
				</div> 
			</div>
		</div>
	</div>
</body>
</html>