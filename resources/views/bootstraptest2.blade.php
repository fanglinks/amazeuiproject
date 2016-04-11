<html>
<head>
	<title>Bootstrap compent</title>
</head>
<link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.min.css">
<body>
	<div class="container">
		<div class="input-group input-group-lg">
			<span class="input-group-addon">@</span>
			<input type="text" class="form-control"  placeholder="UserName">


		</div>
		<div class="input-group">
			<input type="text" class="form-control">
			<span class="input-group-addon">.00</span>
		</div>

		<div class="input-group" >
			<span class="input-group-addon">@</span>
			<input type="text" class="form-control">
			<span class="input-group-addon">.00</span>
		</div>
		<div class="form-group">
		<div class="input-group-btn">
			<button type="button" class="btn btn-default dropdown-toggle"  data-toggle="dropdown"> Action<span class="caret"></span></button>
			<ul class="dropdown-menu" role="menu">
				<li><a href="#">Hello</a></li>
				<li><a href="#">Hello world</a></li>
				<li><a href="#">Hello JINX</a></li>
				<li><a href="#">Hello torromrow</a></li>
			</ul>
		<input type="text" class="form-control">
		</div>
		</div>
	</div>
	<hr>
	<div class="container">
		<ul id="mytab" class="nav nav-pills nav-justified" role="tablist">
			<li role="presentation" class="active"><a href="#">home</a></li>
			<li role="presentation"><a href="#">Hello</a></li>
			<li role="presentation"><a href="#">World</a></li>
			<li role="presentation"><a href="#">JINX</a></li>
		
			<li role="presentation" class="dropdown"><a href="" class="dropdown-toggle" data-toogle="dropdown">
			OK<span class="caret"></span></a>
				<ul class="dropdown-menu" role="menu">
					<li role="presentation"><a role="menuitem" tabindex="-1" href="">Hello Today</a></li>
					<li role="presentation"><a role="menuitem" tabindex="-1" href="">Hello Tonight</a></li>
					<li role="presentation"><a role="menuitem" tabindex="-1" href="">Now or nerver.</a></li>
					<li role="presentation"><a role="menuitem" tabindex="-1" href="">Yestoday you say tomorrow</a></li>
				</ul>
			</li>
		
		</ul>
	</div>
<script type="text/javascript" src="../assets/js/jquery.min.js"></script>
<script type="text/javascript" src="../assets/js/bootstrap.min.js"></script>
</body>
</html>