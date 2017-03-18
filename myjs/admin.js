$(document).ready(function(){

	$("#ShoHide").click(function(){
		$("#SlctID").slideToggle();
	});

	$("#CatUpID").change(function(){
		var SlItm=$('#CatUpID option:selected').val();
		if(SlItm=="Hall Related"){
			$("#FacUpID").attr('disabled','disabled');
			$("#DeptUpID").attr('disabled','disabled');
			$("#HalUpID").removeAttr('disabled');
		}
		else if(SlItm=="Faculty"){
			$("#FacUpID").removeAttr('disabled');
			$("#DeptUpID").removeAttr('disabled');
			$("#HalUpID").attr('disabled','disabled');
		}
		$("#UsrUpID").removeAttr('disabled');
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

	$("#AdminMem").change(function(){
		var Type=$('#AdminMem option:selected').val();
		$.post("addMemCont.php",{Type:Type},function(data){
			$("#MemberContent").html(data);
		},'html');
	});
	
	$("#NtcCont").find("button").click(function(){
		var Tm=$(this).val();
		alert(Tm);
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

	$("#UpBtnID").click(function(){

		var CatUpID=$('#CatUpID option:selected').val();

		var WrtNtcID=$("#WrtNtcID").val();
		
		var ApDatID=$("#ApDatID").val();
		
		var ExpDatID=$("#ExpDatID").val();

		if(CatUpID!="" && WrtNtcID!="" && ApDatID!="" && ExpDatID!=""){

			var UsrUpID=$('#UsrUpID option:selected').val();
	
			if(UsrUpID!=""){
				if(CatUpID=="General"){
					$.post( 
		            "UpGeneral.php",
		            { WrtNtcID:WrtNtcID, ApDatID: ApDatID, ExpDatID: ExpDatID,UsrUpID:UsrUpID},
		            function(data) {
		               alert(data);
		            });
				}
				else if(CatUpID=="Administrative"){
					$.post( 
		            "UpAdminis.php",
		            { WrtNtcID:WrtNtcID, ApDatID: ApDatID, ExpDatID: ExpDatID,UsrUpID:UsrUpID},
		            function(data) {
		               alert(data);
		            });

				}else if(CatUpID=="Hall Related"){
					var HalUpID=$('#HalUpID option:selected').val();
					if(HalUpID!=""){
						$.post( 
			            "UpHall.php",
			            { WrtNtcID:WrtNtcID, ApDatID: ApDatID, ExpDatID: ExpDatID,UsrUpID:UsrUpID,HalUpID:HalUpID},
			            function(data) {
			               alert(data);
			            });
					}else{
						alert("Please Fill All Info.");
					}

				}else if(CatUpID=="Faculty"){
					var FacUpID=$('#FacUpID option:selected').val();
					var DeptUpID=$('#DeptUpID option:selected').val();
					if(FacUpID!="" && DeptUpID!=""){
						$.post( 
			            "upFac.php",
			            { WrtNtcID:WrtNtcID, ApDatID: ApDatID, ExpDatID: ExpDatID,UsrUpID:UsrUpID,FacUpID:FacUpID,DeptUpID:DeptUpID},
			            function(data) {
			               alert(data);
			            });

					}else{
						alert("Please Fill All Info.");
					}
				}
			}
			else{
				alert("Please Fill All Info.");
			}
		}else{
			alert("Please Fill All Info.");
		}
	});
});