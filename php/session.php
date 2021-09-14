<?php

    session_start();
    
    $conn = mysqli_connect("localhost", "icheoncp", "ehdnjs9980!", "icheoncp");
    
    
    
    $ID = $_POST['ID'];
    $PASS = $_POST['password'];
    

    
    
    $sql = "select * from info where shnum=$ID and pass ='$PASS'";
    
    $res = $conn->query($sql);
    $row = mysqli_fetch_assoc($res);

    if($row['shnum'] == $ID and $row['pass'] == $PASS){
        Header("Location:user_main.php");
    } else {
        Header("Location:main_scr.php");
    }
    
    $_SESSION['ID'] = $ID;
    
?>