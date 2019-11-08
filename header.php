<?php
extract($_POST);
if(!isset($rig)){
	header('location:loginpage.php');
}else{
	header('location:rigster.php');
}
?>