

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
        <main>

            <div class="form-control">
                <form action="" method= "POST" enctype = "multipart/form-data">
                    <input type="text" name="username" class ="form-control" placeholder = "user name" id="">
                    <br>
                    <input type="text" name="useremail" class ="form-control" placeholder = "user email" id="">
                    <br>
                    <input type="text" name="phone" class ="form-control" placeholder = "user phone" id="">
                    <br>
                    <input type="file" name="image" id="" class="form-control">
                    <br>
                    <button type = "submit" class ="btn btn-success" name ="insert">Insert</button>

                </form>
            </div>


            <?php

            $host = "localhost";
            $user = "root";
            $pass = "";
            $database = "2307adb";


            $conn = mysqli_connect($host,$user,$pass,$database);
       // isset();
                if( isset($_POST['insert'])){
                    // echo "button clicked";
                    $userName = $_POST['username'];
                    $userEmail = $_POST['useremail'];
                    $phone = $_POST['phone'];

                    $fileName= $_FILES['image']['name'];
                    $tmpName = $_FILES['image']['tmp_name'];
                    $location = "images/";
                    $saveImage = $location.$fileName;
                    move_uploaded_file($tmpName,$saveImage);

                    $q = "INSERT INTO student(studentName,email,phone,`image`) VALUES ('".$userName."' , '".$userEmail."' , '".$phone."','".$saveImage."')";

                    $result = mysqli_query($conn,$q);

                    if($result){
                        header("Location: show.php");
                    }

                    // echo $userName;



                }
                else{
                    echo "";
                }
            
            
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
