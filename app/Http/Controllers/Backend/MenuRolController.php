<?php

namespace App\Http\Controllers\Backend;

use App\Models\Backend\Rol;
use App\Models\Backend\Menu;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MenuRolController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $roles = Rol::orderBy('id')->get(); //Esta es la forma de hacer una consulta rapidísima con Eloquent
        $menus = Menu::getMenu();
        $menusRols = Menu::with('roles')->get()->pluck('roles', 'id')->toArray();
        return view('theme.back.menu-rol.index', compact('roles', 'menus', 'menusRols'));//El texto 'rol' se convierte en la var '$rol' y la envía
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function guardar(Request $request)
    {
        if ($request->ajax()) {
            $menu = Menu::findOrFail($request->menus_id);
            if ($request->estado == 1) {
                $menu->roles()->attach($request->roles_id);
                return response()->json(['respuesta' => 'El rol se asignó correctamente']);
            } else {
                $menu->roles()->detach($request->roles_id);
                return response()->json(['respuesta' => 'El rol se eliminó correctamente']);
            }
        } else {
            abort(404);
        }
    }

}
