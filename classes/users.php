<?php 
class user{

    public function __construct()
    {
      $host = "localhost";
      $user = "root";
      $password = "";
      $database = "oop_crud";

      $this->connection = mysqli_connect($host,$user,$password,$database);

    }

    public function submit_data($lol){

       $username = $lol['username'];
       $email = $lol['email'];
       $password = $lol['password'];

       $query = "INSERT INTO crud_table (username, email, password) VALUES ('$username', '$email', '$password')";

       mysqli_query($this->connection, $query);
    }

    public function all_users(){
        $query2 = " SELECT * FROM crud_table ";
        $mysql2 = mysqli_query($this->connection, $query2);
        return $mysql2;
    }

    public function dlt_users($get_id){
      $query3 = " DELETE FROM crud_table WHERE id='$get_id'";
      $mysql3 = mysqli_query($this->connection, $query3);
      header("location: index.php");
    }

    public function update_users($get_id){
      $query4 = " SELECT * FROM crud_table WHERE id='$get_id'";
      $mysql4 = mysqli_query($this->connection, $query4);
      return $mysql4;
      header("location: index.php");
    }

    
    public function update_users_save($data){
      $id = $_POST['id'];
      $username = $data['username'];
      $email = $data['email'];
      $query4 = " UPDATE crud_table SET username='$username', email='$email' WHERE id='$id'";
      $mysql4 = mysqli_query($this->connection, $query4);
      header("location: index.php");
     
    }


}



?>