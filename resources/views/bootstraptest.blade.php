<html>
<head>
	<title>Bootstrap test</title>
</head>
<link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.min.css">
<style type="text/css">
.row{
	margin-bottom: 20px;
}
.row .row{
	margin-top: 10px;
	margin-bottom: 0;
}
[class*="col-md"]{
	padding-top: 15px;
	padding-bottom:  15px;
	background-color: #eee;
	border: 1px solid #ddd;
	background-color: rgba(86,61,124,15); 
	border: 1px solid rgba(86,61,124,15)
}

</style>
<body>
	<div class="table-responsive">
		<!-- in out of table table-responsivetable-striped table-hover table-bordered condensed -->
		<table class="table table-bordered">
			<thead>
				<tr class="active">
					<th> Form table title</th>
					<th>Form table title</th>
					<th>Form table title</th>
					<th>Form table title</th>
				</tr>
			</thead>
			<tbody>
				<tr class="success">
					<td>form table column</td>
					<td>form table column</td>
					<td>form table column</td>
					<td>form table column</td>
				</tr>
			</tbody>
			<tbody>
				<tr class="warning">
					<td>form table column</td>
					<td>form table column</td>
					<td>form table column</td>
					<td>form table column</td>
				</tr>
			</tbody>
			<tbody>
				<tr class="danger">
					<td>form table column</td>
					<td>form table column</td>
					<td>form table column</td>
					<td>form table column</td>
				</tr>
			</tbody>
			<tbody>
				<tr>
					<td>form table column</td>
					<td>form table column</td>
					<td>form table column</td>
					<td>form table column</td>
				</tr>
			</tbody>
			<tbody>
				<tr>
					<td>form table column</td>
					<td>form table column</td>
					<td>form table column</td>
					<td>form table column</td>
				</tr>
			</tbody>
		</table>
	</div>
	<div class="container">
		<!-- code -->
		For example <code>&lt;section&gt;</code> as inline;
		I want i can put <kbd>cmd</kbd> command
		<pre>
			Sample text here...;
		</pre>
		<var>x</var> = <var>y</var>+<var>z</var>
		<p><samp>Hello world</samp></p>
	</div>
	<div class="container">
		<div class="row">
			<div class="col-md-4">colmd-1</div>
			<div class="col-md-4">colmd-2</div>
			<div class="col-md-4">colmd-3</div>
			<div class="col-md-4">colmd-1</div>
			<div class="col-md-4">colmd-2</div>
			<div class="col-md-4">colmd-3</div>
		</div>
		<div class="row">
			<div class="col-md-4 col-md-offset-4">col-md-4 offset-1</div>
			<div class="col-md-2 ">col-md-3 col-md-9</div>
		</div>
	</div>
	<div class="container">
		<form role="form">
			<div class="form-group">
				<label>UserName:</label>
				<input type="email" class="form-control" placeholder="Enter email">
				<label>Password</label>
				<input type="password" class="form-control" placeholder="Enter password">
				<label>Choose file</label>
				<input type="file" class="form-control" >
				<hr>
				<label>button</label>
				<input type="button" class="btn" value="Button">
				<hr>
				<label>Submit</label>
				<input type="submit" class="form-control" value="submit">
			</div>
		</form>
		<form class="form-horizontal" role="form">
			<div class="form-group">
				<label class="col-sm-2">UserName</label>
				<input type="email" class="form-control col-sm-2" >

				<label class="col-sm-2">Email</label>
				<input type="email" class="form-control col-sm-4" placeholder="Enter email">
				<div>
					<label>
						<input type="checkbox">Remember password
					</label>
				</div>
			</div>
		</form>

	</div>s
</body>
</html>