<?php

/**
Template Name: Project-detail
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
                    Detail</h1>
                <!-- Breadcrumb row -->
                <div>
                    <ul class="flex justify-center items-center">
                        <li class="mr-[3px] text-white inline-block font-medium">
                            <a href="index.html">Trang chủ</a>
                        </li>
                        <?php echo svg('play-fill', '15', '15', 'text-white') ?>
                        <li class="mr-[3px] text-white inline-block font-medium">Detail</li>
                    </ul>
                </div>
                <!-- Breadcrumb row END -->
            </div>
        </div>
    </div>
    <!-- inner page banner END -->
    <!-- contact area -->
    <div class="content-block">
        <!-- Portfolio Details -->
        <div class="relative max2lg:bg-scroll md:pt-20 md:pb-13.5 sm:pb-5 pt-7.5 bg-white">
            <div class="container">
                <div class="grid grid-cols-12 gap-x-6">
                    <div class="lg:col-span-6 col-span-12 mb-7.5">
                        <h2 class="text-black font-semibold mb-3.75">Project Information</h2>
                        <p class="">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                            Ipsum has been the industry's standard dummy text ever since the when an printer took a
                            galley of type and scrambled it to make.</p>
                        <p class="">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                            Ipsum has been the industry's standard dummy text ever since the when an printer took a
                            galley of type and scrambled it to make.</p>
                        <div class="grid grid-cols-12 mb-10 bg-[#f5f5f5] p-7.5 pb-0">
                            <div class="sm:col-span-6 col-span-12">
                                <div class="pl-[55px] mb-7.5 font-semibold relative text-2sm">
                                    <i
                                        class="flex justify-center items-center absolute bg-primary size-10 text-white rounded-full leading-10 text-center left-0 top-0"><?php echo svg('person', '20', '20') ?></i>
                                    <strong class="font-semibold block">CLIENT</strong> Martin Stewart
                                </div>
                            </div>
                            <div class="sm:col-span-6 col-span-12">
                                <div class="pl-[55px] mb-7.5 font-semibold relative text-2sm">
                                    <i
                                        class="flex justify-center items-center absolute bg-primary size-10 text-white rounded-full leading-10 text-center left-0 top-0"><?php echo svg('geo-alt', '20', '20') ?></i>
                                    <strong class="font-semibold block">LOCATION</strong>London, UK
                                </div>
                            </div>
                            <div class="sm:col-span-6 col-span-12">
                                <div class="pl-[55px] mb-7.5 font-semibold relative text-2sm">
                                    <i
                                        class="flex justify-center items-center absolute bg-primary size-10 text-white rounded-full leading-10 text-center left-0 top-0"><?php echo svg('arrows-angle-expand', '20', '20', '') ?></i>
                                    <strong class="font-semibold block">SIZE</strong>1,200m<sup>2</sup>
                                </div>
                            </div>
                            <div class="sm:col-span-6 col-span-12">
                                <div class="pl-[55px] mb-7.5 font-semibold relative text-2sm">
                                    <i
                                        class="flex justify-center items-center absolute bg-primary size-10 text-white rounded-full leading-10 text-center left-0 top-0"><?php echo svg('house', '20', '20') ?></i>
                                    <strong class="font-semibold block">TYPE</strong>Residential Project
                                </div>
                            </div>
                        </div>
                        <h2 class="text-black font-semibold mb-3.75">Scope Of Work</h2>
                        <p class="">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                            Ipsum has been the industry's standard dummy text ever since the when an printer took a
                            galley of type and scrambled it to make.</p>
                        <div class="grid grid-cols-12 gap-x-6">
                            <div class="col-span-12">
                                <div class="mb-7.5 relative">
                                    <div class="float-left mr-2.5 w-14.5">
                                        <a href="javascript:void(0);" class="icon-cell text-primary">
                                            <i class="flaticon-factory text-[45px]"></i>
                                        </a>
                                    </div>
                                    <div class="overflow-hidden">
                                        <h5 class="dlab-tilte">Material Engineering</h5>
                                        <p class="mb-0">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed
                                            diam nonummy nibh euismod..</p>
                                    </div>
                                </div>
                                <div class="mb-7.5 relative">
                                    <div class="float-left mr-2.5 w-14.5">
                                        <a href="javascript:void(0);" class="icon-cell text-primary">
                                            <i class="flaticon-settings text-[45px]"></i>
                                        </a>
                                    </div>
                                    <div class="overflow-hidden">
                                        <h5 class="dlab-tilte">Chemical Research</h5>
                                        <p class="mb-0">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed
                                            diam nonummy nibh euismod..</p>
                                    </div>
                                </div>
                                <div class="relative">
                                    <div class="float-left mr-2.5 w-14.5">
                                        <a href="javascript:void(0);" class="icon-cell text-primary">
                                            <i class="flaticon-worker text-[45px]"></i>
                                        </a>
                                    </div>
                                    <div class="overflow-hidden">
                                        <h5 class="dlab-tilte">Petroleum Engineering</h5>
                                        <p class="mb-0">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed
                                            diam nonummy nibh euismod..</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="lg:col-span-6 col-span-12">
                        <div class="grid grid-cols-12 gap-x-6">
                            <div class="col-span-12 mb-7.5">
                                <img alt=""
                                    src="https://industry.dexignzone.com/tailwind/demo/assets/images/about/pic3.jpg">
                            </div>
                            <div class="sm:col-span-6 col-span-12 mb-7.5">
                                <img alt=""
                                    src="https://industry.dexignzone.com/tailwind/demo/assets/images/about/pic3.jpg">
                            </div>
                            <div class="sm:col-span-6 col-span-12 mb-7.5">
                                <img alt=""
                                    src="https://industry.dexignzone.com/tailwind/demo/assets/images/about/pic3.jpg">
                            </div>
                            <div class="col-span-12 mb-7.5">
                                <img alt=""
                                    src="https://industry.dexignzone.com/tailwind/demo/assets/images/about/pic3.jpg">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Portfolio Details End -->
    </div>
    <!-- contact area END -->
</div>

<?php
get_footer();