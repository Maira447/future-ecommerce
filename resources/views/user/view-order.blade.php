<x-user-layout>
    <x-slot name="style">
        <link rel="stylesheet" href="{{ asset('css/user/order_detail.css') }}">
    </x-slot>
    {{--------------------- 
        $slot 
    --------------------}}
    <style>
        a[href = "{{ route('user.orders.index') }}"]{
            border-bottom: 3px solid var(--site_col_1);
        }
    </style>
        <h3>Informações do pedido</h3>
        <div class="grid">
            <div>
                <h4>Pedido Id #{{ $order->id }}</h4>
                <hr>
                <div>
                    <div class="flex_align">
                        <span>Status do pedido</span>
                        <span style="color: {{$status[$order->status][1]}}">{{ $status[$order->status][0] }}</span>
                    </div>
                    <div class="flex_align">
                        <span>Data do pedido</span>
                        <span>{{ $order->created_at }}</span>
                    </div>
                    @if ($order->status == 'N')
                        <form style="padding: 10px 0" action="{{ route('user.orders.update', ['order' => $order->id]) }}" method="post">
                            @csrf
                            @method('PUT')
                            <input type="submit" value="Cancel this order">
                        </form>
                    @endif
                </div>
            </div>
            <div>
                <h4>Informações da entrega</h4>
                <hr>
                <div>
                    <Address>
                        <span>{{ $order->address_line }}</span><br>
                        <span>{{ $order->postal_code.", ".$order->city." ".$order->country }}</span>
                    </Address>
                </div>
            </div>
            <div>
                <h4>Detalhes de pagamento</h4>
                <hr>
                <div>
                    @foreach ($order->transactions as $transaction)
                        <div class="flex_align">
                            <span>Método de pagamento</span>
                            <span>{{ $mode[$transaction->mode] }}</span>
                        </div>
                        <div class="flex_align">
                            <span>Status de pagamento</span>
                            <span style="color: {{$status[$transaction->status][1]}}">{{ $status[$transaction->status][0] }}</span>
                        </div>
                        @if ($loop->remaining > 1)
                            <hr>
                        @endif
                    @endforeach
                </div>
            </div>
            <div>
                <h4>Detalhes do pedido</h4>
                <hr>
                <div>
                    <div class="flex_align">
                        <span>SubTotal</span>
                        <span>${{ $order->grand_total }}</span>
                    </div>
                    <div class="flex_align">
                        <span>Destinatário</span>
                        <span>{{ $order->first_name }}</span>
                    </div>
                </div>
            </div>

        </div>
        <div style="overflow-x: auto">
            <table style="width: 100%;min-width:450px" cellspacing="0">
                <thead>
                    <tr>
                        <td colspan="2">Produto</td>
                        <td>Preço</td>
                        <td>Quantidade</td>
                        <td>Preço total</td>
                    </tr>
                </thead>
                @foreach ($order->products as $product)
                    <tr>
                        <td>
                            <div class="img_container">
                                <img src="{{ asset('storage/'.$product->image) }}" alt="{{ $product->title }}">
                            </div>
                        </td>
                        <td>{{ $product->title }}</td>
                        <td>${{ $product->price }}</td>
                        <td>{{ $product->pivot->quantity }}</td>
                        <td>${{ $product->pivot->quantity * $product->price }}</td>
                    </tr>
                @endforeach
            </table>
        </div>
    {{--------------------- 
        $slot 
    --------------------}}
</x-user-layout>