<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Instalaciones;

class InstalacionesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except(['index']);
    }

    public function index(Request $request)
    {
        $user = $request->user();

        if ($user && $user->isOwner()) {
            $instalaciones = $user->instalaciones()->get();
        } else {
            $instalaciones = Instalaciones::latest('created_at')->get();
        }

        return view('instalaciones.index', compact('instalaciones'));
    }

    public function store(Request $request)
    {
        $user = $request->user();
        $instalacion = new Instalaciones();
        $instalacion->name = $request->name;
        $instalacion->description = $request->description;
        $instalacion->user_id = $user->id;
        $instalacion->save();
        return redirect()->route('instalaciones.index');
    }

    public function create()
    {
        return view('instalaciones.create');
    }

    public function destroy($id)
    {
        $instalacion = Instalaciones::findOrFail($id);
        $instalacion->delete();
        return redirect()->route('instalaciones.index');
    }

    public function edit($id)
    {
        $instalacion = Instalaciones::findOrFail($id);
        return view('instalaciones.edit', compact('instalacion'));
    }

    public function update(Request $request, $id)
    {
        $instalacion = Instalaciones::findOrFail($id);
        $instalacion->name = $request->name;
        $instalacion->description = $request->description;
        $instalacion->save();
        return redirect()->route('instalaciones.index');
    }
}
