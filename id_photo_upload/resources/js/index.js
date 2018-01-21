
$('#post_ii').on('click',function(){
    // Insert user to database
    $.ajax({
      type: "POST",
      url: "../resources/services/user-upload.php",
      data: $('#ContactForm').serialize(),
      success: function (response) {
        $("#result").html("验证成功!");
      }
    });
    // Save 1st photo
    $uploadCrop.croppie('result', {
      type: 'canvas',
      size: 'viewport'
    }).then(function (resp) {
      $.ajax({
        url: "../resources/services/ajaxpro-front.php",
        type: "POST",
        data: {"image":resp},
        success: function (data) {
          alert('success');
        }
      });
    });

    // Save 2nd photo
    $uploadCrop_i.croppie('result', {
      type: 'canvas',
      size: 'viewport'
    }).then(function (resp) {
      $.ajax({
        url: "../resources/services/ajaxpro-back.php",
        type: "POST",
        data: {"image":resp},
        success: function (data) {
          alert('success');
        }
      });
    });
  
  return false;
});

function buttonmargin(){
  var panelwidth = $(".panel").width();
  var buttonwidth = $("#post_ii").width();
  var margin = (panelwidth - buttonwidth)/2;
  $("#post_ii").css({"margin-left": margin, "margin-right":margin});  
};

$(function(){
    buttonmargin();
  });
$(window).resize(function(){
  buttonmargin();
});

if( /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) ) {
  window.location.href = "./index-mobile.php";

}