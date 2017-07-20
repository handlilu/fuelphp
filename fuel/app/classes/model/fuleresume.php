<?php
 
 namespace Model;

  class Fuleresume extends \Model
  {
     public static function getResults(){
       $result = \DB::query('SELECT * FROM lilu WHERE user_id = 140')->execute()->as_array();
#$result ="test";
       return $result;
     } 
  }
