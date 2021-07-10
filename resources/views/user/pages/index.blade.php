@extends('user.layout.master')

@section('content')
<!-- ======= Intro Section ======= -->
<section id="intro">
    <div class="container">
        <div class="row align-items-center mt-5">
            <div class="col-lg-6">
            </div>
            <div class="col-lg-6 col-sm-12">
                <div class="hero-inner">
                    <h2>BANTU GERAK</h2>
                    <p>“Dampak yang luar biasa berawal dari langkah kecil dan kemauan untuk memulai”</p>
                    <h3>Tertarik Untuk Donasi?</h3>
                    <a href="#campaign" class="hero-btn">Donasi Sekarang!</a>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>

</section><!-- End Intro Section -->

<main id="main">

    <!-- Section Campaign -->
    <section id="campaign">
        <div class="container">
            <div class="section-header">
                <h2>Mereka yang membutuhkan</h2>
            </div>

            <div class="row">
                @foreach ($campaigns as $campaign)
                @if (Carbon\Carbon::parse( $campaign->max_date )->diffInDays( Carbon\Carbon::now()) >= 0)
                <div class="col-lg-3">
                    <div class="card shadow box-campaign">
                        <img class="img-campaign" src="{{($campaign->image)}}">
                        <div class="title-campaign">
                            <a href="/campaign/{{$campaign->slug}}">
                                <h3>{{($campaign->title)}}</h3>
                            </a>
                        </div>
                        <div class="body-campaign">
                            <div class="penggalang">
                                <p>{{($campaign->user->name)}}</p>
                            </div>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" style="width: 90%" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <p class="card-text deadline"><b>{{ moneyFormat($danaSementara) }}</b> terkumpul dari
                                <b>{{ moneyFormat($campaign->target_donation) }}</b> </p>
                            <div class="deadline">
                                @if (\Carbon\Carbon::parse( $campaign->max_date )->diffInDays( Carbon\Carbon::now()) >
                                0)
                                <p><b>{{ \Carbon\Carbon::parse( $campaign->max_date )->diffInDays( Carbon\Carbon::now()) }}</b>
                                    Hari lagi</p>
                                @else
                                <p><b>{{ \Carbon\Carbon::parse( $campaign->max_date )->diffInHours( Carbon\Carbon::now()) }}</b>
                                    Jam Lagi</p>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
                @else

                @endif

                @endforeach
            </div>
        </div>
    </section><!-- End Campaign Section -->

    <!-- Section Penerima Manfaat -->
    <section id="penerima">
        <div class="section-header">
            <div class="container">
            <h2>Penerima Manfaat</h2>
        </div>
        </div>
        <div class="section-count">
        <div class="container">

            <div class="row ">
                <div class="col-md-3 col-sm-6 col-12">
                    <div class="card shadow border-0 p-5 recap-list">
                        <span class="recap-list-icon">
                            <img src="{{asset('user/img/icon/donasi.svg')}}" alt="">
                        </span>
                        <span class="recap-list-detail">
                            <h1 id="ododonasi" class="odometer odometer-auto-theme mb-1">843</h1>
                            <p>Penerima Manfaat</p>
                        </span>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-12">
                    <div class="card shadow border-0 p-5 recap-list">
                        <span class="recap-list-icon">
                            <img src="{{asset('user/img/icon/relawan.svg')}}" alt="">
                        </span>
                        <span class="recap-list-detail">

                            <h1 id="odorelawan" class="odometer odometer-auto-theme mb-1">923</h1>
                            <p>Total Donasi</p>
                        </span>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-12">
                    <div class="card shadow border-0 p-5 recap-list">
                        <span class="recap-list-icon">
                            <img src="{{asset('user/img/icon/donatur.svg')}}" alt="">
                        </span>
                        <span class="recap-list-detail">

                            <h1 id="ododonatur" class="odometer odometer-auto-theme mb-1">18</h1>
                            <p>Program Kebaikan</p>
                        </span>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-12">
                    <div class="card shadow border-0 p-5 recap-list">
                        <span class="recap-list-icon">
                            <img src="{{asset('user/img/icon/kolab.svg')}}" alt="">
                        </span>
                        <span class="recap-list-detail">

                            <h1 id="odokolaborator" class="odometer odometer-auto-theme mb-1">8723</h1>
                            <p>Total Relawan</p>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </section><!-- End Peneima Section -->

    <!-- Section Program Kebaikan -->
    <section id="program">
        <div class="container">
            <div class="section-header">
                <h2>Program kebaikan</h2>
            </div>

            <div class="row">
                @foreach ($programs as $program)
                <div class="col-lg-4">
                    <div class="box wow fadeInLeft">
                        <div class="icon shadow-sm"><img src="{{$program->image}}" style="max-width: 75px;" alt=""></div>
                        <h4 class="title"><a href="">{{$program->title}}</a></h4>
                        <p class="description">{{$program->description}}</p>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- End Program Section -->

    <!-- Section Publikasi -->
    <section id="publikasi">
        <div class="container">
            <div class="section-header">
                <h2>Publikasi</h2>
            </div>

            <div class="row">
                <div class="col-lg-3">
                    <div class="card shadow-sm">
                        <div class="container-img-publikasi">
                            <img class="card-img-top" src="assets/img/testimonial-1.jpg" alt="Card image cap">
                            <div class="title-publikasi">kajshd</div>
                        </div>
                        <div class="card-body">
                            aksjhd
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">laksdjalksjd</div>
                <div class="col-lg-3">laksdjalksjd</div>
                <div class="col-lg-3">laksdjalksjd</div>
            </div>
        </div>
    </section>
</main>
@endsection
