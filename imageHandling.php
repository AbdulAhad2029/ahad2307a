
<form action="" method="post" enctype = "multipart/form-data">

    <input type="file" name="image" id="">
    <br>
    <button type="submit" name ="btn">upload image</button>
</form>


<?php

if(isset($_POST['btn'])){
// echo "clicked";

// echo $_FILES['image']['tmp_name'];

$fileKaNaam = $_FILES['image']['name'];
$tmpName = $_FILES['image']['tmp_name'];


$location="images/";

// echo $location;
// echo "<br>";
// echo $fileKaNaam;
// echo $location.$fileKaNaam;
// exit;

$saveimg = $location.$fileKaNaam;
move_uploaded_file($tmpName,$saveimg);

}
else{
    echo "not clicked";

}

?>