<div class="sidebar" data-color="purple" data-background-color="black" data-image="./assets/img/sidebar-2.jpg">
    <!--
    Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

    Tip 2: you can also add an image using data-image tag
-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


    </li>
    <div class="logo">
        <img src="{{asset('assets/img/40535.png')}}" style="height: 145px" >
{{--        <a href="http://www.creative-tim.com" class="simple-text logo-normal">i--}}
{{--            İdeal Sigorta--}}
{{--        </a>--}}
    </div>
    <div class="sidebar-wrapper">

        <ul class="nav">
            <li class="nav-item active  ">
                <a class="nav-link" href="{{route('ask-question')}}">
                    <i class="fa-solid fa-question"></i>
                    <p>Sigorta teklifi Al</p>
                </a>
            <li class="nav-item active  ">
                <a class="nav-link" href="{{route('history-question')}}">
                    <i class="fa-sharp fa-solid fa-rotate"></i>
                    <p class="">Sigorta Teklif Geçmişim</p>
                </a>

            </li>
            <li class="nav-item active  ">
                <a class="nav-link" href="{{route('policy-list')}}">
                    <i class="Meterial İcons">Ⓟ</i>
                    <p>Poliçelerim</p>
                </a>

            </li>
            <li class="nav-item active  ">
                <a class="nav-link" href="{{route('policy-history')}}">
                    <i class="fa-sharp fa-solid fa-clock-rotate-left"> </i>
                    <p>Police Geçmişim</p>
                </a>

            </li>



            <!-- your sidebar here -->
        </ul>
    </div>
</div>
