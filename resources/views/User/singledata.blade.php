<html>
<head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">


		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>


		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
	<title>Show Record</title>
</head>
	<body>

		<div class="container">
  			<h1>Single Posts</h1>

  		<table class="table table-condensed" align="center">
		    
				 
          <li>Post_Id  = {{$userposts->postid}}</li>
            <li>Title  = {{$userposts->title}}</li>
             <li>Description ={{$userposts->description}}</li>
              <li>file = {{$userposts->file}}</li>
    	    <tbody>
		</table>
        <td><a href="{{Route('showdata')}}"><button class="btn btn-success">All Post</button></a></td>
	</body>
</html>