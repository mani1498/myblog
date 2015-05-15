<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="no" />
<title>Web Services</title>	
<style>
.reveal-modal1 {
  width:200px;
  height:100px;
  position:absolute;
  display:none;
  top:39%;
  left:68%;
  margin:-50px 0 0 -100px;
}
</style>
<link rel="stylesheet" type="text/css" href="css/style.css" />	
<link rel="stylesheet" type="text/css" href="css/jquery.confirm/jquery.confirm.css" />
<link rel="stylesheet" type="text/css" href="css/validationEngine.jquery.css" />		
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/tabs.js"></script>
<script type="text/javascript" src="js/charts/highcharts.js"></script>
<script type="text/javascript" src="js/jquery.confirm.js"></script>
<script type="text/javascript" src="js/languages/jquery.validationEngine-en.js"></script>
<script type="text/javascript" src="js/jquery.validationEngine.js"></script>	

<script type="text/javascript">
jQuery(document).ready(function(){
		// binds form submission and fields to the validation engine
		jQuery("#myForm").validationEngine();
		jQuery("#myForm1").validationEngine('attach', {autoPositionUpdate : true});
});
	

function changeabs(i){
document.getElementById('popup_1').style.display='none';
document.getElementById('Service_Url_abs').value = i;
}



function changecm1(i){
document.getElementById('popup_1').style.display='none';
document.getElementById('Service_Url_cm1').value = i;
}


function changecm2(i){
document.getElementById('popup_1').style.display='none';
document.getElementById('Service_Url_cm2').value = i;
}


function show1(){
document.getElementById('popup_1').style.display='block';
}



</script>

</head>
<body>
    <div class="wrapper">
