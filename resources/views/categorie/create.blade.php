@extends('layouts.master')

@section('title') Categorie @endsection

@section('subTitle') Créer @endsection

@section('content')

    <section class="card">
        <div class="card-header">
            <h4 class="card-title"></h4>
        </div>
        <div class="card-content">

            <div class="card-body">

                {{ Form::open(['route'=>'categorie.store', 'files'=>true]) }}
                <div class="row">

                    <div class="col-6">
                        <div class="form-group">
                            <label for="name">Libelle</label>
                            <input type="text" name="libelle" class="form-control" id="libelle" required>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group">
                            <label for="name">Designation</label>
                            <input type="text" name="designation" class="form-control" id="designation" required>
                        </div>
                    </div>
                </div>
                <button id="save" type="submit" class="btn btn-primary btn-icon-split mt-3">
                    <span class="icon text-white-50">
                        <i class="feather icon-save"></i>
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
