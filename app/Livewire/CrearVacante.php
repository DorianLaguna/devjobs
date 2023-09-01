<?php

namespace App\Livewire;

use App\Models\Categoria;
use App\Models\Salario;
use Livewire\Component;

class CrearVacante extends Component
{

    public $titulo;
    public $salario;
    public $categoria;
    
    protected $rules=[
        'titulo' => 'required|string',
        'salario' => 'required',
        'categoria' => 'required',
        
    ];

    public function render()
    {
        // Consultar base de datos
        $salarios = Salario::all();
        $categorias = Categoria::all();

        return view('livewire.crear-vacante', [
            'salarios' => $salarios,
            'categorias' => $categorias
        ]);
    }
}
