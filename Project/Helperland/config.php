<?php 
class Config{
    /*------------ Database Constant ------------*/
    const DB_SERVER = "localhost";
    const DB_USER = "root";
    const DB_PASS = "";
    const DB_NAME = "helperland";
    
    /*------------ Users Constant--------------*/

    // 1 = customer, 2 = servicer, 3 = admin
    const USER_TYPE = [1,2,3];

    const SMTP_HOST = "smtp.gmail.com";
    const SMTP_EMAIL = "parthbpatel18@gnu.ac.in";
    
    //Enter password of SMTP_EMAIL to activate email functionality
    const SMTP_PASS = "";
    const SMTP_ADMIN = "parthbpatel26102000@gmail.com";

    // url constant
    const BASE_URL = "http://localhost/Tatvasoft-Project/Project/Helperland/";
}
?>
