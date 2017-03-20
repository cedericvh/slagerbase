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

            <main class="col-sm-2 col-lg-6">

                <div id="acymodifyform">
                    <form action="{{ route('client.newsletter.store') }}" method="POST" name="adminForm" id="adminForm" class="form-horizontal">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <fieldset class="adminform acy_user_info">
                            <legend><span>Schrijf in voor de nieuwsbrief</span></legend>
                            <div id="acyuserinfo">
                                <div class="form-group">
                                    <label for="name" class="col-xs-3 control-label"><span class="pull-left">Naam</span></label>
                                    <div class="col-xs-4">
                                        <input type="text" name="name" class="form-control" id="name" value="{{ old('name') }}"/>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="email" class="col-xs-3 control-label"><span class="pull-left">E-mail</span></label>
                                    <div class="col-xs-4">
                                        <input type="email" name="email" class="form-control" id="email" value="{{ old('email') }}" />
                                    </div>
                                </div>
                                @include('partials.errors')
                            </div>
                        </fieldset>

                        <br>
                        <input type="hidden" name="option" value="com_acymailing">
                        <input type="hidden" name="task" value="savechanges">
                        <input type="hidden" name="ctrl" value="user">
                        <input type="hidden" name="acy_source" value="menu_119">
                        <input type="hidden" name="bf0eeaabf3998579f21665c6be1d1775" value="1">
                        <input type="hidden" name="subid" value="0">
                        <input type="hidden" name="key" value="0">
                        <p class="acymodifybutton">
                            <button class="button btn btn-primary">Aanmelden of afmelden</button>
                        </p>
                    </form>
                </div>
                <!--  AcyMailing Component powered by http://www.acyba.com -->
                <!-- version Enterprise : 4.9.2 -->
                <div class="acymailing_footer" align="center" style="text-align:center">
                    <a href="http://www.acyba.com" target="_blank" title="AcyMailing : Joomla!® E-mail Marketing">
                        AcyMailing - Joomla!® E-mail Marketing
                    </a>
                </div>

            </main>
            <aside class="col-sm-5 col-lg-3">



            </aside>


        </div> <!-- end container -->
    </div> <!-- end white-bg -->
@endsection