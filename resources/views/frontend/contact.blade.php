@extends('layouts.frontend')
@section('main')
<main>
    <section>
        <div class="pt-32 pb-16 container mx-auto sm:px-10">
            <h2 class="text-4xl lg:mb-7 font-semibold text-center">
                Get In Touch With Us
            </h2>
            <div class="px-5 xl:py-16 py-8">
                <div class="my-7">
                    <p>Name *</p>
                    <input required class="w-full border p-4 mt-2" />
                </div>
                <div class="my-7">
                    <p>Email *</p>
                    <input required class="w-full border p-4 mt-2" />
                </div>
                <div class="my-7">
                    <p>Subject *</p>
                    <input required class="w-full border p-4 mt-2" />
                </div>
                <div class="my-7">
                    <p>Message *</p>
                    <textarea
                        required
                        class="w-full h-48 border p-4 mt-2"
                    ></textarea>
                </div>
                <div>
                    <a
                        class="uppercase font-ru border cursor-pointer font-medium px-10 py-3 button"
                        ><span class="hoverspan"></span>Submit</a
                    >
                </div>
            </div>
        </div>
    </section>
</main>
@endsection
