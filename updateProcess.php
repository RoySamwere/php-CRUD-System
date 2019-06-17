<?php

if (isset($_POST['btn_update'])){
    $receive_id = $_POST['w'];
    $receive_name = $_POST['x'];
    $receive_email = $_POST['y'];
    $receive_pass = $_POST['z'];

    #connect to db\

    $conn = mysqli_connect( "localhost","root","","evening_system");

    #Check if successful

    if (!$conn)  {

        echo "Connection failed";
    }else
    {
        #proceed to update query
        $updateQuery = "UPDATE majina SET jina='$receive_name',arafa='$receive_email',siri='$receive_pass' WHERE id='$receive_id'";



        //Check if the update query is correct

        if (!$updateQuery){

            echo "Error on the update query";
        }else{
            #now update$receive_id

            $update = mysqli_query($conn,$updateQuery);
            #check if succesful

            if (!$update){

                echo "Updating failed";

            }else{

                echo "Iko fiti";


                 header('location:viewUsers.php');
            }
        }
    }
}




?>