

<?php

if (isset($_GET['id_yetu'])){

    $received_id = $_GET['id_yetu'];

    #connect to dd

    $conn = mysqli_connect( "localhost","root","","evening_system");

#Check if successful

    if (!$conn)  {

        echo "Connection failed";
    }else {

        #proceed to delete
        #start ith delete querry
        $deleteQuery =  "DELETE FROM majina WHERE id=$received_id";

        if(!$deleteQuery){
            echo "Error on the delete query";
        }else{

            #Finally proceed to delete

            $delete = mysqli_query($conn,$deleteQuery);
            #Check if deleteing was succes

            if (!$delete){

                echo "Delete Failed";
            }else{
                echo "Deleted Successfully";

                header('location:viewUsers.php');
            }
        }

    }


}

?>
