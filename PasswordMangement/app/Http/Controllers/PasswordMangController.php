<?php

namespace App\Http\Controllers;

use App\Models\PasswordMang;
use Illuminate\Http\Request;
use Defuse\Crypto\Crypto;
use Illuminate\Support\Facades\Crypt;



class PasswordMangController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('passwordmang.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'password' => 'required',
        ]);
       
        //  $encryptionKey = config('app.key');
         $encryptedname = Crypt::encryptString($request->name);
         $encryptedpass = Crypt::encryptString($request->password);
        //  $decryptedData = Crypt::decryptString($encryptedData);
        //  dd($decryptedData);
         $store = PasswordMang::create([
            'name' => $encryptedname,
            'password' => $encryptedpass,
           
        ]);
        dd('finsh');

        //  dd($encryptionKey);

    }

    /**
     * Display the specified resource.
     */
    public function show(PasswordMang $passwordMang)
    {
        $encrypt = PasswordMang::get();
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(PasswordMang $passwordMang)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, PasswordMang $passwordMang)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(PasswordMang $passwordMang)
    {
        //
    }
}
