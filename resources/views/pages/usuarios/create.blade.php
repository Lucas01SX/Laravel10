@extends('index')

@section('content')
    <form class="form" method="POST" action="{{ route('cadastrar.usuarios') }}">
        @csrf
        <div class="d-flex justify-content-between flex wrap flex-md-nowrap aling-items-center">
            <h1 class="h2">Criar Novo Usuário</h1>
        </div>
        <div class="mb-3">
            <label class="form-label">Nome</label>
            <input type="text" value="{{ old('name') }}" class="form-control @error('name') is-invalid @enderror"
                name="name">
            @if ($errors->has('name'))
                <div class="invalid-feedback"> {{ $errors->first('name') }} </div>
            @endif
        </div>
        <div class="mb-3">
            <label class="form-label">E-mail</label>
            <input type="email" value="{{ old('email') }}" class="form-control @error('email') is-invalid @enderror"
                name="email">
            @if ($errors->has('email'))
                <div class="invalid-feedback"> {{ $errors->first('email') }} </div>
            @endif
        </div>
        <div class="mb-3">
            <label class="form-label">Senha</label>
            <input type="password" value="{{ old('password') }}" class="form-control @error('password') is-invalid @enderror"
                password="password">
            @if ($errors->has('password'))
                <div class="invalid-feedback"> {{ $errors->first('password') }} </div>
            @endif
        </div>
        <button type="submit" class="btn btn-success">Gravar</button>
    </form>
@endsection
