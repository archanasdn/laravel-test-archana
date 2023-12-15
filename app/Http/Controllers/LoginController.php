<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Tymon\JWTAuth\Facades\JWTAuth;
use App\Models\User;
use App\Models\Task;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
class LoginController extends Controller
{
    public function login(Request $request)
    {
       
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            $userID = Auth::id();
            if($userID != '1')
            {
            $token = JWTAuth::attempt($credentials);

            return response()->json(['token' => $token]);
            }
        }

        return response()->json(['error' => 'Invalid credentials'], 401);
    }

    public function agentView(Request $request)
    {
        $agentID = $request->agent_id;
       $task = Task::with('users')->where('agent_id',$agentID)->get();
       return response()->json(['Agent tasks' => $task]);
    }
}
