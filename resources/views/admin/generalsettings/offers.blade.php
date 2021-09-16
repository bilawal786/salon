@extends('layouts.admin')

@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Domicile</a></li>
                            <li class="breadcrumb-item active">Nos offres</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <!-- SELECT2 EXAMPLE -->
                <div class="card card-default">
                    <div class="card-header">
                        <h3 class="card-title">Nos offres</h3>

                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                <i class="fas fa-minus"></i>
                            </button>
                            <button type="button" class="btn btn-tool" data-card-widget="remove">
                                <i class="fas fa-times"></i>
                            </button>
                        </div>
                    </div>
                    <form action="{{route('offer.store')}}" method="post" accept-charset="UTF-8" enctype="multipart/form-data">
                    @csrf
                    <!-- /.card-header -->
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">Image</label>
                                        <input class="form-control" type="file" name="o1image">
                                    </div>
                                    <div class="form-group">
                                        <label for="">Titre</label>
                                        <input class="form-control" type="text" value="{{$content->o1title}}" name="o1title">
                                    </div>
                                    <div class="form-group">
                                        <label for="">Durée</label>
                                        <input class="form-control" type="text" value="{{$content->o1duration}}" name="o1duration">
                                    </div>
                                    <div class="row">
                                        <div class="col-md-8">
                                            <div class="form-group">
                                                <label for="">La description</label>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="">Prix</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-8">
                                            <div class="form-group">
                                                <input class="form-control" type="text" value="{{$content->o1d1}}" name="o1d1">
                                                <input class="form-control" type="text" value="{{$content->o1d2}}" name="o1d2">
                                                <input class="form-control" type="text" value="{{$content->o1d3}}" name="o1d3">
                                                <input class="form-control" type="text" value="{{$content->o1d4}}" name="o1d4">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <input class="form-control" type="number" value="{{$content->o1p1}}" name="o1p1">
                                                <input class="form-control" type="number" value="{{$content->o1p2}}" name="o1p2">
                                                <input class="form-control" type="number" value="{{$content->o1p3}}" name="o1p3">
                                                <input class="form-control" type="number" value="{{$content->o1p4}}" name="o1p4">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">Image</label>
                                        <input class="form-control" type="file" name="o2image">
                                    </div>
                                    <div class="form-group">
                                        <label for="">Titre</label>
                                        <input class="form-control" type="text" value="{{$content->o2title}}" name="o2title">
                                    </div>
                                    <div class="form-group">
                                        <label for="">Durée</label>
                                        <input class="form-control" type="text" value="{{$content->o2duration}}" name="o2duration">
                                    </div>
                                    <div class="row">
                                        <div class="col-md-8">
                                            <div class="form-group">
                                                <label for="">La description</label>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="">Prix</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-8">
                                            <div class="form-group">
                                                <input class="form-control" type="text" value="{{$content->o2d1}}" name="o2d1">
                                                <input class="form-control" type="text" value="{{$content->o2d2}}" name="o2d2">
                                                <input class="form-control" type="text" value="{{$content->o2d3}}" name="o2d3">
                                                <input class="form-control" type="text" value="{{$content->o2d4}}" name="o2d4">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <input class="form-control" type="number" value="{{$content->o2p1}}" name="o2p1">
                                                <input class="form-control" type="number" value="{{$content->o2p2}}" name="o2p2">
                                                <input class="form-control" type="number" value="{{$content->o2p3}}" name="o2p3">
                                                <input class="form-control" type="number" value="{{$content->o2p4}}" name="o2p4">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <button type="submit" class="btn btn-primary">Sauvegarder</button>
                        </div>
                    </form>
                    <!-- /.card -->

                    <!-- /.container-fluid -->
        </section>
    </div>
@endsection
