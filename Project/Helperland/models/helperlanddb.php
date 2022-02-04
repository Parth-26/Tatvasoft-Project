<?php
class UserModel{
    function __construct(){
        $servername = "localhost:3306";
        $username = "root";
        $password = "";
        $dbname = "helperland";
        
        // Create connection
        $this->conn = new mysqli($servername, $username, $password, $dbname);
        // Check connection
        if ($this->conn->connect_error) {
            die("Connection failed: " . $this->conn->connect_error); 
        }    
}
function contact_insert($table,$array){
    $name=$array['name'];
    $email=$array['email'];
    $sub_type=$array['sub_type'];
    $phone_number=$array['phone_number'];
    $message=$array['message'];
    $created_on=$array['created_on'];
    $sql = "INSERT INTO $table(Name,Email,SubjectType,PhoneNumber,Message,CreatedOn)
    VALUES ('$name','$email','$sub_type','$phone_number','$message','$created_on');";
   // echo $sql;
    if ($this->conn->query($sql) === TRUE) {
        $last_id = $this->conn->insert_id;
        echo "New record created successfully. Last inserted ID is: " . $last_id;
        return $last_id;
      } else {
        echo "Error: " . $sql . "<br>" . $this->conn->error;
      }
     
}
function create_acc($table,$array){
    $fname=$array['fname'];
    $lname=$array['lname'];
    $email=$array['email'];
    $pass=$array['passwd'];
    $phone_number=$array['phone_number'];
    $created_on=$array['created_on'];
    $sql = "INSERT INTO $table(FirstName,LastName,Email,Password,Mobile,CreatedDate,UserTypeId)
    VALUES ('$fname','$lname','$email','$pass','$phone_number','$created_on',1);";
   // echo $sql;
    if ($this->conn->query($sql) === TRUE) {
        $last_id = $this->conn->insert_id;
        echo "New record created successfully. Last inserted ID is: " . $last_id;
        return $last_id;
      } else {
        echo "Error: " . $sql . "<br>" . $this->conn->error;
      }
     
}
function sp_sign($table,$array){
    $fname=$array['fname'];
    $lname=$array['lname'];
    $email=$array['email'];
    $pass=$array['passwd'];
    $phone_number=$array['phone_number'];
    $created_on=$array['created_on'];
    $sql = "INSERT INTO $table(FirstName,LastName,Email,Password,Mobile,CreatedDate,UserTypeId)
    VALUES ('$fname','$lname','$email','$pass','$phone_number','$created_on',2);";
    //echo $sql;
    if ($this->conn->query($sql) === TRUE) {
        $last_id = $this->conn->insert_id;
        echo "New record created successfully. Last inserted ID is: " . $last_id;
        return $last_id;
      } else {
        echo "Error: " . $sql . "<br>" . $this->conn->error;
      }
     
}
function login_user($table,$array)
{
    $email=$array['email'];
    $pass=$array['passwd'];
    $sql = "SELECT Password FROM user WHERE Email='$email'";
   // echo $sql;
    $password = $this->conn->query($sql);
    if (mysqli_num_rows($password) > 0) {
        $result=$password->fetch_assoc();
        //echo "Password: " . $result['Password'];
        return $result['Password'];
      } else {
          echo $this->conn->query($sql);
       // echo "Error: " . $sql . "<br>" . $this->conn->error;
      }
}
}