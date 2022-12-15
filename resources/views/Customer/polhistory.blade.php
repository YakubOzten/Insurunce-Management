@extends("layout")
@section("sidebar")
    @include("/Customer/sidebar")
@endsection
@section("content")


    @if (\Session::has('success'))
        <div class="alert alert-success">
            <ul>
                <li>{!! \Session::get('success') !!}</li>
            </ul>
        </div>
    @endif
{{--    <div class="card">--}}
{{--        <div class="card-header">--}}
{{--            <h4 class="card-title">Poliçe history </h4>--}}

{{--        </div>--}}
{{--        <div class="card-body">--}}
{{--            <div class="table-responsive">--}}
{{--                <table id="userDT" class="display dataTable" style="width:100%;">--}}
{{--                    <thead>--}}
{{--                    <tr>--}}
{{--                        <th>#</th>--}}
{{--                        <th>Başvuru Tarihi</th>--}}
{{--                        <th>Poliçe Adı</th>--}}
{{--                        <th>Müşteri Adı</th>--}}
{{--                        <th>Durum</th>--}}
{{--                    </tr>--}}
{{--                    </thead>--}}
{{--                    <tbody>--}}
{{--                    @foreach($pols as $item)--}}
{{--                        <tr>--}}
{{--                            <td>{{$item->id}}</td>--}}
{{--                            <td>{{date('d-m-Y',strtotime($item->created_at))}}</td>--}}
{{--                            <td>{{$item->policy->policy_name}}</td>--}}
{{--                            <td>{{$item->getuser->name}}</td>--}}
{{--                            <td>{{$item->status=='0' ? 'Bekliyor' : 'Tamamlandı'}}</td>--}}



{{--                        </tr>--}}
{{--                    @endforeach--}}
{{--                    </tbody>--}}
{{--                </table>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header card-header-primary">
                            <h4 class="card-title ">Poliçe Geçmişim</h4>
{{--                            <p class="card-category"> Here is a subtitle for this table</p>--}}
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead class=" text-primary">

                                    <tr>
                                        <th>
                                            #
                                        </th>
                                        <th>
                                        Başvuru Tarihi
                                        </th>
                                        <th>
                                            Şirket Adı
                                        </th>
                                        <th>
                                            Katagori Adı
                                        </th>
                                        <th>
                                            Başvuru onayı
                                        </th>
                                    </tr></thead>
                                    <tbody>
                                    @foreach($pols as $item)

                                      @if(Auth::id()==$item->user_id)
                                    <tr>

                                        <td>
                                        {{$item->id}}
                                        </td>
                                        <td>
                                            {{date('d-m-Y',strtotime($item->created_at))}}
                                        </td>
                                        <td>
                                            {{$item->policy->policy_name}}
                                        </td>
                                        <td>
                                            {{$item->policy->category->category_name}}
                                        </td>

                                        <td class="text-primary">
                                            {{$item->status=='0' ? 'X' : '✓'}}
                                        </td>
                                        @endif
                                        @endforeach
                                    </tr>




                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
{{--    <div class="container ">--}}
{{--        <div class="card">--}}



{{--    </div>--}}
{{--        --}}{{--                    <div class="card-header bg-primary">--}}
{{--        --}}{{--                        <h4 class="text-white">Sipariş Geçmişi--}}
{{--        --}}{{--                            <a style="float: right" href="{{'orders'}}" class="btn btn-warning float-end">Yeni Siparişler</a>--}}

{{--        --}}{{--                        </h4>--}}
{{--        --}}{{--                    </div>--}}

{{--        <table class="table align-items-center mb-0 ">--}}
{{--            <thead>--}}
{{--            <tr>--}}
{{--                <th>#</th>--}}
{{--                <th>Başvuru Tarihi</th>--}}
{{--                <th>Poliçe Adı</th>--}}
{{--                <th>Müşteri Adı</th>--}}
{{--                <th>Durum</th>--}}



{{--            </tr>--}}
{{--            </thead>--}}
{{--            <tbody>--}}
{{--            @foreach($pols as $item)--}}
{{--                <tr>--}}
{{--                    <td>{{$item->id}}</td>--}}
{{--                    <td>{{date('d-m-Y',strtotime($item->created_at))}}</td>--}}
{{--                    <td>{{$item->policy->policy_name}}</td>--}}
{{--                    <td>{{$item->getuser->name}}</td>--}}
{{--                    <td>{{$item->status=='0' ? 'Bekliyor' : 'Tamamlandı'}}</td>--}}



{{--                </tr>--}}
{{--            @endforeach--}}
{{--            </tbody>--}}

{{--        </table>--}}





{{--    </div>--}}

@endsection
