<?php

namespace App\Http\Controllers;

use App\Http\Requests\ComputerStoreRequest;
use App\Http\Requests\ComputerUpdateRequest;
use App\Models\Computer;
use Illuminate\Http\Request;

class ComputerAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('computersAdmin.index', ['computers' => Computer::all()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('computersAdmin.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ComputerStoreRequest $request)
    {
        $request = new Computer($request->all());
        $request->save();
        return redirect()->route("computersAdmin.index");
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
    public function edit(Computer $computer)
    {
        return view("computersAdmin.edit",["computer"=>$computer]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ComputerUpdateRequest $request, Computer $computer)
    {
        $computer->update($request->all());
        return redirect()->route("computersAdmin.index");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Computer $computer)
    {
        $computer->delete();
        return back();
    }
}
