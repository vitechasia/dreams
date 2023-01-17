<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;
use Vdes\PermisionRoles\Models\Role;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Arr;

class UserController extends Controller

{

    public function index(Request $request)

    {

        $title = "Data User";
        $pagination  = 10;
        $users = User::when($request->keyword, function ($query) use ($request) {
                $query->where('name', 'like', "%{$request->keyword}%");
            })->orderBy('id', 'ASC')->paginate($pagination);
        $valuepage = (($users->currentPage() - 1) * $users->perPage());
        $labelcount = "Menampilkan ". ($valuepage + 1) ." sampai ". ($valuepage + $users->count()) . " Data dari ". $users->total(). " Data";
        return view('template.dreams.modul.users.index', compact('users', 'valuepage', 'labelcount','title'));

    }

    public function create()
    {
        $title = "Tambah Data User";
        $roles = Role::all();
        return view('template.dreams.modul.users.create',compact('roles','title'));
    }


    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|same:confirm-password',
            'role_id' => 'required'
        ]);
        
        $input = $request->all();
        $input['password'] = Hash::make($input['password']);
        $data_role = Role::find($request->role_id);
        $user = User::create($input);
        $user->roles()->attach($data_role);
		$user->permissions()->attach($data_role->permissions);
        return redirect()->route('users.index')
                        ->with('success','User created successfully');
    }

    public function show($id)
    {
        $user = User::find($id);
        return view('template.dreams.modul.users.show',compact('user'));
    }

    public function edit($id)
    {
        $title = "Ubah Data User";
        $users = User::find($id);
        $roles = Role::all();
        return view('template.dreams.modul.users.edit',compact('users','roles','title'));
    }


    public function update(Request $request, $id)
    {   
        // $this->validate($request, [
        //     'name' => 'required',
        //     'email' => 'required|unique:users,email,'.$users,
        //     // 'password' => 'same:confirm-password'
        //     // 'roles' => 'required'
        // ]);
        
        $input = $request->all();
        if(!empty($input['password'])){
            $input['password'] = Hash::make($input['password']);
        }else{
            $input = Arr::except($input,array('password'));
        }
        $users = User::find($id);
        $users->update($input);
        if ($request->role_id != $request->role_now) {
            $data_role_id = Role::find($request->role_id);
            $users->permissions()->delete();
            $users->roles()->delete();

            $users->roles()->attach($data_role_id->id);
            $users->permissions()->attach($data_role_id->permissions()->pluck('id')->all());
        }
        return redirect()->route('users.index')->with('success','User updated successfully');
    }

    public function destroy($id)
    {
        User::find($id)->delete();
        return redirect()->route('users.index')
                ->with('success','User deleted successfully');
    }
}
