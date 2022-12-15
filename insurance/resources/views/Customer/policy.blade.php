@extends("layout")
@section("sidebar")
    @include("/Customer/sidebar")
@endsection

@section("content")

    <div class="container ">
        <div class="panel panel-primary ">
            <div class="panel-heading">
                <h6 class="panel-title">Mevcut Sigortalar</h6>
            </div>
        <h3>Poliçeler</h3>
        {{--        <a class="btn btn-primary float-right mb-4" href="{{ route('yonetici-create')}}">Add product</a>--}}
        <table class="table table-bordered"   >
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Kategori</th>
                <th scope="col">police adı</th>
                <th scope="col">premium</th>
                <th scope="col">Kul_suresi</th>
                <th scope="col">Action</th>
            </tr>
            </thead>
            @foreach($policyies as $policy)

                <tr>
                    <td class="policy_id" id="policy_id{{$policy->id}}"  scope="row">{{$policy->id}}</td>
                    <td>{{$policy->category->category_name}}</td>
                    <td>{{$policy->policy_name}}</td>
                    <td>{{$policy->premium}}</td>
                    <td>{{$policy->Kul_suresi}}</td>

                            <td style="display:flex">

                                <button  type="button" onclick="showPolicy('{{$policy->id}}')"
                                         class="btn btn-primary me-3   float-start">başvur <i
                                        class=""></i></button>
                    </td>

                </tr>
            @endforeach
        </table>

        </div>
    </div>


    {{--                        <div>--}}
{{--                            <a href="{{url('edit-policy/'.$policy->id)}}" class="btn btn-primary">Edit </a>--}}
{{--                        </div>--}}
{{--                        <form action="{{route('yonetici-delete',$policy->id)}}" method="post">--}}
{{--                            {{method_field('DELETE')}}--}}
{{--                            {{csrf_field()}}--}}
{{--                            <button class="btn btn-danger " type="submit">Sil</button>--}}
{{--                        </form>--}}



    </div>
        @if ($policyies->hasPages())
            <div class="pagination-wrapper">
                {{ $policyies->links() }}
            </div>
        @endif
    </div>


@endsection
@section('scripts')
    <script>

        function showPolicy(id){
            var policy_id = $("#policy_id"+id).text();

            $.ajax({
                method: "POST",
                url: "{{route("add-policy")}}",
                data: {
                    'policy_id':policy_id,
                    "_token": "{{ csrf_token() }}",

                },
                success: function (response) {
                    alert(response.status);
                }, error: function (response) {
                    alert(response.status);
                }

            });

        }


    </script>
@endsection

