<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\DetailUser;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class DetailUserController extends Controller
{
    public function index()
    {
        $detail_user = DetailUser::all(); 

        return response()->json([
            'message' => 'All user',
            'data' => $detail_user,
        ], 200);
    }

    public function create(Request $request)
    {
        $request->validate([
            'user_id' => 'required',
            'alamat' => 'required',
            'no_hp' => 'required',
        ]);

        $data = [
            'user_id' => $request->user_id,
            'alamat' => $request->alamat,
            'no_hp' => $request->no_hp,
        ];

        $detail_user = new DetailUser;
        $detail_user->create($data);
        
    }

    public function show($id)
    {
        $detail_user = DetailUser::find($id);

        return response()->json([
            'message' => 'Detail user',
            'data' => $detail_user,
        ], 200);
    }

    public function update(Request $request, $id)
    {
        $detail_user = DetailUser::find($id);

        $detail_user->update($request->all());

        return response()->json([
            'message' => 'Detail user updated',
            'data' => $detail_user,
        ], 200);
    }

    public function destroy()
    {
        $detail_user = DetailUser::find($id);

        $detail_user->delete();

        return response()->json([
            'message' => 'Detail user deleted',
            'data' => $detail_user,
        ], 200);
    }
}
