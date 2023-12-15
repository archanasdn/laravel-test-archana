<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Task;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    public function getLogin(Request $request)
    {
       $email = $request->email;
       $psw = Hash::make($request->password);
       $check = User::where('email',$email)->first();
       if($check === null)
       {
        return 'invalid';
       }
       else{
        $user_id =  $check->id;
       if($user_id=='1')
       {
        return redirect('todo-list');
       }
       else{
        return redirect('login');
       }
       }
    }



    public function toDoList(Request $request)
    {
        
        $list = Task::with('users')->get();
       return view('todo-list')
    //    ->with('list',$list)
       ->with('list',$list);
    }
    public function AddList(Request $request)
    {
        $agents = User::where('role','agent')->get();
       return view('add-task')
       ->with('agents',$agents); 
    }
    public function CreateList(Request $request)
    {
        $agents = Task::where('title',$request->title)->get();
       // echo $request->title;
        if(count($agents)==0)
    {
        $user = Task::create([
            'title' => $request->title,
            'desc' => $request->desc,
            'date' => $request->date,
            'agent_id' => $request->agent,
            
        ]);
        return redirect('todo-list');
     }
     else
     {
        $message = 'Title exist';
        Session::flash('alert-message', $message);
        return redirect()->route('add-task');
     }
      
       
    }

    public function getlogout(Request $request)
    {
        return redirect('login');
    }
    
}
