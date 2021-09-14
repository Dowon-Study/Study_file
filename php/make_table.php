<?php
                
    session_start();
        
    $conn = mysqli_connect("localhost", "icheoncp", "ehdnjs9980!", "icheoncp");    
        
                
     $name = $_SESSION['name'];
        
    $sql = "CREATE TABLE $name(
        file VARCHAR(1000) NOT NULL
    )";

    if ($conn->query($sql) === TRUE) {
        Header("Location:main_scr.php");
    } else {
        Header("Location:main_scr.php");
    }


?>