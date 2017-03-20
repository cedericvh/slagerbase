<style>

@page { margin-top: 0cm; }

</style>   

@foreach($orders as $order)
<div style="page-break-inside:always;page-break-after:avoid; font-size: 10pt; margin: -20px -35px -10px -40px;"><br>
    --------------------------------------<br>
    BESTELLINGSINFO<br>
    --------------------------------------<br>             
    <span><b>Naam:</b> {{ $order->getAttribute('name') }}</span><br>
    <span><b>Bestelling:</b><br> {!! $order->getAttribute('bestelling') !!}</span><br>
    <span><b>Klantennummer:</b> {{ $order->getAttribute('number') }}</span><br>
    <span><b>E-Mail:</b> {{ $order->getAttribute('email') }}</span><br>
    <span><b>Telefoonnummer:</b> {{ $order->getAttribute('phone_number') }}</span><br>
    <span><b>Datum en uur afhaling:</b> {{ $order->getAttribute('dategetorder') }}</span>
    <span>&nbsp;</span></div>
@endforeach
