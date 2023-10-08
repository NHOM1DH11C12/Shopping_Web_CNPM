<?php
session_start();
session_destroy();
header('Location: ..\..\public_user\index_user.php');
?>