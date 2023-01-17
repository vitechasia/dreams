<?php

namespace Vdes\Dreams;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function showFormLogin()
    {
        if (Auth::check()) {
            return redirect()->route('home');
        }
        return view('template.dreams.signin');
    }

    public function login(Request $request)
    {
        // dd($request);
        $rules = [
            'email'              => 'required',
            'password'           => 'required|string'
        ];

        $messages = [
            'email.required'     => 'email wajib diisi',
            'password.required'  => 'Password wajib diisi',
            'password.string'    => 'Password harus berupa string'
        ];

        $validator = Validator::make($request->all(), $rules, $messages);

        if($validator->fails()){
            return redirect()->back()->withErrors($validator)->withInput($request->all);
        }

        $data = [
            'email'  => $request->input('email'),
            'password'  => $request->input('password'),
        ];
        Auth::guard();
        Auth::attempt($data);
        
        if (Auth::check()) {
            $data = $request->session()->all();
            $userx = Auth::user();
            Session::put('id',$userx->id);
            Session::put('name',$userx->name);
            Session::put('role',$userx->roles()->first()['name']);
            return redirect()->route('home');
        } else {
            Session::flash('error', 'email atau password salah');
            return redirect()->route('login');
        }
    }

    public function gantidata(Request $request,$id)
    {
        
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email|unique:users,email,'.$id,
            'password' => 'same:confirm-password'
        ]);
        $input = $request->all();
        if(!empty($input['password'])){
            $input['password'] = Hash::make($input['password']);
        }else{
            $input = Arr::except($input,array('password'));
        }
        $user = User::find($id);
        $user->update($input);
        Auth::logout();
        return redirect()->route('login');
    }


    public function logout()
    {
        Auth::logout();
        return redirect()->route('login');
    }
}
