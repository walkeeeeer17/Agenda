@extends('layouts.index')
@section('content')
@include('includes.alerts')
<div>
    <form action="{{route('agenda.store')}}" method="post" class="pt-3" enctype="multipart/form-data">
        @csrf
        <table class="table table-borderless"><tr><td style="text-align:right">
        Nome:</td><td><input type="text" name="nome" placeholder="Nome" value="{{old('nome')}}"></td></tr>
        <tr><td style="text-align:right">Telefone:</td><td><input type="text" name="numero" placeholder="Ex: 99 99999 9999" value="{{old('numero')}}"></td></tr>
        <tr><td style="text-align:right">Telefone Comercial</td><td><input type="text" name="numero_trabalho" placeholder="Ex: 99 99999 9999" value="{{old('numero_trabalho')}}"></td></tr>
        <tr><td style="text-align:right">Endereço</td><td><input type="text" name="endereco" placeholder="Ex: Rua Tiradentes, 85" value="{{old('endereco')}}"></td></tr>
        </table>
        <center>
            <input type="file" name="foto"><br><br>
            <button type="submit" class="btn btn-dark">Enviar</button>
        </center>
    </form>
</div>
@endsection