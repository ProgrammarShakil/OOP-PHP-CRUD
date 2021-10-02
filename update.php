<?php

require("classes/users.php");

$user = new user();

$get_id = $_GET['id'];

$data = $user->update_users($get_id);

$assoc_data = mysqli_fetch_assoc($data);

if(isset($_REQUEST['update'])){
    $user->update_users_save($_POST);
}

?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table,th,td{
            border: 1px solid blueviolet;
            border-collapse: collapse;
            border-spacing: 10px;
        }
    </style>
</head>
<body>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
        <table>
            <tr>
                <input type="hidden" name="id" value="<?= $assoc_data['id'] ?>">
                <td><input type="text" name="username" value="<?= $assoc_data['username'] ?>" placeholder="username" required></td>
            </tr>
            <tr>
                <td><input type="email" name="email" value="<?= $assoc_data['email'] ?>"  placeholder="email" required></td>
            </tr>
            <tr>
                <td><input type="submit" name="update" value="update"></td>
            </tr>
        </table>
    </form>
</body>
</html>