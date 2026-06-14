<?php
// Authenticates the credentials posted from the login form (index.php).
// On success I drop the user on their role dashboard (main/index.php); on any
// failure I bounce them back to the form so they can try again.

session_start();

require_once('connect.php');

// Collect validation errors so index.php can render them above the form.
$errmsg_arr = array();
$errflag = false;

$login    = isset($_POST['username']) ? trim($_POST['username']) : '';
$password = isset($_POST['password']) ? trim($_POST['password']) : '';

if ($login === '') {
	$errmsg_arr[] = 'Username missing';
	$errflag = true;
}
if ($password === '') {
	$errmsg_arr[] = 'Password missing';
	$errflag = true;
}

// If anything is missing, stash the messages in the session and return to the form.
if ($errflag) {
	$_SESSION['ERRMSG_ARR'] = $errmsg_arr;
	session_write_close();
	header('location: index.php');
	exit();
}

// Look the user up with a bound query so the submitted values can never be
// interpreted as SQL.
$qry = $db->prepare('SELECT * FROM user WHERE username = :username AND password = :password');
$qry->bindParam(':username', $login);
$qry->bindParam(':password', $password);
$qry->execute();

$member = $qry->fetch(PDO::FETCH_ASSOC);

if ($member) {
	// Credentials matched: refresh the session id and remember who is logged in.
	// SESS_LAST_NAME holds the role (Administrator / Cashier / Customer), which
	// the dashboards key off to decide what to show.
	session_regenerate_id();
	$_SESSION['SESS_MEMBER_ID']  = $member['id'];
	$_SESSION['SESS_FIRST_NAME'] = $member['name'];
	$_SESSION['SESS_LAST_NAME']  = $member['position'];
	session_write_close();
	header('location: main/index.php');
	exit();
}

// No match: send them back to the login form.
header('location: index.php');
exit();
?>
