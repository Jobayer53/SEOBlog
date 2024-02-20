@extends('layouts.frontend')
@section('main')
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
                <img class="lg:w-14 w-10" src="{{asset('frontend_asset/assets/house.svg')}}" />
                <p class="lg:font-medium">
                    <a>Green Living Guides</a>
                </p>
            </div>
            <div
                class="lg:p-5 sm:p-3 px-2 py-4 box_shadow rounded-md flex flex-col items-center gap-y-4 lg:w-[15%] w-[48%] sm:w-[32%]"
            >
                <img class="lg:w-14 w-10" src="{{asset('frontend_asset/assets/house.svg')}}" />
                <p class="lg:font-medium">
                    <a>Green Living Guides</a>
                </p>
            </div>
            <div
                class="lg:p-5 sm:p-3 px-2 py-4 box_shadow rounded-md flex flex-col items-center gap-y-4 lg:w-[15%] w-[48%] sm:w-[32%]"
            >
                <img class="lg:w-14 w-10" src="{{asset('frontend_asset/assets/house.svg')}}" />
                <p class="lg:font-medium">
                    <a>Green Living Guides</a>
                </p>
            </div>
            <div
                class="lg:p-5 sm:p-3 px-2 py-4 box_shadow rounded-md flex flex-col items-center gap-y-4 lg:w-[15%] w-[48%] sm:w-[32%]"
            >
                <img class="lg:w-14 w-10" src="{{asset('frontend_asset/assets/house.svg')}}" />
                <p class="lg:font-medium">
                    <a>Green Living Guides</a>
                </p>
            </div>
            <div
                class="lg:p-5 sm:p-3 px-2 py-4 box_shadow rounded-md flex flex-col items-center gap-y-4 lg:w-[15%] w-[48%] sm:w-[32%]"
            >
                <img class="lg:w-14 w-10" src="{{asset('frontend_asset/assets/house.svg')}}" />
                <p class="lg:font-medium">
                    <a>Green Living Guides</a>
                </p>
            </div>
            <div
                class="lg:p-5 sm:p-3 px-2 py-4 box_shadow rounded-md flex flex-col items-center gap-y-4 lg:w-[15%] w-[48%] sm:w-[32%]"
            >
                <img class="lg:w-14 w-10" src="{{asset('frontend_asset/assets/house.svg')}}" />
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


           @foreach ($categories as $cat )
           <div class="lg:w-[31%] sm:w-[48%]">
            <h2
                class="pb-1 text-2xl xl:text-[32px] font-semibold border-b-[6px] border-b-LIGHTBLUE inline-block"
            >
               {{$cat->name}}
            </h2>
            @php
                    $blogs =App\Models\Blog::where('category_id', $cat->id)
                    ->orderBy('id', 'desc')
                    ->get();

                    $latestBlog = App\Models\Blog::where('category_id', $cat->id)
                    ->orderBy('id', 'desc')
                    ->first();

                if ($latestBlog) {
                    $image = $latestBlog->features_image;
                } else {
                    // Handle the case where no matching blog is found
                    $image = null; // Or provide a default image
                }

            @endphp

            <img
                class="w-full h-[227px] my-5 rounded-lg shadow-md"
                src="{{asset('upload/blog')}}/{{$image}}"
            />
            @foreach ($blogs as $data )

            <a href="{{route('readblog',$data->id)}}"
            class="xl:font-medium text-xl block cursor-pointer border-b pb-2 hover:text-LIGHTBLUE"
            >{{$data->title}}</a
        >
            @endforeach

            <button
                class="xl:py-3 py-2 px-5 border-2 font-medium border-LIGHTBLUE rounded-full text-LIGHTBLUE"
            >
                View more
            </button>
        </div>

           @endforeach

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
                        src="{{asset('upload/news')}}/{{$newsAll->first()->image}}"
                    />
                    <a href="{{route('readNews',$newsAll->first()->id)}}"
                        class="font-medium mt-2 text-xl block cursor-pointer hover:underline transition ease-in-out delay-300"
                    >
                    {{$newsAll->first()->title}}
                </a>
                    <p class="font-medium"></p>
                </div>
                <div class="sm:w-[48%]">
                    @if ($newsAll->count('id') == 0)
                        <h4
                        class="font-medium text-lg block  transition ease-in-out delay-300"
                    >
                    NO DATA TO SHOW
                    </h4>
                    @endif
                    @foreach ($newsData as $data )
                    <div class="mb-4">
                        <a href="{{route('readNews',$data->id)}}"
                            class="font-medium text-lg block cursor-pointer hover:underline transition ease-in-out delay-300"
                        >
                           {{$data->title}}
                        </a>
                        <p class="font-medium text-[#303030]">

                        </p>
                    </div>
                    @endforeach

                </div>
            </div>
        </div>
    </section>
</main>

@endsection
