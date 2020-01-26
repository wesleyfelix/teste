<?php

namespace App\Http\Controllers;


use App\Models\Cliente;
use Illuminate\Support\Facades\Request;

class ClienteController extends Controller
{

    protected $model_cliente;

    /**
     * ClienteController constructor.
     * @param Cliente $model_cliente
     */
    function __construct(Cliente $model_cliente){
        $this->model_cliente = $model_cliente;
    }

    public function listCliente(Request $request){
        $cliente = $this->model_cliente->get();

        return view('Cliente.list', [
            'clientes' => $cliente
        ]);
    }

}
