@extends('layouts.master')

@section('title') Compte @endsection

@section('subTitle') Créer @endsection

@section('content')

    <section class="card">
        <div class="card-header">
            <h4 class="card-title"></h4>
        </div>
        <div class="card-content">

            <div class="card-body">

                {{ Form::open(['route'=>'compte.store', 'files'=>true]) }}
                <div class="row">
                    <div class="col-6">
                        <div class="form-group">
                            <label for="name">Libelle</label>
                            <input type="text" name="libelle" class="form-control" id="nom">
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group">
                            <label for="name">Montant</label>
                            <input type="text" name="montant" class="form-control" id="nom">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-6">
                        <div class="form-group">
                            <label for="name">Date debut</label>
                            <input type="date" name="date_debut" class="form-control" id="nom">
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group">
                            <label for="name">Date fin</label>
                            <input type="date" name="date_fin" class="form-control" id="nom">
                        </div>
                    </div>
                </div>
                <button id="save" type="submit" class="btn btn-primary btn-icon-split mt-3">
                    <span class="icon text-white-50">
                        <i class="fas fa-save"></i>
                    </span>
                    <span class="text">Enregistrer</span>
                </button>

                {{ Form::close() }}

            </div>
            <div class="col-8">
                <div class="m-2">

                </div>

            </div>

        </div>

        </div>
        </div>
    </section>

@endsection
