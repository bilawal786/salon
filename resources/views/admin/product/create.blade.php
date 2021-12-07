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
                            <li class="breadcrumb-item active">Ajouter un nouveau produit</li>
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
                        <h3 class="card-title">Ajouter un nouveau produit</h3>

                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                <i class="fas fa-minus"></i>
                            </button>
                            <button type="button" class="btn btn-tool" data-card-widget="remove">
                                <i class="fas fa-times"></i>
                            </button>
                        </div>
                    </div>
                    <form action="{{route('product.store')}}" method="post" accept-charset="UTF-8" enctype="multipart/form-data">
                    @csrf
                    <!-- /.card-header -->
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">Titre</label>
                                        <input type="text" name="title" required class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">Catégorie</label>
                                        <select onchange="categorychange(this)" name="category_id"  class="form-control category" required>
                                            <option value="">Choisir une catégorie</option>
                                            @foreach($categories as $cat)
                                                <option value="{{$cat->id}}">{{$cat->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">Sous Catégorie</label>
                                        <select  name="subcategory_id"  class="form-control maincategory" required>

                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">SKU</label>
                                        <input type="number" name="sku" readonly value="{{rand(100000, 900000)}}" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">Prix</label>
                                        <input type="number" name="price" required class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">Ancien prix</label>
                                        <input type="number" name="oldprice"  class="form-control">
                                    </div>
                                </div>
                            </div>

<!--                          <div class="row">
                                <div class="col-md-9">
                                    <div class="form-group">
                                        <label for="">Couleurs</label>
                                        <div id="addmorecolor">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <input id="color" type="color" name="color[]" required  class="form-control">
                                                </div>
                                                <div class="col-md-6">
                                                    <input id="colorimage" type="file" name="colorimage[]" required  class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="">De couleurs</label><br>
                                        <a  onclick="addmorecolor()" class="btn btn-primary btn-sm" >Ajouter</a>
                                        <a  onclick="removecolor()" class="btn btn-danger btn-sm" >Supprimer</a>
                                    </div>
                                </div>
                            </div>-->
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">Matériel du produit</label>
                                        <input type="text" name="material" placeholder="Coton , laine ect…" required class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">Quantité</label>
                                        <input type="text" name="quantity"  required class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">La vignette</label>
                                        <input type="file" name="photo" required class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">Galerie</label>
                                        <input type="file" multiple name="gallery[]" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="">La description</label>
                                        <textarea class="form-control" name="description" id="summernote" cols="30" rows="10" required></textarea>
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
@section('script')
    <script>

        function categorychange(elem){
            $('.maincategory').html('<option value="">Sélectionnez une sous-catégorie</option>');
            event.preventDefault();
            let id = elem.value;
            let _token   = $('meta[name="csrf-token"]').attr('content');

            $.ajax({
                url: "{{route('fetchsubcategory')}}",
                type:"POST",
                data:{
                    id:id,
                    _token: _token
                },
                success:function(response){
                    $.each(response, function(i, item) {
                        $('.maincategory').append('<option value="'+item.id+'">'+item.name+'</option>');
                    });
                },
            });
        }
        function addmoresize(){
            $('#addmoresize').append(' <div class="row">\n' +
                '                                                <div class="col-md-12">\n' +
                '                                                    <input id="size" type="text" name="size[]" placeholder="Entrez le nom de la taille" required  class="form-control">\n' +
                '                                                </div>\n' +
                '                                            </div>');
        }
        function removesize(){
            if($('#addmoresize .row').length>1) {//remove all except one
                $('#addmoresize .row:last').remove();
            }
        }

        function addmorecolor(){
            $('#addmorecolor').append(' <div class="row">\n' +
                '                                                <div class="col-md-6">\n' +
                '                                                    <input id="color" type="color" name="color[]" required  class="form-control">\n' +
                '                                                </div>\n' +
                '                                                <div class="col-md-6">\n' +
                '                                                    <input id="colorimage" type="file" name="colorimage[]" required  class="form-control">\n' +
                '                                                </div>\n' +
                '                                            </div>');
        }
        function removecolor(){
            if($('#addmorecolor .row').length>1) {//remove all except one
                $('#addmorecolor .row:last').remove();
            }
        }
    </script>
@endsection
