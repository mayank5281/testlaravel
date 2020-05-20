<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Users;
use App\User;
use DB;


class UsersController extends Controller
{
    public function index(){
      $user = User::all();
      return view('users.index',['users' => $user]);
    }

    public function create(){
      return view('users.create');
    }

    public function storeUsers(Request $request){
      $token = $request->input('_token');
      $name = $request->input('user_name');
      $email = $request->input('user_email');
      $password = $request->input('user_pswd');

      $data=array('name'=>$name,"email"=>$email,"password"=>bcrypt($password),"created_at"=>date('Y-m-d H:i:s'));
      DB::table('users')->insert($data);
      echo "Record inserted successfully.<br/>";
      echo '<a href = "/user">Click Here</a> to go back.';

    }

    public function updateUser(Request $request){
      
    }
}
