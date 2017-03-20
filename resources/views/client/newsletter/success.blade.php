@extends('client.layouts.master')

@section('content')
    <div class="banner-slider">
        <ul class="bxslider">
            <li class="slider-home"><img src="/images/slider-home/FOTOREEKS-HOME.jpg" alt="slide1" /></li>
            <li class="slider-home"><img src="/images/slider-home/FOTOREEKS-HOME2.jpg" alt="slide2" /></li>
            <li class="slider-home"><img src="/images/slider-home/FOTOREEKS-HOME3.jpg" alt="slide3" /></li>
            <li class="slider-home"><img src="/images/slider-home/FOTOREEKS-HOME4.jpg" alt="slide4" /></li>
            {{--<li class="slider-ambacht"><img src="/images/slider-ambacht/FOTOREEKS-AMBACHT.jpg" alt="slide1" /></li>--}}
            {{--<li class="slider-ambacht"><img src="/images/slider-ambacht/FOTOREEKS-AMBACHT2.jpg" alt="slide2" /></li>--}}
            {{--<li class="slider-ambacht"><img src="/images/slider-ambacht/FOTOREEKS-AMBACHT3.jpg" alt="slide3" /></li>--}}
            {{--<li class="slider-specialiteiten"><img src="/images/slider-specialiteiten/FOTOREEKS-specialiteiten.jpg" alt="slide1" /></li>--}}
            {{--<li class="slider-specialiteiten"><img src="/images/slider-specialiteiten/FOTOREEKS-specialiteiten2.jpg" alt="slide2" /></li>--}}
            {{--<li class="slider-specialiteiten"><img src="/images/slider-specialiteiten/FOTOREEKS-specialiteiten3.jpg" alt="slide3" /></li>--}}
            {{--<li class="slider-specialiteiten"><img src="/images/slider-specialiteiten/FOTOREEKS-specialiteiten4.jpg" alt="slide4" /></li>--}}
            {{--<li class="slider-folder"><img src="/images/slider-folder/FOTOREEKS-folder.jpg" alt="slide1" /></li>--}}
            {{--<li class="slider-folder"><img src="/images/slider-folder/FOTOREEKS-folder2.jpg" alt="slide2" /></li>--}}
            {{--<li class="slider-folder"><img src="/images/slider-folder/FOTOREEKS-folder3.jpg" alt="slide3" /></li>--}}
            {{--<li class="slider-contact"><img src="/images/slider-contact/FOTOREEKS-contact.jpg" alt="slide1" /></li>--}}
            {{--<li class="slider-contact"><img src="/images/slider-contact/FOTOREEKS-contact2.jpg" alt="slide2" /></li>--}}
            {{--<li class="slider-contact"><img src="/images/slider-contact/FOTOREEKS-contact3.jpg" alt="slide3" /></li>--}}
            {{--<li class="slider-bestelonline"><img src="/images/slider-home/FOTOREEKS-HOME.jpg" alt="slide1" /></li>--}}
            {{--<li class="slider-bestelonline"><img src="/images/slider-home/FOTOREEKS-HOME2.jpg" alt="slide2" /></li>--}}
            {{--<li class="slider-bestelonline"><img src="/images/slider-home/FOTOREEKS-HOME3.jpg" alt="slide3" /></li>--}}
            {{--<li class="slider-bestelonline"><img src="/images/slider-home/FOTOREEKS-HOME4.jpg" alt="slide4" /></li>--}}
            {{--<li class="slider-nieuwsbrief"><img src="/images/slider-home/FOTOREEKS-HOME.jpg" alt="slide1" /></li>--}}
            {{--<li class="slider-nieuwsbrief"><img src="/images/slider-home/FOTOREEKS-HOME2.jpg" alt="slide2" /></li>--}}
            {{--<li class="slider-nieuwsbrief"><img src="/images/slider-home/FOTOREEKS-HOME3.jpg" alt="slide3" /></li>--}}
            {{--<li class="slider-nieuwsbrief"><img src="/images/slider-home/FOTOREEKS-HOME4.jpg" alt="slide4" /></li>--}}
            {{--<li class="slider-bedanktnieuwsbrief"><img src="/images/slider-home/FOTOREEKS-HOME.jpg" alt="slide1" /></li>--}}
            {{--<li class="slider-bedanktnieuwsbrief"><img src="/images/slider-home/FOTOREEKS-HOME2.jpg" alt="slide2" /></li>--}}
            {{--<li class="slider-bedanktnieuwsbrief"><img src="/images/slider-home/FOTOREEKS-HOME3.jpg" alt="slide3" /></li>--}}
            {{--<li class="slider-bedanktnieuwsbrief"><img src="/images/slider-home/FOTOREEKS-HOME4.jpg" alt="slide4" /></li>--}}
            {{--<li class="slider-uitschrijven"><img src="/images/slider-home/FOTOREEKS-HOME.jpg" alt="slide1" /></li>--}}
            {{--<li class="slider-uitschrijven"><img src="/images/slider-home/FOTOREEKS-HOME2.jpg" alt="slide2" /></li>--}}
            {{--<li class="slider-uitschrijven"><img src="/images/slider-home/FOTOREEKS-HOME3.jpg" alt="slide3" /></li>--}}
            {{--<li class="slider-uitschrijven"><img src="/images/slider-home/FOTOREEKS-HOME4.jpg" alt="slide4" /></li>--}}

        </ul>
    </div> <!-- end banner-slider -->
    <div class="white-bg">
        <div class="container">

            @include('partials.aside')

            <main  class="col-sm-2 col-lg-6">
                <div class="item-page" itemscope="" itemtype="http://schema.org/Article">
                    <meta itemprop="inLanguage" content="nl-NL">

                    <div class="page-header">
                        <h2 itemprop="name">
                            Bedankt om u in te schrijven					</h2>
                    </div>

                    <div itemprop="articleBody">
                        <p>Bedankt voor uw inschrijving op onze nieuwsbrief !</p>
                    </div>
                </div>
            </main>
            <aside class="col-sm-5 col-lg-3">

            </aside>

        </div> <!-- end container -->
    </div> <!-- end white-bg -->
@endsection