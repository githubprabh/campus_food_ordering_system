<?php
session_start();
session_destroy();
header('location:log_sign.html');
exit;
?>
