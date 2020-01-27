<?php

namespace App\Http\Controllers;


use App\Models\Cliente;
use Illuminate\Http\Request;

class ClienteController extends Controller
{

    protected $model_cliente;

    /**
     * ClienteController constructor.
     * @param Cliente $model_cliente
     */
    function __construct(Cliente $model_cliente)
    {
        $this->model_cliente = $model_cliente;
    }

    public function list(Request $request)
    {
        $clientes = $this->model_cliente->get();

        return view('cliente.list', [
            'clientes' => $clientes
        ]);
    }

    public function edit($id, Request $request)
    {
        $cliente = $this->model_cliente->find($id);

        return view('cliente.edit', [
            'cliente' => $cliente
        ]);
    }

    public function save(Request $request)
    {
        $cliente = $this->model_cliente->find($request->get('id'));

        //$cliente->fill($request->all());

        $cliente->update($request->all());

//        /$cliente->save();

        return redirect(route('cliente.list'));
    }

    public function delete($id)
    {
        $cliente = $this->model_cliente->find($id);

        $cliente->delete();

        return redirect(route('cliente.list'));
    }

    public function create(Request $request)
    {
        if ($request->isMethod('post')) {
            $this->model_cliente->create($request->all());

            return redirect(route('cliente.list'));
        }


        return view('cliente.new');

    }

}
