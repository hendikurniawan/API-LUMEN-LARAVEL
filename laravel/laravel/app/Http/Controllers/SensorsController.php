<?php
namespace App\Http\Controllers;

use App\Models\Sensors;
use Illuminate\Http\Request;
use Illuminate\Http\Respone;

class SensorsController extends Controller
{
    //get semua data
    public function history()
    {
        $sensors = Sensors::OrderBy("id", "DESC")->get();

        $outPut = [
            "success" => true,
            "message" => "sensors",
            "results" => $sensors
        ];

        return $outPut;
    }

    //get data terbaru
    public function realtime()
    {
        $sensors = Sensors::OrderBy("id", "DESC")->first();

        $outPut = [
            "success" => true,
            "message" => "sensors",
            "results" => $sensors
        ];

        return $outPut;
    }

    //fungsi create
    public function store(Request $request)
    {
        $input = $request->all();
        $sensors = Sensors::create($input);

        return response()->json($sensors, 200);
    }

     //fungsi get data sensor berdasarkan id
     public function show($id)
     {
         $sensors = Sensors::find($id);
 
         if(!$sensors){
             abort(404);
         }
 
         return response()->json($sensors, 200);
     }

     //fungsi update data sensor berdasarkan id
    public function update(Request $request, $id)
    {
        $input = $request->all();

        $sensors = Sensors::find($id);

        if(!$sensors){
            abort(404);
        }

        $sensors->fill($input);
        $sensors->save();

        return response()->json($sensors, 200);
    }

    //fungsi delete data sensor berdasarkan id
    public function destroy($id)
    {
        $sensors = Sensors::find($id);

        if(!$sensors){
            abort(404);
        }

        $sensors->delete();
        $message = ["message" => 'delete succesfully', 'id' => $id];

        return response()->json($message, 200);
    }
}