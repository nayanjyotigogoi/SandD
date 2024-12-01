
@extends('layout')
@section('title', 'S&D')

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

    <!-- About Us Section -->
    <section id="About" class="p-10 md-p-l5 bg-indigo-lightest-10">
        <div class="mx-auto text-center md-w-70pc">
            <!-- <h2 class="white fs-10 md-fs-xl1 fw-800 lh-2 mb-5">About S&D</h2> -->
            <h2 class="white fw-800 lh-2 mb-5" style="font-size: 60px;">About S&D</h2>

            <p class="white fw-600 fs-m1 mb-5 opacity-60">
                At S&D, we are dedicated to creating innovative solutions that drive development across various sectors. From building robust infrastructure to providing cutting-edge technology solutions, our team is committed to shaping the future with every project.
            </p>
            <p class="white fw-600 fs-m1 mb-10 opacity-60">
                We are a diverse team of professionals with expertise in software development, civil works, transportation, retail, and more. Our mission is to provide high-quality services that exceed our clients' expectations and help them thrive in an ever-changing world.
            </p>

            <div class="flex flex-column md-flex-row justify-center md-justify-between">
                <!-- Our Vision -->
                <div class="w-100pc md-w-30pc p-5">
                    <h4 class="white fs-m3 fw-600 mb-5">Our Vision</h4>
                    <div class="indigo-lightest fw-600 fs-s1 opacity-50">
                        To be the leading provider of innovative and sustainable solutions that transform industries and communities.
                    </div>
                </div>
                <!-- Our Mission -->
                <div class="w-100pc md-w-30pc p-5">
                    <h4 class="white fs-m3 fw-600 mb-5">Our Mission</h4>
                    <div class="indigo-lightest fw-600 fs-s1 opacity-50">
                        To empower businesses with comprehensive development services, delivering excellence in every project we undertake.
                    </div>
                </div>
                <!-- Our Values -->
                <div class="w-100pc md-w-30pc p-5">
                    <h4 class="white fs-m3 fw-600 mb-5">Our Values</h4>
                    <div class="indigo-lightest fw-600 fs-s1 opacity-50">
                        Integrity, innovation, excellence, and collaboration are at the core of everything we do.
                    </div>
                </div>
            </div>

            <!-- Call to Action -->
            <div class="mt-10">
                <a href="#services" class="button bg-indigo-lightest-10 fs-s3 white no-underline hover-opacity-100 hover-scale-up-1 ease-300">Discover Our Services</a>
            </div>
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
        <div class="w-100pc md-w-70pc mx-auto py-10">
            <h2 class="white fs-l2 md-fs-xl1 fw-900 lh-2">
            We Turn Ideas Into <span class="border-b bc-indigo bw-4"> Extraordinary Realities</span> Across Every Industry</h2>
        </div>
    </section>


            <!-- product options -->
    <section id="Products" class="py-l10">
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


    <!--Services-->            
        <section id="pricing" class="p-10 md-p-l5 bg-indigo-lightest-10">
            <div class="p-10 flex flex-wrap">
                <div class="w-100pc md-w-50pc">
                    <div class="p-5">
                        <h4 class="white fw-800 fs-l3 mb-5">S&D Services</h4>
                        <div class="indigo-lightest fw-600 fs-m1 opacity-50">
                            Explore the wide range of services we offer to cater to your needs.
                        </div>
                        <h4 class="white fw-600 fs-m2 mt-10">Companies trust us to deliver excellence.</h4>
                    </div>
                </div>
            </div>
            <div class="p-10 flex flex-wrap"> 
                
                    <!-- Development -->
                    <div class="w-100pc md-w-25pc">
                        <div class="m-5 p-5 br-8 bg-indigo-lightest-10 overflow-hidden transition-transform duration-300 hover-transform hover-scale-105 hover-scale-up-1 ease-300" >
                            <div class="p-3">
                                <h3 class="indigo">Development</h3>
                            </div>
                            <div class="p-3 indigo-lightest fw-400 fs-s1 lh-5">
                                <div>
                                    <i class="h-3 indigo" stroke-width="4" data-feather="check"></i>
                                    <span class="opacity-50"> Project consultation</span>
                                </div>
                                <div>
                                    <i class="h-3 indigo" stroke-width="4" data-feather="check"></i>
                                    <span class="opacity-50"> website Development & setup</span>
                                </div>
                                <div>
                                    <i class="h-3 indigo" stroke-width="4" data-feather="check"></i>
                                    <span class="opacity-50">Integration with third-party tools</span>
                                </div>
                                <div>
                                    <i class="h-3 indigo" stroke-width="4" data-feather="check"></i>
                                    <span class="opacity-50">24x7 technical support</span>
                                </div>
                            </div>
                            <div class="p-3">
                                <button class="button full bg-black white hover-opacity-100 hover-scale-up-1 ease-300">Know More</button>
                            </div>
                        </div>
                    </div>
           

                    <!-- Civil Works -->
                    <div class="w-100pc md-w-25pc">
                        <div class="m-3 p-5 br-8 bg-white overflow-hidden transition-transform duration-300 hover-transform hover-scale-105 hover-scale-up-1 ease-300">
                            <div class="p-3">
                                <h3 class="indigo">Civil Works</h3>
                            </div>
                            <div class="p-3 black fw-400 fs-s1 lh-5">
                                <div>
                                    <i class="h-3 indigo" stroke-width="4" data-feather="check"></i>
                                    <span class="opacity-50"> Project blueprint</span>
                                </div>
                                <div>
                                    <i class="h-3 indigo" stroke-width="4" data-feather="check"></i>
                                    <span class="opacity-50">Site visit for consultation</span>
                                </div>
                                <div>
                                    <i class="h-3 indigo" stroke-width="4" data-feather="check"></i>
                                    <span class="opacity-50">Material estimation</span>
                                </div>
                                <div>
                                    <i class="h-3 indigo" stroke-width="4" data-feather="check"></i>
                                    <span class="opacity-50">24x7 support</span>
                                </div>
                            </div>
                            <div class="p-3">
                                <button class="button full bg-indigo white hover-opacity-100 hover-scale-up-1 ease-300">Know More</button>
                            </div>
                        </div>
                    </div>

                    <!-- Travel Solutions -->
                    <div class="w-100pc md-w-25pc">
                        <div class="m-3 p-5 br-8 bg-indigo-lightest-10 overflow-hidden transition-transform duration-300 hover-transform hover-scale-105 hover-scale-up-1 ease-300">
                            <div class="p-3">
                                <h3 class="indigo">Travel Solutions</h3>
                            </div>
                            <div class="p-3 indigo-lightest fw-400 fs-s1 lh-5">
                                <div>
                                    <i class="h-3 indigo" stroke-width="4" data-feather="check"></i>
                                    <span class="opacity-50"> Vehicle booking consultation</span>
                                </div>
                                <div>
                                    <i class="h-3 indigo" stroke-width="4" data-feather="check"></i>
                                    <span class="opacity-50">Fleet overview (cars, trucks, buses)</span>
                                </div>
                                <div>
                                    <i class="h-3 indigo" stroke-width="4" data-feather="check"></i>
                                    <span class="opacity-50">Flexible scheduling</span>
                                </div>
                                <div>
                                    <i class="h-3 indigo" stroke-width="4" data-feather="check"></i>
                                    <span class="opacity-50">24x7 travel support</span>
                                </div>
                            </div>
                            <div class="p-3">
                                <button class="button full bg-black white hover-opacity-100 hover-scale-up-1 ease-300">Know More</button>
                            </div>
                        </div>
                    </div>

                    <!-- Clothing -->
                    <div class="w-100pc md-w-25pc">
                        <div class="m-3 p-5 br-8 bg-white overflow-hidden transition-transform duration-300 hover-transform hover-scale-105 hover-scale-up-1 ease-300">
                            <div class="p-3">
                                <h3 class="indigo">Clothing</h3>
                            </div>
                            <div class="p-3 black fw-400 fs-s1 lh-5">
                                <div>
                                    <i class="h-3 indigo" stroke-width="4" data-feather="check"></i>
                                    <span class="opacity-50"> Personalized consultation</span>
                                </div>
                                <div>
                                    <i class="h-3 indigo" stroke-width="4" data-feather="check"></i>
                                    <span class="opacity-50">Seasonal fashion updates</span>
                                </div>
                                <div>
                                    <i class="h-3 indigo" stroke-width="4" data-feather="check"></i>
                                    <span class="opacity-50">Custom fitting advice</span>
                                </div>
                                <div>
                                    <i class="h-3 indigo" stroke-width="4" data-feather="check"></i>
                                    <span class="opacity-50">24x7 support for queries</span>
                                </div>
                            </div>
                            <div class="p-3">
                                <button class="button full bg-indigo white hover-opacity-100 hover-scale-up-1 ease-300">Know More</button>
                            </div>
                        </div>
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
