<x-auth-layout>
    {{--------------------- 
        $slot 
    --------------------}}
    @if(session('status'))
    <h2 style="color:rgb(32, 221, 32)">{{session("status")}}</h2>
    @endif
     
    <p class="m-0">
        Antes de começar, verifique o seu e-mail clicando no link que enviamos para você. Se você não recebeu o email, reenviaremos para você novamente.
    </p>
    <p>Confira seu inbox <strong>{{ auth()->user()->email }}</strong></p>
        
    <div class="flex_align_center">
        <form method="POST" action="{{ route('verification.send') }}">
            @csrf
            <input type="submit" value="ENVIAR NOVAMENTE">
        </form>
        
        <form method="POST" id="logout" action="{{ route('logout') }}">
            @csrf
            <a href="#" onclick="logout.submit()">Log Out</a>
        </form>
    </div>
    {{--------------------- 
        $slot 
    --------------------}}
</x-auth-layout>