<x-user-layout>
    {{--------------------- 
        $slot 
    --------------------}}
    <h3>Seu endereço</h3>
        @if ($address = auth()->user()->addresses()->first())
            <div class="details_card">
                <strong><b>Endereço</b>: </strong><span>{{$address->address_line}}</span><br>
                <strong><b>Cidade</b>: </strong><span>{{$address->city}}</span><br>
                <strong><b>CEP</b>: </strong><span>{{$address->postal_code}}</span><br>
                <strong><b>País</b>: </strong><span>{{$address->country}}</span><br>
            </div><br><br>
        @else
            <form action="{{ route('fake_addr') }}" method="post">
                @csrf
                <input type="submit" value="Gerar endereço falso">
            </form>
        @endif
    <hr>    
    <h3>Informações para pagamentos</h3>
        @if ($payment = auth()->user()->payments()->first())
        <div class="details_card">
            <strong>Bandeira do cartão: </strong><span>{{$payment->card_type}}</span><br>
            <strong>Número do cartão: </strong><span>************{{ substr($payment->card_number, -4) }}</span><br>
        </div>
        @else
            <form action="{{ route('fake_pay') }}" method="post">
                @csrf
                <input type="submit" value="Gerar detalhes de pagamento falsos">
            </form>
        @endif
    {{--------------------- 
        $slot 
    --------------------}}
</x-user-layout>