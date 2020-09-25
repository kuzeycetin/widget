<?php
function logout(){
	unset($_SESSION['username']);
	unset($_SESSION['success']);
	header('Location:server.php');
}
logout();
?>