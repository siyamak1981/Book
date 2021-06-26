<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Access\Admin;
use App\Models\Access\Role;
use App\Models\User;
use Auth;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:admin');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = Admin::latest()->paginate(5);

        return view('Backend.user.index', compact('users'));
    }
    public function showusers()
    {
        $users = User::latest()->paginate(5);

        return view('Backend.public.show', compact('users'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // if (Auth::user()->can('users.create')) {
            $roles = Role::all();
            return view('Backend.user.create', compact('roles'));
        }
        // return redirect(route('admin.home'));
    // }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
     
        $this->validate($request, [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:admins',
            'phone' => 'required|numeric',
            'password' => 'required|string|min:6|confirmed',
            'image' => 'required',
        ]);
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $filename = time().$image->getClientOriginalName();
            Storage::disk('local')->putFileAs('avators/', $image, $filename);
        } else {
            return "There are not Image";
        }
        $user = new Admin;
        $user->name =$request->name;
        $user->link_1 =$request->link_1;
        $user->link_2 =$request->link_2;
        $user->link_3 =$request->link_3;
        $user->link_4 =$request->link_4;
        $user->email =$request->email;
        $user->phone =$request->phone;
        $user->password =bcrypt($request->password);
        $user->image =$filename;
        $user->save();
        $user->roles()->sync($request->role);
        return redirect(route('user.index'))->with('message', 'User Created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if (Auth::user()->can('users.update')) {
            $user = Admin::find($id);
            $roles = Role::all();
            return view('Backend.user.edit', compact('user', 'roles'));
        }
        return redirect(route('admin.home'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255',
            'phone' => 'required|numeric',
            'image' => 'required',

        ]);

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $filename = time().$image->getClientOriginalName();
            Storage::disk('local')->putFileAs('avators/', $image, $filename);
        }
        $request->status? : $request['status']=0;
        $user  = Admin::find($id);
        $user->name =$request->name;
        $user->link_1 =$request->link_1;
        $user->link_2 =$request->link_2;
        $user->link_3 =$request->link_3;
        $user->link_4 =$request->link_4;
        $user->email =$request->email;
        $user->phone =$request->phone;
        $user->password = bcrypt($request->password);
        $user->image =$filename;
        $user->update($request->except('_token', '_method', 'role'));
        Admin::find($id)->roles()->sync($request->role);
        return redirect(route('user.index'))->with('message', 'User updated successfully');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $adminImage =  Admin::find($id);
        Storage::disk('local')->delete('avators/'.$adminImage['image']);
        $adminImage->delete();
        return redirect()->back()->with('message', 'User is deleted successfully');
    }
    public function destroyshowusers($id)
    {
        User::where('id', $id)->delete();
        return redirect()->back()->with('message', 'User is deleted successfully');
    }
}
