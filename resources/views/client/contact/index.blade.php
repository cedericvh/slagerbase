@extends('client.layouts.master')

@section('content')
    <div class="banner-slider">
        <ul class="bxslider">
            <li class="slider-home"><img src="{{ asset('/images/slider-contact/FOTOREEKS-contact.jpg') }}" alt="slide1" /></li>
            <li class="slider-home"><img src="{{ asset('/images/slider-contact/FOTOREEKS-contact2.jpg') }}" alt="slide2" /></li>
            <li class="slider-home"><img src="{{ asset('/images/slider-contact/FOTOREEKS-contact3.jpg') }}" alt="slide3" /></li>
            <li class="slider-home"><img src="{{ asset('/images/slider-contact/FOTOREEKS-contact4.jpg') }}" alt="slide4" /></li>
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
                            Contact					</h2>
                    </div>




                    <div itemprop="articleBody">
                        <ul class="address">
                            <li>Wim De Smedt en Christine Brouwers</li>
                            <li>Leurshoek 2, 9120 Beveren</li>
                            <li>03 775 71 41</li>
                            <li><span id="cloak42643"><a href="mailto:info@slagerijdesmedt.be">info@slagerijdesmedt.be</a></span><script type="text/javascript">
                                    //<!--
                                    document.getElementById('cloak42643').innerHTML = '';
                                    var prefix = '&#109;a' + 'i&#108;' + '&#116;o';
                                    var path = 'hr' + 'ef' + '=';
                                    var addy42643 = '&#105;nf&#111;' + '&#64;';
                                    addy42643 = addy42643 + 'sl&#97;g&#101;r&#105;jd&#101;sm&#101;dt' + '&#46;' + 'b&#101;';
                                    document.getElementById('cloak42643').innerHTML += '<a ' + path + '\'' + prefix + ':' + addy42643 + '\'>' +addy42643+'<\/a>';
                                    //-->
                                </script></li>
                        </ul>
                        <ul class="open-hours">
                            <li>openingsuren:</li>
                            <li>ma - vrij: 8.00 u - 12.30 u en 13.30 u&nbsp;-&nbsp;18.00 u</li>
                            <li>zat: 7.30 u - 12.30 u en 13.30&nbsp;u - 17.00 u</li>
                            <li>zon: 7.30 u - 12.00 u</li>
                            <li>dinsdag gesloten</li>
                        </ul>
                        <div class="photos clearfix"><img class="article-img" src="/images/map.jpg" alt=""></div> 	</div>


                </div>

            </main>
            <aside class="col-sm-5 col-lg-3">



            </aside>


        </div> <!-- end container -->
    </div> <!-- end white-bg -->
@endsection