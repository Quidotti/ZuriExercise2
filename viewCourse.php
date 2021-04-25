
<?php 
require_once 'config/config-edit.php';

require_once 'config/config-viewCourse.php';

session_start();


?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Dashboard | Zuri Exercise</title>

    <link href="css/assets/vendor/bootstrap4/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/assets/css/master.css" rel="stylesheet">
    <link href="css/assets/vendor/chartsjs/Chart.min.css" rel="stylesheet">
    <link href="css/assets/vendor/flagiconcss3/css/flag-icon.min.css" rel="stylesheet">

<style>
.container{

    width:800px;
    padding:20px;
    border-radius:10px;
    margin-top:10px;
    background:#ffff;
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.1);
}
.container h1{

    text-align: center;
}

.container table{
    padding:20px;
    border-radius:10p?SSx;
    background:#ffff;
}

</style>
</head>

<body>
    <div class="wrapper">
        <nav id="sidebar" class="active">
            <div class="sidebar-header">
            </div>
            <ul class="list-unstyled components">
                <li>
                    <a href="dashboard.php"><i class="fas fa-home"></i> Dashboard</a>
                </li>
                <li>
                    <a href="viewCourse.php"><i class="fas fa-file-alt"></i>View Courses</a>
                </li>
                <li>
                    <a href="addCourse.php"><i class="fas fa-table"></i>Add Courses</a>
                </li>
            </ul>
        </nav>

        <div id="body" class="active">
            <nav class="navbar navbar-expand-lg navbar-primary bg-primary">
                <button type="button" id="sidebarCollapse" class="btn btn-outline-light default-light-menu"><i class="fas fa-bars"></i><span></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="nav navbar-nav ml-auto">
                        <li class="nav-item dropdown">
                            <div class="nav-dropdown">
                                <a href="" class="nav-item nav-link dropdown-toggle" data-toggle="dropdown"><i class="fas fa-user"></i> <span><?php echo $_SESSION['name']; ?></span> <i style="font-size: .8em;" class="fas fa-caret-down"></i></a>
                                <div class="dropdown-menu dropdown-menu-right nav-link-menu">
                                    <ul class="nav-list">
                                        <li><a href="" class="dropdown-item"><i class="fas fa-address-card"></i> Profile</a></li>
                                        <li><a href="" class="dropdown-item"><i class="fas fa-envelope"></i> Messages</a></li>
                                        <li><a href="" class="dropdown-item"><i class="fas fa-cog"></i> Settings</a></li>
                                        <div class="dropdown-divider"></div>
                                        <li><a href="index.php?logout=1" class="dropdown-item"><i class="fas fa-sign-out-alt"></i> Logout</a></li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>

        <div class="content">
        <div class="container-fluid" style="background:skyblue; width:800px; height:100px; padding: 15px; color:white;">
                        <h1>Welcome, <?php  echo $_SESSION['name'] . $email;?></h1>
        </div>

                <div class="container">
                        <?php if(isset($_GET['success'])) {?>
                            <div class="alert alert-success" role="alert">
                                <?php echo $_GET['success'];?>
                            </div>

                            <?php }?>
                         <h4 class="display-4 text-center">Read</h4><br>

                         <?php if(mysqli_num_rows($result)) {?>
                        <table class="table table-striped">
                        
                            
                            <thead>
                                <tr>
                                    <th scope="col">S/N</th>
                                    <th scope="col">Course Code</th>
                                    <th scope="col">Course Title</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>

                            <?php 
                            
                                    $i = 0;
                                 while($rows = mysqli_fetch_assoc($result)){
                                     
                                    $i++;  ?>
                            <tbody>
                                <tr>
                                        <th scope="row"><?php echo $i; ?></th>
                                        <td><?=$rows['course_code']?></td>
                                        <td><?php echo $rows['course_title'];?></td>
                                        <td><a href="edit.php?<?=$rows['id']?>" class="btn btn-success">Edit</a></td>
                                </tr>
                                <?php }?>
                            </tbody>
                        </table>

                        <?php }?>
                        <div class="link-right">
                        <a href="addCourse.php" class="link-primary btn btn-primary">Add Courses</a>
                        </div>
                    </div>
                    
                </div>
            </div>
         </div>
    </div>
    </div>
 </div>
</div>

    <script src="css/assets/vendor/jquery3/jquery-3.4.1.min.js"></script>
    <script src="css/assets/vendor/bootstrap4/js/bootstrap.bundle.min.js"></script>
    <script src="css/assets/vendor/fontawesome5/js/solid.min.js"></script>
    <script src="css/assets/vendor/fontawesome5/js/fontawesome.min.js"></script>
    <script src="css/assets/vendor/chartsjs/Chart.min.js"></script>
    <script src="css/assets/js/dashboard-charts.js"></script>
    <script src="css/assets/js/script.js"></script>

</body>

</html>

