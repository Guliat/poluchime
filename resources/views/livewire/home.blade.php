<div class="max-w-7xl mx-auto px-4 py-2 sm:px-6 lg:px-8">
    
    
    @foreach($products as $product)

        <div class="flex flex-col justify-center items-center max-w-sm mx-auto my-8">
            @php 
                $firstPhoto = \App\Models\Product::photo($product->id);
            @endphp
            <div style="background-image: url('/images/{{ $firstPhoto->photo }}');" class="bg-gray-300 h-64 w-full rounded-lg shadow-xl bg-cover bg-center">
                {{-- <img src="/images/{{ $firstPhoto->photo }}" /> --}}
            </div>
            <div class="w-56 md:w-64 bg-white -mt-10 shadow-lg rounded-lg overflow-hidden">
                <div class="py-2 text-center uppercase text-gray-800 text-xs">{{ $product->name }}</div>
                <div class="flex items-center justify-between py-2 px-3 bg-gray-500">
                    <h1 class="text-white font-bold">{{ $product->sell_price }}лв.</h1>
                    <button class="bg-green-300 text-xs text-white px-2 py-1 font-semibold rounded uppercase">Поръчай</button>
                </div>
            </div>
        </div>

    @endforeach


</div>