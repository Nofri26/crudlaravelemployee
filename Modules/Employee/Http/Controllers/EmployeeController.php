<?php

namespace Modules\Employee\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Modules\Employee\Entities\Employee;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $employees = Employee::all();
        return view('employee::index', compact('employees'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('employee::create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|min:5',
            'alamat' => 'required',
            'email' => 'required|email',
            'no_telp' => 'required'
        ]);

        Employee::create([
            'nama'=> $request->nama,
            'alamat' => $request->alamat,
            'email' => $request->email,
            'no_telp' => $request->no_telp
        ]);

        return redirect('/employee')->with('success','Employee Berhasil Ditambahkan!');
    }

    /**
     * Show the specified resource.
     */
    public function show($id)
    {
        return view('employee::show');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $employees = Employee::find($id);
        return view('employee::edit', compact(['employees']));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required|min:5',
            'alamat' => 'required',
            'email' => 'required|email',
            'no_telp' => 'required'
        ]);
        $employees = Employee::find($id);

        $employees->update([
            'nama'=> $request->nama,
            'alamat' => $request->alamat,
            'email' => $request->email,
            'no_telp' => $request->no_telp
        ]);

        return redirect('/employee')->with('success','Employee Berhasil Diubah!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $employees = Employee::find($id);
        $employees->delete();

        return redirect('/employee')->with('success','Employee Berhasil Dihapus!');
    }
}
