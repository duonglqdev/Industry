<?php
class Recent_Posts_Widget extends WP_Widget
{
    function __construct()
    {
        parent::__construct(
            'recent_posts_widget',
            __('[GNWS] Bài đăng gần đây', 'gnws'),
            array('description' => __('Hiển thị bài viết mới nhất', 'gnws'))
        );
    }

    public function widget($args, $instance)
    {
        echo $args['before_widget'];
        ?>
        <div class="mb-7.5">
            <h5
                class="relative align-middle uppercase border-b border-black/15 mb-5 pb-3.75 font-semibold leading-3 after:-bottom-0.5 after:content-[''] after:inline-block after:h-[3px] after:left-0 after:absolute after:align-bottom after:w-13.5 after:bg-primary">
                <?php _e('Bài đăng gần đây', 'gnws') ?>
            </h5>
            <div class="widget-post-bx">
                <?php
                $query = new WP_Query(array(
                    'post_type' => 'post',
                    'posts_per_page' => 3,
                    'orderby' => 'date',
                    'order' => 'DESC',
                ));

                if ($query->have_posts()):
                    while ($query->have_posts()):
                        $query->the_post(); ?>
                        <div class="overflow-hidden mb-2.5">
                            <div class="table-cell align-middle w-[125px] overflow-hidden pr-3.75">
                                <a href="<?php the_permalink(); ?>">
                                    <img src="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'medium'); ?>"
                                        alt="<?php the_title(); ?>" width="200" height="143" class="rounded">

                                </a>
                            </div>
                            <div class="table-cell align-middle">
                                <div>
                                    <ul>
                                        <li
                                            class="inline-block text-primary font-semibold text-2xs uppercase after:content-['|'] after:inline-block after:font-normal after:ml-1.25 after:opacity-50">
                                            <strong class="font-semibold"><?php echo get_the_date('d/m'); ?></strong>
                                        </li>
                                        <li class="inline-block text-primary font-semibold text-2xs uppercase">
                                            <?php _e('Bởi', 'gnws'); ?>                 <?php the_author(); ?>
                                        </li>
                                    </ul>
                                </div>
                                <div>
                                    <h6 class="leading-5 mb-2 text-2sm font-medium">
                                        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                    </h6>
                                </div>
                            </div>
                        </div>
                        <?php
                    endwhile;
                    wp_reset_postdata();
                endif;
                ?>
            </div>
        </div>
        <?php
        echo $args['after_widget'];
    }
}

// Đăng ký widget
function register_recent_posts_widget()
{
    register_widget('Recent_Posts_Widget');
}
add_action('widgets_init', 'register_recent_posts_widget');

class GNWS_Gallery_Widget extends WP_Widget
{

    public function __construct()
    {
        parent::__construct(
            'gnws_gallery_widget',
            __('[GNWS] Thư viện ảnh', 'gnws'),
            array('description' => __('Hiển thị thư viện ảnh từ ACF.', 'gnws'))
        );
    }

    public function widget($args, $instance)
    {
        $widget_id = $this->id;
        $title = get_field('wd_gallery_title', 'widget_' . $widget_id);
        $gallery = get_field('ns_post_gallery', 'widget_' . $widget_id);
        ?>

        <div class="mb-7.5">
            <?php if ($title): ?>
                <h5
                    class="relative align-middle uppercase border-b border-black/15 mb-5 pb-3.75 font-semibold leading-3 after:-bottom-0.5 after:content-[''] after:inline-block after:h-[3px] after:left-0 after:absolute after:align-bottom after:w-13.5 after:bg-primary">
                    <?php echo esc_html($title); ?>
                </h5>
            <?php endif; ?>

            <?php if (!empty($gallery)): ?>
                <ul id="lightgallery" class="lightgallery table">
                    <?php foreach ($gallery as $image_id): ?>
                        <li class="inline-block float-left w-1/4 p-0.5 duration-500 hover:opacity-70">
                            <div class="relative overflow-hidden">
                                <a href="<?php echo esc_url(wp_get_attachment_url($image_id)); ?>" data-fancybox="gallery"
                                    class="mfp-image">
                                    <?php echo wp_get_attachment_image($image_id, 'full', false, ['class' => 'aspect-square object-cover size-full']); ?>
                                </a>
                            </div>
                        </li>
                    <?php endforeach; ?>
                </ul>
            <?php endif; ?>
        </div>

        <?php
    }
}

// Đăng ký widget
function gnws_register_gallery_widget()
{
    register_widget('GNWS_Gallery_Widget');
}
add_action('widgets_init', 'gnws_register_gallery_widget');

class GNWS_Project_Gallery_Widget extends WP_Widget
{

    public function __construct()
    {
        parent::__construct(
            'gnws_project_gallery_widget',
            __('[GNWS] Hình ảnh Dự án', 'gnws'),
            array('description' => __('Hiển thị thư viện hình ảnh dự án từ ACF.', 'gnws'))
        );
    }

    public function widget($args, $instance)
    {
        $widget_id = $this->id; // Lấy ID của widget
        $title = get_field('wd_title_gallery_pj', 'widget_' . $widget_id);
        $galleryProject = get_field('ns_post_gallery_pj', 'widget_' . $widget_id);

        if (!empty($galleryProject)): ?>
            <div class="mb-7.5">
                <?php if ($title): ?>
                    <h5
                        class="relative align-middle uppercase border-b border-black/15 mb-5 pb-3.75 font-semibold leading-3 after:-bottom-0.5 after:content-[''] after:inline-block after:h-[3px] after:left-0 after:absolute after:align-bottom after:w-13.5 after:bg-primary">
                        <?php echo esc_html($title); ?>
                    </h5>
                <?php endif; ?>
                <div class="widget-project-box owl-none owl-loaded owl-theme owl-carousel dots-style-1 owl-dots-black-full">
                    <?php foreach ($galleryProject as $image_id): ?>
                        <div class="item">
                            <a href="<?php echo esc_url(wp_get_attachment_url($image_id)); ?>" data-fancybox="gallery-pj"
                                class="mfp-image">
                                <?php echo wp_get_attachment_image($image_id, 'full', false, ['class' => 'aspect-square object-cover size-full']); ?>
                            </a>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        <?php endif;
    }
}

// Đăng ký widget
function gnws_register_project_gallery_widget()
{
    register_widget('GNWS_Project_Gallery_Widget');
}
add_action('widgets_init', 'gnws_register_project_gallery_widget');