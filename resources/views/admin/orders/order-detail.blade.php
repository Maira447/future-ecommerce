<x-admin-layout>
    <x-slot name="style">
        <link rel="stylesheet" href="{{ asset('css/admin/order.css') }}">
    </x-slot>
    <x-slot name="js">
    </x-slot>

    <style>
        a[href = "{{ route('admin.orders.index') }}"]{
            color: var(--text-blue);
        }
    </style>
    <div class="_container">
        <a class="back_link" href="{{ route('admin.orders.index') }}">
            <span class="material-icons">arrow_back</span>
            Orders
        </a>
        <h1>Pedido-{{ $order->id }}</h1>
        <p class="flex_align">
            <span class="text_grey">Pedido em</span>
            <span class="text_grey text_icon material-icons">calendar_today</span>
            <span>{{ $order->created_at->format('d/m/y h:i') }}</span>
        </p>
        <div class="card" style="margin-bottom: 2rem">
            <h3>Informações básicas</h3>
            <hr>
            <div class="order_details">
                <span>Nome do cliente</span>
                <span style="color: #688eff">{{ $order->first_name." ".$order->last_name }}</span>
            </div>
            <div class="order_details">
                <span>Endereço</span>
                <span>
                    <Address>
                        <span>{{ $order->address_line }}</span><br>
                        <span>{{ $order->postal_code.", ".$order->city." ".$order->country }}</span>
                    </Address> 
                </span>
            </div>
            <div class="order_details">
                <span>Número de telefone</span>
                <span>{{ $order->mobile }}</span>
            </div>
            <div class="order_details">
                <span>Data</span>
                <span>{{ $order->created_at->format('d/m/y h:i') }}</span>
            </div>
            <div class="order_details">
                <span>Total</span>
                <span>{{ $order->grand_total }}</span>
            </div>
            <div class="order_details">
                <span>Status do pedido</span>
                <form action="{{ route('admin.orders.update', ['order' => $order->id]) }}" method="post">
                    @csrf
                    @method('PUT')
                    <select name="status">
                        <option value="{{ $order->status }}">{{ $status[$order->status][0] }}</option>
                        @if (! in_array($order->status, ['C', 'D']))
                            <option value="D">DELIVERED</option>
                        @endif
                    </select><br>
                    <input type="submit" value="Salvar">
                    <input type="reset" value="Cancelar">
                </form>
            </div>
        </div>

        <div class="card" style="margin-bottom: 2rem">
            <h3>Pagamentos</h3>
            <hr>
            @foreach ($order->transactions as $transaction)
                <div class="order_details">
                    <span>ID da transação</span>
                    <span>{{ $transaction->id }}</span>
                </div>
                <div class="order_details">
                    <span>Método de pagamento</span>
                    <span>{{ $mode[$transaction->mode] }}</span>
                </div>
                <div class="order_details">
                    <span>Status de pagamento</span>
                    <form action="{{ route('admin.transactions.update', ['transaction' => $transaction->id]) }}" method="post">
                        @csrf
                        @method('PUT')
                        <select name="status">
                            <option value="{{ $transaction->status }}">{{ $status[$transaction->status][0] }}</option>
                            <option value="P">PAID</option>
                        </select><br>
                        <input type="submit" value="Salvar">
                        <input type="reset" value="Cancelar">
                    </form>
                </div>
                @if ($loop->remaining > 1)
                    <hr>
                @endif
            @endforeach
        </div>

        <div class="card">
            <h3>Itens pedidos</h3>
            <hr>
            
            <div style="overflow-x: auto">
                <table style="width: 100%;min-width:450px" cellspacing="0">
                    <thead>
                        <tr>
                            <th colspan="2">Produto</th>
                            <th>Preço</th>
                            <th>Quantidade</th>
                            <th>Preço total</th>
                        </tr>
                    </thead>
                    @foreach ($order->products as $product)
                        <tr>
                            <td style="width: 100px">
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
           
        </div>
    </div>
</x-admin-layout>
