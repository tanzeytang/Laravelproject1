<?php 

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Studenttest;
use App\USR;
use Illuminate\Support\Facades\Session;

class StudentController extends Controller

{
    public function test1(){
       DB::unprepared('SET IDENTITY_INSERT studenttests ON');
       $student= DB::select('select * from studenttests');
        dd($student); 
       DB::unprepared('SET IDENTITY_INSERT studenttests');
        
    }
    
    public function insert(){
       // DB::insert('insert into users (id,name,email,password) values (?,?,?,?)',[1,'Tanzey','tanzey.tang@haileybury.vic.edu.au','Tzx@123890']);
        $user1 = DB::select('select * from users');
        var_dump($user1);
    }
    //access to the model:
    public function orm1(){
        //orm or model is like an interface for search or operate with the database,
        //you don't have to write too much code, just define a model for one table,
        //then, you can use the model class or interface to access to its methods, 
        //for example model::all() to return all of the instance of the table
        //find(id) return the id instance from the table., each result is an 
        //object for that class under a requirement.
        //all() methods for search through model
        //findOrFail(key) will base on the key of the table, if failed, just return error.

        //$students = Studenttest::all();
        //$students = Studenttest::find(1);
        //$students = Studenttest::findOrFail(10);

        //query builder:  get() method
        $students = Studenttest::get();
        dd($students);
    }
    public function orm2(){
        DB::unprepared('SET IDENTITY_INSERT studenttests ON');
        $students = new Studenttest();
        $students->id = 5;
        $students->save();
        DB::unprepared('SET IDENTITY_INSERT studenttests OFF');
        dd($students);
    }
    public function usr(){
        $usrs = USR::all();
        dd($usrs);
    }
    public function request1(Request $request)
    {
       // echo $request->input('name');   
       // dd($request);
       //echo $request->input('name','unknown');
    //    if($request->has('name')){
    //        echo $request->input('name');
    //    }else{
    //        echo 'Unknown Name';
    //    }
       //$request->isMethod('GET') 
       //$request->ajax();
     //echo($request->is('request*'); //$request->is('request/*');
      $url = $request->url();
      //dd($url);
      $input = $request->all();
      dd($input);


    }

public function session1(Request $request){
    //through request -> session() methods to put the key value to the session
    //$request->session()->put(['key1'=>'value1','key2'=>'value2']);

    //through the Session class to set the session value: under Illuminate\Support\p..\Session class
    Session::put(['student1'=>'1','student2'=>2]);
    //Session::push('student1','Tanzey is rich');
    $student1 = Session::get('student1');
    dd($student1);
}

public function session2(Request $request){
   // $key1=$request->session()->get('session1');
   $key1=Session::get('student1','default value');
    //echo($key1);
    dd(Session::all());
}

public function response(){
    $data = [
        'errcode'=>0,
        'msg'=>'success',
        'character'=>'rich'

    ];
    
    //return response('Hello World',200);
    //return response($data)->header('Content-Type','text/plain');
    return redirect('session1')->with('message','how are you');
}

}




?>