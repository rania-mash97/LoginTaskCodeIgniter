<?php

namespace App\Controllers;

use \App\Models\FormM;

class Home extends BaseController
{

  public function index()
  {

    return view('form');
  }
  public function storee()
  {

    session_start();
    global $username, $email;

    $name = $_POST['username'];
    $email = $_POST['email'];
    $pass1 = $_POST['password'];
    $model = new FormM();
    if (isset($_POST['submit'])) {

      if (!empty($_POST['username']) && !empty($_POST['email']) && !empty($_POST['password'])) {

        $_SESSION["username"] = $name;
        $_SESSION["email"] = $email;
          //$_SESSION['id']=$id;

        
        //print_r($name);
        //print_r($id);


      // $validation =  \Config\Services::validation();
      //  $validation->setRules([
    //'username' => "wrongname", "alpha", // is not ok
   // 'email' => "this is not a valid email","valid_email",  // is not ok
    //'password' => "this is wrong password", "integer",  
///]);
       
       // $validation->setRules("email","this is not a valid email","valid_email");
       // $validation->setRules("password","this is wrong password","integer");
    
        $model->saverecords($name, $email, $pass1);

        $to = $email;
        $subject = 'Account acctivation';
        $message = 'hi<br><br> Hello your account created successfully.Please click link below to activate it<br> ' . '<a href="http://localhost/LoginTaskCodeIgniter/public/index.php/Secondframe"">click me</a>';

        $email = \Config\Services::email();

        $email->setTo($to);
        $email->setFrom('raniasamer.rs978@gmail.com', 'Rania');
        $email->setSubject($subject);
        $email->setMessage($message);

        if ($email->send()) {
          echo " account created successfully";
        } else {
          $data = $email->printDebugger(['headers']);
          print_r($data);
        }
      }
    }
  }
}
