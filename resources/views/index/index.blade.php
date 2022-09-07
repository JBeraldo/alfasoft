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
                        <div class="col-md-3">
                            nome
                        </div>
                        <div class="col-md-1">
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
                @forelse ($contacts as $contact)
                    <div class="col-md-12">
                        <div class="row list-item">
                            <div class="col-md-1">
                                {{ $contact->id }}
                            </div>
                            <div class="col-md-3">
                                {{ $contact->name }}
                            </div>
                            <div class="col-md-1">
                                {{ $contact->contact }}
                            </div>
                            <div class="col-md-3">
                                {{ $contact->email }}
                            </div>
                            <a href="{{ url('create/' . $contact->id) }}"class="col-md-2 btn btn-success">
                                Detalhes
                            </a>
                            <div class="col-md-2">
                                <form action="{{ url('contacts/delete')}}" method="POST">
                                    @csrf
                                    <input type="text" class="hidden-field" name="id" id="id" value="{{ $contact->id }}">
                                    <button class="btn btn-danger" style="width: 100%;height:100%">
                                        Remover
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                @empty
                @endforelse
            </div>
        </div>
    </div>
@endsection
