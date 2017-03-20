@extends('client.layouts.master')

@section('content')
    <div class="banner-slider">
        <ul class="bxslider">
            <li class="slider-home"><img src="{{ asset('/images/slider-folder/FOTOREEKS-folder.jpg') }}" alt="slide1" /></li>
            <li class="slider-home"><img src="{{ asset('/images/slider-folder/FOTOREEKS-folder2.jpg') }}" alt="slide2" /></li>
            <li class="slider-home"><img src="{{ asset('/images/slider-folder/FOTOREEKS-folder3.jpg') }}" alt="slide3" /></li>
        </ul>
    </div> <!-- end banner-slider -->
    <div class="white-bg">
        <div class="container">

            @include('partials.aside')

            <main  class="col-sm-2 col-lg-6">

                <div class="item-page" itemscope itemtype="http://schema.org/Article">
                    <meta itemprop="inLanguage" content="nl-NL" />


                    <div class="page-header">
                        <h2 itemprop="name">Folders</h2>
                    </div>


                    <div itemprop="articleBody">
                        <ul>
                            <li>
                                <span style="font-size: 14pt;">
                                    <a href="{{ asset('/images/feestfolder-print.pdf') }}" target="_blank">Feestfolder 2016 - 2017</a>
                                </span>
                            </li>
                        </ul>
                      
                      <ul>
                            <li>
                                <span style="font-size: 14pt;">
                                    <a href="{{ asset('/images/BBQfolder_2016.pdf') }}" target="_blank">BBQ-folder 2016</a>
                                </span>
                            </li>
                        </ul>
                        <p><strong><a href="/images/folders_en_bestanden/vakantiepakketten_2015.pdf" target="_blank"></a></strong></p>
                    </div>
                </div>

            </main>
            <aside class="col-sm-5 col-lg-3">

            </aside>

        </div> <!-- end container -->
    </div> <!-- end white-bg -->
@endsection