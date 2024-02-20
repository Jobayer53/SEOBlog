@extends('layouts.frontend')
@section('main')
<main>
    <section class="pt-32">
        <div class="container mx-auto px-2 md:flex gap-x-10 text-justify">
            <div class="md:w-[75%]">
                <h2 class="lg:text-4xl md:text-2xl text-xl font-bold mb-16 uppercase">
                    {{$news->title}}
                </h2>

                <p class="text-sm mt-5 md:w-[70%]">
                {!! $news->content !!}
                </p>




            </div>

            <aside class="md:w-[25%]">
                <p class="text-2xl font-bold mb-8 mt-8 md:mt-0">Latest Articles</p>
                <div class="mb-8">
                    <a
                        class="hover:text-LIGHTBLUE hover:underline cursor-pointer text-lg"
                        >Climate Scientist Michael Mann Awarded $1
                        Million in Defamation Lawsuit</a
                    >
                    <p>by Cristen Hemingway Jaynes February 9, 2024</p>
                </div>
                <div class="mb-8">
                    <a
                        class="hover:text-LIGHTBLUE hover:underline cursor-pointer text-lg"
                        >Climate Scientist Michael Mann Awarded $1
                        Million in Defamation Lawsuit</a
                    >
                    <p>by Cristen Hemingway Jaynes February 9, 2024</p>
                </div>
                <div class="mb-8">
                    <a
                        class="hover:text-LIGHTBLUE hover:underline cursor-pointer text-lg"
                        >Climate Scientist Michael Mann Awarded $1
                        Million in Defamation Lawsuit</a
                    >
                    <p>by Cristen Hemingway Jaynes February 9, 2024</p>
                </div>
            </aside>
        </div>
        <section>
            <div class="container mx-auto xl:px-10 px-2 pb-16">
                <h6
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
                </div>
            </div>
        </section>
    </section>
</main>
@endsection
