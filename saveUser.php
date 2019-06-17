<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="bootstrap/css/custom.css">
    <title>Home Page</title>
</head>

<body>

<div class="form_class">

<form action="saveUserProcess.php" method="post">

    <input type="text" placeholder="Name Here" name="x" required class="s_input"><br>
    <input type="email" placeholder="Email Here" name="y" required class="s_input"><br>
    <input type="password" placeholder="Password Here" name="z" required class="s_input"><br>
    <input type="Submit" value="Save" name="btn_save" class="input_btn"><br>

    <a href="viewUsers.php" class="a_link ">View Users</a>

</form>

</div>
</body>
</html>