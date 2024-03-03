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
                playsinline
            >
                <source src="{{asset('frontend_asset/assets/uyhbp.mp4')}}" type="video/mp4" />
            </video>
            <div
                class="container bg-transparent px-2 mx-auto absolute flex flex-col justify-center items-start w-full h-full top-10"
            >
                <h1
                    class="lg:text-3xl md:text-3xl text-2xl bg-transparent font-bold text-white md:leading-[50px] sm:w-[60%]"
                >
                    <span
                        class="Lg:text-5xl md:text-4xl text-3xl bg-transparent text-LIGHTBLUE font-[900]"
                        >Planet And Power
                    </span>
                    is the Wikileaks of Earth Energy Growth, Sustainable Development of Resources, Environment, and Climate Transition and Latest Outbreak News Portal for all about the Environment.

                </h1>
                <a href="{{route('blog')}}"
                    class="md:py-3 px-6 py-2 bg-LIGHTBLUE rounded-full mt-5 md:mt-10 text-white md:text-lg font-medium"
                >
                    Learn more
                </a>
            </div>
        </div>
    </section>

    <section>
        <div
            class="container lg:py-20 py-10 mx-auto px-2 flex flex-wrap justify-between gap-y-5"
        >

        </div>
    </section>
{{-- category + blog lists --}}
    <section>
        <div
            class="container mx-auto px-2 flex flex-wrap justify-between gap-y-16"
        >
           @foreach ($categories as $cat )
            <div class="lg:w-[31%] sm:w-[48%]">
                <a href="{{route('category.blog',['slug'=>$cat->slugs])}}">
                <h2
                    class="pb-1 text-2xl xl:text-[32px] font-semibold border-b-[6px] border-b-LIGHTBLUE inline-block"
                >{{$cat->name}}

            </h2>
        </a>

                @php
                    $blogs =App\Models\Blog::where('category_id', $cat->id)
                    ->where('status','=','1')
                    ->orderBy('id', 'desc')
                    ->take(5)
                    ->get();

                    $latestBlog = App\Models\Blog::where('category_id', $cat->id)
                    ->where('status','=','1')
                    ->orderBy('id', 'desc')
                    ->first();

                    if ($latestBlog) {
                        $image = $latestBlog->features_image;
                    } else {
                        // Handle the case where no matching blog is found
                        $image = null; // Or provide a default image
                    }
                @endphp
                 @if ($latestBlog)
                   <img alt="{{$latestBlog->title}}"
                    class="w-full h-[227px] my-5 rounded-lg shadow-md"
                    src="{{asset('upload/blog')}}/{{$latestBlog->features_image}}"
                    />
                    @endif


                @foreach ($blogs as $data )
                <a href="{{route('readblog',$data->slugs)}}"
                class="xl:font-medium text-xl block cursor-pointer border-b pb-2 hover:text-LIGHTBLUE"
                >{{$data->title}}</a>
                @endforeach


            </div>

           @endforeach

        </div>
    </section>
{{-- category + blog lists ends --}}
{{-- news --}}
    <section>
        <div class="container py-16 mx-auto px-2">
            <h3
                class="pb-1 text-2xl xl:text-[32px] font-semibold border-b-[6px] border-b-LIGHTBLUE inline-block"
            >
                Positive Green News
            </h3>
            @if ($newsAll->count('id') == 0)
                <h4
                class="font-medium text-lg block  transition ease-in-out delay-300"
                >
                NO DATA TO SHOW
                </h4>
            @else
                <div class="sm:flex justify-between mt-8">
                    @if($newsAll->last()->status == '1')
                        <div class="sm:w-[48%] mb-5 sm:mb-0">
                            <img alt="{{$newsAll->last()->title}}"
                                class="rounded-lg w-full h-[341px]"
                                src="{{asset('upload/news')}}/{{$newsAll->last()->image}}"
                            />
                            <a href="{{route('readNews',$newsAll->last()->slugs)}}"
                                class="font-medium mt-2 text-xl block cursor-pointer hover:underline transition ease-in-out delay-300"
                            >
                            {{$newsAll->last()->title}}
                        </a>
                            <p class="font-medium">by Planet and Power</p>
                        </div>
                    @else
                        <h4
                        class="font-medium text-lg block  transition ease-in-out delay-300"
                        >
                        NO DATA TO SHOW
                        </h4>
                    @endif
                    <div class="sm:w-[48%]">
                        @foreach ($newsData as $data )
                        <div class="mb-4">
                            <a href="{{route('readNews',$data->slugs)}}"
                                class="font-medium text-lg block cursor-pointer hover:underline transition ease-in-out delay-300"
                            >
                            {{$data->title}}
                            </a>
                            <p class="font-medium text-[#303030]">
                                by Planet and Power
                            </p>
                        </div>
                        @endforeach
                    </div>
                </div>
            @endif

        </div>
    </section>
    {{-- news end --}}
</main>

@endsection
