<?php
    include("models/connection.php");
    class PublicModel extends Connection{
        public function __construct(){
            $this->conn = $this->connect();
        }
        
        public function insertContactDetails($data){
            $name = $data['firstname'].' '.$data['lastname'];
            $email = $data['email'];
            $phone = $data['phone'];
            $subject = $data['subject'];
            $msg = $data['msg'];
            $created_on= date('Y-m-d H:i:s');
            if($subject=="General")
            {
                $subtype=1;
            }
            elseif($subject=="Inquiry")
            {
                $subtype=2;
            }
            elseif($subject=="Renewal")
            {
                $subtype=3;
            }
            elseif($subject=="Revocation")
            {
                $subtype=4;
            }
            else
            {
                $subtype=0;
            }
            $sql = "INSERT INTO contactus (Name,Email,SubjectType,Subject,PhoneNumber,Message,CreatedOn) VALUES ('$name','$email','$subtype','$subject','$phone','$msg','$created_on')";
            $result = $this->conn->query($sql);

            return $result;
        }
    }
?>