<?php
session_start();
unset ($SESSION['username']);
session_destroy();
header('Location: http://localhost/Proyecto2/index.html');
?>
