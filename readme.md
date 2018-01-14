# class 25

### update table row using php mysqli_connect function

~~~php
$con = mysqli_connect('localhost', 'root', '', 'college');
$con->query("update teachers set name='Prof. Nuruddin' where id=1  ");
~~~


### delete table row using php mysqli_connect function

~~~php
$con->query("delete from teachers where id=1");
$con = mysqli_connect('localhost', 'root', '', 'college');
~~~