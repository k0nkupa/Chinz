function idvalidate() {
	$.ajax({
		type: "POST",
		url: "../resources/services/idvalidate.php",
		data: $('#ContactForm').serialize(),
		success: function (response) {
			if(response == '1'){
				$("#result").html("号码正确");
				// document.getElementById("post_ii").disabled = false;
			}else{
				$("#result").html("请输入正确的号码");
			}
		}
	});
};

$('#ContactForm').on('change',function(){
	if(!$('#name').val() && !$('#idcard').val()){
		$('#result').html('请输入全部您的个人信息');
	}else if($('#idcard').val()){
		if(!$('#name').val()){
			$("#result").html("请输入");
		}else{
			idvalidate();
			document.getElementById("post_ii").disabled = false;
				
		}
	}
	return false;
});

