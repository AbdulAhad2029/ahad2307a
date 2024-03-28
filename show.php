<?php

// include ("connection.php");
// require_once "connection.php";

include 'connection.php';



 $q = "SELECT * FROM student";

 $result = mysqli_query($con, $q);

//  echo mysqli_num_rows( $result);

// while($data = mysqli_fetch_array($result)){

//     echo  $data['phone'] ,$data['studentName'] , $data['email']  . "<br>" ;
// }


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
        <main>
<div class="container">
    <a href="student.php" class="btn btn-success">add student</a>
    <table class="table">
        <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">Student Name</th>
      <th scope="col">Email</th>
      <th scope="col">Phone</th>
      <th scope="col">Image</th>

    </tr>
  </thead>
  <tbody>
    <!-- $result= mysqli_query($con,$q) -->
    <?php 
    while ($data = mysqli_fetch_array($result))
    {

    
    ?>
    <tr>
      <th scope="row"><?php echo $data['id']?></th>
      <td><?php echo $data['studentName'] ?></td>
      <td><?php echo $data['email']?></td>
      <td><?php echo $data['phone']?></td>
      <td><img src="<?php echo $data['image']?>" width="50px" height="50px" alt=""></td>
      
           
      <td><a href="delete.php?student_id=<?php echo $data['id']?>" class="btn btn-danger">Delete</a></td>
      
      
      
      
      <td><a href="update1.php?student_id=<?php echo $data['id']?>" class="btn btn-primary">Edit</a></td>
    </tr>
    
    <?php
    }
    ?>

</tbody>
</table>
</div>


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


