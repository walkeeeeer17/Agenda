@extends('layouts.index')

@section('content')
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/core.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.form/4.2.2/jquery.form.min.js"></script>
<script>
    $(function()
    {
        $document().on('click', '.delete' function()
        {
            
        })
    })
</script>
<form action="{{route('agenda.search')}}" method="post">
    @csrf
    <input type="text" name="pesquisa" placeholder="Filtrar" class="col-sm-2 col-form-label" value="{{$filters['filter'] ?? ''}}"><button type="submit" class="btn btn-dark">Pesquisar</button>
</form>
<table class="table">
    <thead>
        <th></th>
        <th>Nome</th>
        <th>Telefone</th>
        <th>Telefone Comercial</th>
        <th>Endereço</th>
        <th width="50px">Ações</th>
        <th width="50px"></th>
        <th width="50px"></th>
    </thead>
    <tbody>
        @foreach ($agenda as $item)
            <tr>
                <td><input type="hidden" name="id" value="{{$item->id}}"></td>
                <td>{{$item->nome}}</td>
                <td>{{$item->numero}}</td>
                <td>{{$item->numero_trabalho}}</td>
                <td>{{$item->endereco}}</td>
                <td><a href="{{route('agenda.edit', $item->id)}}" class="btn btn-dark">Editar</a></td><td>
                    <button type="submit" name="deletar" class="btn btn-dark">Deletar</button>
                </td>
                <td><a href="{{route('agenda.show', $item->id)}}" class="btn btn-dark">Detalhes</a></td>
            </tr>
        @endforeach
    </tbody>
</table>
@if (isset($filters))
    {{$agenda->appends($filters)->links()}}    
@else
   {{$agenda->links()}}
@endif
@endsection
