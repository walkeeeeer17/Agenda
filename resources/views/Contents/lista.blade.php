@extends('layouts.index')

@section('content')
<form action="{{route('agenda.search')}}" method="post">
    @csrf
    <input type="text" name="pesquisa" placeholder="Filtrar" class="col-sm-2 col-form-label" value="{{$filters['filter'] ?? ''}}"><button type="submit" class="btn btn-dark">Pesquisar</button>
</form>
<table class="table">
    <thead>
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
                <td>{{$item->nome}}</td>
                <td>{{$item->numero}}</td>
                <td>{{$item->numero_trabalho}}</td>
                <td>{{$item->endereco}}</td>
                <td><a href="{{route('agenda.edit', $item->id)}}" class="btn btn-dark">Editar</a></td><td><form action="{{route('agenda.destroy', $item->id)}}" method="post">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-dark">Deletar</button>
                </form></td>
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
