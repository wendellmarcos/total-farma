@extends('layouts.app')
@vite(['resources/css/app.css', 'resources/js/app.js'])


@section('content')

    <div class="form-container">

        <h1>Cadastro de Medicamentos</h1>

        <nav>
            <div class="navbar">
                <a href="index.blade.php">Inicio</a>
                <a href="">Lista</a>
                <a href="edit.blade.php">Adicionar</a>
                <a href="index.blade.php">Editar</a>
            </div>
        </nav>

        <div class="logo-container">
            <img src="{{  }}" alt="logo" class="logo">
        </div>

        <form class="form" action="{{ route('medicines.store')}}" method="post" id="form" enctype="multipart/form-data">

            @csrf
            @method('PUT')

            <div class="form-group">
                <label for="name">Nome</label>
                <input type="text" name="name" id="name" value="{{$medicine['name']}}">
            </div>

            <div class=" form-group">
                <label for="description">Descrição</label>
                <input type="text" name="description" id="description" value="{{$medicine['description']}}">
            </div>

            <div class=" form-group">
                <label for="price">Preço</label>
                <input type="text" name="price" id="price" value="{{$medicine['price']}}">
            </div>

            <div class=" form-group">
                <label for="manufacturer">Fabricante</label>
                <input type="text" name="manufacturer" id="manufacturer" value="{{$medicine['manufacturer']}}">
            </div>

            <div class=" form-group">
                <label for="quantity">Quantidade</label>
                <input type="text" name="quantity" id="quantity" value="{{$medicine['quantity']}}">
            </div>

            <div class=" form-group calendar">
                <label for="expiration_date">Data de Validade</label>
                <input type="date" name="expiration_date" id="expiration_date" value="{{$medicine['expiration_date']}}">
            </div>

            <div class=" form-group">
                <label for="image"></label>
                <input type="file" name="image" id="image" accept="image/*, .jpg, .jpeg, .png .webp">
            </div>




            @if(session('error'))
                <div class="error-message">
                    {{ session('error') }}
                </div>
            @endif
        </form>

        <button class="btn-form" type="submit">Cadastrar</button>
    </div>
@endsection