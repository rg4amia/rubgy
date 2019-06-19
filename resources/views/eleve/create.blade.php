@extends('layouts.master')

@section('title') Campaigns @endsection

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
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="name">Name</label>
                                    <input type="text" class="form-control" id="name">
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="form-group">
                                    <label for="slug">Slug </label>
                                    <input type="text" class="form-control" id="slug">
                                </div>
                            </div>


                            <div class="col-12">
                                <div class="form-group">
                                    <label for="videoSource">Video</label>
                                    <select class="custom-select form-control" id="videoSource"
                                            name="videoSource">
                                        <option value="new-york">New York</option>
                                        <option value="chicago">Chicago</option>
                                        <option value="san-francisco">San Francisco</option>
                                        <option value="boston">Boston</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="targetURL">Target URL</label>
                                    <input type="url" class="form-control" id="targetURL">
                                </div>
                            </div>
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
