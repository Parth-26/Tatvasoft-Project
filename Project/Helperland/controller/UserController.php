<?php

class UserController
{
    function __construct()
    {
        include('models/helperlanddb.php');
        $base_url='http://localhost/Tatvasoft-Project/Project/Helperland/';
        $this->model = new UserModel();
    }
    
    public function home()
    {
        include('view/home.php');
    }
    public function prices()
    {
        include('view/price.php');
    }
    public function contact()
    {
        include('view/contact.php');
    }
    public function faqs()
    {
        include('view/faqs.php');
    }
    public function about()
    {
        include('view/about.php');
    }
    public function login_modal()
    {
        include ('view/login.php');
    }
    public function create_acc()
    {
        include('view/create_acc.php');
    }
    public function sp_sign_up()
    {
        include('view/sp-sign-up.php');
    }
    public function book()
    {
        include("view/book.php");
    }
    public function consumer_service_history()
    {
        include("view/consumer/consumer_service_history.php");
    }
    public function consumer_dashboard()
    {
        include("view/consumer/consumer_dashboard.php");
    }
    public function consumer_invoice()
    {
        include("view/consumer/consumer_invoice.php");
    }
    public function consumer_fav_pro()
    {
        include("view/consumer/consumer_fav_pro.php");
    }
    public function consumer_notification()
    {
        include("view/consumer/consumer_notification.php");
    }
    public function sp_upcoming()
    {
        include("view/service_provider/sp_upcoming.php");
    }
    public function sp_rating()
    {
        include("view/service_provider/sp_rating.php");
    }public function sp_new_service()
    {
        include("view/service_provider/sp_new_service.php");
    }
    public function sp_service_history()
    {
        include("view/service_provider/sp_service_history.php");
    }public function sp_block()
    {
        include("view/service_provider/sp_block.php");
    }
    public function sp_dashboard()
    {
        include("view/service_provider/sp_dashboard.php");
    }
    public function my_acc()
    {
        if($_SESSION['userdata']['UserTypeId']==1)
        {
        include("view/consumer/my_acc.php");
        }
        elseif($_SESSION['userdata']['UserTypeId']==2)
        {
            include("view/service_provider/sp_dashboard.php");
        }
        else
        {
            echo 'Admin';
        }
    }
    public function logout()
    {
        include("view/logout.php");
    }
    public function forgot()
    {
        include('view/forgotpasswd.php');
    }
    public function forgotpasswdmail()
    {
        $array=
        [
            'email'=>$_POST['email'],
        ];
        $result= $this->model->forgot_pass('user', $array);
        $name=$result['FirstName'];
        if($result){
        $to = $_POST['email'];
  $subject = "Reset Passord - Helperland";

  $body = "
  <div>
  <h5 style='font-size:22px;'>Hi, $name !</h5>
   <h6 style='font-size:18px;'>Click below link to reset your password... </h6>
   <br/>
   <a href='http://localhost/Tatvasoft-Project/Project/Helperland/?controller=User&function=forgot'> Reset password Link</a>
 </div>
    ";
  //Set content-type header for sending HTML email
  $headers[] = 'From: Parth Patel';
  $headers[] = 'MIME-Version: 1.0';
  $headers[] = 'Content-Type: text/html; utf-8';

  // $headers = "MIME-Version: 1.0" . "\r\n";
  // $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

  mail($to, $subject, $body, implode("\r\n", $headers));
        }
    }
    public function contact_data()
    {
        if (isset($_POST)) {
            $array = [
               //Name	Email	SubjectType	Subject	PhoneNumber	Message	CreatedOn
                'name' => $_POST['fname']." ".$_POST['lname'],
                'email' => $_POST['email'],
                'sub_type' => $_POST['sub_type'],
                'phone_number' => $_POST['PhoneNumber'],
                'message' => $_POST['message'],
                'created_on' => date('Y-m-d H:i:s'),
            ];
           $last_id = $this->model->contact_insert('contactus', $array);
           $msg='';
           if($last_id)
           {
               $msg="Your message has been sent successfully. Our team will be in touch with you shortly.";
  $to = $array['email'];
  $subject = "From Customer Support team";

  $body = "
  <div>
  <h5 style='font-size:22px;'>Hi, $Name .I am from customer support team.</h5>
   <h6 style='font-size:18px;'>Thank you for reaching out to us we wiil be in touch with you shortly. </h6>
   <br/>
   <a href='.$base_url.'?controller=User&function=forgot'> Reset password Link</a>
 </div>
    ";
  //Set content-type header for sending HTML email
  $headers[] = 'From: Parth Patel';
  $headers[] = 'MIME-Version: 1.0';
  $headers[] = 'Content-Type: text/html; utf-8';

  // $headers = "MIME-Version: 1.0" . "\r\n";
  // $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

  mail($to, $subject, $body, implode("\r\n", $headers));
            header('Location: ' . $base_url.'?controller=User&function=contact&msg='.$msg);
           }
           else{
               $msg="Someting went wrong please try again after sometime";
            header('Location: ' . $base_url.'?controller=User&function=contact&msg='.$msg);
           }
           //mail($array['email'],"From Helperland Customer Serices","Hello ".$array['name'].",/n Thank you for reaching out to us one of our customer service reprsentative will contact you shortly./n/nTeam Helperland.","From :parthbpatel18@gnu.ac.in");
        } else {
            echo 'Error Occured Try Again';
        }
    }
    public function create_acc_data()
    {
        if (isset($_POST)) {
            $array = [
               //Name	Email	SubjectType	Subject	PhoneNumber	Message	CreatedOn
                'fname' => $_POST['fname'],
                'lname'=>$_POST['lname'],
                'email' => $_POST['email'],
                'phone_number' => $_POST['PhoneNumber'],
                'passwd' => $_POST['passwd'],
                'confirm_passwd' => $_POST['confirm_passwd'],
                'created_on'=> date('Y-m-d H:i:s'),
            ];
            if($array['passwd']===$array['confirm_passwd'])
            {
           $last_id = $this->model->create_acc('user', $array);
            //header('Location: ' . $base_url.'?controller=User&function=home');
            }
            else{
                echo 'Passord and Confirm Password must be same.';
            }
        } else {
            echo 'Error Occured Try Again';
        }
    }
    public function sp_sign_data()
    {
        if (isset($_POST)) {
            $array = [
               //Name	Email	SubjectType	Subject	PhoneNumber	Message	CreatedOn
                'fname' => $_POST['FirstName'],
                'lname'=>$_POST['LastName'],
                'email' => $_POST['email'],
                'phone_number' => $_POST['PhoneNumber'],
                'passwd' => $_POST['passwd'],
                'confirm_passwd' => $_POST['confirmpasswd'],
                'created_on'=> date('Y-m-d H:i:s'),
            ];
            if($array['passwd']===$array['confirm_passwd'])
            {
           $last_id = $this->model->sp_sign('user', $array);
            //header('Location: ' . $base_url.'?controller=User&function=home');
            }
            else{
                echo 'Passord and Confirm Password must be same.';
            }
        } else {
            echo 'Error Occured Try Again';
        }
    }
    public function login_data()
    {

        if (isset($_POST)) {
            $array = [
               
                'email' => $_POST['Email'],
                'passwd' => $_POST['passwd'],
            ];
           $result = $this->model->login_user('user', $array);
           $user=$result['UserId'];
           $pass=$result['Password'];
           if($_POST['passwd']===$pass)
           {
            $_SESSION['userdata']=$result;
           // $message=$_SESSION['userid'];
            $_SESSION['name']=$result['FirstName'].' '.$result['LastName'];
            $_SESSION['loggedin']=1;
            if($result['UserTypeId']=='1')
            {
            header('Location: ' . $base_url.'?controller=User&function=consumer_service_history');
            }
            else if($result['UserTypeId']=='2')
            {
                header('Location: ' . $base_url.'?controller=User&function=sp_upcoming');
            }
            else if($result['UserTyprId']=='3')
            {

            }
            else{
                echo 'not found user type';
            }
           }
           else
           {
               echo "<script>alert('Password or Email is incorrect...');</script>";
           }
            //header('Location: ' . $base_url.'?controller=User&function=home');
        } else {
            echo 'Error Occured Try Again';
        }
    }
    public function booking()
    {
        $postal=$_POST['postal'];
        echo $postal;
    }
}
?>