<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{


    public function index(){
       $users=User::where('role' , '!=' , 'admin')->paginate(15);
       return view('backend.users.all' , ['users' => $users]);
    }



    public function show($id){
        $user=User::findOrFail($id);
        return view('backend.users.show',['user'=>$user]);
    }


    public function destroy($id){
        $user=User::findOrFail($id);
        $user->delete();

        return redirect()->route('users.all')->with('success' , 'تم حذف العضو بنجاح');
    }






}
