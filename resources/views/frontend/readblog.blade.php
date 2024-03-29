@extends('layouts.frontend')
@section('style')
  <meta name='robots' content='index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:1' />
<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" />
<link rel="stylesheet" href="{{asset('frontend_asset/assets/css/summerChodna.css')}}">
<style>
    #social-links{
        font-size: x-large;
    color: lightslategrey;
    }
    #social-links ul {
        display: flex;
        list-style-type: none;
        padding: 0;
        margin: 0;
    }

    #social-links ul li {
        margin-right: 20px; /* Adjust spacing between items */
    }

</style>
@endsection
@section('main')
<main>
    @if($blogContents == null)
    <section style="height:80vh; y" class=" flex flex-col justify-center items-center">
        <div class="container mx-auto pt-[76px] text-justify shadow-md px-0 pb-16 ">
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
        <div class="container mx-auto py-3 xl:px-10 px-2 text-LIGHTBLUE ">
            <a class="hover:underline" href="{{route('index')}}">Home </a>
            <span>
                > @if ($blogContents->first()->blogsData)
                {{$blogContents->first()->blogsData->title}}

                @endif</span >

        </div>
    </section>
    <section>
        <div class="container mx-auto xl:p-10 py:10 px-2 ">
            <ul class="flex lg:gap-1 gap-x-1 flex-wrap text-LIGHTBLUE mb-5">


                @php
                    $category =$blogContents->first()->blogsData->categoryData;
                @endphp
                @if (!empty($category))
                        @foreach ($category->breadcrumbs() as $index=> $crumb)

                            <a class="hover:underline inline-block cursor-pointer hover:text-LIGHTBLUE text-lg" >
                             {{ $crumb->name }}
                            </a>
                            @if ($index < count($category->breadcrumbs()) - 1)
                            <span>.</span>
                        @endif
                        @endforeach
                @endif

            </ul>
            <h2 class="xl:text-5xl lg:text-4xl md:text-3xl text-2xl font-semibold mb-16 uppercase mt-10 text-center ">
                Table Of Contents
            </h2>

            <div class="text-LIGHTBLUE font-medium text-lg text-center  ">
                @foreach ($blogContents as $data)
                <a href="#{{$data->id}}" class=" hover:text-[#2c7da9] taptargets  "
                    > {{$data->title}}
                </a>
                <br />
                @endforeach

            </div>
        </div>
    </section>


    @foreach ($blogContents as $key=> $data )
    <section id="{{$data->id}}">
        <div class="container mx-auto pt-[76px] text-justify  pb-16 shadow-md px-0  ">
            <div
                class="w-full mx-auto h-[80px] relative bg-LIGHTYELLOW flex  justify-center items-center border_shape font-semibold xl:text-3xl md:text-2xl sm:text-xl text-lg text-black shadow-md"
            >
            <div class="border_shape_left hidden xl:block"></div>
            <div class="border_shape_right hidden xl:block"></div>
               @if($key == 0)
                <h1 class="bg-transparent font-semibold mx-3 my-3 md:mx-6" style="text-align:initial;" >
                   {{$data->title}}
                </h1>
                @elseif($key >0 && $key < 7)
                 <h2 class="bg-transparent font-semibold mx-3 my-3 md:mx-6" style="text-align:initial;" >
                   {{$data->title}}
                </h2>
                @else
                 <h3 class="bg-transparent font-semibold mx-3 my-3 md:mx-6" style="text-align:initial;" >
                   {{$data->title}}
                </h3>
                @endif
            </div>
            <div class="mt-16 xl:px-10   ">
                <div class="w-full flex flex-col items-center content-center">
                    @if($data->video)
                        <video style="width:600px;; "  src="{{asset('upload/blog-content')}}/{{$data->video}}" controls></video> <br>
                    @endif
                    @if ($data->image)
                        <img alt="{{$data->title}}" style="width:600px;; "  src="{{asset('upload/blog-content')}}/{{$data->image}}" > <br>
                    @endif
                    @if ($data->video_link)
                    <iframe width="560" height="315" src="{{ $data->video_link }}" frameborder="0" allowfullscreen></iframe>
                    @endif


                </div>

                    <p class="text-lg  ">
                    {!!$data->content !!}
                    {{-- {{$data->content }} --}}
                </p>

            </div>
        </div>
    </section>
    @endforeach

    <section>
        <div class="container mx-auto xl:px-10 px-2 mb-10 ">
            <div class="border-t-2 mx-auto pt-10 max-w-[300px] "></div>

            <div class="mt-7 flex gap-x-4 justify-center">
                {{-- <div class="" style="color: lightslategrey;
                font-size: x-large;display:inline-block;"> --}}

                    {!! $shareComponent !!}



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
                    ->where('status','=','1')
                    ->where('id','!=',($blogContents->first()->blogsData)->id)
                    ->take(4)
                    ->get() as $data )
                    <div class="lg:w-[48%] shadow-md flex" id="hover_img">
                        <figure>
                            <img alt="{{$data->title}}"
                                style="width:100%; height:150px; "
                                class=" object-cover"
                                src="{{asset('upload/blog')}}/{{$data->features_image}}"
                            />
                        </figure>
                        <a href="{{route('readblog',$data->slugs)}}"
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
<a href="#" class="to-top shadow-md">
    <i class="fas fa-chevron-up text-LIGHTBLUE"></i>
</a>
@endsection

