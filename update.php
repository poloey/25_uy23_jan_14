<?php 

$con = mysqli_connect('localhost', 'root', '', 'college');
$con->query("update teachers set name='Prof. Nuruddin' where id=1  ");

