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
        <h1>Kategori ekleme sayfası</h1>
        <form method="post" action="{{route('yonetici-c_createall') }}"enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="exampleFormControlInput1">categori ismi</label>
                <input type="text" name="category_name" class="form-control"  placeholder="">
            </div>



{{--            <div class="form-group mt-4">--}}
{{--                <label for="exampleFormControlfile1">Ürün resimi Seç</label>--}}
{{--                <input type="file" name="image" class="form-control-file" id="exampleFormControlfile1">--}}
{{--            </div>--}}



            <button class="btn btn-primary mt-3">Ekle</button>
        </form>
    </div>
@endsection
