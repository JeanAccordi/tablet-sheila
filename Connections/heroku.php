<?php
# FileName="Connection_php_mysql.htm"
# Type="MYSQL"
# HTTP="true"
$hostname_heroku = "us-cdbr-east-06.cleardb.net";
$database_heroku = "heroku_2d66b1516bbbe69";
$username_heroku = "bcabb530e34fab";
$password_heroku = "d727dec6";
$heroku = mysql_pconnect($hostname_heroku, $username_heroku, $password_heroku) or trigger_error(mysql_error(),E_USER_ERROR); 
?>