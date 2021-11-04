<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Materias_controller extends Controller
{

    public function page(){
        return view('materias_home');
    }


    public function list_materias(){
        $studens=DB::table('materias')
        ->orderBy('codigo', 'desc')
        ->get();

        return $studens;
    }

    //funcion para crear estudiantes
    public function creatematerias(Request $request){
        $studen=DB:: table('materias')->insert(
            array(
                'nombre'=>$request('nombre'),
                'Fecha_y_hora_inicial'=>$request('Fecha_y_hora_inicial'),
                'Fecha_y_hora_final'=>$request('Fecha_y_hora_final'),
                'Limite_estudiantes'=>$request('Limite_estudiantes'),
                'Profesor'=>$request('Profesor')                
            )
        );
        
    }
    //funcion para eliminar estudiantes
    public function deletematerias($id){
        $studen=DB::table('materias')->where('codigo', $id)->delete();                
    }
    //funcion para listar un solo estudiante
    public function edit($id){
        $edit_student= DB:: table('materias')->where('codigo', $id)->first();
    }
    
    //funcion para editar un estudiante
    public function update_materias(Request $request){
        $id = $request->input('codigo');
        $update_estudiante=DB:: table('materias')->where('codigo', $id)
            ->update(
                array(
                    'nombre'=>$request('nombre'),
                    'Fecha_y_hora_inicial'=>$request('Fecha_y_hora_inicial'),
                    'Fecha_y_hora_final'=>$request('Fecha_y_hora_final'),
                    'Limite_estudiantes'=>$request('Limite_estudiantes'),
                    'Profesor'=>$request('Profesor')                
                )
            );
    }
}
