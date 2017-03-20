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
                <div class="gbs3">
                    <p class="thanks alert alert-success">
                        Bedankt voor uw bericht! We nemen zo spoedig mogelijk contact met u op.
                    </p>

                </div>
            </main>
            <aside class="col-sm-5 col-lg-3">
                <div class="custom besteltekst">
                    <p>Geef al uw gegevens correct in en probeer uw bestelling duidelijk te omschrijven.</p>
                    <p>U ontvangt na het invullen van het formulier een verzendbevestiging. Uw bestelling is definitief van&nbsp;zodra u van ons een mail hebt ontvangen met een bestelbevestiging.</p>
                    <p>Op maandag, woensdag, donderdag en vrijdag kan u bestellingen afhalen vanaf 8.00 u tot 18.30 u.&nbsp;</p>
                    <p>Op zaterdag kan u afhalen tot 17.30 u en op zondag tot 12.30 u.</p>
                    <p>U kan u uw bestellingen doorsturen tot 14.00 u (op zondag tot 10.00 u) om ze dezelfde dag af te&nbsp;halen. &nbsp;Bestellingen kunnen afgehaald worden vanaf 1 uur na het doorsturen. Bestellingen die voor&nbsp;9.00 u afgehaald worden, moeten ten laatste om 7.00 u doorgestuurd zijn.</p>
                    <p>Bestellingen van gourmet en fondue moeten ten laatste de dag ervoor om 16.00 u doorgestuurd zijn.&nbsp;&nbsp;</p>
                    <p>Alle andere schotels (kaas, charcuterie, koud buffet, zalmschotel, koude groenten, etc.) moeten&nbsp;minstens 48 u op voorhand besteld worden.&nbsp;</p>
                    <p>Als u uw bestelling komt afhalen, hoeft u niet te wachten. U gaat gewoon naar de kassa en vraagt&nbsp;daar naar uw bestelling.&nbsp;&nbsp;</p>
                    <p>Als u iets bestelt dat niet in voorraad is, zullen wij u een zo goed mogelijk alternatief voorstellen als u&nbsp;uw bestelling komt afhalen. U kan het alternatief product op dat moment nog weigeren.</p>
                </div>
            </aside>


        </div> <!-- end container -->
    </div> <!-- end white-bg -->
@endsection