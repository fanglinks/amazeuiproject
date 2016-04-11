<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<!-- Local bootstrap CSS & JS bs3-local -->
<link rel="stylesheet" media="screen" href="../assets/css/bootstrap.min.css">
<script src="../assets/js/jquery.min.js"></script>
<script src="../assets/js/bootstrap.min.js"></script>
<body>
	{{-- bs3-form --}}
	<form action="" method="POST" role="form">
		<legend>Form title</legend>
	
		<div class="form-group">
			<label for="">label</label>
			<input type="text" class="form-control" id="" placeholder="Input field">
		</div>
	
		
	
		<button type="submit" class="btn btn-primary">Submit</button>
	</form>

	{{-- bs3-form:inline --}}
	<form action="" method="POST" class="form-inline" role="form">
	
		<div class="form-group">
			<label class="sr-only" for="">label</label>
			<input type="email" class="form-control" id="" placeholder="Input field">
		</div>
	
		
	
		<button type="submit" class="btn btn-primary">Submit</button>
	</form>
	{{-- bs3-form:horizontal --}}
	<form action="" method="POST" class="form-horizontal" role="form">
			<div class="form-group">
				<legend>Form title</legend>
			</div>
	
			
	
			<div class="form-group">
				<div class="col-sm-10 col-sm-offset-2">
					<button type="submit" class="btn btn-primary">Submit</button>
				</div>
			</div>
	</form>
	{{-- bs3-table --}}
	<table class="table table-hover">
		<thead>
			<tr>
				<th></th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td></td>
			</tr>
		</tbody>
	</table>
	{{-- bs3-table:bordered --}}
	<table class="table table-bordered table-hover">
		<thead>
			<tr>
				<th></th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td></td>
			</tr>
		</tbody>
	</table>
	{{-- bs3-table:condensed --}}
	<table class="table table-condensed table-hover">
		<thead>
			<tr>
				<th></th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td></td>
			</tr>
		</tbody>
	</table>
	{{-- bs3-table:hover --}}
	<table class="table table-hover">
		<thead>
			<tr>
				<th></th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td></td>
			</tr>
		</tbody>
	</table>
	{{-- bs3-table:striped --}}
	<table class="table table-striped table-hover">
		<thead>
			<tr>
				<th></th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td></td>
			</tr>
		</tbody>
	</table>


	{{-- input Fields(Form fields) --}}
	{{-- bs3-input:text:h --}}
	<div class="form-group">
		<label for="input" class="col-sm-2 control-label">:</label>
		<div class="col-sm-10">
			<input type="text" name="" id="input" class="form-control" value="" required="required" pattern="" title="">
		</div>
	</div>

	{{-- bs3-input:hidden--}}
	<input type="hidden" name="" id="input" class="form-control" value="">
	{{-- Component Label bs3-input:label --}}
	<label for="input-id" class="col-sm-2"></label>
	{{-- Component Text Input bs3-input:text :h --}}
	<input type="text" name="" id="input" class="form-control" value="" required="required" pattern="" title="">
	<div class="form-group">
		<label for="input" class="col-sm-2 control-label">:</label>
		<div class="col-sm-10">
			<input type="text" name="" id="input" class="form-control" value="" required="required" pattern="" title="">
		</div>
	</div>
	{{-- bs3-input:email and bs3-input:email:h --}}
	<input type="email" name="" id="input" class="form-control" value="" required="required" title="">
	<div class="form-group">
		<label for="input" class="col-sm-2 control-label">:</label>
		<div class="col-sm-10">
			<input type="email" name="" id="input" class="form-control" value="" required="required" title="">
		</div>
	</div>
	{{-- bs3-input:password and bs3-input:password:h --}}
	<input type="password" name="" id="input" class="form-control" required="required" title="">
	<div class="form-group">
		<label for="input" class="col-sm-2 control-label">:</label>
		<div class="col-sm-10">
			<input type="password" name="" id="input" class="form-control" required="required" title="">
		</div>
	</div>
	{{-- bs3-input:hidden and bs3-input:hidden:h --}}
	<input type="hidden" name="" id="input" class="form-control" value="">
	{{-- bs3-input:url and bs3-input:url:h --}}
	<input type="url" name="" id="input" class="form-control" value="" required="required" title="">
	<div class="form-group">
		<label for="input" class="col-sm-2 control-label">:</label>
		<div class="col-sm-10">
			<input type="url" name="" id="input" class="form-control" value="" required="required" title="">
		</div>
	</div>
	{{-- bs3-input:color and bs3-input:color:h --}}
	<input type="color" name="" id="input" class="form-control" value="" required="required" title="">
	<div class="form-group">
		<label for="input" class="col-sm-2 control-label">:</label>
		<div class="col-sm-10">
			<input type="color" name="" id="input" class="form-control" value="" required="required" title="">
		</div>
	</div>
	{{-- bs3-input:number and bs3-input:number:h --}}
	<input type="number" name="" id="input" class="form-control" value="" min="{5"} max="" step="" required="required" title="">
	bs3-input:number:h


	{{-- Alerts Component --}}
	{{-- Alert Box bs3-alert --}}
	<div class="alert">
		<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
		<strong>Title!</strong> Alert body ...
	</div>
	{{-- Danger Alert Box bs3-alert:danger --}}
	<div class="alert alert-danger">
		<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
		<strong>Title!</strong> Alert body ...
	</div>
	{{-- Info Alert Box bs3-alert:info --}}
	<div class="alert alert-info">
		<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
		<strong>Title!</strong> Alert body ...
	</div>
	{{-- Success Alert Box bs3-alert:success --}}
	<div class="alert alert-success">
		<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
		<strong>Title!</strong> Alert body ...
	</div>
	{{-- Warning Alert Box bs3-alert:warning --}}
	<div class="alert alert-warning">
		<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
		<strong>Title!</strong> Alert body ...
	</div>
	{{-- Badges component Badge bs3-badge --}}
	<span class="badge">Badge</span>
	{{-- Breadcrumbs component bs3-breadcrumbs --}}
	<ol class="breadcrumb">
		<li>
			<a href="#">Home</a>
		</li>
		<li>
			<a href="#">Link</a>
		</li>
		<li class="active">Current</li>
	</ol>
	{{-- Carousel Component bs3-carousel --}}
	<div id="carousel-id" class="carousel slide" data-ride="carousel">
		<ol class="carousel-indicators">
			<li data-target="#carousel-id" data-slide-to="0" class=""></li>
			<li data-target="#carousel-id" data-slide-to="1" class=""></li>
			<li data-target="#carousel-id" data-slide-to="2" class="active"></li>
		</ol>
		<div class="carousel-inner">
			<div class="item">
				<img data-src="holder.js/900x500/auto/#777:#7a7a7a/text:First slide" alt="First slide" src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSI5MDAiIGhlaWdodD0iNTAwIj48cmVjdCB3aWR0aD0iOTAwIiBoZWlnaHQ9IjUwMCIgZmlsbD0iIzc3NyI+PC9yZWN0Pjx0ZXh0IHRleHQtYW5jaG9yPSJtaWRkbGUiIHg9IjQ1MCIgeT0iMjUwIiBzdHlsZT0iZmlsbDojN2E3YTdhO2ZvbnQtd2VpZ2h0OmJvbGQ7Zm9udC1zaXplOjU2cHg7Zm9udC1mYW1pbHk6QXJpYWwsSGVsdmV0aWNhLHNhbnMtc2VyaWY7ZG9taW5hbnQtYmFzZWxpbmU6Y2VudHJhbCI+Rmlyc3Qgc2xpZGU8L3RleHQ+PC9zdmc+">
				<div class="container">
					<div class="carousel-caption">
						<h1>Example headline.</h1>
						<p>Note: If you're viewing this page via a <code>file://</code> URL, the "next" and "previous" Glyphicon buttons on the left and right might not load/display properly due to web browser security rules.</p>
						<p><a class="btn btn-lg btn-primary" href="#" role="button">Sign up today</a></p>
					</div>
				</div>
			</div>
			<div class="item">
				<img data-src="holder.js/900x500/auto/#666:#6a6a6a/text:Second slide" alt="Second slide" src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSI5MDAiIGhlaWdodD0iNTAwIj48cmVjdCB3aWR0aD0iOTAwIiBoZWlnaHQ9IjUwMCIgZmlsbD0iIzY2NiI+PC9yZWN0Pjx0ZXh0IHRleHQtYW5jaG9yPSJtaWRkbGUiIHg9IjQ1MCIgeT0iMjUwIiBzdHlsZT0iZmlsbDojNmE2YTZhO2ZvbnQtd2VpZ2h0OmJvbGQ7Zm9udC1zaXplOjU2cHg7Zm9udC1mYW1pbHk6QXJpYWwsSGVsdmV0aWNhLHNhbnMtc2VyaWY7ZG9taW5hbnQtYmFzZWxpbmU6Y2VudHJhbCI+U2Vjb25kIHNsaWRlPC90ZXh0Pjwvc3ZnPg==">
				<div class="container">
					<div class="carousel-caption">
						<h1>Another example headline.</h1>
						<p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
						<p><a class="btn btn-lg btn-primary" href="#" role="button">Learn more</a></p>
					</div>
				</div>
			</div>
			<div class="item active">
				<img data-src="holder.js/900x500/auto/#555:#5a5a5a/text:Third slide" alt="Third slide" src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSI5MDAiIGhlaWdodD0iNTAwIj48cmVjdCB3aWR0aD0iOTAwIiBoZWlnaHQ9IjUwMCIgZmlsbD0iIzU1NSI+PC9yZWN0Pjx0ZXh0IHRleHQtYW5jaG9yPSJtaWRkbGUiIHg9IjQ1MCIgeT0iMjUwIiBzdHlsZT0iZmlsbDojNWE1YTVhO2ZvbnQtd2VpZ2h0OmJvbGQ7Zm9udC1zaXplOjU2cHg7Zm9udC1mYW1pbHk6QXJpYWwsSGVsdmV0aWNhLHNhbnMtc2VyaWY7ZG9taW5hbnQtYmFzZWxpbmU6Y2VudHJhbCI+VGhpcmQgc2xpZGU8L3RleHQ+PC9zdmc+">
				<div class="container">
					<div class="carousel-caption">
						<h1>One more for good measure.</h1>
						<p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
						<p><a class="btn btn-lg btn-primary" href="#" role="button">Browse gallery</a></p>
					</div>
				</div>
			</div>
		</div>
		<a class="left carousel-control" href="#carousel-id" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
		<a class="right carousel-control" href="#carousel-id" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
	</div>
	{{-- Button	bs3-button:  bs3-block-button: bs3-xs-button: bs3-sm-button: bs3-lg-button:        
		option have :danger default disabled info primary success warning --}}
		<button type="button" class="btn btn-default">button</button>
		<button type="button" class="btn btn-large btn-block btn-default">button</button>
		<button type="button" class="btn btn-xs btn-default">button</button>
		<button type="button" class="btn btn-sm btn-default">button</button>
		<button type="button" class="btn btn-lg btn-default">button</button>
		<button type="button" class="btn btn-danger">button</button>
		<button type="button" class="btn btn-default">button</button>
		<button type="button" class="btn btn-primary disabled">button</button>
		<button type="button" class="btn btn-info">button</button>
		<button type="button" class="btn btn-primary">button</button>
		<button type="button" class="btn btn-success">button</button>
		<button type="button" class="btn btn-warning">button</button>
	{{-- Grid Note: The bs3-col snippet can be used both on its own or with the addition of a colon followed by the number of columns 
		bs3-col:1-12          bs3-col:6   bs3-col:12  Grid Component Column bs3-col:1-12  Row  bs3-row  Container bs3-container   --}}
		<div class="col-xs- col-sm- col-md- col-lg-">
			
		</div>
		<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
			
		</div>
		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
			
		</div>
		<div class="row">
			
		</div>
		<div class="container-fluid">
			
		</div>
	{{-- Icons Component Glyphicon  Icon(Font Awesome) bs3-icon:glyphicon   bs3-icon --}}
		<span class="glyphicon glyphicon-icon" aria-hidden="true"></span>
		<i class="fa fa-name-shape-o-direction"></i>
	{{-- Images  Component Thumbnail  Thumbnail with content  bs3-thumbnail  bs3-thumbnail:content --}}
		<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
			<a href="#" class="thumbnail">
				<img data-src="#" alt="">
			</a>
		</div>
		<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
			<div class="thumbnail">
				<img data-src="#" alt="">
				<div class="caption">
					<h3>Title</h3>
					<p>
						...
					</p>
					<p>
						<a href="#" class="btn btn-primary">Action</a>
						<a href="#" class="btn btn-default">Action</a>
					</p>
				</div>
			</div>
		</div>
	{{-- Labels Component Label bs3-label Danger Label  bs3-label:danger  Info Label bs3-label:info  Success Label bs3-label:success  Warning Label  bs3-label:warning --}}
		<span class="label">Label</span>
		<span class="label label-danger">Label</span>
		<span class="label label-info">Label</span>
		<span class="label label-success">Label</span>
		<span class="label label-warning">Label</span>
	{{-- Pagination Component Pager  bs3-pager  Aligned Pager bs3-pager:aligned  Pagination  bs3-pagination  
	Pagination:small bs3-pagination:sm Pagination:large bs3-pagination:lg --}}
		<ul class="pager">
			<li><a href="#">Previous</a></li>
			<li><a href="#">Next</a></li>
		</ul>
		<ul class="pager">
			<li class="previous"><a href="#">&larr; Older</a></li>
			<li class="next"><a href="#">Newer &rarr;</a></li>
		</ul>
		<ul class="pagination">
			<li><a href="#">&laquo;</a></li>
			<li><a href="#">1</a></li>
			<li><a href="#">2</a></li>
			<li><a href="#">3</a></li>
			<li><a href="#">4</a></li>
			<li><a href="#">5</a></li>
			<li><a href="#">&raquo;</a></li>
		</ul>
		<ul class="pagination pagination-sm">
			<li><a href="#">&laquo;</a></li>
			<li><a href="#">1</a></li>
			<li><a href="#">2</a></li>
			<li><a href="#">3</a></li>
			<li><a href="#">4</a></li>
			<li><a href="#">5</a></li>
			<li><a href="#">&raquo;</a></li>
		</ul>
		<ul class="pagination pagination-lg">
			<li><a href="#">&laquo;</a></li>
			<li><a href="#">1</a></li>
			<li><a href="#">2</a></li>
			<li><a href="#">3</a></li>
			<li><a href="#">4</a></li>
			<li><a href="#">5</a></li>
			<li><a href="#">&raquo;</a></li>
		</ul>
		{{-- Navigation Compoenent --}}
		{{-- Navbar(basic navbar): bs3-navbar  Navbar Brand Element:  :brand  Navbar button: :button Navbar form: :form  
		Navbar Link: :link Navbar text::text  Navbar Fixed-Botton::fixed-bottom  Navbar Fixed-Top:fixed-top  Navbar Inverse::inverse
		Navbar Responsive::responsive  Navbar Static-Top::static-top   --}}
		<nav class="navbar navbar-default" role="navigation">
			<div class="container-fluid">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="#">Title</a>
				</div>
		
				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse navbar-ex1-collapse">
					<ul class="nav navbar-nav">
						<li class="active"><a href="#">Link</a></li>
						<li><a href="#">Link</a></li>
					</ul>
					<form class="navbar-form navbar-left" role="search">
						<div class="form-group">
							<input type="text" class="form-control" placeholder="Search">
						</div>
						<button type="submit" class="btn btn-default">Submit</button>
					</form>
					<ul class="nav navbar-nav navbar-right">
						<li><a href="#">Link</a></li>
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
							<ul class="dropdown-menu">
								<li><a href="#">Action</a></li>
								<li><a href="#">Another action</a></li>
								<li><a href="#">Something else here</a></li>
								<li><a href="#">Separated link</a></li>
							</ul>
						</li>
					</ul>
				</div><!-- /.navbar-collapse -->
			</div>
		</nav>
	{{-- Jumbotron Component  Jumbotron(ex Hero Unit) bs3-jumbotron --}}
	<div class="jumbotron">
		<div class="container">
			<h1>Hello, world!</h1>
			<p>Contents ...</p>
			<p>
				<a class="btn btn-primary btn-lg">Learn more</a>
			</p>
		</div>
	</div>
	{{-- Panels Component Panel bs3-panel Panel(contextual)  bs3-panel:{warning,success,info,danger,primary} 
		Panel(with heading) bs3-panel:heading Panel(with footer)  bs3-panel:footer--}}
		<div class="panel panel-default">
			<div class="panel-body">
				Basic panel example
			</div>
		</div>
		<div class="panel panel-warning">
			<div class="panel-heading">
				<h3 class="panel-title">Panel title</h3>
			</div>
			<div class="panel-body">
				Panel content
			</div>
		</div>
		<div class="panel panel-success">
			<div class="panel-heading">
				<h3 class="panel-title">Panel title</h3>
			</div>
			<div class="panel-body">
				Panel content
			</div>
		</div>
		<div class="panel panel-info">
			<div class="panel-heading">
				<h3 class="panel-title">Panel title</h3>
			</div>
			<div class="panel-body">
				Panel content
			</div>
		</div>
		<div class="panel panel-default">
			<div class="panel-heading">
				<h3 class="panel-title">Panel title</h3>
			</div>
			<div class="panel-body">
				Panel content
			</div>
		</div>
		<div class="panel panel-default">
			<div class="panel-body">
				Panel content
			</div>
			<div class="panel-footer">
				Panel footer
			</div>
		</div>
	{{-- List-groups Component List group bs3-list-group Listgroup(with badges)::badges List group(linked list)::linked  
		List group(with content) ::content --}}
		<ul class="list-group">
			<li class="list-group-item">Item 1</li>
			<li class="list-group-item">Item 2</li>
			<li class="list-group-item">Item 3</li>
		</ul>
		<ul class="list-group">
			<li class="list-group-item">
				<span class="badge">5</span>
				Item 1
			</li>
			<li class="list-group-item">
				<span class="badge">10</span>
				Item 2
			</li>
			<li class="list-group-item">
				<span class="badge">15</span>
				Item 3
			</li>
		</ul>
		<div class="list-group">
			<a href="#" class="list-group-item active">Item 1</a>
			<a href="#" class="list-group-item">Item 2</a>
			<a href="#" class="list-group-item">Item 3</a>
		</div>
		<div class="list-group">
			<a href="#" class="list-group-item active">
				<h4 class="list-group-item-heading">List group item heading</h4>
				<p class="list-group-item-text">Content goes here</p>
			</a>
		</div>

	{{-- Media Objects Component Media Object bs3-media-object --}}
		<div class="media">
			<a class="pull-left" href="#">
				<img class="media-object" src="#" alt="Image">
			</a>
			<div class="media-body">
				<h4 class="media-heading">Media heading</h4>
				<p>Text goes here...</p>
			</div>
		</div> 
	{{-- Clearfix Component bs3-clearfix --}}
		<div class="clearfix">
		
		</div>
	{{-- Wells Component Well bs3-well bs3-well:sm  bs3-well-lg --}}
		<div class="well">
			
		</div>
		<div class="well well-sm">
			
		</div>
		<div class="well well-lg">
			
		</div>
	{{-- Tabs Component Tabs pane bs3-tabs --}}
		<div role="tabpanel">
			<!-- Nav tabs -->
			<ul class="nav nav-tabs" role="tablist">
				<li role="presentation" class="active">
					<a href="#home" aria-controls="home" role="tab" data-toggle="tab">home</a>
				</li>
				<li role="presentation">
					<a href="#tab" aria-controls="tab" role="tab" data-toggle="tab">tab</a>
				</li>
			</ul>
		
			<!-- Tab panes -->
			<div class="tab-content">
				<div role="tabpanel" class="tab-pane active" id="home">...</div>
				<div role="tabpanel" class="tab-pane" id="tab">...</div>
			</div>
		</div>
	{{-- Input-groups Component Inputgroup bs3-input-group Input group(addon& text-field) ::addon:text  
		Input group(addon) bs3-input-group-addon  Input group(button) bs3-input-group-btn  
		Input group(text-field & btn) bs3-input-group:text:btn--}}
		<div class="input-group">
			
		</div>
		<div class="input-group">
			<div class="input-group-addon">$</div>
			<input type="text" class="form-control" id="exampleInputAmount" placeholder="Amount">
		</div>
		<div class="input-group-addon">$</div>
		<span class="input-group-btn">
			<button type="button" class="btn btn-default">Go!</button>
		</span>
		<div class="input-group">
			<input type="text" class="form-control" id="exampleInputAmount" placeholder="Search">
			<span class="input-group-btn">
				<button type="button" class="btn btn-default">Go!</button>
			</span>
		</div>


	




</body>
</html>