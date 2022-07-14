<?php
# FileName="Connection_php_mysql.htm"
# Type="MYSQL"
# HTTP="true"
$hostname_presenca_confirmada = "us-cdbr-east-06.cleardb.net";
$database_presenca_confirmada = "heroku_2d66b1516bbbe69";
$username_presenca_confirmada = "bcabb530e34fab";
$password_presenca_confirmada = "d727dec6";
$presenca_confirmada = mysql_pconnect($hostname_presenca_confirmada, $username_presenca_confirmada, $password_presenca_confirmada) or trigger_error(mysql_error(),E_USER_ERROR); 
?>