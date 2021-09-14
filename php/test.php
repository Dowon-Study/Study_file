<?php
    session_start();

    
    
    $conn = mysqli_connect("localhost", "icheoncp", "ehdnjs9980!", "icheoncp");
    
    $name = $_POST['name'];
    $num = $_POST['number'];
    $ph = $_POST['phone'];
    $mail = $_POST['mail'];
    $pass = $_POST['pass'];
    
    
    
    $sql  = "
        INSERT INTO info(
            name,
            shnum,
            phone,
            mail,
            pass
        ) VALUES (
            '$name',
            $num,
            $ph,
            '$mail',
            '$pass'
        )";
    
    $_SESSION['ID'] = $ID;
    $_SESSION['name'] = $name;
    
    $result = mysqli_query($conn, $sql);
    if($result === false){
        echo mysqli_error($conn);
        
    }else{
        Header("Location:join.php");
    }

?>