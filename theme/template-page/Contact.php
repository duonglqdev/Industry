<?php

/**
Template Name: Contact
 */

get_header();
?>

<div class="page-content bg-white">
    <!-- Contact Form -->
    <div class="max2lg:bg-scroll md:pt-20 md:pb-13.5 sm:pb-5 pt-7.5 contact-page-9 relative after:content-[''] after:absolute after:left-0 after:top-0 after:size-full after:bg-black/80"
        style="background-image: url(images/bg5.jpg); background-position: 30% 100%">
        <div class="container relative z-1">
            <div class="grid grid-cols-12 gap-x-6">
                <div class="lg:col-span-4 col-span-12 text-white">
                    <div class="grid grid-cols-12 gap-x-6">
                        <div class="lg:col-span-12 col-span-12 mb-7.5">
                            <div class="bg-white/5 border border-[#505050] p-5 rounded text-sm">
                                <div class="overflow-hidden">
                                    <h5 class="text-white">
                                        <span class="w-10 inline-block text-center text-primary">
                                            <?php echo svg('geo-alt', '25', '25', 'text-3xl align-middle') ?>
                                        </span>
                                        Địa chỉ công ty
                                    </h5>
                                    <p class="text-white">007 Dummy Ashoka Apartment, Gautam Marg, Rani Sati
                                        Nagar,Jaipur / India </p>
                                    <h6 class="text-white mb-3.75 font-normal"><i class="ti-alarm-clock"></i> Thời gian
                                        làm việc</h6>
                                    <p class="text-white mb-0">Mon To Sat - 10.00 - 07.00</p>
                                    <p class="text-white mb-0">Sunday - Close</p>
                                </div>
                            </div>
                        </div>
                        <div class="lg:col-span-12 md:col-span-6 col-span-12 mb-7.5">
                            <div class="bg-white/5 border border-[#505050] p-5 rounded text-sm">
                                <div class="overflow-hidden">
                                    <h5 class="text-white">
                                        <span
                                            class="w-10 inline-block text-center text-primary"><?php echo svg('envelope', '25', '25', 'text-3xl align-middle') ?></span>
                                        E-mail
                                    </h5>
                                    <p class="mb-0"><a href="mailto:someone@example.com"
                                            class="text-white">info@example.com</a></p>
                                    <p class="mb-0"><a href="mailto:someone@example.com"
                                            class="text-white">hr@example.com</a></p>
                                    <p class="mb-0"><a href="mailto:someone@example.com"
                                            class="text-white">support@example.com</a></p>
                                </div>
                            </div>
                        </div>
                        <div class="lg:col-span-12 md:col-span-6 col-span-12 mb-7.5">
                            <div class="bg-white/5 border border-[#505050] p-5 rounded text-sm">
                                <div class="overflow-hidden">
                                    <h5 class="text-white">
                                        <span
                                            class="w-10 inline-block text-center text-primary"><?php echo svg('phone', '25', '25', 'text-3xl align-middle') ?></span>
                                        Số điện thoại
                                    </h5>
                                    <p class="mb-0"><a href="tel:+4733378901" class="text-white">+00 234 678 9012</a>
                                    </p>
                                    <p class="mb-0"><a href="tel:+4733378901" class="text-white">+00 1234 5678 90</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="lg:col-span-8 col-span-12 mb-7.5">
                    <form class="md:p-7.5 p-5 rounded h-full wow bg-white fadeInUp" data-wow-delay="0.2s">
                        <h3 class="mb-2.5">Let's Convert Your Idea into Reality <span class="bg-primary"></span></h3>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has
                            been the industry's standard dummy text ever since the</p>
                        <div class="grid grid-cols-12 gap-x-6">
                            <div class="md:col-span-6 col-span-12">
                                <div class="sm:mb-6.25 mb-2.5">
                                    <div class="relative flex flex-wrap items-stretch w-full">
                                        <span
                                            class="border-b border-black/10 text-lg pt-[9px] pb-[3px] align-top"><?php echo svg('person', '20', '20', 'text-3xl align-middle text-primary') ?></span>
                                        <input name="dzName" type="text" required=""
                                            class="w-[1%] flex-auto h-10 py-2 px-3 bg-white outline-none border-b border-black/10"
                                            placeholder="Họ">
                                    </div>
                                </div>
                            </div>
                            <div class="md:col-span-6 col-span-12">
                                <div class="sm:mb-6.25 mb-2.5">
                                    <div class="relative flex flex-wrap items-stretch w-full">
                                        <span
                                            class="border-b border-black/10 text-lg pt-[9px] pb-[3px] align-top"><?php echo svg('phone', '20', '20', 'text-3xl align-middle text-primary') ?></span>
                                        <input name="dzOther[Phone]" type="text" required=""
                                            class="w-[1%] flex-auto h-10 py-2 px-3 bg-white outline-none border-b border-black/10 dz-number"
                                            placeholder="Số điện thoại">
                                    </div>
                                </div>
                            </div>
                            <div class="col-span-12">
                                <div class="sm:mb-6.25 mb-2.5">
                                    <div class="relative flex flex-wrap items-stretch w-full">
                                        <span
                                            class="border-b border-black/10 text-lg pt-[9px] pb-[3px] align-top"><?php echo svg('envelope', '20', '20', 'text-3xl align-middle text-primary') ?></span>
                                        <input name="dzEmail" type="email"
                                            class="w-[1%] flex-auto h-10 py-2 px-3 bg-white outline-none border-b border-black/10"
                                            required="" placeholder="E-mail">
                                    </div>
                                </div>
                            </div>
                            <div class="md:col-span-6 col-span-12">
                                <div class="sm:mb-6.25 mb-2.5">
                                    <div class="relative flex items-stretch w-full flex-nowrap">
                                        <span
                                            class="border-b border-black/10 text-lg pt-[9px] pb-[3px] align-top"><?php echo svg('check-square', '20', '20', 'text-3xl align-middle text-primary') ?></span>
                                        <select
                                            class="nice-select wide float-none border-0 border-b rounded-none text-base">
                                            <option>Chọn doanh nghiệp</option>
                                            <option>Oil/Gas Plant</option>
                                            <option>Steel Plant</option>
                                            <option>Factory</option>
                                            <option>Construct</option>
                                            <option>Solar Plant</option>
                                            <option>Food Industry</option>
                                            <option>Agriculture</option>
                                            <option>Ship Industry</option>
                                            <option>Leather Industry</option>
                                            <option>Nuclear Plant</option>
                                            <option>Beer Factory</option>
                                            <option>Mining Industry</option>
                                            <option>Car Industry</option>
                                            <option>Plastic Industry</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="md:col-span-6 col-span-12">
                                <div class="sm:mb-6.25 mb-2.5">
                                    <div class="relative flex flex-wrap items-stretch w-full">
                                        <span
                                            class="border-b border-black/10 text-lg pt-[9px] pb-[3px] align-top"><?php echo svg('file-earmark-arrow-up', '20', '20', 'text-3xl align-middle text-primary') ?></span>
                                        <input name="dzOther[Subject]" type="file" required=""
                                            class="w-[1%] flex-auto h-10 py-2 px-3 bg-white outline-none border-b border-black/10 file:border-0 file:bg-[#f8f9fa] file:px-2 file:py-1"
                                            placeholder="Tải tệp lên">
                                    </div>
                                </div>
                            </div>
                            <div class="col-span-12">
                                <div class="sm:mb-6.25 mb-2.5">
                                    <div class="relative flex flex-wrap items-stretch w-full">
                                        <span
                                            class="border-b border-black/10 text-lg pt-[9px] pb-[3px] align-top"><?php echo svg('journal', '20', '20', 'text-3xl align-middle text-primary') ?></span>
                                        <textarea name="dzMessage" rows="4"
                                            class="w-[1%] flex-auto h-auto py-2 px-3 bg-white outline-none border-b border-black/10"
                                            required=""
                                            placeholder="Nói với chúng tôi về dự án va và ý tưởng của bạn"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="col-span-12">
                                <button name="submit" type="submit" value="Submit"
                                    class="btn btn-md bg-primary text-white hover:bg-primaryhover"> <span>Nhận báo giá
                                        miễn phí!</span> </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact Form END -->
</div>

<?php
get_footer();