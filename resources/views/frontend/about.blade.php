
<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>About</title>
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
                <div class="pt-32 pb-16 container mx-auto px-2 text-justify">
                    <h2
                        class="xl:text-5xl lg:text-4xl md:text-3xl text-2xl font-semibold mb-16 uppercase text-center"
                    >
                        About Planet and Power
                    </h2>
                    <img
                        width="100%"
                        src="./assets/About Author featured image.png"
                    />
                    <article class="text-lg mt-14">
                        <p>
                            Hello, Welcome to our resourceful and data-driven
                            website dedicated to all things green energy,
                            sustainability, environment, climate change, and
                            environmental news. We understand the importance of
                            staying informed about the pressing issues our
                            planet faces today, and we are here to provide you
                            with the most up-to-date and relevant information.
                        </p>
                        <p class="my-10">
                            Our website is a go-to source for those who are
                            passionate about making a positive impact on our
                            planet. Whether you are an individual looking for
                            ways to live a more sustainable lifestyle or a
                            business seeking innovative solutions in the green
                            energy sector, we have you covered.
                        </p>
                        <p>
                            We pride ourselves on curating accurate and
                            insightful content that delves deep into topics such
                            as renewable energy sources, eco-friendly practices,
                            carbon footprint reduction strategies, and much
                            more. Our team of dedicated researchers ensures that
                            every piece of information presented on our platform
                            is backed by reliable data and trustworthy sources.
                        </p>
                        <p class="my-10">
                            Climate change is an urgent global issue that
                            requires immediate attention. By providing
                            comprehensive coverage of climate-related news and
                            developments around the world, we aim to keep you
                            well informed about the challenges we face as a
                            society. Additionally, we strive to highlight
                            success stories and groundbreaking initiatives that
                            inspire positive change.
                        </p>
                        <p>
                            Whether you are seeking guidance on how to make your
                            home more energy-efficient or searching for an
                            in-depth analysis of current environmental policies,
                            our website offers a wealth of resources at your
                            fingertips. Together, let's work towards creating a
                            greener future for generations to come.
                        </p>
                        <p class="mt-10">
                            Explore our website today and join us in taking
                            meaningful steps toward preserving our planet's
                            health and power.
                        </p>
                        <p class="mt-10 font-medium">
                            Thank you for being here, and I look forward to
                            sharing this journey with you.
                        </p>
                    </article>
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
