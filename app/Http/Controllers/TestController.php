<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Test;
class TestController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {   
        $tests = test::latest()->get();
        return view('tests.index' , compact('tests'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('tests.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {   
        $request->validate([
            'name'=>'required',
        ]);
        $test = new Test;
        $test->name = $request->name;
        $test->save();
        return redirect()->route('tests.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {   
        $test = Test::find($id);
        return view('tests.show', compact('test'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $test = Test::find($id);
        return view('tests.edit', compact('test'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'name'=>'required',
        ]);
        $test = Test::find($id);
        $test->name = $request->name;
        $test->save();
        return redirect()->route('tests.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $test = Test::find($id);
        $test->delete();
        return redirect()->route('tests.index');
    }
}
