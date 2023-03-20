<x-auth-layout>
    {{--------------------- 
        $slot 
    --------------------}}
    @if ($errors->any())
        @foreach ($errors->all() as $error)
            <p style="color:red">{{ $error }}</p>
        @endforeach
    @endif
        <form action="{{ route('register') }}" method="POST" autocomplete="off">
            @csrf
            <label for="first_name">Primeiro nome</label><br>
            <input class="fill_data" type="text" name="first_name" id="first_name" required><br><br>

            <label for="last_name">Último nome</label><br>
            <input class="fill_data" type="text" name="last_name" id="last_name" required><br><br>

            <label for="email">Email</label><br>
            <input class="fill_data" type="email" name="email" id="email" required><br><br>

            <label for="password">Senha</label><br>
            <input class="fill_data" type="password" name="password" id="password" required><br><br>

            <label for="password_confirmation">Confirmar senha</label><br>
            <input class="fill_data" type="password" name="password_confirmation" id="password_confirmation" required><br><br>
            
            <div>
                <div class="submit">
                    <a href="{{ route('login') }}">Já registrado?</a>
                    <input type="submit" value="REGISTRAR">
                </div>
            </div>
        </form>
    {{--------------------- 
        $slot 
    --------------------}}
</x-auth-layout>