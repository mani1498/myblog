<?php
/* Copyright © 2010 by Andrew Moore */
/* Licensing information appears at the end of this file. */

class Installer
{
  public $dbh;
  public function __construct() {
  }
  public function disconnect() {
    return mysql_close($this->dbh);
  }
  public function connect_to_database($sql){
	if ($sql['host'] == "localhost")
	$this->dbh = mysql_connect($sql['host'], $sql['login'], $sql['pass'])or die(mysql_error());
	mysql_select_db("myblog",$this->dbh) or die(mysql_error());
	return $this->dbh;
  }
  public function loginValidation($post){
	  if($post['email']!='' && $post['password']!='')
	  return true;
	  else
	  return false;
  }
  public function loginCheck($post){
	  
	  $query=mysql_query("SELECT * FROM admin WHERE email='$post[email]' && password='$post[password]'")or die(mysql_error());
	  $count=mysql_num_rows($query);
	  $row=mysql_fetch_row($query);
	  if($count==1){
		session_start();
        $_SESSION['email'] = $post['email'];
        $_SESSION['password'] = $post['mypassword'];
		return true;
	  }
	  else{
		  return false;
	  }
  }
}
?>
