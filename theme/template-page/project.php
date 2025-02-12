<?php

/**
Template Name: Project
 */

get_header();
?>

<div class=" bg-white">
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
                                                    chi tiết</a>
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
                                                    chi tiết</a>
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
                                                    chi tiết</a>
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
                                                    chi tiết</a>
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
                                                    chi tiết</a>
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
                                                    chi tiết</a>
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
    </div>
    <!-- contact area END -->
</div>

<?php
get_footer();