<div>
    <div class="container mx-auto p-4">
        <h1 class="text-2xl font-bold mb-4">
            Product Search
        </h1>

        {{--        Standard input field--}}
        <div class="flex gap-2 mb-4">
            <input
                wire:model.debounce.300ms="search"
                placeholder="Search for products..."
                class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 mb-4"/>

            <button
                wire:click="$refresh"
                class="px-6 py-3 bg-gradient-to-r from-blue-500 to-blue-600 text-white font-semibold rounded-lg hover:from-blue-600 hover:to-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 transform hover:scale-105 transition duration-200 shadow-lg"
            >
                🔍 Search
            </button>
        </div>

        {{--        Results List--}}
        <div class="space-y-4">
            @if($products->isEmpty())
                <div class="p-4 bg-yellow-400 text-yellow-800 rounded">
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
