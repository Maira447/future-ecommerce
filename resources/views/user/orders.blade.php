<x-user-layout>
    {{--------------------- 
        $slot 
    --------------------}}
    
    
        @if (! $orders->isEmpty())
        <h2>View Order Details</h2>
        <div style="overflow-x: auto">
            <table style="width: 100%;min-width:450px" cellspacing="0">
                <thead>
                    <tr>
                        <td>Orders ID</td>
                        <td>Date</td>
                        <td>Price</td>
                        <td>Status</td>
                        <td>Details</td>
                    </tr>
                </thead>
                @foreach ($orders as $order)
                    <tr>
                        <td>{{ $order->id }}</td>
                        <td>{{ $order->created_at }}</td>
                        <td>${{ $order->grand_total }}</td>
                        <td style="color: {{$status[$order->status][1]}}">{{ $status[$order->status][0] }}</td>
                        <td class="message"><a href="{{ route('user.orders.show', ['order' => $order->id]) }}">Ver pedido</a></td>
                    </tr>
                @endforeach
            </table>
        </div>
        @else
            <h3 class="message">No orders yet. <a href="{{ route('shop') }}">Shop now </a></h3 >
        @endif
    {{--------------------- 
        $slot 
    --------------------}}
</x-user-layout>