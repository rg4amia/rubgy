@extends('layouts.master')

@section('title') Versement @endsection

@section('subTitle') Attribuer @endsection

@section('content')

    <section class="card">
        <div class="card-header">
            <h4 class="card-title"></h4>
        </div>
        <div class="card-content">

            <div class="card-body">
                {{ Form::model($eleve, ['route'=>['versement.update',$eleve->id],'method' => 'POST']) }}
                <div class="row">
                    <div class="col-6">
                        <div class="form-group">
                            <label for="name">Nom & Prenom (Eleve)</label>
                            {{ Form::text('nom', $eleve->nom.' '.$eleve->prenom, ['class'=>'form-control', 'required' => 'required']) }}
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group">
                            <label for="name">Type Paiment</label>
                            {{ Form::select('compte_id',$compte,null, ['id' => 'compte','class'=>'form-control', 'required' => 'required']) }}
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group">
                            <label for="name">Montant à Payer</label>
                            <select class="form-control required" name="compte_montant" id="compte_montant">
                            </select>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group">
                            <label for="name">Montant Versement</label>
                            {{ Form::text('motant', null, ['id' => 'montant_vers','class'=>'form-control', 'disable' => 'true']) }}
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group">
                            <label for="name">Reste A Payer</label>
                            <div id="reste_payer">

                            </div>
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
        $(document).ready(function () {
            $("#montant_vers").on('keyup change',function() {
                var val = $(this).val();
                console.log(val);
                if(val != ''){
                    $("#reste_payer").empty();
                    $.ajaxSetup({
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        }
                    });
                    $.ajax({
                        url: "{{ route('get.montant') }}",
                        method: 'post',
                        data:{val:val},
                        dataType: 'json',
                        success: function(result){
                            //on rempli la seconde liste
                            $.each( result, function( key, value ) {
                                console.log(value.id);
                                $("#compte_montant").append('<input name="reste_payer" value="'+ value.montant+'">'+ value.montant +'</input>');
                            });
                        },error:function(jqXHR, textStatus){
                            alert('Error.\n'+ jqXHR.responseText);
                        }
                    });
                }
            });
        });

    </script>

    <script>
        $(document).ready(function () {
            $("#compte").on('change',function() {
                var val = $(this).val();
                console.log(val);
                if(val != ''){
                    $("#compte_montant").empty();
                    $.ajaxSetup({
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        }
                    });
                    $.ajax({
                        url: "{{ route('get.montant') }}",
                        method: 'post',
                        data:{val:val},
                        dataType: 'json',
                        success: function(result){
                            //on rempli la seconde liste
                            $.each( result, function( key, value ) {
                                console.log(value.id);
                                $("#compte_montant").append('<option value="'+ value.montant+'">'+ value.montant +'</option>');
                            });
                        },error:function(jqXHR, textStatus){
                            alert('Error.\n'+ jqXHR.responseText);
                        }
                    });
                }
            });
        });

    </script>

@endsection
