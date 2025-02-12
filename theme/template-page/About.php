<?php

/**
Template Name: About
 */

get_header();
?>
<main>
    <div class="page-content bg-white">
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
            <!-- Counter -->
            <div class="relative max2lg:bg-scroll md:pt-20 md:pb-13.5 sm:pb-5 pt-7.5 after:content-[''] after:absolute after:left-0 after:top-0 after:size-full after:bg-black/80 bg-cover"
                style="background-image:url(images/bg1.jpg);">
                <div class="container relative z-1">
                    <div class="section-content text-center text-white">
                        <div class="grid grid-cols-12 gap-x-6">
                            <div class="lg:col-span-3 sm:col-span-6 col-span-6 mb-7.5">
                                <div
                                    class="text-center sm:py-13.5 sm:px-5 py-7.5 px-2.5 rounded-2lg border border-white/20 relative overflow-hidden duration-700 z-1 after:content-[''] after:h-0 after:w-full after:bg-primary after:absolute after:top-0 after:right-0 after:-z-1 after:origin-top after:duration-700 hover:after:h-full hover:after:top-auto hover:after:bottom-0 hover:after:origin-bottom group">
                                    <div class="">
                                        <span
                                            class="md:text-6xl/[60px] text-4xl/[46px] font-semibold tracking-[3px] md:mb-2.5 mb-1.25 text-white counter">6810</span>
                                    </div>
                                    <span class="text-lg uppercase font-medium">Passionate Employee</span>
                                </div>
                            </div>
                            <div class="lg:col-span-3 sm:col-span-6 col-span-6 mb-7.5">
                                <div
                                    class="text-center sm:py-13.5 sm:px-5 py-7.5 px-2.5 rounded-2lg border border-white/20 relative overflow-hidden duration-700 z-1 after:content-[''] after:h-0 after:w-full after:bg-primary after:absolute after:top-0 after:right-0 after:-z-1 after:origin-top after:duration-700 hover:after:h-full hover:after:top-auto hover:after:bottom-0 hover:after:origin-bottom group">
                                    <div class="">
                                        <span
                                            class="md:text-6xl/[60px] text-4xl/[46px] font-semibold tracking-[3px] md:mb-2.5 mb-1.25 text-white counter">4060</span>
                                    </div>
                                    <span class="text-lg uppercase font-medium">Modern Factory</span>
                                </div>
                            </div>
                            <div class="lg:col-span-3 sm:col-span-6 col-span-6 mb-7.5">
                                <div
                                    class="text-center sm:py-13.5 sm:px-5 py-7.5 px-2.5 rounded-2lg border border-white/20 relative overflow-hidden duration-700 z-1 after:content-[''] after:h-0 after:w-full after:bg-primary after:absolute after:top-0 after:right-0 after:-z-1 after:origin-top after:duration-700 hover:after:h-full hover:after:top-auto hover:after:bottom-0 hover:after:origin-bottom group">
                                    <div class="">
                                        <span
                                            class="md:text-6xl/[60px] text-4xl/[46px] font-semibold tracking-[3px] md:mb-2.5 mb-1.25 text-white counter">3164</span>
                                    </div>
                                    <span class="text-lg uppercase font-medium">Factory in Worldwide</span>
                                </div>
                            </div>
                            <div class="lg:col-span-3 sm:col-span-6 col-span-6 mb-7.5">
                                <div
                                    class="text-center sm:py-13.5 sm:px-5 py-7.5 px-2.5 rounded-2lg border border-white/20 relative overflow-hidden duration-700 z-1 after:content-[''] after:h-0 after:w-full after:bg-primary after:absolute after:top-0 after:right-0 after:-z-1 after:origin-top after:duration-700 hover:after:h-full hover:after:top-auto hover:after:bottom-0 hover:after:origin-bottom group">
                                    <div class="">
                                        <span
                                            class="md:text-6xl/[60px] text-4xl/[46px] font-semibold tracking-[3px] md:mb-2.5 mb-1.25 text-white counter">1852</span>
                                    </div>
                                    <span class="text-lg uppercase font-medium">International Awards</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Counter END -->
            <!-- Team Section -->
            <div class="relative max2lg:bg-scroll bg-gray-100 md:pt-20 md:pb-13.5 sm:pb-5 pt-7.5">
                <div class="container">
                    <div class="md:mb-13.5 mb-6.25 text-center">
                        <h2 class="mb-1.25 sm:text-4xl/[45px] text-2.5xl/[30px] font-semibold"> Gặp gỡ chúng tôi</h2>
                        <p class="mx-auto max-w-[700px] pt-2.5 text-2sm ">Có rất nhiều biến thể của đoạn văn Lorem
                            Ipsum. Ngành công nghiệp sắp chữ đã trở thành văn bản chuẩn mực của ngành kể từ khi có một
                            thợ in vô danh.</p>
                    </div>
                    <div class="grid grid-cols-12 gap-x-6">
                        <div class="lg:col-span-3 sm:col-span-6 col-span-12 wow fadeInUp" data-wow-duration="2s"
                            data-wow-delay="0.2s">
                            <div class="relative overflow-hidden rounded shadow-team duration-500 mb-7.5 group">
                                <div class="dlab-media">
                                    <a href="team-1.html">
                                        <img width="358" height="460" alt="" class="w-full"
                                            src="https://industry.dexignzone.com/tailwind/demo/assets/images/our-team/pic1.jpg">
                                    </a>
                                </div>
                                <div
                                    class="absolute bottom-[-55px] bg-white w-full py-5 px-7.5 text-center duration-700 group-hover:bottom-0 group-hover:bg-primary group-hover:duration-700 after:content-[''] after:size-3.75 after:bg-white after:absolute after:top-[-7px] after:left-1/2 after:[transform:translateX(-50%)_rotate(45deg)] after:duration-700 group-hover:after:bg-primary">
                                    <h3 class="text-xl mb-1 font-semibold duration-700 group-hover:text-white"><a
                                            href="team-1.html">Nashid Martines</a></h3>
                                    <span class="text-primary duration-700 group-hover:text-white">Công nhân</span>
                                    <ul
                                        class="block uppercase font-semibold text-sm tracking-[1px] mt-5 text-primary group-hover:text-white/60">
                                        <li class="inline-block text-xs"><a
                                                class="fab fa-facebook-f size-8 border border-black/20 rounded text-base/[30px] duration-700 group-hover:border-white/20 group-hover:text-white"
                                                href="javascript:void(0);"></a></li>
                                        <li class="inline-block text-xs"><a
                                                class="fa-brands fa-x-twitter size-8 border border-black/20 rounded text-base/[30px] duration-700 group-hover:border-white/20 group-hover:text-white"
                                                href="javascript:void(0);"></a></li>
                                        <li class="inline-block text-xs"><a
                                                class="fab fa-linkedin-in size-8 border border-black/20 rounded text-base/[30px] duration-700 group-hover:border-white/20 group-hover:text-white"
                                                href="javascript:void(0);"></a></li>
                                        <li class="inline-block text-xs"><a
                                                class="fab fa-pinterest-p size-8 border border-black/20 rounded text-base/[30px] duration-700 group-hover:border-white/20 group-hover:text-white"
                                                href="javascript:void(0);"></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="lg:col-span-3 sm:col-span-6 col-span-12 wow fadeInUp" data-wow-duration="2s"
                            data-wow-delay="0.4s">
                            <div class="relative overflow-hidden rounded shadow-team duration-500 mb-7.5 group">
                                <div class="dlab-media">
                                    <a href="team-1.html">
                                        <img width="358" height="460" alt="" class="w-full"
                                            src="https://industry.dexignzone.com/tailwind/demo/assets/images/our-team/pic2.jpg">
                                    </a>
                                </div>
                                <div
                                    class="absolute bottom-[-55px] bg-white w-full py-5 px-7.5 text-center duration-700 group-hover:bottom-0 group-hover:bg-primary group-hover:duration-700 after:content-[''] after:size-3.75 after:bg-white after:absolute after:top-[-7px] after:left-1/2 after:[transform:translateX(-50%)_rotate(45deg)] after:duration-700 group-hover:after:bg-primary">
                                    <h3 class="text-xl mb-1 font-semibold duration-700 group-hover:text-white"><a
                                            href="team-1.html">Konne Backfield</a></h3>
                                    <span class="text-primary duration-700 group-hover:text-white">Người giám sát</span>
                                    <ul
                                        class="block uppercase font-semibold text-sm tracking-[1px] mt-5 text-primary group-hover:text-white/60">
                                        <li class="inline-block text-xs"><a
                                                class="fab fa-facebook-f size-8 border border-black/20 rounded text-base/[30px] duration-700 group-hover:border-white/20 group-hover:text-white"
                                                href="javascript:void(0);"></a></li>
                                        <li class="inline-block text-xs"><a
                                                class="fa-brands fa-x-twitter size-8 border border-black/20 rounded text-base/[30px] duration-700 group-hover:border-white/20 group-hover:text-white"
                                                href="javascript:void(0);"></a></li>
                                        <li class="inline-block text-xs"><a
                                                class="fab fa-linkedin-in size-8 border border-black/20 rounded text-base/[30px] duration-700 group-hover:border-white/20 group-hover:text-white"
                                                href="javascript:void(0);"></a></li>
                                        <li class="inline-block text-xs"><a
                                                class="fab fa-pinterest-p size-8 border border-black/20 rounded text-base/[30px] duration-700 group-hover:border-white/20 group-hover:text-white"
                                                href="javascript:void(0);"></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="lg:col-span-3 sm:col-span-6 col-span-12 wow fadeInUp" data-wow-duration="2s"
                            data-wow-delay="0.6s">
                            <div class="relative overflow-hidden rounded shadow-team duration-500 mb-7.5 group">
                                <div class="dlab-media">
                                    <a href="team-1.html">
                                        <img width="358" height="460" alt="" class="w-full"
                                            src="https://industry.dexignzone.com/tailwind/demo/assets/images/our-team/pic3.jpg">
                                    </a>
                                </div>
                                <div
                                    class="absolute bottom-[-55px] bg-white w-full py-5 px-7.5 text-center duration-700 group-hover:bottom-0 group-hover:bg-primary group-hover:duration-700 after:content-[''] after:size-3.75 after:bg-white after:absolute after:top-[-7px] after:left-1/2 after:[transform:translateX(-50%)_rotate(45deg)] after:duration-700 group-hover:after:bg-primary">
                                    <h3 class="text-xl mb-1 font-semibold duration-700 group-hover:text-white"><a
                                            href="team-1.html">Hackson Willingham</a></h3>
                                    <span class="text-primary duration-700 group-hover:text-white">Người điều
                                        hành</span>
                                    <ul
                                        class="block uppercase font-semibold text-sm tracking-[1px] mt-5 text-primary group-hover:text-white/60">
                                        <li class="inline-block text-xs"><a
                                                class="fab fa-facebook-f size-8 border border-black/20 rounded text-base/[30px] duration-700 group-hover:border-white/20 group-hover:text-white"
                                                href="javascript:void(0);"></a></li>
                                        <li class="inline-block text-xs"><a
                                                class="fa-brands fa-x-twitter size-8 border border-black/20 rounded text-base/[30px] duration-700 group-hover:border-white/20 group-hover:text-white"
                                                href="javascript:void(0);"></a></li>
                                        <li class="inline-block text-xs"><a
                                                class="fab fa-linkedin-in size-8 border border-black/20 rounded text-base/[30px] duration-700 group-hover:border-white/20 group-hover:text-white"
                                                href="javascript:void(0);"></a></li>
                                        <li class="inline-block text-xs"><a
                                                class="fab fa-pinterest-p size-8 border border-black/20 rounded text-base/[30px] duration-700 group-hover:border-white/20 group-hover:text-white"
                                                href="javascript:void(0);"></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="lg:col-span-3 sm:col-span-6 col-span-12 wow fadeInUp" data-wow-duration="2s"
                            data-wow-delay="0.8s">
                            <div class="relative overflow-hidden rounded shadow-team duration-500 mb-7.5 group">
                                <div class="dlab-media">
                                    <a href="team-1.html">
                                        <img width="358" height="460" alt="" class="w-full"
                                            src="https://industry.dexignzone.com/tailwind/demo/assets/images/our-team/pic4.jpg">
                                    </a>
                                </div>
                                <div
                                    class="absolute bottom-[-55px] bg-white w-full py-5 px-7.5 text-center duration-700 group-hover:bottom-0 group-hover:bg-primary group-hover:duration-700 after:content-[''] after:size-3.75 after:bg-white after:absolute after:top-[-7px] after:left-1/2 after:[transform:translateX(-50%)_rotate(45deg)] after:duration-700 group-hover:after:bg-primary">
                                    <h3 class="text-xl mb-1 font-semibold duration-700 group-hover:text-white"><a
                                            href="team-1.html">Konne Backfield</a></h3>
                                    <span class="text-primary duration-700 group-hover:text-white">Giám đốc</span>
                                    <ul
                                        class="block uppercase font-semibold text-sm tracking-[1px] mt-5 text-primary group-hover:text-white/60">
                                        <li class="inline-block text-xs"><a
                                                class="fab fa-facebook-f size-8 border border-black/20 rounded text-base/[30px] duration-700 group-hover:border-white/20 group-hover:text-white"
                                                href="javascript:void(0);"></a></li>
                                        <li class="inline-block text-xs"><a
                                                class="fa-brands fa-x-twitter size-8 border border-black/20 rounded text-base/[30px] duration-700 group-hover:border-white/20 group-hover:text-white"
                                                href="javascript:void(0);"></a></li>
                                        <li class="inline-block text-xs"><a
                                                class="fab fa-linkedin-in size-8 border border-black/20 rounded text-base/[30px] duration-700 group-hover:border-white/20 group-hover:text-white"
                                                href="javascript:void(0);"></a></li>
                                        <li class="inline-block text-xs"><a
                                                class="fab fa-pinterest-p size-8 border border-black/20 rounded text-base/[30px] duration-700 group-hover:border-white/20 group-hover:text-white"
                                                href="javascript:void(0);"></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Team Section END -->
            <!-- Price Table -->
            <div class="relative max2lg:bg-scroll md:py-20 py-7.5 bg-white">
                <div class="container">
                    <div class="md:mb-13.5 mb-6.25 text-black text-center">
                        <h2 class="mb-1.25 sm:text-4xl/[45px] text-2.5xl/[30px] font-semibold">Pricing Table</h2>
                        <p class="mx-auto max-w-[700px] pt-2.5 text-2sm ">Lorem Ipsum is simply dummy text of the
                            printing and typesetting industry has been the industry's standard dummy text ever since the
                            been when an unknown printer.</p>
                    </div>
                    <div class="md:mt-20">
                        <div class="pricingtable-row">
                            <div class="grid grid-cols-12 max-w-[1000px] m-auto">
                                <div class="md:col-span-4 col-span-12 !pl-0">
                                    <div class="p-7.5 shadow-pricingtable-wrapper-2 maxmd:mb-7.5 bg-white">
                                        <div class="text-center">
                                            <div>
                                                <h4 class="font-light mt-2.5 mb-0">Basic</h4>
                                                <div
                                                    class="bg-black/10 rounded-[10px] text-[#a0a0a0] inline-block text-2xs py-3.75 px-6.25 md:mt-5 md:mb-2.5 mt-2.5 mb-3.75">
                                                    <span class="text-xxl">Free</span>
                                                </div>
                                            </div>
                                            <p>Lorem ipsum dolor sit amet adipiscing elit sed do eiusmod tempors labore
                                                et dolore magna siad enim aliqua</p>
                                            <div class="mt-5">
                                                <a href="javascript:void(0);"
                                                    class="btn mr-1.25 mb-2.5 bg-primary hover:bg-primaryhover rounded-full"><span
                                                        class="px-7.5">Đăng ký</span></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="md:col-span-4 col-span-12 !pl-0">
                                    <div
                                        class="py-14.5 px-7.5 shadow-pricingtable-wrapper-2 maxmd:mb-7.5 bg-primary text-white relative z-1 -mx-2.5 -mt-7.5">
                                        <div class="text-center">
                                            <div>
                                                <h4 class="font-light mt-2.5 mb-0 text-white">Professional</h4>
                                                <div
                                                    class="bg-black/10 rounded-[10px] text-white inline-block text-2xs py-3.75 px-6.25 md:mt-5 md:mb-2.5 mt-2.5 mb-3.75">
                                                    $ <span class="text-xxl">29</span> / Per Installation </div>
                                            </div>
                                            <p class="text-white">Lorem ipsum dolor sit amet adipiscing elit sed do
                                                eiusmod tempors labore et dolore magna siad enim aliqua</p>
                                            <div class="mt-5">
                                                <a href="javascript:void(0);"
                                                    class="btn mr-1.25 mb-2.5 bg-white text-[#777] hover:bg-white rounded-full"><span
                                                        class="px-7.5">Đăng ký</span></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="md:col-span-4 col-span-12 !pl-0">
                                    <div class="p-7.5 shadow-pricingtable-wrapper-2 maxmd:mb-7.5 bg-white">
                                        <div class="text-center">
                                            <div>
                                                <h4 class="font-light mt-2.5 mb-0">Extended</h4>
                                                <div
                                                    class="bg-black/10 rounded-[10px] text-[#a0a0a0] inline-block text-2xs py-3.75 px-6.25 md:mt-5 md:mb-2.5 mt-2.5 mb-3.75">
                                                    $ <span class="text-xxl">29</span> / Per Installation </div>
                                            </div>
                                            <p>Lorem ipsum dolor sit amet adipiscing elit sed do eiusmod tempors labore
                                                et dolore magna siad enim aliqua</p>
                                            <div class="mt-5">
                                                <a href="javascript:void(0);"
                                                    class="btn mr-1.25 mb-2.5 bg-primary hover:bg-primaryhover rounded-full"><span
                                                        class="px-7.5">Đăng ký</span></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Price Table END -->
            <!-- Testimonials -->
            <div class="relative max2lg:bg-scroll md:py-20 py-7.5 bg-gray-100 wow fadeIn" data-wow-duration="2s"
                data-wow-delay="0.3s">
                <div class="container">
                    <div class="md:mb-13.5 mb-6.25 text-black text-center">
                        <h2 class="mb-1.25 sm:text-4xl/[45px] text-2.5xl/[30px] font-semibold">Happy Customers Said</h2>
                        <p class="mx-auto max-w-[700px] pt-2.5 text-2sm ">Lorem Ipsum is simply dummy text of the
                            printing and typesetting industry has been the industry's standard dummy text ever since the
                            been when an unknown printer.</p>
                    </div>
                    <div class="testimonial-six owl-loaded owl-theme owl-carousel owl-none dots-style-2">
                        <div class="item">
                            <div class="p-3.75">
                                <div
                                    class="bg-white rounded-md rounded-bl-none shadow-[0_0_14px_0_rgba(0,0,0,0.1)] sm:p-6.25 p-5 duration-700 testimonial-text  relative before:content-['\f10e'] before:-bottom-2.5 before:text-black/5 before:font-['Font_Awesome_5_Free'] before:font-semibold before:text-7.5xl before:absolute before:right-2.5 before:duration-700 after:content-[''] after:absolute after:-bottom-[25px] after:left-0 after:size-0 after:border-r-transparent after:border-r-[25px] after:border-t-[25px] after:border-t-white">
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                                        Ipsum has been the industry's standard dummy text ever since the when an printer
                                        took a galley of type and scrambled it to make.</p>
                                </div>
                                <div class="p-5 pt-6.25 pr-0">
                                    <div
                                        class="size-20 float-left rounded-full mr-3.75 border-5 border-white inline-block shadow-md overflow-hidden">
                                        <img src="images/pic1_2.jpg" width="100" height="100" alt="">
                                    </div>
                                    <h5 class="pt-3.75 mb-1.25 pb-0.5">David Matin</h5> <span
                                        class="py-0.5 text-sm text-gray-700">Student</span>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="p-3.75">
                                <div
                                    class="bg-white rounded-md rounded-bl-none shadow-[0_0_14px_0_rgba(0,0,0,0.1)] sm:p-6.25 p-5 duration-700 testimonial-text  relative before:content-['\f10e'] before:-bottom-2.5 before:text-black/5 before:font-['Font_Awesome_5_Free'] before:font-semibold before:text-7.5xl before:absolute before:right-2.5 before:duration-700 after:content-[''] after:absolute after:-bottom-[25px] after:left-0 after:size-0 after:border-r-transparent after:border-r-[25px] after:border-t-[25px] after:border-t-white">
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                                        Ipsum has been the industry's standard dummy text ever since the when an printer
                                        took a galley of type and scrambled it to make.</p>
                                </div>
                                <div class="p-5 pt-6.25 pr-0">
                                    <div
                                        class="size-20 float-left rounded-full mr-3.75 border-5 border-white inline-block shadow-md overflow-hidden">
                                        <img src="images/pic2_1.jpg" width="100" height="100" alt="">
                                    </div>
                                    <h5 class="pt-3.75 mb-1.25 pb-0.5">David Matin</h5> <span
                                        class="py-0.5 text-sm text-gray-700">Student</span>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="p-3.75">
                                <div
                                    class="bg-white rounded-md rounded-bl-none shadow-[0_0_14px_0_rgba(0,0,0,0.1)] sm:p-6.25 p-5 duration-700 testimonial-text  relative before:content-['\f10e'] before:-bottom-2.5 before:text-black/5 before:font-['Font_Awesome_5_Free'] before:font-semibold before:text-7.5xl before:absolute before:right-2.5 before:duration-700 after:content-[''] after:absolute after:-bottom-[25px] after:left-0 after:size-0 after:border-r-transparent after:border-r-[25px] after:border-t-[25px] after:border-t-white">
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                                        Ipsum has been the industry's standard dummy text ever since the when an printer
                                        took a galley of type and scrambled it to make.</p>
                                </div>
                                <div class="p-5 pt-6.25 pr-0">
                                    <div
                                        class="size-20 float-left rounded-full mr-3.75 border-5 border-white inline-block shadow-md overflow-hidden">
                                        <img src="images/pic3_1.jpg" width="100" height="100" alt="">
                                    </div>
                                    <h5 class="pt-3.75 mb-1.25 pb-0.5">David Matin</h5> <span
                                        class="py-0.5 text-sm text-gray-700">Student</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Testimonials END -->
        </div>
        <!-- contact area END -->
    </div>
</main>

<?php
get_footer();