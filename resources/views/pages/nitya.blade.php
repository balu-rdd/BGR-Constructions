@extends('Includes.layout')

@section('content')
<div class="leading-normal tracking-normal text-indigo-900 font-sans bg-gray-100" data-turbolinks="false">

    <section class="gradient pt-24 mb-24">
        <div class="container mx-auto px-4">
            <div class="flex flex-wrap -mx-4">
                <div class="w-full lg:w-3/5 px-4 text-center lg:text-left self-center">
                    <h1 class="mb-4 text-3xl font-extrabold leading-none text-white">ABOUT Nitya Enterprises.</h1>
                    <p class="mb-6 text-white text-sm">Nitya Enterprises, Multi – Discipline engineering contracting
                        and
                        construction company having its office at Bangalore in the state of Karnataka, India.</p>
                    <p class="mb-6 text-white text-sm">Nitya Enterprises has been actively engaged in Civil
                        Construction Materials Supply. Nitya Enterprises has worked with various Clients
                        of
                        Public and Private Sectors Such as Highway Department, and various private
                        companies, etc.</p>
                    <p class="mb-6 text-white text-sm">Over the last few years, Nitya Enterprises has undergone rapid
                        expansion and is at present working in Telangana & Karnataka. Growth can be directly attributed
                        to its propensity to adopt, endure and remain credible amongst all its competitors. Company has
                        diversified into taking up large projects by directly participating in tenders and as well as
                        entering into strategic alliance with various reputed construction companies for joint ventures.
                    </p>

                </div>
                <div class="w-full lg:w-2/5 px-4 text-center lg:text-right lg:text-left self-end mb-10">
                    <img class="w-full xl:w-4/5 z-50 inline-block" src="{{asset('assets/Sity2.svg')}}" />
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
                                class=" block object-cover h-48 w-full transition duration-500 ease-in-out  transform hover:-translate-y-1 hover:scale-110"
                                src="assets/nitya/tiles.jpg">
                        </a>
                        <header class="flex items-center justify-between leading-tight p-2 md:p-4">
                            <h1 class="text-lg">
                                <a class="no-underline hover:underline text-black" href="#">
                                    Tiles
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
                                src="assets/nitya/electrical.jpg">
                        </a>
                        <header class="flex items-center justify-between leading-tight p-2 md:p-4">
                            <h1 class="text-lg">
                                <a class="no-underline hover:underline text-black" href="#">
                                    Electrical Materials
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
                                src="assets/nitya/sanitary.jpg">
                        </a>
                        <header class="flex items-center justify-between leading-tight p-2 md:p-4">
                            <h1 class="text-lg">
                                <a class="no-underline hover:underline text-black" href="#">
                                    Sanitary Items
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
                                src="assets/nitya/plumbing.jpg">
                        </a>
                        <header class="flex items-center justify-between leading-tight p-2 md:p-4">
                            <h1 class="text-lg">
                                <a class="no-underline hover:underline text-black" href="#">
                                    Plumbing Materials
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
                                src="assets/nitya/plywood.jpg">
                        </a>
                        <header class="flex items-center justify-between leading-tight p-2 md:p-4">
                            <h1 class="text-lg">
                                <a class="no-underline hover:underline text-black" href="#">
                                    Plywood
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
                                src="assets/nitya/gypsum.jpg">
                        </a>

                        <header class="flex items-center justify-between leading-tight p-2 md:p-4">
                            <h1 class="text-lg">
                                <a class="no-underline hover:underline text-black" href="#">
                                    Gypsum
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
                                src="assets/nitya/granite.jpg">
                        </a>
                        <header class="flex items-center justify-between leading-tight p-2 md:p-4">
                            <h1 class="text-lg">
                                <a class="no-underline hover:underline text-black" href="#">
                                    Granite
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