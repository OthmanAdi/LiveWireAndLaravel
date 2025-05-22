<div>
    <div class="container mx-auto p-4">
        <h1 class="text-2xl font-bold mb-4">
            Product Search
        </h1>

        {{--        WireUI Search field--}}
        <x-wireui.input
            wire:model.debounce.300ms="search"
            placeholder="Search for products..."
            icon="search"
            class="mb-4"/>

        {{--        Results List--}}
        <div class="space-y-4">
            @if($products->isEmpty())
                <div class="p-4 bg-yellow-400 text-shadow-yellow-800 rounded">
                    No products were found matching your search input
                </div>
            @endif

            @foreach($products as $product)
                <div class="border p-4 rounded shadow-sm hover:shadow-md transition">
                    <div class="flex justify-between">
                        <h2 class="text-lg font-semibold">{{$product->name}}</h2>
                        <span class="text-green-600 font-bold">{{number_format($product->price, 2)}} €</span>
                    </div>

                    <p class="text-gray-500">{{$product->description}}</p>

                    <div class="mt-2">
                        <span class="inline-block bg-blue-100 text-blue-800 px-2 py-1 rounded text-sm">
                            {{$product->category}}
                        </span>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
