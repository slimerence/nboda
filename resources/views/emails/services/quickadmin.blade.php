@component('mail::message')
    # New service request

    {{ $quickService->service }}
    {{ $quickService->bedroom }}
    {{ $quickService->bathroom }}
    Property Type:{{ $quickService->property }}
    Postcode:{{ $quickService->postcode }}
    Contact:{{ $quickService->contact }}

    Regards!
    Newboda Clean Admin
@endcomponent
