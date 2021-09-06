<?php
require_once 'db.php';
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
            margin-top: -20%;
            text-align: center;
        }
        #sbt{
            font-size:20px;
        }
        input[placeholder]{
            font-size:20px;
        } 
        #search td{
            
            width:250px;
        }  
    </style>    
    <form action="deleteback.php" method="post">
    <body>
        <div id="inst">
         <h3>刪除</h3>
                    <input Type="text" name="deletename" placeholder="輸入欲刪除姓名" ><br><br>

                    <input type="submit" id="sbt" value="送出">
        </div> 
        <p>資料列表</p>
        <div id="search"> <?php
            $sql = "select `id`, `name` ,`phone`,`address`FROM `mytestdb`;";
            
            $result = mysqli_query($link,$sql); 
            
            echo"<table border=1>";
            echo "<tr><td>ID<td/>NAME<td/>PHONE<td/>ADDRESS<tr/>";       
            
            if ($result) {// 如果有資料
                // mysqli_num_rows方法可以回傳我們結果總共有幾筆資料
                if (mysqli_num_rows($result)>0) {
                    // 取得大於0代表有資料
                    // while迴圈會根據資料數量，決定跑的次數
                    // mysqli_fetch_array方法可取得一筆值
                    while ($row = mysqli_fetch_array($result)) {
                        echo "<tr><td>$row[0]<td/>$row[1]<td/>$row[2]<td/>$row[3]<tr/>";
                    }
                }
            }            
         ?>
         </div>
           
    </body>        
</html>    