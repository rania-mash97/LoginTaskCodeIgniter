<?php

namespace App\Models;

use CodeIgniter\Model;



class FormM extends Model{
     public function index(){
     }


public function saverecords($name,$email,$pass){

   
     $db = \Config\Database::connect();       
        $data = [
           'fullname' => $name,
           'email'  => $email,
           'password'  => $pass
];
   
 $db->table('users')->insert($data);
   
}
    public function sentupdate($id,$newupdate){
      // $session = \Config\Services::session();

        $db = \Config\Database::connect();
        $db->where('id',$id);
        $db->update('password',$newupdate);


    }


}
