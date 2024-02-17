<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/daisyui@4.7.2/dist/full.min.css" rel="stylesheet" type="text/css" />
    <title>BestPrice</title>
</head>

<body>
    <x-NavBar />
    <div class=" flex gap-5 items-center">
        <form action="{{ route('searchProduct') }}" method="get" class="w-1/3 m-5">
            @csrf
            <label class="input input-bordered flex items-center gap-2 ">
                <input type="text" class="grow " name="search" placeholder="Search" />
                <x-primary-button>
                    {{ __('Search') }}
                </x-primary-button>
            </label>
        </form>

        <form action="{{ route('sortProduct') }}"  method="get" class="w-1/3 m-5">
            @csrf
                <select name="sorting" onchange="this.form.submit()" tabindex="0" class="dropdown-content z-[1] menu p-2 shadow bg-base-100 rounded w-52">
                    <option value="" selected>Sort</option>
                    <option value="A-z">A -z</option>
                    <option value="Z-a">Z -a</option>
                    <option value="oldest">Oldest</option>
                    <option value="cheapest">cheapest</option>
                </select>
        </form>
    </div>

    <div class="grid grid-cols-12  gap-4">
        @foreach ($productes as $product)
            <div class="card col-span-4 card-compact w-80 m-10 bg-base-100 shadow-xl">
                <figure><img class=" w-full  h-[50vh]  object-fill  rounded-2xl"
                        src="{{ asset('storage/image/' . $product->image) }}" alt="Medicine" /></figure>
                <div class="card-body">
                    <h2 class="card-title">{{ $product->name }}</h2>
                    <p>brand: {{ $product->brand }}</p>
                    <p>Price: ${{ $product->price }}</p>
                    <p>Company: {{ $product->user->name }}</p>
                    <div class="card-actions justify-end">
                        <a href="{{ route('productesDetails', ['id' => $product->id]) }}"
                            class="btn btn-primary text-white">Buy Now</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</body>

</html>
