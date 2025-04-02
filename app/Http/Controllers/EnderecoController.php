<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Http\Requests\Endereco\SalvarRequest;
use App\Models\Endereco;


 class EnderecoController extends Controller
{
    public function index()
    {
        return view('busca');
    }

    public function buscar(Request $request)
    {
        $cep = $request->input('cep');
        $cep = preg_replace('/\D/', '',  $cep);
        $url = "https://viacep.com.br/ws/{$cep}/json/";
        $response = Http::get($url)->json();

        // dd($response);
        return view('adicionar')->with([
            'cep' => $request->input('cep') ?? '',
            'logradouro' => $response['logradouro'] ?? '',
            'bairro' => $response['bairro'] ?? '',
            'cidade' => $response['localidade'] ?? '',
            'estado' => $response['uf'] ?? '',
        ]);
    }

    public function salvar(SalvarRequest $request)
    {

        $endereco = Endereco::where('cep', $request->input('cep'))->first();

        if ($endereco) {
            return redirect()->route('listar')->with('error', 'CEP ja cadastrado', );
        }
       
        Endereco::create([
            'cep'           => $request->input('cep'),
            'logradouro'    => $request->input('logradouro'),
            'numero'        => $request->input('numero'),
            'bairro'        => $request->input('bairro'),
            'cidade'        => $request->input('cidade'),
            'estado'        => $request->input('estado'),
        ]);


        return redirect()->route('listar')->with('success', 'Endereço salvo com sucesso');
    }

    public function listar(){
        $enderecos = Endereco::paginate(5)->withQueryString();
        return view('listar')->with('enderecos', $enderecos);

    }

    public function excluir($id)
    {
        try {
            $endereco = Endereco::findOrFail($id); // Busca pelo ID e lança erro se não encontrar
            $endereco->delete();
    
            return redirect()->route('listar')->with('success', 'Endereço excluído com sucesso');
        } catch (\Exception $e) {
            return redirect()->route('listar')->with('error', 'Erro ao excluir endereço');
        }
    }
}
