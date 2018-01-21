$uploadCrop = $('#crop-image-i').croppie({
    enableExif: true,
    viewport: {
        width: 350,
        height: 250,
        type: 'rectangle'
    },
    boundary: {
        width: 400,
        height: 300
    }
});
$uploadCrop_i = $('#crop-image-ii').croppie({
    enableExif: true,
    viewport: {
        width: 350,
        height: 250,
        type: 'rectangle'
    },
    boundary: {
        width: 400,
        height: 300
    }
});
// Crop handler
$('#upload').on('change', function () { 
  var reader = new FileReader();
    reader.onload = function (e) {
      $uploadCrop.croppie('bind', {
        url: e.target.result
      }).then(function(){
        console.log('jQuery bind complete');
      });
      
    }
    reader.readAsDataURL(this.files[0]);
});

$('#upload-i').on('change', function () { 
  var reader = new FileReader();
    reader.onload = function (e) {
      $uploadCrop_i.croppie('bind', {
        url: e.target.result
      }).then(function(){
        console.log('jQuery bind complete');
      });
    }
    reader.readAsDataURL(this.files[0]);
});

