@extends('Includes.layout')

@section('content')
<div class="leading-normal tracking-normal text-indigo-900 font-sans bg-gray-100" data-turbolinks="false">

    <section class="gradient pt-24 mb-24">
        <div class="container mx-auto px-4">
            <div class="flex flex-wrap -mx-4">
                <div class="w-full lg:w-3/5 px-4 text-center lg:text-left self-center">
                    <h1 class="mb-4 text-3xl font-extrabold leading-none text-white">ABOUT Leo Enterprises.</h1>
                    <p class="mb-6 text-white text-sm">Leo Enterprises, Multi – Discipline engineering contracting
                        and
                        construction company having its office at Bangalore in the state of Karnataka, India.</p>
                    <p class="mb-6 text-white text-sm">Leo Enterprises has been actively engaged in Civil
                        Construction Materials Supply. Leo Enterprises has worked with various Clients
                        of
                        Public and Private Sectors Such as Highway Department, and various private
                        companies, etc.</p>
                    <p class="mb-6 text-white text-sm">Over the last few years, Leo Enterprises has undergone rapid
                        expansion and is at present working in Telangana & Karnataka. Growth can be directly attributed
                        to its propensity to adopt, endure and remain credible amongst all its competitors. Company has
                        diversified into taking up large projects by directly participating in tenders and as well as
                        entering into strategic alliance with various reputed construction companies for joint ventures.
                    </p>

                </div>
                <div class="w-full lg:w-2/5 px-4 text-center lg:text-right lg:text-left self-end mb-10">
                    <img class="w-full xl:w-4/5 z-50 inline-block" src="{{asset('assets/ConstructionSymbols.svg')}}" />
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container my-12 mx-auto px-4 md:px-12">
            <h5 class="text-xl font-medium uppercase mb-4">Materials</h5>
            <div class="flex flex-wrap -mx-1 lg:-mx-4">
                <!-- Column -->
                <div class="my-1 px-1 w-full md:w-1/2 lg:my-4 lg:px-4 lg:w-1/3">
                    <!-- Article -->
                    <article class="overflow-hidden rounded-lg shadow-lg">
                        <a href="#">
                            <img alt="Placeholder"
                                class="block object-cover h-48 w-full transition duration-500 ease-in-out  transform hover:-translate-y-1 hover:scale-110"
                                src="assets/leo/river-sand.jpeg">
                        </a>
                        <header class="flex items-center justify-between leading-tight p-2 md:p-4">
                            <h1 class="text-lg">
                                <a class="no-underline hover:underline text-black" href="#">
                                    River Sand
                                </a>
                            </h1>
                        </header>
                    </article>
                    <!-- END Article -->
                </div>
                <!-- END Column -->

                <!-- Column -->
                <div class="my-1 px-1 w-full md:w-1/2 lg:my-4 lg:px-4 lg:w-1/3">
                    <!-- Article -->
                    <article class="overflow-hidden rounded-lg shadow-lg">
                        <a href="#">
                            <img alt="Placeholder"
                                class="block object-cover h-48 w-full transition duration-500 ease-in-out  transform hover:-translate-y-1 hover:scale-110"
                                src="assets/leo/msand.jpg">
                        </a>
                        <header class="flex items-center justify-between leading-tight p-2 md:p-4">
                            <h1 class="text-lg">
                                <a class="no-underline hover:underline text-black" href="#">
                                    M Sand
                                </a>
                            </h1>
                        </header>
                    </article>
                    <!-- END Article -->
                </div>
                <!-- END Column -->

                <!-- Column -->
                <div class="my-1 px-1 w-full md:w-1/2 lg:my-4 lg:px-4 lg:w-1/3">
                    <!-- Article -->
                    <article class="overflow-hidden rounded-lg shadow-lg">

                        <a href="#">
                            <img alt="Placeholder"
                                class="block object-cover h-48 w-full transition duration-500 ease-in-out  transform hover:-translate-y-1 hover:scale-110"
                                src="assets/leo/blue-meta.webp">
                        </a>
                        <header class="flex items-center justify-between leading-tight p-2 md:p-4">
                            <h1 class="text-lg">
                                <a class="no-underline hover:underline text-black" href="#">
                                    Blue Metal
                                </a>
                            </h1>
                        </header>
                    </article>
                    <!-- END Article -->
                </div>
                <!-- END Column -->

                <!-- Column -->
                <div class="my-1 px-1 w-full md:w-1/2 lg:my-4 lg:px-4 lg:w-1/3">
                    <!-- Article -->
                    <article class="overflow-hidden rounded-lg shadow-lg">
                        <a href="#">
                            <img alt="Placeholder"
                                class="block object-cover h-48 w-full transition duration-500 ease-in-out  transform hover:-translate-y-1 hover:scale-110"
                                src="assets/leo/red-sand.jpg">
                        </a>
                        <header class="flex items-center justify-between leading-tight p-2 md:p-4">
                            <h1 class="text-lg">
                                <a class="no-underline hover:underline text-black" href="#">
                                    Earth Filling Sand
                                </a>
                            </h1>
                        </header>
                    </article>
                    <!-- END Article -->

                </div>
                <!-- END Column -->

                <!-- Column -->
                <div class="my-1 px-1 w-full md:w-1/2 lg:my-4 lg:px-4 lg:w-1/3">
                    <!-- Article -->
                    <article class="overflow-hidden rounded-lg shadow-lg">
                        <a href="#">
                            <img alt="Placeholder"
                                class="block object-cover h-48 w-full transition duration-500 ease-in-out  transform hover:-translate-y-1 hover:scale-110"
                                src="assets/leo/building-brick.jpg">
                        </a>
                        <header class="flex items-center justify-between leading-tight p-2 md:p-4">
                            <h1 class="text-lg">
                                <a class="no-underline hover:underline text-black" href="#">
                                    Bricks
                                </a>
                            </h1>
                        </header>
                    </article>
                    <!-- END Article -->
                </div>
                <!-- END Column -->

                <!-- Column -->
                <div class="my-1 px-1 w-full md:w-1/2 lg:my-4 lg:px-4 lg:w-1/3">

                    <!-- Article -->
                    <article class="overflow-hidden rounded-lg shadow-lg">

                        <a href="#">
                            <img alt="Placeholder"
                                class="block object-cover h-48 w-full transition duration-500 ease-in-out  transform hover:-translate-y-1 hover:scale-110 "
                                src="assets/leo/cement-powder.jpg">
                        </a>

                        <header class="flex items-center justify-between leading-tight p-2 md:p-4">
                            <h1 class="text-lg">
                                <a class="no-underline hover:underline text-black" href="#">
                                    Cement
                                </a>
                            </h1>

                        </header>


                    </article>
                    <!-- END Article -->

                </div>
                <!-- END Column -->

                <!-- Column -->
                <div class="my-1 px-1 w-full md:w-1/2 lg:my-4 lg:px-4 lg:w-1/3">

                    <!-- Article -->
                    <article class="overflow-hidden rounded-lg shadow-lg">

                        <a href="#">
                            <img alt="Placeholder"
                                class="block object-cover h-48 w-full transition duration-500 ease-in-out  transform hover:-translate-y-1 hover:scale-110 "
                                src="assets/leo/concrete_mixer.jpg">
                        </a>

                        <header class="flex items-center justify-between leading-tight p-2 md:p-4">
                            <h1 class="text-lg">
                                <a class="no-underline hover:underline text-black" href="#">
                                    Concrete Mixer
                                </a>
                            </h1>

                        </header>
                    </article>
                    <!-- END Article -->
                </div>
                <!-- END Column -->

                <!-- Column -->
                <div class="my-1 px-1 w-full md:w-1/2 lg:my-4 lg:px-4 lg:w-1/3">
                    <!-- Article -->
                    <article class="overflow-hidden rounded-lg shadow-lg">
                        <a href="#">
                            <img alt="Placeholder"
                                class="block object-cover h-48 w-full transition duration-500 ease-in-out  transform hover:-translate-y-1 hover:scale-110 "
                                src="assets/leo/tmt-bar.png">
                        </a>
                        <header class="flex items-center justify-between leading-tight p-2 md:p-4">
                            <h1 class="text-lg">
                                <a class="no-underline hover:underline text-black" href="#">
                                    TMT Steel
                                </a>
                            </h1>

                        </header>
                    </article>
                    <!-- END Article -->
                </div>
                <!-- END Column -->
            </div>
        </div>
    </section>
</div>
@endsection