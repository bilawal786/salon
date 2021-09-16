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
                            <li class="breadcrumb-item active">Curseurs</li>
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
                        <h3 class="card-title">Curseurs</h3>

                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                <i class="fas fa-minus"></i>
                            </button>
                            <button type="button" class="btn btn-tool" data-card-widget="remove">
                                <i class="fas fa-times"></i>
                            </button>
                        </div>
                    </div>
                    <form action="{{route('slider.store')}}" method="post" accept-charset="UTF-8" enctype="multipart/form-data">
                    @csrf
                    <!-- /.card-header -->
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="">Curseur 1</label>
                                        <input type="file" name="slider1" accept="image/*" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <img style="width: 100%" src="{{asset($content->slider1)}}"  alt="">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="">Curseur 2</label>
                                        <input type="file" name="slider2" accept="image/*" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <img style="width: 100%" src="{{asset($content->slider2)}}"  alt="">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="">Curseur 3</label>
                                        <input type="file" name="slider3" accept="image/*" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <img style="width: 100%" src="{{asset($content->slider3)}}"  alt="">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="">Curseur 4</label>
                                        <input type="file" name="slider4" accept="image/*" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <img style="width: 100%" src="{{asset($content->slider4)}}"  alt="">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="">Curseur 5</label>
                                        <input type="file" name="slider5" accept="image/*" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <img style="width: 100%" src="{{asset($content->slider5)}}"  alt="">
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
