<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Update Page</title>

    <link rel="stylesheet" href="bootstrap/css/custom.css">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">

</head>
<body>
<div class="form_class">
<form action="updateProcess.php" method="post">

    <?php
 if (isset($_GET['id_yetu'])){$receive_id = $_GET['id_yetu'];

     $receive_id = $_GET['id_yetu'];
     $receive_name = $_GET['jina_yetu'];
     $receive_email = $_GET['arafa_yetu'];
     $receive_pass = $_GET['siri_yetu'];
 }

    ?>
    <input type="text" name="w"value="<?php echo $receive_id;?>" hidden class="s_input"><br>
    <input type="text" name="x"value="<?php echo $receive_name;?>" required  class="s_input"><br>
    <input type="email" name="y"value="<?php echo $receive_email;?>" required class="s_input"><br>
    <input type="text" name="z"value="<?php echo $receive_pass;?>" required class="s_input"><br>

    <input type="submit" name="btn_update"value="Update Now" >

</form>

</div>
</body>
</html>




