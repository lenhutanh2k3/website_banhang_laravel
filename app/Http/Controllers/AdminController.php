<?php

namespace App\Http\Controllers;


use App\Http\Requests\LoginAdminRequest;
use Illuminate\Http\Request;
use App\Models\Admin;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       return view('backend.layouts.trangchu_admin');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.layouts.login_admin');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(LoginAdminRequest $request)
    {
       $validate= $request->validated();
       $admin =Admin::where('admin_email',$validate['email'])->first();
       if ($admin && $admin->admin_pass === md5($validate['password']))
       {
        return redirect()->route('admin.index');
       }
       else
       {
        return back()->withErrors(['email' => 'Thông tin đăng nhập không chính xác.']);
       }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
    public function login_admin()
    {
       
    }
}
