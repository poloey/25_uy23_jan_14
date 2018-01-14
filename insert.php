<?php 
$con = mysqli_connect('localhost', 'root', '', 'college');
$con->query('insert into teachers(name,email) values("nuruddin", "nuruddin@gmail.com")');
$con->query('insert into teachers(name,email) values("arafat", "arafat@gmail.com")');
$con->query('insert into teachers(name,email) values("roven", "roven@gmail.com")');
$con->query('insert into teachers(name,email) values("shamima", "shamima@gmail.com")');
$con->query('insert into teachers(name,email) values("farhad", "farhad@gmail.com")');
echo 'data inserted successfully';

