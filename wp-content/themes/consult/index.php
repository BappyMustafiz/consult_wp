<?php get_header(); ?>
    <div class="page_title_banner blog_sidebar_title_bg">
        <div class="page_title_banner_overlay"></div>
        <div class="container">
            <div class="page_title_banner_text text-center">
                <h2 class="banner_effect">Blog Sidebar</h2>
                <ul class="breadcrumb">
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Pages</a></li>
                    <li class="active">Blog sidebar</li>
                </ul>
            </div>
        </div><!--container-->
    </div><!-- page_title_banner -->

    <div class="blog_page_area">
        <div class="container">
            <div class="row">
			
			
                <div class="col-md-8">
                    <div class="blog_left_side_area">
				    <?php if(have_posts()) : while(have_posts()) : the_post();?>

                        <div class="blog_left_single_item">
                            <div class="blog_pic image_fulwidth">
                                <a href="<?php the_permalink();?>">
                                    <?php the_post_thumbnail('custom-image');?>
                                </a>
                                <h4 class="date_position"><?php the_time('M d, Y');?></h4>
                            </div>

                            <div class="blog_left_single_content para_default">
                                <h3><a href="<?php the_permalink();?>"><?php the_title();?></a></h3>
                                <p><?= wp_trim_words(get_the_content(),200);?></p>
                            </div>
                        </div><!-- blog_left_single_item -->
                        <?php endwhile; else :?>
                            <p><?php esc_html_e('Sorry, No posts found...');?></p>  
                        <?php endif;?>
                    </div><!-- blog_left_side_area -->
                    <div class="blog_pagination">
                        <nav>
                            <ul class="pagination pagination-lg">
                                <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                <li class="page-item"><a class="page-link" href="#">2</a></li>

                                <li class="page-item">
                                    <a class="page-link" href="#"><i class="flaticon-right-arrow"></i></a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div><!-- col-md-8 -->
            <?php get_sidebar();?>    
            </div><!-- row -->
        </div><!-- container -->
    </div><!-- blog_page_area -->
 <?php  get_footer();?>