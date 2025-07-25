<x-app-layout>
    <x-slot name="style">
        <link rel="stylesheet" href="{{ asset('css/checkout.css') }}">
    </x-slot>

    <x-slot name="js">
        <script src="{{ asset('js/checkout.js') }}" defer></script>
    </x-slot>

    <main class="_container">
        <div class="checkout_order">
            <div class="checkout">
                <h1>Checkout</h1>
                @if ($errors->any())
                    @foreach ($errors->all() as $error)
                        <p style="color: red">{{ $error }}</p>
                    @endforeach
                @else
                    <strong style="cursor: pointer;" onclick="fillForm(this)">Fill with my information</strong>
                @endif

                <form action="{{ route('checkout') }}" method="post">
                    @csrf
                    <h2>Billing Information</h2>
                    <div class="form_group">
                        <label for="first_name">First Name</label>
                        <input id="first_name" type="text" name="first_name" value="{{ old('first_name') }}" required>
                    </div>
                    <div class="form_group">
                        <label for="last_name">Last Name</label>
                        <input id="last_name" type="text" name="last_name" value="{{ old('last_name') }}" required>
                    </div>
                    <div class="form_group">
                        <label for="email">Email</label>
                        <input id="email" type="email" name="email" value="{{ old('email') }}" required>
                    </div>
                    <div class="form_group">
                        <label for="address">Address</label>
                        <input id="address" type="text" name="address_line" value="{{ old('address_line') }}" required>
                    </div>
                    <div class="two_form">
                        <div class="form_group">
                            <label for="city">City</label>
                            <input id="city" type="text" name="city" value="{{ old('city') }}" required>
                        </div>
                        <div class="form_group">
                            <label for="postal_code">Postal Code</label>
                            <input id="postal_code" type="text" name="postal_code" value="{{ old('postal_code') }}" required>
                        </div>
                    </div>
                    <div class="two_form">
                        <div class="form_group">
                            <label for="country">Country</label>
                            <input id="country" type="text" name="country" value="{{ old('country') }}" required>
                        </div>
                        <div class="form_group">
                            <label for="mobile">Phone Number</label>
                            <input id="mobile" type="text" name="mobile" value="{{ old('mobile') }}" required>
                        </div>
                    </div>
                    <h2>Payment Information</h2>
                    <input type="checkbox" name="cod" value="1" id="cod">
                    <label for="cod">Pay on Delivery</label>

                    <button type="submit">Place Order</button>
                </form>
            </div>

            <div class="order">
                <div class="card">
                    <h2>Your Order</h2>
                    <div class="flex_align">
                        <strong>Sub Total</strong>
                        <span>${{ $subTotal }}</span>
                    </div>
                    <div class="flex_align">
                        <strong>Discount</strong>
                        <span>$0</span>
                    </div>
                    <div class="flex_align">
                        <strong>Fees</strong>
                        <span>$0</span>
                    </div>
                    <div class="flex_align">
                        <strong>Delivery</strong>
                        <span>$0</span>
                    </div>
                    <div class="flex_align">
                        <h3>Total Cost</h3>
                        <h3>${{ $subTotal }}</h3>
                    </div>
                </div>
            </div>
        </div>
    </main>
</x-app-layout>
