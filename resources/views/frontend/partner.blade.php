<div id="partner" class="mt-16">
    <div>
        <h1 class="text-center text-green_lsa-300 text-3xl font-semibold font-Old_standar">
            Our Partners
        </h1>
    </div>
    <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-6 place-items-center my-8">
        @foreach ($partner as $item )
        <img src="{{ asset($item->gambar) }}" class="h-28 w-28">
        @endforeach
    </div>
</div>
