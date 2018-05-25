@component('mail::message')
# New Lead

<p>Name: {{ $lead->name }}</p>
<p>Phone: {{ $lead->phone }}</p>
<p>Postcode: {{ $lead->postcode }}</p>
<p>Message: {{ $lead->message }}</p>

Regard!<br>
@endcomponent
