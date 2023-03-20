<x-admin-layout>
    <x-slot name="style">
        <link rel="stylesheet" href="{{ asset('css/admin/order.css') }}">
    </x-slot>
    <x-slot name="js">
    </x-slot>

    <div class="_container">
        @if (!$orders->isEmpty())
        <h1>Pedidos</h1><br>
        <div style="overflow-x: auto">
            <table style="width: 100%;min-width:650px" class="card">
                <thead>
                    <tr>
                        <th>Pedidos ({{count($orders)}})</th>
                        <th>Status</th>
                        <th>Detalhes</th>
                    </tr>
                </thead>
                @foreach ($orders as $order)
                    <tr>
                        <td>
                            <div class="flex_align">
                                <div class="sm_card flex_align" style="flex-direction: column">
                                    <strong>{{ strtoupper($order->created_at->format('M')) }}</strong>
                                    <strong>{{ $order->created_at->format('d') }}</strong>
                                </div>
                                <div>
                                    <strong>Pedido-{{ $order->id }}</strong><br>
                                    <span>${{ $order->grand_total }}</span>
                                </div>
                            </div>
                        </td>

                        <td><span style="background: {{$status[$order->status][1]}}" class="sm_card status">{{ $status[$order->status][0] }}</span></td>
                        <td><a href="{{ route('admin.orders.show', ['order' => $order->id]) }}">Ver pedido</a></td>
                    </tr>
                @endforeach
            </table>
        </div>
        @else
            <p>Nenhum pedido efetuado,   <a href="{{ route('admin.products.create') }}">Adicionar mais produtos</a></p>
        @endif

    </div>
</x-admin-layout>
