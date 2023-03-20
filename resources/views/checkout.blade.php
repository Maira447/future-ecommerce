<x-app-layout>
    <x-slot name="style">
        <link rel="stylesheet" href="{{ asset('css/checkout.css') }}">
    </x-slot>

    <x-slot name="js">
        <script src="{{ asset('js/checkout.js') }}" defer></script>
    </x-slot>
    {{--------------------- 
            $slot 
        --------------------}}
            <main  class="_container">
                <div class="checkout_order">
                    <div class="checkout">
                        <h1>Checkout</h1>
                        @if ($errors->any())
                            @foreach ($errors->all() as $error)
                            <p style="color: red">{{ $error }}</p>
                            @endforeach
                        @else
                            <strong style="cursor: pointer;" onclick="fillForm(this)">Preencher com minhas informações</strong>
                        @endif
                        <form action="{{ route('checkout') }}" method="post">
                            @csrf
                            <h2>Informações para cobrança</h2>
                            <div class="form_group">
                                <label for="first_name">Primeiro Nome</label>
                                <input id="first_name" type="text" name="first_name" value="{{ old('first_name') }}" required>
                            </div>
                            <div class="form_group">
                                <label for="last_name">Último Nome</label>
                                <input id="last_name" type="text" name="last_name" value="{{ old('last_name') }}" required>
                            </div>
                            <div class="form_group">
                                <label for="email">Email</label>
                                <input id="email" type="email" name="email" value="{{ old('email') }}" required>
                            </div>
                            <div class="form_group">
                                <label for="address">Endereço</label>
                                <input id="address" type="text" name="address_line" value="{{ old('address_line') }}" required>
                            </div>
                            <div class="two_form">
                                <div class="form_group">
                                    <label for="city">Cidade</label>
                                    <input id="city" type="text" name="city" value="{{ old('city') }}" required>
                                </div>
                                <div class="form_group">
                                    <label for="postal_code">CEP</label>
                                    <input id="postal_code" type="text" name="postal_code" value="{{ old('postal_code') }}" required>
                                </div>
                            </div>
                            <div class="two_form">
                                <div class="form_group">
                                    <label for="country">Cidade</label>
                                    <input id="country" type="text" name="country" value="{{ old('country') }}" required>
                                </div>
                                <div class="form_group">
                                    <label for="mobile">Número de telefone</label>
                                    <input id="mobile" type="text" name="mobile" value="{{ old('mobile') }}" required>
                                </div>
                            </div>
                            <h2>Informações de pagamento</h2>
                            <input type="checkbox" name="cod" value="1" id="cod">
                            <label for="cod">Pagar na entrega</label>

                            <button type="submit">Finalizar compra</button>
                        </form>

                    </div>
                    <div class="order">
                        <div class="card">
                            <h2>Seu pedido</h2>
                            <div class="flex_align">
                                <strong>Sub Total</strong>
                                <span>${{ $subTotal }}</span>
                            </div>
                            <div class="flex_align">
                                <strong>Desconto</strong>
                                <span>$0</span>
                            </div>
                            <div class="flex_align">
                                <strong>Taxas</strong>
                                <span>$0</span>
                            </div>
                            <div class="flex_align">
                                <strong>Entrega</strong>
                                <span>$0</span>
                            </div>
                            <div class="flex_align">
                                <h3>Custo total</h3>
                                <h3>${{ $subTotal }}</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
    {{--------------------- 
        $slot 
    --------------------}}
</x-app-layout>