@extends("Admin/Adminlayout")
@section("sidebar")
    @include("/admin/sidebar")
@endsection

@section("content")

    <div class="container mt-sm-0">
        @if($errors->any())
            @foreach($errors->all() as $error)
                <div class="alert alert-danger " role="alert">
                    {{$error}}
                </div>
            @endforeach
        @endif
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-12 mb-3">
                <h1>Ürün ekleme sayfası</h1>
                <form method="post" action="{{route('yonetici-createall') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-md-6 mb-2">
                            <label for="">Police Adı</label>
                            <input type="text" name="policy_name" class="form-control" placeholder="">
                        </div>

                    </div>
                    <div class="row">
                        <div class="col-md-12 mb-3">
                            <label for="exampleFormControlSelect1">Kategori</label>
                            <select name="category_id" class="form-control" id="exampleFormControlSelect1">
                                @foreach($categories as $category)
                                    <option value="{{$category->id}}"
                                            name="{{$category->id}}">{{$category->category_name}}</option>
                                @endforeach
                            </select>
{{--                            <div class="form-group mt-4">--}}
{{--                                <label for="exampleFormControlfile1">Ürün resimi Seç</label>--}}
{{--                                <input type="file" name="image" class="form-control-file" id="exampleFormControlfile1">--}}
{{--                            </div>--}}
                        </div>

                        <div class="col-md-12 mb-3">
                            <label for="exampleFormControlInput1">Premium</label>
                            <input type="number" name="premium" class="form-control" placeholder="">
                        </div>
                        <div class="col-md-12 mb-3">
                            <label for="exampleFormControlInput1">Kullanım Süresi</label>
                            <input type="number" name="Kul_suresi" class="form-control" placeholder="">
                        </div>
{{--                        <div class="col-md-12 mb-3">--}}
{{--                            <label for="">status</label>--}}
{{--                            <input type="checkbox" name="status">--}}
{{--                        </div>--}}




                        <div class="col-md-12 mb-3">
                            <button class="btn btn-primary mt-3">Ekle</button>
                        </div>


                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
