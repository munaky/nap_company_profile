@php
    $activeCategory = 'px-4 py-2 rounded-xl text-sm font-semibold bg-red-800 text-center text-white hover:bg-neutral-100 hover:text-red-800 hover:shadow-inner transition-all duration-500';
    $inactiveCategory = 'px-4 py-2 rounded-xl text-sm font-semibold bg-neutral-200 text-center text-red-800 hover:bg-red-800 hover:text-white shadow-inner transition-all duration-500';
@endphp

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produk</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600&display=swap"
        rel="stylesheet">
    <style>
        .category::-webkit-scrollbar {
            display: none;
            -ms-overflow-style: none;
            /* IE and Edge */
            scrollbar-width: none;
            /* Firefox */
        }
    </style>
</head>

<body style="font-family: 'Montserrat', sans-serif;">
    <!-- Neutral 500 = secondary-text
        neutral 900 = main text
    Gray 600 = accent color -->

    <!--Modal-->
    <div>
        <div class="fixed z-10 overflow-y-auto top-0 w-full left-0 h-full flex items-center justify-center hidden"
            id="details">
            <div class="flex items-center justify-center h-screen w-screen pt-4 text-center">
                <div class="fixed inset-0 transition-opacity">
                    <div class="absolute inset-0 bg-gray-900 opacity-75"> </div>
                </div>
                <div style="border-radius: 50px 50px 0px 0px;"
                    class="flex flex-col items-center h-max justify-center text-left overflow-hidden shadow-xl transform transition-all w-full lg:w-1/2 bg-white"
                    role="dialog" aria-modal="true" aria-labelledby="modal-headline">
                    <div class="relative overflow-hidden">
                        <img src="./assets/product-img.png" alt="" class="w-full">
                        <div
                            class="w-full h-14 bg-gradient-to-t from-white to-transparent absolute bottom-0 right-0 left-0 m-auto">
                        </div>
                    </div>
                    <div class="w-full h-max px-7 py-5">
                        <h1 class="font-semibold text-2xl">IKEA - MARTIN</h1>
                        <h5 class="text-neutral-500">
                            Rp. 350.000
                        </h5>
                        <p class="text-neutral-500">
                            Lorem ipsum dolor sit amet consectetur. Ut vitae lectus ut etiam dui aliquam. At erat odio
                            elit diam mauris at. Lectus urna tristique purus quis malesuada elit cursus interdum dui.
                        </p>
                        <div class="flex mt-6">
                            <button type="button"
                                class="py-2 px-4 bg-gray-500 w-full text-white rounded-xl transition-all duration-600 hover:bg-gray-700 mr-2"
                                onclick="toggleModal('details')">Pesan Sekarang</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="fixed z-10 overflow-y-auto top-0 w-full left-0 h-full flex items-center justify-center hidden"
            id="texthero">
            <div class="flex items-center justify-center min-height-100vh pt-4 px-4 pb-20 text-center sm:block sm:p-0">
                <div class="fixed inset-0 transition-opacity">
                    <div class="absolute inset-0 bg-gray-900 opacity-75"> </div>
                </div>
            </div>
        </div>
    </div>

    <div class="py-8 w-screen h-max">
        <!-- Navbar -->
        <div class="w-full px-5 xl:px-10 justify-between flex">
            <img src="{{ asset('assets/logo.png') }}" class="h-7" alt="nawasena logo">

            <!-- Humberger menu -->
            <svg width="30" height="31" viewBox="0 0 30 31" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M5 23H25C25.6875 23 26.25 22.4375 26.25 21.75C26.25 21.0625 25.6875 20.5 25 20.5H5C4.3125 20.5 3.75 21.0625 3.75 21.75C3.75 22.4375 4.3125 23 5 23ZM5 16.75H25C25.6875 16.75 26.25 16.1875 26.25 15.5C26.25 14.8125 25.6875 14.25 25 14.25H5C4.3125 14.25 3.75 14.8125 3.75 15.5C3.75 16.1875 4.3125 16.75 5 16.75ZM3.75 9.25C3.75 9.9375 4.3125 10.5 5 10.5H25C25.6875 10.5 26.25 9.9375 26.25 9.25C26.25 8.5625 25.6875 8 25 8H5C4.3125 8 3.75 8.5625 3.75 9.25Z"
                    fill="#83A9AC" />
            </svg>
        </div>

        <div class="mx-5 xl:mx-10 px-5 mt-5 py-8 bg-red-800 text-white rounded-2xl">
            <h1 class="text-xl font-semibold">Terlalu banyak pilihan?</h1>
            <h5 class="text-sm mt-1">Ayo Tentukan pilihanmu sekarang!</h5>
            <input type="text" class="rounded-xl w-full py-2 px-4 mt-5 text-sm" placeholder="Meja anak kecil">
        </div>

        <div class="w-full category flex items-start mb-8 space-x-2 overflow-x-auto mt-3 px-5 xl:px-10">
            <button
                class="{{ count($data['filter']['categories']) > 1 ? $inactiveCategory : $activeCategory }}">Semua</button>
            @foreach ($data['categories'] as $category)
                <button onclick="handleCategory('{{ $category }}')"
                    class="{{ in_array($category, $data['filter']['categories']) ? $activeCategory : $inactiveCategory }}">
                    {{ $category }}</button>
            @endforeach
        </div>

        <!--Products-->
        <div
            class="grid grid-cols-2 sm:grid-cols-4 md:grid-cols-5 lg:grid-cols-6 xl:grid-cols-7 2xl:grid-cols-7 gap-5 items-center px-5 xl:px-10   ">
            @foreach ($data['products'] as $product)
                <div class="w-[165px] h-max rounded-xl overflow-hidden bg-white pb-4 shadow-xl">
                    <img src="{{ $product->image }}" class="w-full bg-cover">
                    <div class="px-3 mt-3">
                        <h3 class="font-semibold text-neutral-800 mb-2">{{ $product->name }}</h3>
                        <p class="text-neutral-500 text-[12px]">{{ $product->size }}</p>
                        <h3 class="font-semibold text-neutral-800 mt-5">{{ $product->size }}</h3>
                    </div>
                </div>
            @endforeach
        </div>

        <script>
            var currentUrl = `{{ url()->current() }}`
            var categories = JSON.parse(`{!! json_encode($data['filter']['categories']) !!}`);
            var name = `{{ $data['filter']['name'] }}`;

            function handleCategory(value) {
                if (categories.includes(value)) {
                    categories.splice(categories.indexOf(value), 1);
                } else {
                    categories.push(value);
                }

                let urlEncodedString = encodeURIComponent(categories.join(","));
                window.location.href = currentUrl + '?categories=' + urlEncodedString + '&name=' + name;
            }

            function toggleModal(modalid) {
                document.getElementById(modalid).classList.toggle('hidden')
            }
        </script>
</body>

</html>
