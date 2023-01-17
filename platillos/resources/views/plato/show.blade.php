@extends('layouts.app')

@section('template_title')
    {{ $plato->name ?? 'Show Plato' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Plato</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('platos.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Categoria:</strong>
                            {{ $plato->categoria->nombre; }}
                        </div>
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $plato->nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Caracteristicas:</strong>
                            {{ $plato->caracteristicas }}
                        </div>
                        <div class="form-group">
                            <strong>Foto:</strong>
                        
                                <img class="img-thumbnail img-fluid" src="{{ asset('storage').'/'.$plato->Foto}}" alt="" width="200" height="200">    
                                
 
                              
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection