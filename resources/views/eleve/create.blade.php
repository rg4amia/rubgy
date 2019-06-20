@extends('layouts.master')

@section('title') Eleves @endsection

@section('subTitle') Create @endsection


@section('content')

    <section class="card">
        <div class="card-header">
            <h4 class="card-title"></h4>
        </div>
        <div class="card-content">

            <div class="card-body">

                <div class="row">

                    <div class="col-4">

                        <div class="row">
                            {{ Form::open(['url'=>route('eleve.store')]) }}
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="name">Nom</label>
                                    <input type="text" name="nom" class="form-control" id="nom">
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="form-group">
                                    <label for="slug">Prenom </label>
                                    <input type="text" name="prenom" class="form-control" id="prenom">
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="form-group">
                                    <label for="slug">Date Naissance</label>
                                    <input type="text" name="date_naissance" class="form-control" id="date_naissance">
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="form-group">
                                    <label for="slug">Nom Parent</label>
                                    <input type="text" name="nom_parent" class="form-control" id="nom_parent">
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="form-group">
                                    <label for="slug">Contact</label>
                                    <input type="text" name="contact" class="form-control" id="contact">
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="form-group">
                                    <label for="slug">Email</label>
                                    <input type="text" name="email" class="form-control" id="email">
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="form-group">
                                    <label for="slug">Groupe Sanguin</label>
                                    <input type="text" name="groupe_sanguin" class="form-control" id="groupe_sanguin">
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="form-group">
                                    <label for="slug">Photo</label>
                                    <input type="text" name="photo" class="form-control" id="photo">
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="form-group">
                                    <label for="slug">CM</label>
                                    <input type="text" name="cm" class="form-control" id="cm">
                                </div>
                            </div>

                             <div class="col-12">
                                <div class="form-group">
                                    <label for="slug">PJ</label>
                                    <input type="text" name="pj" class="form-control" id="pj">
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
