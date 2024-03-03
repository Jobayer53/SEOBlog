@extends('layouts.frontend')

@section('main')
<main>
    <section>
        <div
            class="pt-24 pb-16 container mx-auto px-2 flex justify-between"
        >
            <div class="xl:w-[78%] w-full flex flex-col gap-y-5 mt-10">
                @foreach ($news as $data )
                <div class="sm:flex justify-between shadow p-3 rounded-md">
                    <div class="sm:w-[40%]" id="hover_img">
                        <figure>
                            <img alt="{{$data->title}}"
                               style=" width:100%;"
                                src="{{asset('upload/news')}}/{{$data->image}}"
                            />
                        </figure>
                    </div>
                    <div class="sm:w-[58%]">

                        <h2
                            class="md:my-5 my-3 lg:text-2xl text-xl font-medium hover:text-LIGHTBLUE cursor-pointer"
                        >
                            <a href="{{route('readNews',$data->slugs)}}">
                                {{$data->title}}
                            </a>
                        </h2>
                        <time> {{$data->created_at->format('jS F Y')}} </time>
                    </div>
                </div>
                @endforeach

            </div>
            <div class="xl:w-[20%] xl:block hidden " style="background-color: #ffffec;">
                {{-- bg-gray-100 --}}
            </div>
        </div>
    </section>
</main>
@endsection

