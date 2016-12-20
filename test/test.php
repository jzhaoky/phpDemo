<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>php demo</title>
</head>
<body>

<form action="../controller/userController.php" method="post">
用户名：<input name="userName"><br/><br/>
密&nbsp;码：<input type="password" /><br/><br/>
    <input type="submit" value="提交">
</form>
<?php
$array = array("name"=>"zky","sex"=>"男","age"=>"25");
foreach($array as $k=>$v){
    echo $k."=>".$v."<br />";
}
?>
</body>
</html>
