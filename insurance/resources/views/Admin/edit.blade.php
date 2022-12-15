@extends("Admin/Adminlayout")
@section("sidebar")
    @include("/admin/sidebar")
@endsection

@section("content")



    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css"
          integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

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
        <form method="post" action="{{route('yonetici-update',$policy->id) }}" enctype="multipart/form-data" >
            @method("put")
            {{csrf_field()}}
            <div class="form-group">
                <label for="exampleFormControlSelect1">Kategori</label>
                <select  name="category_id"  class="form-control" id="exampleFormControlSelect1">
                    @foreach($categories as $category)
                        @if($policy->category_id == $category->id)
                            <option selected value="{{$category->id}}" >{{$category->category_name}}</option>
                        @else
                            <option value="{{$category->id}}" >{{$category->category_name}}</option>
                        @endif
                    @endforeach
                </select>
            </div>


            <div class="form-group">
                <label for="">Poliçe Adı</label>
                <input type="text" name="policy_name" value="{{old('policy_name')?? $policy->policy_name}}" class="form-control"  placeholder="">
            </div>


            <div class="form-group">
                <label for="exampleFormControlInput1">Premium</label>
                <input type="number" name="premium" value="{{old('premium')?? $policy->premium}}" class="form-control"  placeholder="">
            </div>
            <div class="form-group">
                <label for="exampleFormControlInput1">Kullanılma Süresi</label>
                <input type="number"  name="Kul_suresi"value="{{old('Kul_suresi')?? $policy->Kul_suresi}}"  class="form-control"  placeholder="">
            </div>

{{--            <div class="form-group">--}}
{{--                <label for="">Status</label>--}}
{{--                <input type="checkbox" {{$product->status =="1" ?'checked':''}} name="status" >--}}
{{--            </div>--}}

{{--            @if($product->image)--}}
{{--                <img src="{{asset('/storage/images/products/'.$product->image)}}" style="width: 350px " style="height: 200px " alt="Product image">--}}
{{--            @endif--}}
{{--            <div class="col-md-12">--}}
{{--                <input type="file" name="image" class="form-control">--}}

{{--            </div>--}}
            <button class="btn btn-primary mt-3">Kaydet</button>
        </form>
    </div>
@endsection
