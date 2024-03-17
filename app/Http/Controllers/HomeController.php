<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\models\Student;
class HomeController extends Controller
{
    public function index()
    {    
        $data = student::all();
        return view('home',compact('data'));
    }
    //To insert the data
    public function insert(Request $request)
    {
        $student = new student;
        $student->name = $request->name;
        $student->email = $request->email;
        

        $image = $request->file;
        if($image)
        {

        $imagename = time().'.'.$image->
             getClientOriginalExtension();
         $request->file->move('student',$imagename);
        $student->image = $imagename;

        }

        $student->save();

        return redirect()->back();

    }

    //To delete the data
    public function delete($id)
    {
        $data = student::find($id);
        $data->delete();
        return redirect()->back();
    }
    public function update_view($id)
    {
        $student =student::find($id);
        return view('update_page',compact('student'));
    }
    //To update the data
    public function update(Request $request , $id)
    {
        $student =student::find($id);
        $student->name = $request->name;
        $student->email = $request->email;
        

        $image = $request->file;
        if($image)
        {

        $imagename = time().'.'.$image->
             getClientOriginalExtension();
         $request->file->move('student',$imagename);
        $student->image = $imagename;

        }

        $student->save();

        return redirect()->back()->with('success','Data updated successfully!');
    }
}
