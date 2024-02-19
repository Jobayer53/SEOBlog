
<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Plane&Power</title>
        <link href="{{asset('frontend_asset/assets/css/output.css')}}" rel="stylesheet" />
        <link href="{{asset('frontend_asset/assets/css/style.css')}}" rel="stylesheet" />
        <link rel="preconnect" href="https://fonts.googleapis.com" />
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
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
                <div class="relative !w-full lg:pt-[76px] flex justify-center">
                    <video
                        class="lg:h-[90vh] h-[100vh] w-full object-cover"
                        autoplay
                        muted
                        loop
                    >
                        <source src="{{asset('frontend_asset/assets/uyhbp.mp4')}}" type="video/mp4" />
                    </video>
                    <div
                        class="container bg-transparent px-2 mx-auto absolute flex flex-col justify-center items-start w-full h-full top-10"
                    >
                        <h1
                            class="lg:text-4xl md:text-3xl text-2xl bg-transparent font-bold text-white md:leading-[50px] sm:w-[60%]"
                        >
                            <span
                                class="Lg:text-5xl md:text-4xl text-3xl bg-transparent text-LIGHTBLUE font-[900]"
                                >GreenCitizen
                            </span>
                            is an environmental conservation company providing
                            you with information, services, & products to help
                            you live a sustainable life.
                        </h1>
                        <button
                            class="md:py-3 px-6 py-2 bg-LIGHTBLUE rounded-full mt-5 md:mt-10 text-white md:text-lg font-medium"
                        >
                            Learn more
                        </button>
                    </div>
                </div>
            </section>

            <section>
                <div
                    class="container lg:py-20 py-10 mx-auto px-2 flex flex-wrap justify-between gap-y-5"
                >
                    <div
                        class="lg:p-5 sm:p-3 px-2 py-4 box_shadow rounded-md flex flex-col items-center gap-y-4 lg:w-[15%] w-[48%] sm:w-[32%]"
                    >
                        <img class="lg:w-14 w-10" src="./assets//house.svg" />
                        <p class="lg:font-medium">
                            <a>Green Living Guides</a>
                        </p>
                    </div>
                    <div
                        class="lg:p-5 sm:p-3 px-2 py-4 box_shadow rounded-md flex flex-col items-center gap-y-4 lg:w-[15%] w-[48%] sm:w-[32%]"
                    >
                        <img class="lg:w-14 w-10" src="./assets//house.svg" />
                        <p class="lg:font-medium">
                            <a>Green Living Guides</a>
                        </p>
                    </div>
                    <div
                        class="lg:p-5 sm:p-3 px-2 py-4 box_shadow rounded-md flex flex-col items-center gap-y-4 lg:w-[15%] w-[48%] sm:w-[32%]"
                    >
                        <img class="lg:w-14 w-10" src="./assets//house.svg" />
                        <p class="lg:font-medium">
                            <a>Green Living Guides</a>
                        </p>
                    </div>
                    <div
                        class="lg:p-5 sm:p-3 px-2 py-4 box_shadow rounded-md flex flex-col items-center gap-y-4 lg:w-[15%] w-[48%] sm:w-[32%]"
                    >
                        <img class="lg:w-14 w-10" src="./assets//house.svg" />
                        <p class="lg:font-medium">
                            <a>Green Living Guides</a>
                        </p>
                    </div>
                    <div
                        class="lg:p-5 sm:p-3 px-2 py-4 box_shadow rounded-md flex flex-col items-center gap-y-4 lg:w-[15%] w-[48%] sm:w-[32%]"
                    >
                        <img class="lg:w-14 w-10" src="./assets//house.svg" />
                        <p class="lg:font-medium">
                            <a>Green Living Guides</a>
                        </p>
                    </div>
                    <div
                        class="lg:p-5 sm:p-3 px-2 py-4 box_shadow rounded-md flex flex-col items-center gap-y-4 lg:w-[15%] w-[48%] sm:w-[32%]"
                    >
                        <img class="lg:w-14 w-10" src="./assets//house.svg" />
                        <p class="lg:font-medium">
                            <a>Green Living Guides</a>
                        </p>
                    </div>
                </div>
            </section>

            <section>
                <div
                    class="container mx-auto px-2 flex flex-wrap justify-between gap-y-16"
                >
                    <div class="lg:w-[31%] sm:w-[48%]">
                        <h2
                            class="pb-1 text-2xl xl:text-[32px] font-semibold border-b-[6px] border-b-LIGHTBLUE inline-block"
                        >
                            Holiday Posts
                        </h2>
                        <img
                            class="w-full h-[227px] my-5 rounded-lg shadow-md"
                            src="./assets/img1.jpg"
                        />
                        <a
                            class="xl:font-medium text-xl block cursor-pointer border-b pb-2 hover:text-LIGHTBLUE"
                            >12 Actionable and Sustainable New Year’s
                            Resolutions</a
                        >
                        <a
                            class="xl:text-lg my-5 block cursor-pointer border-b pb-2 hover:text-LIGHTBLUE"
                            >How to Recycle Christmas Tree Lights This Holiday
                            Season</a
                        >
                        <a
                            class="xl:text-lg block cursor-pointer border-b pb-2 hover:text-LIGHTBLUE"
                            >30+ Eco-Friendly Tips For A Sustainable Holiday</a
                        >
                        <a
                            class="my-5 xl:text-lg block cursor-pointer border-b pb-2 hover:text-LIGHTBLUE"
                            >Your Guide To An Eco-Friendly Christmas Tree</a
                        >
                        <button
                            class="xl:py-3 py-2 px-5 border-2 font-medium border-LIGHTBLUE rounded-full text-LIGHTBLUE"
                        >
                            View more
                        </button>
                    </div>
                    <div class="lg:w-[31%] sm:w-[48%]">
                        <h2
                            class="pb-1 text-2xl xl:text-[32px] font-semibold border-b-[6px] border-b-LIGHTBLUE inline-block"
                        >
                            Holiday Posts
                        </h2>
                        <img
                            class="w-full h-[227px] my-5 rounded-lg shadow-md"
                            src="./assets/img1.jpg"
                        />
                        <a
                            class="xl:font-medium text-xl block cursor-pointer border-b pb-2 hover:text-LIGHTBLUE"
                            >12 Actionable and Sustainable New Year’s
                            Resolutions</a
                        >
                        <a
                            class="xl:text-lg my-5 block cursor-pointer border-b pb-2 hover:text-LIGHTBLUE"
                            >How to Recycle Christmas Tree Lights This Holiday
                            Season</a
                        >
                        <a
                            class="xl:text-lg block cursor-pointer border-b pb-2 hover:text-LIGHTBLUE"
                            >30+ Eco-Friendly Tips For A Sustainable Holiday</a
                        >
                        <a
                            class="my-5 xl:text-lg block cursor-pointer border-b pb-2 hover:text-LIGHTBLUE"
                            >Your Guide To An Eco-Friendly Christmas Tree</a
                        >
                        <button
                            class="xl:py-3 py-2 px-5 border-2 font-medium border-LIGHTBLUE rounded-full text-LIGHTBLUE"
                        >
                            View more
                        </button>
                    </div>
                    <div class="lg:w-[31%] sm:w-[48%]">
                        <h2
                            class="pb-1 text-2xl xl:text-[32px] font-semibold border-b-[6px] border-b-LIGHTBLUE inline-block"
                        >
                            Holiday Posts
                        </h2>
                        <img
                            class="w-full h-[227px] my-5 rounded-lg shadow-md"
                            src="./assets/img1.jpg"
                        />
                        <a
                            class="xl:font-medium text-xl block cursor-pointer border-b pb-2 hover:text-LIGHTBLUE"
                            >12 Actionable and Sustainable New Year’s
                            Resolutions</a
                        >
                        <a
                            class="xl:text-lg my-5 block cursor-pointer border-b pb-2 hover:text-LIGHTBLUE"
                            >How to Recycle Christmas Tree Lights This Holiday
                            Season</a
                        >
                        <a
                            class="xl:text-lg block cursor-pointer border-b pb-2 hover:text-LIGHTBLUE"
                            >30+ Eco-Friendly Tips For A Sustainable Holiday</a
                        >
                        <a
                            class="my-5 xl:text-lg block cursor-pointer border-b pb-2 hover:text-LIGHTBLUE"
                            >Your Guide To An Eco-Friendly Christmas Tree</a
                        >
                        <button
                            class="xl:py-3 py-2 px-5 border-2 font-medium border-LIGHTBLUE rounded-full text-LIGHTBLUE"
                        >
                            View more
                        </button>
                    </div>
                    <div class="lg:w-[31%] sm:w-[48%]">
                        <h2
                            class="pb-1 text-2xl xl:text-[32px] font-semibold border-b-[6px] border-b-LIGHTBLUE inline-block"
                        >
                            Holiday Posts
                        </h2>
                        <img
                            class="w-full h-[227px] my-5 rounded-lg shadow-md"
                            src="./assets/img1.jpg"
                        />
                        <a
                            class="xl:font-medium text-xl block cursor-pointer border-b pb-2 hover:text-LIGHTBLUE"
                            >12 Actionable and Sustainable New Year’s
                            Resolutions</a
                        >
                        <a
                            class="xl:text-lg my-5 block cursor-pointer border-b pb-2 hover:text-LIGHTBLUE"
                            >How to Recycle Christmas Tree Lights This Holiday
                            Season</a
                        >
                        <a
                            class="xl:text-lg block cursor-pointer border-b pb-2 hover:text-LIGHTBLUE"
                            >30+ Eco-Friendly Tips For A Sustainable Holiday</a
                        >
                        <a
                            class="my-5 xl:text-lg block cursor-pointer border-b pb-2 hover:text-LIGHTBLUE"
                            >Your Guide To An Eco-Friendly Christmas Tree</a
                        >
                        <button
                            class="xl:py-3 py-2 px-5 border-2 font-medium border-LIGHTBLUE rounded-full text-LIGHTBLUE"
                        >
                            View more
                        </button>
                    </div>
                    <div class="lg:w-[31%] sm:w-[48%]">
                        <h2
                            class="pb-1 text-2xl xl:text-[32px] font-semibold border-b-[6px] border-b-LIGHTBLUE inline-block"
                        >
                            Holiday Posts
                        </h2>
                        <img
                            class="w-full h-[227px] my-5 rounded-lg shadow-md"
                            src="./assets/img1.jpg"
                        />
                        <a
                            class="xl:font-medium text-xl block cursor-pointer border-b pb-2 hover:text-LIGHTBLUE"
                            >12 Actionable and Sustainable New Year’s
                            Resolutions</a
                        >
                        <a
                            class="xl:text-lg my-5 block cursor-pointer border-b pb-2 hover:text-LIGHTBLUE"
                            >How to Recycle Christmas Tree Lights This Holiday
                            Season</a
                        >
                        <a
                            class="xl:text-lg block cursor-pointer border-b pb-2 hover:text-LIGHTBLUE"
                            >30+ Eco-Friendly Tips For A Sustainable Holiday</a
                        >
                        <a
                            class="my-5 xl:text-lg block cursor-pointer border-b pb-2 hover:text-LIGHTBLUE"
                            >Your Guide To An Eco-Friendly Christmas Tree</a
                        >
                        <button
                            class="xl:py-3 py-2 px-5 border-2 font-medium border-LIGHTBLUE rounded-full text-LIGHTBLUE"
                        >
                            View more
                        </button>
                    </div>
                    <div class="lg:w-[31%] sm:w-[48%]">
                        <h2
                            class="pb-1 text-2xl xl:text-[32px] font-semibold border-b-[6px] border-b-LIGHTBLUE inline-block"
                        >
                            Holiday Posts
                        </h2>
                        <img
                            class="w-full h-[227px] my-5 rounded-lg shadow-md"
                            src="./assets/img1.jpg"
                        />
                        <a
                            class="xl:font-medium text-xl block cursor-pointer border-b pb-2 hover:text-LIGHTBLUE"
                            >12 Actionable and Sustainable New Year’s
                            Resolutions</a
                        >
                        <a
                            class="xl:text-lg my-5 block cursor-pointer border-b pb-2 hover:text-LIGHTBLUE"
                            >How to Recycle Christmas Tree Lights This Holiday
                            Season</a
                        >
                        <a
                            class="xl:text-lg block cursor-pointer border-b pb-2 hover:text-LIGHTBLUE"
                            >30+ Eco-Friendly Tips For A Sustainable Holiday</a
                        >
                        <a
                            class="my-5 xl:text-lg block cursor-pointer border-b pb-2 hover:text-LIGHTBLUE"
                            >Your Guide To An Eco-Friendly Christmas Tree</a
                        >
                        <button
                            class="xl:py-3 py-2 px-5 border-2 font-medium border-LIGHTBLUE rounded-full text-LIGHTBLUE"
                        >
                            View more
                        </button>
                    </div>
                </div>
            </section>

            <section>
                <div class="container py-16 mx-auto px-2">
                    <h3
                        class="pb-1 text-2xl xl:text-[32px] font-semibold border-b-[6px] border-b-LIGHTBLUE inline-block"
                    >
                        Positive Green News
                    </h3>
                    <div class="sm:flex justify-between mt-8">
                        <div class="sm:w-[48%] mb-5 sm:mb-0">
                            <img
                                class="rounded-lg w-full h-[341px]"
                                src="./assets/img1.jpg"
                            />
                            <h4
                                class="font-medium mt-2 text-xl block cursor-pointer hover:underline transition ease-in-out delay-300"
                            >
                                Turning Animal Bones into Sustainable Food
                                Solutions
                            </h4>
                            <p class="font-medium">by Eunice Rodriguez</p>
                        </div>
                        <div class="sm:w-[48%]">
                            <div class="mb-4">
                                <h4
                                    class="font-medium text-lg block cursor-pointer hover:underline transition ease-in-out delay-300"
                                >
                                    NY Approves Con Edison’s $1.2B Clean Energy
                                    Milestone
                                </h4>
                                <p class="font-medium text-[#303030]">
                                    by Eunice Rodriguez
                                </p>
                            </div>
                            <div class="mb-4">
                                <h4
                                    class="font-medium text-lg block cursor-pointer hover:underline transition ease-in-out delay-300"
                                >
                                    NY Approves Con Edison’s $1.2B Clean Energy
                                    Milestone
                                </h4>
                                <p class="font-medium text-[#303030]">
                                    by Eunice Rodriguez
                                </p>
                            </div>
                            <div class="mb-4">
                                <h4
                                    class="font-medium text-lg block cursor-pointer hover:underline transition ease-in-out delay-300"
                                >
                                    NY Approves Con Edison’s $1.2B Clean Energy
                                    Milestone
                                </h4>
                                <p class="font-medium text-[#303030]">
                                    by Eunice Rodriguez
                                </p>
                            </div>
                            <div class="mb-4">
                                <h4
                                    class="font-medium text-lg block cursor-pointer hover:underline transition ease-in-out delay-300"
                                >
                                    NY Approves Con Edison’s $1.2B Clean Energy
                                    Milestone
                                </h4>
                                <p class="font-medium text-[#303030]">
                                    by Eunice Rodriguez
                                </p>
                            </div>
                            <div class="mb-4">
                                <h4
                                    class="font-medium text-lg block cursor-pointer hover:underline transition ease-in-out delay-300"
                                >
                                    NY Approves Con Edison’s $1.2B Clean Energy
                                    Milestone
                                </h4>
                                <p class="font-medium text-[#303030]">
                                    by Eunice Rodriguez
                                </p>
                            </div>
                            <div class="mb-4">
                                <h4
                                    class="font-medium text-lg block cursor-pointer hover:underline transition ease-in-out delay-300"
                                >
                                    NY Approves Con Edison’s $1.2B Clean Energy
                                    Milestone
                                </h4>
                                <p class="font-medium text-[#303030]">
                                    by Eunice Rodriguez
                                </p>
                            </div>
                            <div class="mb-4">
                                <h4
                                    class="font-medium text-lg block cursor-pointer hover:underline transition ease-in-out delay-300"
                                >
                                    NY Approves Con Edison’s $1.2B Clean Energy
                                    Milestone
                                </h4>
                                <p class="font-medium text-[#303030]">
                                    by Eunice Rodriguez
                                </p>
                            </div>
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

            navClick.addEventListener("click", function () {
                navBar.classList.toggle("hidden");
            });
        </script>
    </body>
</html>
