@component('mail::message')
# New service request

@foreach($serviceData as $key=>$value)
<p>{{ ucfirst($key) }}: {{ $value }}</p>
@endforeach


Regards!<br>
Newboda Clean Admin
@endcomponent
