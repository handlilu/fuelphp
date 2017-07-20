<?php

  class Model_Lilu extends Orm\Model
  {
      protected static $_table_name = 'lilu';
      protected static $_primary_key = array('user_id');
      protected static $_properties = array(
                    'user_id',
                    'name' => array(
                        'data_type' => "varchar",
                        'label' => 'frist name',
                        ),
                    'name_n',
                    'fname',
                    'fname_n',
                    'sex',
                    'year',
                    'month',
                    'day',
                    'email',
                    'tel',
                    'photo',
                    'school',
                    'object',
                    'skill',
                    'login_id',
                    'login_date',
                    'up_id',
                    'up_date',
                    'del_flag', 
              );
      
  }
