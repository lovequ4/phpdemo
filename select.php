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
        #search{
            margin-top: -10%;
            text-align: center;
            
        }
        #search td{
            width:250px;
        }
        h3{
            margin-top: -20%;
            text-align:center;
        }   
    </style>    
    <head>
        <h3>查詢結果</h3>
    </head>    
    <body>
        
        <div id="search">
         
         <?php
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