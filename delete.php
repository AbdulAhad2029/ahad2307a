<?php
// die;
$con = mysqli_connect("localhost","root","","2307adb");


if(isset($_GET['student_id'])){
    $st_id = $_GET['student_id'];
    // echo $st_id;

    $q= "DELETE FROM student WHERE id = '".$st_id."' ";

    // echo $q;die;
    $res = mysqli_query($con ,$q);
    if($res){
        header("Location: show.php");
    }


}




?>