<!-- Crop handler 1 -->
<div>
<div class="row">

  <div class="col-12 col-md-8">
  	<div id="crop-image-i"></div>
  </div>

  <div class="col-6 col-md-4">
    <div>
      <form name="form" method="post" enctype="multipart/form-data">
        <h3 id="label">正面</h3>
        <input type="file" id="upload" name="front_image">
      </form> 
    </div>
  </div>
  
</div>
<!-- Crop handler 2 -->
<div class="row">

  <div class="col-12 col-md-8">
      <div id="crop-image-ii"></div>
  </div>

  <div class="col-6 col-md-4">
  	<div>
  		<form name="form" method="post" enctype="multipart/form-data">
	    	<h3 id="label">反面</h3>
			<input type="file" id="upload-i" name="back_image">
		</form>	
  	</div>
  	
  </div>
</div>
<!-- <button class="btn btn-success btn-lg btn-block upload" style="width: 50%;" >确认提交</button> -->
</div>
<script type="text/javascript" src="../resources/js/photo.js"></script>