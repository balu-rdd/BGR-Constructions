@extends('Includes.layout')

@section('content')
<div class="leading-normal tracking-normal text-indigo-900 font-sans bg-gray-100" data-turbolinks="false">
    <!-- flash messages -->
    <!-- /flash messages -->

    <section class="gradient pt-24 mb-24">
        <div class="container mx-auto px-4">
            <div class="flex flex-wrap -mx-4">
                <div class="w-full lg:w-3/5 px-4 text-center lg:text-left self-center">
                    <h1 class="mb-4 text-3xl font-extrabold leading-none text-white">ABOUT {{env('APP_NAME')}}.</h1>
                    <p class="mb-6 text-white text-sm">{{env('APP_NAME')}} Multi – Discipline engineering contracting and
                        construction company having its office at Hosur in the state of Tamilnadu, India.</p>
                    <p class="mb-6 text-white text-sm">{{env('APP_NAME')}} has been actively engaged in Civil Construction
                        and Infrastructure Development activities. {{env('APP_NAME')}} has worked with various Clients of
                        Public and Private Sectors Such as Indian Railways, Highway Department, and various private
                        companies, etc.</p>
                    <p class="mb-6 text-white text-sm">Over the last few years, {{env('APP_NAME')}} has undergone rapid
                        expansion and is at present working in Tamilnadu & Karnataka. Growth can be directly attributed
                        to its propensity to adopt, endure and remain credible amongst all its competitors. Company has
                        diversified into taking up large projects by directly participating in tenders and as well as
                        entering into strategic alliance with various reputed construction companies for joint ventures.
                    </p>
                    <p class="mb-12">
                        <a href="/users/sign_up"
                            class="inline-block bg-indigo-600 hover:bg-indigo-800 text-white text-sm tracking-wider rounded py-4 px-8 shadow font-bold">
                            View Projects
                        </a>
                    </p>

                </div>
                <div class="w-full lg:w-2/5 px-4 text-center lg:text-right lg:text-left self-end">
                    <img class="w-full xl:w-4/5 z-50 inline-block" src="{{asset('assets/2027312.svg')}}" />
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="line line-up">
            <div class="container mx-auto px-4">
                <div
                    class="icon border rounded-full w-32 h-32 flex items-center justify-center bg-gray-100 z-10 relative">
                    <i class="fas fa-laptop-code fa-3x inline-block opacity-50 text-orange-500"></i>
                </div>
            </div>
        </div>
        <div class="container mx-auto px-4 mb-24">
            <div class="flex flex-wrap -mx-4 items-center mb-8">
                <div class="w-full lg:w-7/12  px-4 mr-auto mb-6">
                    <h2 class="font-extrabold  text-4xl">Mission</h2>
                    <hr class="h-1 gradient w-64 opacity-25 m-0 p-0 mb-4">
                    <p class="mb-4 leading-relaxed">To Provide construction and Engineering services with creative
                        approach, within budget and within timeline.
                    </p>
                    <p class="mb-4 leading-relaxed">
                        To Gain satisfaction of our clients and to be the preferred partner
                        for their most challenging projects.
                    </p>
                    <p class="mb-4 leading-relaxed">To encourage
                        <strong> innovation, teamwork, professional integrity, commitment, up gradation of knowledge and
                            skills of employees and a safe working environment.
                        </strong> </p>
                    <p class="mb-4 leading-relaxed">
                        To be a responsible corporate citizen committed to the social cause
                    </p>
                </div>
                <div class="w-full lg:w-4/12 px-4 mb-6">
                    <img class="shadow-lg border rounded" src="{{asset('assets/mission.svg')}}" />
                </div>
            </div>
        </div>
        <div class="line line-down">
            <div class="container mx-auto px-4">
                <div
                    class="icon ml-auto border rounded-full w-32 h-32 flex items-center justify-center bg-gray-100 z-10 relative">
                    <i class="fas fa-stream fa-3x inline-block opacity-50 text-orange-500"></i>
                </div>
            </div>
        </div>
        <div class="container mx-auto px-4 mb-24">
            <div class="flex flex-wrap flex-wrap-reverse -mx-4 items-center mb-8">
                <div class="lg:w-4/12 px-4 mb-6">
                    <img class="shadow-lg border rounded" src="{{asset('assets/holding_hands.svg')}}" />
                </div>
                <div class="lg:w-7/12 px-4 ml-auto mb-6 text-right">
                    <h2 class="font-extrabold  text-4xl">STRENGTHS</h2>
                    <hr class="h-1 gradient w-64 opacity-25 m-0 p-0 mb-4 ml-auto">
                    <p class="mb-4 leading-relaxed">Proven track record to take up big size projects..</p>
                    <p> Proven track record to take up big size projects.</p>
                    <p>Meeting and exceeding customer expectations of quality and completion dates.</p>
                    <p>Highly qualified management team and experienced employees.</p>
                    <p>Strong order book.</p>
                    <p>Strategic alliance / tie up with reputed construction companies to take up mega projects.</p>
                </div>
            </div>
        </div>
        <div class="line line-up">
            <div class="container mx-auto px-4">
                <div
                    class="icon border rounded-full w-32 h-32 flex items-center justify-center bg-gray-100 z-10 relative">
                    <i class="fas fa-paper-plane fa-3x inline-block opacity-50 text-orange-500"></i>
                </div>
            </div>
        </div>
        <div class="container mx-auto px-4 mb-24">
            <div class="flex flex-wrap -mx-4 align-center mb-8 items-center">
                <div class="lg:w-7/12 px-4 mr-auto mb-6">
                    <h2 class="font-extrabold  text-4xl">COMMITMENT TO QUALITY</h2>
                    <hr class="h-1 gradient w-64 opacity-25 m-0 p-0 mb-4">
                    <p class="mb-4 leading-relaxed">
                        The Quality group is a collection of individuals responsible for implementing {{env('APP_NAME')}}
                        Quality Policy. The Quality group is well supported by the Construction Quality Assurance, Civil
                        Engineering Group, knowledge Management Group, and the Training Group. The Civil Quality
                        Assurance group ensures that the project quality activities are planned and implemented in
                        accordance with our Quality Policy, in all deliverables.</p>
                    <p>
                        The Civil Engineering Group defines, maintains and improves our Quality Management System. The
                        Knowledge Management group ensure latest technology is incorporated into our Tools, Techniques
                        and Methodologies used to deliver high-quality services to our customers ensure continuous
                        process improvement.
                    </p>
                </div>
                <div class="lg:w-4/12 px-4 mb-6">
                    <img class="shadow-lg border rounded p-6" src="{{asset('assets/quality.svg')}}" />
                </div>
            </div>
        </div>
        <div class="line line-down">
            <div class="container mx-auto px-4">
                <div
                    class="icon ml-auto border rounded-full w-32 h-32 flex items-center justify-center bg-gray-100 z-10 relative">
                    <i class="fas fa-images fa-3x inline-block opacity-50 text-orange-500"></i>
                </div>
            </div>
        </div>
        <div class="container mx-auto px-4 mb-24">
            <div class="flex flex-wrap flex-wrap-reverse mb-8 -mx-4 items-center">
                <div class="lg:w-4/12 px-4 mb-6">
                    <img class="shadow-lg border rounded" src="{{asset('assets/equipment.svg')}}" />
                </div>
                <div class="lg:w-7/12 px-4 ml-auto mb-6 text-right">
                    <h2 class="font-extrabold  text-4xl">Plant & Equipment</h2>
                    <hr class="h-1 gradient w-64 opacity-25 m-0 p-0 mb-4 ml-auto">
                    <p class="mb-4 leading-relaxed">
                        <div class="flex flex-col">
                            <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                                <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                                    <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                                        <table class="min-w-full divide-y divide-gray-200">
                                            <thead class="bg-gray-50">
                                                <tr>
                                                    <th scope="col"
                                                        class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                        #
                                                    </th>
                                                    <th scope="col"
                                                        class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                        Machine
                                                    </th>
                                                    <th scope="col"
                                                        class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                        Quantity
                                                    </th>
                                                </tr>
                                            </thead>
                                            <tbody class="bg-white divide-y divide-gray-200">
                                                <tr>
                                                    <td class="px-6 py-4 whitespace-nowrap">
                                                        <div class="flex items-center">
                                                            <div class="text-sm text-gray-500">
                                                                1
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="px-6 py-4 whitespace-nowrap">
                                                        <div class="text-sm text-gray-900">LD 4 BORE MACHINE
                                                        </div>
                                                    </td>
                                                    <td class="px-6 py-4 whitespace-nowrap">
                                                        <span
                                                            class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                                                            2 Nos
                                                        </span>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td class="px-6 py-4 whitespace-nowrap">
                                                        <div class="flex items-center">
                                                            <div class="text-sm text-gray-500">
                                                                2
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="px-6 py-4 whitespace-nowrap">
                                                        <div class="text-sm text-gray-900">DIAMOND WIRE SAW MACHINE
                                                        </div>
                                                    </td>
                                                    <td class="px-6 py-4 whitespace-nowrap">
                                                        <span
                                                            class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                                                            2 Nos
                                                        </span>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td class="px-6 py-4 whitespace-nowrap">
                                                        <div class="flex items-center">
                                                            <div class="text-sm text-gray-500">
                                                                3
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="px-6 py-4 whitespace-nowrap">
                                                        <div class="text-sm text-gray-900">ATLAS COPCO COMPRESSOR
                                                        </div>
                                                    </td>
                                                    <td class="px-6 py-4 whitespace-nowrap">
                                                        <span
                                                            class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                                                            3 Nos
                                                        </span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="px-6 py-4 whitespace-nowrap">
                                                        <div class="flex items-center">
                                                            <div class="text-sm text-gray-500">
                                                                4
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="px-6 py-4 whitespace-nowrap">
                                                        <div class="text-sm text-gray-900">TRACTOR COMPRESSOR
                                                        </div>
                                                    </td>
                                                    <td class="px-6 py-4 whitespace-nowrap">
                                                        <span
                                                            class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                                                            8 Nos
                                                        </span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="px-6 py-4 whitespace-nowrap">
                                                        <div class="flex items-center">
                                                            <div class="text-sm text-gray-500">
                                                                5
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="px-6 py-4 whitespace-nowrap">
                                                        <div class="text-sm text-gray-900">TIPPER HYVA
                                                        </div>
                                                    </td>
                                                    <td class="px-6 py-4 whitespace-nowrap">
                                                        <span
                                                            class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                                                            15 Nos
                                                        </span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="px-6 py-4 whitespace-nowrap">
                                                        <div class="flex items-center">
                                                            <div class="text-sm text-gray-500">
                                                                6
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="px-6 py-4 whitespace-nowrap">
                                                        <div class="text-sm text-gray-900">JCB
                                                        </div>
                                                    </td>
                                                    <td class="px-6 py-4 whitespace-nowrap">
                                                        <span
                                                            class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                                                            5 Nos
                                                        </span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="px-6 py-4 whitespace-nowrap">
                                                        <div class="flex items-center">
                                                            <div class="text-sm text-gray-500">
                                                                7
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="px-6 py-4 whitespace-nowrap">
                                                        <div class="text-sm text-gray-900">WATER TANKER
                                                        </div>
                                                    </td>
                                                    <td class="px-6 py-4 whitespace-nowrap">
                                                        <span
                                                            class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                                                            3 Nos
                                                        </span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="px-6 py-4 whitespace-nowrap">
                                                        <div class="flex items-center">
                                                            <div class="text-sm text-gray-500">
                                                                8
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="px-6 py-4 whitespace-nowrap">
                                                        <div class="text-sm text-gray-900">HYUNDAI EXCAVATOR 210
                                                        </div>
                                                    </td>
                                                    <td class="px-6 py-4 whitespace-nowrap">
                                                        <span
                                                            class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                                                            2 Nos
                                                        </span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="px-6 py-4 whitespace-nowrap">
                                                        <div class="flex items-center">
                                                            <div class="text-sm text-gray-500">
                                                                9
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="px-6 py-4 whitespace-nowrap">
                                                        <div class="text-sm text-gray-900">KOBELCO EXCAVATOR 210 WITH
                                                            BREAKER
                                                        </div>
                                                    </td>
                                                    <td class="px-6 py-4 whitespace-nowrap">
                                                        <span
                                                            class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                                                            3 Nos
                                                        </span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="px-6 py-4 whitespace-nowrap">
                                                        <div class="flex items-center">
                                                            <div class="text-sm text-gray-500">
                                                                10
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="px-6 py-4 whitespace-nowrap">
                                                        <div class="text-sm text-gray-900">TATA HITTACHI 220 WITH
                                                            BREAKER
                                                        </div>
                                                    </td>
                                                    <td class="px-6 py-4 whitespace-nowrap">
                                                        <span
                                                            class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                                                            2 Nos
                                                        </span>
                                                    </td>
                                                </tr>


                                                <!-- More items... -->
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </p>
                </div>

            </div>
        </div>
    </section>
</div>
@endsection