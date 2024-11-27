<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\userall;

class AlluserController extends Controller
{
    
    public function index()
    {
       $users=userall::all();
       return response()->json($users, 200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        /*  $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string',
        ]);*/

        $user = userall::create($request->all());

        return response()->json($user, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $user = userall::find($id);

        if (!$user) {
            return response()->json(['message' => 'user not found'], 404);
        }

        return response()->json($user, 200);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $user = userall::find($id);

        if (!$user) {
            return response()->json(['message' => 'Article not found'], 404);
        }

        /*$validated = $request->validate([
            'title' => 'string|max:255',
            'content' => 'string',
        ]);*/

        $user->update($request->except(['email','password','role']));

        return response()->json($user, 200);
    }
    

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $user = userall::find($id);

        if (!$user) {
            return response()->json(['message' => 'Article not found'], 404);
        }

        $user->delete();

        return response()->json(['message' => 'deleted successfully'], 204);
    }


}


/*function list(){
    return userall::all();
}*/