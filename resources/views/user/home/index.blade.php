<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nawasena Aisma Persada</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600&display=swap" rel="stylesheet">
    <style>
        .testimony::-webkit-scrollbar {
            display: none;
            -ms-overflow-style: none;  /* IE and Edge */
            scrollbar-width: none;  /* Firefox */
        }
    </style>
</head>
<body style="font-family: 'Montserrat', sans-serif;">
    <!-- Neutral 500 = secondary-text
        neutral 900 = main text
    Gray 600 = accent color -->
    <!-- Mobile view -->
    <div class="xl:hidden pt-8 w-screen h-max">
        <!-- Navbar -->
        <div class="w-full px-10 justify-between flex">
            <img src="{{ asset('assets/logo.png') }}" class="h-7"  alt="nawasena logo">

            <!-- Humberger menu -->
            <svg width="30" height="31" viewBox="0 0 30 31" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M5 23H25C25.6875 23 26.25 22.4375 26.25 21.75C26.25 21.0625 25.6875 20.5 25 20.5H5C4.3125 20.5 3.75 21.0625 3.75 21.75C3.75 22.4375 4.3125 23 5 23ZM5 16.75H25C25.6875 16.75 26.25 16.1875 26.25 15.5C26.25 14.8125 25.6875 14.25 25 14.25H5C4.3125 14.25 3.75 14.8125 3.75 15.5C3.75 16.1875 4.3125 16.75 5 16.75ZM3.75 9.25C3.75 9.9375 4.3125 10.5 5 10.5H25C25.6875 10.5 26.25 9.9375 26.25 9.25C26.25 8.5625 25.6875 8 25 8H5C4.3125 8 3.75 8.5625 3.75 9.25Z" fill="#83A9AC"/>
            </svg>
        </div>

        <!-- Hero -->
        <div class="py-14 px-10">
            <img src="{{ asset($data['home_main_image']) }}" class="w-full">
            <div class="ml-3 space-y-3 mt-5 mb-8">
                <h1 class="text-3xl font-semibold text-neutral-800">{{ $data['home_main_title']}}</h1>
                <h5 class="text-sm text-neutral-500">{{ $data['home_main_text'] }}</h5>
            </div>

            <a class="bg-red-800 px-4 py-3 text-white rounded-lg ml-3 hover:font-semibold text-sm hover:rounded-3xl hover:text-red-800 hover:shadow-inner hover:bg-neutral-100 how hover:border-red-800 transition-all duration-500" href="product.html">
                Cek Sekarang!
            </a>
            <a class="border-2 border-red-800 px-4 py-3 text-red-800 rounded-lg ml-3 text-sm font-semibold" href="product.html">
                Kontak kami
            </a>
        </div>


        <!-- Kenapa nawasena -->
        <div class="w-full px-20 mt-14 py-10 flex flex-col items-center justify-center bg-red-800">
            <h1 class="text-3xl font-semibold text-white text-center">Kenapa Nawasena?</h1>
            <div class="w-full py-3 flex items-center justify-left space-x-7 px-4 mt-14 bg-white rounded-xl">
                <svg width="55" height="55" viewBox="0 0 55 55" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <rect width="55" height="55" rx="20" fill="#4B5563"/>
                    <path d="M27.5 35.1855L33.5521 38.8459C34.6604 39.5167 36.0167 38.5251 35.725 37.2709L34.1208 30.3876L39.4729 25.7501C40.45 24.9042 39.925 23.3001 38.6417 23.198L31.5979 22.6001L28.8417 16.0959C28.3458 14.9146 26.6542 14.9146 26.1583 16.0959L23.4021 22.5855L16.3583 23.1834C15.075 23.2855 14.55 24.8896 15.5271 25.7355L20.8792 30.373L19.275 37.2563C18.9833 38.5105 20.3396 39.5021 21.4479 38.8313L27.5 35.1855Z" fill="white"/>
                </svg>
                <h3 class="text-xl font-semibold text-red-800">Kualitas terbaik</h3>
            </div>
            <div class="w-full py-3 flex items-center justify-left space-x-7 px-4 mt-5 bg-white rounded-xl">
                <svg width="55" height="55" viewBox="0 0 55 55" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <rect width="55" height="55" rx="20" fill="#4B5563"/>
                    <path d="M16.0417 36.875H20.2084V24.375H16.0417V36.875ZM38.9584 25.4167C38.9584 24.2709 38.0209 23.3334 36.875 23.3334H30.3021L31.2917 18.5729L31.3229 18.2396C31.3229 17.8125 31.1459 17.4167 30.8646 17.1354L29.7604 16.0417L22.9063 22.9063C22.5209 23.2813 22.2917 23.8021 22.2917 24.375V34.7917C22.2917 35.9375 23.2292 36.875 24.375 36.875H33.75C34.6146 36.875 35.3542 36.3542 35.6667 35.6042L38.8125 28.2604C38.9063 28.0209 38.9584 27.7709 38.9584 27.5V25.4167Z" fill="white"/>
                    </svg>
                <h3 class="text-xl font-semibold text-red-800">Pelayanan terbaik</h3>
            </div>
            <div class="w-full py-3 flex items-center justify-left space-x-7 px-4 mt-5 bg-white rounded-xl">
                <svg width="55" height="55" viewBox="0 0 55 55" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <rect width="55" height="55" rx="20" fill="#4B5563"/>
                    <path d="M37 25.5V21.75C37 20.375 35.875 19.25 34.5 19.25H19.5C18.125 19.25 17 20.375 17 21.75V25.5C15.625 25.5 14.5 26.625 14.5 28V34.25H16.1625L17 36.75H18.25L19.0875 34.25H34.925L35.75 36.75H37L37.8375 34.25H39.5V28C39.5 26.625 38.375 25.5 37 25.5ZM25.75 25.5H19.5V21.75H25.75V25.5ZM34.5 25.5H28.25V21.75H34.5V25.5Z" fill="white"/>
                    </svg>
                <h3 class="text-xl font-semibold text-red-800">Dijamin Ori</h3>
            </div>
        </div>

        <div class="w-full px-10 lg:px-20 mt-14 py-10 flex flex-col items-center justify-center">
            <h1 class="text-3xl font-semibold text-red-800 mb-14 text-center">Detail Perusahaan</h1>

            <img src="{{ asset('assets/maps.png') }}" alt="">
            <div class="bg-red-800 rounded-xl flex items-center justify-center space-x-5 px-5 py-3 mt-10">
                <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M20 3.33337C13.55 3.33337 8.33333 8.55004 8.33333 15C8.33333 17.9 9.16666 20.6167 10.6833 23.0667C12.2667 25.6334 14.35 27.8334 15.95 30.4C16.7333 31.65 17.3 32.8167 17.9 34.1667C18.3333 35.0834 18.6833 36.6667 20 36.6667C21.3167 36.6667 21.6667 35.0834 22.0833 34.1667C22.7 32.8167 23.25 31.65 24.0333 30.4C25.6333 27.85 27.7167 25.65 29.3 23.0667C30.8333 20.6167 31.6667 17.9 31.6667 15C31.6667 8.55004 26.45 3.33337 20 3.33337ZM20 19.5834C17.7 19.5834 15.8333 17.7167 15.8333 15.4167C15.8333 13.1167 17.7 11.25 20 11.25C22.3 11.25 24.1667 13.1167 24.1667 15.4167C24.1667 17.7167 22.3 19.5834 20 19.5834Z" fill="white"/>
                </svg>
                <h5 class="text-[12px] font-semibold text-white">Jl. RE. Soemantadiredja Kp. Bojong, RT.03/RW.02, Pamoyanan, Kec. Bogor Sel., Kota Bogor, Jawa Barat 16136</h5>
            </div>
            <div class="bg-red-800 rounded-xl flex flex-col items-start justify-center space-y-5 px-5 py-3 mt-10 w-full">
                <div class="flex space-x-5 items-center justify-center">
                    <svg width="24" height="25" viewBox="0 0 24 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M21.0375 17.1421L17.8626 16.7593C17.1 16.6669 16.35 16.9441 15.8125 17.5116L13.5126 19.9403C9.97505 18.0396 7.07505 14.9906 5.27505 11.242L7.58755 8.80016C8.12505 8.23259 8.38755 7.44064 8.30005 6.63549L7.93755 3.30928C7.78755 1.97616 6.72505 0.973022 5.45005 0.973022H3.28755C1.87505 0.973022 0.700051 2.21375 0.787551 3.70526C1.45005 14.9774 9.98755 23.9792 20.65 24.6788C22.0625 24.7712 23.2375 23.5305 23.2375 22.039V19.7555C23.25 18.4224 22.3 17.3004 21.0375 17.1421Z" fill="white"/>
                        </svg>
                        <h5 class="text-[13px] font-semibold text-white">082110112399</h5>
                </div>
                <div class="flex space-x-5 items-center justify-center">
                    <img src="{{ asset('assets/Shopee.png') }}" alt="" class=" w-[30px]">
                        <h5 class="text-[13px] font-semibold text-white">Store text</h5>
                </div>
                <div class="flex space-x-5 items-center justify-center">
                    <img src="{{ asset('assets/Tokopedia.png') }}" alt="" class=" w-[25px]">
                        <h5 class="text-[13px] font-semibold text-white">Store text</h5>
                </div>
            </div>

            <div class="bg-red-800 rounded-xl flex items-center justify-center space-x-5 px-5 py-3 mt-10">
                <h5 class="text-[13px] font-semibold text-white">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Incidunt molestias aspernatur atque et adipisci dolore error! Molestiae neque, pariatur fugiat ullam hic, fuga esse voluptatum quae eveniet nesciunt nihil exercitationem!</h5>
            </div>
        </div>


        <div class="w-full">
            <h1 class="text-3xl font-semibold text-red-800 text-center mt-14 mb-5">Testimoni</h1>
            <div class="testimony w-full flex justify-between items-start space-x-5 overflow-x-scroll p-8 bg-red-800">
                <div class="bg-white rounded-lg w-[195px] flex flex-col flex-shrink-0 items-center justify-center py-4 px-4 text-center">
                    <img src="./assets/testimony-1.png" alt="">
                    <h5 class="text-lg text-red-800 font-semibold">Kejora Marlian</h5>
                    <div class="flex space-x-2 mt-2">
                        <svg width="12" height="11" viewBox="0 0 12 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M6 0L7.34708 4.1459H11.7063L8.17963 6.7082L9.52671 10.8541L6 8.2918L2.47329 10.8541L3.82037 6.7082L0.293661 4.1459H4.65292L6 0Z" fill="#FFD600"/>
                        </svg>
                        <svg width="12" height="11" viewBox="0 0 12 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M6 0L7.34708 4.1459H11.7063L8.17963 6.7082L9.52671 10.8541L6 8.2918L2.47329 10.8541L3.82037 6.7082L0.293661 4.1459H4.65292L6 0Z" fill="#FFD600"/>
                        </svg>
                        <svg width="12" height="11" viewBox="0 0 12 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M6 0L7.34708 4.1459H11.7063L8.17963 6.7082L9.52671 10.8541L6 8.2918L2.47329 10.8541L3.82037 6.7082L0.293661 4.1459H4.65292L6 0Z" fill="#FFD600"/>
                        </svg>
                        <svg width="12" height="11" viewBox="0 0 12 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M6 0L7.34708 4.1459H11.7063L8.17963 6.7082L9.52671 10.8541L6 8.2918L2.47329 10.8541L3.82037 6.7082L0.293661 4.1459H4.65292L6 0Z" fill="#FFD600"/>
                        </svg>
                        <svg width="12" height="11" viewBox="0 0 12 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M6 0L7.34708 4.1459H11.7063L8.17963 6.7082L9.52671 10.8541L6 8.2918L2.47329 10.8541L3.82037 6.7082L0.293661 4.1459H4.65292L6 0Z" fill="#FFD600"/>
                        </svg>

                    </div>
                    <p class="text-[12px] font-light text-neutral-500 mt-3">
                        Pertama kali beli di Nawasena, puas sama pelayanannya. Barangnya juga bagus kualitasnya :D
                    </p>
                </div>
                <div class="bg-white rounded-lg w-[195px] flex flex-col flex-shrink-0 items-center justify-center py-4 px-4 text-center">
                    <img src="./assets/testimony-1.png" alt="">
                    <h5 class="text-lg text-red-800 font-semibold">Kejora Marlian</h5>
                    <div class="flex space-x-2 mt-2">
                        <svg width="12" height="11" viewBox="0 0 12 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M6 0L7.34708 4.1459H11.7063L8.17963 6.7082L9.52671 10.8541L6 8.2918L2.47329 10.8541L3.82037 6.7082L0.293661 4.1459H4.65292L6 0Z" fill="#FFD600"/>
                        </svg>
                        <svg width="12" height="11" viewBox="0 0 12 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M6 0L7.34708 4.1459H11.7063L8.17963 6.7082L9.52671 10.8541L6 8.2918L2.47329 10.8541L3.82037 6.7082L0.293661 4.1459H4.65292L6 0Z" fill="#FFD600"/>
                        </svg>
                        <svg width="12" height="11" viewBox="0 0 12 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M6 0L7.34708 4.1459H11.7063L8.17963 6.7082L9.52671 10.8541L6 8.2918L2.47329 10.8541L3.82037 6.7082L0.293661 4.1459H4.65292L6 0Z" fill="#FFD600"/>
                        </svg>
                        <svg width="12" height="11" viewBox="0 0 12 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M6 0L7.34708 4.1459H11.7063L8.17963 6.7082L9.52671 10.8541L6 8.2918L2.47329 10.8541L3.82037 6.7082L0.293661 4.1459H4.65292L6 0Z" fill="#FFD600"/>
                        </svg>
                        <svg width="12" height="11" viewBox="0 0 12 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M6 0L7.34708 4.1459H11.7063L8.17963 6.7082L9.52671 10.8541L6 8.2918L2.47329 10.8541L3.82037 6.7082L0.293661 4.1459H4.65292L6 0Z" fill="#FFD600"/>
                        </svg>

                    </div>
                    <p class="text-[12px] font-light text-neutral-500 mt-3">
                        Pertama kali beli di Nawasena, puas sama pelayanannya. Barangnya juga bagus kualitasnya :D
                    </p>
                </div>
                <div class="bg-white rounded-lg w-[195px] flex flex-col items-center flex-shrink-0 justify-center py-4 px-4 text-center">
                    <img src="./assets/testimony-1.png" alt="">
                    <h5 class="text-lg text-red-800 font-semibold">Kejora Marlian</h5>
                    <div class="flex space-x-2 mt-2">
                        <svg width="12" height="11" viewBox="0 0 12 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M6 0L7.34708 4.1459H11.7063L8.17963 6.7082L9.52671 10.8541L6 8.2918L2.47329 10.8541L3.82037 6.7082L0.293661 4.1459H4.65292L6 0Z" fill="#FFD600"/>
                        </svg>
                        <svg width="12" height="11" viewBox="0 0 12 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M6 0L7.34708 4.1459H11.7063L8.17963 6.7082L9.52671 10.8541L6 8.2918L2.47329 10.8541L3.82037 6.7082L0.293661 4.1459H4.65292L6 0Z" fill="#FFD600"/>
                        </svg>
                        <svg width="12" height="11" viewBox="0 0 12 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M6 0L7.34708 4.1459H11.7063L8.17963 6.7082L9.52671 10.8541L6 8.2918L2.47329 10.8541L3.82037 6.7082L0.293661 4.1459H4.65292L6 0Z" fill="#FFD600"/>
                        </svg>
                        <svg width="12" height="11" viewBox="0 0 12 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M6 0L7.34708 4.1459H11.7063L8.17963 6.7082L9.52671 10.8541L6 8.2918L2.47329 10.8541L3.82037 6.7082L0.293661 4.1459H4.65292L6 0Z" fill="#FFD600"/>
                        </svg>
                        <svg width="12" height="11" viewBox="0 0 12 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M6 0L7.34708 4.1459H11.7063L8.17963 6.7082L9.52671 10.8541L6 8.2918L2.47329 10.8541L3.82037 6.7082L0.293661 4.1459H4.65292L6 0Z" fill="#FFD600"/>
                        </svg>

                    </div>
                    <p class="text-[12px] font-light text-neutral-500 mt-3">
                        Pertama kali beli di Nawasena, puas sama pelayanannya. Barangnya juga bagus kualitasnya :D
                    </p>
                </div>
            </div>
            <!-- Footer -->
    <footer class="footer-1 bg-gray-100 py-8 sm:py-12 bg-red-800 text-white">
        <div class="container mx-auto px-4">
        <h5 class="text-2xl font-bold mb-6">Nawasena Aisma Persada</h5>
          <div class="sm:flex sm:flex-wrap sm:-mx-4 md:py-4">
            <div class="px-4 sm:w-1/2 md:w-1/4 xl:w-1/6 mt-8 md:mt-0">
              <ul class="list-none footer-links">
                <li class="mb-2">
                  <a href="#" class="border-b border-solid border-transparent hover:border-purple-800 hover:text-purple-800">About</a>
                </li>
                <li class="mb-2">
                  <a href="#" class="border-b border-solid border-transparent hover:border-purple-800 hover:text-purple-800">Products</a>
                </li>
                <li class="mb-2">
                  <a href="#" class="border-b border-solid border-transparent hover:border-purple-800 hover:text-purple-800">Merchants</a>
                </li>
                <li class="mb-2">
                  <a href="#" class="border-b border-solid border-transparent hover:border-purple-800 hover:text-purple-800">Partners</a>
                </li>
                <li class="mb-2">
                    <a href="#" class="border-b border-solid border-transparent hover:border-purple-800 hover:text-purple-800">Contact</a>
                  </li>
              </ul>
            </div>
            <div class="px-4 sm:w-1/2 md:w-1/4 xl:w-1/6 mt-8 md:mt-0">
              <ul class="list-none footer-links">
                <li class="mb-2">
                  <a href="#" class="border-b border-solid border-transparent hover:border-purple-800 hover:text-purple-800">Email</a>
                </li>
                <li class="mb-2">
                  <a href="#" class="border-b border-solid border-transparent hover:border-purple-800 hover:text-purple-800">Phone</a>
                </li>
                <li class="mb-2">
                  <a href="#" class="border-b border-solid border-transparent hover:border-purple-800 hover:text-purple-800">Instagram</a>
                </li>
                <li class="mb-2">
                    <a href="#" class="border-b border-solid border-transparent hover:border-purple-800 hover:text-purple-800">Shopee</a>
                  </li>
                  <li class="mb-2">
                    <a href="#" class="border-b border-solid border-transparent hover:border-purple-800 hover:text-purple-800">Tokopedia</a>
                  </li>
              </ul>
            </div>
            <div class="px-4 mt-4 sm:w-1/3 xl:w-1/6 sm:mx-auto xl:mt-0 xl:ml-auto">

            </div>
          </div>

          <div class="sm:flex sm:flex-wrap sm:-mx-4 mt-6 pt-6 sm:mt-12 sm:pt-12 border-t">
            <div class="sm:w-full px-4 md:w-1/6">
              <strong>Nawasena Aisma Persada</strong>
            </div>
            <div class="px-4 sm:w-1/2 md:w-1/4 mt-4 md:mt-0">
              <h6 class="font-bold mb-2">Alamat</h6>
              <address class="not-italic mb-4 text-sm">
                123 6th St.<br>
                Lorem ipsum, FL 32904
              </address>
            </div>
            <div class="px-4 md:w-1/4 md:ml-auto mt-6 sm:mt-4 md:mt-0">
              <button class="px-4 py-2 bg-blue-800 hover:bg-blue-900 rounded text-white">Contact us</button>
            </div>
          </div>
        </div>
      </footer>
        </div>
    </div>

    <!-- Desktop view -->
    <div class="xl:block hidden w-screen h-max">

        <!-- Hero -->
        <div class="py-14 px-14 w-full bg-cover pb-14" style="background-image: url('{{ asset('assets/hero-bg.png') }}');">
            <div class="w-full justify-between flex px-3">
                <svg width="71" height="15" viewBox="0 0 71 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M0.82 14.5L7.06 0.499999H10.26L16.52 14.5H13.12L8 2.14H9.28L4.14 14.5H0.82ZM3.94 11.5L4.8 9.04H12L12.88 11.5H3.94ZM17.9725 14.5V0.499999H21.2125V14.5H17.9725ZM29.135 14.74C28.015 14.74 26.9417 14.5933 25.915 14.3C24.8883 13.9933 24.0617 13.6 23.435 13.12L24.535 10.68C25.135 11.1067 25.8417 11.46 26.655 11.74C27.4817 12.0067 28.315 12.14 29.155 12.14C29.795 12.14 30.3083 12.08 30.695 11.96C31.095 11.8267 31.3883 11.6467 31.575 11.42C31.7617 11.1933 31.855 10.9333 31.855 10.64C31.855 10.2667 31.7083 9.97333 31.415 9.76C31.1217 9.53333 30.735 9.35333 30.255 9.22C29.775 9.07333 29.2417 8.94 28.655 8.82C28.0817 8.68667 27.5017 8.52667 26.915 8.34C26.3417 8.15333 25.815 7.91333 25.335 7.62C24.855 7.32667 24.4617 6.94 24.155 6.46C23.8617 5.98 23.715 5.36667 23.715 4.62C23.715 3.82 23.9283 3.09333 24.355 2.44C24.795 1.77333 25.4483 1.24667 26.315 0.859999C27.195 0.46 28.295 0.26 29.615 0.26C30.495 0.26 31.3617 0.366666 32.215 0.579999C33.0683 0.779999 33.8217 1.08667 34.475 1.5L33.475 3.96C32.8217 3.58667 32.1683 3.31333 31.515 3.14C30.8617 2.95333 30.2217 2.86 29.595 2.86C28.9683 2.86 28.455 2.93333 28.055 3.08C27.655 3.22667 27.3683 3.42 27.195 3.66C27.0217 3.88667 26.935 4.15333 26.935 4.46C26.935 4.82 27.0817 5.11333 27.375 5.34C27.6683 5.55333 28.055 5.72667 28.535 5.86C29.015 5.99333 29.5417 6.12667 30.115 6.26C30.7017 6.39333 31.2817 6.54667 31.855 6.72C32.4417 6.89333 32.975 7.12667 33.455 7.42C33.935 7.71333 34.3217 8.1 34.615 8.58C34.9217 9.06 35.075 9.66667 35.075 10.4C35.075 11.1867 34.855 11.9067 34.415 12.56C33.975 13.2133 33.315 13.74 32.435 14.14C31.5683 14.54 30.4683 14.74 29.135 14.74ZM37.2889 14.5V0.499999H39.9689L45.9289 10.38H44.5089L50.3689 0.499999H53.0289L53.0689 14.5H50.0289L50.0089 5.16H50.5689L45.8889 13.02H44.4289L39.6489 5.16H40.3289V14.5H37.2889ZM54.5505 14.5L60.7905 0.499999H63.9905L70.2505 14.5H66.8505L61.7305 2.14H63.0105L57.8705 14.5H54.5505ZM57.6705 11.5L58.5305 9.04H65.7305L66.6105 11.5H57.6705Z" fill="#EC1425"/>
                    </svg>

            <div class="flex items-center justify-center space-x-10 text-white">
                <a href="{{ url('home') }}" class="font-semibold">Beranda</a>
                <a href="#tentang">Tentang</a>
                <a href="#testimoni">Testimoni</a>
                <a href="{{ url('products') }}">Produk</a>
                <a class="hover:border-2 w-max hover:border-red-800 px-4 py-3 flex justify-center items-center hover:text-red-800 tracking-wide bg-red-800 hover:bg-white text-white transition-all duration-500 rounded-lg text-sm font-semibold" href="product.html">
                    Kontak kami
                </a>
            </div>
        </div>
        <div class="flex flex-col justify-center mt-10">
            <div class="ml-3 space-y-3 mt-5 mb-8">
                <h1 class="text-6xl font-semibold w-[38rem] text-white tracking-wide">{{ $data['home_main_title'] }}</h1>
                <h5 class="text-lg text-neutral-200 w-96">{{ $data['home_main_text'] }}</h5>
            </div>
            <div class="w-[18rem] ml-3 flex justify-between">
                <a class="bg-red-800 w-max px-4 py-3 flex justify-center items-center text-white rounded-lg tracking-wide font-semibold text-sm hover:rounded-3xl hover:text-red-800 hover:shadow-inner hover:bg-neutral-100 how hover:border-red-800 transition-all duration-500" href="product.html">
                    Cek Sekarang!
                </a>
                <a class="border-2 w-max border-red-800 px-4 py-3 flex justify-center items-center text-red-800 bg-white tracking-wide hover:bg-red-800 hover:text-white transition-all duration-500 rounded-lg text-sm font-semibold" href="product.html">
                    Kontak kami
                </a>
            </div>

            <h3 class="mt-10 ml-3 text-3xl font-semibold text-white mb-5">Kenapa Harus Nawasena?</h3>
            <div class="grid grid-cols-2 gap-5 ml-3 w-[28rem]">
                <div class="px-5 py-3 w-max space-x-4 items-center justify-between flex text-white font-semibold rounded-2xl bg-red-800 shadow-inner">
                    <svg width="31" height="31" viewBox="0 0 31 31" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <rect width="31" height="31" rx="5" fill="#F1F1F1"/>
                        <path d="M15.5 18.7938L18.0937 20.3626C18.5687 20.6501 19.15 20.2251 19.025 19.6876L18.3375 16.7376L20.6312 14.7501C21.05 14.3876 20.825 13.7001 20.275 13.6563L17.2562 13.4001L16.075 10.6126C15.8625 10.1063 15.1375 10.1063 14.925 10.6126L13.7437 13.3938L10.725 13.6501C10.175 13.6938 9.94995 14.3813 10.3687 14.7438L12.6625 16.7313L11.975 19.6813C11.85 20.2188 12.4312 20.6438 12.9062 20.3563L15.5 18.7938Z" fill="#AD555C"/>
                        </svg>
                    <h5>Kualitas Terbaik</h5>
                </div>
                <div class="px-5 py-3 w-max space-x-4 items-center justify-between flex text-white font-semibold rounded-2xl bg-red-800 shadow-inner">
                    <svg width="31" height="31" viewBox="0 0 31 31" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <rect width="31" height="31" rx="5" fill="#F1F1F1"/>
                        <path d="M10.7642 19.375H12.4864V14.2084H10.7642V19.375ZM20.2364 14.6389C20.2364 14.1653 19.8489 13.7778 19.3753 13.7778H16.6585L17.0675 11.8102L17.0804 11.6724C17.0804 11.4959 17.0072 11.3322 16.891 11.216L16.4346 10.7639L13.6015 13.6013C13.4422 13.7563 13.3475 13.9716 13.3475 14.2084V18.5139C13.3475 18.9875 13.735 19.375 14.2086 19.375H18.0836C18.441 19.375 18.7467 19.1597 18.8758 18.8498L20.1761 15.8143C20.2149 15.7153 20.2364 15.612 20.2364 15.5V14.6389Z" fill="#AD555C"/>
                        </svg>
                    <h5>Pelayanan Terbaik</h5>
                </div>
                <div class=" px-5 py-3 w-max space-x-4 items-center justify-between flex text-white font-semibold rounded-2xl bg-red-800 shadow-inner">
                    <svg width="31" height="31" viewBox="0 0 31 31" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <rect width="31" height="31" rx="5" fill="#F1F1F1"/>
                        <path d="M19 14.5V13C19 12.45 18.55 12 18 12H12C11.45 12 11 12.45 11 13V14.5C10.45 14.5 10 14.95 10 15.5V18H10.665L11 19H11.5L11.835 18H18.17L18.5 19H19L19.335 18H20V15.5C20 14.95 19.55 14.5 19 14.5ZM14.5 14.5H12V13H14.5V14.5ZM18 14.5H15.5V13H18V14.5Z" fill="#AD555C"/>
                        </svg>
                    <h5>Dijamin Ori</h5>
                </div>
            </div>
        </div>
    </div>

    <!-- Berkualitas dan terpercaya -->

    <h1 class="w-screen text-center text-4xl uppercase mt-14 mb-5 font-bold text-red-800">Berkualitas dan terpercaya</h1>
    <img src="{{ asset('assets/berkualitas.png') }}" alt="" class="w-screen">

    <h1 class="w-screen text-center text-4xl uppercase mt-14 mb-5 font-bold text-red-800">Detail Perusahaan</h1>
    <div class="w-full h-[826px] flex py-7 px-5 bg-cover items-center justify-center space-x-14" style="background-image: url({{ asset('assets/bg-2.png') }});">
        <!--Text-->
        <div class="space-y-8">
            <h1 class="text-white font-semibold text-6xl w-[35rem] tracking-wide">{{ $data['home_second_title'] }}</h1>
            <p class="text-white text-lg w-[40rem] tracking-wide">{{ $data['home_second_text'] }}</p>
            <a class="bg-red-800 w-max px-4 py-3 flex justify-center items-center text-white rounded-lg tracking-wide font-semibold text-sm hover:rounded-3xl hover:text-red-800 hover:shadow-inner hover:bg-neutral-100 how hover:border-red-800 transition-all duration-500" href="product.html">
                Dapatkan Sekarang!
            </a>
        </div>

        <!--Products-->
        <div class="grid grid-cols-3 gap-8">
            <div class="w-[200px] h-max rounded-xl overflow-hidden bg-white pb-4">
                <img src="{{ asset($data['home_product1_image']) }}" class="w-full bg-cover">
                <div class="px-3 mt-3">
                    <h3 class="text-lg font-semibold text-neutral-800 mb-2">{{ $data['home_product1_name'] }}</h3>
                    <p class="text-neutral-500">{{ $data['home_product1_size'] }}</p>
                    <h3 class="text-lg font-semibold text-neutral-800 mt-5">Rp. {{ $data['home_product1_price'] }}</h3>
                </div>
            </div>
            <div class="w-[200px] h-max rounded-xl overflow-hidden bg-white pb-4">
                <img src="{{ asset($data['home_product2_image']) }}" class="w-full bg-cover">
                <div class="px-3 mt-3">
                    <h3 class="text-lg font-semibold text-neutral-800 mb-2">{{ $data['home_product2_name'] }}</h3>
                    <p class="text-neutral-500">{{ $data['home_product2_size'] }}</p>
                    <h3 class="text-lg font-semibold text-neutral-800 mt-5">Rp. {{ $data['home_product2_price'] }}</h3>
                </div>
            </div>
            <div class="w-[200px] h-max rounded-xl overflow-hidden bg-white pb-4">
                <img src="{{ asset($data['home_product3_image']) }}" class="w-full bg-cover">
                <div class="px-3 mt-3">
                    <h3 class="text-lg font-semibold text-neutral-800 mb-2">{{ $data['home_product3_name'] }}</h3>
                    <p class="text-neutral-500">{{ $data['home_product3_size'] }}</p>
                    <h3 class="text-lg font-semibold text-neutral-800 mt-5">Rp. {{ $data['home_product3_price'] }}</h3>
                </div>
            </div>
            <div class="w-[200px] h-max rounded-xl overflow-hidden bg-white pb-4">
                <img src="{{ asset($data['home_product4_image']) }}" class="w-full bg-cover">
                <div class="px-3 mt-3">
                    <h3 class="text-lg font-semibold text-neutral-800 mb-2">{{ $data['home_product4_name'] }}</h3>
                    <p class="text-neutral-500">{{ $data['home_product4_size'] }}</p>
                    <h3 class="text-lg font-semibold text-neutral-800 mt-5">Rp. {{ $data['home_product4_price'] }}</h3>
                </div>
            </div>
            <div class="w-[200px] h-max rounded-xl overflow-hidden bg-white pb-4">
                <img src="{{ asset($data['home_product5_image']) }}" class="w-full bg-cover">
                <div class="px-3 mt-3">
                    <h3 class="text-lg font-semibold text-neutral-800 mb-2">{{ $data['home_product5_name'] }}</h3>
                    <p class="text-neutral-500">{{ $data['home_product5_size'] }}</p>
                    <h3 class="text-lg font-semibold text-neutral-800 mt-5">Rp. {{ $data['home_product5_price'] }}</h3>
                </div>
            </div>
            <div class="w-[200px] h-max rounded-xl overflow-hidden bg-white pb-4">
                <img src="{{ asset($data['home_product6_image']) }}" class="w-full bg-cover">
                <div class="px-3 mt-3">
                    <h3 class="text-lg font-semibold text-neutral-800 mb-2">{{ $data['home_product6_name'] }}</h3>
                    <p class="text-neutral-500">{{ $data['home_product6_size'] }}</p>
                    <h3 class="text-lg font-semibold text-neutral-800 mt-5">Rp. {{ $data['home_product6_price'] }}</h3>
                </div>
            </div>
        </div>
    </div>

    <div class="w-full px-10 lg:px-20 mt-14 py-10 flex flex-col items-center justify-center">
        <h1 class="w-screen text-center text-4xl uppercase mb-5 font-bold text-red-800">Detail Perusahaan</h1>
        <div class="w-screen flex items-center justify-between h-[376px] bg-cover" style="background-image: url('{{ asset('assets/detail.png') }}');">
            <a href="" class="text-4xl text-white font-bold uppercases h-full flex items-center justify-center hover:bg-white hover:bg-opacity-20 transition-all duration-500 w-1/3"
            >Online Shop</a>
            <a href="" class="text-4xl text-white font-bold uppercases h-full flex items-center justify-center hover:bg-white hover:bg-opacity-20 transition-all duration-500 w-1/3"
            >Whatsapp</a>
            <a href="product.html" class="text-4xl text-white font-bold uppercases h-full flex items-center justify-center hover:bg-white hover:bg-opacity-20 transition-all duration-500 w-1/3"
            >Produk</a>
        </div>
        <div class="w-screen bg-red-800 text-white text-center space-y-1 py-5">
            <a href="https://maps.app.goo.gl/5D1iHvHQbdzobX4m8" class="hover:font-semibold"
            >Jl. RE. Soemantadiredja Kp. Bojong, RT.03/RW.02, Pamoyanan, Kec. Bogor Sel., Kota Bogor, Jawa Barat 16136</a>
            <h5>082110112399</h5>
        </div>
    </div>

    <div class="w-full">
        <h1 class="w-screen text-center text-4xl uppercase mt-14 mb-5 font-bold text-red-800">Testimoni</h1>
        <div class="testimony flex justify-between items-start space-x-5 overflow-x-scroll p-8 bg-red-800">
        <div class="bg-white rounded-lg w-[17rem] flex flex-col flex-shrink-0 items-center justify-center p-5 text-center">
            <img src="./assets/kejora.png" class="w-[10rem]">
            <h5 class="text-2xl text-red-800 font-semibold mt-3">Kejora Marlian</h5>
            <div class="flex space-x-2 mt-5">
                <svg width="12" height="11" viewBox="0 0 12 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M6 0L7.34708 4.1459H11.7063L8.17963 6.7082L9.52671 10.8541L6 8.2918L2.47329 10.8541L3.82037 6.7082L0.293661 4.1459H4.65292L6 0Z" fill="#FFD600"/>
                </svg>
                <svg width="12" height="11" viewBox="0 0 12 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M6 0L7.34708 4.1459H11.7063L8.17963 6.7082L9.52671 10.8541L6 8.2918L2.47329 10.8541L3.82037 6.7082L0.293661 4.1459H4.65292L6 0Z" fill="#FFD600"/>
                </svg>
                <svg width="12" height="11" viewBox="0 0 12 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M6 0L7.34708 4.1459H11.7063L8.17963 6.7082L9.52671 10.8541L6 8.2918L2.47329 10.8541L3.82037 6.7082L0.293661 4.1459H4.65292L6 0Z" fill="#FFD600"/>
                </svg>
                <svg width="12" height="11" viewBox="0 0 12 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M6 0L7.34708 4.1459H11.7063L8.17963 6.7082L9.52671 10.8541L6 8.2918L2.47329 10.8541L3.82037 6.7082L0.293661 4.1459H4.65292L6 0Z" fill="#FFD600"/>
                </svg>
                <svg width="12" height="11" viewBox="0 0 12 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M6 0L7.34708 4.1459H11.7063L8.17963 6.7082L9.52671 10.8541L6 8.2918L2.47329 10.8541L3.82037 6.7082L0.293661 4.1459H4.65292L6 0Z" fill="#FFD600"/>
                </svg>

            </div>
            <p class="text-neutral-500 mt-3">
                Pertama kali beli di Nawasena, puas sama pelayanannya. Barangnya juga bagus kualitasnya :D
            </p>
        </div>
        <div class="bg-white rounded-lg w-[17rem] flex flex-col flex-shrink-0 items-center justify-center p-5 text-center">
            <img src="./assets/kejora.png" class="w-[10rem]">
            <h5 class="text-2xl text-red-800 font-semibold mt-3">Kejora Marlian</h5>
            <div class="flex space-x-2 mt-5">
                <svg width="12" height="11" viewBox="0 0 12 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M6 0L7.34708 4.1459H11.7063L8.17963 6.7082L9.52671 10.8541L6 8.2918L2.47329 10.8541L3.82037 6.7082L0.293661 4.1459H4.65292L6 0Z" fill="#FFD600"/>
                </svg>
                <svg width="12" height="11" viewBox="0 0 12 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M6 0L7.34708 4.1459H11.7063L8.17963 6.7082L9.52671 10.8541L6 8.2918L2.47329 10.8541L3.82037 6.7082L0.293661 4.1459H4.65292L6 0Z" fill="#FFD600"/>
                </svg>
                <svg width="12" height="11" viewBox="0 0 12 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M6 0L7.34708 4.1459H11.7063L8.17963 6.7082L9.52671 10.8541L6 8.2918L2.47329 10.8541L3.82037 6.7082L0.293661 4.1459H4.65292L6 0Z" fill="#FFD600"/>
                </svg>
                <svg width="12" height="11" viewBox="0 0 12 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M6 0L7.34708 4.1459H11.7063L8.17963 6.7082L9.52671 10.8541L6 8.2918L2.47329 10.8541L3.82037 6.7082L0.293661 4.1459H4.65292L6 0Z" fill="#FFD600"/>
                </svg>
                <svg width="12" height="11" viewBox="0 0 12 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M6 0L7.34708 4.1459H11.7063L8.17963 6.7082L9.52671 10.8541L6 8.2918L2.47329 10.8541L3.82037 6.7082L0.293661 4.1459H4.65292L6 0Z" fill="#FFD600"/>
                </svg>

            </div>
            <p class="text-neutral-500 mt-3">
                Pertama kali beli di Nawasena, puas sama pelayanannya. Barangnya juga bagus kualitasnya :D
            </p>
        </div>
        <div class="bg-white rounded-lg w-[17rem] flex flex-col flex-shrink-0 items-center justify-center p-5 text-center">
            <img src="./assets/kejora.png" class="w-[10rem]">
            <h5 class="text-2xl text-red-800 font-semibold mt-3">Kejora Marlian</h5>
            <div class="flex space-x-2 mt-5">
                <svg width="12" height="11" viewBox="0 0 12 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M6 0L7.34708 4.1459H11.7063L8.17963 6.7082L9.52671 10.8541L6 8.2918L2.47329 10.8541L3.82037 6.7082L0.293661 4.1459H4.65292L6 0Z" fill="#FFD600"/>
                </svg>
                <svg width="12" height="11" viewBox="0 0 12 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M6 0L7.34708 4.1459H11.7063L8.17963 6.7082L9.52671 10.8541L6 8.2918L2.47329 10.8541L3.82037 6.7082L0.293661 4.1459H4.65292L6 0Z" fill="#FFD600"/>
                </svg>
                <svg width="12" height="11" viewBox="0 0 12 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M6 0L7.34708 4.1459H11.7063L8.17963 6.7082L9.52671 10.8541L6 8.2918L2.47329 10.8541L3.82037 6.7082L0.293661 4.1459H4.65292L6 0Z" fill="#FFD600"/>
                </svg>
                <svg width="12" height="11" viewBox="0 0 12 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M6 0L7.34708 4.1459H11.7063L8.17963 6.7082L9.52671 10.8541L6 8.2918L2.47329 10.8541L3.82037 6.7082L0.293661 4.1459H4.65292L6 0Z" fill="#FFD600"/>
                </svg>
                <svg width="12" height="11" viewBox="0 0 12 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M6 0L7.34708 4.1459H11.7063L8.17963 6.7082L9.52671 10.8541L6 8.2918L2.47329 10.8541L3.82037 6.7082L0.293661 4.1459H4.65292L6 0Z" fill="#FFD600"/>
                </svg>

            </div>
            <p class="text-neutral-500 mt-3">
                Pertama kali beli di Nawasena, puas sama pelayanannya. Barangnya juga bagus kualitasnya :D
            </p>
        </div>
        <div class="bg-white rounded-lg w-[17rem] flex flex-col flex-shrink-0 items-center justify-center p-5 text-center">
            <img src="./assets/kejora.png" class="w-[10rem]">
            <h5 class="text-2xl text-red-800 font-semibold mt-3">Kejora Marlian</h5>
            <div class="flex space-x-2 mt-5">
                <svg width="12" height="11" viewBox="0 0 12 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M6 0L7.34708 4.1459H11.7063L8.17963 6.7082L9.52671 10.8541L6 8.2918L2.47329 10.8541L3.82037 6.7082L0.293661 4.1459H4.65292L6 0Z" fill="#FFD600"/>
                </svg>
                <svg width="12" height="11" viewBox="0 0 12 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M6 0L7.34708 4.1459H11.7063L8.17963 6.7082L9.52671 10.8541L6 8.2918L2.47329 10.8541L3.82037 6.7082L0.293661 4.1459H4.65292L6 0Z" fill="#FFD600"/>
                </svg>
                <svg width="12" height="11" viewBox="0 0 12 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M6 0L7.34708 4.1459H11.7063L8.17963 6.7082L9.52671 10.8541L6 8.2918L2.47329 10.8541L3.82037 6.7082L0.293661 4.1459H4.65292L6 0Z" fill="#FFD600"/>
                </svg>
                <svg width="12" height="11" viewBox="0 0 12 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M6 0L7.34708 4.1459H11.7063L8.17963 6.7082L9.52671 10.8541L6 8.2918L2.47329 10.8541L3.82037 6.7082L0.293661 4.1459H4.65292L6 0Z" fill="#FFD600"/>
                </svg>
                <svg width="12" height="11" viewBox="0 0 12 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M6 0L7.34708 4.1459H11.7063L8.17963 6.7082L9.52671 10.8541L6 8.2918L2.47329 10.8541L3.82037 6.7082L0.293661 4.1459H4.65292L6 0Z" fill="#FFD600"/>
                </svg>

            </div>
            <p class="text-neutral-500 mt-3">
                Pertama kali beli di Nawasena, puas sama pelayanannya. Barangnya juga bagus kualitasnya :D
            </p>
        </div>
        <div class="bg-white rounded-lg w-[17rem] flex flex-col flex-shrink-0 items-center justify-center p-5 text-center">
            <img src="./assets/kejora.png" class="w-[10rem]">
            <h5 class="text-2xl text-red-800 font-semibold mt-3">Kejora Marlian</h5>
            <div class="flex space-x-2 mt-5">
                <svg width="12" height="11" viewBox="0 0 12 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M6 0L7.34708 4.1459H11.7063L8.17963 6.7082L9.52671 10.8541L6 8.2918L2.47329 10.8541L3.82037 6.7082L0.293661 4.1459H4.65292L6 0Z" fill="#FFD600"/>
                </svg>
                <svg width="12" height="11" viewBox="0 0 12 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M6 0L7.34708 4.1459H11.7063L8.17963 6.7082L9.52671 10.8541L6 8.2918L2.47329 10.8541L3.82037 6.7082L0.293661 4.1459H4.65292L6 0Z" fill="#FFD600"/>
                </svg>
                <svg width="12" height="11" viewBox="0 0 12 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M6 0L7.34708 4.1459H11.7063L8.17963 6.7082L9.52671 10.8541L6 8.2918L2.47329 10.8541L3.82037 6.7082L0.293661 4.1459H4.65292L6 0Z" fill="#FFD600"/>
                </svg>
                <svg width="12" height="11" viewBox="0 0 12 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M6 0L7.34708 4.1459H11.7063L8.17963 6.7082L9.52671 10.8541L6 8.2918L2.47329 10.8541L3.82037 6.7082L0.293661 4.1459H4.65292L6 0Z" fill="#FFD600"/>
                </svg>
                <svg width="12" height="11" viewBox="0 0 12 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M6 0L7.34708 4.1459H11.7063L8.17963 6.7082L9.52671 10.8541L6 8.2918L2.47329 10.8541L3.82037 6.7082L0.293661 4.1459H4.65292L6 0Z" fill="#FFD600"/>
                </svg>

            </div>
            <p class="text-neutral-500 mt-3">
                Pertama kali beli di Nawasena, puas sama pelayanannya. Barangnya juga bagus kualitasnya :D
            </p>
        </div>
        <div class="bg-white rounded-lg w-[17rem] flex flex-col flex-shrink-0 items-center justify-center p-5 text-center">
            <img src="./assets/kejora.png" class="w-[10rem]">
            <h5 class="text-2xl text-red-800 font-semibold mt-3">Kejora Marlian</h5>
            <div class="flex space-x-2 mt-5">
                <svg width="12" height="11" viewBox="0 0 12 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M6 0L7.34708 4.1459H11.7063L8.17963 6.7082L9.52671 10.8541L6 8.2918L2.47329 10.8541L3.82037 6.7082L0.293661 4.1459H4.65292L6 0Z" fill="#FFD600"/>
                </svg>
                <svg width="12" height="11" viewBox="0 0 12 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M6 0L7.34708 4.1459H11.7063L8.17963 6.7082L9.52671 10.8541L6 8.2918L2.47329 10.8541L3.82037 6.7082L0.293661 4.1459H4.65292L6 0Z" fill="#FFD600"/>
                </svg>
                <svg width="12" height="11" viewBox="0 0 12 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M6 0L7.34708 4.1459H11.7063L8.17963 6.7082L9.52671 10.8541L6 8.2918L2.47329 10.8541L3.82037 6.7082L0.293661 4.1459H4.65292L6 0Z" fill="#FFD600"/>
                </svg>
                <svg width="12" height="11" viewBox="0 0 12 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M6 0L7.34708 4.1459H11.7063L8.17963 6.7082L9.52671 10.8541L6 8.2918L2.47329 10.8541L3.82037 6.7082L0.293661 4.1459H4.65292L6 0Z" fill="#FFD600"/>
                </svg>
                <svg width="12" height="11" viewBox="0 0 12 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M6 0L7.34708 4.1459H11.7063L8.17963 6.7082L9.52671 10.8541L6 8.2918L2.47329 10.8541L3.82037 6.7082L0.293661 4.1459H4.65292L6 0Z" fill="#FFD600"/>
                </svg>

            </div>
            <p class="text-neutral-500 mt-3">
                Pertama kali beli di Nawasena, puas sama pelayanannya. Barangnya juga bagus kualitasnya :D
            </p>
        </div>
        <div class="bg-white rounded-lg w-[17rem] flex flex-col flex-shrink-0 items-center justify-center p-5 text-center">
            <img src="./assets/kejora.png" class="w-[10rem]">
            <h5 class="text-2xl text-red-800 font-semibold mt-3">Kejora Marlian</h5>
            <div class="flex space-x-2 mt-5">
                <svg width="12" height="11" viewBox="0 0 12 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M6 0L7.34708 4.1459H11.7063L8.17963 6.7082L9.52671 10.8541L6 8.2918L2.47329 10.8541L3.82037 6.7082L0.293661 4.1459H4.65292L6 0Z" fill="#FFD600"/>
                </svg>
                <svg width="12" height="11" viewBox="0 0 12 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M6 0L7.34708 4.1459H11.7063L8.17963 6.7082L9.52671 10.8541L6 8.2918L2.47329 10.8541L3.82037 6.7082L0.293661 4.1459H4.65292L6 0Z" fill="#FFD600"/>
                </svg>
                <svg width="12" height="11" viewBox="0 0 12 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M6 0L7.34708 4.1459H11.7063L8.17963 6.7082L9.52671 10.8541L6 8.2918L2.47329 10.8541L3.82037 6.7082L0.293661 4.1459H4.65292L6 0Z" fill="#FFD600"/>
                </svg>
                <svg width="12" height="11" viewBox="0 0 12 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M6 0L7.34708 4.1459H11.7063L8.17963 6.7082L9.52671 10.8541L6 8.2918L2.47329 10.8541L3.82037 6.7082L0.293661 4.1459H4.65292L6 0Z" fill="#FFD600"/>
                </svg>
                <svg width="12" height="11" viewBox="0 0 12 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M6 0L7.34708 4.1459H11.7063L8.17963 6.7082L9.52671 10.8541L6 8.2918L2.47329 10.8541L3.82037 6.7082L0.293661 4.1459H4.65292L6 0Z" fill="#FFD600"/>
                </svg>

            </div>
            <p class="text-neutral-500 mt-3">
                Pertama kali beli di Nawasena, puas sama pelayanannya. Barangnya juga bagus kualitasnya :D
            </p>
        </div>

    </div>
    <!-- Footer -->
    <footer class="footer-1 bg-gray-100 py-8 sm:py-12 bg-red-800 text-white">
        <div class="container mx-auto px-4">
        <h5 class="text-4xl font-bold mb-6 w-full text-center">Nawasena Aisma Persada</h5>
          <div class="py-4 flex px-14 justify-between w-full">
            <div class=" mt-8 md:mt-0">
              <ul class="list-none footer-links">
                <li class="mb-2">
                  <a href="#" class="border-b border-solid border-transparent hover:border-purple-800 hover:text-purple-800">About</a>
                </li>
                <li class="mb-2">
                  <a href="#" class="border-b border-solid border-transparent hover:border-purple-800 hover:text-purple-800">Products</a>
                </li>
                <li class="mb-2">
                  <a href="#" class="border-b border-solid border-transparent hover:border-purple-800 hover:text-purple-800">Merchants</a>
                </li>
                <li class="mb-2">
                  <a href="#" class="border-b border-solid border-transparent hover:border-purple-800 hover:text-purple-800">Partners</a>
                </li>
                <li class="mb-2">
                    <a href="#" class="border-b border-solid border-transparent hover:border-purple-800 hover:text-purple-800">Contact</a>
                  </li>
              </ul>
            </div>
            <div class=" mt-8 md:mt-0">
              <ul class="list-none footer-links">
                <li class="mb-2">
                  <a href="#" class="border-b border-solid border-transparent hover:border-purple-800 hover:text-purple-800">Email</a>
                </li>
                <li class="mb-2">
                  <a href="#" class="border-b border-solid border-transparent hover:border-purple-800 hover:text-purple-800">Phone</a>
                </li>
                <li class="mb-2">
                  <a href="#" class="border-b border-solid border-transparent hover:border-purple-800 hover:text-purple-800">Instagram</a>
                </li>
                <li class="mb-2">
                    <a href="#" class="border-b border-solid border-transparent hover:border-purple-800 hover:text-purple-800">Shopee</a>
                  </li>
                  <li class="mb-2">
                    <a href="#" class="border-b border-solid border-transparent hover:border-purple-800 hover:text-purple-800">Tokopedia</a>
                  </li>
              </ul>
            </div>
          </div>

          <div class="py-4 flex px-14 justify-between w-full">
            <div class=" mt-8 md:mt-0">
              <ul class="list-none footer-links">
                <li class="mb-2">
                  <a href="#" class="border-b border-solid border-transparent hover:border-purple-800 hover:text-purple-800">082110112399</a>
                </li>
                <li class="mb-2">
                  <a href="#" class="border-b border-solid border-transparent hover:border-purple-800 hover:text-purple-800">Contact Us</a>
                </li>
              </ul>
            </div>
            <h5>© 2023 Nawasena Aisma Persada. All rights reserved.</h5>
          </div>
        </div>
      </footer>

    </div>

    </div>
</body>
</html>
