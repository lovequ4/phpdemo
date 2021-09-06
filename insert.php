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
    <form action="insertback.php" method="post">
    <body>
        <div id="inst">
         <h3>新增</h3>
                    <input Type="text" name="text1" placeholder="編號"><br><br>
                    <input Type="text" name="text2" placeholder="姓名"><br><br>
                    <input Type="text" name="text3" placeholder="電話"><br><br>
                    <input Type="text" name="text4" placeholder="地址"><br><br>
                    <input type="submit" id="sbt" value="送出">
        </div> 
    </body>        
</html>    