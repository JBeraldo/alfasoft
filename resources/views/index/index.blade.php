@extends('layouts.site')
    
@section('content')
    <div class="container">
        <a href="{{ url('create') }}" class="btn btn-success">
            Adicionar
        </a>
        <div class="list">
            <div class="row">
                <div class="col-md-12">
                    <div class="row list-header">
                        <div class="col-md-1">
                            id
                        </div>
                        <div class="col-md-2">
                            nome
                        </div>
                        <div class="col-md-3">
                            contato
                        </div>
                        <div class="col-md-3">
                            e-mail
                        </div>
                        <div class="col-md-2">
                        </div>
                        <div class="col-md-2">
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="row list-item">
                        <div class="col-md-1">
                            id
                        </div>
                        <div class="col-md-2">
                            nome
                        </div>
                        <div class="col-md-2">
                            contato
                        </div>
                        <div class="col-md-3">
                            e-mail
                        </div>
                        <div class="col-md-2 btn btn-success">
                            Editar
                        </div>
                        <div class="col-md-2 btn btn-danger">
                            Remover
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="row list-item">
                        <div class="col-md-1">
                            id
                        </div>
                        <div class="col-md-2">
                            nome
                        </div>
                        <div class="col-md-2">
                            contato
                        </div>
                        <div class="col-md-3">
                            e-mail
                        </div>
                        <div class="col-md-2 btn btn-success">
                            Editar
                        </div>
                        <div class="col-md-2 btn btn-danger">
                            Remover
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection