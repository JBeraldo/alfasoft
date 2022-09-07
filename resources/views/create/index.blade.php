@extends('layouts.site')

@section('content')
    <div class="container">
        <div class="center">
            <div class="form">
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                @if (!isset($contact))
                    <form action="{{ url('contacts/create') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="name">Nome</label>
                            <input type="text" class="form-control" id="name" name="name" placeholder="Nome">
                        </div>
                        <div class="form-group">
                            <label for="contact">Contato</label>
                            <input type="text" class="form-control" id="contact" name="contact" placeholder="Contato">
                        </div>
                        <div class="form-group">
                            <label for="email">E-mail</label>
                            <input type="text" class="form-control" id="email" name="email" placeholder="E-mail">
                        </div>
                        <button type="submit" class="btn btn-primary">Salvar</button>
                    </form>
                @else
                    <form method="post">
                        @csrf
                        <div class="hidden-field form-group">
                            <label for="id">ID</label>
                            <input type="text" class="form-control" name="id" value="{{ $contact->id }}" id="id">
                        </div>
                        <div class="form-group">
                            <label for="name">Nome</label>
                            <input type="text" class="form-control" value="{{ $contact->name }}" name="name" id="name"
                                placeholder="Nome">
                        </div>
                        <div class="form-group">
                            <label for="contact">Contato</label>
                            <input type="text" class="form-control" value="{{ $contact->contact }}" name="contact" id="contact"
                                placeholder="Contato">
                        </div>
                        <div class="form-group">
                            <label for="email">E-mail</label>
                            <input type="text" class="form-control" value="{{ $contact->email }}" name="email" id="email"
                                placeholder="E-mail">
                        </div>
                        <button type="submit" formaction="{{ url('contacts/update') }}" class="btn btn-primary">Editar</button>
                        <button type="submit" formaction="{{ url('contacts/delete') }}" class="btn btn-danger">Remover</button>
                    </form>
                @endif
            </div>
        </div>
    </div>
@endsection
