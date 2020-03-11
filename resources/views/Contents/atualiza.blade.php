@extends('layouts.index')
@section('content')
@include('includes.alerts')
<div>
    <form action="{{route('agenda.update', $item->id)}}" method="post" class="pt-3" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <table class="table table-borderless"><tr><td style="text-align:right">
        Nome:</td><td><input type="text" name="nome" placeholder="Nome" value="{{$item->nome ?? old('nome')}}"></td></tr>
        <tr><td style="text-align:right">Telefone:</td><td><input type="text" name="numero" placeholder="Ex: 99 99999 9999" value="{{$item->numero ?? old('numero')}}"></td></tr>
        <tr><td style="text-align:right">Telefone Comercial</td><td><input type="text" name="numero_trabalho" placeholder="Ex: 99 99999 9999" value="{{$item->numero_trabalho ?? old('numero_trabalho')}}"></td></tr>
        <tr><td style="text-align:right">Endereço</td><td><input type="text" name="endereco" placeholder="Ex: Rua Tiradentes, 85" value="{{$item->endereco ?? old('endereco')}}"></td></tr>
        </table>
        <center>
            <input type="file" name="foto"><br><br>
        <button type="submit" class="btn btn-dark">Enviar</button>
        </center>
    </form>
</div>
@endsection