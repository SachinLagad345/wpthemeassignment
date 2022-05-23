<div class="blog__single_post">
                            <!-- blog post header-->
                            <div class="blog__post_header">
                                <div class="blog__post_date">
                                    <p>
                                    <?php
                                        $date_s  = explode(' ',get_the_date('j M'));
                                        echo $date_s[0];
                                    ?>
                                    </p>
                                    <p>
                                    <?php
                                        echo $date_s[1];
                                    ?>
                                    </p>
                                </div>
                                <div class="blog__post_title">
                                        <?php the_title() ?>
                                </div>
                            </div>
                            <!-- //blog post header-->

                            <div class="blog__post_body">
                                <div class="blog__post_img">
                                    <img src="<?php the_post_thumbnail_url() ?>">
                                </div>
                                <div class="blog__post_right_body">
                                    <div class="blog__post_subheading">
                                        <p> by <a href="<?php get_author_link(true, get_the_author_ID()); ?>"><span class="blog__author-name"><?php the_author(); ?></span></a> on <?php echo get_the_date('j M Y'); ?></p>
                                        <p class="blog__author-name"> <?php echo get_comments_number() ?> comments </p>
                                    </div>
                                    <hr style="height: 1px; width: 100%; background-color: #62585f; margin: 5px 0px;">
                                    <!-- blog__post-excerpt -->
                                    <div class="blog__post-excerpt">
                                        <?php the_excerpt(); ?> 
                                    </div>
                                    <!-- //blog__post-excerpt -->
                                    <div class="blog__post-read-more">
                                        <a href="<?php echo get_the_permalink() ?>"> READ MORE </a>
                                    </div>
                                </div>
                                <!-- //blog post right body -->
                            </div>
						</div>