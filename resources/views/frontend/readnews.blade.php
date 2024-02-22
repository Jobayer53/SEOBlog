@extends('layouts.frontend')
@section('main')
<main>
    <section class="pt-32">
        <div class="container mx-auto px-2 md:flex gap-x-10 text-justify ">
            @if ($news)
            <div class="md:w-[75%]">
                <h2 class="lg:text-4xl md:text-2xl text-xl font-bold mb-16 uppercase">
                    {{$news->title}}
                </h2>
                <img style="width:100%;" src="{{asset('upload/news')}}/{{$news->image}}" alt="">

                <p class="text-sm mt-5 md:w-[70%]">
                {!! $news->content !!}
                </p>
            </div>
            <aside class="md:w-[25%]">
                <p class="text-2xl font-bold mb-8 mt-8 md:mt-0">Latest News</p>
                    @foreach ($news10 as $data )
                    <div class="mb-8">
                        <a  href="{{route('readNews',$data->id)}}"
                            class="hover:text-LIGHTBLUE hover:underline cursor-pointer text-lg"
                            > {{$data->title}} </a
                        >
                        <p>by Planet and Power</p>
                    </div>

                    @endforeach
            </aside>
            @else

                <div class="container mx-auto pt-[76px] text-justify px-2 pb-16 ">
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
            @endif
        </div>
        <section>
            <div class="container mx-auto xl:px-10 px-2 pb-16">
                {{-- <h6
                    class="text-center font-semibold text-2xl mb-8 border-b pb-7"
                >
                    You may also like
                </h6>
                <div class="flex justify-between flex-wrap gap-5">
                    @foreach ($newsData as $data )
                        <div class="lg:w-[48%] shadow-md flex" id="hover_img">
                            <figure>
                                <img
                                style="width:100%; height:150px; "
                                class=" object-cover"
                                    src="{{asset('upload/news')}}/{{$data->image}}"
                                />
                            </figure>
                            <a href="{{route('readNews',$data->id)}}"
                                class="cursor-pointer ml-2 font-medium hover:text-LIGHTBLUE">
                               {{$data->title}}</a
                            >
                        </div>
                    @endforeach
                </div> --}}
            </div>
        </section>
    </section>
</main>
@endsection
