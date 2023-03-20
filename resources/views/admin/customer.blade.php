<x-admin-layout>
    <x-slot name="style">
        <link rel="stylesheet" href="{{ asset('css/admin/order.css') }}">
    </x-slot>
    <x-slot name="js">
    </x-slot>

    <div class="_container">
        <h1>Usuários</h1><br>
        <div style="overflow-x: auto">
            <table style="width: 100%;min-width:650px" class="card">
                <thead>
                    <tr>
                        <th>Usuário({{count($users)}})</th>
                        <th>Email</th>
                        <th>Email verificado</th>
                        <th>ADM</th>
                    </tr>
                </thead>
                @foreach ($users as $user)
                    <tr>
                        <td>
                            <div class="flex_align">
                                <div class="sm_card" style="border-radius:50%; padding:1rem">
                                    <strong>{{ $user->short_name }}</strong>
                                </div>
                                <div>
                                    <strong>ID-{{ $user->id }}</strong><br>
                                    <span>{{ $user->full_name }}</span>
                                </div>
                            </div>
                        </td>
                        <td>{{ $user->email }}</td>
                        <td><span style="color: {{ $user->email_verified_at ? 'limegreen' : 'red' }}">{{ $user->email_verified_at ? "SIM" : "NÃO" }}</span></td>
                        <td><span style="color: {{ $user->admin ? 'limegreen' : 'red' }}">{{ $user->admin ? "SIM" : "NÃO" }}</span></td>
                    </tr>
                @endforeach
            </table>
        </div>
    </div>
</x-admin-layout>
