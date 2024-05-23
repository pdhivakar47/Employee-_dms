<?php
   $connection = mysqli_connect("localhost","root","");
    $db = mysqli_select_db($connection,"employee");

    if(isset($_POST['submit']))
        {
          $name = $_POST['name'];
          $department = $_POST['$department'];
          $email = $_POST['email'];
          $address = $_POST['address'];
         $mobile = $_POST['mobile'];

           $sql = "insert into employee_dms(name,department,email,address,mobile)values(' $name','$department','$email', $address',' $mobile')";

           if(mysqli_query($connection,$sql))
           {
                  echo '<script> location.replace("home.php")</script>';  
           }
           else
           {
           echo "Some thing Error" . $connection->error;
           }
        }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Crud Application</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<body>

        <div class="container">
            <div class="row">
                 <div class="col-md-9">
                    <div class="card">
                    <div class="card-header">
                        <h1> Employee <Details></Details> </h1>
                    </div>
                    <div class="card-body">

                    <form action="add.php" method="post">
                        <div class="form-group">
                            <label>Name</label>
                            <input type="text" name="name" class="form-control"  placeholder="Enter Name"> 
                        </div>
                        
                        <div class="form-group">
                            <label>email</label>
                            <input type="text" name="name" class="form-control"  placeholder="Enter Name"> 
                        </div>

                        <div class="form-group">
                            <label>department</label>
                            <input type="text" name="email" class="form-control"  placeholder="Enter email"> 
                        </div>
                        

                        <div class="form-group">
                            <label>department</label>
                            <input type="text" name="department" class="form-control"  placeholder="Enter department"> 
                        </div>

                        <div class="form-group">
                            <label>Mobile</label>
                            <input type="text" name ="mobile" class="form-control"  placeholder="Enter Mobile"> 
                        </div>
                        <br/>
                        <input type="submit" class="btn btn-primary" name="submit" value="Register">
                        </form>
                   
                    </div>
                    </div>

                </div>
            
            </div>
        </div>

</body>
</html>