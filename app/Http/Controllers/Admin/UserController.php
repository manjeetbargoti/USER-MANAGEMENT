<?php

namespace App\Http\Controllers\Admin;

use App\User;
use App\Http\Requests;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index(Request $request)
    {
        $keyword = $request->get('search');
        $perPage = 25;

        if (!empty($keyword)) {
            $user = User::where('first_name', 'LIKE', "%$keyword%")->orWhere('last_name', 'LIKE', "%$keyword%")->orWhere('email', 'LIKE', "%$keyword%")->orWhere('phone', 'LIKE', "%$keyword%")->orWhere('username', 'LIKE', "%$keyword%")->latest()->paginate($perPage);
        } else {
            $user = User::latest()->paginate($perPage);
        }

        return view('admin.user.index', compact('user'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        $roles = Role::get()->pluck('name','name');

        return view('admin.user.create', compact('roles'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        
        // $requestData = $request->all();
        $requestData = $request->except('roles');
        $roles = $request->roles;

        // dd($requestData);
        
        $user = User::create($requestData);
        $user->assignRole($roles);

        return redirect('admin/user')->with('flash_message', 'User added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function show($id)
    {
        $user = User::findOrFail($id);

        return view('admin.user.show', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function edit($id)
    {
        $user = User::findOrFail($id);

        $roles = Role::get()->pluck('name','name');

        return view('admin.user.edit', compact('user','roles'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update(Request $request, $id)
    {

        $requestData = $request->except('roles');
        $roles = $request->roles;
        
        $user = User::findOrFail($id);
        $user->update($requestData);
        $user->syncRoles($roles);

        return redirect('admin/user')->with('flash_message', 'User updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        User::destroy($id);

        return redirect('admin/user')->with('flash_message', 'User deleted!');
    }


    public function registerUser(Request $request)
    {
        
        if($request->isMethod('post')){

            $requestData = $request->except('roles');
            $roles = $request->roles;

            // dd($requestData);
            
            $user = User::create($requestData);
            $user->assignRole($roles);

            return redirect('/register')->with('flash_message', 'User added!');
        }

    }
}
