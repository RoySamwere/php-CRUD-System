<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="bootstrap/css/custom.css">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <title>Users Page</title>
</head>
<body>

<div >

<a href="saveUser.php" class="btn btn-primary fixed-top">Add Users</a>

<table class="table table-hover table-danger table-bordered">

    <tr>
        <th>Name</th>
        <th>Email</th>
        <th>Siri</th>
        <th >Delete</th>
        <th >Update</th>

    </tr>

    <?php
#Connect to the db

    $conn = mysqli_connect( "localhost","root","","evening_system");

#Check if successful

  if (!$conn)  {

      echo "Connection failed";
  }else{

      // Fetch data
      $selectQuery = "SELECT * FROM majina";

      //check if querry is correct
      if (!$selectQuery){
          echo "Error on the Selected querry";
      }else{

          #finally fetch data

          $fetch = mysqli_query($conn,$selectQuery);

          while ($row = mysqli_fetch_assoc($fetch)){
              extract($row);

              echo "
              
              <tr>   
              
              <td>$jina</td>
              <td>$arafa</td>
              <td>$siri</td>
              <td class='btn btn-danger text-info'>   <a href='delete.php?id_yetu= $id'>Delete</a></td>
              <td class='btn btn-primary'>  <a href='update.php?id_yetu= $id&jina_yetu=$jina&arafa_yetu=$arafa&siri_yetu=$siri'>Update</a></td>
              
              </tr>
              
              
           
             ";

          }
      }
  }





    ?>


</table>

<a href="saveUser.php">Add Users</a>;

</div>
</body>
</html>











