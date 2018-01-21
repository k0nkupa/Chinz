<!DOCTYPE html>
<html>
<head>
	<title>上传身份证</title>

<!-- CSS -->
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" href="./css/styles.css">
<script type="text/javascript">
$(document).ready(function (e) {
	$("#ContactForm").on('submit',(function(e) {
		e.preventDefault();
		$.ajax({
        	url: "../resources/services/upload-mobile.php",
			type: "POST",
			data:  new FormData(this),
			contentType: false,
    	    cache: false,
			processData:false,
			success: function(data)
		    {
			$("#result").html('成功上传');
		    },
		  	error: function() 
	    	{
	    	} 	        
	   });
	}));
});
</script>
</head>
<body>
<div class="container">
  <div class="panel panel-danger">
    <div class="panel-heading"><h2>上传身份证</h2></div>
    <div class="panel-body">
      <form name="form" method="post" id="ContactForm" enctype="multipart/form-data">
	    	<input type="text" class="form-control" id="name" name="name" placeholder="名字" />

	    	<input type="text" class="form-control" id="idcard" name="idcard" placeholder="身份证号码" />

	    	<span>正面</span>
			<input type="file" id="myimage" name="front_image">
			<span>反面</span>
			<input type="file" id="myimage" name="back_image">
			<button type="submit" class="btn btn-success btn-lg btn-block upload" style="width: 150px;" id="post_ii" disabled="">确认提交</button>
	    </form>
	    <h3><div id="result"></div></h3>	
      <div>
      </div>
    </div>
  </div>
</div>
<script type="text/javascript" src="../resources/js/login.js"></script>
</body>
</html>