<?php

/**
Template Name: About
 */

get_header();
?>
<main>
    
        <!-- inner page banner -->
        <div class="relative table md:h-[220px] h-[180px] w-full after:content-[''] after:absolute after:left-0 after:top-0 after:size-full after:bg-black/50 text-center bg-top bg-cover"
            style="background-image: url('https://industry.dexignzone.com/tailwind/demo/assets/images/banner/bnr3.jpg')">
            <div class="container relative z-1 table h-full">
                <div
                    class="lg:flex table-cell items-center justify-between align-middle text-center md:h-[220px] h-[180px] maxmd:py-3.75">
                    <h1
                        class="font-semibold md:text-[40px] text-2xl lg:mb-0 mb-2.5 text-white maxmd:leading-8 maxmd:text-center">
                        About us 1</h1>

                    <!-- Breadcrumb row -->
                    <div>
                        <ul class="flex justify-center items-center">
                            <li class="mr-[3px] text-white inline-block font-medium ">
                                <a href="/home">Trang chủ</a>
                            </li>
                            <?php echo svg('play-fill', '15', '15', 'text-white') ?>
                            <li class="mr-[3px] text-white inline-block font-medium">About us 1</li>
                        </ul>
                    </div>
                    <!-- Breadcrumb row END -->
                </div>
            </div>
        </div>
        <!-- inner page banner END -->
        <!-- contact area -->
        <div class="content-block">
            <!-- Faq Info -->
            <div class="container py-7.5">
                <div class="grid grid-cols-12 gap-x-6">
                    <div class="lg:col-span-4 md:col-span-6 col-span-12 mb-7.5">
                        <div class="border border-black/20 bg-white p-7.5 text-sm">
                            <div class="float-left mr-2.5 w-14.5 inline-block text-center text-primary mb-5">
                                <a href="javascript:void(0);"
                                    class="icon-cell"><?php echo svg('houses', '50', '50') ?></a>
                            </div>
                            <div class="overflow-hidden">
                                <h5>Make it Simple</h5>
                                <p class="mb-0 ">Web design aorem apsum dolor dolore magna aliquam erat
                                    volutpat.Claritas est etiam processus.</p>
                            </div>
                        </div>
                    </div>
                    <div class="lg:col-span-4 md:col-span-6 col-span-12 mb-7.5">
                        <div class="border border-black/20 bg-white p-7.5 text-sm">
                            <div class="float-left mr-2.5 w-14.5 inline-block text-center text-primary mb-5">
                                <a href="javascript:void(0);"
                                    class="icon-cell"><?php echo svg('person', '50', '50') ?></a>
                            </div>
                            <div class="overflow-hidden">
                                <h5>Unique design</h5>
                                <p class="mb-0 ">Web design aorem apsum dolor dolore magna aliquam erat
                                    volutpat.Claritas est etiam processus.</p>
                            </div>
                        </div>
                    </div>
                    <div class="lg:col-span-4 col-span-12 mb-7.5">
                        <div class="border border-black/20 bg-white p-7.5 text-sm">
                            <div class="float-left mr-2.5 w-14.5 inline-block text-center text-primary mb-5">
                                <a href="javascript:void(0);"
                                    class="icon-cell"><?php echo svg('gear', '50', '50') ?></a>
                            </div>
                            <div class="overflow-hidden">
                                <h5>True Responsiveness</h5>
                                <p class="mb-0 ">Web design aorem apsum dolor dolore magna aliquam erat
                                    volutpat.Claritas est etiam processus.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Faq Info END -->
            <!-- About Services info -->
            <div class="relative max2lg:bg-scroll md:pt-20 md:pb-13.5 sm:pb-5 pt-7.5 bg-white bg-no-repeat bg-right-bottom"
                style="background-image:url('https://industry.dexignzone.com/tailwind/demo/assets/images/background/bg-video.png');">
                <div class="container">
                    <div class="section-content">
                        <div class="grid grid-cols-12 gap-x-6">
                            <div class="lg:col-span-6 col-span-12 mb-7.5">
                                <div class="relative z-1 rounded-md overflow-hidden">
                                    <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/pic6.jpg"
                                        alt="Signature">
                                    <div class="absolute z-2 top-1/2 left-1/2 [transform:translate(-50%,_-50%)]">
                                        <a href="https://www.youtube.com/watch?v=_FRZVScwggM"
                                            class="relative popup-youtube video bg-primary size-20 rounded-full text-center leading-[80px] text-white shadow-[0_0_0_10px_rgba(238,_49,_49,_0.2)] block text-[28px] m-auto duration-500"><?php echo svg('play-fill', '30', '30', 'absolute top-1/2 left-1/2 [transform:translate(-50%,_-50%)]') ?></a>
                                    </div>
                                </div>
                            </div>
                            <div class="lg:col-span-6 col-span-12 mb-7.5 align-self-center video-infobx">
                                <div class="lg:pl-7.5">
                                    <h2 class="sm:mb-3.75 mb-2.5 maxsm:text-2xl/[34px]">Một công ty tham gia
                                        vào<br><span class="text-primary"> Dịch vụ, bảo trì</span></h2>
                                    <p class="mb-7.5 ">Lorem Ipsum chỉ đơn giản là văn bản giả của ngành in ấn và sắp
                                        chữ. Lorem Ipsum đã là văn bản giả chuẩn của ngành kể từ những năm
                                        1500.</p>
                                    <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/sign.png"
                                        width="200" alt="">
                                    <h4 class="mb-0">Jone Doe</h4>
                                    <span class="text-sm ">Công nhân công ty</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- About Services info END -->

            <div class="container py-7.5">
                <div class="md:mb-13.5 mb-6.25 text-black text-center">
                    <h3 class="mb-1.25 sm:text-4xl/[45px] text-2.5xl/[30px] font-semibold">Do you have Questions?</h3>
                    <p class="mx-auto max-w-[700px] pt-2.5 text-2sm ">Lorem Ipsum is simply dummy text of the printing
                        and typesetting industry has been the industry's standard dummy text ever since the been when an
                        unknown printer.</p>
                </div>
                <div class="grid grid-cols-12 gap-x-6">
                    <div class="lg:col-span-6 col-span-12 mb-7.5">
                        <div class="relative">
                            <a class="absolute top-1/2 left-1/2 [transform:translate(-50%,_-50%)] popup-youtube"
                                href="https://www.youtube.com/watch?v=_FRZVScwggM">
                                <?php echo svg('play-fill', '50', '50', 'text-white') ?></a>
                            <img src="https://industry.dexignzone.com/tailwind/demo/assets/images/about/pic5.jpg" alt=""
                                class="size-full rounded">
                        </div>
                    </div>
                    <div class="lg:col-span-6 col-span-12 mb-7.5">
                        <div class="accordion-wrapper mb-7.5" id="accordion1">
                            <div class="mb-5 duration-500 hover:shadow-[0_0_15px_1px_rgba(0,0,0,0.1)]">
                                <div class="relative acod-head" data-dz-item="faq1">
                                    <h6 class="mb-0">
                                        <a href="javascript:void(0);"
                                            class="p-5 pr-10 rounded border border-black/20 block">
                                            1. Web design aorem apsum dolor sit amet?</a>
                                    </h6>
                                </div>
                                <div id="faq1" class="acod-body hidden">
                                    <div class="border border-black/20 border-t-0 -mt-px rounded-b p-5">
                                        <p class=" mb-0">Web design aorem apsum dolor sit amet, adipiscing elit, sed
                                            diam
                                            nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="mb-5 duration-500 hover:shadow-[0_0_15px_1px_rgba(0,0,0,0.1)]">
                                <div class="relative acod-head" data-dz-item="faq2">
                                    <h6 class="mb-0">
                                        <a href="javascript:void(0);"
                                            class="p-5 pr-10 rounded border border-black/20 block">
                                            2. Graphic design aorem apsum dolor ?</a>
                                    </h6>
                                </div>
                                <div id="faq2" class="acod-body hidden">
                                    <div class="border border-black/20 border-t-0 -mt-px rounded-b p-5">
                                        <p class=" mb-0">Graphic design aorem apsum dolor sit amet, adipiscing elit, sed
                                            diam nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="mb-5 duration-500 hover:shadow-[0_0_15px_1px_rgba(0,0,0,0.1)]">
                                <div class="relative acod-head" data-dz-item="faq3">
                                    <h6 class="mb-0">
                                        <a href="javascript:void(0);"
                                            class="p-5 pr-10 rounded border border-black/20 block">
                                            3. Developement aorem apsum dolor sit amet ? </a>
                                    </h6>
                                </div>
                                <div id="faq3" class="acod-body hidden">
                                    <div class="border border-black/20 border-t-0 -mt-px rounded-b p-5">
                                        <p class=" mb-0">Developement aorem apsum dolor sit amet, adipiscing elit, sed
                                            diam
                                            nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="mb-5 duration-500 hover:shadow-[0_0_15px_1px_rgba(0,0,0,0.1)]">
                                <div class="relative acod-head" data-dz-item="faq4">
                                    <h6 class="mb-0">
                                        <a href="javascript:void(0);"
                                            class="p-5 pr-10 rounded border border-black/20 block">
                                            4. True Responsiveness consectetuer adipiscing ? </a>
                                    </h6>
                                </div>
                                <div id="faq4" class="acod-body hidden">
                                    <div class="border border-black/20 border-t-0 -mt-px rounded-b p-5">
                                        <p class=" mb-0">Developement aorem apsum dolor sit amet, adipiscing elit, sed
                                            diam
                                            nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="mb-5 duration-500 hover:shadow-[0_0_15px_1px_rgba(0,0,0,0.1)]">
                                <div class="relative acod-head" data-dz-item="faq5">
                                    <h6 class="mb-0">
                                        <a href="javascript:void(0);"
                                            class="p-5 pr-10 rounded border border-black/20 block">
                                            5. Claritas est etiam processus ?</a>
                                    </h6>
                                </div>
                                <div id="faq5" class="acod-body hidden">
                                    <div class="border border-black/20 border-t-0 -mt-px rounded-b p-5">
                                        <p class=" mb-0">Developement aorem apsum dolor sit amet, adipiscing elit, sed
                                            diam
                                            nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- contact area END -->
    
</main>

<?php
get_footer();