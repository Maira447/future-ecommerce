@component('mail::message')
# Seu pedido está a caminho.
# ![delivery van]({{ asset('img/van.jpg') }})

## Oi {{ ucfirst($order->first_name) }},
Acreditamos que você gostará de saber que seu pedido está a caminho.
[clique aqui]({{ route('user.orders.index') }}) para rastrear seu(s) pedido(s).

@component('mail::panel')
    ## Seu pacote será enviado para
    {{ $order->address_line }}
    {{ $order->postal_code.", ".$order->city }}
    {{ $order->country }}
@endcomponent

Seus itens serão entregues pela Transportadora do Futuro. Sua assinatura eletrônica será necessária para retirar o pedido.
<br><br>

## **Resumo do pedido**
___
```
Subtotal:       ${{ $order->grand_total }}
Frete: ${{ $extra =  $order->grand_total < 10 ? 5 : 0 }}
```
**Total da entrega:** &nbsp; &nbsp; &nbsp; &nbsp; **${{ $order->grand_total + $extra }}**
___
Rastreie seu pedido em [Shopping do Futuro]({{ route('home') }}).
Ou clique no botão abaixo.

@component('mail::button', ['url' => 'http://127.0.0.1:8000/user/orders' ])
Rastreie seu pedido
@endcomponent


Obrigado,<br>
**{{ config('app.name') }}.in**
@endcomponent
