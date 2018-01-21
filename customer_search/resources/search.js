$('.search').on('click', function(){
	if (!$('#id_name').val()){
		alert('请输入名字或者身份证号码！');
	}else{
		$.ajax({
		type: 'POST',
		url:'../resources/search.php',
		data: $('#ContactForm').serialize(),
		success: function(data){
			$('#display_name').html(data);
		}
	});
	}
	// $.ajax({
	// 	type: 'POST',
	// 	url: '../resources/display.php',
	// 	dataType: "HTML",
	// 	success: function(data){
	// 		jQuery('#display_image').append(data);
	// 	}
	// });

	return false;
});