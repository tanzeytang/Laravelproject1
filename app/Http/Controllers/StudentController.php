<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Studentsss;


class StudentController extends Controller{

    public function index()
    {
        
       //$studentsfromDatabase = Studentsss::get();
       $studentsfromDatabase = Studentsss::paginate(20);
        return view('student.index',[
            'students'=>$studentsfromDatabase,
        ]);
    }
    public function create(Request $request){
        $data = $request->input('Student');
        if($request->isMethod('POST')){
            $validatedata=$request->validate([
                'Student.name' => ['required'],
                'Student.age' => ['required'],
                'Student.Gender' => ['required']
            ]);
            $this->message();
            if(Studentsss::create($data)){
                return redirect('student/index')->with('success','adding new student successfully')->withInput();
            }else{
                return redirect('student/create')->with('error','adding new student unsuccessfully')->withInput();
            }
            
        }
        
        
        return view('student.create');
        //dd($req);
    }

    public function save(Request $request){
        $data = $request->input('Student');
        $student = new Studentsss();
        $student->name = $data['name'];
        $student->age = $data['age'];
        $student->Gender = $data['sex'];
        $student->save();
        if($student->save()){
            return redirect('student/index');
        }else{
            return redirect()->back();
        }
        //$sess = $request->session()->all();
       // var_dump($sess);
        //var_dump($data);
        
    }

    public function message(){
        return[
            'Student.name.required'=>'Name is required'
        ];
    }








}


?>