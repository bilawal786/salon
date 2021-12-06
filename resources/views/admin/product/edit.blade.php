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
                            <li class="breadcrumb-item active">Mettre à jour les détails du produit</li>
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
                        <h3 class="card-title">Mettre à jour les détails du produit</h3>

                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                <i class="fas fa-minus"></i>
                            </button>
                            <button type="button" class="btn btn-tool" data-card-widget="remove">
                                <i class="fas fa-times"></i>
                            </button>
                        </div>
                    </div>
                    <form action="{{route('product.update', ['id' => $product->id])}}" method="post" accept-charset="UTF-8" enctype="multipart/form-data">
                    @csrf
                    <!-- /.card-header -->
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">Titre</label>
                                        <input type="text" name="title" value="{{$product->title}}" required class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">Catégorie</label>
                                        <select onchange="categorychange(this)" name="category_id"  class="form-control" id="" required>
                                            @foreach($categories as $cat1)
                                                <option value="{{$cat1->id}}" {{$cat1->id == $product->category_id ? "selected":""}}>{{$cat1->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">Sous Catégorie</label>
                                        <select name="subcategory_id"  class="form-control maincategory" id="" required>
                                            @foreach($product->category->subcategories as $cat)
                                                <option value="{{$cat->id}}" {{$cat->id == $product->subcategory_id ? "selected":""}}>{{$cat->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">SKU</label>
                                        <input type="number" name="sku" readonly value="{{$product->sku}}" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">Prix</label>
                                        <input type="number" name="price" value="{{$product->price}}" required class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">Ancien prix</label>
                                        <input type="number" name="oldprice" value="{{$product->oldprice}}" class="form-control">
                                    </div>
                                </div>
                            </div>
{{--                          <div class="row">--}}
{{--                                <div class="col-md-8">--}}
{{--                                    <div class="form-group">--}}
{{--                                        <label for="">Couleurs</label>--}}
{{--                                        <div id="addmorecolor">--}}
{{--                                            @if($product->color)--}}
{{--                                                <?php--}}
{{--                                                $colorimage = json_decode($product->colorimage);--}}
{{--                                                ?>--}}
{{--                                                @foreach(json_decode($product->color) as $key => $item)--}}
{{--                                                    <div class="row">--}}
{{--                                                        <div class="col-md-5">--}}
{{--                                                                <input id="color" type="color" name="color[]" value="{{$item}}" required  class="form-control">--}}
{{--                                                        </div>--}}
{{--                                                        <div class="col-md-5">--}}
{{--                                                                <input id="colorimage" type="file" name="colorimage[]" required  class="form-control">--}}
{{--                                                        </div>--}}
{{--                                                        <div class="col-md-2">--}}
{{--                                                            <a onclick="removecolor(this)" class="btn btn-sm btn-danger" data-toggle="tooltip" title="delete">--}}
{{--                                                                <i class="fa fa-times"></i>--}}
{{--                                                            </a>--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                @endforeach--}}
{{--                                            @endif--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                               <div class="col-md-2">--}}
{{--                                   <div class="form-group">--}}
{{--                                   <label for="">Codé</label>--}}
{{--                                       @foreach(json_decode($product->color) as $item)--}}
{{--                                           <p style="background-color: {{$item}}; color: white">{{$item}}</p>--}}
{{--                                       @endforeach--}}
{{--                                   </div>--}}
{{--                               </div>--}}
{{--                                <div class="col-md-2">--}}
{{--                                    <div class="form-group">--}}
{{--                                        <label for="">De couleurs</label><br>--}}
{{--                                        <a  onclick="addmorecolor()" class="btn btn-primary btn-sm" >Ajouter</a>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">Matériel du produit</label>
                                        <input type="text" value="{{$product->material}}" name="material" placeholder="Coton , laine ect…" required class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">La vignette</label>
                                        <input type="file" name="photo" class="form-control">
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
                                        <textarea class="form-control" name="description" id="summernote" cols="30" rows="10">{{$product->description}}</textarea>
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


        $('.subcategory option[value={{$product->subcategory}}]').attr('selected','selected');

        function addmorecolor(){
            $('#addmorecolor').append(' <div class="row">\n' +
                '                                                        <div class="col-md-5">\n' +
                '                                                                <input id="color" type="color" name="color[]" value="" required  class="form-control">\n' +
                '                                                        </div>\n' +
                '                                                        <div class="col-md-5">\n' +
                '                                                                <input id="colorimage" type="file" name="colorimage[]" required  class="form-control">\n' +
                '                                                        </div>\n' +
                '                                                        <div class="col-md-2">\n' +
                '                                                            <a onclick="removecolor(this)" class="btn btn-sm btn-danger" data-toggle="tooltip" title="delete">\n' +
                '                                                                <i class="fa fa-times"></i>\n' +
                '                                                            </a>\n' +
                '                                                        </div>\n' +
                '                                                    </div>');
        }
        function removecolor(elem){
            $(elem).parent('div').parent('div').remove();
        }
    </script>
@endsection
