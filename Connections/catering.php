<?php
# FileName="Connection_php_mysql.htm"
# Type="MYSQL"
# HTTP="true"
$hostname_catering = "localhost";
$database_catering = "catering";
$username_catering = "root";
$password_catering = "";
$catering = mysql_pconnect($hostname_catering, $username_catering, $password_catering) or trigger_error(mysql_error(),E_USER_ERROR); 
?>