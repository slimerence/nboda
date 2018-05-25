@component('mail::message')
# Hi {{ $lead->name }}

<p>Thank you very much for contacting with Newboda Clean, one of our staff will call you very soon!</p>

Regards!<br>
<p>Newboda Clean</p>
<p>Phone: {{ $siteConfig->contact_phone }}</p>
<p>Website: {{ url('/') }}</p>
@endcomponent
