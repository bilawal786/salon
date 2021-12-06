@extends('layouts.admin')

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-8">
                        @if(Auth::user()->role == 1)
                        <h1 class="m-0">Bienvenue dans le tableau de bord d'administration</h1>
                        @else
                            <h1 class="m-0">Bienvenue dans le tableau de bord des utilisateurs</h1>
                        @endif
                    </div><!-- /.col -->
                    <div class="col-sm-4">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Domicile</a></li>
                            <li class="breadcrumb-item active">Tableau de bord </li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <!-- Small boxes (Stat box) -->
                @if(Auth::user()->role == 1)

                <div class="row">
                    <div class="col-lg-3 col-6">
                        <!-- small box -->
                        <div class="small-box bg-primary">
                            <div class="inner">
                                <h3>1</h3>

                                <p>Total Clients</p>
                            </div>
                            <div class="icon">
                                <i class="fa fa-folder-plus"></i>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-6">
                        <!-- small box -->
                        <div class="small-box bg-success">
                            <div class="inner">
                                <h3>2</h3>

                                <p>Nouvelles requêtes</p>
                            </div>
                            <div class="icon">
                                <i class="fa fa-folder-plus"></i>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-6">
                        <!-- small box -->
                        <div class="small-box bg-dark">
                            <div class="inner">
                                <h3>3</h3>

                                <p>Requêtes complètes</p>
                            </div>
                            <div class="icon">
                                <i class="fa fa-folder-plus"></i>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-6">
                        <!-- small box -->
                        <div class="small-box bg-danger">
                            <div class="inner">
                                <h3>4</h3>

                                <p>Total des factures</p>
                            </div>
                            <div class="icon">
                                <i class="fa fa-folder-plus"></i>
                            </div>
                        </div>
                    </div>
                </div>
            @else

                    @endif
                <!-- /.row -->
                <!-- Main row -->

                <!-- /.row (main row) -->
            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
@endsection
