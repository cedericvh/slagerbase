<p>Bedankt voor uw bericht! </p>
<p>We nemen zo spoedig mogelijk contact met u op.</p><br>
<p>Volgende gegevens werden naar ons verzonden : </p><br>
<p>Naam : {{ $order->getAttribute('name') }}</p>
<p>Bedrijf : {{ $order->getAttribute('number') }}</p>
<p>E-mail : {{ $order->getAttribute('email') }}</p>
<p>Telefoon : {{ $order->getAttribute('phone_number') }}</p>
<p>Bijkomende info : {{ $order->getAttribute('bestelling') }}</p>
<p>Datum afhalen : {{ $order->getAttribute('dategetorder') }}</p>
<p></p>