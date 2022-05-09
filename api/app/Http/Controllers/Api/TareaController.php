<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Tarea;

class TareaController extends Controller
{
    public function index()
    {
        $tareas = Tarea::all();
        return $tareas;
    }

    public function store(Request $request)
    {
        $tarea = new Tarea();
        $tarea->name = $request->name;
        $tarea->description = $request->description;
        $tarea->date = $request->date;

        $tarea->save();
    }

    public function show($id)
    {
        $tarea = Tarea::find($id);
        return $tarea;
    }

    public function update(Request $request, $id)
    {
        $tarea = Tarea::findOrFail($request->id);
        $tarea->name = $request->name;
        $tarea->description = $request->description;
        $tarea->date = $request->date;

        $tarea->save();
        return $tarea;
    }

    public function destroy($id)
    {
        $tarea = Tarea::destroy($id);
        return $tarea;
    }
}
