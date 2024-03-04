@extends('layouts.frontend')
@section('style')
  <meta name='robots' content='index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1' />
@endsection
@section('main')
<main>
    <section>
        <div class="pt-24 pb-16 container mx-auto px-10">
            <h2 class="text-4xl mb-16 text-center font-bold">
                Privacy Policy
            </h2>
            <div class="border-t pt-10 flex">
                <div>
                    <p>
                        This is our privacy policy and, if you landed
                        here, it means that you want to learn how we
                        process your personal data at:
                    </p>
                    <h2 class="font-semibold text-3xl mt-7">
                        Information We Collect

                    </h2>
                    <p class="mt-5">
                        Our website collects certain information about users voluntarily through comments, contact
                        forms, or signing up for our newsletter. Name, email address, website URL, comments, and
                        other information could be included in this. We do not actively collect any other personal data.

                    </p>

                    <h2 class="font-semibold text-3xl mt-7">
                        How We Use Information

                    </h2>
                    <p class="mt-5">
                        Any information you submit through this website is used only to respond to your inquiries, and
                        comments, or fulfill newsletter signups. We never provide your information to other parties or
                        use it for any other purpose.
                    </p>

                    <h2 class="font-semibold text-3xl mt-7">
                        Third-Party Services
                    </h2>
                    <p class="mt-5">
                        This page uses Google Analytics to monitor users. We use the following third-party services on Blog that may collect some data according to the privacy policies:

                       <ul class="p-4 mr-4" style="list-style-type: disc; margin-left:40px;">
                        <li> Analytics- Google Analytics to collect anonymous traffic data. </li>
                        <li>  Comments-Disqus to enable blog comments and discussions. </li>
                        <li> Facebook Pixel Analytics </li>
                       </ul>
                        Data collected through this service is subject to the Google Analytics privacy policy. We have
                        enabled WeP anonymization so user WeP addresses are truncated.
                        We also use Disqus for article comments. As per the Discussion privacy policy, Comments can
                        gather certain data on users and their activities. Users can control the sharing of certain data
                        with Disqus in their account settings.
                    </p>
                    <h2 class="font-semibold text-3xl mt-7">
                        Retaining Personal Data
                    </h2>
                    <p class="mt-5">
                        We retain personal data such as voluntarily submitted comments, messages, or emails only as
                        long as necessary to fulfill requests. Newsletter signup details are retained until the subscriber
                        opts out.

                    </p>
                    <h2 class="font-semibold text-3xl mt-7">
                        User Rights
                    </h2>
                    <p class="mt-5">
                        Users have the right to request access to or delete any data we have retained. To make such request, <a style="color: rgb(247, 161, 161)" href="{{route('contact')}}">Contact Us.</a>
                    </p>
                    <h2 class="font-semibold text-3xl mt-7">

                        Changes to this Policy
                    </h2>
                    <p class="mt-5">

                        We may occasionally update this privacy policy to reflect changes in my practices or services. The updated version will always be available on this page with an updated "Last updated" date.
                        If you have any questions about this privacy policy or our data practices, feel free to <a style="color: rgb(247, 161, 161)" href="{{route('contact')}}">Contact Us.</a>
                    </p>
                </div>
            </div>
        </div>
        <div class="py-16 relative">
            <div class="absolute w-full flex justify-center top-5">
                <img alt="Green Thoughts, Clean Energ"
                    class="w-72"
                    src="{{asset('frontend_asset/assets/Green Thoughts, Clean Energ.png')}}"
                />
            </div>
        </div>
    </section>
</main>
@endsection
