<?php
// Session guard included at the top of every page under main/. If there is no
// logged-in member in the session, kick the visitor back out to the login form.
session_start();

if (!isset($_SESSION['SESS_MEMBER_ID']) || trim($_SESSION['SESS_MEMBER_ID']) == '') {
	header('location: ../index.php');
	exit();
}
?>
