
<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Document</title>
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
            <section class="pt-24 pb-7">
                <div
                    class="container mx-auto py-3 px-10 bg-OFFWHITE text-LIGHTBLUE"
                >
                    <a class="hover:underline" href="index.html">Home </a>
                    <span>
                        > Butterfly egg chasers defy freezing cold to count a
                        winning streak</span
                    >
                </div>
            </section>
            <section>
                <div class="container mx-auto p-10 bg-OFFWHITE">
                    <ul class="flex gap-1 flex-wrap text-LIGHTBLUE mb-5">
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
                    <h2 class="font-bold text-5xl">Table Of Contents</h2>
                    <p class="mt-5 mb-7 text-lg">
                        130+ DIY Projects Broken Down By Time & Skill Level
                    </p>
                    <div class="text-LIGHTBLUE font-medium text-lg">
                        <a href="#one" class="underline hover:text-[#2c7da9]"
                            >One Day Projects: EASY
                        </a>
                        <br />
                        <a href="#two" class="underline hover:text-[#2c7da9]"
                            >One Day Projects: EASY
                        </a>
                        <br />
                        <a href="#three" class="underline hover:text-[#2c7da9]"
                            >One Day Projects: EASY
                        </a>
                        <br />
                        <a href="#four" class="underline hover:text-[#2c7da9]"
                            >One Day Projects: EASY
                        </a>
                        <br />
                        <a href="#five" class="underline hover:text-[#2c7da9]"
                            >One Day Projects: EASY
                        </a>
                        <br />
                        <a href="#six" class="underline hover:text-[#2c7da9]"
                            >One Day Projects: EASY
                        </a>
                        <br />
                        <a class="underline hover:text-[#2c7da9]"
                            >One Day Projects: EASY
                        </a>
                        <br />
                        <a class="underline hover:text-[#2c7da9]"
                            >One Day Projects: EASY
                        </a>
                        <br />
                    </div>
                </div>
            </section>

            <section id="one">
                <div class="container bg-OFFWHITE mx-auto pt-[76px] pb-16">
                    <div
                        class="w-full mx-auto h-[80px] relative bg-LIGHTYELLOW flex justify-center items-center border_shape font-semibold text-3xl text-black"
                    >
                        <div class="border_shape_left"></div>
                        <div class="border_shape_right"></div>
                        <h2>More About My Business Coaching Service</h2>
                    </div>
                    <div class="mt-10 px-10">
                        <h2 class="font-semibold mt-7 text-4xl mb-7">
                            Rainwater Collection Barrel
                        </h2>
                        <p class="text-lg mt-5">
                            Harvesting rainwater is an excellent way to conserve
                            water and reduce your
                            <a class="text-LIGHTYELLOW cursor-pointer underline"
                                >environmental impact</a
                            >
                            . All you need is a large barrel, a downspout
                            diverter, and a faucet. Install the diverter on your
                            downspout, connect it to the barrel, and attach the
                            faucet for easy water access.
                        </p>
                        <p class="text-lg mt-5">
                            For more information on how to make a cheap water
                            collection system we highly recommend reading
                            <a class="text-LIGHTYELLOW cursor-pointer underline"
                                >The Self-Sufficient Backyard</a
                            >
                            . From this comprehensive guide you will find out
                            how to make the simplest water collection system and
                            how you can easily implement it on
                        </p>
                        <p class="text-lg">
                            My name is Alex Genadinik. I am a serial
                            entrepreneur and the creator of the Problemio mobile
                            apps for business which are some of the top business
                            apps on iPhone and Android. I am also a 3-time
                            bestselling author on Amazon, and a prolific online
                            teacher with 100,000+ students and over 100 courses.
                        </p>
                    </div>
                </div>
            </section>
            <section id="two">
                <div class="container bg-OFFWHITE mx-auto pt-[76px] pb-16">
                    <div
                        class="w-full mx-auto h-[80px] relative bg-LIGHTYELLOW flex justify-center items-center border_shape font-semibold text-3xl text-black"
                    >
                        <div class="border_shape_left"></div>
                        <div class="border_shape_right"></div>
                        <h2>More About My Business Coaching Service</h2>
                    </div>
                    <div class="mt-10 px-10">
                        <h2 class="font-semibold mt-7 text-4xl mb-7">
                            Rainwater Collection Barrel
                        </h2>
                        <p class="text-lg mt-5">
                            Harvesting rainwater is an excellent way to conserve
                            water and reduce your
                            <a class="text-LIGHTYELLOW cursor-pointer underline"
                                >environmental impact</a
                            >
                            . All you need is a large barrel, a downspout
                            diverter, and a faucet. Install the diverter on your
                            downspout, connect it to the barrel, and attach the
                            faucet for easy water access.
                        </p>
                        <p class="text-lg mt-5">
                            For more information on how to make a cheap water
                            collection system we highly recommend reading
                            <a class="text-LIGHTYELLOW cursor-pointer underline"
                                >The Self-Sufficient Backyard</a
                            >
                            . From this comprehensive guide you will find out
                            how to make the simplest water collection system and
                            how you can easily implement it on
                        </p>
                        <p class="text-lg">
                            My name is Alex Genadinik. I am a serial
                            entrepreneur and the creator of the Problemio mobile
                            apps for business which are some of the top business
                            apps on iPhone and Android. I am also a 3-time
                            bestselling author on Amazon, and a prolific online
                            teacher with 100,000+ students and over 100 courses.
                        </p>
                    </div>
                </div>
            </section>
            <section id="three">
                <div class="container bg-OFFWHITE mx-auto pt-[76px] pb-16">
                    <div
                        class="w-full mx-auto h-[80px] relative bg-LIGHTYELLOW flex justify-center items-center border_shape font-semibold text-3xl text-black"
                    >
                        <div class="border_shape_left"></div>
                        <div class="border_shape_right"></div>
                        <h2>More About My Business Coaching Service</h2>
                    </div>
                    <div class="mt-10 px-10">
                        <h2 class="font-semibold mt-7 text-4xl mb-7">
                            Rainwater Collection Barrel
                        </h2>
                        <p class="text-lg mt-5">
                            Harvesting rainwater is an excellent way to conserve
                            water and reduce your
                            <a class="text-LIGHTYELLOW cursor-pointer underline"
                                >environmental impact</a
                            >
                            . All you need is a large barrel, a downspout
                            diverter, and a faucet. Install the diverter on your
                            downspout, connect it to the barrel, and attach the
                            faucet for easy water access.
                        </p>
                        <p class="text-lg mt-5">
                            For more information on how to make a cheap water
                            collection system we highly recommend reading
                            <a class="text-LIGHTYELLOW cursor-pointer underline"
                                >The Self-Sufficient Backyard</a
                            >
                            . From this comprehensive guide you will find out
                            how to make the simplest water collection system and
                            how you can easily implement it on
                        </p>
                        <p class="text-lg">
                            My name is Alex Genadinik. I am a serial
                            entrepreneur and the creator of the Problemio mobile
                            apps for business which are some of the top business
                            apps on iPhone and Android. I am also a 3-time
                            bestselling author on Amazon, and a prolific online
                            teacher with 100,000+ students and over 100 courses.
                        </p>
                    </div>
                </div>
            </section>
            <section id="four">
                <div class="container bg-OFFWHITE mx-auto pt-[76px] pb-16">
                    <div
                        class="w-full mx-auto h-[80px] relative bg-LIGHTYELLOW flex justify-center items-center border_shape font-semibold text-3xl text-black"
                    >
                        <div class="border_shape_left"></div>
                        <div class="border_shape_right"></div>
                        <h2>More About My Business Coaching Service</h2>
                    </div>
                    <div class="mt-10 px-10">
                        <h2 class="font-semibold mt-7 text-4xl mb-7">
                            Rainwater Collection Barrel
                        </h2>
                        <p class="text-lg mt-5">
                            Harvesting rainwater is an excellent way to conserve
                            water and reduce your
                            <a class="text-LIGHTYELLOW cursor-pointer underline"
                                >environmental impact</a
                            >
                            . All you need is a large barrel, a downspout
                            diverter, and a faucet. Install the diverter on your
                            downspout, connect it to the barrel, and attach the
                            faucet for easy water access.
                        </p>
                        <p class="text-lg mt-5">
                            For more information on how to make a cheap water
                            collection system we highly recommend reading
                            <a class="text-LIGHTYELLOW cursor-pointer underline"
                                >The Self-Sufficient Backyard</a
                            >
                            . From this comprehensive guide you will find out
                            how to make the simplest water collection system and
                            how you can easily implement it on
                        </p>
                        <p class="text-lg">
                            My name is Alex Genadinik. I am a serial
                            entrepreneur and the creator of the Problemio mobile
                            apps for business which are some of the top business
                            apps on iPhone and Android. I am also a 3-time
                            bestselling author on Amazon, and a prolific online
                            teacher with 100,000+ students and over 100 courses.
                        </p>
                    </div>
                </div>
            </section>
            <section id="five">
                <div class="container bg-OFFWHITE mx-auto pt-[76px] pb-16">
                    <div
                        class="w-full mx-auto h-[80px] relative bg-LIGHTYELLOW flex justify-center items-center border_shape font-semibold text-3xl text-black"
                    >
                        <div class="border_shape_left"></div>
                        <div class="border_shape_right"></div>
                        <h2>More About My Business Coaching Service</h2>
                    </div>
                    <div class="mt-10 px-10">
                        <h2 class="font-semibold mt-7 text-4xl mb-7">
                            Rainwater Collection Barrel
                        </h2>
                        <p class="text-lg mt-5">
                            Harvesting rainwater is an excellent way to conserve
                            water and reduce your
                            <a class="text-LIGHTYELLOW cursor-pointer underline"
                                >environmental impact</a
                            >
                            . All you need is a large barrel, a downspout
                            diverter, and a faucet. Install the diverter on your
                            downspout, connect it to the barrel, and attach the
                            faucet for easy water access.
                        </p>
                        <p class="text-lg mt-5">
                            For more information on how to make a cheap water
                            collection system we highly recommend reading
                            <a class="text-LIGHTYELLOW cursor-pointer underline"
                                >The Self-Sufficient Backyard</a
                            >
                            . From this comprehensive guide you will find out
                            how to make the simplest water collection system and
                            how you can easily implement it on
                        </p>
                        <p class="text-lg">
                            My name is Alex Genadinik. I am a serial
                            entrepreneur and the creator of the Problemio mobile
                            apps for business which are some of the top business
                            apps on iPhone and Android. I am also a 3-time
                            bestselling author on Amazon, and a prolific online
                            teacher with 100,000+ students and over 100 courses.
                        </p>
                    </div>
                </div>
            </section>
            <section id="six">
                <div class="container bg-OFFWHITE mx-auto pt-[76px] pb-16">
                    <div
                        class="w-full mx-auto h-[80px] relative bg-LIGHTYELLOW flex justify-center items-center border_shape font-semibold text-3xl text-black"
                    >
                        <div class="border_shape_left"></div>
                        <div class="border_shape_right"></div>
                        <h2>More About My Business Coaching Service</h2>
                    </div>
                    <div class="mt-10 px-10">
                        <h2 class="font-semibold mt-7 text-4xl mb-7">
                            Rainwater Collection Barrel
                        </h2>
                        <p class="text-lg mt-5">
                            Harvesting rainwater is an excellent way to conserve
                            water and reduce your
                            <a class="text-LIGHTYELLOW cursor-pointer underline"
                                >environmental impact</a
                            >
                            . All you need is a large barrel, a downspout
                            diverter, and a faucet. Install the diverter on your
                            downspout, connect it to the barrel, and attach the
                            faucet for easy water access.
                        </p>
                        <p class="text-lg mt-5">
                            For more information on how to make a cheap water
                            collection system we highly recommend reading
                            <a class="text-LIGHTYELLOW cursor-pointer underline"
                                >The Self-Sufficient Backyard</a
                            >
                            . From this comprehensive guide you will find out
                            how to make the simplest water collection system and
                            how you can easily implement it on
                        </p>
                        <p class="text-lg">
                            My name is Alex Genadinik. I am a serial
                            entrepreneur and the creator of the Problemio mobile
                            apps for business which are some of the top business
                            apps on iPhone and Android. I am also a 3-time
                            bestselling author on Amazon, and a prolific online
                            teacher with 100,000+ students and over 100 courses.
                        </p>
                    </div>
                </div>
            </section>

            <section>
                <div class="container bg-OFFWHITE mx-auto px-10">
                    <div class="border-t-2 mx-auto pt-10 max-w-[300px]"></div>
                    <p class="font-medium">
                        Main image: Berkshire, Buckinghamshire & Oxfordshire
                        Wildlife Trust’s hairstreak butterfly egg count at
                        Leaches Farm Nature Reserve near Bicester. Picture:
                        Hayley Beck
                    </p>
                    <div class="mt-5 flex gap-x-4">
                        <a class="cursor-pointer">
                            <i
                                class="fa-brands fa-facebook text-4xl text-[#316FF6]"
                            >
                            </i>
                        </a>
                        <a class="cursor-pointer">
                            <img class="w-8" src="./assets/x-twitter.svg" />
                        </a>
                        <a class="cursor-pointer"
                            ><i
                                class="fa-brands fa-linkedin text-4xl text-[#0077B5]"
                            ></i
                        ></a>
                        <a class="cursor-pointer"
                            ><i
                                class="fa-brands fa-pinterest text-4xl text-[#E60023]"
                            ></i
                        ></a>
                        <a class="cursor-pointer"
                            ><i
                                class="fa-brands fa-reddit-alien text-4xl text-[#FF5700]"
                            ></i
                        ></a>
                    </div>
                </div>
            </section>

            <section>
                <div class="container mx-auto px-10 pb-16 bg-OFFWHITE">
                    <h6
                        class="text-center font-semibold text-2xl mb-8 border-b pb-7"
                    >
                        You may also like
                    </h6>
                    <div class="flex justify-between flex-wrap gap-y-4">
                        <div class="w-[48%] shadow-md flex" id="hover_img">
                            <figure>
                                <img
                                    class="w-[200px] h-[150px] object-cover]"
                                    src="./assets/blogimg.jpg"
                                />
                            </figure>
                            <a
                                class="cursor-pointer ml-2 font-medium hover:text-LIGHTBLUE"
                                >Population of UK’s tallest bird hits
                                record-breaking high</a
                            >
                        </div>
                        <div class="w-[48%] shadow-md flex" id="hover_img">
                            <figure>
                                <img
                                    class="w-[200px] h-[150px] object-cover]"
                                    src="./assets/blogimg.jpg"
                                />
                            </figure>
                            <a
                                class="cursor-pointer ml-2 font-medium hover:text-LIGHTBLUE"
                                >Population of UK’s tallest bird hits
                                record-breaking high</a
                            >
                        </div>
                        <div class="w-[48%] shadow-md flex" id="hover_img">
                            <figure>
                                <img
                                    class="w-[200px] h-[150px] object-cover]"
                                    src="./assets/blogimg.jpg"
                                />
                            </figure>
                            <a
                                class="cursor-pointer ml-2 font-medium hover:text-LIGHTBLUE"
                                >Population of UK’s tallest bird hits
                                record-breaking high</a
                            >
                        </div>
                        <div class="w-[48%] shadow-md flex" id="hover_img">
                            <figure>
                                <img
                                    class="w-[200px] h-[150px] object-cover]"
                                    src="./assets/blogimg.jpg"
                                />
                            </figure>
                            <a
                                class="cursor-pointer ml-2 font-medium hover:text-LIGHTBLUE"
                                >Population of UK’s tallest bird hits
                                record-breaking high</a
                            >
                        </div>
                        <div class="w-[48%] shadow-md flex" id="hover_img">
                            <figure>
                                <img
                                    class="w-[200px] h-[150px] object-cover]"
                                    src="./assets/blogimg.jpg"
                                />
                            </figure>
                            <a
                                class="cursor-pointer ml-2 font-medium hover:text-LIGHTBLUE"
                                >Population of UK’s tallest bird hits
                                record-breaking high</a
                            >
                        </div>
                        <div class="w-[48%] shadow-md flex" id="hover_img">
                            <figure>
                                <img
                                    class="w-[200px] h-[150px] object-cover]"
                                    src="./assets/blogimg.jpg"
                                />
                            </figure>
                            <a
                                class="cursor-pointer ml-2 font-medium hover:text-LIGHTBLUE"
                                >Population of UK’s tallest bird hits
                                record-breaking high</a
                            >
                        </div>
                    </div>
                </div>
            </section>

            <!-- <section>
                <div class="container mx-auto px-10 pb-16 bg-OFFWHITE">
                    <h2 class="font-bold mt-7 text-5xl mb-7">
                        THE Sustainable Living Blog
                    </h2>
                    <p class="text-lg mt-5">
                        Harvesting rainwater is an excellent way to conserve
                        water and reduce your
                        <a class="text-LIGHTYELLOW cursor-pointer underline"
                            >environmental impact</a
                        >
                        . All you need is a large barrel, a downspout diverter,
                        and a faucet. Install the diverter on your downspout,
                        connect it to the barrel, and attach the faucet for easy
                        water access.
                    </p>
                    <h2 class="font-semibold mt-7 text-4xl mb-10">
                        Latest Urban Sustainability Articles
                    </h2>
                    <div class="flex justify-between">
                        <div
                            class="w-[24%] cursor-pointer bg-white flex flex-col gap-y-5"
                            id="hover_img"
                        >
                            <figure>
                                <img src="./assets/img1.jpg" />
                            </figure>
                            <h3
                                class="text-LIGHTBLUE text-2xl mx-2 font-semibold"
                            >
                                The Rise of the IoT Smart City: How it’s
                                Transforming Urban Living
                            </h3>
                            <p class="text-lg mx-2">
                                The Future is Now: IoT Smart City What is IoT?
                                The Internet of Things, commonly referred to as
                                IoT, has been around
                            </p>
                            <a class="text-lg underline mx-2 mb-5"
                                >Read More »</a
                            >
                        </div>
                        <div
                            class="w-[24%] cursor-pointer bg-white flex flex-col gap-y-5"
                            id="hover_img"
                        >
                            <figure>
                                <img class="" src="./assets/img1.jpg" />
                            </figure>
                            <h3
                                class="text-LIGHTBLUE text-2xl mx-2 font-semibold"
                            >
                                The Rise of the IoT Smart City: How it’s
                                Transforming Urban Living
                            </h3>
                            <p class="text-lg mx-2">
                                The Future is Now: IoT Smart City What is IoT?
                                The Internet of Things, commonly referred to as
                                IoT, has been around
                            </p>
                            <a class="text-lg underline mx-2 mb-5"
                                >Read More »</a
                            >
                        </div>
                        <div
                            class="w-[24%] cursor-pointer bg-white flex flex-col gap-y-5"
                            id="hover_img"
                        >
                            <figure>
                                <img class="" src="./assets/img1.jpg" />
                            </figure>
                            <h3
                                class="text-LIGHTBLUE text-2xl mx-2 font-semibold"
                            >
                                The Rise of the IoT Smart City: How it’s
                                Transforming Urban Living
                            </h3>
                            <p class="text-lg mx-2">
                                The Future is Now: IoT Smart City What is IoT?
                                The Internet of Things, commonly referred to as
                                IoT, has been around
                            </p>
                            <a class="text-lg underline mx-2 mb-5"
                                >Read More »</a
                            >
                        </div>
                        <div
                            class="w-[24%] cursor-pointer bg-white flex flex-col gap-y-5"
                            id="hover_img"
                        >
                            <figure>
                                <img class="" src="./assets/img1.jpg" />
                            </figure>
                            <h3
                                class="text-LIGHTBLUE text-2xl mx-2 font-semibold"
                            >
                                The Rise of the IoT Smart City: How it’s
                                Transforming Urban Living
                            </h3>
                            <p class="text-lg mx-2">
                                The Future is Now: IoT Smart City What is IoT?
                                The Internet of Things, commonly referred to as
                                IoT, has been around
                            </p>
                            <a class="text-lg underline mx-2 mb-5"
                                >Read More »</a
                            >
                        </div>
                    </div>
                </div>
            </section> -->
        </main>

        <a href="#" class="to-top shadow-md">
            <i class="fas fa-chevron-up text-LIGHTBLUE"></i>
        </a>

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

            window.addEventListener("scroll", () => {
                if (window.pageYOffset > 100) {
                    toTop.classList.add("active");
                } else {
                    toTop.classList.remove("active");
                }
            });

            // document.querySelectorAll("a[href^='#']").forEach((item) => {
            //     item.addEventListener("click", function (e) {
            //         e.preventDefault();
            //         document
            //             .querySelector(this.getAttribute("href"))
            //             .scrollIntoView({
            //                 bahavior: "smooth",
            //             });
            //     });
            // });
        </script>
    </body>
</html>
