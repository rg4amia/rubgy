@extends('layouts.master')

@section('title') Eleves @endsection

@section('subTitle') Create @endsection

@section('css')
    <style>

        .choose_file{
            position:relative;
            display:inline-block;
            border-radius:8px;
            border:#ebebeb solid 1px;
            width:250px;
            padding: 4px 6px 4px 8px;
            font: normal 14px Myriad Pro, Verdana, Geneva, sans-serif;
            color: #7f7f7f;
            margin-top: 2px;
            background:white
        }
        .choose_file input[type="file"]{
            -webkit-appearance:none;
            position:absolute;
            top:0; left:0;
            opacity:0;
        }

    </style>
@endsection
@section('content')

    <section class="card">
        <div class="card-header">
            <h4 class="card-title"></h4>
        </div>
        <div class="card-content">

            <div class="card-body">

                {{ Form::open(['route'=>'eleve.store', 'files'=>true]) }}
               {{-- <div class="col">
                    <div class="form-group">
                        <label for="slug">Photo</label>
                        <input type="text" name="photo" class="form-control" id="photo">
                    </div>
                </div>--}}
                <div class="row">
                    <div class="col float-md-left">
                        <div class="thumbnail" type="file">
                            <img src="{{asset('non_disponible.jpg')}}" id="image_id" height="150" width="135" alt="photo d'identité" onclick="chooseFile();">
                        </div>
                        <div class="choose_file">
                            <span>Choisir une photo</span>
                            <input name="photo" id="fileInput" type="file" required />
                        </div>
                    </div>
                </div>
                <div class="row">

                    <div class="col-4">
                        <div class="form-group">
                            <label for="name">Nom</label>
                            <input type="text" name="nom" class="form-control" id="nom" required>
                        </div>
                    </div>
                    <div class="col-4">
                    <div class="form-group">
                            <label for="slug">Prenom </label>
                            <input type="text" name="prenom" class="form-control" id="prenom"  required>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <label for="slug">Date Naissance</label>
                            <input type="date" name="date_naissance" class="form-control" id="date_naissance" required>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="form-group">
                            <label for="slug">Nom Parent</label>
                            <input type="text" name="nom_parent" class="form-control" id="nom_parent">
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <label for="slug">Contact</label>
                            <input type="text" name="contact" class="form-control" id="contact">
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <label for="slug">Email</label>
                            <input type="text" name="email" class="form-control" id="email">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="form-group">
                            <label for="slug">Groupe Sanguin</label>
                            {{ Form::select('groupe_sanguin', [''=>'---','O-' => 'O-', 'O+' => 'O+','A-' => 'A-' , 'A+' => 'A+','B-' => 'B-', 'B+' => 'B+', 'AB-' => 'AB-', 'AB+' => 'AB+'],null, ['class'=>'form-control', 'required'=>true]) }}
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <label for="slug">CM</label>
                            <input type="text" name="cm" class="form-control" id="cm">
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <label for="slug">PJ</label>
                            <input type="text" name="pj" class="form-control" id="pj">
                        </div>
                    </div>
                </div>

                <div class="row">

                    <div class="col">
                        <div class="form-group">
                            <label for="slug">Categorie</label>
                            {{ Form::select('categorie',$categorie,null, ['class'=>'form-control', 'required'=>true]) }}
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
@section('js')
    <script>
        function chooseFile() {
            $("#fileInput").click();
        }
    </script>
    <script>
        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#image_id').attr('src', e.target.result);
                }

                reader.readAsDataURL(input.files[0]);
            }
        }

        $("#fileInput").change(function(){
            readURL(this);
        });
    </script>
@endsection
