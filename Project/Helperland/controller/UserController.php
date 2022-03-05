<?php
include 'controller/config.php';
class UserController
{
    function __construct()
    {
        include('models/helperlanddb.php');
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
    public function my_acc()
    {
        include("view/consumer/my_acc.php");
    }
    public function logout()
    {
        include("view/logout.php");
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
           $user=$result['UserID'];
           $pass=$result['Password'];
           if($_POST['passwd']===$pass)
           {
            $_SESSION['userid']=$user;
            $message=$_SESSION['userid'];
            $_SESSION['name']=$result['FirstName'].' '.$result['LastName'];
            $_SESSION['loggedin']=1;
            header('Location: ' . $base_url.'?controller=User&function=consumer_service_history');
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