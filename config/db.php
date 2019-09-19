<?php
//create connection to a database
$conn = mysqli_connect('localhost','root','','music_db_1');
//verify connection
if (mysqli_connect_errno()){
    //connection failed
    echo 'Failed to connect to MySQL';
}else{
    echo 'connection successful';
}
?>