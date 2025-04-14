@extends('layouts.app')

@section('content')

   
    <div>
        <form action="{{ route('medicines.store') }}" method="post"> Cadastro de Medicamento</form>

        @csrf

        <div class="form-group">
            <label for="name">Nome</label>
            <input type="text" name="name" id="name">
        </div>

        <div class="form-group">
            <label for="description">Descrição</label>
            <input type="text" name="description" id="description">
        </div>

        <div class="form-group">
            <label for="price">Preço</label>
            <input type="text" name="price" id="price">
        </div>

        <div class="form-group">
            <label for="manufacturer">Fabricante</label>
            <input type="text" name="manufacturer" id="manufacturer">
        </div>

        <div class="form-group">
            <label for="quantity">Quantidade</label>
            <input type="text" name="quantity" id="quantity">
            
        </div>

        <div class="form-group">
            <label for="expiration_date">Data de Validade</label>
            <input type="date" name="expiration_date" id="expiration_date">
        </div>

        <div>
            
    </div>
@endsection