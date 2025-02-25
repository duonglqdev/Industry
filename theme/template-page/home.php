<?php

/**
Template Name: Home
 */

get_header();
?>
<main>
    <div class=" bg-white">
        <!-- Main Slider -->
        <div class="main-banner">
            <div class="swiper home-slider2 w-full">
                <div class="swiper-wrapper">
                    <div class="swiper-slide bg-no-repeat bg-cover bg-[50%] sm:!h-[90vh] !h-[60vh] relative after:content-[''] after:absolute after:left-0 after:bottom-0 after:size-full after:-z-1 after:min-h-[400px] after:bg-[linear-gradient(rgba(0,0,0,0)_0%,_rgba(0,0,0,0.60)_100%)]"
                        style="background-image: url('https://industry.dexignzone.com/tailwind/demo/assets/images/main-slider/slide4.jpg');">
                        <div class="absolute left-0 bottom-0 md:p-13.5 p-7.5">
                            <h1
                                class="font-semibold xl:text-[90px]/[90px] sm:text-[67px]/[61px] text-3xl/9 mb-1.5 text-white">
                                Ngành công nghiệp dầu mỏ</h1>
                            <p
                                class="text-white/50 md:inline-block tracking-[1px] text-2sm/6 font-raleway font-medium max-w-[400px] md:m-0">
                                Ngành công nghiệp sẵn sàng giúp bạn tạo ra trang web đẹp nhất và độc đáo trong giây lát.
                            </p>
                            <a class="btn border border-white/25 sm:min-w-52 duration-500 text-white hover:border-white"
                                href="services-1.html">
                                <button>Đọc thêm</button>
                            </a>
                            <a class="btn border border-white/25 px-5 duration-500 text-white hover:border-white"
                                href="services-1.html">
                                <?php echo svg('angle-right', '20', '20', 'text-white') ?>
                            </a>
                        </div>
                    </div>
                    <div class="swiper-slide bg-no-repeat bg-cover bg-[50%] sm:!h-[90vh] !h-[60vh] relative after:content-[''] after:absolute after:left-0 after:bottom-0 after:size-full after:-z-1 after:min-h-[400px] after:bg-[linear-gradient(rgba(0,0,0,0)_0%,_rgba(0,0,0,0.60)_100%)]"
                        style="background-image: url('https://industry.dexignzone.com/tailwind/demo/assets/images/main-slider/slide5.jpg');">
                        <div class="absolute left-0 bottom-0 md:p-13.5 p-7.5">
                            <h1
                                class="font-semibold xl:text-[90px]/[90px] sm:text-[67px]/[61px] text-3xl/9 mb-1.5 text-white">
                                ngành công nghiệp khí đốt</h1>
                            <p
                                class="text-white/50 md:inline-block tracking-[1px] text-2sm/6 font-raleway font-medium max-w-[400px] md:m-0">
                                Ngành công nghiệp sẵn sàng giúp bạn tạo ra trang web đẹp nhất và độc đáo trong giây lát.
                            </p>
                            <a class="btn border border-white/25 sm:min-w-52 duration-500 text-white hover:border-white"
                                href="services-1.html">
                                <button>Đọc thêm</button>
                            </a>
                            <a class="btn border border-white/25 px-5 duration-500 text-white hover:border-white"
                                href="services-1.html">
                                <?php echo svg('angle-right', '20', '20', 'text-white') ?>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="swiper-pagination !w-auto !left-auto right-[5%] md:pb-13.5 pb-7.5"></div>
            </div>
        </div>
        <!-- Main Slider -->
        <!-- contact area -->
        <div class="content-block">

            <!-- About Service Info -->
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
                                        vào<br><span class="text-primary"> dịch vụ, bảo trì</span></h2>
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
            <!-- About Service Info END -->

            <!-- Our Services -->
            <div class="relative max2lg:bg-scroll bg-gray-100 md:pt-20 md:pb-13.5 sm:pb-5 pt-7.5">
                <div class="container">
                    <div class="md:mb-13.5 mb-6.25 text-center">
                        <h2 class="mb-1.25 sm:text-4xl/[45px] text-2.5xl/[30px] font-semibold"> Dịch vụ của chúng tôi
                        </h2>
                        <p class="mx-auto max-w-[700px] pt-2.5 text-2sm ">Có rất nhiều biến thể của đoạn văn Lorem
                            Ipsum. Ngành công nghiệp sắp chữ đã trở thành văn bản chuẩn mực của ngành kể từ khi có một
                            thợ in vô danh.</p>
                    </div>
                    <div class="grid grid-cols-12 gap-x-6">
                        <div class="md:col-span-6 lg:col-span-4 col-span-12 wow fadeInUp" data-wow-duration="2s"
                            data-wow-delay="0.2s">
                            <div
                                class="sm:py-13.5 py-9 px-7.5 bg-white mb-7.5 shadow-wraper z-1 relative before:content-['01'] before:absolute before:right-7.5 before:top-7.5 before:text-[100px]/[80px] before:font-bold before:text-black/5 before:duration-500 hover:before:text-white/20 after:content-[''] after:h-full after:w-0 after:bg-primary after:absolute after:bottom-0 after:right-0 after:-z-1 after:origin-left after:duration-700 hover:after:origin-right hover:after:right-auto hover:after:left-0 hover:after:w-full group">
                                <div class="w-20 mb-6.25 inline-block text-center">
                                    <a href="javascript:void(0);" class="icon-cell"><i
                                            class="flaticon-robot-arm text-7xl/[70px] text-primary group-hover:text-white"></i></a>
                                </div>
                                <div class="overflow-hidden">
                                    <h3 class="text-xl/[30px] font-semibold group-hover:text-white mb-3.75">Công trình
                                        cơ khí</h3>
                                    <p class="mb-0  group-hover:text-white">Lorem ipsum dolor sit amet, consectetuer
                                        adipiscing elit, sed diam nonummy nibh euismod </p>
                                </div>
                            </div>
                        </div>
                        <div class="md:col-span-6 lg:col-span-4 col-span-12 wow fadeInUp" data-wow-duration="2s"
                            data-wow-delay="0.4s">
                            <div
                                class="sm:py-13.5 py-9 px-7.5 bg-white mb-7.5 shadow-wraper z-1 relative before:content-['02'] before:absolute before:right-7.5 before:top-7.5 before:text-[100px]/[80px] before:font-bold before:text-black/5 before:duration-500 hover:before:text-white/20 after:content-[''] after:h-full after:w-0 after:bg-primary after:absolute after:bottom-0 after:right-0 after:-z-1 after:origin-left after:duration-700 hover:after:origin-right hover:after:right-auto hover:after:left-0 hover:after:w-full group">
                                <div class="w-20 mb-6.25 inline-block text-center">
                                    <a href="javascript:void(0);" class="icon-cell"><i
                                            class="flaticon-factory-1 text-7xl/[70px] text-primary group-hover:text-white"></i></a>
                                </div>
                                <div class="overflow-hidden">
                                    <h3 class="text-xl/[30px] font-semibold group-hover:text-white mb-3.75">Điện và Năng
                                        lượng</h3>
                                    <p class="mb-0  group-hover:text-white">Lorem ipsum dolor sit amet, consectetuer
                                        adipiscing elit, sed diam nonummy nibh euismod </p>
                                </div>
                            </div>
                        </div>
                        <div class="md:col-span-6 lg:col-span-4 col-span-12 wow fadeInUp" data-wow-duration="2s"
                            data-wow-delay="0.6s">
                            <div
                                class="sm:py-13.5 py-9 px-7.5 bg-white mb-7.5 shadow-wraper z-1 relative before:content-['03'] before:absolute before:right-7.5 before:top-7.5 before:text-[100px]/[80px] before:font-bold before:text-black/5 before:duration-500 hover:before:text-white/20 after:content-[''] after:h-full after:w-0 after:bg-primary after:absolute after:bottom-0 after:right-0 after:-z-1 after:origin-left after:duration-700 hover:after:origin-right hover:after:right-auto hover:after:left-0 hover:after:w-full group">
                                <div class="w-20 mb-6.25 inline-block text-center">
                                    <a href="javascript:void(0);" class="icon-cell"><i
                                            class="flaticon-fuel-station text-7xl/[70px] text-primary group-hover:text-white"></i></a>
                                </div>
                                <div class="overflow-hidden">
                                    <h3 class="text-xl/[30px] font-semibold group-hover:text-white mb-3.75">Nhà máy lọc
                                        dầu</h3>
                                    <p class="mb-0  group-hover:text-white">Lorem ipsum dolor sit amet, consectetuer
                                        adipiscing elit, sed diam nonummy nibh euismod </p>
                                </div>
                            </div>
                        </div>
                        <div class="md:col-span-6 lg:col-span-4 col-span-12 wow fadeInUp" data-wow-duration="2s"
                            data-wow-delay="0.8s">
                            <div
                                class="sm:py-13.5 py-9 px-7.5 bg-white mb-7.5 shadow-wraper z-1 relative before:content-['04'] before:absolute before:right-7.5 before:top-7.5 before:text-[100px]/[80px] before:font-bold before:text-black/5 before:duration-500 hover:before:text-white/20 after:content-[''] after:h-full after:w-0 after:bg-primary after:absolute after:bottom-0 after:right-0 after:-z-1 after:origin-left after:duration-700 hover:after:origin-right hover:after:right-auto hover:after:left-0 hover:after:w-full group">
                                <div class="w-20 mb-6.25 inline-block text-center">
                                    <a href="javascript:void(0);" class="icon-cell"><i
                                            class="flaticon-fuel-truck text-7xl/[70px] text-primary group-hover:text-white"></i></a>
                                </div>
                                <div class="overflow-hidden">
                                    <h3 class="text-xl/[30px] font-semibold group-hover:text-white mb-3.75">Ngành công
                                        nghiệp dầu khí</h3>
                                    <p class="mb-0  group-hover:text-white">Lorem ipsum dolor sit amet, consectetuer
                                        adipiscing elit, sed diam nonummy nibh euismod </p>
                                </div>
                            </div>
                        </div>
                        <div class="md:col-span-6 lg:col-span-4 col-span-12 wow fadeInUp" data-wow-duration="2s"
                            data-wow-delay="0.2s">
                            <div
                                class="sm:py-13.5 py-9 px-7.5 bg-white mb-7.5 shadow-wraper z-1 relative before:content-['05'] before:absolute before:right-7.5 before:top-7.5 before:text-[100px]/[80px] before:font-bold before:text-black/5 before:duration-500 hover:before:text-white/20 after:content-[''] after:h-full after:w-0 after:bg-primary after:absolute after:bottom-0 after:right-0 after:-z-1 after:origin-left after:duration-700 hover:after:origin-right hover:after:right-auto hover:after:left-0 hover:after:w-full group">
                                <div class="w-20 mb-6.25 inline-block text-center">
                                    <a href="javascript:void(0);" class="icon-cell"><i
                                            class="flaticon-conveyor-1 text-7xl/[70px] text-primary group-hover:text-white"></i></a>
                                </div>
                                <div class="overflow-hidden">
                                    <h3 class="text-xl/[30px] font-semibold group-hover:text-white mb-3.75">Sản xuất ô
                                        tô</h3>
                                    <p class="mb-0  group-hover:text-white">Lorem ipsum dolor sit amet, consectetuer
                                        adipiscing elit, sed diam nonummy nibh euismod </p>
                                </div>
                            </div>
                        </div>
                        <div class="md:col-span-6 lg:col-span-4 col-span-12 wow fadeInUp" data-wow-duration="2s"
                            data-wow-delay="0.4s">
                            <div
                                class="sm:py-13.5 py-9 px-7.5 bg-white mb-7.5 shadow-wraper z-1 relative before:content-['06'] before:absolute before:right-7.5 before:top-7.5 before:text-[100px]/[80px] before:font-bold before:text-black/5 before:duration-500 hover:before:text-white/20 after:content-[''] after:h-full after:w-0 after:bg-primary after:absolute after:bottom-0 after:right-0 after:-z-1 after:origin-left after:duration-700 hover:after:origin-right hover:after:right-auto hover:after:left-0 hover:after:w-full group">
                                <div class="w-20 mb-6.25 inline-block text-center">
                                    <a href="javascript:void(0);" class="icon-cell"><i
                                            class="flaticon-engineer-1 text-7xl/[70px] text-primary group-hover:text-white"></i></a>
                                </div>
                                <div class="overflow-hidden">
                                    <h3 class="text-xl/[30px] font-semibold group-hover:text-white mb-3.75">Nghiên cứu
                                        hóa học</h3>
                                    <p class="mb-0  group-hover:text-white">Lorem ipsum dolor sit amet, consectetuer
                                        adipiscing elit, sed diam nonummy nibh euismod </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Our Services End -->

            <!-- Company staus -->
            <div class="max2lg:bg-scroll text-white bg-cover md:pt-20 md:pb-13.5 sm:pb-5 pt-7.5 relative after:content-[''] after:absolute after:left-0 after:top-0 after:size-full after:bg-black/80 counter-staus-box"
                style="background-image:url(images/bg4.jpg);">
                <div class="container relative z-1">
                    <div class="grid grid-cols-12 gap-x-6">
                        <div class="lg:col-span-4 col-span-12 wow fadeInLeft" data-wow-duration="2s"
                            data-wow-delay="0.2s">
                            <div class="md:mb-13.5 mb-6.25 text-white">
                                <h2
                                    class="xl:text-4.5xl/[55px] sm:text-4xl/[46px] text-2.5xl/10 font-bold mb-1.25 text-white">
                                    Chúng tôi đang phát triển mạnh mẽ và xây dựng những sản phẩm tốt hơn</h2>
                            </div>
                        </div>
                        <div class="lg:col-span-8 col-span-12">
                            <div class="grid grid-cols-12 gap-x-4">
                                <div class="sm:col-span-4 col-span-12 mb-7.5 wow fadeInUp" data-wow-duration="2s"
                                    data-wow-delay="0.2s">
                                    <div
                                        class="text-center sm:py-13.5 sm:px-5 py-7.5 px-2.5 rounded-2lg border border-white/20 relative overflow-hidden duration-700 z-1 after:content-[''] after:h-0 after:w-full after:bg-primary after:absolute after:top-0 after:right-0 after:-z-1 after:origin-top after:duration-700 hover:after:h-full hover:after:top-auto hover:after:bottom-0 hover:after:origin-bottom group">
                                        <div class="w-[100px] inline-block text-center mb-5">
                                            <span class="md:text-7.5xl/[80px] text-5xl/[50px]"><i
                                                    class="flaticon-worker"></i></span>
                                        </div>
                                        <div class="overflow-hidden">
                                            <div
                                                class="inline-block h-0.5 w-20 mb-2.5 relative bg-primary group-hover:bg-white">
                                            </div>
                                            <h3
                                                class="md:text-6xl/[60px] text-4xl/[46px] font-semibold tracking-[3px] md:mb-2.5 mb-1.25 text-white counter">
                                                1226</h3>
                                            <p class="text-lg uppercase font-medium text-white mb-0">Khách hàng hài lòng
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="sm:col-span-4 col-span-12 mb-7.5 wow fadeInUp" data-wow-duration="2s"
                                    data-wow-delay="0.4s">
                                    <div
                                        class="text-center sm:py-13.5 sm:px-5 py-7.5 px-2.5 rounded-2lg border border-white/20 relative overflow-hidden duration-700 z-1 after:content-[''] after:h-0 after:w-full after:bg-primary after:absolute after:top-0 after:right-0 after:-z-1 after:origin-top after:duration-700 hover:after:h-full hover:after:top-auto hover:after:bottom-0 hover:after:origin-bottom group">
                                        <div class="w-[100px] inline-block text-center mb-5">
                                            <span class="md:text-7.5xl/[80px] text-5xl/[50px]"><i
                                                    class="flaticon-settings"></i></span>
                                        </div>
                                        <div class="overflow-hidden">
                                            <div
                                                class="inline-block h-0.5 w-20 mb-2.5 relative bg-primary group-hover:bg-white">
                                            </div>
                                            <h3
                                                class="md:text-6xl/[60px] text-4xl/[46px] font-semibold tracking-[3px] md:mb-2.5 mb-1.25 text-white counter">
                                                1552</h3>
                                            <p class="text-lg uppercase font-medium text-white mb-0">Bàn tay công nhân
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="sm:col-span-4 col-span-12 mb-7.5 wow fadeInUp" data-wow-duration="2s"
                                    data-wow-delay="0.6s">
                                    <div
                                        class="text-center sm:py-13.5 sm:px-5 py-7.5 px-2.5 rounded-2lg border border-white/20 relative overflow-hidden duration-700 z-1 after:content-[''] after:h-0 after:w-full after:bg-primary after:absolute after:top-0 after:right-0 after:-z-1 after:origin-top after:duration-700 hover:after:h-full hover:after:top-auto hover:after:bottom-0 hover:after:origin-bottom group">
                                        <div class="w-[100px] inline-block text-center mb-5">
                                            <span class="md:text-7.5xl/[80px] text-5xl/[50px]"><i
                                                    class="flaticon-conveyor-1"></i></span>
                                        </div>
                                        <div class="overflow-hidden">
                                            <div
                                                class="inline-block h-0.5 w-20 mb-2.5 relative bg-primary group-hover:bg-white">
                                            </div>
                                            <h3
                                                class="md:text-6xl/[60px] text-4xl/[46px] font-semibold tracking-[3px] md:mb-2.5 mb-1.25 text-white counter">
                                                1156</h3>
                                            <p class="text-lg uppercase font-medium text-white mb-0">Chuyên gia tích cực
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Company staus End -->

            <!-- About us -->
            <div class="relative max2lg:bg-scroll bg-white md:py-20 py-7.5 wow fadeIn" data-wow-duration="2s"
                data-wow-delay="0.6s">
                <div class="container">
                    <div class="mb-7.5 text-center">
                        <h2 class="font-roboto-condensed mb-2.5 text-[40px]/[45px] maxlg:text-3xl font-semibold">Dự án
                            thiết kế</h2>
                        <p class="mx-auto max-w-[700px] text-2sm">Có rất nhiều biến thể của đoạn văn Lorem Ipsum. Ngành
                            công nghiệp sắp chữ đã trở thành văn bản chuẩn mực của ngành kể từ khi có một thợ in vô
                            danh.</p>
                    </div>
                    <div class="grid grid-cols-12 gap-x-6">
                        <div class="col-span-12 text-center">
                            <div class="mb-7.5 filters2">
                                <ul class="filters flex flex-wrap mx-2.5" data-bs-toggle="buttons">
                                    <li data-filter="" class="lg:w-1/4 w-1/2 px-2.5 inline-block active">
                                        <input type="radio" class="hidden">
                                        <a class="w-full flex py-3 px-2.5 lg:text-xxl text-lg border-b-3 border-[#eee] items-center justify-center font-roboto-condensed relative  after:content-[''] after:h-[3px] after:bg-primary after:w-0 after:absolute after:-bottom-[3px] after:-right-px after:duration-700"
                                            href="javascript:void(0);"><i
                                                class="flaticon-worker mr-2.5 text-primary lg:text-[40px] text-3xl lg:leading-10 leading-[30px]"></i><span>Construction</span></a>
                                    </li>
                                    <li data-filter="penthouse" class="lg:w-1/4 w-1/2 px-2.5 inline-block">
                                        <input type="radio" class="hidden">
                                        <a class="w-full flex py-3 px-2.5 lg:text-xxl text-lg border-b-3 border-[#eee] items-center justify-center font-roboto-condensed relative  after:content-[''] after:h-[3px] after:bg-primary after:w-0 after:absolute after:-bottom-[3px] after:-right-px after:duration-700"
                                            href="javascript:void(0);"><i
                                                class="flaticon-crane mr-2.5 text-primary lg:text-[40px] text-3xl lg:leading-10 leading-[30px]"></i><span>Architecture</span></a>
                                    </li>
                                    <li data-filter="royal" class="lg:w-1/4 w-1/2 px-2.5 inline-block">
                                        <input type="radio" class="hidden">
                                        <a class="w-full flex py-3 px-2.5 lg:text-xxl text-lg border-b-3 border-[#eee] items-center justify-center font-roboto-condensed relative  after:content-[''] after:h-[3px] after:bg-primary after:w-0 after:absolute after:-bottom-[3px] after:-right-px after:duration-700"
                                            href="javascript:void(0);"><i
                                                class="flaticon-analytics mr-2.5 text-primary lg:text-[40px] text-3xl lg:leading-10 leading-[30px]"></i><span>Consulting</span></a>
                                    </li>
                                    <li data-filter="standard" class="lg:w-1/4 w-1/2 px-2.5 inline-block">
                                        <input type="radio" class="hidden">
                                        <a class="w-full flex py-3 px-2.5 lg:text-xxl text-lg border-b-3 border-[#eee] items-center justify-center font-roboto-condensed relative  after:content-[''] after:h-[3px] after:bg-primary after:w-0 after:absolute after:-bottom-[3px] after:-right-px after:duration-700"
                                            href="javascript:void(0);"><i
                                                class="flaticon-optimization mr-2.5 text-primary lg:text-[40px] text-3xl lg:leading-10 leading-[30px]"></i><span>Mechanical</span></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="row !pl-0 sp10">
                        <div class="w-full">
                            <ul id="masonry" class="dlab-gallery-listing gallery mfp-gallery text-center">
                                <li class="card-container lg:w-1/3 sm:w-1/2 w-full px-[5px] royal">
                                    <div
                                        class="rounded-md mb-2.5 overflow-hidden relative before:content-[''] before:bg-black/0 before:absolute before:left-0 before:top-0 before:size-full before:z-1 before:duration-700 hover:before:size-full hover:before:bg-black/50 group">
                                        <img src="https://industry.dexignzone.com/tailwind/demo/assets/images/portfolio/construct/image_2.jpg"
                                            alt="">
                                        <div
                                            class="absolute left-0 bottom-0 size-full text-center z-[10] opacity-0 invisible duration-700 scale-50 group-hover:scale-100 group-hover:opacity-100 group-hover:visible">
                                            <div
                                                class="w-[250px] min-w-[250px] absolute z-1 top-1/2 [transform:translate(-50%,_-50%)] left-1/2">
                                                <div class="bg-white rounded-md p-5">
                                                    <span
                                                        class="font-montserrat uppercase font-semibold text-sm text-primary">Xây
                                                        dựng</span>
                                                    <h3 class="font-roboto-condensed mb-0"><a
                                                            href="portfolio-details.html">Trung tâm trẻ em Westwood</a>
                                                    </h3>
                                                </div>
                                                <div
                                                    class="bg-primary absolute top-13.5 h-full w-[calc(100%_+_20px)] align-bottom flex items-end text-center flex-row rounded-md -z-1 -left-2.5">
                                                    <a href="portfolio-details.html"
                                                        class="w-full font-montserrat underline uppercase font-semibold p-3.75 absolute left-0 bottom-0">Xem
                                                        chi tiết <i class="la la-arrow-right"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="card-container lg:w-1/3 sm:w-1/2 w-full px-[5px] standard penthouse">
                                    <div
                                        class="rounded-md mb-2.5 overflow-hidden relative before:content-[''] before:bg-black/0 before:absolute before:left-0 before:top-0 before:size-full before:z-1 before:duration-700 hover:before:size-full hover:before:bg-black/50 group">
                                        <img src="https://industry.dexignzone.com/tailwind/demo/assets/images/portfolio/construct/image_1.jpg"
                                            alt="">
                                        <div
                                            class="absolute left-0 bottom-0 size-full text-center z-[10] opacity-0 invisible duration-700 scale-50 group-hover:scale-100 group-hover:opacity-100 group-hover:visible">
                                            <div
                                                class="w-[250px] min-w-[250px] absolute z-1 top-1/2 [transform:translate(-50%,_-50%)] left-1/2">
                                                <div class="bg-white rounded-md p-5">
                                                    <span
                                                        class="font-montserrat uppercase font-semibold text-sm text-primary">Ngành
                                                        công nghiệp</span>
                                                    <h3 class="font-roboto-condensed mb-0"><a
                                                            href="portfolio-details.html">Trung tâm trẻ em Westwood</a>
                                                    </h3>
                                                </div>
                                                <div
                                                    class="bg-primary absolute top-13.5 h-full w-[calc(100%_+_20px)] align-bottom flex items-end text-center flex-row rounded-md -z-1 -left-2.5">
                                                    <a href="portfolio-details.html"
                                                        class="w-full font-montserrat underline uppercase font-semibold p-3.75 absolute left-0 bottom-0">Xem
                                                        chi tiết <i class="la la-arrow-right"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="card-container lg:w-1/3 sm:w-1/2 w-full px-[5px] royal">
                                    <div
                                        class="rounded-md mb-2.5 overflow-hidden relative before:content-[''] before:bg-black/0 before:absolute before:left-0 before:top-0 before:size-full before:z-1 before:duration-700 hover:before:size-full hover:before:bg-black/50 group">
                                        <img src="https://industry.dexignzone.com/tailwind/demo/assets/images/portfolio/construct/image_3.jpg"
                                            alt="">
                                        <div
                                            class="absolute left-0 bottom-0 size-full text-center z-[10] opacity-0 invisible duration-700 scale-50 group-hover:scale-100 group-hover:opacity-100 group-hover:visible">
                                            <div
                                                class="w-[250px] min-w-[250px] absolute z-1 top-1/2 [transform:translate(-50%,_-50%)] left-1/2">
                                                <div class="bg-white rounded-md p-5">
                                                    <span
                                                        class="font-montserrat uppercase font-semibold text-sm text-primary">Bảo
                                                        chì</span>
                                                    <h3 class="font-roboto-condensed mb-0"><a
                                                            href="portfolio-details.html">Trung tâm trẻ em Westwood</a>
                                                    </h3>
                                                </div>
                                                <div
                                                    class="bg-primary absolute top-13.5 h-full w-[calc(100%_+_20px)] align-bottom flex items-end text-center flex-row rounded-md -z-1 -left-2.5">
                                                    <a href="portfolio-details.html"
                                                        class="w-full font-montserrat underline uppercase font-semibold p-3.75 absolute left-0 bottom-0">Xem
                                                        chi tiết <i class="la la-arrow-right"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="card-container lg:w-1/3 sm:w-1/2 w-full px-[5px] penthouse">
                                    <div
                                        class="rounded-md mb-2.5 overflow-hidden relative before:content-[''] before:bg-black/0 before:absolute before:left-0 before:top-0 before:size-full before:z-1 before:duration-700 hover:before:size-full hover:before:bg-black/50 group">
                                        <img src="https://industry.dexignzone.com/tailwind/demo/assets/images/portfolio/construct/image_4.jpg"
                                            alt="">
                                        <div
                                            class="absolute left-0 bottom-0 size-full text-center z-[10] opacity-0 invisible duration-700 scale-50 group-hover:scale-100 group-hover:opacity-100 group-hover:visible">
                                            <div
                                                class="w-[250px] min-w-[250px] absolute z-1 top-1/2 [transform:translate(-50%,_-50%)] left-1/2">
                                                <div class="bg-white rounded-md p-5">
                                                    <span
                                                        class="font-montserrat uppercase font-semibold text-sm text-primary">Xây
                                                        dựng</span>
                                                    <h3 class="font-roboto-condensed mb-0"><a
                                                            href="portfolio-details.html">Trung tâm trẻ em Westwood</a>
                                                    </h3>
                                                </div>
                                                <div
                                                    class="bg-primary absolute top-13.5 h-full w-[calc(100%_+_20px)] align-bottom flex items-end text-center flex-row rounded-md -z-1 -left-2.5">
                                                    <a href="portfolio-details.html"
                                                        class="w-full font-montserrat underline uppercase font-semibold p-3.75 absolute left-0 bottom-0">Xem
                                                        chi tiết <i class="la la-arrow-right"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="card-container lg:w-1/3 sm:w-1/2 w-full px-[5px] standard">
                                    <div
                                        class="rounded-md mb-2.5 overflow-hidden relative before:content-[''] before:bg-black/0 before:absolute before:left-0 before:top-0 before:size-full before:z-1 before:duration-700 hover:before:size-full hover:before:bg-black/50 group">
                                        <img src="https://industry.dexignzone.com/tailwind/demo/assets/images/portfolio/construct/image_5.jpg"
                                            alt="">
                                        <div
                                            class="absolute left-0 bottom-0 size-full text-center z-[10] opacity-0 invisible duration-700 scale-50 group-hover:scale-100 group-hover:opacity-100 group-hover:visible">
                                            <div
                                                class="w-[250px] min-w-[250px] absolute z-1 top-1/2 [transform:translate(-50%,_-50%)] left-1/2">
                                                <div class="bg-white rounded-md p-5">
                                                    <span
                                                        class="font-montserrat uppercase font-semibold text-sm text-primary">Ngành
                                                        công nghiệp</span>
                                                    <h3 class="font-roboto-condensed mb-0"><a
                                                            href="portfolio-details.html">Trung tâm trẻ em Westwood</a>
                                                    </h3>
                                                </div>
                                                <div
                                                    class="bg-primary absolute top-13.5 h-full w-[calc(100%_+_20px)] align-bottom flex items-end text-center flex-row rounded-md -z-1 -left-2.5">
                                                    <a href="portfolio-details.html"
                                                        class="w-full font-montserrat underline uppercase font-semibold p-3.75 absolute left-0 bottom-0">Xem
                                                        chi tiết <i class="la la-arrow-right"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="card-container lg:w-1/3 sm:w-1/2 w-full px-[5px] standard penthouse">
                                    <div
                                        class="rounded-md mb-2.5 overflow-hidden relative before:content-[''] before:bg-black/0 before:absolute before:left-0 before:top-0 before:size-full before:z-1 before:duration-700 hover:before:size-full hover:before:bg-black/50 group">
                                        <img src="https://industry.dexignzone.com/tailwind/demo/assets/images/portfolio/construct/image_6.jpg"
                                            alt="">
                                        <div
                                            class="absolute left-0 bottom-0 size-full text-center z-[10] opacity-0 invisible duration-700 scale-50 group-hover:scale-100 group-hover:opacity-100 group-hover:visible">
                                            <div
                                                class="w-[250px] min-w-[250px] absolute z-1 top-1/2 [transform:translate(-50%,_-50%)] left-1/2">
                                                <div class="bg-white rounded-md p-5">
                                                    <span
                                                        class="font-montserrat uppercase font-semibold text-sm text-primary">Bảo
                                                        trì</span>
                                                    <h3 class="font-roboto-condensed mb-0"><a
                                                            href="portfolio-details.html">Trung tâm trẻ em Westwood</a>
                                                    </h3>
                                                </div>
                                                <div
                                                    class="bg-primary absolute top-13.5 h-full w-[calc(100%_+_20px)] align-bottom flex items-end text-center flex-row rounded-md -z-1 -left-2.5">
                                                    <a href="portfolio-details.html"
                                                        class="w-full font-montserrat underline uppercase font-semibold p-3.75 absolute left-0 bottom-0">Xem
                                                        chi tiết <i class="la la-arrow-right"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- About us END -->
           

            <!-- Team member -->
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
            <!-- Team member End -->

            <!-- Testimonials blog -->
            <div class="relative max2lg:bg-scroll after:content-[''] after:absolute after:left-0 after:top-0 after:size-full after:bg-black/50 bg-secondary md:py-20 py-7.5 wow fadeIn"
                data-wow-duration="2s" data-wow-delay="0.2s" style="background-image:url(images/map-bg.png);">
                <div class="container relative z-1">
                    <div class="md:mb-13.5 mb-6.25 text-white text-center">
                        <h2 class="mb-1.25 text-4xl/[45px] font-semibold text-white">Mọi người đang nói gì</h2>
                        <p class="mx-auto max-w-[700px] pt-2.5 text-2sm text-white">Có rất nhiều biến thể của đoạn văn
                            Lorem Ipsum. Ngành công nghiệp sắp chữ đã trở thành văn bản chuẩn mực của ngành kể từ khi có
                            một thợ in vô danh.</p>
                    </div>
                    <div>
                        <div class="testimonial-two-dots swiper pagination-1">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div
                                        class="relative mb-5 after:content-[''] after:w-px after:h-full after:absolute after:-right-0.5 after:bg-white after:top-0 after:opacity-20 text-white">
                                        <div class="relative pt-10 pr-7.5 pb-5 text-2sm ">
                                            <?php echo svg('quote', '25', '25', 'text-primary') ?>
                                            <p class="text-lg/8 font-light mb-0 text-white">Lorem Ipsum đã trở thành văn
                                                bản chuẩn trong ngành công nghiệp kể từ khi thợ in lấy một loạt chữ và
                                                xáo trộn chúng để tạo ra.</p>
                                        </div>
                                        <div class="flex items-center">
                                            <div
                                                class="size-17.5 border-3 border-white float-left mr-3.75 inline-block shadow-sm rounded-full">
                                                <img class="rounded-full"
                                                    src="https://industry.dexignzone.com/tailwind/demo/assets/images/testimonials/pic3.jpg"
                                                    width="100" height="100" alt="">
                                            </div>
                                            <div class="content">
                                                <strong class="block text-lg font-medium">David Matin</strong> <span
                                                    class="text-sm text-white/80 block">Sinh viên</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div
                                        class="relative mb-5 after:content-[''] after:w-px after:h-full after:absolute after:-right-0.5 after:bg-white after:top-0 after:opacity-20 text-white">
                                        <div class="relative pt-10 pr-7.5 pb-5 text-2sm ">
                                            <?php echo svg('quote', '25', '25', 'text-primary') ?>
                                            <p class="text-lg/8 font-light mb-0 text-white">Lorem Ipsum đã trở thành văn
                                                bản chuẩn trong ngành công nghiệp kể từ khi thợ in lấy một loạt chữ và
                                                xáo trộn chúng để tạo ra.</p>
                                        </div>
                                        <div class="flex items-center">
                                            <div
                                                class="size-17.5 border-3 border-white float-left mr-3.75 inline-block shadow-sm rounded-full">
                                                <img class="rounded-full"
                                                    src="https://industry.dexignzone.com/tailwind/demo/assets/images/testimonials/pic3.jpg"
                                                    width="100" height="100" alt="">
                                            </div>
                                            <div class="content">
                                                <strong class="block text-lg font-medium">David Matin</strong> <span
                                                    class="text-sm text-white/80 block">Sinh viên</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div
                                        class="relative mb-5 after:content-[''] after:w-px after:h-full after:absolute after:-right-0.5 after:bg-white after:top-0 after:opacity-20 text-white">
                                        <div class="relative pt-10 pr-7.5 pb-5 text-2sm ">
                                            <?php echo svg('quote', '25', '25', 'text-primary') ?>
                                            <p class="text-lg/8 font-light mb-0 text-white">Lorem Ipsum đã trở thành văn
                                                bản chuẩn trong ngành công nghiệp kể từ khi thợ in lấy một loạt chữ và
                                                xáo trộn chúng để tạo ra.</p>
                                        </div>
                                        <div class="flex items-center">
                                            <div
                                                class="size-17.5 border-3 border-white float-left mr-3.75 inline-block shadow-sm rounded-full">
                                                <img class="rounded-full"
                                                    src="https://industry.dexignzone.com/tailwind/demo/assets/images/testimonials/pic3.jpg"
                                                    width="100" height="100" alt="">
                                            </div>
                                            <div class="content">
                                                <strong class="block text-lg font-medium">David Matin</strong> <span
                                                    class="text-sm text-white/80 block">Sinh viên</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div
                                        class="relative mb-5 after:content-[''] after:w-px after:h-full after:absolute after:-right-0.5 after:bg-white after:top-0 after:opacity-20 text-white">
                                        <div class="relative pt-10 pr-7.5 pb-5 text-2sm ">
                                            <?php echo svg('quote', '25', '25', 'text-primary') ?>
                                            <p class="text-lg/8 font-light mb-0 text-white">Lorem Ipsum đã trở thành văn
                                                bản chuẩn trong ngành công nghiệp kể từ khi thợ in lấy một loạt chữ và
                                                xáo trộn chúng để tạo ra.</p>
                                        </div>
                                        <div class="flex items-center">
                                            <div
                                                class="size-17.5 border-3 border-white float-left mr-3.75 inline-block shadow-sm rounded-full">
                                                <img class="rounded-full"
                                                    src="https://industry.dexignzone.com/tailwind/demo/assets/images/testimonials/pic3.jpg"
                                                    width="100" height="100" alt="">
                                            </div>
                                            <div class="content">
                                                <strong class="block text-lg font-medium">David Matin</strong> <span
                                                    class="text-sm text-white/80 block">Sinh viên</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-pagination mt-5 static"></div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Testimonials blog End -->

            <!-- Latest blog -->
            <div class="relative max2lg:bg-scroll md:pt-20 md:pb-13.5 sm:pb-5 pt-7.5 bg-gray-100 wow fadeIn"
                data-wow-duration="2s" data-wow-delay="0.4s">
                <div class="container">
                    <div class="md:mb-13.5 mb-6.25 text-center">
                        <h2 class="mb-1.25 sm:text-4xl/[45px] text-2.5xl/[30px] font-semibold">Bài đăng mới nhất</h2>
                        <p class="mx-auto max-w-[700px] pt-2.5 text-2sm ">Có nhiều biến thể của các đoạn văn Lorem Ipsum
                            ngành công nghiệp sắp chữ đã trở thành văn bản giả chuẩn của ngành công nghiệp kể từ khi một
                            thợ in vô danh</p>
                    </div>
                    <div class="blog-carousel owl-none owl-carousel">
                        <div class="item">
                            <div class="bg-white rounded overflow-hidden shadow-blog relative mb-7.5 group">
                                <div class="overflow-hidden">
                                    <a href="blog-single.html"><img src="images/pic1_3.jpg" alt=""
                                            class="duration-700 block group-hover:[transform:scale(1.5)_rotate(-20deg)]"></a>
                                </div>
                                <div class="p-7.5">
                                    <div
                                        class="relative border-b border-black/10 pb-3 mb-2.5 after:content-[''] after:w-13.5 after:h-0.5 after:bg-primary after:absolute after:-bottom-px after:left-0">
                                        <ul>
                                            <li
                                                class="inline-block text-primary font-semibold text-2xs uppercase after:content-['|'] after:inline-block after:font-normal after:ml-1.25 after:opacity-50">
                                                <strong class="font-semibold">10 Aug</strong> <span> 2024</span>
                                            </li>
                                            <li class="inline-block text-primary font-semibold text-2xs uppercase"> By
                                                <a href="blog-single.html">demongo</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div>
                                        <h3 class="text-xl/[34px] font-semibold mb-1.25 mt-5"><a
                                                href="blog-single.html">Why You Should Not Go To Industry</a></h3>
                                    </div>
                                    <div class="mt-3.75">
                                        <a href="blog-single.html" title="READ MORE" rel="bookmark"
                                            class="btn bg-primary relative overflow-hidden z-1 after:content-[''] after:absolute after:top-0 after:left-0 after:size-full after:-z-1 after:bg-primaryhover after:duration-300 after:-translate-x-full hover:after:translate-x-0 after:delay-200 before:content-[''] before:absolute before:top-0 before:left-0 before:size-full before:-z-1 before:bg-black/50 before:duration-300 before:-translate-x-full hover:before:translate-x-0">Đọc
                                            thêm</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="bg-white rounded overflow-hidden shadow-blog relative mb-7.5 group">
                                <div class="overflow-hidden">
                                    <a href="blog-single.html"><img src="images/pic2_4.jpg" alt=""
                                            class="duration-700 block group-hover:[transform:scale(1.5)_rotate(-20deg)]"></a>
                                </div>
                                <div class="p-7.5">
                                    <div
                                        class="relative border-b border-black/10 pb-3 mb-2.5 after:content-[''] after:w-13.5 after:h-0.5 after:bg-primary after:absolute after:-bottom-px after:left-0">
                                        <ul>
                                            <li
                                                class="inline-block text-primary font-semibold text-2xs uppercase after:content-['|'] after:inline-block after:font-normal after:ml-1.25 after:opacity-50">
                                                <strong class="font-semibold">10 Aug</strong> <span> 2024</span>
                                            </li>
                                            <li class="inline-block text-primary font-semibold text-2xs uppercase"> By
                                                <a href="blog-single.html">AARON</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div>
                                        <h3 class="text-xl/[34px] font-semibold mb-1.25 mt-5"><a
                                                href="blog-single.html">Seven Doubts You Should Clarify About</a></h3>
                                    </div>
                                    <div class="mt-3.75">
                                        <a href="blog-single.html;" title="READ MORE" rel="bookmark"
                                            class="btn bg-primary relative overflow-hidden z-1 after:content-[''] after:absolute after:top-0 after:left-0 after:size-full after:-z-1 after:bg-primaryhover after:duration-300 after:-translate-x-full hover:after:translate-x-0 after:delay-200 before:content-[''] before:absolute before:top-0 before:left-0 before:size-full before:-z-1 before:bg-black/50 before:duration-300 before:-translate-x-full hover:before:translate-x-0">Đọc
                                            thêm</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="bg-white rounded overflow-hidden shadow-blog relative mb-7.5 group">
                                <div class="overflow-hidden">
                                    <a href="blog-single.html"><img src="images/pic3_4.jpg" alt=""
                                            class="duration-700 block group-hover:[transform:scale(1.5)_rotate(-20deg)]"></a>
                                </div>
                                <div class="p-7.5">
                                    <div
                                        class="relative border-b border-black/10 pb-3 mb-2.5 after:content-[''] after:w-13.5 after:h-0.5 after:bg-primary after:absolute after:-bottom-px after:left-0">
                                        <ul>
                                            <li
                                                class="inline-block text-primary font-semibold text-2xs uppercase after:content-['|'] after:inline-block after:font-normal after:ml-1.25 after:opacity-50">
                                                <strong class="font-semibold">10 Aug</strong> <span> 2024</span>
                                            </li>
                                            <li class="inline-block text-primary font-semibold text-2xs uppercase"> By
                                                <a href="blog-single.html">VICTORIA</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div>
                                        <h3 class="text-xl/[34px] font-semibold mb-1.25 mt-5"><a
                                                href="blog-single.html">Seven Outrageous Ideas Industry</a></h3>
                                    </div>
                                    <div class="mt-3.75">
                                        <a href="blog-single.html" title="READ MORE" rel="bookmark"
                                            class="btn bg-primary relative overflow-hidden z-1 after:content-[''] after:absolute after:top-0 after:left-0 after:size-full after:-z-1 after:bg-primaryhover after:duration-300 after:-translate-x-full hover:after:translate-x-0 after:delay-200 before:content-[''] before:absolute before:top-0 before:left-0 before:size-full before:-z-1 before:bg-black/50 before:duration-300 before:-translate-x-full hover:before:translate-x-0">Đọc
                                            thêm</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Latest blog END -->

            <!-- Client logo -->
            <div class="relative max2lg:bg-scroll bg-cover py-5 bg-white wow fadeIn" data-wow-duration="2s"
                data-wow-delay="0.6s">
                <div class="container">
                    <div>
                        <div class="client-logo-carousel mfp-gallery gallery owl-btn-center-lr owl-carousel owl-btn-3">
                            <div class="item">
                                <div
                                    class="bg-white table w-full rounded-md duration-700 hover:shadow-[0_0_30px_0_rgba(0,0,0,0.2)]">
                                    <div class="table-cell text-center align-middle p-6.25">
                                        <a href="javascript:void(0);"><img src="images/logo1.jpg" alt=""
                                                class="h-25 !inline-block !w-auto"></a>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div
                                    class="bg-white table w-full rounded-md duration-700 hover:shadow-[0_0_30px_0_rgba(0,0,0,0.2)]">
                                    <div class="table-cell text-center align-middle p-6.25">
                                        <a href="javascript:void(0);"><img src="images/logo2.jpg" alt=""
                                                class="h-25 !inline-block !w-auto"></a>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div
                                    class="bg-white table w-full rounded-md duration-700 hover:shadow-[0_0_30px_0_rgba(0,0,0,0.2)]">
                                    <div class="table-cell text-center align-middle p-6.25">
                                        <a href="javascript:void(0);"><img src="images/logo1.jpg" alt=""
                                                class="h-25 !inline-block !w-auto"></a>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div
                                    class="bg-white table w-full rounded-md duration-700 hover:shadow-[0_0_30px_0_rgba(0,0,0,0.2)]">
                                    <div class="table-cell text-center align-middle p-6.25">
                                        <a href="javascript:void(0);"><img src="images/logo3.jpg" alt=""
                                                class="h-25 !inline-block !w-auto"></a>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div
                                    class="bg-white table w-full rounded-md duration-700 hover:shadow-[0_0_30px_0_rgba(0,0,0,0.2)]">
                                    <div class="table-cell text-center align-middle p-6.25">
                                        <a href="javascript:void(0);"><img src="images/logo4.jpg" alt=""
                                                class="h-25 !inline-block !w-auto"></a>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div
                                    class="bg-white table w-full rounded-md duration-700 hover:shadow-[0_0_30px_0_rgba(0,0,0,0.2)]">
                                    <div class="table-cell text-center align-middle p-6.25">
                                        <a href="javascript:void(0);"><img src="images/logo3.jpg" alt=""
                                                class="h-25 !inline-block !w-auto"></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Client logo END -->

        </div>
    </div>
</main>
<?php
get_footer();