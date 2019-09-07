<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FrutaController extends Controller
{
    //se va a traer todo de la base de datos mediante una función
    public function index(){
        $frutas = DB::table('frutas')->orderBy('id', 'desc')->get();

        return view('fruta.index', [
            'frutas' => $frutas
        ]);
    }

    //traer una sola fruta
    public function detail($id){
        $fruta = DB::table('frutas')->where('id' , '=', $id)->first();

        return view('fruta.detail', [
            'fruta' => $fruta
        ]);
    }

    //crear fruta
    public function create(){
        return view('fruta.create');
    }

    //guardar fruta
    public function save(Request $request){
        //guardamos el registro
        $fruta = DB::table('frutas')->insert(array(
            'nombre' => $request->input('nombre'),
            'descripcion' => $request->input('descripcion'),
            'precio' => $request->input('precio'),
            'fecha' => date('y-m-d')
        ));

        return redirect()->action('FrutaController@index')->with('status', 'Fruta creada correctamente');
    }

    //borrar fruta
    public function delete($id){
        $fruta = DB::table('frutas')->where('id', '=', $id)->delete();
        return redirect()->action('FrutaController@index')->with('status', 'Fruta eliminada correctamente');
    }

    //Actualizar fruta
    public function edit($id){
        //sacar una fruta de la base de datos
        $fruta = DB::table('frutas')->where('id', $id)->first();

        //pasarle a la vista el objeto y rellenar el formulario
        return view('fruta.create', [
            'fruta' => $fruta
        ]);
    }

    public function update(Request $request){
        $id = $request->input('id');

        $fruta = DB::table('frutas')->where('id', $id)
                                    ->update(array(
                                        'nombre' => $request->input('nombre'),
                                        'descripcion' => $request->input('descripcion'),
                                        'precio' => $request->input('precio'),
                                        'fecha' => date('y-m-d')
                                    ));  
        return redirect()->action('FrutaController@index')->with('status', 'Fruta actualizada correctamente');                                                
    }
}
