
<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Blog</title>
        <link href="{{asset('frontend_asset/assets/css/output.css')}}" rel="stylesheet" />
        <link href="{{ asset('frontend_asset/assets/css/style.css')}}" rel="stylesheet" />
        <link rel="preconnect" href="https://fonts.googleapis.com" />
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
        <link
            href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;500;600;700;800;900&display=swap"
            rel="stylesheet"
        />
        <link
            rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
        />
    </head>
    <body>
        <header class="shadow-md fixed z-50 w-full bg-OFFWHITE text-black">
            <div class="container px-2 mx-auto flex justify-between py-5">
                <div class="font-semibold text-3xl">LOGO</div>
                <div class="lg:hidden">
                    <i
                        class="fa-solid fa-bars cursor-pointer text-2xl flex items-center navClick"
                    ></i>
                </div>
                <nav class="lg:flex hidden lg:items-center lg:justify-end">
                    <ul class="flex font-OS gap-x-8">
                        <li>
                            <a
                                class="listitem cursor-pointer transition duration-300 ease-in-out"
                                href="{{route('index')}}"
                            >
                                Home
                            </a>
                        </li>
                        <li class="navsubmanudiv">
                            <a
                                class="listitem cursor-pointer transition duration-300 ease-in-out pb-5"
                                href="{{route('blog')}}"
                            >
                                Blog
                            </a>
                            <span class="navsubmanu">
                                <ul class="flex flex-col gap-y-4 text-sm">
                                    <li
                                        class="hover:bg-[#d7d7d7] px-1 py-2 rounded cursor-pointer"
                                    >
                                        Soler panel cost
                                    </li>
                                    <li
                                        class="hover:bg-[#d7d7d7] px-1 py-2 rounded cursor-pointer"
                                    >
                                        Soler panel cost
                                    </li>
                                    <li
                                        class="hover:bg-[#d7d7d7] px-1 py-2 rounded cursor-pointer"
                                    >
                                        Soler panel cost
                                    </li>
                                    <li
                                        class="hover:bg-[#d7d7d7] px-1 py-2 rounded cursor-pointer"
                                    >
                                        Soler panel cost
                                    </li>
                                    <li
                                        class="hover:bg-[#d7d7d7] px-1 py-2 rounded cursor-pointer"
                                    >
                                        Soler panel cost
                                    </li>
                                </ul>
                            </span>
                        </li>
                        <li>
                            <a
                                class="listitem cursor-pointer transition duration-300 ease-in-out"
                            >
                                News
                            </a>
                        </li>
                        <li>
                            <a
                                class="listitem cursor-pointer transition duration-300 ease-in-out"
                                href="{{route('about')}}"
                            >
                                About
                            </a>
                        </li>
                        <li>
                            <a
                                href="{{route('contact')}}"
                                class="listitem cursor-pointer transition duration-300 ease-in-out"
                            >
                                Contact
                            </a>
                        </li>

                        <li>
                            <i class="fa-solid fa-magnifying-glass w-5"></i>
                        </li>
                    </ul>
                </nav>
                <nav
                    class="absolute hidden w-full bg-OFFWHITE top-16 left-0 p-5 navBar"
                >
                    <ul class="flex flex-col font-OS gap-y-5 overflow-y-scroll">
                        <li class="navsubmanudivsm">
                            <a
                                class="cursor-pointer transition duration-300 ease-in-out inline-block"
                                href="{{route('blog')}}"
                            >
                                Blog
                            </a>
                            <span class="navsubmanusm">
                                <ul class="flex flex-col gap-y-4 text-sm">
                                    <li
                                        class="hover:bg-[#d7d7d7] px-1 py-2 rounded cursor-pointer"
                                    >
                                        Soler panel cost
                                    </li>
                                    <li
                                        class="hover:bg-[#d7d7d7] px-1 py-2 rounded cursor-pointer"
                                    >
                                        Soler panel cost
                                    </li>
                                    <li
                                        class="hover:bg-[#d7d7d7] px-1 py-2 rounded cursor-pointer"
                                    >
                                        Soler panel cost
                                    </li>
                                    <li
                                        class="hover:bg-[#d7d7d7] px-1 py-2 rounded cursor-pointer"
                                    >
                                        Soler panel cost
                                    </li>
                                    <li
                                        class="hover:bg-[#d7d7d7] px-1 py-2 rounded cursor-pointer"
                                    >
                                        Soler panel cost
                                    </li>
                                </ul>
                            </span>
                        </li>
                        <li>
                            <a class="cursor-pointer"> News </a>
                        </li>
                        <li>
                            <a href="{{route('about')}}" class="cursor-pointer">
                                About
                            </a>
                        </li>
                        <li>
                            <a href="{{route('contact')}}" class="cursor-pointer">
                                Contact
                            </a>
                        </li>

                        <li>
                            <i class="fa-solid fa-magnifying-glass w-5"></i>
                        </li>
                    </ul>
                </nav>
            </div>
        </header>

        <main>
            <section>
                <div
                    class="pt-24 pb-16 container mx-auto px-2 bg-OFFWHITE flex justify-between"
                >
                    <div class="w-[78%] flex flex-col gap-y-5">
                        <div class="flex justify-between shadow p-3 rounded-md">
                            <div class="w-[40%]" id="hover_img">
                                <figure>
                                    <img
                                        width="100%"
                                        src="./assets/blogimg.jpg"
                                    />
                                </figure>
                            </div>
                            <div class="w-[58%]">
                                <ul class="flex gap-1 flex-wrap">
                                    <a
                                        class="hover:underline inline-block cursor-pointer hover:text-LIGHTBLUE"
                                    >
                                        Biodiversity
                                    </a>
                                    <span> . </span>
                                    <a
                                        class="hover:underline inline-block cursor-pointer hover:text-LIGHTBLUE"
                                    >
                                        Climate Change
                                    </a>
                                    <span> . </span>
                                    <a
                                        class="hover:underline inline-block cursor-pointer hover:text-LIGHTBLUE"
                                        >Conservation</a
                                    >
                                    <span> . </span>
                                    <a
                                        class="hover:underline inline-block cursor-pointer hover:text-LIGHTBLUE"
                                        >Ecology</a
                                    >
                                    <span> . </span>
                                    <a
                                        class="hover:underline inline-block cursor-pointer hover:text-LIGHTBLUE"
                                        >Environment</a
                                    >
                                    <span> . </span>
                                    <a
                                        class="hover:underline inline-block cursor-pointer hover:text-LIGHTBLUE"
                                        >Nature</a
                                    >
                                    <span> . </span>
                                    <a
                                        class="hover:underline inline-block cursor-pointer hover:text-LIGHTBLUE"
                                        >News Round-up</a
                                    >
                                    <span> . </span>
                                    <a
                                        class="hover:underline inline-block cursor-pointer hover:text-LIGHTBLUE"
                                        >Re-wilding
                                    </a>
                                    <span> . </span>
                                    <a
                                        class="hover:underline inline-block cursor-pointer hover:text-LIGHTBLUE"
                                        >Surveys</a
                                    >
                                    <span> . </span>
                                    <a
                                        class="hover:underline inline-block cursor-pointer hover:text-LIGHTBLUE"
                                        >Wildlife</a
                                    >
                                </ul>
                                <h2
                                    class="my-5 text-2xl font-medium hover:text-LIGHTBLUE cursor-pointer"
                                >
                                    <a href="readblog.html">
                                        Population of UK’s tallest bird hits
                                        record-breaking high
                                    </a>
                                </h2>
                                <time> 2nd February 2024 </time>
                            </div>
                        </div>
                        <div class="flex justify-between shadow p-3 rounded-md">
                            <div class="w-[40%]" id="hover_img">
                                <figure>
                                    <img
                                        width="100%"
                                        src="./assets/blogimg.jpg"
                                    />
                                </figure>
                            </div>
                            <div class="w-[58%]">
                                <ul class="flex gap-1 flex-wrap">
                                    <a
                                        class="hover:underline inline-block cursor-pointer hover:text-LIGHTBLUE"
                                    >
                                        Biodiversity
                                    </a>
                                    <span> . </span>
                                    <a
                                        class="hover:underline inline-block cursor-pointer hover:text-LIGHTBLUE"
                                    >
                                        Climate Change
                                    </a>
                                    <span> . </span>
                                    <a
                                        class="hover:underline inline-block cursor-pointer hover:text-LIGHTBLUE"
                                        >Conservation</a
                                    >
                                    <span> . </span>
                                    <a
                                        class="hover:underline inline-block cursor-pointer hover:text-LIGHTBLUE"
                                        >Ecology</a
                                    >
                                    <span> . </span>
                                    <a
                                        class="hover:underline inline-block cursor-pointer hover:text-LIGHTBLUE"
                                        >Environment</a
                                    >
                                    <span> . </span>
                                    <a
                                        class="hover:underline inline-block cursor-pointer hover:text-LIGHTBLUE"
                                        >Nature</a
                                    >
                                    <span> . </span>
                                    <a
                                        class="hover:underline inline-block cursor-pointer hover:text-LIGHTBLUE"
                                        >News Round-up</a
                                    >
                                    <span> . </span>
                                    <a
                                        class="hover:underline inline-block cursor-pointer hover:text-LIGHTBLUE"
                                        >Re-wilding
                                    </a>
                                    <span> . </span>
                                    <a
                                        class="hover:underline inline-block cursor-pointer hover:text-LIGHTBLUE"
                                        >Surveys</a
                                    >
                                    <span> . </span>
                                    <a
                                        class="hover:underline inline-block cursor-pointer hover:text-LIGHTBLUE"
                                        >Wildlife</a
                                    >
                                </ul>
                                <h2
                                    class="my-5 text-2xl font-medium hover:text-LIGHTBLUE cursor-pointer"
                                >
                                    <a>
                                        Population of UK’s tallest bird hits
                                        record-breaking high
                                    </a>
                                </h2>
                                <time> 2nd February 2024 </time>
                            </div>
                        </div>
                        <div class="flex justify-between shadow p-3 rounded-md">
                            <div class="w-[40%]" id="hover_img">
                                <figure>
                                    <img
                                        width="100%"
                                        src="./assets/blogimg.jpg"
                                    />
                                </figure>
                            </div>
                            <div class="w-[58%]">
                                <ul class="flex gap-1 flex-wrap">
                                    <a
                                        class="hover:underline inline-block cursor-pointer hover:text-LIGHTBLUE"
                                    >
                                        Biodiversity
                                    </a>
                                    <span> . </span>
                                    <a
                                        class="hover:underline inline-block cursor-pointer hover:text-LIGHTBLUE"
                                    >
                                        Climate Change
                                    </a>
                                    <span> . </span>
                                    <a
                                        class="hover:underline inline-block cursor-pointer hover:text-LIGHTBLUE"
                                        >Conservation</a
                                    >
                                    <span> . </span>
                                    <a
                                        class="hover:underline inline-block cursor-pointer hover:text-LIGHTBLUE"
                                        >Ecology</a
                                    >
                                    <span> . </span>
                                    <a
                                        class="hover:underline inline-block cursor-pointer hover:text-LIGHTBLUE"
                                        >Environment</a
                                    >
                                    <span> . </span>
                                    <a
                                        class="hover:underline inline-block cursor-pointer hover:text-LIGHTBLUE"
                                        >Nature</a
                                    >
                                    <span> . </span>
                                    <a
                                        class="hover:underline inline-block cursor-pointer hover:text-LIGHTBLUE"
                                        >News Round-up</a
                                    >
                                    <span> . </span>
                                    <a
                                        class="hover:underline inline-block cursor-pointer hover:text-LIGHTBLUE"
                                        >Re-wilding
                                    </a>
                                    <span> . </span>
                                    <a
                                        class="hover:underline inline-block cursor-pointer hover:text-LIGHTBLUE"
                                        >Surveys</a
                                    >
                                    <span> . </span>
                                    <a
                                        class="hover:underline inline-block cursor-pointer hover:text-LIGHTBLUE"
                                        >Wildlife</a
                                    >
                                </ul>
                                <h2
                                    class="my-5 text-2xl font-medium hover:text-LIGHTBLUE cursor-pointer"
                                >
                                    <a>
                                        Population of UK’s tallest bird hits
                                        record-breaking high
                                    </a>
                                </h2>
                                <time> 2nd February 2024 </time>
                            </div>
                        </div>
                    </div>
                    <div class="w-[20%] bg-gray-100"></div>
                </div>
            </section>
        </main>

        <footer class="bg-OFFWHITE py-20">
            <div
                class="container mx-auto px-2 flex smd:max-md:flex-wrap smd:max-md:gap-y-7 md:gap-x-7 smd:max-sm:justify-between font-OS"
            >
                <div class="md:w-[40%] smd:max-md:w-full lg:pr-8">
                    <div class="font-semibold text-3xl">LOGO</div>
                    <p class="my-7 text-justify">
                        We provide valuable insights, tips, and resources for
                        those interested in living an eco-friendly lifestyle. We
                        aim to promote a more sustainable and fulfilling life in
                        harmony with nature.
                    </p>
                    <div class="flex gap-x-5 text-3xl text-LIGHTBLUE">
                        <i class="fa-brands fa-facebook"></i>
                        <i class="fa-brands fa-instagram"></i>
                        <i class="fa-brands fa-youtube"></i>
                        <i class="fa-brands fa-twitter"></i>
                        <i class="fa-brands fa-pinterest"></i>
                    </div>
                </div>
                <div class="w-[20%] smd:max-md:w-[30%]">
                    <h6 class="font-semibold text-xl lg:text-3xl">About</h6>
                    <div class="mt-7">
                        <ul class="flex flex-col gap-y-3">
                            <li>
                                <a>Our Story</a>
                            </li>
                            <li>
                                <a>Sustainable Living Ideas</a>
                            </li>
                            <li>
                                <a>Sustainable Living Off Grid</a>
                            </li>
                            <li>
                                <a>Sustainable Urban Living</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="w-[20%] smd:max-md:w-[30%]">
                    <h6 class="font-semibold text-xl lg:text-3xl">
                        Other Info
                    </h6>
                    <div class="mt-7">
                        <ul class="flex flex-col gap-y-3">
                            <li>
                                <a href="privacypolicy.html">Privacy Policy</a>
                            </li>
                            <li>
                                <a>Terms & Conditions</a>
                            </li>
                            <li>
                                <a>Disclaimer</a>
                            </li>
                            <li>
                                <a>Opt-out preferences</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="w-[20%] smd:max-md:w-[30%]">
                    <h6 class="font-semibold text-xl lg:text-3xl">
                        Customer Service
                    </h6>
                    <div class="mt-7">
                        <ul class="flex flex-col gap-y-3">
                            <li>
                                <a>Contact</a>
                            </li>
                            <li>
                                <a>FAQ’s</a>
                            </li>
                            <li>
                                <a>Guest Blogging Guidelines</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="border-t pt-16 mt-16">
                <div
                    class="container mx-auto smd:max-sm:text-xs px-2 flex justify-between font-OS"
                >
                    <div>
                        <p>
                            Copyright © 2024
                            <a
                                class="text-LIGHTBLUE font-medium"
                                href="https://synexdigital.com/"
                                >Synex Digital</a
                            >
                        </p>
                    </div>
                    <div>
                        Powered by
                        <a
                            class="text-LIGHTBLUE font-medium"
                            href="https://synexdigital.com/"
                            >Synex Digital</a
                        >
                    </div>
                </div>
            </div>
        </footer>

        <script>
            let navClick = document.querySelector(".navClick");
            let navBar = document.querySelector(".navBar");

            navClick.addEventListener("click", function () {
                navBar.classList.toggle("hidden");
            });
        </script>
    </body>
</html>
