@extends("Admin/Adminlayout")
@section("sidebar")
    @include("/admin/sidebar")
@endsection

@section("content")

    {{--    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css"--}}
    {{--          integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">--}}
    <style>
        .content-table{
            border-collapse: collapse;
            margin: 25px 0;
            font-size:0.9em;
            min-width: 500px;
            border-radius: 5px 5px 0 0;
            overflow: hidden;
            box-shadow: 0 0 20px rgba(0,0,0,0.15);
        }
        .content-table thead tr{
            background-color: #009879;
            color: #FFFFFF;
            text-align: left;
            font-weight: bold;
        }
        .content-table th,
        .content-table td{
            padding: 12px 15px;
        }
        .content-table tbody tr {
            border-bottom: 1px solid #dddddd;
        }
        .content-table tbody tr:nth-of-type(even){
            background-color: #f3f3f3;
        }
        .content-table tbody tr:last-of-type{
            border-bottom: 2px solid #009879;
        }
        .content-table tbody tr.active-row{
            font-weight: bold;
            color: #009879;
        }
    </style>


    <div class="card">
        <div class="card-header">
            <h4 class="cart-title">Gelen Teklifler</h4>
        </div>

        <div class="card-body">
           <div class="content-table"  >
        <table class="table-responsive">
            <thead>
            <tr>
                <th scope="col">Kategori</th>
                <th scope="col">Ad</th>
                <th scope="col">Soyad</th>
                <th scope="col">TC</th>
                <th scope="col">Plaka</th>
                <th scope="col">Belge_seri_no</th>
                <th scope="col">Doğum Tarihi</th>
                <th scope="col">Adres</th>
                <th scope="col">Daire_m^2</th>
                <th scope="col">Bina yapim yili</th>
                <th scope="colgroup">Teklifi Gönder mesaji</th>
                <th scope="col">Oluşturulma zamanı</th>
                <th scope="col">Action</th>

            </tr>
            </thead>
            <tbody>
            @foreach($quests as $quest)
                <tr>
                   @if($quest->sfollow_id==1)
                        <th> Kasko</th>
                    @elseif($quest->sfollow_id==2)
                        <th> Sağlık</th>
                    @elseif($quest->sfollow_id==3)
                        <th> Trafık</th>
                    @elseif($quest->sfollow_id==4)
                        <th> Deprem</th>
                    @elseif($quest->sfollow_id==5)
                        <th> Konut</th>
                    @endif
                    <td>{{$quest->ad}}</td>
                    <td>{{$quest->soyad}}</td>
                    <td>{{$quest->tc}}</td>
                    <td>{{$quest->plaka}}</td>
                    <td>{{$quest->belge_seri_no}}</td>
                    <td>{{$quest->dogum_tarihi}}</td>
                    <td>{{$quest->adres}}</td>
                    <td>{{$quest->daire_m2}}</td>
                    <td>{{$quest->bina_yili}}</td>

                    <td> {{$quest->admin_comment == NULL ?"YOK":"$quest->admin_comment" }} </td>
{{--                    <td>{{ $product->status == '0'? "Visible":"Hidden"   }} </td>--}}
                    {{--                    <td><img height="60px" src="{{asset('/storage/images/Categories/'.$category->image)}}"></td>--}}
                    <td>{{$quest->created_at}}</td>
                    <td style="display:flex">
                        <div>
                            <button type="button" class="btn btn-primary" data-toggle="modal"
                                    data-target="#editModal">
                              Teklifi yaz
                            </button>
{{--                            <a href="{{url('edit-questions/'.$quest->id)}}" class="btn btn-primary">Edit </a>--}}
                        </div>
{{--                        <form action="{{route('yonetici-catdelete',$category->id)}}" method="post">--}}
{{--                            {{method_field('DELETE')}}--}}
{{--                            {{csrf_field()}}--}}
{{--                            <button class="btn btn-danger " type="submit">Sil</button>--}}
{{--                        </form>--}}
            @endforeach
            </tr>
            </tbody>
        </table>

           </div>
        </div>
    </div>

    <div class="modal fade bd-example-modal-lg" id="editModal" tabindex="-1"
         role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <form action="{{route('questions-update',$quest->id)}}" method="POST">
                    @method("put")
                    @csrf
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel"> Teklifi Gönder
                            </h5>
                        <button type="button" class="close" data-dismiss="modal"
                                aria-label="Close">&times;
                        </button>

                    </div>
                    <div class="modal-body">
                        <div class="form-validation">
                            <div class="row">
                                <div class="col-xl-6">
                                    <div class="form-group">
                                        <label class="col-lg-4 col-form-label"
                                               for="val-admin_comment">
                                            Teklif
                                            <span class="text-danger">:</span>
                                        </label>
                                        <div class="col-lg-6">
                                            <input type="text" class="form-control" value="{{old('admin_comment')?? $quest->admin_comment}}"
                                                   id="val-admin_comment"
                                                   name="val-admin_comment"
                                                   style="color: black;width: 600px" >
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">Gönder</button>
                    </div>
                </form>


            </div>
        </div>
    </div>
{{--    @if ($quest->hasPages())--}}
{{--        <div class="pagination-wrapper">--}}
{{--            {{ $quest->links() }}--}}
{{--        </div>--}}
{{--    @endif--}}

@endsection

