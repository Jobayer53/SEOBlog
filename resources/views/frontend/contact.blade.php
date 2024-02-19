
<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Contact</title>
        <link href="{{asset('frontend_asset/assets/css/output.css')}}" rel="stylesheet" />
        <link href="{{asset('frontend_asset/assets/css/style.css')}}" rel="stylesheet" />
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
        <header class="shadow-md fixed z-50 w-full text-black">
            <div class="container px-2 mx-auto flex justify-between py-3">
                <div class="lg:w-[30%]">
                    <img
                        class="w-[300px]"
                        src="{{asset('frontend_asset/assets/Green Thoughts, Clean Energ.png')}}"
                    />
                </div>
                <div class="lg:hidden w-[70%] flex justify-end items-center">
                    <i
                        class="fa-solid fa-bars cursor-pointer text-2xl navClick"
                    ></i>
                </div>
                <!-- Pc -->
                <nav class="lg:flex hidden lg:items-center lg:justify-end">
                    <ul class="flex gap-x-8 text-lg">
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
                                href="{{route('news_show')}}"
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
                <!-- mobile -->
                <nav
                    class="absolute hidden w-full top-14 sm:top-16 left-0 p-5 navBar"
                >
                    <ul class="flex flex-col gap-y-5">
                        <li>
                            <a href="{{route('index')}}" class="cursor-pointer">
                                Home
                            </a>
                        </li>
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
                            <a href="{{route('news_show')}}" class="cursor-pointer"> News </a>
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
                <div class="pt-32 pb-16 container mx-auto sm:px-10">
                    <h2 class="text-4xl lg:mb-7 font-semibold text-center">
                        Get In Touch With Us
                    </h2>
                    <div class="px-5 xl:py-16 py-8">
                        <div class="my-7">
                            <p>Name *</p>
                            <input required class="w-full border p-4 mt-2" />
                        </div>
                        <div class="my-7">
                            <p>Email *</p>
                            <input required class="w-full border p-4 mt-2" />
                        </div>
                        <div class="my-7">
                            <p>Subject *</p>
                            <input required class="w-full border p-4 mt-2" />
                        </div>
                        <div class="my-7">
                            <p>Message *</p>
                            <textarea
                                required
                                class="w-full h-48 border p-4 mt-2"
                            ></textarea>
                        </div>
                        <div>
                            <a
                                class="uppercase font-ru border cursor-pointer font-medium px-10 py-3 button"
                                ><span class="hoverspan"></span>Submit</a
                            >
                        </div>
                    </div>
                </div>
            </section>
        </main>

        <footer class="xl:pt-20">
            <div
                class="container mx-auto px-2 flex smd:max-md:flex-wrap smd:max-md:gap-y-7 md:gap-x-7 smd:max-sm:justify-between mb-10"
            >
                <div class="md:w-[40%] smd:max-md:w-full lg:pr-8">
                    <div>
                        <img
                            class="w-[300px]"
                            src="./assets/Green Thoughts, Clean Energ.png"
                        />
                    </div>
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
            <div class="border-t py-10">
                <div
                    class="container mx-auto smd:max-sm:text-xs px-2 flex justify-between"
                >
                    <div>
                        <p>Copyright © 2024 Planet & Power</p>
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
            let toTop = document.querySelector(".to-top");

            navClick.addEventListener("click", function () {
                navBar.classList.toggle("hidden");
            });
        </script>
    </body>
</html>
