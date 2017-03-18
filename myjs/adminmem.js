$(document).ready(function(){
	$("#TempContent").find(".btndel").click(function () {
		var Tm=$(this).val();
		$.post("del_mem.php",{Tm:Tm},function(data){
			if(data=="OK"){
				var Type=$('#AdminMem option:selected').val();
				$.post("addMemCont.php",{Type:Type},function(data){
					$("#MemberContent").html(data);
				},'html');

			}else{
				alert(data);
			}
		});

	});

	$("#TempContent").find(".btnac").click(function () {
		var Tm=$(this).val();
		$.post("stus_change.php",{Tm:Tm},function(data){
			if(data=="OK"){
				var Type=$('#AdminMem option:selected').val();
				$.post("addMemCont.php",{Type:Type},function(data){
					$("#MemberContent").html(data);
				},'html');

			}else{
				alert(data);
			}
		});
	});
});