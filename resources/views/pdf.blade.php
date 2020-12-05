<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Generate PDF</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>
<body>
	
	<section id="pdf" style="padding:30px;">
		 <div class="row">
		 	<div class="col-md-12">
		 		<p class="text-right">@php echo date('m/d/Y'); @endphp</p>
		 		<h3 class="text-center" style="padding-bottom:50px;">Employee List</h3>
		 		<table class="table table-striped table-bordered">
		 			<thead>
		 				<tr>
		 					<th>ID</th>
		 					<th>Name</th>
		 					<th>Email</th>
		 					<th>Phone</th>
		 					<th>Sapary</th>
		 					<th>Department</th>
		 				</tr>
		 			</thead>
		 			<tbody>
		 			@foreach($employees as $employee)
		 				<tr>
		 					<td>Id</td>
		 					<td>{{$employee->name}}</td>
		 					<td>{{$employee->email}}</td>
		 					<td>{{$employee->phone}}</td>
		 					<td>{{$employee->salary}}</td>
		 					<td>{{$employee->department}}</td>
		 				</tr>
                    @endforeach
		 			</tbody>
		 		</table>
		 	</div>
		 </div>
	</section>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">	
</script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous">
</script>
</body>
</html>

