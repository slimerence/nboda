@component('mail::message')
# Hi Administrator,

@component('mail::panel')
Congrats, one of your order has been approved by {{ $financeController->name }}! <br>
<table>
    <tr>
        <td style="width: 40%;"><h4>Order #{{ $order->serial_number }}</h4></td>
        <td style="width: 60%;">
            <p style="text-align: right;">
                Place order #:
                <b style="color: #409EFF;">{{ $order->place_order_number }}</b>
            </p>
        </td>
    </tr>
    <tr>
        <td><h5 style="padding-left: 12px; font-weight: bold;">Status</h5></td>
        <td><span style="color: green;">Approved</span></td>
    </tr>
    <tr>
        <td>
            <h5 style="padding-left: 12px; font-weight: bold;">Customer</h5>
        </td>
        <td>{{ $order->group_name }}: {{ $order->customer->name }}</td>
    </tr>
    <tr>
        <td>
            <h5 style="padding-left: 12px; font-weight: bold;">Finance Controller</h5>
        </td>
        <td>{{ $financeController ? $financeController->name.' ('.$financeController->email.')' : 'N/A' }}</td>
    </tr>
    <tr>
        <td>
            <h5 style="padding-left: 12px; font-weight: bold;">Order Cost (GST INCL)</h5>
        </td>
        <td>{{ config('system.CURRENCY').number_format($order->total,2) }}</td>
    </tr>
    <tr>
        <td>
            <h5 style="padding-left: 12px; font-weight: bold;">Shipment Fee</h5>
        </td>
        <td>{{ $order->delivery_charge>0 ? config('system.CURRENCY').number_format($order->delivery_charge,2) : 'Free' }}</td>
    </tr>

    <tr>
        <td>
            <h5 style="padding-left: 12px; font-weight: bold;">Total (GST INCL)</h5>
        </td>
        <td>{{ config('system.CURRENCY').number_format($order->total+$order->delivery_charge,2) }}</td>
    </tr>
    <tr>
        <td>
            <h5 style="padding-left: 12px; font-weight: bold;">Ship to</h5></td>
        <td>{{ $order->customer->addressText() }}</td>
    </tr>
</table>
<br>
@component('mail::button', ['url' => $viewOrderUrl, 'color' => 'green'])
View Order Details ({{ count($order->orderItems)>1 ? count($order->orderItems).' Items' : '1 Item' }})
@endcomponent

@endcomponent

Thanks!<br>
@endcomponent
