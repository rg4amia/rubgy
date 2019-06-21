@extends('layouts.master')

@section('title') Categorie @endsection

@section('subTitle') Affiche Categorie @endsection


@section('content')

    <section class="card">
        <div class="card-header">
            <h4 class="card-title"></h4>
        </div>
        <div class="card-content">

            <div class="card-body">

                <div class="mb-3">
                    <a class="btn btn-primary" href="{{ route('categorie.create') }}">
                        <span><i class="feather icon-plus"></i> Ajouter Categorie</span>
                    </a>
                </div>

                <div class="table-responsive-sm">
                    <table class="table table-hover table-striped">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Libelle</th>
                            <th>Designation</th>
                        </tr>
                        </thead>
                        <tbody>

                        @foreach($categories as $item)
                        <tr>
                            <td>{{ $item->id}}</td>
                            <td> {{ $item->libelle }}</td>
                            <td> {{ $item->designation }}</td>
                            <td class="float-right">
                                <button type="button"
                                        class="btn btn-icon btn-icon rounded-circle btn-primary mr-0 waves-effect waves-light">
                                    <i class="feather icon-link"></i>
                                </button>
                                <button type="button"
                                        class="btn btn-icon btn-icon rounded-circle btn-success mr-0 waves-effect waves-light">
                                    <i class="feather icon-target"></i>
                                </button>
                                <button type="button"
                                        class="btn btn-icon btn-icon rounded-circle btn-primary mr-0 waves-effect waves-light">
                                    <i class="feather icon-edit"></i>
                                </button>
                                <button type="button"
                                        class="btn btn-icon btn-icon rounded-circle btn-danger mr-0 waves-effect waves-light">
                                    <i class="feather icon-trash"></i>
                                </button>
                            </td>
                        </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

                <nav aria-label="Page navigation example">
                    <ul class="pagination justify-content-center mt-2">
                        {{ $categories->links() }}
                        {{--<li class="page-item"><a class="page-link" href="#">
                                <i class="feather icon-chevrons-left"></i> Prev
                            </a></li>
                        <li class="page-item active"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item"><a class="page-link" href="#">4</a></li>
                        <li class="page-item"><a class="page-link" href="#">5</a></li>
                        <li class="page-item"><a class="page-link" href="#">
                                Next <i class="feather icon-chevrons-right"></i>
                            </a></li>--}}
                    </ul>
                </nav>
            </div>
        </div>
    </section>

@endsection
