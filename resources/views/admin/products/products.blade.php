<x-admin-layout>
    <x-slot name="style">
    </x-slot>
    <x-slot name="js">
        <script src="{{ asset('js/admin/product.js') }}" defer></script>
    </x-slot>

    <div class="_container">
        @if (session('status'))
            <p style="color: #3ee33e">
                {{ session('status') }}
            </p>
        @endif
        @if (!$products->isEmpty())
        <h1>Produtos</h1><br>
        <div style="overflow-x: auto">
            <table style="width: 100%;min-width:650px" class="card">
                <thead>
                    <tr>
                        <td></td>
                        <td>Products({{count($products)}})</td>
                        <td>Price</td>
                        <td>Quantity</td>
                        <td>Discount</td>
                        <td colspan="2">Ações</td>
                    </tr>
                </thead>
                @foreach ($products as $product)
                    <tr>
                        <td>
                            <div class="img_container">
                                <img src="{{ asset('storage/'.$product->image) }}" alt="{{ $product->title }}">
                            </div>
                        </td>
                        <td>{{ ucfirst($product->title) }}</td>
                        <td>{{ '$'.$product->price }}</td>
                        <td>{{ $product->stock_quantity.' UNIDADES' }}</td>
                        <td>{{ $product->discount.'%' }}</td>
                        <td>
                            <a href="{{ route('admin.products.edit', ['product' => $product->id]) }}">
                                <span class="material-icons">edit</span>
                            </a>
                        </td>
                        <td>
                            <span class="material-icons delete" data-remove="{{$product->id}}">delete</span>
                        </td>
                        <form data-form="{{$product->id}}" style="display: none" action="{{ route('admin.products.destroy', ['product' => $product->id]) }}" method="post">
                            @csrf
                            @method('DELETE')
                        </form>
                    </tr>
                @endforeach
            </table>
        </div>
        @else
            <p>Sem produtos disponíveis em estoque <a href="{{ route('admin.products.create') }}">Criar produtos</a></p>
        @endif
    </div>
    <x-modal title="Delete product" ok="DELETE">
        <x-slot name="description">
            Você tem certeza que quer deletar esse produto?
        </x-slot>
    </x-modal>
</x-admin-layout>
