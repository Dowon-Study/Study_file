<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <title>icheoncp_cloud</title>
        
        <style>
            body{
                background-color: #6c6487;
                position: relative;
                
            }
            .user{
                margin-top: -30px;
                padding-left: 110px;
                color: white;
                font-size: 70px;
                float: left;
                
            }
            
            .list{
                margin-right: 100px;
                margin-top: 70px;
                
            }
            
            .list ul li{
                text-align: right;
                list-style: none;
                float: right;
                padding-right: 10px;
                
                
            }
            
            .list li{
                color: white;
                margin-right: 10px;
                font-size: 20px;
                
            }
            
            
            
            a:link {
                color: white; text-decoration: none;
            }
            a:visited {
                color: white; text-decoration: none;
            }
            a:hover {
                color: white; text-decoration: underline;
            }
            
            .bar{
                color: white;
                margin-top: -30px;
                padding-left: 1100px;
                padding-right: 80px;
                width: 25%;
                float: right;
            }
            
            .user_name{
                color: white;
                padding-left: 200px;
                font-size: 20px;
                
                
            }
            
            
            .box{
                margin-top: 60px;
                margin-left: 80px;
                margin-right: 80px;
                background-color: #EEEEE0;
                box-shadow: 2px 2px 10px black;
                height: 500px;;
                
            }
            
            .box:hover .plus{
                display: block;
                background-color: #D6D6C9;
            }
            
             .plus{
                display: none;
                color: #222323;
                font-size: 50px;
                padding-top: 0px;
                padding-left: 0px; 
                padding-bottom: 200px;
                
            }
            
            .plus_1{
                font-size: 40px;
                margin-left: -65px;
                margin-top: -5px;
            }
            
            .input{
                padding: 0px;
                background-color: #D6D6C9;
                margin-right: 0px;
                margin-bottom: 0px;
                
            }
            
            .input_1{
                margin-left: 0px;
                padding: 0px;
                
            }
            
            .file_up{
                margin: -100px;
                padding: 10px;
                color: #D6D6C9;
                border-radius: 2px;
                display: inline-block;
                cursor: pointer;
                border-radius: .25em;
                border-bottom-color: fuchsia;
            }
            
        </style>
        
        <script>
        
        
        
        </script>
        
    </head>
    <body>
        <div class="user"><a href="../php_2/user_main.php"><i class="fa fa-user-circle-o" aria-hidden="true"></i></a></div>
        <div class="list">
            <ul>
                <li><a href="../php_2/user_main.php">등등..</a></li>
                <li><a href="../php_2/user_main.php">영어</a></li>
                <li><a href="../php_2/user_main.php">과학</a></li>
                <li><a href="../php_2/user_main.php">수학</a></li>
                <li><a href="../php_2/user_main.php">국어</a></li>
            </ul>
        </div>
        
        
        <div class="user_name">
            
            <?php
                
                session_start();
                
                $name = $_SESSION['name'];
                
                echo $name;
                
            ?>
        
        </div>
        <div class="bar"><hr></div>
        <div class="box">
            <div class="plus">
                <a href=
                   "http://127.0.0.1:8082/files/<?php session_start();echo $_SESSION['filename']; ?>">
                <?php session_start();echo $_SESSION['filename']; ?>
                </a>
                <div class="input_1">
                    <form  enctype='multipart/form-data' method="post" action="upload.php">
                        <center>
                                <div class="file_1">
                                    <input class="file_up" type="file" size="100" name="upload" value="파일선택">
                                </div>
                            <input type="submit" value="보내기">
                        </center>
                    </form>
                </div>
            </div>
        </div>
        <a href="logout.php">로그아웃</a>
    </body>
</html>