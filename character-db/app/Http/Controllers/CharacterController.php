<?php

namespace App\Http\Controllers;

use App\Models\Character;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CharacterController extends Controller
{

    
    public function create(Request $request)
    {
        DB::table('characters')->insert([
            'type'=>$request->input('type'),
            'name'=>$request->input('name'),
            'race'=>$request->input('race'),
            'age'=>$request->input('age'),
            'class'=>$request->input('class'),
            'subclass'=>$request->input('subclass'),
            'photo'=>$request->input('img'),
            'description'=>$request->input('description'),
            'created_at'=> Carbon::now()->format('d-m-Y'),
            'user_id'=>'4',
        ]);

        return view('create');
    }

    /**
     * Display the specified resource.
     */
    public function show(Character $character)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Character $character)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Character $character)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Character $character)
    {
        //
    }
}
