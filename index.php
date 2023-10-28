<?php
session_start();
include 'base/conn.php';

$sw_default = isset($_GET['fungsi']) ? $_GET['fungsi'] : null;
switch ($sw_default) {
  case 'signup':
    include 'app/fungsi/signup.php';
    break;

  default:
    include 'app/default.php';
    break;
}
?>