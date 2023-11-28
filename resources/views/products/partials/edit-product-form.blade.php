<section>
    <header>
        <h2 class="text-lg font-medium text-gray-900">
            {{ __('Editar Produto') }}
        </h2>
    </header>

    <form method="post" action="{{ route('products.update', $product->id) }}" class="mt-6 space-y-6">
        @csrf
        @method("PUT")

        <div>
            <x-input-label for="name" :value="__('Nome')" />
            <x-text-input id="name" name="name" type="text" class="mt-1 block w-full" value="{{ $product->name }}" />
        </div>

        <div>
            <x-input-label for="price" :value="__('Preço')" />
            <x-text-input id="price" name="price" type="number" class="mt-1 block w-full" value="{{ $product->price }}" />
        </div>

        <div>
            <x-input-label for="amount" :value="__('Quantidade')" />
            <x-text-input id="amount" name="amount" type="number" class="mt-1 block w-full" value="{{ $product->amount }}" />
        </div>

        <div class="flex items-center gap-4">
            <x-primary-button>{{ __('Salvar') }}</x-primary-button>
        </div>
    </form>
</section>
