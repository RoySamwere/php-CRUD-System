

<?php

if (isset($_POST['btn_save'])){

    $inputedName = $_POST['x'];
    $inputedEmail = $_POST['y'];
    $inputedPassword = $_POST['z'];

    #Connect t the db

    $conn = mysqli_connect( "localhost","root","","evening_system");

    #Check if db was connected

    if (!$conn){

        echo "Connecction imefail";
    } else{

        #proceed to save to DB
        $insertQuery = " INSERT INTO `majina`(`id`, `jina`, `arafa`, `siri`) VALUES (null ,'$inputedName','$inputedEmail','$inputedPassword')";

        if (!$insertQuery){
            echo"Error";
        }else{
            $save = mysqli_query($conn,$insertQuery);
            if (!$save){
                echo"Saving Failed";
            }else{
                echo "Data Saved!";

                #go back

                header('location:saveUser.php');
            }
        }
    }
}


?>
