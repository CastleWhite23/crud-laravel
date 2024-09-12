<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Plantas;

class plantasController extends Controller
{
    public function create(){
        return view('plantas.PlantasCreate');
    }

    public function store(Request $request){

        Plantas::create([
            'Especie' => $request->Especie,
            'Tipo' => $request->Tipo,
            'Porte' => $request->Porte,
        ]);

        return 'Planta registrada com sucesso!';
    }

    public function show($id){

        $plantas = Plantas::findOrFail($id);
        return view('plantas.PlantasShow', ['plantas' => $plantas]);
    
    }

    public function edit($id){

        $plantas = Plantas::findOrFail($id);
        return view('plantas.PlantasEdit', ['plantas' => $plantas]);
    
    }

    public function update(Request $request, $id){

        $plantas = Plantas::findOrFail($id);

        $plantas->update([
            'Especie' => $request->Especie,
            'Tipo' => $request->Tipo,
            'Porte' => $request->Porte,
        ]);

        return 'Plantas atualizadas com sucesso!';
    }

    public function delete($id){

        $plantas = Plantas::findOrFail($id);
        return view('plantas.PlantasDelete', ['plantas' => $plantas]);
    
    }

    public function destroy($id){

        $plantas = Plantas::findOrFail($id);
        $plantas->delete();

        return 'Plantas excluidas com sucesso!';
    }


}
