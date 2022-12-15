@extends("layout")
@section("sidebar")
    @include("/Customer/sidebar")
@endsection
@section("content")
{{--    <link href="~/vendor/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">--}}
<style>
.content-mark{
    bottom:460px;
    left: 500px;
    position: fixed;

}
.content-mark1{
    bottom:460px;
    left: 950px;
    position: fixed;
}
.content-mark2{
    bottom:200px;
    left: 300px;
    position: fixed;
}
.content-mark3{
    bottom:200px;
    left: 1200px;
    position: fixed;
}
.content-mark4{
    bottom:100px;
    left: 750px;
    position: fixed;
}



</style>
<div class="container-fluid">



    <div class="content-mark">
{{-- <label class="col-lg-4 col-form-label">Kasko</label>--}}
    <button  type="button" class="btn btn-primary" data-toggle="modal"
            data-target="#kaskoModal"><img src="{{asset('assets/img/kasko.png')}}" style="width: 250px" height="200px"><i>Kasko   </i>
    </button>

    </div>
    <div class="content-mark1">
    <button type="button" class="btn btn-primary" data-toggle="modal"
            data-target="#trafikModal"><img src="{{asset('assets/img/mini-onarım.png')}}" style="width: 250px" height="200px">
        trafik Sigortası
    </button>
    </div>
    <div class="content-mark2">
    <button type="button" class="btn btn-primary" data-toggle="modal"
            data-target="#saModal"><img src="{{asset('assets/img/shutterstock_585760394-600.jpg')}}" style="width: 250px" height="200px">
        Sağlık Sigortası
    </button>
    </div>
    <div class="content-mark3">
    <button type="button" class="btn btn-primary" data-toggle="modal"
            data-target="#DASKModal"><img src="{{asset('assets/img/daskk.jpg')}}" style="width: 250px" height="200px">
        DEPREM SİGORTASI
    </button>
    </div>
    <div class="content-mark4">
    <button type="button" class="btn btn-primary" data-toggle="modal"
            data-target="#konutModal"><img src="{{asset('assets/img/konut-sigortasi-1.jpg')}}" style="width: 250px" height="200px">
        Konut Sigortası
    </button>
    </div>
</div>
    <div class="modal fade bd-example-modal-lg" id="kaskoModal" tabindex="-1"
         role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <form action="{{route('create-question')}}" method="POST">
                    @csrf
                    <input type="hidden" name="follow_id" id="follow_id" value="1">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel"> Kasko
                            Teklifi  Al</h5>
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
                                               for="val-firstname">
                                            Ad
                                            <span class="text-danger">*</span>
                                        </label>
                                        <div class="col-lg-6">
                                            <input type="text" class="form-control"
                                                   id="val-firstname"
                                                   name="val-firstname"
                                                   style="color: black">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-4 col-form-label"
                                               for="val-tc">
                                            TC
                                            <span class="text-danger">*</span>
                                        </label>
                                        <div class="col-lg-6">
                                            <input type="number" class="form-control"
                                                   id="val-tc" name="val-tc" min="10000000000" max="99999999999"
                                                   style="color: black">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-lg-4 col-form-label"
                                               for="val-belge">
                                            Belge Seri No
                                            <span class="text-danger">:</span>
                                        </label>
                                        <div class="col-lg-6">
                                            <input type="number" class="form-control"
                                                   id="val-belge" name="val-belge"
                                                   style="color: black">
                                        </div>
                                    </div>


                                </div>
                                <div class="col-xl-6">
                                    <div class="form-group row">
                                        <label class="col-lg-4 col-form-label"
                                               for="val-lastname">
                                            Soyad
                                            <span class="text-danger">*</span>
                                        </label>
                                        <div class="col-lg-6">
                                            <input type="text" class="form-control"
                                                   id="val-lastname" name="val-lastname"
                                                   style="color: black">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-4 col-form-label"
                                               for="val-plaka">
                                            Plaka
                                            <span class="text-danger">*</span>
                                        </label>
                                        <div class="col-lg-6">
                                            <input type="text" class="form-control"
                                                   id="val-plaka" name="val-plaka"
                                                   style="color: black">
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
    <div class="modal fade bd-example-modal-lg" id="saModal" tabindex="-1" role="dialog"
         aria-labelledby="exampleModal2Label" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <form action="{{route('create-question')}}" method="POST">
                    @csrf
                    <input type="hidden" name="follow_id" id="follow_id" value="2">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel2"> Sağlık
                            Sigortası Teklifi Al </h5>
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
                                               for="val-firstname">
                                            Ad
                                            <span class="text-danger">*</span>
                                        </label>
                                        <div class="col-lg-6">
                                            <input type="text" class="form-control"
                                                   id="val-firstname"
                                                   name="val-firstname"
                                                   style="color: black">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-4 col-form-label"
                                               for="val-tc">
                                            TC
                                            <span class="text-danger">*</span>
                                        </label>
                                        <div class="col-lg-6">
                                            <input type="number" class="form-control"
                                                   id="val-tc" name="val-tc" min="10000000000" max="99999999999"
                                                   style="color: black">
                                        </div>
                                    </div>


                                </div>
                                <div class="col-xl-6">
                                    <div class="form-group row">
                                        <label class="col-lg-4 col-form-label"
                                               for="val-lastname">
                                            Soyad
                                            <span class="text-danger">*</span>
                                        </label>
                                        <div class="col-lg-6">
                                            <input type="text" class="form-control"
                                                   id="val-lastname" name="val-lastname"
                                                   style="color: black">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-4 col-form-label"
                                               for="val_dogum_tarihi">
                                            Doğum yılı
                                            <span class="text-danger">*</span>
                                        </label>
                                        <div class="col-lg-6">
                                            <input type="number" class="form-control"
                                                   id="val_dogum_tarihi" min="1900" max="2025"
                                                   name="val_dogum_tarihi"
                                                   style="color: black">
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
    <div class="modal fade bd-example-modal-lg" id="trafikModal" tabindex="-1"
         role="dialog" aria-labelledby="exampleModalLabel3" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <form action="{{route('create-question')}}" method="POST">
                    @csrf
                    <input type="hidden" name="follow_id" id="follow_id" value="3">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel3"> Trafik Sigortası
                            Teklifi Al </h5>
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
                                               for="val-firstname">
                                            Ad
                                            <span class="text-danger">*</span>
                                        </label>
                                        <div class="col-lg-6">
                                            <input type="text" class="form-control"
                                                   id="val-firstname"
                                                   name="val-firstname"
                                                   style="color: black">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-4 col-form-label"
                                               for="val-tc">
                                            TC
                                            <span class="text-danger">*</span>
                                        </label>
                                        <div class="col-lg-6">
                                            <input type="number" class="form-control"
                                                   id="val-tc" name="val-tc" min="10000000000" max="99999999999"
                                                   style="color: black">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-lg-4 col-form-label"
                                               for="val-belge">
                                            Belge Seri No
                                            <span class="text-danger">:</span>
                                        </label>
                                        <div class="col-lg-6">
                                            <input type="number" class="form-control"
                                                   id="val-belge" name="val-belge"
                                                   style="color: black">
                                        </div>
                                    </div>


                                </div>
                                <div class="col-xl-6">
                                    <div class="form-group row">
                                        <label class="col-lg-4 col-form-label"
                                               for="val-lastname">
                                            Soyad
                                            <span class="text-danger">*</span>
                                        </label>
                                        <div class="col-lg-6">
                                            <input type="text" class="form-control"
                                                   id="val-lastname" name="val-lastname"
                                                   style="color: black">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-4 col-form-label"
                                               for="val-plaka">
                                            Plaka
                                            <span class="text-danger">*</span>
                                        </label>
                                        <div class="col-lg-6">
                                            <input type="text" class="form-control"
                                                   id="val-plaka" name="val-plaka"
                                                   style="color: black">
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
    <div class="modal fade bd-example-modal-lg" id="DASKModal" tabindex="-1"
         role="dialog" aria-labelledby="exampleModalLabel4" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <form action="{{route('create-question')}}" method="POST">
                    @csrf
                    <input type="hidden" name="follow_id" id="follow_id" value="4">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel4"> Deprem Sigortası
                            Teklifi Al</h5>
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
                                               for="val-firstname">
                                            Ad
                                            <span class="text-danger">*</span>
                                        </label>
                                        <div class="col-lg-6">
                                            <input type="text" class="form-control"
                                                   id="val-firstname"
                                                   name="val-firstname"
                                                   style="color: black">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-4 col-form-label"
                                               for="val-tc">
                                            TC
                                            <span class="text-danger">*</span>
                                        </label>
                                        <div class="col-lg-6">
                                            <input type="number" class="form-control"
                                                   id="val-tc" name="val-tc" min="10000000000" max="99999999999"
                                                   style="color: black">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-lg-4 col-form-label"
                                               for="val-adres">
                                            Adres
                                            <span class="text-danger">*</span>
                                        </label>
                                    </div>
                                    <div class="col-lg-6">
                                            <textarea rows="4" cols="50" maxlength="200"
                                                      id="val-adres" name="val-adres"
                                                      style="color: black"></textarea>
                                    </div>

                                </div>
                                <div class="col-xl-6">
                                    <div class="form-group row">
                                        <label class="col-lg-4 col-form-label"
                                               for="val-lastname">
                                            Soyad
                                            <span class="text-danger">*</span>
                                        </label>
                                        <div class="col-lg-6">
                                            <input type="text" class="form-control"
                                                   id="val-lastname" name="val-lastname"
                                                   style="color: black">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-4 col-form-label"
                                               for="val-dairem2">
                                            Daire M^2
                                            <span class="text-danger">*</span>
                                        </label>
                                        <div class="col-lg-6">
                                            <input type="text" class="form-control"
                                                   id="val-dairem2" name="val-dairem2"
                                                   style="color: black">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-4 col-form-label"
                                               for="val-bina">
                                            Bina Yapım Yılı
                                            <span class="text-danger"></span>
                                        </label>
                                        <div class="col-lg-6">
                                            <input type="number" class="form-control"
                                                   id="val-bina" name="val-bina" max="2030" min="1900"
                                                   style="color: black">
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

    <div class="modal fade bd-example-modal-lg" id="konutModal" tabindex="-1"
         role="dialog" aria-labelledby="exampleModalLabel5" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <form action="{{route('create-question')}}" method="POST">
                    @csrf
                    <input type="hidden" name="follow_id" id="follow_id" value="5">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel5"> Konut Sigortası
                            Teklifi Al </h5>
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
                                               for="val-firstname">
                                            Ad
                                            <span class="text-danger">*</span>
                                        </label>
                                        <div class="col-lg-6">
                                            <input type="text" class="form-control"
                                                   id="val-firstname"
                                                   name="val-firstname"
                                                   style="color: black">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-4 col-form-label"
                                               for="val-tc">
                                            TC
                                            <span class="text-danger">*</span>
                                        </label>
                                        <div class="col-lg-6">
                                            <input type="number" class="form-control"
                                                   id="val-tc" name="val-tc" min="10000000000" max="99999999999"
                                                   style="color: black">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-lg-4 col-form-label"
                                               for="val-adres">
                                            Adres
                                            <span class="text-danger">*</span>
                                        </label>
                                    </div>
                                    <div class="col-lg-6">
                                            <textarea rows="4" cols="50" maxlength="200"
                                                      id="val-adres" name="val-adres"
                                                      style="color: black"></textarea>
                                    </div>

                                </div>
                                <div class="col-xl-6">
                                    <div class="form-group row">
                                        <label class="col-lg-4 col-form-label"
                                               for="val-lastname">
                                            Soyad
                                            <span class="text-danger">*</span>
                                        </label>
                                        <div class="col-lg-6">
                                            <input type="text" class="form-control"
                                                   id="val-lastname" name="val-lastname"
                                                   style="color: black">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-4 col-form-label"
                                               for="val-dairem2">
                                            Daire M^2
                                            <span class="text-danger">*</span>
                                        </label>
                                        <div class="col-lg-6">
                                            <input type="text" class="form-control"
                                                   id="val-dairem2" name="val-dairem2"
                                                   style="color: black">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-4 col-form-label"
                                               for="val-bina">
                                            Bina Yapım Yılı
                                            <span class="text-danger"></span>
                                        </label>
                                        <div class="col-lg-6">
                                            <input type="number" class="form-control"
                                                   id="val-bina" name="val-bina" max="2030" min="1900"
                                                   style="color: black">
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

@endsection
