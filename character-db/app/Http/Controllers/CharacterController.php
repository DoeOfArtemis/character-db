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
        $imagelink = file_get_contents($request->file('img'));
        $encdata = base64_encode($imagelink);

        DB::table('characters')->insert([
            'type'=>$request->input('type'),
            'name'=>$request->input('name'),
            'race'=>$request->input('race'),
            'age'=>$request->input('age'),
            'class'=>$request->input('class'),
            'subclass'=>$request->input('subclass'),
            'photo'=>$encdata,
            'description'=>$request->input('description'),
            'created_at'=> Carbon::now()->format('Y-m-d'),
            'user_id'=>'4',
        ]);

        return view('create');
    }

    /**
     * Display the specified resource.
     */
    public function show(Character $character)
    {
        // dd('test');
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
        // Character::find($character->id)->delete();
        // $character->delete();
        dd('test');
    }
}
