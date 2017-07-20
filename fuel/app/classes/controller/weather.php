<?php
class Controller_Weather extends Controller {

   public function action_index()
   {
       $user = count(DB::select()->from('lilu')->execute());             
       $nums =  count(Model_Lilu::find("all"));
      #$results = Fuleresume::getResults();
       $page = !empty($_GET["page"]) ? $_GET["page"] : 1 ;
       $config = array(
                    'pagination_url' => 'http://192.168.1.8/lilu/fuel-1.8-master/public/test',                   
                    'total_items'    => $nums,
                    'per_page'       => 2,
                    'uri_segment'    => 'page',
               );
       $pagination = Pagination::forge('mypagination', $config);
#order_by(array("user_id" =>"desc"))
       $data['example_data'] = DB::select('user_id', 'name')->from('lilu')->order_by('user_id','desc')->limit($pagination->per_page)->offset($pagination->offset)->as_object()->execute();
       $data['pagination'] = $pagination;
       $option = array ("select" => array("user_id",'name'),
                         //"where" => array(array('user_id','>','140')),
                         "order_by" => array('user_id'=>'desc'),
                         "limit" => $pagination->per_page,
                         "offset" => $pagination->offset,
               );
       $test =  Model_Lilu::query($option)->get();
       $data['test'] = $test;
       $results = Model_Lilu::find(100);

       /****
       use model save data
       $entry= new Model_Lilu();
       $entry->name = 'test20161228';
       $entry->save();
       ****/
       # return Response::forge(Presenter::forge('welcome/hello'));
       return Response::forge(View_Smarty::forge('weather/index',array('name'=> 'lilu','data'=> $data)));           

   }
   public function before()
   {
     // var_dump($_SERVER);
   }
   // public function after()
   //{
   //    echo 133;
   //}
   public function action_services()
   {
       Request::forge();
       Controller::params();
       $data = 1;
      return Response::forge(View_Smarty::forge('weather/services',array('name'=> 'lilu','data'=> $data)));
   }

  public function action_prices()
  {
      $data = 1;
     return Response::forge(View_Smarty::forge('weather/prices',array('name'=> 'lilu','data'=> $data)));
  }

  public function action_contact()
  {
      $data = 1;
     return Response::forge(View_Smarty::forge('weather/contact',array('name'=> 'lilu','data'=> $data)));
  }

  public function action_solutions()
  {
      $data = 1;
     return Response::forge(View_Smarty::forge('weather/solutions',array('name'=> 'lilu','data'=> $data)));
  }
}
