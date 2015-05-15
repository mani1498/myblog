<?php
require_once "sqlconf.php";
if(isset($_POST['submit'])){
	$loginVal=$installer->loginValidation($_POST);
	if(isset($loginVal))
	$loginVal=$installer->loginCheck($_POST);
	if($loginVal && isset($_SESSION))
	header("Location: myaccount.php");
	else
	echo 'Invalid email or password';
}

?>
<div class="contenttopbg"></div>
<div class="contentcenbg">
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
<label><span style="color:red; font-size:14px; font-weight:bold">*</span> UserName </label>
<input type="text" name="email" id="admin_email"  style="width:60%"/><br/> <br/>
<label>Password</label>
<input type="text" name="password" id="password"  style="width:60%"/><br/> <br/>
<input type="submit" value="Submit" name="submit" /><br/>
</form>
</div>
<div class="contentbotbg"></div>
