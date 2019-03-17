<?php
# FileName="Connection_php_mysql.htm"
# Type="MYSQL"
# HTTP="true"
$hostname_student_information = "localhost";
$database_student_information = "sports";
$username_student_information = "root";
$password_student_information = "";
$student_information = mysql_pconnect($hostname_student_information, $username_student_information, $password_student_information) or trigger_error(mysql_error(),E_USER_ERROR); 
?>