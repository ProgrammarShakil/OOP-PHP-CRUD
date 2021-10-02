
<?php 
require("classes/users.php");

$user = new user();

if(isset($_REQUEST['submit'])){
    $user->submit_data($_POST);
}
  $all_users =  $user->all_users();
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
      <input type="text" name="username" placeholder="username" required>
      <input type="email" name="email" placeholder="email" required>
      <input type="password" name="password" placeholder="password" required>
      <input type="submit" name="submit" value="submit">
    </form>

    <table cellpadding='10' >
        <tr>
            <th>name</th>
            <th>email</th>
            <th>action</th>
        </tr>
        <?php while( $row = mysqli_fetch_assoc($all_users)){
        ?>
        <tr>
            <td><?php echo $row['username'];?></td>
            <td><?php echo $row['email'];?></td>
            <td>
                <a href="update.php?id=<?php echo $row['id'];?>">Edit</a> /
                <a href="delete.php?id=<?php echo $row['id'];?>">Delete</a>
            </td>
        </tr>
        <?php } ?>
    </table>
</body>
</html>