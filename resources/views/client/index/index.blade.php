@extends('client.layouts.master')

@section('content')
    <div class="banner-slider">
        <ul class="bxslider">
            <li class="slider-home"><img src="{{ asset('/images/slider-home/FOTOREEKS-HOME.jpg') }}" alt="slide1" /></li>
            <li class="slider-home"><img src="{{ asset('/images/slider-home/FOTOREEKS-HOME2.jpg') }}" alt="slide2" /></li>
            <li class="slider-home"><img src="{{ asset('/images/slider-home/FOTOREEKS-HOME3.jpg') }}" alt="slide3" /></li>
            <li class="slider-home"><img src="{{ asset('/images/slider-home/FOTOREEKS-HOME4.jpg') }}" alt="slide4" /></li>
        </ul>
    </div> <!-- end banner-slider -->
    <div class="white-bg">
        <div class="container">

            @include('partials.aside')

            <main  class="col-sm-2 col-lg-6">

                <div class="item-page" itemscope itemtype="http://schema.org/Article">
                    <meta itemprop="inLanguage" content="nl-NL" />


                    <div class="page-header">
                        
                    </div>




                    <div itemprop="articleBody">
                       
                          @foreach ($newsitems as $newsitem)                  
                          <article>
                            <h2>
                              {!!$newsitem->name!!}
                            </h2>
                            <section>
                              {!!$newsitem->body!!}
                            </section>
                          </article>

                          @endforeach
                     
                    </div>


                </div>


            </main>
            <aside class="col-sm-5 col-lg-3">



            </aside>


        </div> <!-- end container -->
    </div> <!-- end white-bg -->
@endsection