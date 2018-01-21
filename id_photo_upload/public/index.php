<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="http://demo.itsolutionstuff.com/plugin/croppie.js"></script>
  <link rel="stylesheet" href="http://demo.itsolutionstuff.com/plugin/croppie.css">
  <link rel="stylesheet" type="text/css" href="./css/styles.css">
</head>
<body >
<div class="container">
  <div class="panel panel-danger">
    <div class="panel-heading"><h2>上传身份证</h2></div>
    <div class="panel-body">
      <div class="log-in">
        <?php include 'login.php' ?>  
      </div>
      <div class="image-upload">
        <?php include 'photo.php' ?>
      </div>
      <div>
        <button class="btn btn-success btn-lg btn-block upload" style="width: 150px;" id="post_ii" disabled>确认提交</button>
      </div>
    </div>
  </div>
</div>
<script type="text/javascript" src="../resources/js/index.js"></script>
</body>
</html>