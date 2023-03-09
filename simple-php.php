<!DOCTYPE html>
<html lang="en">
<head>
	<title>Abdurahmon</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="style.css">
	<style type="text/css">
		@import url('https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900');
	*
	{
		margin: 0;
		padding: 0;
		font-family: 'Poppins' , sans-serif;
		box-sizing: border-box;
	}		
	body
	{
		background: radial-gradient(#93d9f9, #0c80b5);
		min-height: 100vh;
		overflow: hidden;
	}
	body::before
	{
		content: '';
		position: absolute;
		top: 0;
		width: 100%;
		left: 0;
		background: rgba(0,0,0,0.1);
	}
	section
	{
		display: flex;
		justify-content: center;
		align-items: center;
		min-height: 100vh;
		transform-style: preserve-3d;
		perspective: 1000px;
	}
	.quti
	{
		position: relative;
		width: 100%;
		transform-style: preserve-3d;
	}
	.YozuvQuti
	{
		position: relative;
		width: 100%;
		height: 400px;
	    transform-style: preserve-3d;
	    animation: animate 4s linear infinite;
	}
	@keyframes animate
	{
		0%
		{
			transform: rotateY(360deg);
		}
		100%
		{
			transform: rotateY(0deg);
		}
	}
	.soya
	{
		position: absolute;
		bottom: 0;
		left: 50%;
		transform: translateX(-50%);
		width: 100%;
		height: 50px;
		background: radial-gradient(rgba(0,0,0,0.2), transparent,transparent);
		filter: blur(5px);
		animation: animateShadow 2s linear infinite;
	}
	@keyframes animateShadow
	{
		0%,100%
		{
			transform: translateX(-50%) scale(1);
		}
		50%
		{
			transform: translateX(-50%) scale(0.2);
		}
	}
	.YozuvQuti .Yozuv
	{
		position: absolute;
		top: 0;
		left: 0;
		right: 0;
		bottom: 0;
		display: flex;
		justify-content: center;
		align-items: center;
		backface-visibility: hidden;
	}
	.YozuvQuti .Yozuv:nth-child(2)
	{
		transform: rotateY(180deg);
		text-shadow: 5px 5px 5px #00a699;
	}	
	.YozuvQuti .Yozuv h2
	{
		font-size: 9vw;
		color: #fff;
		text-shadow: 5px -5px 5px #00a699;
	}
	input
	{
		color: #00a699;
		width: 150px;
		margin-left: 10px;
	}
	p
	{
		margin-top: 5px;
		font-size: 25px;
	}
	button
	{
		margin-top: 5px;
		padding: 10px;
	}
	input:hover
	{
		box-shadow: 5px 5px 5px orange;
	}
	button:hover
	{
        box-shadow: 5px 5px 5px orange;
	}
	</style>
</head>
<body>
	<section>
		<form action="bb.php" method="POST" align="center">
   			<label>
   				<p>Ismingizni kiriting:</p>
   				<input type="text" name="name">
   			</label>
   			<label>
   				<p>Familyangizni kiriting:</p>
   				<input type="text" name="surname" style="color: #00a699;">
   			</label>
    		<label>
        		<button type="submit" name="submit">Yuborish</button>
    		</label>
		</form>
		<div class="quti">
			<div class="YozuvQuti">
				<div class="Yozuv">
					<h2><?php
                       if (isset($_POST['submit'])) {
                       	echo $_POST['name'];
                       }
					?></h2>
				</div>
				<div class="Yozuv">
					<h2><?php
                       if (isset($_POST['submit'])) {
                       	echo $_POST['surname'];
                       }
					?></h2>
				</div>
				<div class="soya"></div>
			</div>
		</div>
	</section>
</body>
</html>