@extends("Admin/Adminlayout")
@section("sidebar")
    @include("/admin/sidebar")
@endsection

@section("content")

        <div class="container">
        <h3>Poliçeler</h3>
{{--        <a class="btn btn-primary float-right mb-4" href="{{ route('yonetici-create')}}">Add product</a>--}}
        <table class="table table-bordered table-striped">
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
            <tbody>
            @foreach($policyies as $policy)

                <tr>
                    <th scope="row">{{$policy->id}}</th>
                    <td>{{$policy->category->category_name}}</td>
                    <td>{{$policy->policy_name}}</td>
                    <td>{{$policy->premium}}</td>
                    <td>{{$policy->Kul_suresi}}</td>


                    <td style="display:flex">
                        <div>
                            <a href="{{url('edit-policy/'.$policy->id)}}" class="btn btn-primary">Edit </a>
                        </div>
                        <form action="{{route('yonetici-delete',$policy->id)}}" method="post">
                            {{method_field('DELETE')}}
                            {{csrf_field()}}
                            <button class="btn btn-danger " type="submit">Sil</button>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>

        @if ($policyies->hasPages())
            <div class="pagination-wrapper">
                {{ $policyies->links() }}
            </div>
        @endif
    </div>


@endsection

