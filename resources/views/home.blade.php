@extends('layout')

@section('title', 'Home')

@section('content')
<!-- Hero Section -->
<section id="home" class="min-h-100vh flex justify-start items-center">
    <style>
        .learn-more {
            color: #fff; /* Default link color */
            text-decoration: none;
            transition: color 0.3s ease; /* Smooth color transition */
        }

        .learn-more:hover {
            color: #e74c3c; /* Hover color */
            text-decoration: underline;
        }
    </style>
    <div class="mx-5 md-mx-l5">
        <div class="inline-block br-round bg-indigo-30 indigo-lightest p-2 fs-s2 mb-5">
            <div class="inline-block bg-indigo indigo-lightest br-round px-3 py-1 mr-3 fs-s3"><a href="#" class="learn-more">Join Us</div></a>
            We are coming to Guwahati City. 
            <!-- <a href="#" class="learn-more">Learn more</a> -->
        </div>
        <h1 class="white fs-l3 lh-2 md-fs-xl1 md-lh-1 fw-900">S&D - Solutions for Today, <br />Development for Tomorrow!</h1>
        <div class="br-8 mt-10 inline-flex">
            <input type="text"
                class="input-lg half bw-0 fw-200 bg-indigo-lightest-10 white ph-indigo-lightest focus-white opacity-80 fs-s3 py-5 min-w-25vw br-r-0"
                placeholder="Email Address">
            <button class="button-lg bg-indigo-lightest-20 indigo-lightest focus-white fw-300 fs-s3 mr-0 br-l-0">Get
                Started</button>
        </div>
        <div class="white opacity-20 fs-s3 mt-3">No credit card required</div>
    </div>
</section>

<!-- Features Section -->
<section id="features" class="p-10 md-p-l5">
    <div class="flex flex-column md-flex-row mx-auto">
        <div class="w-100pc md-w-40pc">
            <div class="br-8 p-5 m-5">
                <div class="flex justify-center items-center bg-indigo-lightest-10 white w-l5 h-l5 br-round mb-5">
                    <i data-feather="inbox" class="w-l5"></i>
                </div>
                <h4 class="white fw-600 fs-m3 mb-5">Endless Possibilities</h4>
                <div class="indigo-lightest fw-600 fs-m1 lh-3 opacity-50">
                From building infrastructure to delivering fashion and transportation, S&D handles every aspect of development with expertise.
                </div>
                <a href="#" class="mt-5 button bg-indigo-lightest-10 fs-s3 white no-underline hover-opacity-100 hover-scale-up-1 ease-300">Read</a>
            </div>
        </div>
        <div class="w-100pc md-w-40pc">
            <div class="br-8 p-5 m-5">
                <div class="flex justify-center items-center bg-indigo-lightest-10 white w-l5 h-l5 br-round mb-5">
                    <i data-feather="cpu" class="w-l5"></i>
                </div>
                <h4 class="white fw-600 fs-m3 mb-5">Compute</h4>
                <div class="indigo-lightest fw-600 fs-m1 opacity-50">
                COMPUTE stands for our commitment to harnessing the power of technology to drive innovation and efficiency across all sectors. 
                </div>
                <a href="#" class="mt-5 button bg-indigo-lightest-10 fs-s3 white no-underline hover-opacity-100 hover-scale-up-1 ease-300">Read</a>
            </div>
        </div>
        <div class="w-100pc md-w-40pc">
            <div class="br-8 p-5 m-5">
                <div class="flex justify-center items-center bg-indigo-lightest-10 white w-l5 h-l5 br-round mb-5">
                    <i data-feather="database" class="w-l5"></i>
                </div>
                <h4 class="white fw-600 fs-m3 mb-5">Multi-Domain Excellence</h4>
                <div class="indigo-lightest fw-600 fs-m1 opacity-50">
                From software to infrastructure, delivering solutions for every development need.
                </div>
                <a href="#" class="mt-5 button bg-indigo-lightest-10 fs-s3 white no-underline hover-opacity-100 hover-scale-up-1 ease-300">Read</a>
            </div>
        </div>
    </div>
</section>

<!-- big text -->
    <section class="p-10 md-py-10">
        <div class="w-100pc md-w-90pc mx-auto py-10">
            <h2 class="white fs-l2 md-fs-xl1 fw-900 lh-2">
                S&D: From Groundbreaking Construction To <span class="border-b bc-indigo bw-6">Innovative Technology</span> And Seamless Travel, We Turn Ideas Into<span class="border-b bc-indigo bw-6"> Extraordinary Realities </span>  Across Every Industry. 
            </h2>
        </div>
    </section>

            
    <!-- product options -->
    <section class="py-l10">
        <div class="flex flex-column md-flex-row md-w-80pc mx-auto">
            <div class="w-100pc md-w-50pc">
                <div class="br-8 p-5 m-5 bg-indigo-lightest-10 pointer hover-scale-up-1 ease-300">
                    <a href="">
                        <div class="inline-block bg-indigo indigo-lightest br-3 px-4 py-1 mb-10 fs-s4 uppercase">    
                            MYGHYCITY
                        </div> 
                    </a>
                    <div class="indigo-lightest fw-600 fs-m1">MYGHYCITY.COM <span class="opacity-60"> is your go-to platform for discovering all the exciting events happening around you. From music festivals and food fests to local sales and government-hosted gatherings, stay updated on every event, anytime, anywhere!</span> </div>
                    <a href="#" class="mt-10 button bg-black fs-s3 white no-underline">VISIT MYGHYCITY.com</a>
                </div>
            </div>
            <div class="w-100pc md-w-50pc">
                <div class="br-8 p-5 m-5 bg-indigo-lightest-10  pointer hover-scale-up-1 ease-300">
                    <div class="inline-block bg-indigo indigo-lightest br-3 px-4 py-1 mb-10 fs-s4 uppercase">
                        devSphere</div>
                    <div class="indigo-lightest fw-600 fs-m1">devSphere <span class="opacity-30"> COMING SOON.</span> </div>
                    <a href="#" class="mt-10 button bg-black fs-s3 white no-underline">Know more</a>

                </div>
            </div>
        </div>
    </section>
      <!-- subscribe -->
    <section class="p-10 md-p-l5">
        <div class="br-8 bg-indigo-lightest-10 p-5 md-p-l5 flex flex-wrap md-justify-between md-items-center">
            <div class="w-100pc md-w-33pc">
                <h2 class="white fs-m4 fw-800">Try S&D today</h2>
                <p class="fw-600 indigo-lightest opacity-40">Get <p class="fw-600 indigo-lightest opacity-100">MYGHYCITY.com’s FREE</p>
                <p class="fw-600 indigo-lightest opacity-40">first year for posting your events! Or, enjoy forever-free event posting and get featured on our platform. Don’t miss out on the chance to showcase your events to the local community</p>
            </div>
            <div class="w-100pc md-w-50pc">
                <div class="flex my-5">
                    <input type="text"
                        class="input-lg flex-grow-1 bw-0 fw-200 bg-indigo-lightest-10 white ph-indigo-lightest focus-white opacity-80 fs-s3 py-5 br-r-0"
                        placeholder="Email Address">
                    <button class="button-lg bg-indigo indigo-lightest fw-300 fs-s3 br-l-0">Get Started</button>
                </div>
            </div>
        </div>
    </section>
    
@endsection
