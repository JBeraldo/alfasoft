@extends('layouts.site')
    
@section('content')
    <div class="container">
        <div class="center">
            <div class="form">
                <form>
                    <div class="form-group">
                      <label for="name">Nome</label>
                      <input type="text" class="form-control" id="name" placeholder="Nome">
                    </div>
                    <div class="form-group">
                      <label for="contact">Contato</label>
                      <input type="text" class="form-control" id="contact" placeholder="Contato">
                    </div>
                    <div class="form-group">
                      <label for="email">E-mail</label>
                      <input type="text" class="form-control" id="email" placeholder="E-mail">
                    </div>
                    <button type="submit" class="btn btn-primary">Enviar</button>
                    <button type="submit" class="btn btn-danger">Remover</button>
                  </form>
            </div>
        </div>
    </div>
@endsection