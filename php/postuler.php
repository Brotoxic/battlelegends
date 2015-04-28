<?php

//Fetching Values from URL
$name=$_POST['name1'];
$email=$_POST['email1'];
$password=$_POST['password1'];
$contact=$_POST['contact1'];
//Insert query
$query = mysql_query("insert into form_element(name, email, password, contact) values ('$name2', '$email2', '$password2','$contact2')");
echo "Form Submitted Succesfully";
mysql_close($connection); // Connection Closed
