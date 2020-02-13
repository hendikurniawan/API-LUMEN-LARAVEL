<?php
namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Http\Respone;

class UsersController extends Controller
{
    public function index()
    {
        $users = User::OrderBy("id", "DESC")->paginate(5);

        $outPut = [
            "message" => "users",
            "result" => $users
        ];

        return response()->json($users, 200);
    }

    //fungsi create
    public function store(Request $request)
    {
        $input = $request->all();
        $users = User::create($input);

        return response()->json($users, 200);
    }

    //get data user berdasarkan id
    public function show($id)
    {
        $users = User::find($id);

        if(!$users){
            abort(404);
        }

        return response()->json($users, 200);
    }

    //update data user berdasarkan id
    public function update(Request $request, $id)
    {
        $input = $request->all();

        $users = User::find($id);

        if(!$users){
            abort(404);
        }

        $users->fill($input);
        $users->save();

        return response()->json($users, 200);
    }

    //delete data user berdasarkan id
    public function destroy($id)
    {
        $users = User::find($id);

        if(!$users){
            abort(404);
        }

        $users->delete();
        $message = ["message" => 'delete succesfully', 'user_id' => $id];

        return response()->json($message, 200);
    }
}