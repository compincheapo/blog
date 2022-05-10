<?php

namespace App\Http\Controllers;

use App\Models\Curso;
use Illuminate\Http\Request;

class CursoController extends Controller
{
    public function index(){
        $cursos = Curso::orderBy('id', 'desc')->paginate();
    
        return view('cursos.index', compact('cursos'));
    }

    public function create(){
        return view('cursos.create');
    }

    public function store(Request $request ){

        // Validamos antes de crear el objeto, tomar los valores y almacenar en BD.

        $request->validate([            
            'name' => 'required|max:10',
            'description' => 'required',
            'category' => 'required'
        ]);

        $curso = new Curso();

        $curso->name = $request->name;
        $curso->description = $request->description;
        $curso->category = $request->category;


        $curso->save();

        return redirect()->route('cursos.show', $curso);
    }

    public function show(Curso $curso){

        return view('cursos.show', compact('curso'));
    }

    public function edit(Curso $curso){     //Se transforma el id en un objeto tipo Curso. 

        return view('cursos.edit', compact('curso'));
    }

    public function update(Request $request, Curso $curso){

        $request->validate([            
            'name' => 'required',
            'description' => 'required',
            'category' => 'required'
        ]);

        $curso->name = $request->name;
        $curso->description = $request->description;
        $curso->category = $request->category;

        $curso->save();

        return redirect()->route('cursos.show', $curso);
    }
}
