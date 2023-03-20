<x-admin-layout>
    <x-slot name="style">
        {{-- <link rel="stylesheet" href="{{ asset('css/admin/') }}"> --}}
    </x-slot>

        <div class="_container">
            @if ($errors->any())
                @foreach ($errors->all() as $error)
                    <p style="color: red">{{ $error }}</p>
                @endforeach
            @endif
            <h2>Criar uma nova categoria</h2>
            <form class="card" action="{{ route('admin.categories.store') }}" method="post" enctype="multipart/form-data">
                @csrf
                Nome: <input type="text" name="title" value="{{ old('title') }}" required><br><br>
                Imagem: <br><br>
                <input type="file" name="image" required><br><br>
                <input type="submit" value="create category">
            </form>
        </div>
</x-admin-layout>