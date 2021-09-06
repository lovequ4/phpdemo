<?php
require_once 'db.php';
?>
<?php
    $id = $_POST['text1'];
    $name = $_POST['text2'];
    $phone = $_POST['text3'];
    $address = $_POST['text4'];
    $deletename=$_POST['deletename'];
    $sql = "DELETE FROM mytestdb WHERE  `mytestdb`.`name`='".$deletename."';";
            
    $result = mysqli_query($link,$sql);
   
    if(!(mysqli_query($link,$sql))){
        echo "<script>alert('刪除失敗');window.location.href='delete.php'</script>";
        }else{
        echo "<script>alert('刪除成功');window.location.href='delete.php'</script>";
        }
?>