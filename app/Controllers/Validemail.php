<?php

namespace App\Controllers;

use \App\Models\FormM;



class Validemail extends BaseController
{


       public function index()
       {
              $usermail = new FormM();
              $sent = $usermail->sendmail();
              print_r($sent);
       }
}
