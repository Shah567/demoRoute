<html>
<head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">


		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>


		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
	<title>Show Record</title>
</head>
	<body>

		<div class="container">
  			<h1>User All record</h1>

  		<table class="table table-condensed">
		    <thead>
		      <tr>
		     	<th>User_Id</th>
		        <th>User Name</th>

		        <th>User Email</th>
		        <th>Mobile No</th>

		      </tr>

		      <tr>
		      	@foreach($users as $user)
		      		<th>{{$user->userid}}</th>
		      		<td>{{$user->name}}</td>

		      		<td>{{$user->email}}</td>
		      		<td>{{$user->mobile}}</td>


		      </tr>

		    </thead>
		     @endforeach
    	<tbody>

		<td><a href="{{Route('indexuser')}}"><button class="btn btn-success">CreatePost</button></a></td>
	</body>
</html>