function Chk_Valid(){
	
	var flag=true;

	var _userID=document.forms['reg_input']['userID'].value;
	var _userName=document.forms['reg_input']['userName'].value;
	var _userPassword =document.forms['reg_input']['userPassword'].value;
	var _cpass=document.forms['reg_input']['confirmPassword'].value;
	var _birthdate=document.forms['reg_input']['birthdate'].value;
	var _userDept =document.forms['reg_input']['userDept'].value;
	var _Hall=document.forms['reg_input']['Hall'].value;
	var _UserType=document.forms['reg_input']['UserType'].value;	

	if( _userID==null || _userID==''){
		document.getElementById('userid').className=('readalart');
		flag=false;
	}

	if(_userName=='' || _userName==null){
		document.getElementById('name').className=('readalart');
		flag=false;
	}

	if(_userPassword==''|| _userPassword==null || _cpass==''||_cpass==null || _userPassword!=_cpass){
		document.getElementById('password').className=('readalart');
		document.getElementById('cpassword').className=('readalart');
		flag=false;
	}

	if(_birthdate=='' || _birthdate==null){
		document.getElementById('bdate').className=('readalart');
		flag=false;
	}

	if(_userDept==''||_userDept==null){
		document.getElementById('userDept').className=('readalart');
		flag=false;
	}

	if(_Hall==''|| _Hall==null){
		document.getElementById('Hall').className=('readalart');
		flag=false;
	}

	if(_UserType=='' || _UserType==null){
		document.getElementById('UserType').className=('readalart');
		flag=false;
	}
	if(_UserType=="Student" && _Hall=="NULL"){
		document.getElementById('Hall').className=('readalart');
		flag=false;
	}

	return flag;
}

function Reform_id(){
	document.getElementById('userid').className=('reform');
}

function Refrom_name(){
	document.getElementById('name').className=('refrom');
}

function Reform_pass(){
	document.getElementById('password').className=('reform');
}

function Reform_cpass(){
	document.getElementById('cpassword').className=('reform');
}

function Reform_date(){
	document.getElementById('bdate').className=('reform');
}

function Reform_gender(){
	document.getElementById('Hall').className=('reform');
}

function Reform_mobile(){
	document.getElementById('userDept').className=('reform');
}

function Reform_UserType(){
	document.getElementById('UserType').className=('reform');
}

function Refrom_userDept(){
	document.getElementById('userDept').className=('reform');
}

function Chk_Valid_User(){
  var flag=true;
  var _userID=document.forms['userform']['userID'].value;
  var _userPassword =document.forms['userform']['userPassword'].value;
  var _UserType=document.forms['userform']['UserType'].value;
  if( _userID==null || _userID=='' || _userPassword==null || _userPassword=='' || _UserType==null || _UserType==''){
    flag=false;
    alert("Please Fill all Info");
  }
  return flag;
}

function Chk_Valid_Up(){
	var flag=true;
	var _userID=document.forms['uploadform']['givenid'].value;
	var _userPassword =document.forms['uploadform']['givenpass'].value;
	if( _userID==null || _userID=='' || _userPassword==null || _userPassword==''){
    flag=false;
    alert("Please Fill all Info");
  }
  return flag;
}

function Chk_Valid_Ad(){
	var flag=true;
	var _userID=document.forms['adminform']['givenid'].value;
	var _userPassword =document.forms['adminform']['givenpass'].value;
	if( _userID==null || _userID=='' || _userPassword==null || _userPassword==''){
    flag=false;
    alert("Please Fill all Info");
  }
  return flag;

}