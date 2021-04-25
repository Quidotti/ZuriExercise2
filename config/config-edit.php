
<?php

if(isset($_GET['id'])){

    require_once 'database.php';

    $id = $_GET['id'];

    $sql = "SELECT * FROM courses WHERE id= $id";

    $result = mysqli_query($conn, $sql);

        
    if(mysqli_num_rows($result)>0){
    
        $rows = mysqli_fetch_assoc($result);
    }else{

        header("Location: ./viewCourse.php");
    }

}else{

    // header("Location: ./viewCourse.php");
}

?>