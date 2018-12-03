
<?php
/**
 * Created by PhpStorm.
 * User: 宝宝天龙
 * Date: 2018/11/30
 * Time: 14:20
 */
header("Content-type: text/html; charset=utf-8");
$dbhost = 'localhost';
$dbuser = 'root';
$dbpassword = '';
$dbname = 'student_management';
$charName = 'utf-8';
$mysqlObj = new mysqli($dbhost, $dbuser, $dbpassword, $dbname);
mysqli_set_charset($mysqlObj,"utf8");

if(mysqli_connect_errno()){
    echo "connect failed", mysqli_connect_errno();
}
else {
    echo "connect success!", '</br>';
}


echo '中文';
if (!isset($_POST['name'])) {
    die('you don\'dont type anything man.');
}
if (!isset($_POST['password'])) {
    die('you don\'dont type anything man.');
}
$name_get = $_POST['name'];
$password_get = $_POST['password'];

$strsql = "SELECT * FROM student where Sno = $name_get";
$result = $mysqlObj->query($strsql);
if($result instanceof mysqli_result){
    echo "The following are the results", "<br/>";
    while($row = $result->fetch_object()){
        echo "田宝林", "<br/>";
        echo $row->Sno. $row->Sname. "<br/>";
    }
}
