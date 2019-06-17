

<?php

if (isset($_POST['submit'])){

    $inputedName = $_POST['a'];
    $inputedEmail = $_POST['b'];
    $inputedPassword = $_POST['c'];
    $inputedRepassword = $_POST['d'];

    #Connect t the db

    $conn = mysqli_connect( "localhost","root","","evening_system");

    #Check if db was connected

    if (!$conn){

        echo "Connecction imefail";
    } else{

        #proceed to save to DB

        $insertQuery = " INSERT INTO `logins`(`id`, `user-name,`user-email`, `user-pass`,`user-repeatpass`)  VALUES (null ,'$inputedName','$inputedEmail','$inputedPassword','$inputedRepassword')";

       # $insertQuery = " INSERT INTO `logins`(`id`, `user-name`, `user-email`, `user-pass`, `user-repeatpass`) VALUES ([value-1],[value-2],[value-3],[value-4],[value-5])";

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
