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
    <form action="updateback.php" method="post">
    <body>
        <div id="inst">
         <h3>更新</h3>
                    <input Type="text" name="updatename" placeholder="輸入欲修改姓名" ><br><br>

                    <input type="submit" id="sbt" value="送出">
        </div> 
    </body>        
</html>    