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
                {{ Form::model($eleve, ['route'=>['versement.update',$eleve[0]['id']],'method' => 'PUT', 'id' => 'form']) }}
                <div class="row">
                    <div class="col-6">
                        <div class="form-group">
                            <label for="name">Nom & Prenom (Eleve)</label>
                            <input type="hidden" name="id_eleve" value="{{$eleve[0]['id']}}" id="id_eleve">
                            {{ Form::text('nom', $eleve[0]['nom'].' '.$eleve[0]['prenom'], ['class'=>'form-control', 'required' => 'required']) }}
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
                            <label for="name">Montant du Compte</label>
                            {{ Form::text('montantapayer', null, ['id' => 'montantapayer','class'=>'form-control', 'required' => true, 'disable' => true]) }}
                        </div>
                    </div>

                    <div class="col-6">
                        <div class="form-group">
                            <label for="name">Montant Déjà Versé</label>
                            <div id="reste_payer">
                                {{ Form::text('montantdverse',null, ['id' => 'montantdvers','class'=>'form-control', 'disable' => 'true']) }}

                            </div>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group">
                            <label for="name">Reste à Payer</label>
                            {{ Form::number('montant', null, ['id' => 'restepaye','class'=>'form-control', 'required' => true ]) }}
                        </div>
                    </div>

                    <div class="col-6">
                        <div class="form-group">
                            <label for="name">Montant Versement</label>
                            {{ Form::number('montant', null, ['id' => 'montant_vers','class'=>'form-control', 'required' => true ]) }}
                            <span id="message"></span>

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
   {{-- <script>
        $(document).ready(function () {
            $("#montant_vers").on('keyup change',function() {
                var val = $(this).val();
                var id_eleve = $("#id_eleve").val();

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
                        data:{val:val,id_eleve:id_eleve},
                        dataType: 'json',
                        success: function(result){
                            //on rempli la seconde liste
                            $.each( result, function( key, value ) {
                                console.log(value.id);
                                $("#montantapayer").val(data.montant);
                                $("#montantdverse").val(data.montantdverse);
                            });
                        },error:function(jqXHR, textStatus){
                            alert('Error.\n'+ jqXHR.responseText);
                        }
                    });
                }
            });
        });

    </script>--}}

    <script>

        $(document).ready(function (){

            $("#montant_vers").on('keyup', function () {

                var montant_vers = $(this).val();
                var restepaye = $("#restepaye").val();
                var message = $("#message");
                console.log(restepaye - montant_vers);

                /*if (montant_vers === restepaye){
                    message.removeClass("badge-danger badge-info badge-success");
                    message.html("Vous Voulez Solder le compte").addClass("badge-success");
                }else if (montant_vers < restepaye){
                    message.removeClass("badge-danger badge-info badge-success");
                    message.html("Ce montant ne solde pas le Compte").addClass("badge-info");
                }else if (montant_vers > restepaye) {
                    message.removeClass("badge-danger badge-info badge-success");
                    message.html("Attention ce montant est superieur au montant a verser").addClass("badge-danger");
                    //$('#form').find('button[type="submit"]').attr('disabled', true);
                }*/


            })

        });

    </script>

    <script>
        $(document).ready(function () {
            $("#compte").on('change',function() {
                var val = $(this).val();
                var id_eleve = $("#id_eleve").val();
                if(val > 0){
                    $("#montantdvers").empty();
                    $("#montantapayer").empty();
                    $.ajaxSetup({
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        }
                    });
                    $.ajax({
                        url: "{{ route('get.montant') }}",
                        method: 'post',
                        data:{val:val,id_eleve:id_eleve},
                        dataType: 'json',
                        success: function(result){
                            $("#montantdvers").val(result.montantdverse);
                            $("#montantapayer").val(result.montantapayer);
                            $("#restepaye").val(result.restepaye);

                        },error:function(jqXHR, textStatus){
                            alert('Error.\n'+ jqXHR.responseText);
                        }
                    });
                }
            });
        });

    </script>

@endsection
