<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Auth;
use Session;
use App\User;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    public function login(Request $request){
        if($request->isMethod('post')){
            $data = $request->input();
             if (Auth::attempt(['email' => $data['email'], 'password' => $data['password'],'admin' => '1'])) {
               
                Session::put('adminSession',$data['email']);
                return redirect('admin/dashboard');
               
            }else{
                return redirect('admin/')->with('flash_message_error','Invalid Username or Password');
               
            }
        }
        return view('admin.admin_login');
    }
    public function dashboard(){
        if(Session::has('adminSession')){
            return view('admin.dashboard');
        }else {
            return redirect('/admin')->with('flash_message_error','please login to access');
        }
        
        
    }
    public function settings(){
        if(Session::has('adminSession')){
            return view('admin.settings');
        }else {
            return redirect('/admin')->with('flash_message_error','please login to access');
        }
        
        
    }
    public function checkPassword(Request $request){
        if(Session::has('adminSession')){
            $data  =$request->all();
            $current_password =$data['current_pwd'];
            $check_password = User::where(['admin'=>'1'])->first();
            if(Hash::check($current_password,$check_password->password)){
                echo "true";die;
            }else{
                echo "false";die;
            }
        }else {
            return redirect('/admin')->with('flash_message_error','please login to access');
        }
      
        
    }
    public function updatePassword(Request $request){
        if(Session::has('adminSession')){
            if($request->isMethod('post')){
                $data  =$request->all();
                $check_password = User::where(['email'=>Auth::user()->email])->first();
                $current_password = $data['current_pwd'];
                if(Hash::check($current_password,$check_password->password)){
                    $password = bcrypt($data['new_pwd']);
                    User::where('id','1')->update(['password'=>$password]);
                    return redirect('/admin/settings')->with('flash_message_success','password updated Successfully');
                }else{
                    return redirect('/admin/settings')->with('flash_message_error','Incorrect current password');
                }

            }

          
        }else {
            return redirect('/admin')->with('flash_message_error','please login to access');
        }
      
        
    }
    public function viewUsers(Request $request){
        if(Session::has('adminSession')){
            // $data  =$request->all();
            // $current_password =$data['current_pwd'];
            // $check_password = User::where(['admin'=>'1'])->first();
            // if(Hash::check($current_password,$check_password->password)){
            //     echo "true";die;
            // }else{
            //     echo "false";die;
            // }
            $users = User::get();
            
            // $users = json_decode(json_encode($users));
            // echo "<pre>"; print_r($users); die;
            return view('admin.viewUsers')->with(compact('users'));
        }else {
            return redirect('/admin')->with('flash_message_error','please login to access');
        }
      
        
    }
    public function logout(){
        Session::flush();
        return redirect('admin/')->with('flash_message_success','Logged out Successfully');
    }
}
