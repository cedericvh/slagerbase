@extends('client.layouts.master')

@section('content')
    <div class="banner-slider">
        <ul class="bxslider">
            <li class="slider-home"><img src="{{ asset('/images/slider-specialiteiten/FOTOREEKS-specialiteiten.jpg') }}" alt="slide1" /></li>
            <li class="slider-home"><img src="{{ asset('/images/slider-specialiteiten/FOTOREEKS-specialiteiten2.jpg') }}" alt="slide2" /></li>
            <li class="slider-home"><img src="{{ asset('/images/slider-specialiteiten/FOTOREEKS-specialiteiten3.jpg') }}" alt="slide3" /></li>
            <li class="slider-home"><img src="{{ asset('/images/slider-specialiteiten/FOTOREEKS-specialiteiten4.jpg') }}" alt="slide4" /></li>
        </ul>
    </div> <!-- end banner-slider -->
    <div class="white-bg">
        <div class="container">

            @include('partials.aside')

            <main  class="col-sm-2 col-lg-6">

                <div class="item-page" itemscope itemtype="http://schema.org/Article">
                    <meta itemprop="inLanguage" content="nl-NL" />


                    <div class="page-header">
                        <h2 itemprop="name">Specialiteiten</h2>
                    </div>


                    <div itemprop="articleBody">
                        <p class="main-text">
                            Bij ons kan u terecht voor vers vlees van hoge kwaliteit,
                            waaronder het Belgisch witblauw rundvlees, lamsvlees, kalfsvlees en varkensvlees.
                            Verder hebben we ook een zeer uitgebreid aanbod huisbereide salades waar u zeker uw gading
                            in zal kunnen vinden. Naast de ‘klassiekers’ zoals kip curry en vleessalade doen we ons
                            uiterste best u steeds te verrassen met nieuwe recepten. Daarnaast is er een ruim aanbod
                            aan charcuterie, waarvan het merendeel in ons eigen atelier gemaakt wordt. We staan vooral
                            bekend voor ons fijn ossenvlees, smaakvolle boerenham en onze sappige grillham maison.
                            Dit alles en nog veel meer wordt altijd vers en naar uw wens gesneden. Onze
                            traiteurafdeling voorziet u steeds van versbereide gerechten. Bovendien kan u bij ons elke
                            dag vers geleverde groenten en fruit vinden. We hebben daarnaast een mooie keuze aan
                            Belgische, Franse, … kazen in onze winkel. Ook stellen we voor u graag een kaasschotel
                            samen, die rijkelijk aangevuld wordt met vers fruit en noten. Veel van onze producten zijn
                            seizoensafhankelijk. Zo hebben we in het wildseizoen een ruim aanbod aan wild. Als het weer
                            beter wordt, vindt u bij ons ook een uitgebreid assortiment aan lekkernijen voor op de
                            barbecue. Bovendien voorzien we u graag in alles wat u nodig heeft voor uw feestjes,
                            zoals warme en koude buffetten en kaas-, fondue- en gourmetschotels.
                        </p>
                        <p class="main-text">&nbsp;</p>
                    </div>
                </div>

            </main>
            <aside class="col-sm-5 col-lg-3">



            </aside>


        </div> <!-- end container -->
    </div> <!-- end white-bg -->
@endsection