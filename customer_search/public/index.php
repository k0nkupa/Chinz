<!DOCTYPE html>
<html>
<head>
	<title>Search</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<meta charset="utf-8">

<link rel="stylesheet" type="text/css" href="./css/styles.css">
</head>
<body>
	<div class="container">
		<div class="panel panel-danger">
		  <div class="panel-heading">Search</div>
		  <div class="panel-body">
		  	<div class="search-col row">
		  		<div class="col-md-4"></div>
		  		<div class="col-md-4"><form name="form" method="post" id="ContactForm" enctype="multipart/form-data">
						<div class="input-group" style="margin-top: 20px;">
						    <input type="text" class="form-control" name="id_name" id="id_name" placeholder="Search for"/>
						    <!-- <input type="submit" class="search"/> -->
						    <span class="input-group-btn">
						    	<button  class="btn btn-success btn-block search" type="submit">Search</button>
						    </span>
						</div><!-- /input-group -->
					</form> </div>
		  		<div class="col-md-4"></div>
				  	 		
				

		  	</div><!-- search-col -->
		  	<div class="display">
		  		<div id="display_name"></div>
		  	</div><!-- display -->
		  </div><!-- /panel-body -->
		</div><!-- panel -->
	</div><!-- container -->
	<script type="text/javascript" src="../resources/search.js"></script>
</body>
</html>