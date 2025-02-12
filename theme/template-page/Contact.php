<?php

/**
Template Name: Contact
 */

get_header();
?>

<div class="page-content bg-white">
    <!-- inner page banner -->
    <div class="relative table md:h-[220px] h-[180px] w-full after:content-[''] after:absolute after:left-0 after:top-0 after:size-full after:bg-black/50 text-center bg-top bg-cover "
        style="background-image: url('https://industry.dexignzone.com/tailwind/demo/assets/images/banner/bnr3.jpg')">
        <div class="container relative z-1 table h-full">
            <div
                class="lg:flex table-cell items-center justify-between align-middle text-center md:h-[220px] h-[180px] maxmd:py-3.75">
                <h1
                    class="font-semibold md:text-[40px] text-2xl lg:mb-0 mb-2.5 text-white maxmd:leading-8 maxmd:text-center">
                    Contact Us 4</h1>
                <!-- Breadcrumb row -->
                <div>
                    <ul class="flex justify-center items-center">
                        <li class="mr-[3px] text-white inline-block font-medium ">
                            <a href="index.html">Home</a>
                        </li>
                        <?php echo svg('play-fill', '15', '15', 'text-white') ?>
                        <li class="mr-[3px] text-white inline-block font-medium">Contact Us 4</li>
                    </ul>
                </div>
                <!-- Breadcrumb row END -->
            </div>
        </div>
    </div>
    <!-- inner page banner END -->
    <!-- contact area -->
    <div class="relative max2lg:bg-scroll md:pt-20 md:pb-13.5 sm:pb-5 pt-7.5 bg-white contact-style-1">
        <div class="container">
            <div class="grid grid-cols-12 gap-x-6 dzseth">
                <div class="lg:col-span-3 sm:col-span-6 col-span-12 mb-7.5">
                    <div class="px-5 py-7.5 text-center rounded border text-sm h-full">
                        <div class="w-20 inline-block text-center text-primary mb-5"> <a href="javascript:void(0);"
                                class="flex justify-center items-center"><?php echo svg('geo-alt', '50', '50', 'text-center') ?></a>
                        </div>
                        <div class="overflow-hidden">
                            <h5 class="uppercase">Địa chỉ</h5>
                            <p class="mb-0">123 West Street, Melbourne Victoria 3000 Australia</p>
                        </div>
                    </div>
                </div>
                <div class="lg:col-span-3 sm:col-span-6 col-span-12 mb-7.5">
                    <div class="px-5 py-7.5 text-center rounded border text-sm h-full">
                        <div class="w-20 inline-block text-center text-primary mb-5"> <a href="javascript:void(0);"
                                class="flex justify-center items-center"><?php echo svg('envelope', '50', '50', 'text-center') ?></a>
                        </div>
                        <div class="overflow-hidden">
                            <h5 class="uppercase">Email</h5>
                            <p class="mb-0"><a href="mailto:someone@example.com">info@example.com</a> <br> <a
                                    href="mailto:someone@example.com">info@example.com</a></p>
                        </div>
                    </div>
                </div>
                <div class="lg:col-span-3 sm:col-span-6 col-span-12 mb-7.5">
                    <div class="px-5 py-7.5 text-center rounded border text-sm h-full">
                        <div class="w-20 inline-block text-center text-primary mb-5"> <a href="javascript:void(0);"
                                class="flex justify-center items-center"><?php echo svg('phone', '50', '50', 'text-center') ?></a>
                        </div>
                        <div class="overflow-hidden">
                            <h5 class="uppercase">SỐ điện thoại</h5>
                            <p class="mb-0"><a href="tel:+4733378901">+00 1234 5678 90 <br> +00 234 678 9012</a></p>
                        </div>
                    </div>
                </div>
                <div class="lg:col-span-3 sm:col-span-6 col-span-12 mb-7.5">
                    <div class="px-5 py-7.5 text-center rounded border text-sm h-full">
                        <div class="w-20 inline-block text-center text-primary mb-5"> <a href="javascript:void(0);"
                                class="flex justify-center items-center"><?php echo svg('pc-display-horizontal', '50', '50', 'text-center') ?></a>
                        </div>
                        <div class="overflow-hidden">
                            <h5 class="uppercase">Fax</h5>
                            <p class="mb-0"><a href="tel:+4733378901">+00 1234 5678 90 <br> +00 234 678 9012</a></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="grid grid-cols-12 gap-x-6">
                <!-- Left part start -->
                <div class="lg:col-span-6 col-span-12 mb-7.5">
                    <div class="sm:p-7.5 p-5 border rounded">
                        <h3 class="mb-2.5">Gửi tin nhắn cho chúng tôi</h3>
                        <div class="dzFormMsg"></div>
                        <form method="post" class="dzForm" action="script/contact.php">
                            <input type="hidden" value="Contact" name="dzToDo">
                            <div class="grid grid-cols-12 gap-x-6">
                                <div class="col-span-12">
                                    <div class="sm:mb-6.25 mb-2.5">
                                        <div class="relative flex flex-wrap items-stretch w-full">
                                            <input name="dzName" type="text" required=""
                                                class="w-full h-13.5 py-2.5 px-5 rounded bg-white outline-none border border-black/10 text-sm"
                                                placeholder="Tên của bạn">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-span-12">
                                    <div class="sm:mb-6.25 mb-2.5">
                                        <div class="relative flex flex-wrap items-stretch w-full">
                                            <input name="dzEmail" type="email"
                                                class="w-full h-13.5 py-2.5 px-5 rounded bg-white outline-none border border-black/10 text-sm"
                                                required="" placeholder="Email">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-span-12">
                                    <div class="sm:mb-6.25 mb-2.5">
                                        <div class="relative flex flex-wrap items-stretch w-full">
                                            <textarea name="dzMessage" rows="4"
                                                class="w-full h-auto py-2.5 px-5 rounded bg-white outline-none border border-black/10 text-sm"
                                                required="" placeholder="Lời nhắn..."></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-span-12">
                                    <div class="sm:mb-6.25 mb-2.5">
                                        <div class="relative flex flex-wrap items-stretch w-full">
                                            <div class="g-recaptcha"
                                                data-sitekey="6LefsVUUAAAAADBPsLZzsNnETChealv6PYGzv3ZN"
                                                data-callback="verifyRecaptchaCallback"
                                                data-expired-callback="expiredRecaptchaCallback"></div>
                                            <input class="form-control d-none" style="display:none;"
                                                data-recaptcha="true" required=""
                                                data-error="Please complete the Captcha">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-span-12">
                                    <button name="submit" type="submit" value="Submit"
                                        class="btn bg-primary text-white hover:bg-primaryhover block w-full">
                                        <span>Gửi</span> </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- Left part END -->
                <!-- right part start -->
                <div class="lg:col-span-6 col-span-12 mb-7.5 flex">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d227748.3825624477!2d75.65046970649679!3d26.88544791796718!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x396c4adf4c57e281%3A0xce1c63a0cf22e09!2sJaipur%2C+Rajasthan!5e0!3m2!1sen!2sin!4v1500819483219"
                        class="align-self-stretch radius-sm" style="border:0; width:100%;  min-height:100%;"
                        allowfullscreen=""></iframe>
                </div>
                <!-- right part END -->
            </div>
        </div>
    </div>
    <!-- contact area  END -->
</div>

<?php
get_footer();