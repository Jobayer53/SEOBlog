@extends('layouts.frontend')
@section('main')

<main>
    <section>

        <div
            class="pt-24 pb-16 container mx-auto px-2 flex justify-between"
        >



        <div class="xl:w-[78%] w-full flex flex-col gap-y-5 mt-10">
                <h3 class="text-center" style="font-size: 2rem;" > Blogs of '{{$category->name}}' category</h3>
               @foreach ($category->cat_to_blog as $blog )
               <div class="sm:flex justify-between shadow p-3 rounded-md">
                <div class="sm:w-[40%]" id="hover_img">
                    <figure>
                        <img alt="{{$blog->title}}"
                            width="100%"
                            src="{{asset('upload/blog')}}/{{$blog->features_image}}"
                        />
                    </figure>
                </div>
                <div class="sm:w-[58%]">
                    <ul class="flex md:gap-1 gap-x-1 mt-3 sm:mt-0 flex-wrap">

                    </ul>
                    <h2
                        class="md:my-5 my-3 lg:text-2xl text-xl font-medium hover:text-LIGHTBLUE cursor-pointer"
                    >
                        <a href="{{route('readblog',$blog->slugs)}}">
                           {{$blog->title}}
                        </a>

                    </h2>
                    <time> {{$blog->created_at->format('jS F Y')}} </time>
                </div>
            </div>
               @endforeach
            </div>
            <div class="xl:w-[20%] xl:block hidden " style="background-color:#ffffec;"></div>
        </div>
    </section>
</main>
@endsection
