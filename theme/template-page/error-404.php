<?php

/**
Template Name: Error-404
 */
get_header();
?>

<div class="bg-cover bg-center w-full text-center relative h-screen"
    style="background-image:url('https://industry.dexignzone.com/xhtml/images/banner/bnr1.jpg');">
    <div class="w-full h-full bg-black/90">
        <div class="container">
            <div class="h-screen w-full align-middle flex items-center justify-between max-w-[700px] m-auto">
                <div class="my-[30px] grow-0 shrink-0 basis-auto w-1/3">
                    <div
                        class="bg-primary rounded-full text-[70px] font-bold h-[200px] w-[200px] my-5 text-center text-white">
                        404
                    </div>
                </div>
                <div class="mb-[30px] text-left flex-auto w-2/3 px-3">
                    <h2 class="font-semibold mb-[10px] text-white text-[32px] ">Something went wrong !</h2>
                    <p class="text-base mb-6 text-white">We are sorry but it appears that the page you are looking for
                        could not be
                        found.
                        We
                        are working on it and we will get it fixed as soon as possible.</p>
                    <p class="text-base mb-6 text-white">You can go back to the Main Page by clicking the button.</p>
                    <a href="/home" class="bg-primary py-3 px-[30px] text-[13px] text-white rounded font-semibold">Trở
                        về
                        trang
                        chủ</a>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
get_footer();