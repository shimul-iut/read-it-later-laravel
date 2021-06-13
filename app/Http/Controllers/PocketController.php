<?php

namespace App\Http\Controllers;

use App\Models\Pocket;
use App\Models\Content;
use App\Http\Resources\PocketResource;
use App\Http\Resources\ContentResource;
use Illuminate\Http\Request;

class PocketController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //return PocketResource::collection(Pocket::all());
       // return view('newPocket');
       
       $data =   ContentResource::collection(Content::all());

        return view('allPockets', compact('data'));
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user_id = rand(1, 3); //Just using Random User IDs from Database Seed
        $pocket = Pocket::create([
            //'user_id' => $request->user()->id, - This would be more practical
            'user_id' => $user_id,
            'title' => $request->title,
        ]);

        return back()->with('success', 'Pocket created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $data =   PocketResource::collection(Pocket::all());
        return view('addPocket', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pocket $id)
    {
        $id->delete;
        return response()->json(null, 204);
    }

    public function addForm()
    {
       $count = Pocket::count();
       return view('newPocket', compact('count'));
    }
}
