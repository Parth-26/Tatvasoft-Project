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
    $sql = "SELECT * FROM $table WHERE Email='$email'";
   // echo $sql;
    $password = $this->conn->query($sql);
    if (mysqli_num_rows($password) > 0) {
        $result=$password->fetch_assoc();
        //echo "Password: " . $result['Password'];
        return $result;
      } else {
          echo $this->conn->query($sql);
       // echo "Error: " . $sql . "<br>" . $this->conn->error;
      }
}

public function is_validPostal($data){
  if(isset($data['postal'])){
      $postal = trim($data['postal']);
      $sql = "SELECT useraddress.PostalCode,useraddress.City,useraddress.State FROM user JOIN useraddress on user.UserId = useraddress.UserId  WHERE user.UserTypeId = 2 and useraddress.PostalCode = '$postal'";

      $result = $this->conn->query($sql);
      if($result->num_rows > 0){
          return $result->fetch_assoc();
      }else{
          return [];
      }
  }
}

public function get_address($data){
  $rows = array();
  if(isset($data['zipcode'])){
      $postal = trim($data['zipcode']);
      $userId = trim($data['userdata']);
      $sql = "SELECT * FROM useraddress WHERE UserId = $userId and PostalCode = '$postal'";
      $result = $this->conn->query($sql);
      while ($row = $result->fetch_assoc()) {
          array_push($rows, $row);
      }
      
      return $rows;
  }
}

public function get_favSp($data){
  $result = [];
  if(isset($data['userdata'])){
      $userId = trim($data['userdata']);
      $pet = trim($data['WorkWithPet']);

      $sql = "SELECT favoriteandblocked.*, user.UserProfilePicture, concat(user.FirstName, ' ', user.LastName) AS FullName FROM favoriteandblocked JOIN user ON user.UserId = favoriteandblocked.TargetUserId WHERE user.UserId IN (SELECT favoriteandblocked.TargetUserId FROM favoriteandblocked JOIN user ON user.UserId = favoriteandblocked.UserId WHERE user.UserId = '$userId' AND user.UserTypeId = 1) AND user.IsApproved = 1 AND user.IsDeleted = 0 AND user.WorksWithPets >= $pet AND favoriteandblocked.IsFavorite = 1";

      $result = $this->conn->query($sql);
      $rows = array();
      if ($result->num_rows > 0) {
          while ($row = $result->fetch_assoc()) {
              array_push($rows, $row);
          }
          $result = $rows;
      } else {
          $result = [];
      }      
  }
  return $result; 
}

public function add_address($data){
  if(isset($data)){
      $AddressLine1 = trim($data['sname'])." ".trim($data['hnumber']);
      $zipcode = trim($data['zipcode']);
      $city = trim($data['cname']);
      $userId = trim($data['userdata']);
      $mnumber = trim($data['mnumber']);
      $state = trim($data['statename']);
      $email = trim($data['email']);

      $sql = "INSERT INTO useraddress (UserId, AddressLine1, City, State, PostalCode, Mobile, Email) VALUES ($userId,'$AddressLine1','$city','$state','$zipcode','$mnumber','$email')";

      $result = $this->conn->query($sql);
      if($result){
  $address = $this->get_address($data);
          return $address;
}
else{
  return [];
}
  }
}

public function add_serviceAddress($serviceId,$addressId){
  $sql = "INSERT INTO servicerequestaddress (ServiceRequestId, AddressLine1, AddressLine2, City, State, PostalCode, Mobile, Email) SELECT $serviceId,AddressLine1, AddressLine2, City, State, PostalCode, Mobile, Email FROM useraddress WHERE AddressId = $addressId";
  $result = $this->conn->query($sql);
  return $result;
}

public function add_extraService($serviceId,$ExtraServiceId){
  $sql = "INSERT INTO servicerequestextra (ServiceRequestId,ServiceExtraId) VALUES ($serviceId,$ExtraServiceId)";
  $result = $this->conn->query($sql);
  return $result;
}

public function get_servicerEmail($ServiceProviderId,$HasPet){
  $email = [];
  if($ServiceProviderId != 'null'){
      $sql = "SELECT Email FROM user WHERE UserId = $ServiceProviderId";
  }else{
      $sql = "SELECT Email FROM user WHERE UserTypeId = 2 AND WorksWithPets >= $HasPet" ;
  }
  $result = $this->conn->query($sql);

  $rows = array();
  if ($result->num_rows > 0) {
      while ($row = $result->fetch_assoc()) {
          array_push($rows, $row['Email']);
      }
      $email = $rows;
  } else {
      $email = [];
  }    
  return $email;
}

public function book_service($data){
  if(isset($data)){
      $email = [];
      $last_id = 0;
      $time = $data['time'];
      $AddressId = $data['address'];
      $userid = $data['userId'];
      $ServiceStartDate = $data['date'];
      $postalcode = $data['postal'];
      $SubTotal = $data['totalhr'];
      $ServiceHourlyRate = 18;
      $TotalCost = $SubTotal * 18;
      $Comments = $data['comment'];
      $ExtraHours = 0;

      $SPAcceptedDate = 'null';
      $Status = 0;
      $PaymentDone = 1;
      $Discount = 0;
      $ServiceProviderId = 'null';
      $HasPets = 0;
      $ExtraServiceId = 0;

      // set date format 
      $date = new DateTime($ServiceStartDate);
      $date->setTime(floor($time), floor($time) == $time ? "00" : (("0." . substr($time, -1) * 60) * 100));
      $cleaningstartdate = $date->format('Y-m-d H:i:s');

      if(isset($data['extra'])){
          $ExtraServiceId = implode("",$data['extra']);
          $ExtraHours = count($data['extra']) * 0.5;
      }
      if(isset($data['favsp'])){
          $ServiceProviderId = $data['favsp'];
      }
      if(isset($data['pet'])){
          $HasPets = $data['pet'];
      }
      $ServiceHours = $data['totalhr'] - $ExtraHours;
      
      $sql = "INSERT INTO servicerequest (UserId, ServiceStartDate, ZipCode, ServiceHourlyRate, ServiceHours, ExtraHours, SubTotal, Discount, TotalCost, Comments, ServiceProviderId, SPAcceptedDate, HasPets, Status, CreatedDate, PaymentDone) 
      VALUES ($userid, '$cleaningstartdate', '$postalcode', $ServiceHourlyRate, $ServiceHours, $ExtraHours, $SubTotal, $Discount, $TotalCost, '$Comments', $ServiceProviderId, $SPAcceptedDate, $HasPets, $Status, now(), $PaymentDone);";

      $result = $this->conn->query($sql);
      if($result){
          $last_id = $this->conn->insert_id;
  $address = $this->add_serviceAddress($last_id,$AddressId);
          if($address){
              $extraService = $this->add_extraService($last_id,$ExtraServiceId);
              if($extraService){
                  $email = $this->get_servicerEmail($ServiceProviderId,$HasPets);
              }
          }
      }
      return [$last_id,$email];
  }
}

public function getServiceRequestById($serviceid){
  $sql = "SELECT * FROM servicerequest JOIN servicerequestaddress ON servicerequestaddress.ServiceRequestId = servicerequest.ServiceRequestId WHERE servicerequest.ServiceRequestId = $serviceid";
  $service = $this->conn->query($sql);
  if($service->num_rows > 0){
      $result = $service->fetch_assoc();
  }else{
      $result = [];
  }
  return $result;
}
}
?>
}