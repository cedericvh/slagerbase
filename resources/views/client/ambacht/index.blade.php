@extends('client.layouts.master')

@section('content')
    <div class="banner-slider">
        <ul class="bxslider">
            <li class="slider-home"><img src="{{ asset('/images/slider-ambacht/FOTOREEKS-AMBACHT.jpg') }}" alt="slide1" /></li>
            <li class="slider-home"><img src="{{ asset('/images/slider-ambacht/FOTOREEKS-AMBACHT2.jpg') }}" alt="slide2" /></li>
            <li class="slider-home"><img src="{{ asset('/images/slider-ambacht/FOTOREEKS-AMBACHT3.jpg') }}" alt="slide3" /></li>
        </ul>
    </div> <!-- end banner-slider -->
    <div class="white-bg">
        <div class="container">

            @include('partials.aside')

            <main  class="col-sm-2 col-lg-6">

                <div class="item-page" itemscope itemtype="http://schema.org/Article">
                    <meta itemprop="inLanguage" content="nl-NL" />
                    <div class="page-header">
                        <h2 itemprop="name">Ambacht</h2>
                    </div>
                    <div itemprop="articleBody">
                        <p class="main-text">
                            Onze vakkennis werd ondertussen al vier generaties van vader op zoon doorgegeven.
                            Wij werken nauw samen met lokale landbouwers uit de streek.
                            We kopen bij hen zelf onze runderen aan, namelijk het Belgisch witblauw.
                            Die traditie dragen we hoog in het vaandel.
                            Hierdoor kunnen we garanderen dat we weten waar ons vlees vandaan komt en zijn we op de
                            hoogte van de kwaliteit en de hygiëne die bij de productie gehanteerd wordt.
                            Zo zijn we zeker dat alleen het beste vlees bij ons in de winkel komt.
                        </p>
                </div>

            </main>
            <aside class="col-sm-5 col-lg-3">

            </aside>

        </div> <!-- end container -->
    </div> <!-- end white-bg -->
@endsection