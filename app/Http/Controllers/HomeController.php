<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\ProductABC;
use App\Models\Student;
use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $products = Product::all();
        return view('layouts.index',compact('products'));
    }

    public function create(){
        $tung = 'hello anh Hung dep trai';
        return view('layouts.abc',compact('tung'));
    }
    public function store(Request $request){
        $data=[
            'name'=> $request->name,
            'price'=>$request->price,
            'description'=>$request->description,
        ];
        $product = Product::create($data);
        return redirect(route('index'));
    }
    public function edit(Request $request){
        $tung = User::where('name','hung123')->where('email','abc@gmail.com')->get();
        return view('layouts.layout1.tungsoi',compact('tung'));
    }

    public function login(Request $request){
       // $tung = User::where('name','hung123')->where('email','abc@gmail.com')->get();
        return view('layouts.layout1.login1');
    }


    public function student(Request $request){
        $student = Student::all();
        return view('layouts.student.index',compact('student'));
    }

    public function studentCreate(Request $request){
        return view('layouts.student.create');
    }
    public function studentStore(Request $request){
        $data=[
            'name'=> $request->name,
            'age'=> $request->age,
            'gender'=>  $request->gender,
        ];
        $Student = Student::create($data);
        return redirect(route('student.list'));
    }
}
