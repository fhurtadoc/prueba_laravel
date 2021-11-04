<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Estudiantes_controller extends Controller
{

    public function page(){
        return view('estudiante_home');
    }
    //funcion para listar estudiantes 
    public function list_studens(){
        $studens=DB::table('estudiante')
        ->orderBy('id_estudiante', 'desc')
        ->get();

        return $studens;
    }

    //funcion para crear estudiantes
    public function createStudens(Request $request){
        $studen=DB:: table('estudiante')->insert(
            array(
                'documento_estudiante'=>$request('documento_estudiante'),
                'nombre_estudiante'=>$request('nombre_estudiante'),
                'telefono_estudiante'=>$request('telefono_estudiante')
            )
        );
    }
    //funcion para eliminar estudiantes
    public function deleteStudens($id){
        $studen=DB::table('estudiante')->where('id_estudiante', $id)->delete();                
    }
    //funcion para listar un solo estudiante
    public function edit($id){
        $edit_student= DB:: table('estudiante')->where('id_estudiante', $id)->first();
    }
    
    //funcion para editar un estudiante
    public function update(Request $request){
        $id = $request->input('id_estudiante');
        $update_estudiante=DB:: table('estudiante')->where('id', $id)
            ->update(
                array(
                    'documento_estudiante'=>$request('documento_estudiante'),
                    'nombre_estudiante'=>$request('nombre_estudiante'),
                    'telefono_estudiante'=>$request('telefono_estudiante')
                )
            );
    }

}