<?php 
include 'connection.php';
?>
<!doctype html>
<html lang="en">
    <head>
        <title>Title</title>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no"
        />

        <!-- Bootstrap CSS v5.2.1 -->
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
            crossorigin="anonymous"
        />
    </head>

    <body>
        <header>
            <!-- place navbar here -->
        </header>

        <?php
        // $con = mysqli_connect("localhost","root","","2307adb");
        $q = "SELECT * FROM student WHERE id = '".$_GET['student_id']."'";
        // echo $q;
        $res = mysqli_query($con,$q);
        $data = mysqli_fetch_array($res);
        // echo $data['email'];
        ?>
        <main>
            <div class="container">
                <form action="" method="post" enctype="multipart/form-data">
                    <label for="" >user name</label>
                    <input type="text" value="<?php echo $data['studentName']?>" name="username" id="" class="form-control" placeholder="username">
                    <label for="" >user email</label>
                    <input type="text" value="<?php echo $data['email']?>" name="email" id="" class="form-control" placeholder="email">
                    <label for="" >user phone</label>
                    <input type="text" value="<?php echo $data['phone']?>" name="phone" id="" class="form-control" placeholder="phone">
                    <label for="" >user image</label>
                    <img src="<?php echo $data['image']?>" alt="" height="35px" width="35px" srcset="">
                    <input type="file" name="my_image" id="" class="form-control">
                    <button name="update" type="submit" class="btn btn-success">Update</button>
                    
                </form>
            </div>
        </main>
        <?php
        if(isset($_POST['update'])){
            // echo "clicke hogaya";
            $user_name = $_POST['username'];
            $email = $_POST['email'];
            $phone = $_POST['phone'];
            $file_name = $_FILES['my_image']['name'];
            $temp_name = $_FILES['my_image']['tmp_name'];
            $location = "images/";
            $saveImage = $location.$file_name;

            $q= "UPDATE student SET studentName = '".$user_name ."' , email = '".$email."' 
                , phone = '".$phone."' , image = '".$saveImage."'  WHERE id = '".$_GET['student_id']."' ";
                // echo $q;die;
               $result= mysqli_query($con,$q);
               if($result){
                header("Location: show.php");
               }
        }
        
        ?>
        <footer>
            <!-- place footer here -->
        </footer>
        <!-- Bootstrap JavaScript Libraries -->
        <script
            src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
            integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
            crossorigin="anonymous"
        ></script>

        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
            integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
            crossorigin="anonymous"
        ></script>
    </body>
</html>
