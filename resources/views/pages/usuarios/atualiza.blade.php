@extends('index')

@section('content')

    <form class="form" method="POST" action="{{ route('atualizar.usuarios', $editUsuario->id) }}">
        @csrf
        @method('PUT')
        <div class="d-flex justify-content-between flex wrap flex-md-nowrap aling-items-center">
            <h1 class="h2">Editar Usuários</h1>
        </div>    
        <div class="mb-3">
            <label class="form-label">Nome</label>
            <input type="text" value="{{ isset($editUsuario->name) ? $editUsuario->name : old('name') }}" class="form-control @error('name') is-invalid @enderror" name="name">
            @if ($errors->has('name'))
                <div class="invalid-feedback"> {{ $errors->first('name') }} </div>
            @endif
        </div>
        <div class="mb-3">
            <label class="form-label">E-mail</label>
            <input type="email" value="{{ isset($editUsuario->email) ? $editUsuario->email : old('email') }}" class="form-control @error('email') is-invalid @enderror" name="email">
            @if ($errors->has('email'))
                <div class="invalid-feedback"> {{ $errors->first('email') }} </div>
            @endif
        </div>
        <div class="mb-3">
            <label class="form-label">Nova Senha</label>
            <input type="password" class="form-control @error('password') is-invalid @enderror" password="password">
            @if ($errors->has('password'))
                <div class="invalid-feedback"> {{ $errors->first('password') }} </div>
            @endif
        </div>
        <button type="submit" class="btn btn-success">Gravar</button>
    </form>

@endsection