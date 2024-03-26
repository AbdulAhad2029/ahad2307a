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

    <?php
        $con = mysqli_connect("localhost","root","","2307adb");
        if(isset($_GET['student_id'])){
            $stId = $_GET['student_id'];
            $q= "SELECT * FROM student WHERE id = '".$stId."'";
            $res = mysqli_query($con,$q);
            while($data = mysqli_fetch_array($res)){
                $studentName = $data['studentName'];
                $email = $data['email'];
                $ph = $data['phone'];
                $img = $data['image'];
            }
        }
    
    
    
    
    
    
    ?>
        <header>
            <!-- place navbar here -->
        </header>
        <main>
        <div class="form-control">
            <form action="" method= "POST" enctype = "multipart/form-data">
                <input type="text" value = "<?php echo $studentName?>" name="username" class ="form-control" placeholder = "user name" id="">
                <br>
                <input type="text" value = "<?php echo $email?>" name="useremail" class ="form-control" placeholder = "user email" id="">
                <br>
                <input type="text" value = "<?php echo $ph?>" name="phone" class ="form-control" placeholder = "user phone" id="">
                <br>
                <img src="<?php echo $img?>" width="35px" height = "35px" alt="">
                <input value = "<?php echo $img?>" type="file" name="image" id="" class="form-control">
                <br>
                <button type = "submit" class ="btn btn-success" name ="update">Update</button>

            </form>
        </div>
        <?php
        // if(isset($_POST['update'])){
        //     $stName = $_POST['username'];
        //     $email = $_POST['useremail'];
        //     $ph = $_POST['phone'];



        // }
        
        
        ?>
        </main>
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
