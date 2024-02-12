
<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>About</title>
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
                <div class="pt-24 pb-16 container mx-auto px-10 bg-OFFWHITE">
                    <h2 class="text-4xl mb-7">About Us</h2>
                    <img width="100%" src="./assets/about.webp" />
                    <article class="text-lg mt-14">
                        <p>
                            Eco Living Vibes was founded with a simple mission
                            in mind: to help people live more sustainably and in
                            harmony with nature. We believe that every small
                            step we take towards a greener lifestyle can make a
                            huge difference in preserving our planet for future
                            generations.
                        </p>
                        <p class="my-10">
                            Our team is made up of passionate environmentalists,
                            <a class="text-LIGHTYELLOW cursor-pointer underline"
                                >sustainability</a
                            >
                            experts, and writers who are committed to sharing
                            their knowledge and expertise with the world. Our
                            aim is to empower and inspire our readers to adopt
                            eco-friendly habits and practices in their everyday
                            lives.
                        </p>
                        <p>
                            We believe in a holistic approach to sustainable
                            living. We cover a wide range of topics related to
                            eco-living, including off-grid living,
                            <a class="text-LIGHTYELLOW cursor-pointer underline"
                                >sustainable urban living, sustainable living
                                ideas</a
                            >
                            , zero-waste living,
                            <a class="text-LIGHTYELLOW cursor-pointer underline"
                                >sustainable fashion</a
                            >, and more. We provide valuable insights, tips, and
                            resources to help our readers live a greener and
                            more fulfilling life.
                        </p>
                        <p class="my-10">
                            But we don’t just stop at blog posts. We also offer
                            courses and products that are designed to help our
                            readers adopt a more sustainable lifestyle. Our
                            courses cover a variety of topics, including
                            eco-friendly home design, sustainable gardening, and
                            zero-waste living. And our products range from
                            eco-friendly cleaning supplies to sustainable
                            fashion and accessories.
                        </p>
                        <p>
                            At Eco Living Vibes, we’re committed to creating a
                            community of like-minded individuals who share our
                            vision of a more sustainable future. We believe that
                            together, we can make a difference and create a
                            better world for ourselves and for future
                            generations.
                        </p>
                        <p class="mt-10 font-medium">
                            Thank you for joining us on this journey towards a
                            greener and more sustainable future. Browse our
                            blog, sign up for our courses, or shop our products
                            today to start your own journey towards a more
                            eco-friendly lifestyle.
                        </p>
                    </article>
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
            let toTop = document.querySelector(".to-top");

            navClick.addEventListener("click", function () {
                navBar.classList.toggle("hidden");
            });
        </script>
    </body>
</html>
