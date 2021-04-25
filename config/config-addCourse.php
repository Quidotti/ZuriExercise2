<?php

if(isset($_POST['create'])){

    require_once 'database.php';

    $courseCode = $_POST['c_code'];
    $courseTitle = $_POST['c_title'];


    $courseData = 'courseCode='.$courseCode. 'courseTitle='. $courseTitle;
    if(empty($courseCode)){

        header("Location: ../addCourse.php?error=Course Code is required");

    }elseif(empty($courseTitle)){

        header("Location: ../addCourse.php?error=Course Title is required");
        
    }else{

        $sql = "INSERT INTO courses(course_code, course_title) VALUES('$courseCode', '$courseTitle')";

        $result = mysqli_query($conn, $sql);


        if($result){
            header("Location: ../viewCourse.php?success=Course Successfully Added");
        }else{

             header("Location: ../addCourse.php?error=Unknown Error occur");
        }
            
    }
}
?> 




<?php

if(isset($_GET['id'])){

    require_once 'database.php';

    $id = $_GET['id'];

    $sql = "SELECT * FROM courses WHERE id= $id";

    $result = mysqli_query($conn, $sql);


    if(mysqli_num_rows($result)>0){
    
        $rows = mysqli_fetch_assoc($result);
    }else{

        // header("Location: ./viewCourse.php");
    }
}else{

    // header("Location: ./viewCourse.php");
}

?>