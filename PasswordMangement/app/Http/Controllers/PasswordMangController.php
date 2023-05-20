<?php

namespace App\Http\Controllers;

use App\Models\PasswordMang;
use Illuminate\Http\Request;
use Defuse\Crypto\Crypto;


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
        dd('kk');
         $encryptionKey = config('app.key');

    }

    /**
     * Display the specified resource.
     */
    public function show(PasswordMang $passwordMang)
    {
        //
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
