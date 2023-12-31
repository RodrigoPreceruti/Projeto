<section>
    <header>
        <h2 class="text-lg font-medium text-gray-900">
            {{ __('Criar Produto') }}
        </h2>
    </header>

    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form method="post" action="{{ route('products.store') }}" class="mt-6 space-y-6">
        @csrf

        <div>
            <x-input-label for="name" :value="__('Nome')"/>
            <x-text-input id="name" name="name" type="text" class="mt-1 block w-full" autocomplete="name"/>
        </div>

        <div>
            <x-input-label for="price" :value="__('Preço')"/>
            <x-text-input id="price" name="price" type="number" class="mt-1 block w-full" autocomplete="price"/>
        </div>

        <div>
            <x-input-label for="amount" :value="__('Quantidade')"/>
            <x-text-input id="amount" name="amount" type="number" class="mt-1 block w-full" autocomplete="amount"/>
        </div>

        <div class="flex items-center gap-4">
            <x-primary-button>{{ __('Salvar') }}</x-primary-button>
        </div>
    </form>
</section>
