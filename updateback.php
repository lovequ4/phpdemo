<?php
require_once 'db.php';
?>
<?php
    $updatename=$_POST['updatename'];
    $sql = "select * FROM `mytestdb` where name='".$updatename."';";
            
    $result = mysqli_query($link,$sql);
     
    $row = mysqli_fetch_array($result);
?>
<!doctype html>
<html>
    <style>
        body{ 
            max-width: max-content;
            margin: auto;
            font-size:20px;
            background:linear-gradient(to bottom, rgb(99, 120, 241) 10%, rgb(192, 147, 250) 60%);
            height: 100vh;
            display: -ms-grid;
            display: grid;
            place-content: center;
            -webkit-tap-highlight-color: transparent;
            color: #000;
        }
        #inst{
            margin-top: -50%;
            text-align: center;
        }
        #sbt{
            font-size:20px;
        }
        input[placeholder]{
            font-size:20px;
        }   
    </style>    
    <form action="updateback2.php" method="post">
    <body>
        <div id="inst">
         <h3>更新</h3>
                    <input Type="text" name="text1" placeholder="編號" value="<?php echo $row['id'] ?>"><br><br>
                    <input Type="text" name="text2" placeholder="姓名" value="<?php echo $row['name'] ?>"><br><br>
                    <input Type="text" name="text3" placeholder="電話" value="<?php echo $row['phone'] ?>"><br><br>
                    <input Type="text" name="text4" placeholder="地址" value="<?php echo $row['address'] ?>"><br><br>
                    <input type="submit" id="sbt" value="修改">
        </div> 
    </body>        
</html>    