<?php

namespace App\Http\Controllers;
use App\Models\Pedido;
use App\Models\Cliente;
use GuzzleHttp\Client; 
use Illuminate\Http\Request;

class OrderController extends Controller


{
    // public function index()
    // {
    //     return view('order.showord');
    // }



    public function index(Request $request)
    {
        // Obtén el nombre del cliente desde la solicitud (puedes pasarlo como un parámetro en la URL).
        $nombreCliente = $request->input('cliente');

        // Busca el cliente en la base de datos por el campo 'name'.
        $cliente = Cliente::where('name', $nombreCliente)->first();

        if (!$cliente) {
            // Manejo del caso en el que el cliente no existe.
            return redirect()->route('error.page');
        }

        // Obtén las órdenes relacionadas con el cliente.
        $ordenes = Pedido::where('cliente_id', $cliente->id)->get();

        return view('order.showord', compact('cliente', 'ordenes'));
    }
}
