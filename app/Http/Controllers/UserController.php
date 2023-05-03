<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Jabatan;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = User::all();
        $jabatan = Jabatan::all();
        return view('Admin.user.index', compact('user', 'jabatan'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $jabatan = Jabatan::all();
        return view('Admin.user.add-user', compact('jabatan'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        User::create([
            'name'=>$request->name,
            'username'=>$request->username,
            'jabatan_id'=>$request->jabatan_id,
            'password'=>bcrypt($request->password),
            'email'=>$request->email,
            'no_hp'=>$request->no_hp,
        ]);
        notify()->success('User Berhasil Ditambahkan !!');
        return redirect('user');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $user = User::find($id);
        return view('Admin.user.user-detail', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $user = User::find($id);
        $jabatan = Jabatan::all();
        return view('Admin.user.edit-user', compact('user', 'jabatan'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $user = User::find($id);

        if ($request->password == null) {
            $user->update([
                'name'=>$request->name,
                'username'=>$request->username,
                'jabatan_id'=>$request->jabatan_id,
                'email'=>$request->email,
                'no_hp'=>$request->no_hp,
            ]);
        }

        else {
            $user->update([
                'name'=>$request->name,
                'username'=>$request->username,
                'jabatan_id'=>$request->jabatan_id,
                'password'=>bcrypt($request->password),
                'email'=>$request->email,
                'no_hp'=>$request->no_hp,
            ]);
        }
        notify()->success('User Berhasil Diupdate !!');
        return redirect('user/'.$id);
        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    public function hapus(string $id)
    {
        $user = User::find($id);
        $user->delete();
        notify()->success('User Berhasil Dihapus !!');
        return redirect('user');
    }
}