<?php

namespace App\Http\Controllers\API;

use Session;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    /**
     * Register
     */
    public function register(Request $request)
    {
        try {
            $user = new User();
            $user->name = $request->name;
            $user->sex = 'm'; 
            $user->user_name = 'user_name1';
            $user->user_type = 'admin';
            $user->permission = 'permission';
            $user->status = 'status';
            $user->email = $request->email;
            $user->password = Hash::make($request->password);
            $user->save();

            $success = true;
            $message = 'User register successfully';
        } catch (\Illuminate\Database\QueryException $ex) {
            $success = false;
            $message = $ex->getMessage();
        }

        // response
        $response = [
            'success' => $success,
            'message' => $message,
        ];
        return response()->json($response);
    }

    public function index()
    {
        //$users = User::all()->toArray(); ::paginate(10)
        $users = User::paginate(5)->toArray();
        return array_reverse($users);
    }

    public function add(Request $request)
    {

        try {

        $user = new User();
            $user->name = $request->name;
            $user->last_name = $request->last_name;
            $user->sex = $request->sex;
            $user->user_name = $request->user_name;
            $user->user_type = $request->user_type;
            $user->permission = $request->permission;
            $user->status = $request->status;
            $user->email = $request->email;
            $user->tel = $request->tel;
            $user->password = Hash::make($request->password);
            $user->save();
      

            $success = true;
            $message = 'User register successfully';
        } catch (\Illuminate\Database\QueryException $ex) {
            $success = false;
            $message = $ex->getMessage();
        }

        // response
        $response = [
            'success' => $success,
            'message' => $message,
        ];
        return response()->json($response);
    }

    public function edit($id)
    {
        $user = User::find($id);
        return response()->json($user);
    }


    /**
     * Login
     */
    public function login(Request $request)
    {
        $credentials = [
            'email' => $request->email,
            'password' => $request->password,
        ];

        if (Auth::attempt($credentials)) {
            $success = true;
            $message = 'User login successfully';
        } else {
            $success = false;
            $message = 'Unauthorised';
        }

        // response
        $response = [
            'success' => $success,
            'message' => $message,
        ];
        return response()->json($response);
    }

    /**
     * Logout
     */
    public function logout()
    {
        try {
            Session::flush();
            $success = true;
            $message = 'Successfully logged out';
        } catch (\Illuminate\Database\QueryException $ex) {
            $success = false;
            $message = $ex->getMessage();
        }

        // response
        $response = [
            'success' => $success,
            'message' => $message,
        ];
        return response()->json($response);
    }
}