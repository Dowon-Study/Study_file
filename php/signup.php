<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>icheoncp_cloud</title>
    <style>
        
        a:link {
            color: white; text-decoration: none;
        }
        a:visited {
            color: white; text-decoration: none;
        }
        a:hover {
            color: white; text-decoration: underline;
        }
        
        body{
            background-color: #6c6487;
            position: relative;
            
            
        }
        
        .box{
            background-color: #EEEEE0;
            margin: 7%;
            margin-left: 27%;
            height: 500px;
            box-shadow:;
            box-shadow: 10px 10px 30px black;
            position: relative;
            width: 700px;
            
        }
        
        .input_1{
            padding: 50px;
            
            
            
            
        }
        
        .header{
            color: #6c6487;
            padding-top: 50px;
            padding-left: 44%;
            
            
        }
        
        .name_1{
            margin-top: -10px;
            background-color: #2a2831;
            outline: 0;
            border: 0;
            padding-right: 10%;
            padding-top: 5px;
            padding-bottom: 5px;
            margin-left: 33%;
            color: white;
        }
        .hsnumber{
            margin-top: 10px;
            background-color: #2a2831;
            outline: 0;
            border: 0;
            padding-top: 5px;
            padding-bottom: 5px;
            margin-left: 33%;
            padding-right: 10%;
            color: white;
        }
        .phone{
            margin-top: 10px;
            background-color: #2a2831;
            outline: 0;
            border: 0;
            padding-top: 5px;
            padding-bottom: 5px;
            margin-left: 33%;
            padding-right: 10%;
            color: white;
        }
        .mail_1{
            margin-top: 10px;
            background-color: #2a2831;
            outline: 0;
            border: 0;
            padding-top: 5px;
            padding-bottom: 5px;
            margin-left: 33%;
            padding-right: 10%;
            color: white;
        }
        .password{
            margin-top: 10px;
            background-color: #2a2831;
            outline: 0;
            border: 0;
            padding-top: 5px;
            padding-bottom: 5px;
            margin-left: 33%;
            padding-right: 10%;
            color: white;
        }
        
        .phone_2{
            font-size: 12px;
            margin-top: 5px;
            margin-bottom: -0.5px;
            color: #6c6487;
            margin-left: 195px;
            
        }
        .but_1{
            background-color: #2a2831;
            color: white;
            margin-left: 38%;
            margin-top: 40px;
            padding-right: 50px;
            padding-left: 50px;
            padding-top: 5px;
            padding-bottom: 5px;
        }
    </style>
    
</head>
<body>
    <div class="box">
        <h2 class="header">회원가입</h2>
        <form method="post" action="test.php">
            <div class="input_1">
                <input name="name" class="name_1" placeholder="이름" type="text" ><br>
                <input name ="number" class="hsnumber" placeholder="학번"><br>
                <input name="phone" class="phone" placeholder="전화번호"><br>
                <p class="phone_2">-는 생략해주세요</p>
                <input name="mail" class="mail_1" placeholder="메일"><br>
                <input type="password" name="pass" class="password" placeholder="비밀번호"><br>
                <input type="submit" class="but_1" value="회원가입">
            </div>
        </form>
    </div>

</body>
</html>
