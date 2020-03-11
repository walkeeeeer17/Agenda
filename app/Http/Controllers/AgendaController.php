<?php

namespace App\Http\Controllers;

use App\Http\Requests\AgendaRequest;
use Illuminate\Http\Request;
use App\Models\Agenda;
use Illuminate\Support\Facades\Storage;

class AgendaController extends Controller
{
    protected $request;
    private $repository;
    public function __construct(Request $request, agenda $agenda)
    {
        $this->request = $request;
        $this->repository = $agenda;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $agenda = agenda::orderby('nome')->paginate();
        return view('contents.lista', ['agenda' => $agenda]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('contents.criaContato');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AgendaRequest $request)
    {
        $data = $request->except('foto');
        if($request->hasFile('foto') && $request->foto->isValid())
        {
            $caminho = $request->foto->store('contatos');
            $data['foto'] = $caminho;
        }
        agenda::create($data);
        return redirect()->route('agenda.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        if(!$contato = agenda::find($id))
        {
            return redirect()->back();
        }
        return view('contents.show', ['contato' => $contato]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $item = agenda::find($id);
        return view('contents/atualiza', ['item' => $item]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(AgendaRequest $request, $id)
    {
        if(!$agenda = agenda::find($id))
        {
            return redirect()->back();
        }
        $data = $request->all();
        if($request->hasFile('foto') && $request->foto->isValid())
        {
            if($agenda->foto && Storage::exists($agenda->foto))
            {
                Storage::delete($agenda->foto);
            }
            $caminho = $request->foto->store('contatos');
            $data['foto'] = $caminho;
        }
        $agenda->update($data);
        return redirect()->route('agenda.index');
    }

    public function search(Request $request)
    {
        $filters = $request->except('token');
        $agenda = $this->repository->search($request->pesquisa);
        return view('contents.lista', ['agenda' => $agenda, 'filters' => $filters]);
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $agenda = agenda::where('id', $id)->first();
        if(!$agenda)
        {
            return redirect()->back();
        }
        $agenda->delete();
        return redirect()->route('agenda.index');
    }
}
