<x-app-layout>

    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800 dark:text-gray-200">
            {{ __('Produtos') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="px-4 sm:px-6 lg:px-8">
                <div class="mb-4 sm:flex-auto">
                    <p class="mt-2 text-sm text-gray-700">Lista de produtos.</p>
                    <a class="text-sm text-blue-600 underline rounded-md dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800"
                       href="{{ route('products.create') }}">
                        {{ __('Cadastrar Produto') }}
                    </a>
                </div>
            </div>
            <div class="max-w-2xl overflow-hidden shadow ring-1 ring-black ring-opacity-5 md:rounded-lg">
                <table class="table w-full">
                    <thead>
                    <tr>
                        <th scope="col" class="px-4 py-2">Nome</th>
                        <th scope="col" class="px-4 py-2">Preço</th>
                        <th scope="col" class="px-4 py-2">Quantidade</th>
                        <th scope="col" class="px-4 py-2">Ações</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($products as $product)
                        <tr>
                            <td class="px-4 py-2">{{ $product->name }}</td>
                            <td class="px-4 py-2">{{ $product->price }}</td>
                            <td class="px-4 py-2">{{ $product->amount }}</td>
                            <td class="px-4 py-2">
                                <div class="flex">
                                    <a href="{{ route('products.edit', $product->id) }}"
                                       class="btn btn-primary btn-sm me-2">Editar</a>
                                    <form action="{{ route('products.destroy', $product->id) }}" method="post"
                                          class="inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-primary btn-sm me-2">Excluir</button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
            {{ $products->links() }}
        </div>

    </div>
    </div>
</x-app-layout>
