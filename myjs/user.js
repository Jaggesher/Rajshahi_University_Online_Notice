$(document).ready(function(){

	$("#ShoHide").click(function(){
		$("#SlctID").slideToggle();
	});
	$("#CatID").change(function(){
		var SlItm=$('#CatID option:selected').val();
		if(SlItm=="Hall Related"){
			$("#FacID").attr('disabled','disabled');
			$("#DeptID").attr('disabled','disabled');
			$("#HalID").removeAttr('disabled');
		}
		else if(SlItm=="Faculty"){
			$("#FacID").removeAttr('disabled');
			$("#DeptID").removeAttr('disabled');
			$("#HalID").attr('disabled','disabled');
		}
		$("#UsrID").removeAttr('disabled');

	});

	$("#SowNTC").click(function(){
		var CatID=$('#CatID option:selected').val();
		var FacID=$('#FacID option:selected').val();
		var DeptID=$('#DeptID option:selected').val();
		var HalID=$('#HalID option:selected').val();
		var UsrID=$('#UsrID option:selected').val();

		if(CatID!="" && UsrID!=""){
			if(CatID=="General" ||CatID=="Administrative"){
				$.post("NtcContent.php",{CatID:CatID,FacID:FacID,DeptID:DeptID,HalID:HalID,UsrID:UsrID},function(data){
					$("#NtcCont").html(data);
				},'html');

			}
			else if(CatID=="Hall Related"){
				if(HalID!=""){
					$.post("NtcContent.php",{CatID:CatID,FacID:FacID,DeptID:DeptID,HalID:HalID,UsrID:UsrID},function(data){
					$("#NtcCont").html(data);
					},'html');
				}else{
					alert("Please Fill All Info");
				}

			}else if(CatID=="Faculty"){
				if(DeptID!="" && FacID!=""){
					$.post("NtcContent.php",{CatID:CatID,FacID:FacID,DeptID:DeptID,HalID:HalID,UsrID:UsrID},function(data){
					$("#NtcCont").html(data);
					},'html');
				}else{
					alert("Please Fill All Info");
				}
			}

		}else{
			alert("Please Fill All Info");
		}

	});
});

		// $("#FacUpID").removeAttr('disabled');
		// $(this).attr('disabled','disabled'); 