
@extends("Admin/Adminlayout")
@section("sidebar")
    @include("/Admin/sidebar")
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

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <div class="container">
        <form method="post" action="{{route('yonetici-catupdate',$category->id) }}" >
            @method("put")
            @csrf
            <div class="form-group">
                <label for="exampleFormControlInput1">categori ismi</label>
                <input type="text" name="category_name" value="{{old('category_name')?? $category->category_name}}" class="form-control"  placeholder="">
            </div>




{{--            <div class="form-group mt-4">--}}
{{--                <label for="exampleFormControlfile1">Ürün resimi Seç</label>--}}
{{--                <input type="file" name="image" value="{{old('image')?? $category->image}}"  class="form-control-file" id="exampleFormControlfile1">--}}
{{--            </div>--}}


            <button class="btn btn-primary mt-3">Kaydet</button>
        </form>
    </div>
@endsection
