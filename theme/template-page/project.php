<?php

/**
Template Name: Project
 */

get_header();
?>

<div class="page-content bg-white">
    <!-- inner page banner -->
    <div class="relative table md:h-[220px] h-[180px] w-full after:content-[''] after:absolute after:left-0 after:top-0 after:size-full after:bg-black/50 text-center bg-top bg-cover"
        style="background-image: url('https://industry.dexignzone.com/tailwind/demo/assets/images/banner/bnr3.jpg')">
        <div class="container relative z-1 table h-full">
            <div
                class="lg:flex table-cell items-center justify-between align-middle text-center md:h-[220px] h-[180px] maxmd:py-3.75">
                <h1
                    class="font-semibold md:text-[40px] text-2xl lg:mb-0 mb-2.5 text-white maxmd:leading-8 maxmd:text-center">
                    Portfolio Grid 4 Icon</h1>
                <!-- Breadcrumb row -->
                <div>
                    <ul class="flex justify-center items-center">
                        <li class="mr-[3px] text-white inline-block font-medium">
                            <a href="index.html">Trang chủ</a>
                        </li>
                        <?php echo svg('play-fill', '15', '15', 'text-white') ?>
                        <li class="mr-[3px] text-white inline-block font-medium">Portfolio Grid 4 Icon</li>
                    </ul>
                </div>
                <!-- Breadcrumb row END -->
            </div>
        </div>
    </div>
    <!-- inner page banner END -->
    <!-- contact area -->
    <div class="content-block">
        <!-- Portfolio  -->
        <div class="relative max2lg:bg-scroll md:py-20 py-7.5 portfolio uppercase bg-gray-100" id="portfolio">
            <div class="container">
                <div class="site-filters text-center mb-7.5">
                    <ul class="filters" data-bs-toggle="buttons">
                        <li data-filter="" class="mb-[3px] active inline-block duration-500">
                            <input type="radio" class="hidden">
                            <a href="javascript:void(0);"
                                class="btn bg-secondary text-white btn-sm rounded-full mx-1.25 maxmd:mb-2.5 uppercase duration-500"><span>All</span></a>
                        </li>
                        <li data-filter="web" class="mb-[3px] inline-block duration-500">
                            <input type="radio" class="hidden">
                            <a href="javascript:void(0);"
                                class="btn bg-secondary text-white btn-sm rounded-full mx-1.25 maxmd:mb-2.5 uppercase duration-500"><span>Agricultural</span></a>
                        </li>
                        <li data-filter="advertising" class="mb-[3px] inline-block duration-500">
                            <input type="radio" class="hidden">
                            <a href="javascript:void(0);"
                                class="btn bg-secondary text-white btn-sm rounded-full mx-1.25 maxmd:mb-2.5 uppercase duration-500"><span>Chemical</span></a>
                        </li>
                        <li data-filter="branding" class="mb-[3px] inline-block duration-500">
                            <input type="radio" class="hidden">
                            <a href="javascript:void(0);"
                                class="btn bg-secondary text-white btn-sm rounded-full mx-1.25 maxmd:mb-2.5 uppercase duration-500"><span>Mechanical</span></a>
                        </li>
                        <li data-filter="design" class="mb-[3px] inline-block duration-500">
                            <input type="radio" class="hidden">
                            <a href="javascript:void(0);"
                                class="btn bg-secondary text-white btn-sm rounded-full mx-1.25 maxmd:mb-2.5 uppercase duration-500"><span>Power
                                    Energy</span></a>
                        </li>
                        <li data-filter="photography" class="mb-[3px] inline-block duration-500">
                            <input type="radio" class="hidden">
                            <a href="javascript:void(0);"
                                class="btn bg-secondary text-white btn-sm rounded-full mx-1.25 maxmd:mb-2.5 uppercase duration-500"><span>plants</span></a>
                        </li>
                    </ul>
                </div>
                <div class="clearfix" id="lightgallery">
                    <ul id="masonry" class="row !m-0 w-full lightgallery text-center">
                        <li class="web design card-container xl:w-1/4 lg:w-1/3 sm:w-1/2 w-full p-0">
                            <div class="p-[7px] group">
                                <div
                                    class="relative overflow-hidden after:content-[''] after:absolute after:left-0 after:top-0 after:size-full after:bg-primary after:opacity-0 after:duration-700 group-hover:after:opacity-80">
                                    <img src="https://industry.dexignzone.com/tailwind/demo/assets/images/portfolio/image_1.jpg"
                                        alt="">
                                    <div
                                        class="absolute left-0 bottom-0 size-full text-center z-[10] opacity-0 invisible group-hover:opacity-100 group-hover:visible">
                                        <div
                                            class="left-1/2 absolute top-1/2 [transform:translate(-50%,_-50%)] w-full px-2.5 mt-3.75 opacity-0 duration-200 group-hover:mt-0 group-hover:opacity-100">
                                            <div class="text-white">
                                                <a class="mx-[7px] group/second" href="portfolio-details.html"><i
                                                        class="fas fa-link size-[46px] leading-[46px] rounded-full text-center bg-white text-black inline-block border-2 border-white duration-500 group-hover/second:bg-transparent group-hover/second:text-white"></i></a>
                                                <span
                                                    data-exthumbimage="https://industry.dexignzone.com/tailwind/demo/assets/images/portfolio/image_1.jpg"
                                                    data-src="https://industry.dexignzone.com/tailwind/demo/assets/images/portfolio/image_1.jpg"
                                                    class="lg-item group/second cursor-pointer"
                                                    title="Factory Managment">
                                                    <i
                                                        class="far fa-image size-[46px] leading-[46px] rounded-full text-center bg-white text-black inline-block border-2 border-white duration-500 group-hover/second:bg-transparent group-hover/second:text-white"></i>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="dez-info p-7.5 bg-white">
                                    <p class="mb-0 text-black"><a href="portfolio-details.html">Muchen Railway
                                            Station</a></p>
                                    <p class="mb-0 "><small>System</small></p>
                                </div>
                            </div>
                        </li>
                        <li
                            class="advertising branding photography card-container xl:w-1/4 lg:w-1/3 sm:w-1/2 w-full p-0">
                            <div class="p-[7px] group">
                                <div
                                    class="relative overflow-hidden after:content-[''] after:absolute after:left-0 after:top-0 after:size-full after:bg-primary after:opacity-0 after:duration-700 group-hover:after:opacity-80">
                                    <a href="portfolio-details.html"> <img
                                            src="https://industry.dexignzone.com/tailwind/demo/assets/images/portfolio/image_2.jpg"
                                            alt=""> </a>
                                    <div
                                        class="absolute left-0 bottom-0 size-full text-center z-[10] opacity-0 invisible group-hover:opacity-100 group-hover:visible">
                                        <div
                                            class="left-1/2 absolute top-1/2 [transform:translate(-50%,_-50%)] w-full px-2.5 mt-3.75 opacity-0 duration-200 group-hover:mt-0 group-hover:opacity-100">
                                            <div class="text-white">
                                                <a class="mx-[7px] group/second" href="portfolio-details.html"><i
                                                        class="fas fa-link size-[46px] leading-[46px] rounded-full text-center bg-white text-black inline-block border-2 border-white duration-500 group-hover/second:bg-transparent group-hover/second:text-white"></i></a>
                                                <span
                                                    data-exthumbimage="https://industry.dexignzone.com/tailwind/demo/assets/images/portfolio/image_1.jpg"
                                                    data-src="https://industry.dexignzone.com/tailwind/demo/assets/images/portfolio/image_1.jpg"
                                                    class="lg-item group/second cursor-pointer"
                                                    title="Factory Managment">
                                                    <i
                                                        class="far fa-image size-[46px] leading-[46px] rounded-full text-center bg-white text-black inline-block border-2 border-white duration-500 group-hover/second:bg-transparent group-hover/second:text-white"></i>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="dez-info p-7.5 bg-white">
                                    <p class="mb-0 text-black"><a href="portfolio-details.html">Mining Plant Set Up</a>
                                    </p>
                                    <p class="mb-0 "><small>Mining / Plants</small></p>
                                </div>
                            </div>
                        </li>
                        <li class="branding design photography card-container xl:w-1/4 lg:w-1/3 sm:w-1/2 w-full p-0">
                            <div class="p-[7px] group">
                                <div
                                    class="relative overflow-hidden after:content-[''] after:absolute after:left-0 after:top-0 after:size-full after:bg-primary after:opacity-0 after:duration-700 group-hover:after:opacity-80">
                                    <a href="portfolio-details.html"> <img
                                            src="https://industry.dexignzone.com/tailwind/demo/assets/images/portfolio/image_3.jpg"
                                            alt=""> </a>
                                    <div
                                        class="absolute left-0 bottom-0 size-full text-center z-[10] opacity-0 invisible group-hover:opacity-100 group-hover:visible">
                                        <div
                                            class="left-1/2 absolute top-1/2 [transform:translate(-50%,_-50%)] w-full px-2.5 mt-3.75 opacity-0 duration-200 group-hover:mt-0 group-hover:opacity-100">
                                            <div class="text-white">
                                                <a class="mx-[7px] group/second" href="portfolio-details.html"><i
                                                        class="fas fa-link size-[46px] leading-[46px] rounded-full text-center bg-white text-black inline-block border-2 border-white duration-500 group-hover/second:bg-transparent group-hover/second:text-white"></i></a>
                                                <span
                                                    data-exthumbimage="https://industry.dexignzone.com/tailwind/demo/assets/images/portfolio/image_1.jpg"
                                                    data-src="https://industry.dexignzone.com/tailwind/demo/assets/images/portfolio/image_1.jpg"
                                                    class="lg-item group/second cursor-pointer"
                                                    title="Factory Managment">
                                                    <i
                                                        class="far fa-image size-[46px] leading-[46px] rounded-full text-center bg-white text-black inline-block border-2 border-white duration-500 group-hover/second:bg-transparent group-hover/second:text-white"></i>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="dez-info p-7.5 bg-white">
                                    <p class="mb-0 text-black"><a href="portfolio-details.html">sanfran cisco bridge</a>
                                    </p>
                                    <p class="mb-0 "><small>Engineering</small></p>
                                </div>
                            </div>
                        </li>
                        <li class="web design card-container xl:w-1/4 lg:w-1/3 sm:w-1/2 w-full p-0">
                            <div class="p-[7px] group">
                                <div
                                    class="relative overflow-hidden after:content-[''] after:absolute after:left-0 after:top-0 after:size-full after:bg-primary after:opacity-0 after:duration-700 group-hover:after:opacity-80">
                                    <a href="portfolio-details.html"> <img
                                            src="https://industry.dexignzone.com/tailwind/demo/assets/images/portfolio/image_4.jpg"
                                            alt=""> </a>
                                    <div
                                        class="absolute left-0 bottom-0 size-full text-center z-[10] opacity-0 invisible group-hover:opacity-100 group-hover:visible">
                                        <div
                                            class="left-1/2 absolute top-1/2 [transform:translate(-50%,_-50%)] w-full px-2.5 mt-3.75 opacity-0 duration-200 group-hover:mt-0 group-hover:opacity-100">
                                            <div class="text-white">
                                                <a class="mx-[7px] group/second" href="portfolio-details.html"><i
                                                        class="fas fa-link size-[46px] leading-[46px] rounded-full text-center bg-white text-black inline-block border-2 border-white duration-500 group-hover/second:bg-transparent group-hover/second:text-white"></i></a>
                                                <span
                                                    data-exthumbimage="https://industry.dexignzone.com/tailwind/demo/assets/images/portfolio/image_1.jpg"
                                                    data-src="https://industry.dexignzone.com/tailwind/demo/assets/images/portfolio/image_1.jpg"
                                                    class="lg-item group/second cursor-pointer"
                                                    title="Factory Managment">
                                                    <i
                                                        class="far fa-image size-[46px] leading-[46px] rounded-full text-center bg-white text-black inline-block border-2 border-white duration-500 group-hover/second:bg-transparent group-hover/second:text-white"></i>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="dez-info p-7.5 bg-white">
                                    <p class="mb-0 text-black"><a href="portfolio-details.html">hamburg wind energy</a>
                                    </p>
                                    <p class="mb-0 "><small>Energy</small></p>
                                </div>
                            </div>
                        </li>
                        <li class="web branding card-container xl:w-1/4 lg:w-1/3 sm:w-1/2 w-full p-0">
                            <div class="p-[7px] group">
                                <div
                                    class="relative overflow-hidden after:content-[''] after:absolute after:left-0 after:top-0 after:size-full after:bg-primary after:opacity-0 after:duration-700 group-hover:after:opacity-80">
                                    <a href="portfolio-details.html"> <img
                                            src="https://industry.dexignzone.com/tailwind/demo/assets/images/portfolio/image_5.jpg"
                                            alt=""> </a>
                                    <div
                                        class="absolute left-0 bottom-0 size-full text-center z-[10] opacity-0 invisible group-hover:opacity-100 group-hover:visible">
                                        <div
                                            class="left-1/2 absolute top-1/2 [transform:translate(-50%,_-50%)] w-full px-2.5 mt-3.75 opacity-0 duration-200 group-hover:mt-0 group-hover:opacity-100">
                                            <div class="text-white">
                                                <a class="mx-[7px] group/second" href="portfolio-details.html"><i
                                                        class="fas fa-link size-[46px] leading-[46px] rounded-full text-center bg-white text-black inline-block border-2 border-white duration-500 group-hover/second:bg-transparent group-hover/second:text-white"></i></a>
                                                <span
                                                    data-exthumbimage="https://industry.dexignzone.com/tailwind/demo/assets/images/portfolio/image_1.jpg"
                                                    data-src="https://industry.dexignzone.com/tailwind/demo/assets/images/portfolio/image_1.jpg"
                                                    class="lg-item group/second cursor-pointer"
                                                    title="Factory Managment">
                                                    <i
                                                        class="far fa-image size-[46px] leading-[46px] rounded-full text-center bg-white text-black inline-block border-2 border-white duration-500 group-hover/second:bg-transparent group-hover/second:text-white"></i>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="dez-info p-7.5 bg-white">
                                    <p class="mb-0 text-black"><a href="portfolio-details.html">Capturing Manila</a></p>
                                    <p class="mb-0 "><small>industry</small></p>
                                </div>
                            </div>
                        </li>
                        <li class="advertising design photography card-container xl:w-1/4 lg:w-1/3 sm:w-1/2 w-full p-0">
                            <div class="p-[7px] group">
                                <div
                                    class="relative overflow-hidden after:content-[''] after:absolute after:left-0 after:top-0 after:size-full after:bg-primary after:opacity-0 after:duration-700 group-hover:after:opacity-80">
                                    <a href="portfolio-details.html"> <img
                                            src="https://industry.dexignzone.com/tailwind/demo/assets/images/portfolio/image_6.jpg"
                                            alt=""> </a>
                                    <div
                                        class="absolute left-0 bottom-0 size-full text-center z-[10] opacity-0 invisible group-hover:opacity-100 group-hover:visible">
                                        <div
                                            class="left-1/2 absolute top-1/2 [transform:translate(-50%,_-50%)] w-full px-2.5 mt-3.75 opacity-0 duration-200 group-hover:mt-0 group-hover:opacity-100">
                                            <div class="text-white">
                                                <a class="mx-[7px] group/second" href="portfolio-details.html"><i
                                                        class="fas fa-link size-[46px] leading-[46px] rounded-full text-center bg-white text-black inline-block border-2 border-white duration-500 group-hover/second:bg-transparent group-hover/second:text-white"></i></a>
                                                <span
                                                    data-exthumbimage="https://industry.dexignzone.com/tailwind/demo/assets/images/portfolio/image_1.jpg"
                                                    data-src="https://industry.dexignzone.com/tailwind/demo/assets/images/portfolio/image_1.jpg"
                                                    class="lg-item group/second cursor-pointer"
                                                    title="Factory Managment">
                                                    <i
                                                        class="far fa-image size-[46px] leading-[46px] rounded-full text-center bg-white text-black inline-block border-2 border-white duration-500 group-hover/second:bg-transparent group-hover/second:text-white"></i>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="dez-info p-7.5 bg-white">
                                    <p class="mb-0 text-black"><a href="portfolio-details.html">berlin central bank</a>
                                    </p>
                                    <p class="mb-0 "><small>Bank / Constructions</small></p>
                                </div>
                            </div>
                        </li>
                        <li class="web branding card-container xl:w-1/4 lg:w-1/3 sm:w-1/2 w-full p-0">
                            <div class="p-[7px] group">
                                <div
                                    class="relative overflow-hidden after:content-[''] after:absolute after:left-0 after:top-0 after:size-full after:bg-primary after:opacity-0 after:duration-700 group-hover:after:opacity-80">
                                    <a href="portfolio-details.html"> <img
                                            src="https://industry.dexignzone.com/tailwind/demo/assets/images/portfolio/image_7.jpg"
                                            alt=""> </a>
                                    <div
                                        class="absolute left-0 bottom-0 size-full text-center z-[10] opacity-0 invisible group-hover:opacity-100 group-hover:visible">
                                        <div
                                            class="left-1/2 absolute top-1/2 [transform:translate(-50%,_-50%)] w-full px-2.5 mt-3.75 opacity-0 duration-200 group-hover:mt-0 group-hover:opacity-100">
                                            <div class="text-white">
                                                <a class="mx-[7px] group/second" href="portfolio-details.html"><i
                                                        class="fas fa-link size-[46px] leading-[46px] rounded-full text-center bg-white text-black inline-block border-2 border-white duration-500 group-hover/second:bg-transparent group-hover/second:text-white"></i></a>
                                                <span
                                                    data-exthumbimage="https://industry.dexignzone.com/tailwind/demo/assets/images/portfolio/image_1.jpg"
                                                    data-src="https://industry.dexignzone.com/tailwind/demo/assets/images/portfolio/image_1.jpg"
                                                    class="lg-item group/second cursor-pointer"
                                                    title="Factory Managment">
                                                    <i
                                                        class="far fa-image size-[46px] leading-[46px] rounded-full text-center bg-white text-black inline-block border-2 border-white duration-500 group-hover/second:bg-transparent group-hover/second:text-white"></i>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="dez-info p-7.5 bg-white">
                                    <p class="mb-0 text-black"><a href="portfolio-details.html">Crop Identity</a></p>
                                    <p class="mb-0 "><small>Branding and Identity</small></p>
                                </div>
                            </div>
                        </li>
                        <li class="advertising design photography card-container xl:w-1/4 lg:w-1/3 sm:w-1/2 w-full p-0">
                            <div class="p-[7px] group">
                                <div
                                    class="relative overflow-hidden after:content-[''] after:absolute after:left-0 after:top-0 after:size-full after:bg-primary after:opacity-0 after:duration-700 group-hover:after:opacity-80">
                                    <a href="portfolio-details.html"> <img
                                            src="https://industry.dexignzone.com/tailwind/demo/assets/images/portfolio/image_8.jpg"
                                            alt=""> </a>
                                    <div
                                        class="absolute left-0 bottom-0 size-full text-center z-[10] opacity-0 invisible group-hover:opacity-100 group-hover:visible">
                                        <div
                                            class="left-1/2 absolute top-1/2 [transform:translate(-50%,_-50%)] w-full px-2.5 mt-3.75 opacity-0 duration-200 group-hover:mt-0 group-hover:opacity-100">
                                            <div class="text-white">
                                                <a class="mx-[7px] group/second" href="portfolio-details.html"><i
                                                        class="fas fa-link size-[46px] leading-[46px] rounded-full text-center bg-white text-black inline-block border-2 border-white duration-500 group-hover/second:bg-transparent group-hover/second:text-white"></i></a>
                                                <span
                                                    data-exthumbimage="https://industry.dexignzone.com/tailwind/demo/assets/images/portfolio/image_1.jpg"
                                                    data-src="https://industry.dexignzone.com/tailwind/demo/assets/images/portfolio/image_1.jpg"
                                                    class="lg-item group/second cursor-pointer"
                                                    title="Factory Managment">
                                                    <i
                                                        class="far fa-image size-[46px] leading-[46px] rounded-full text-center bg-white text-black inline-block border-2 border-white duration-500 group-hover/second:bg-transparent group-hover/second:text-white"></i>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="dez-info p-7.5 bg-white">
                                    <p class="mb-0 text-black"><a href="portfolio-details.html">hamburg wind energy</a>
                                    </p>
                                    <p class="mb-0 "><small>industry</small></p>
                                </div>
                            </div>
                        </li>
                        <li class="web photography card-container xl:w-1/4 lg:w-1/3 sm:w-1/2 w-full p-0">
                            <div class="p-[7px] group">
                                <div
                                    class="relative overflow-hidden after:content-[''] after:absolute after:left-0 after:top-0 after:size-full after:bg-primary after:opacity-0 after:duration-700 group-hover:after:opacity-80">
                                    <a href="portfolio-details.html"> <img
                                            src="https://industry.dexignzone.com/tailwind/demo/assets/images/portfolio/image_9.jpg"
                                            alt=""> </a>
                                    <div
                                        class="absolute left-0 bottom-0 size-full text-center z-[10] opacity-0 invisible group-hover:opacity-100 group-hover:visible">
                                        <div
                                            class="left-1/2 absolute top-1/2 [transform:translate(-50%,_-50%)] w-full px-2.5 mt-3.75 opacity-0 duration-200 group-hover:mt-0 group-hover:opacity-100">
                                            <div class="text-white">
                                                <a class="mx-[7px] group/second" href="portfolio-details.html"><i
                                                        class="fas fa-link size-[46px] leading-[46px] rounded-full text-center bg-white text-black inline-block border-2 border-white duration-500 group-hover/second:bg-transparent group-hover/second:text-white"></i></a>
                                                <span
                                                    data-exthumbimage="https://industry.dexignzone.com/tailwind/demo/assets/images/portfolio/image_1.jpg"
                                                    data-src="https://industry.dexignzone.com/tailwind/demo/assets/images/portfolio/image_1.jpg"
                                                    class="lg-item group/second cursor-pointer"
                                                    title="Factory Managment">
                                                    <i
                                                        class="far fa-image size-[46px] leading-[46px] rounded-full text-center bg-white text-black inline-block border-2 border-white duration-500 group-hover/second:bg-transparent group-hover/second:text-white"></i>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="dez-info p-7.5 bg-white">
                                    <p class="mb-0 text-black"><a href="portfolio-details.html">Capturing Manila</a></p>
                                    <p class="mb-0 "><small>industry</small></p>
                                </div>
                            </div>
                        </li>
                        <li class="advertising branding card-container xl:w-1/4 lg:w-1/3 sm:w-1/2 w-full p-0">
                            <div class="p-[7px] group">
                                <div
                                    class="relative overflow-hidden after:content-[''] after:absolute after:left-0 after:top-0 after:size-full after:bg-primary after:opacity-0 after:duration-700 group-hover:after:opacity-80">
                                    <a href="portfolio-details.html"> <img
                                            src="https://industry.dexignzone.com/tailwind/demo/assets/images/portfolio/image_10.jpg"
                                            alt=""> </a>
                                    <div
                                        class="absolute left-0 bottom-0 size-full text-center z-[10] opacity-0 invisible group-hover:opacity-100 group-hover:visible">
                                        <div
                                            class="left-1/2 absolute top-1/2 [transform:translate(-50%,_-50%)] w-full px-2.5 mt-3.75 opacity-0 duration-200 group-hover:mt-0 group-hover:opacity-100">
                                            <div class="text-white">
                                                <a class="mx-[7px] group/second" href="portfolio-details.html"><i
                                                        class="fas fa-link size-[46px] leading-[46px] rounded-full text-center bg-white text-black inline-block border-2 border-white duration-500 group-hover/second:bg-transparent group-hover/second:text-white"></i></a>
                                                <span
                                                    data-exthumbimage="https://industry.dexignzone.com/tailwind/demo/assets/images/portfolio/image_1.jpg"
                                                    data-src="https://industry.dexignzone.com/tailwind/demo/assets/images/portfolio/image_1.jpg"
                                                    class="lg-item group/second cursor-pointer"
                                                    title="Factory Managment">
                                                    <i
                                                        class="far fa-image size-[46px] leading-[46px] rounded-full text-center bg-white text-black inline-block border-2 border-white duration-500 group-hover/second:bg-transparent group-hover/second:text-white"></i>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="dez-info p-7.5 bg-white">
                                    <p class="mb-0 text-black"><a href="portfolio-details.html">berlin central bank</a>
                                    </p>
                                    <p class="mb-0 "><small>Bank / Constructions</small></p>
                                </div>
                            </div>
                        </li>
                        <li class="web design card-container xl:w-1/4 lg:w-1/3 sm:w-1/2 w-full p-0">
                            <div class="p-[7px] group">
                                <div
                                    class="relative overflow-hidden after:content-[''] after:absolute after:left-0 after:top-0 after:size-full after:bg-primary after:opacity-0 after:duration-700 group-hover:after:opacity-80">
                                    <a href="portfolio-details.html"> <img
                                            src="https://industry.dexignzone.com/tailwind/demo/assets/images/portfolio/image_11.jpg"
                                            alt=""> </a>
                                    <div
                                        class="absolute left-0 bottom-0 size-full text-center z-[10] opacity-0 invisible group-hover:opacity-100 group-hover:visible">
                                        <div
                                            class="left-1/2 absolute top-1/2 [transform:translate(-50%,_-50%)] w-full px-2.5 mt-3.75 opacity-0 duration-200 group-hover:mt-0 group-hover:opacity-100">
                                            <div class="text-white">
                                                <a class="mx-[7px] group/second" href="portfolio-details.html"><i
                                                        class="fas fa-link size-[46px] leading-[46px] rounded-full text-center bg-white text-black inline-block border-2 border-white duration-500 group-hover/second:bg-transparent group-hover/second:text-white"></i></a>
                                                <span
                                                    data-exthumbimage="https://industry.dexignzone.com/tailwind/demo/assets/images/portfolio/image_1.jpg"
                                                    data-src="https://industry.dexignzone.com/tailwind/demo/assets/images/portfolio/image_1.jpg"
                                                    class="lg-item group/second cursor-pointer"
                                                    title="Factory Managment">
                                                    <i
                                                        class="far fa-image size-[46px] leading-[46px] rounded-full text-center bg-white text-black inline-block border-2 border-white duration-500 group-hover/second:bg-transparent group-hover/second:text-white"></i>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="dez-info p-7.5 bg-white">
                                    <p class="mb-0 text-black"><a href="portfolio-details.html">sanfran cisco bridge</a>
                                    </p>
                                    <p class="mb-0 "><small>Engineering</small></p>
                                </div>
                            </div>
                        </li>
                        <li
                            class="advertising branding photography card-container xl:w-1/4 lg:w-1/3 sm:w-1/2 w-full p-0">
                            <div class="p-[7px] group">
                                <div
                                    class="relative overflow-hidden after:content-[''] after:absolute after:left-0 after:top-0 after:size-full after:bg-primary after:opacity-0 after:duration-700 group-hover:after:opacity-80">
                                    <a href="portfolio-details.html"> <img
                                            src="https://industry.dexignzone.com/tailwind/demo/assets/images/portfolio/image_12.jpg"
                                            alt=""> </a>
                                    <div
                                        class="absolute left-0 bottom-0 size-full text-center z-[10] opacity-0 invisible group-hover:opacity-100 group-hover:visible">
                                        <div
                                            class="left-1/2 absolute top-1/2 [transform:translate(-50%,_-50%)] w-full px-2.5 mt-3.75 opacity-0 duration-200 group-hover:mt-0 group-hover:opacity-100">
                                            <div class="text-white">
                                                <a class="mx-[7px] group/second" href="portfolio-details.html"><i
                                                        class="fas fa-link size-[46px] leading-[46px] rounded-full text-center bg-white text-black inline-block border-2 border-white duration-500 group-hover/second:bg-transparent group-hover/second:text-white"></i></a>
                                                <span
                                                    data-exthumbimage="https://industry.dexignzone.com/tailwind/demo/assets/images/portfolio/image_1.jpg"
                                                    data-src="https://industry.dexignzone.com/tailwind/demo/assets/images/portfolio/image_1.jpg"
                                                    class="lg-item group/second cursor-pointer"
                                                    title="Factory Managment">
                                                    <i
                                                        class="far fa-image size-[46px] leading-[46px] rounded-full text-center bg-white text-black inline-block border-2 border-white duration-500 group-hover/second:bg-transparent group-hover/second:text-white"></i>

                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="dez-info p-7.5 bg-white">
                                    <p class="mb-0 text-black"><a href="portfolio-details.html">Muchen Railway
                                            Station</a></p>
                                    <p class="mb-0 "><small>System</small></p>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- contact area END -->
</div>

<?php
get_footer();