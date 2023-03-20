<x-admin-layout>
    <x-slot name="style">
    </x-slot>
    <x-slot name="js">
        <script src="{{ asset('js/admin/category.js') }}" defer></script>
    </x-slot>

    <div class="_container">
        @if (session('status'))
            <p style="color: #3ee33e">
                {{ session('status') }}
            </p>
        @endif
        @if (!$categories->isEmpty())
        <h1>Categorias</h1><br>

        <div style="overflow-x: auto">
            <table style="width: 100%;min-width:450px" class="card">
                <thead>
                    <tr>
                        <td colspan="2">Categoria ({{count($categories)}})</td>
                        <td colspan="2">Ações</td>
                    </tr>
                </thead>
                @foreach ($categories as $category)
                    <tr>
                        <td>
                            <div class="img_container img_cate">
                                <img src="{{ asset('storage/'.$category->image) }}" alt="{{ $category->title }}">
                            </div>
                        </td>
                        <td>{{ $category->title }}</td>
                        <td>
                            <a href="{{ route('admin.categories.edit', ['category' => $category->id]) }}">
                                <span class="material-icons">edit</span>
                            </a>
                        </td>
                        <td>
                            <span class="material-icons delete" data-remove="{{$category->id}}">delete</span>
                        </td>
                        <form data-form="{{$category->id}}" style="display: none" action="{{ route('admin.categories.destroy', ['category' => $category->id]) }}" method="post">
                            @csrf
                            @method('DELETE')
                        </form>
                    </tr>
                @endforeach
            </table>
        </div>
        @else
            <p>Sem categorias criadas ainda <a href="{{ route('admin.categories.create') }}">CRIAR</a></p>
        @endif
    </div>
    <x-modal title="Deletar categoria" ok="DELETAR">
        <x-slot name="description">
            Você tem certeza que deseja deletar essa categoria?
        </x-slot>
    </x-modal>
</x-admin-layout>
