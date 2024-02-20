@extends('layouts.frontend')
@section('main')

<main>
    <section>
        <div
            class="pt-24 pb-16 container mx-auto px-2 flex justify-between"
        >
            <div class="xl:w-[78%] w-full flex flex-col gap-y-5 mt-10">




               @foreach ($blogs as $blog )
               <div class="sm:flex justify-between shadow p-3 rounded-md">
                <div class="sm:w-[40%]" id="hover_img">
                    <figure>
                        <img
                            width="100%"
                            src="{{asset('upload/blog')}}/{{$blog->features_image}}"
                        />
                    </figure>
                </div>
                <div class="sm:w-[58%]">
                    <ul class="flex md:gap-1 gap-x-1 mt-3 sm:mt-0 flex-wrap">


                        @php
                            $category = $blog->categoryData;
                        @endphp
                        @if (!empty($category))
                                @foreach ($category->breadcrumbs() as $index=> $crumb)
                                    <a href="#"
                                    class="hover:underline inline-block cursor-pointer hover:text-LIGHTBLUE"
                                    >
                                    {{ $crumb->name }}
                                    </a>
                                    @if ($index < count($category->breadcrumbs()) - 1)
                                    <span>.</span>
                                @endif
                                @endforeach
                        @endif


                    </ul>
                    <h2
                        class="md:my-5 my-3 lg:text-2xl text-xl font-medium hover:text-LIGHTBLUE cursor-pointer"
                    >
                        <a href="{{route('readblog',$blog->id)}}">
                           {{$blog->title}}
                        </a>
                    </h2>
                    <time> {{$blog->created_at->format('jS F Y')}} </time>
                </div>
            </div>
               @endforeach
            </div>
            <div class="xl:w-[20%] xl:block hidden bg-gray-100"></div>
        </div>
    </section>
</main>
@endsection
