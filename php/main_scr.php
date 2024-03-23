<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>icheoncp_cloud</title>
        <style>
            body{
                background-color: #6c6487;
            }
            
            .log_box{
                background-color: #EEEEE0;
                margin: 7%;
                margin-left: 27%;
                height: 500px; 
                box-shadow:;
                box-shadow: 10px 10px 30px black;
                position: relative;
                width: 700px;
            }
            
            .header{
                color: #56506C;
                padding-top: 40px;
                font-size: 30px;
                
            }
            .id{
                margin-top: 20px;
                padding: 15px;
                padding-right: 100px;
                background-color: #2a2831;
                outline-color: #2a2831;
                border: 0;
                outline: 0;
                color: white;
            }
            .pass{
                margin-top: 10px;
                padding: 15px;
                padding-right: 100px;
                background-color: #2a2831;
                border: 0;
                outline: 0;
                color: white;
                
            }
            .p1 {
                padding-top: 100px;
                font-size: 13px;
            }
            
            .join {
                padding-top: 10px;
                font-size: 14px;
                text-decoration: none;
                
            }
            .find {
                padding-left: 70px;
                font-size: 14px;
                text-decoration: none;
                
            }
            a:link {
                color: #6c6487; text-decoration: none;
            }
            a:visited {
                color: #6c6487; text-decoration: none;
            }
            a:hover {
                color: #6c6487; text-decoration: underline;
            }
            
            .but{
                
                margin-top: 10px;
                padding: 10px;
                padding-right: 217px;
                background: #6c6487;
                color: #22202B;
                outline: 0;
                border: 0;
                color: #3D394D;
                text-align: center;
                text-decoration: none;
                
            }
            .p2 {
                margin-top: 10px;
                
            }
        </style>
    </head>
    
    <body>
        <div class="log_box">
            <center>
                <form method="post" action="session.php">
                    <div class="header"><h3>Icheon_hs cloud</h3></div>
                    <input type="text" class="id" placeholder="username" name="ID"><br>
                    <input type="password" class="pass" placeholder="password" name="password"><br>
                    <input class="but" type="submit" value="로그인"><br>
                </form>
                <div class="p2">
                <a href="signup.php" class="join"><b>회원가입</b></a>
                <a href="#" class="find"><b>아이디/비밀번호 찾기</b></a>
                </div>
                <div class="p1"><p>@이천고 무한상상실 cp부 Grake에서 만든 클라우드입니다. :D<br>email-pinedelta@icloud.com</p></div>
                
            </center>
        </div>
    
    </body>



</html>
