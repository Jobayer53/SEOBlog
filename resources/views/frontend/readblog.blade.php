@extends('layouts.frontend')
@section('main')
<main>
    @if($blogContents->count('id') == 0)
    <section style="height:80vh; y" class=" flex flex-col justify-center items-center">
        <div class="container mx-auto pt-[76px] text-justify px-2 pb-16">
            <div
                class="w-full mx-auto h-[80px] relative bg-LIGHTYELLOW flex justify-center items-center border_shape font-semibold xl:text-3xl md:text-2xl sm:text-xl text-lg text-black"
            >
                <div class="border_shape_left hidden xl:block"></div>
                <div class="border_shape_right hidden xl:block"></div>
                <h2 class="bg-transparent font-semibold mx-5">
                   NO DATA TO SHOW
                </h2>
            </div>
            </div>
    </section>
    @else
    <section class="pt-32">
        <div class="container mx-auto py-3 xl:px-10 px-2 text-LIGHTBLUE">
            <a class="hover:underline" href="{{route('index')}}">Home </a>
            <span>
                > @if ($blogContents->first()->blogsData)
                {{$blogContents->first()->blogsData->title}}

                @endif</span >

        </div>
    </section>
    <section>
        <div class="container mx-auto xl:p-10 py:10 px-2">
            <ul class="flex lg:gap-1 gap-x-1 flex-wrap text-LIGHTBLUE mb-5">


                @php
                    $category =$blogContents->first()->blogsData->categoryData;
                @endphp
                @if (!empty($category))
                        @foreach ($category->breadcrumbs() as $index=> $crumb)

                            <a class="hover:underline inline-block cursor-pointer hover:text-LIGHTBLUE" >
                             {{ $crumb->name }}
                            </a>


                            @if ($index < count($category->breadcrumbs()) - 1)
                            <span>.</span>
                        @endif
                        @endforeach
                @endif

            </ul>
            <h2 class="xl:text-5xl lg:text-4xl md:text-3xl text-2xl font-semibold mb-16 uppercase mt-10">
                Table Of Contents
            </h2>
            <p class="mt-5 mb-7 lg:text-lg">
                130+ DIY Projects Broken Down By Time & Skill Level
            </p>
            <div class="text-LIGHTBLUE font-medium text-lg">
                @foreach ($blogContents as $data)
                <a href="#{{$data->id}}" class="underline hover:text-[#2c7da9]"
                    > {{$data->title}}
                </a>
                <br />
                @endforeach

            </div>
        </div>
    </section>


    @foreach ($blogContents as $data )
    <section id="{{$data->id}}">
        <div class="container mx-auto pt-[76px] text-justify px-2 pb-16">
            <div
                class="w-full mx-auto h-[80px] relative bg-LIGHTYELLOW flex justify-center items-center border_shape font-semibold xl:text-3xl md:text-2xl sm:text-xl text-lg text-black"
            >
                <div class="border_shape_left hidden xl:block"></div>
                <div class="border_shape_right hidden xl:block"></div>
                <h2 class="bg-transparent font-semibold mx-5">
                   {{$data->title}}
                </h2>
            </div>
            <div class="mt-16 xl:px-10 ">
                @if($data->video)
                    <video style="width:600px;; " class="m-auto" src="{{asset('upload/blog-content')}}/{{$data->video}}" controls></video> <br>
                @endif
                @if ($data->image)
                    <img style="width:600px;; " class="m-auto" src="{{asset('upload/blog-content')}}/{{$data->image}}" > <br>
                @endif
                    <p class="text-lg">
                    {!! $data->content !!}
                </p>

            </div>
        </div>
    </section>
    @endforeach

    <section>
        <div class="container mx-auto xl:px-10 px-2 mb-10">
            <div class="border-t-2 mx-auto pt-10 max-w-[300px]"></div>
            <p class="font-medium text-justify text-lg">
                Main image: Berkshire, Buckinghamshire & Oxfordshire
                Wildlife Trust’s hairstreak butterfly egg count at
                Leaches Farm Nature Reserve near Bicester. Picture:
                Hayley Beck
            </p>
            <div class="mt-7 flex gap-x-4 justify-center">
                <a class="cursor-pointer">
                    <i
                        class="fa-brands fa-facebook text-4xl text-[#316FF6]"
                    >
                    </i>
                </a>
                <a class="cursor-pointer">
                    <img class="w-8" src="{{asset('frontend_asset/assets/x-twitter.svg')}}" />
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
        <div class="container mx-auto xl:px-10 px-2 pb-16">
            <h6
                class="text-center font-semibold text-2xl mb-8 border-b pb-7"
            >
                You may also like
            </h6>
            <div class="flex justify-between flex-wrap gap-5">


                @if (!empty($category))
                    @foreach (App\Models\Blog::where('category_id',$category->breadcrumbs()[0]->id)
                    ->where('id','!=',($blogContents->first()->blogsData)->id)
                    ->get() as $data )
                    <div class="lg:w-[48%] shadow-md flex" id="hover_img">
                        <figure>
                            <img
                                style="width:100%; height:150px; "
                                class=" object-cover"
                                src="{{asset('upload/blog')}}/{{$data->features_image}}"
                            />
                        </figure>
                        <a href="{{route('readblog',$data->id)}}"
                            class="cursor-pointer ml-2 font-medium hover:text-LIGHTBLUE"
                            >{{$data->title}}</a
                        >
                    </div>
                    @endforeach
                @endif
            </div>
        </div>
    </section>
    @endif
</main>
@endsection

