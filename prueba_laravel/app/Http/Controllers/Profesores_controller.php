<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Profesores_controller extends Controller
{
        public function page(){
            return view('profesores_home');
        }
    
    
        //funcion para listar estudiantes 
        public function list_profesores(){
            $studens=DB::table('profesores')
            ->orderBy('id_profesor', 'desc')
            ->get();    
            
        }
    
        //funcion para crear estudiantes
        public function createprofesores(Request $request){
            $studen=DB:: table('profesores')->insert(
                array(
                    'documento'=>$request('documento'),
                    'nombre'=>$request('nombre'),
                    'telefono'=>$request('telefono'),
                    'direccion'=>$request('direccion')
                )
            );
            
        }
        //funcion para eliminar estudiantes
        public function deleteprofesores($id){
            $studen=DB::table('profesores')->where('id_profesor', $id)->delete();                
        }
        //funcion para listar un solo estudiante
        public function edit($id){
            $edit_student= DB:: table('profesores')->where('id_profesor', $id)->first();
        }
        
        //funcion para editar un estudiante
        public function update_profesores(Request $request){
            $id = $request->input('id_profesor');
            $update_estudiante=DB:: table('profesores')->where('id_profesor', $id)
                ->update(
                    array(
                        'documento'=>$request('documento'),
                        'nombre'=>$request('nombre'),
                        'telefono'=>$request('telefono'),
                        'direccion'=>$request('direccion')
                    )
                );
        }
}
