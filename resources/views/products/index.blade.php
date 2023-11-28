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
                <table class="divide-y divide-gray-300">
                    <thead class="bg-gray-50">
                    <tr>
                        <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">Nome</th>
                        <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">Preço</th>
                        <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">Quantidade
                        </th>
                        <th scope="col" class="relative py-3.5 pl-3 pr-4 sm:pr-6">
                            <span class="sr-only">Editar</span>
                        </th>
                        <th scope="col" class="relative py-3.5 pl-3 pr-4 sm:pr-6">
                            <span class="sr-only">Deletar</span>
                        </th>
                    </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200">
                    @foreach ($products as $product)
                        <tr>
                            <td class="py-4 pl-4 pr-3 text-sm font-medium text-gray-900 whitespace-nowrap sm:pl-6">{{ $product->name }}</td>
                            <td class="px-3 py-4 text-sm text-gray-500 whitespace-nowrap">{{ 'R$ ' . number_format($product->price, 2, ',', '.') }}</td>
                            <td class="px-3 py-4 text-sm text-gray-500 whitespace-nowrap">{{ $product->amount }}</td>
                            <td class="relative py-4 pl-3 pr-4 text-sm font-medium text-right whitespace-nowrap sm:pr-6">
                                <a href="{{ route('products.edit', $product->id) }}"
                                   class="text-indigo-600 hover:text-indigo-900">Editar</a>
                            </td>
                            <td class="relative py-4 pl-3 pr-4 text-sm font-medium text-right whitespace-nowrap sm:pr-6">
                                <form action="{{ route('products.destroy', $product->id) }}" method="post">
                                    @csrf
                                    @method("DELETE")
                                    <button type="submit">Deletar</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                    <!-- More people... -->
                    </tbody>
                </table>
            </div>
            {{ $products->links() }}
        </div>

    </div>
    </div>
</x-app-layout>
