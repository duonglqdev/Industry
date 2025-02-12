<?php

/**
Template Name: Blog
 */

get_header();
?>

<div class="page-content bg-white">
    <!-- inner page banner -->
    <div
        class="relative table md:h-[220px] h-[180px] w-full after:content-[''] after:absolute after:left-0 after:top-0 after:size-full after:bg-black/50 text-center bg-top bg-cover bg-[url('../images/banner/bnr1.jpg')]">
        <div class="container relative z-1 table h-full">
            <div
                class="lg:flex table-cell items-center justify-between align-middle text-center md:h-[220px] h-[180px] maxmd:py-3.75">
                <h1
                    class="font-semibold md:text-[40px] text-2xl lg:mb-0 mb-2.5 text-white maxmd:leading-8 maxmd:text-center">
                    Blog</h1>
                <!-- Breadcrumb row -->
                <div>
                    <ul class="flex justify-center items-center">
                        <li class="mr-[3px] text-white inline-block font-medium">
                            <a href="/home">Trang chủ</a>
                        </li>
                        <?php echo svg('play-fill', '15', '15', 'text-white') ?>
                        <li class="mr-[3px] text-white inline-block font-medium">Blog</li>
                    </ul>
                </div>
                <!-- Breadcrumb row END -->
            </div>
        </div>
    </div>
    <!-- inner page banner END -->
    <!-- contact area -->
    <div class="md:pt-14.5 md:pb-13.5 py-7.5">
        <div class="container">
            <!-- Blog half image -->
            <div class="relative mb-7.5 overflow-hidden">
                <div class="relative overflow-hidden rounded md:w-[350px] w-full table-cell align-top group">
                    <a href="/blog-detail">
                        <img src="images/pic1_1.jpg" alt="" class="block duration-[10s] group-hover:scale-125">
                    </a>
                </div>
                <div class="md:table-cell align-middle md:pl-7.5 maxmd:mt-3.75">
                    <div class="mb-2.5">
                        <ul>
                            <li
                                class="inline-block text-primary font-semibold text-2xs uppercase after:content-['|'] after:inline-block after:font-normal after:ml-1.25 after:opacity-50">
                                <strong class="font-semibold">12 Aug</strong> <span> 2024</span>
                            </li>
                            <li class="inline-block text-primary font-semibold text-2xs uppercase"> By <a
                                    href="javascript:void(0);">Oliver</a> </li>
                        </ul>
                    </div>
                    <div class="mb-1.25">
                        <h4 class="mb-1.25"><a href="/blog-detail">How To Get People To Like Industry</a></h4>
                    </div>
                    <div class="mb-3.75">
                        <p class="mb-0 text-2sm text-[#999]">Lorem Ipsum is simply dummy text of the printing and
                            typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the
                            1500s.</p>
                    </div>
                    <div>
                        <a href="/blog-detail" title="READ MORE" rel="bookmark"
                            class="btn bg-primary text-white duration-500 hover:bg-primaryhover">Đọc thêm
                            <?php echo svg('arrow-right-short', '30', '30', 'text-white') ?>
                        </a>
                    </div>
                </div>
            </div>
            <div class="relative mb-7.5 overflow-hidden">
                <div class="relative overflow-hidden rounded md:w-[350px] w-full table-cell align-top group">
                    <a href="/blog-detail">
                        <img src="images/pic2_1.jpg" alt="" class="block duration-[10s] group-hover:scale-125">
                    </a>
                </div>
                <div class="md:table-cell align-middle md:pl-7.5 maxmd:mt-3.75">
                    <div class="mb-2.5">
                        <ul>
                            <li
                                class="inline-block text-primary font-semibold text-2xs uppercase after:content-['|'] after:inline-block after:font-normal after:ml-1.25 after:opacity-50">
                                <strong class="font-semibold">15 July</strong> <span> 2024</span>
                            </li>
                            <li class="inline-block text-primary font-semibold text-2xs uppercase"> By <a
                                    href="javascript:void(0);">Jamie</a> </li>
                        </ul>
                    </div>
                    <div class="mb-1.25">
                        <h4 class="mb-1.25"><a href="/blog-detail">Why You Should Not Go To Industry</a></h4>
                    </div>
                    <div class="mb-3.75">
                        <p class="mb-0 text-2sm text-[#999]">Lorem Ipsum is simply dummy text of the printing and
                            typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the
                            1500s.</p>
                    </div>
                    <div>
                        <a href="/blog-detail" title="READ MORE" rel="bookmark"
                            class="btn bg-primary text-white duration-500 hover:bg-primaryhover">Đọc thêm
                            <?php echo svg('arrow-right-short', '30', '30', 'text-white') ?>
                        </a>
                    </div>
                </div>
            </div>
            <div class="relative mb-7.5 overflow-hidden">
                <div class="relative overflow-hidden rounded md:w-[350px] w-full table-cell align-top group">
                    <a href="/blog-detail">
                        <img src="images/pic3_1.jpg" alt="" class="block duration-[10s] group-hover:scale-125">
                    </a>
                </div>
                <div class="md:table-cell align-middle md:pl-7.5 maxmd:mt-3.75">
                    <div class="mb-2.5">
                        <ul>
                            <li
                                class="inline-block text-primary font-semibold text-2xs uppercase after:content-['|'] after:inline-block after:font-normal after:ml-1.25 after:opacity-50">
                                <strong class="font-semibold">18 Aug</strong> <span> 2024</span>
                            </li>
                            <li class="inline-block text-primary font-semibold text-2xs uppercase"> By <a
                                    href="javascript:void(0);">Charlotte</a> </li>
                        </ul>
                    </div>
                    <div class="mb-1.25">
                        <h4 class="mb-1.25"><a href="/blog-detail">Seven Doubts You Should Clarify About</a></h4>
                    </div>
                    <div class="mb-3.75">
                        <p class="mb-0 text-2sm text-[#999]">Lorem Ipsum is simply dummy text of the printing and
                            typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the
                            1500s.</p>
                    </div>
                    <div>
                        <a href="/blog-detail" title="READ MORE" rel="bookmark"
                            class="btn bg-primary text-white duration-500 hover:bg-primaryhover">Đọc thêm
                            <?php echo svg('arrow-right-short', '30', '30', 'text-white') ?>
                        </a>
                    </div>
                </div>
            </div>
            <div class="relative mb-7.5 overflow-hidden">
                <div class="relative overflow-hidden rounded md:w-[350px] w-full table-cell align-top group">
                    <a href="/blog-detail">
                        <img src="images/pic4_1.jpg" alt="" class="block duration-[10s] group-hover:scale-125">
                    </a>
                </div>
                <div class="md:table-cell align-middle md:pl-7.5 maxmd:mt-3.75">
                    <div class="mb-2.5">
                        <ul>
                            <li
                                class="inline-block text-primary font-semibold text-2xs uppercase after:content-['|'] after:inline-block after:font-normal after:ml-1.25 after:opacity-50">
                                <strong class="font-semibold">12 Aug</strong> <span> 2024</span>
                            </li>
                            <li class="inline-block text-primary font-semibold text-2xs uppercase"> By <a
                                    href="javascript:void(0);">Josephine</a> </li>
                        </ul>
                    </div>
                    <div class="mb-1.25">
                        <h4 class="mb-1.25"><a href="/blog-detail">The Shocking Revelation of Industry</a></h4>
                    </div>
                    <div class="mb-3.75">
                        <p class="mb-0 text-2sm text-[#999]">Lorem Ipsum is simply dummy text of the printing and
                            typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the
                            1500s.</p>
                    </div>
                    <div>
                        <a href="/blog-detail" title="READ MORE" rel="bookmark"
                            class="btn bg-primary text-white duration-500 hover:bg-primaryhover">Đọc thêm
                            <?php echo svg('arrow-right-short', '30', '30', 'text-white') ?>
                        </a>
                    </div>
                </div>
            </div>
            <!-- Blog half image END -->
            <!-- Pagination  -->
            <div class="text-center">
                <ul class="py-2.5 w-full flex items-center">
                    <li>
                        <a href="javascript:void(0);"
                            class="flex justify-center items-center py-2 px-3.5 text-sm font-medium text-gray-500 border duration-500 hover:bg-primaryhover hover:border-primary-hover hover:text-white">
                            <?php echo svg('angle-left', '10', '10') ?> Prev
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0);"
                            class="py-2 px-3.5 text-sm font-medium border duration-500 bg-primary border-primary text-white -ms-px">
                            1
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0);"
                            class="py-2 px-3.5 text-sm font-medium text-gray-500 border duration-500 hover:bg-primaryhover hover:border-primary-hover hover:text-white -ms-px">
                            2
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0);"
                            class="py-2 px-3.5 text-sm font-medium text-gray-500 border duration-500 hover:bg-primaryhover hover:border-primary-hover hover:text-white -ms-px">
                            3
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0);"
                            class="flex justify-center items-center py-2 px-3.5 text-sm font-medium text-gray-500 border duration-500 hover:bg-primaryhover hover:border-primary-hover hover:text-white -ms-px">
                            Next
                            <?php echo svg('angle-right', '10', '10') ?>
                        </a>
                    </li>
                </ul>
            </div>
            <!-- Pagination END -->
        </div>
    </div>
</div>

<?php
get_footer();