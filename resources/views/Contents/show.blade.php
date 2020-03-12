@extends('layouts.index')

@section('content')
    <img src="{{url("storage/$contato->foto")}}" class="rounded mx-auto d-block">
    <table class="table table-striped">
        <tr>
            <th>
                Nome
            </th>
            <th>
                Telefone
            </th>
            <th>
                Telefone Comercial
            </th>
            <th>Endereço</th>
            <th>Data de Criação</th>
        </tr>
        <tr>
            <td>
                {{$contato->nome}}
            </td>
            <td>
                {{$contato->numero}}
            </td>
            <td>
                {{$contato->numero_trabalho}}
            </td>
            <td>
                {{$contato->endereco}}
            </td>
            <td>
                {{$contato->dtCriacao()}}
            </td>
        </tr>
    </table>

    <center><table>
    <tr><td><form action="{{route('agenda.destroy', $contato->id)}}" method="post">
        @csrf
        @method('DELETE')
        <button type="submit" class="delete btn btn-dark">Deletar</button></center>
    </form></td><td><a href="{{route('agenda.edit', $contato->id)}}" class="btn btn-dark">Editar</a></td></tr>
    </table></center> 
@endsection