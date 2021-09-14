<?php
    
    session_start();

    $conn = mysqli_connect("localhost", "icheoncp", "ehdnjs9980!", "icheoncp");
    
    $name = $_SESSION['name'];

    $uploads_dir = '../files/';
    $uploads_dir = $uploads_dir.$_FILES[upload][name];
    
    move_uploaded_file($_FILES[upload][tmp_name], $uploads_dir);
    
    $file_path = "http://127.0.0.1:8082/files/";
    $file_path = $file_path.$_FILES[upload][name];

    echo $file_path;
        
    $sql  = "
        INSERT INTO $name(
            file
        ) VALUES (
            '$file_path'
        )";

    
    $_SESSION['filename'] = $_FILES[upload][name];
    

    
    

    $result = mysqli_query($conn, $sql);
    if($result === false){
        echo mysqli_error($conn);
    }else{
        Header("Location:user_main.php");
    }
    
?>