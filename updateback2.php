<?php
require_once 'db.php';
if (!$link) {
 die("連線失敗:".mysqli_connect_error());
}
$id = $_POST['text1'];
$name = $_POST['text2'];
$phone = $_POST['text3'];
$address = $_POST['text4'];
if($id == "" || $name == "" || $phone == "" || $address == "")
{
 echo "<script>alert('資訊不能為空！重新填寫');window.location.href='update.php'</script>";
}
 $sql="update mytestdb SET id='".$id."',name='".$name."',phone='".$phone."',address='".$address." 'WHERE  `mytestdb`.`id`='".$id."';";  //where 主key才能修改
 
 if(!(mysqli_query($link,$sql))){
    echo "<script>alert('修改失敗');window.location.href='update.php'</script>";
    }else{
    echo "<script>alert('修改成功');window.location.href='update.php'</script>";
    }
   
?>