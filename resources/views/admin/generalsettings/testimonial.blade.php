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
                            <li class="breadcrumb-item active">Témoignage</li>
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
                        <h3 class="card-title">Témoignage</h3>

                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                <i class="fas fa-minus"></i>
                            </button>
                            <button type="button" class="btn btn-tool" data-card-widget="remove">
                                <i class="fas fa-times"></i>
                            </button>
                        </div>
                    </div>
                    <form action="{{route('testimonial.store')}}" method="post" accept-charset="UTF-8" enctype="multipart/form-data">
                    @csrf
                    <!-- /.card-header -->
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">Revoir 1</label>
                                        <textarea name="review1" class="form-control" id="" cols="30" rows="5">{{$content->review1}}</textarea>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">Critique</label>
                                        <input type="text" name="rgive1" value="{{$content->rgive1}}" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">Revoir 2</label>
                                        <textarea name="review2" class="form-control" id="" cols="30" rows="5">{{$content->review2}}</textarea>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">Critique</label>
                                        <input type="text" name="rgive2" value="{{$content->rgive2}}" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">Revoir 3</label>
                                        <textarea name="review3" class="form-control" id="" cols="30" rows="5">{{$content->review3}}</textarea>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">Critique</label>
                                        <input type="text" name="rgive3" value="{{$content->rgive3}}" class="form-control">
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
