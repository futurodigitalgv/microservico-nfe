<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Services\NFeService;

class NFeController extends Controller
{
    public function emitir(Request $request)
    {
        if ($request->header('X-API-Key') !== env('NFE_API_KEY')) {
            return response()->json(['error' => 'Não autorizado'], 401);
        }

        // Aqui você chama seu serviço de emissão de NFe
        // $resultado = app(NFeService::class)->emitirNFe($request->all());
        // return response()->json($resultado);

        // Exemplo de resposta de teste:
        return response()->json(['ok' => true, 'msg' => 'API funcionando!']);
    }
}
