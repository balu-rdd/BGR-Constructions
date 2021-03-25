@extends('Includes.layout')

@section('content')

<style>
    .accord-heading::after {
        content: '+';
        position: absolute;
        right: 1em;
        font-size: 1.5rem;
        font-weight: bold;
        text-align: center color: #fff;
    }

</style>
<!--Hero-->
<div class="pt-24">

    <div class="container px-3 mx-auto flex flex-wrap flex-col md:flex-row items-center">
        <!--Left Col-->
        <div class="flex flex-col w-full md:w-3/5 justify-center items-start text-center md:text-left">
            <h1 class="my-4 text-5xl font-bold leading-tight">Our Products</h1>
            {{-- <p class="uppercase tracking-loose w-full">The Company is fully geared to undertake projects as under:</p> --}}
            <p class="leading-normal text-2xl mb-8">
                <div class="flex flex-row">
                    <div class="flex-auto ">
                        <p class="py-2">
                            <i class="fas fa-arrow-circle-right"> AGGREGATES</i>
                            <i class="fas fa-arrow-circle-right px-6"> M – SAND</i>
                        </p>
                        <p class="py-2">
                            <i class="fas fa-arrow-circle-right px-6"> PLASTERING SAND</i>
                            <i class="fas fa-arrow-circle-right px-6"> SOLID BLOCKS</i>
                        </p>
                        <p class="py-2">
                            <i class="fas fa-arrow-circle-right px-6"> SOIL</i>
                            <i class="fas fa-arrow-circle-right px-6"> GRAVEL</i>
                        </p>
                    </div>
                </div>
            </p>
        </div>
        <!--Right Col-->
        <div class="w-full md:w-2/5 py-6 text-center">
            <img class="w-full md:w-4/5 z-50" src="{{asset('assets/001-concrete-mixer.svg')}}">
        </div>

    </div>

</div>


<div class="relative -mt-12 lg:-mt-24">
    <svg viewBox="0 0 1428 174" version="1.1" xmlns="http://www.w3.org/2000/svg"
        xmlns:xlink="http://www.w3.org/1999/xlink">
        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
            <g transform="translate(-2.000000, 44.000000)" fill="#FFFFFF" fill-rule="nonzero">
                <path
                    d="M0,0 C90.7283404,0.927527913 147.912752,27.187927 291.910178,59.9119003 C387.908462,81.7278826 543.605069,89.334785 759,82.7326078 C469.336065,156.254352 216.336065,153.6679 0,74.9732496"
                    opacity="0.100000001"></path>
                <path
                    d="M100,104.708498 C277.413333,72.2345949 426.147877,52.5246657 546.203633,45.5787101 C666.259389,38.6327546 810.524845,41.7979068 979,55.0741668 C931.069965,56.122511 810.303266,74.8455141 616.699903,111.243176 C423.096539,147.640838 250.863238,145.462612 100,104.708498 Z"
                    opacity="0.100000001"></path>
                <path
                    d="M1046,51.6521276 C1130.83045,29.328812 1279.08318,17.607883 1439,40.1656806 L1439,120 C1271.17211,77.9435312 1140.17211,55.1609071 1046,51.6521276 Z"
                    id="Path-4" opacity="0.200000003"></path>
            </g>
            <g transform="translate(-4.000000, 76.000000)" fill="#FFFFFF" fill-rule="nonzero">
                <path
                    d="M0.457,34.035 C57.086,53.198 98.208,65.809 123.822,71.865 C181.454,85.495 234.295,90.29 272.033,93.459 C311.355,96.759 396.635,95.801 461.025,91.663 C486.76,90.01 518.727,86.372 556.926,80.752 C595.747,74.596 622.372,70.008 636.799,66.991 C663.913,61.324 712.501,49.503 727.605,46.128 C780.47,34.317 818.839,22.532 856.324,15.904 C922.689,4.169 955.676,2.522 1011.185,0.432 C1060.705,1.477 1097.39,3.129 1121.236,5.387 C1161.703,9.219 1208.621,17.821 1235.4,22.304 C1285.855,30.748 1354.351,47.432 1440.886,72.354 L1441.191,104.352 L1.121,104.031 L0.457,34.035 Z">
                </path>
            </g>
        </g>
    </svg>
</div>



<section class="bg-white border-b py-8">
    <div class="container max-w-5xl mx-auto m-8">
        {{-- <h1 class="w-full my-2 text-5xl font-bold leading-tight text-center text-gray-800">Title</h1> --}}
        <div class="w-full mb-4">
            <div class="h-1 mx-auto gradient w-64 opacity-25 my-0 py-0 rounded-t"></div>
        </div>

        <div class="flex flex-wrap">
            <div class="w-5/6 sm:w-1/2 p-6">
                <h3 class="text-3xl text-gray-800 font-bold leading-none mb-3">AGGREGATES</h3>
                <p class="text-gray-600 mb-8">Aggregates are inert granular materials such as sand, gravel, or crushed
                    stone that, along with water and portland cement, are an essential ingredient in concrete. Fine
                    aggregates generally consist of natural sand or crushed stone with most particles passing through a
                    3/8-inch sieve
                </p>

                <ul class="list-disc text-gray-700">
                    <li>
                        supply
                    </li>
                    <li>
                        extraction
                    </li>
                    <li>
                        crushing, grinding, screening
                    </li>
                </ul>
                <br /><br />
                <div class=" max-w-xl mx-auto border-8 border-grey-900" x-data="{selected:null}">
                    <ul class="shadow-box">
                        <li class="relative border-b border-pink-900 text-gray-100 gradient">
                            <button type="button" class="w-full px-8 py-6 text-left"
                                @click="selected !== 1 ? selected = 1 : selected = null">
                                <div class="flex items-center justify-between">
                                    <span class="accord-heading">
                                        PROCESS </span>
                                    <span class="ico-plus"></span>
                                </div>
                            </button>

                            <div class="relative overflow-hidden transition-all max-h-0 duration-700" style=""
                                x-ref="container1"
                                x-bind:style="selected == 1 ? 'max-height: ' + $refs.container1.scrollHeight + 'px' : ''">
                                <div class="p-6">

                                    <ul class="list-decimal list-inside ">
                                        <li
                                            class="text-base antialiased font-normal tracking-wide leading-7 py-2 text-justify">
                                            <strong>Supply:</strong>Three major sources of aggregates can be identified:
                                            unconsolidated (loose) rock: sand and alluvial materials (dry river beds).
                                            This is “rolled” sand because the grains are rounded,
                                            solid rock: limestone and hard rock or crushed volcanic rock. This is
                                            “crushed” sand because the grains are pointed,
                                            recycled materials: often of industrial origin, from demolition, recycled
                                            concrete, railway ballast, etc.
                                        </li>
                                        <li
                                            class="text-base antialiased font-normal tracking-wide leading-7 py-2 text-justify">
                                            <strong>Extraction</strong> – Extraction is a key phase during production
                                            from solid rock, particularly because strategic choices, such as the
                                            selection of a slab for color or hardness, can make a real difference.
                                            Crushing, Grinding, Screening: Once extracted, the materials are transported
                                            to the processing site for scalping. This process involves removing unwanted
                                            materials, such as blocks, clay, etc.
                                            The scalped product is crushed once to transform the block into broken
                                            stone. The process is repeated as many times as necessary to obtain the
                                            desired fragment size.
                                        </li> identifies after 3 hours.
                                    </ul>
                                    <p
                                        class="text-base antialiased font-normal tracking-wide leading-7 py-2 text-justify">
                                        The resulting material is then screened to obtain aggregates of the desired
                                        grade. The larger pieces that are rejected are returned to the crusher and
                                        subsequently re-screened, with the process continuing until the desired size is
                                        obtained.
                                    </p>
                                    <p
                                        class="text-base antialiased font-normal tracking-wide leading-7 py-2 text-justify">
                                        Some categories of aggregates, such as sand and gravel, undergo complementary
                                        processing including washing, cycloning and scrubbing, primarily to make them
                                        cleaner..</p>
                                </div>
                            </div>

                        </li>
                    </ul>
                </div>

            </div>
            <div class="w-full sm:w-1/2 p-6">
                <div class="w-full sm:h-64 mx-auto bg-no-repeat bg-center "
                    style="background-image: url('assets/002-concrete-mixer.svg')">
                </div>
            </div>
        </div>

        <div class="flex flex-wrap flex-col-reverse sm:flex-row">
            <div class="w-full sm:w-1/2 p-6 mt-6">
                <div class="w-5/6 sm:h-96 mx-auto bg-no-repeat bg-center "
                    style="background-image: url('assets/002-sand.svg')">
                </div>
            </div>
            <div class="w-full sm:w-1/2 p-6 mt-6">
                <div class="align-middle">
                    <h3 class="text-3xl text-gray-800 font-bold leading-none mb-3">M – SAND</h3>
                    <p class="text-gray-600 mb-8">
                        <br>
                        <strong class="text-xl font-bold">Industrial Sheds</strong>
                        <br>
                        <br>
                        M-Sand stands for Manufactured Sand.<br /><br />
                        M-sand is crushed aggregates produced from hard granite stone which is cubically shaped with
                        grounded edges, washed and graded with consistency to be used as a substitute of river sand. It
                        is a fine aggregate that is produced by crushing stone, gravel, or slag.
                    </p>
                    <div class=" max-w-xl mx-auto border-8 border-grey-900" x-data="{selected:null}">
                        <ul class="shadow-box">
                            <li class="relative border-b border-gray-200 text-gray-100 gradient">
                                <button type="button" class="w-full px-8 py-6 text-left"
                                    @click="selected !== 1 ? selected = 1 : selected = null">
                                    <div class="flex items-center justify-between">
                                        <span class="accord-heading">
                                            PROCESS</span>
                                        <span class="ico-plus"></span>
                                    </div>
                                </button>

                                <div class="relative overflow-hidden transition-all max-h-0 duration-700" style=""
                                    x-ref="container1"
                                    x-bind:style="selected == 1 ? 'max-height: ' + $refs.container1.scrollHeight + 'px' : ''">
                                    <div class="p-6">
                                        <p
                                            class="text-base antialiased font-normal tracking-wide leading-7 text-justify">
                                            STAGES OF M-SAND
                                        </p>
                                        <ul class="list-decimal list-inside ">
                                            <li>
                                                Jaw Crusher.
                                            </li>
                                            <li>Cone crusher.
                                            </li>
                                            <li>
                                                VSIC Vertical Shaft Impact Crusher.
                                            </li>
                                            <li>
                                                Screening.
                                            </li>
                                            <li>
                                                Dry Classifier.
                                            </li>
                                            <li>
                                                Wet Classifier.
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div class="flex flex-wrap">
            <div class="w-5/6 sm:w-1/2 p-6">
                <h3 class="text-3xl text-gray-800 font-bold leading-none mb-3">PLASTERING SAND</h3>
                <p class="text-gray-600 mb-8">Plastering Sand is used for Wall plastering and brickwork purposes.The
                    granule thickness is 150 microns to 2.38 mm is ideal for block masonry and plastering
                    purposes.Coarse Aggregates is not required for plastering.Plastering M Sand to be mixed in the
                    cement ratio 1:4(Internal Works) and 1:6(External Works). Plastering sand does not require to be
                    filtered again at the construction site and can be used directly to prepare the mortar which saves
                    labor, time and money …
                </p>


            </div>
            <div class="w-full sm:w-1/2 p-6">
                <div class="w-full sm:h-64 mx-auto bg-no-repeat bg-center "
                    style="background-image: url('assets/001-brickwall.svg')">
                </div>
            </div>
        </div>

        <div class="flex flex-wrap flex-col-reverse sm:flex-row">
            <div class="w-full sm:w-1/2 p-6 mt-6">
                <div class="w-5/6 sm:h-96 mx-auto bg-no-repeat bg-center "
                    style="background-image: url('assets/bricks.svg')">
                </div>
            </div>
            <div class="w-full sm:w-1/2 p-6 mt-6">
                <div class="align-middle">
                    <h3 class="text-3xl text-gray-800 font-bold leading-none mb-3">SOLID BLOCKS </h3>
                    <p class="text-gray-600 mb-8">
                        <br>
                        Solid block, sometimes called cement brick (or cement stock brick) are widely used as building
                        material. Automatic or semi-automatic machines are available for making concrete block, but it
                        is possible to make them in the free available space of your home.<br /><br />
                        The materials required for the production of the solid blocks are aggregates, cement and water.
                        The aggregates of various types have been used with varying degree of success and they include
                        crushed stones, gravel, volcanic cinders, foamed slag, furnace clinker, etc. The aggregates are
                        selected by considering the weight, texture or composition of the unit designed. The strength,
                        texture and economy of the concrete block depend upon the careful grading of the aggregate. If
                        locally available aggregate is suitable, it will help in achieving the economy.
                    </p>

                </div>
            </div>
        </div>

        <div class="flex flex-wrap">
            <div class="w-5/6 sm:w-1/2 p-6">
                <h3 class="text-3xl text-gray-800 font-bold leading-none mb-3">SOIL
                </h3>
                <p class="text-gray-600 mb-8">Igneous, metamorphic, and sedimentary rocks can turn into soils due to
                    weathering and erosion processes. Soils can be produced by humans from natural or other manmade
                    materials. … Manmade rocks (such as concrete or concrete waste) could be also crushed and grinded to
                    generate soils (gravel, sand, cobbles, silts).
                </p>
                <p class="text-gray-600 mb-8">
                    Topsoil manufacture involves the blending of available soils with inorganic and organic materials
                    such as PAS 100 compost to create a fit for purpose soil for the establishment of vegetation. … such
                    as paper mill crumb, bio solids, and/or wastesoils, may be incorporated.
                </p>
            </div>
            <div class="w-full sm:w-1/2 p-6">
                <div class="w-full sm:h-64 mx-auto bg-no-repeat bg-center "
                    style="background-image: url('assets/002-sand.svg')">
                </div>
            </div>
        </div>


        <div class="flex flex-wrap flex-col-reverse sm:flex-row">
            <div class="w-full sm:w-1/2 p-6 mt-6">
                <div class="w-5/6 sm:h-96 mx-auto bg-no-repeat bg-center "
                    style="background-image: url('assets/001-pickaxe.svg')">
                </div>
            </div>
            <div class="w-full sm:w-1/2 p-6 mt-6">
                <div class="align-middle">
                    <h3 class="text-3xl text-gray-800 font-bold leading-none mb-3">GRAVEL </h3>
                    <p class="text-gray-600 mb-8">
                        Gravel are used for road construction, for mixing with asphalt, as construction fill, and in the
                        production of construction materials like concrete blocks, bricks, and pipes. It is also used to
                        make roofing shingles, used on icy roads in the winter, for railroad ballast, and water
                        filtration.

                        <br /><br />
                        <strong>
                            3 Types of Gravel & Their Uses
                        </strong>
                    </p>
                    <div class=" max-w-xl mx-auto border-8 border-grey-900" x-data="{selected:null}">
                        <ul class="shadow-box">
                            <li class="relative border-b border-gray-200 text-gray-100 gradient">
                                <button type="button" class="w-full px-8 py-6 text-left"
                                    @click="selected !== 1 ? selected = 1 : selected = null">
                                    <div class="flex items-center justify-between">
                                        <span class="accord-heading">
                                            M - SAND</span>
                                        <span class="ico-plus"></span>
                                    </div>
                                </button>

                                <div class="relative overflow-hidden transition-all max-h-0 duration-700" style=""
                                    x-ref="container1"
                                    x-bind:style="selected == 1 ? 'max-height: ' + $refs.container1.scrollHeight + 'px' : ''">
                                    <div class="p-6">
                                        <p
                                            class="text-base antialiased font-normal tracking-wide leading-7 text-justify">
                                            PEA GRAVEL
                                            <br>
                                            One of the most popular options, pea gravel is comprised of small, round
                                            stones.
                                        </p>

                                    </div>
                                </div>
                            </li>
                            <li class="relative border-b border-gray-200 text-gray-100 gradient">
                                <button type="button" class="w-full px-8 py-6 text-left"
                                    @click="selected !== 2 ? selected = 2 : selected = null">
                                    <div class="flex items-center justify-between">
                                        <span class="accord-heading">
                                            CRUSHED STONE</span>
                                        <span class="ico-plus"></span>
                                    </div>
                                </button>

                                <div class="relative overflow-hidden transition-all max-h-0 duration-700" style=""
                                    x-ref="container1"
                                    x-bind:style="selected == 2 ? 'max-height: ' + $refs.container1.scrollHeight + 'px' : ''">
                                    <div class="p-6">
                                        <p
                                            class="text-base antialiased font-normal tracking-wide leading-7 text-justify">
                                            <strong>Crushed stone</strong> is another popular aggregate, typically made
                                            from limestone or granite.
                                        </p>

                                    </div>
                                </div>
                            </li>
                            <li class="relative border-b border-gray-200 text-gray-100 gradient">
                                <button type="button" class="w-full px-8 py-6 text-left"
                                    @click="selected !== 3 ? selected = 3 : selected = null">
                                    <div class="flex items-center justify-between">
                                        <span class="accord-heading">
                                            QUARRY PROCESS</span>
                                        <span class="ico-plus"></span>
                                    </div>
                                </button>

                                <div class="relative overflow-hidden transition-all max-h-0 duration-700" style=""
                                    x-ref="container1"
                                    x-bind:style="selected == 3 ? 'max-height: ' + $refs.container1.scrollHeight + 'px' : ''">
                                    <div class="p-6">
                                        <p
                                            class="text-base antialiased font-normal tracking-wide leading-7 text-justify">
                                            Quarry process gravel contains a mix of stone dust and crushed stone.
                                        </p>

                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>








<!-- Change the colour #f8fafc to match the previous section colour -->
<svg class="wave-top" viewBox="0 0 1439 147" version="1.1" xmlns="http://www.w3.org/2000/svg"
    xmlns:xlink="http://www.w3.org/1999/xlink">
    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        <g transform="translate(-1.000000, -14.000000)" fill-rule="nonzero">
            <g class="wave" fill="#f8fafc">
                <path
                    d="M1440,84 C1383.555,64.3 1342.555,51.3 1317,45 C1259.5,30.824 1206.707,25.526 1169,22 C1129.711,18.326 1044.426,18.475 980,22 C954.25,23.409 922.25,26.742 884,32 C845.122,37.787 818.455,42.121 804,45 C776.833,50.41 728.136,61.77 713,65 C660.023,76.309 621.544,87.729 584,94 C517.525,105.104 484.525,106.438 429,108 C379.49,106.484 342.823,104.484 319,102 C278.571,97.783 231.737,88.736 205,84 C154.629,75.076 86.296,57.743 0,32 L0,0 L1440,0 L1440,84 Z">
                </path>
            </g>
            <g transform="translate(1.000000, 15.000000)" fill="#FFFFFF">
                <g transform="translate(719.500000, 68.500000) rotate(-180.000000) translate(-719.500000, -68.500000) ">
                    <path
                        d="M0,0 C90.7283404,0.927527913 147.912752,27.187927 291.910178,59.9119003 C387.908462,81.7278826 543.605069,89.334785 759,82.7326078 C469.336065,156.254352 216.336065,153.6679 0,74.9732496"
                        opacity="0.100000001"></path>
                    <path
                        d="M100,104.708498 C277.413333,72.2345949 426.147877,52.5246657 546.203633,45.5787101 C666.259389,38.6327546 810.524845,41.7979068 979,55.0741668 C931.069965,56.122511 810.303266,74.8455141 616.699903,111.243176 C423.096539,147.640838 250.863238,145.462612 100,104.708498 Z"
                        opacity="0.100000001"></path>
                    <path
                        d="M1046,51.6521276 C1130.83045,29.328812 1279.08318,17.607883 1439,40.1656806 L1439,120 C1271.17211,77.9435312 1140.17211,55.1609071 1046,51.6521276 Z"
                        opacity="0.200000003"></path>
                </g>
            </g>
        </g>
    </g>
</svg>

@endsection