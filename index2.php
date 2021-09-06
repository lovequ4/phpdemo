<?php
require_once 'db.php';
?>
<!doctype html>
<html>
    <style>
        body{ 
            max-width: max-content;
            margin: auto;
            font-size:30px;
            background:linear-gradient(to bottom, rgb(99, 120, 241) 10%, rgb(192, 147, 250) 60%);
            height: 100vh;
            display: -ms-grid;
            display: grid;
            place-content: center;
            -webkit-tap-highlight-color: transparent;
        }
        .meun li,.meun a{
            display: block;
            list-style: none;
            width: 100%;
            color: #000;
            text-decoration:none;
        }

    </style>    
    <body>

        <ul class="meun">
        <li><a href="select.php">SELECT</a></li>
        <br>
        <li><a href="insert.php">INSERT</a></li>
        <br>
        <li><a href="update.php">UPDATE</a></li>
        <br>
        <li><a href="delete.php">DELETE</a></li>
        </ul>    
    </body>    
</html>    
