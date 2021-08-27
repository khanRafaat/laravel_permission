<?php namespace App\Http\Controllers;

use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use app\Models\User;

use Illuminate\Http\Request;

class UserController extends Controller {
    public function index() {

        // Role::create(['name' => 'admin']);

        //   Permission::create(['name' => 'view']);



        // $role=Role::findById(4);

        // $permission=Permission::findById(5);

        // $role->givePermissionTo($permission);




        // Auth()->user()->givePermissionTo('create');
      
        // Auth()->user()->assignRole('user');



        return view('dashboard');
    }

    public function create(){
       
        return view('create');
       
    }

    public function edit(){
       
        return view('edit');
       
    }

    public function update(){
       
        return view('update');
       
    }

    public function delete(){
       
        return view('delete');
       
    }
}
