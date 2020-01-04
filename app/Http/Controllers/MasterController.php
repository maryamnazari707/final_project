<?php

namespace App\Http\Controllers;

use App\Http\Requests\requestvalidator;
use App\Khatere;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class masterController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $data = DB::table("khaterat")->where("user_id",auth()->id())->get();
        return view('home',compact('data'));
    }

    public function create()
    {
        return view('create');
    }

    public function store(requestvalidator $request)
    {
        $row = $request->validated();
        $row["user_id"] = auth()->id();
        $a = new Khatere($row);
        $a->save();
        if($a instanceof Khatere)
            return redirect()->route("home");
        else
            dd("Error!");


    }

    public function show($id)
    {
        $data = Khatere::query()->findOrFail($id);
        return view('show',compact('data'));

    }

    public function edit($id)
    {
        $data = Khatere::query()->findOrFail($id);
        return view('edit', compact('data'));
    }

    public function update(requestvalidator $request,$id)
    {


        $data = DB::table('khaterat')->where("id",$id)->first();
        if($data) {
            DB::table('khaterat')->where('id', $id)->update([
                    'slug' => request()->input('slug'),
                    'body' => request()->input('body'),
                ]);
             return redirect()->route('home');
        }
        else
            dd("Error on update method");
    }

    public function destroy($id)
    {

        Khatere::destroy($id);
        return redirect()->route('home');
    }







}
