                     <div class="kenne-element-carousel latest-blog_slider slider-nav" data-slick-options='{
                                "slidesToShow": 3,
                                "slidesToScroll": 1,
                                "infinite": true,
                                "arrows": true,
                                "dots": false,
                                "spaceBetween": 30,
                                "appendArrows": ".latest-blog_arrow"
                                }' data-slick-responsive='[
                                {"breakpoint":992, "settings": {
                                "slidesToShow": 2
                                }},
                                {"breakpoint":768, "settings": {
                                "slidesToShow": 1
                                }}
                                            ]'>



                            <?php   
                            
                                        
                            $post=new Post();
                            $result=$post->get_all();
                             
                            while($row=$result->fetch_object()){
                            ?>
                            
                                       

                            <div class="blog-item">
                                <div class="blog-img img-hover_effect">
                                    <a href="blog-details.php?id=<?php echo $row->post_id?>">
                                        <img src="admin/<?php echo $row->featured_image?>" alt="Blog Image">
                                    </a>
                                </div>
                                <div class="blog-content">
                                    <h3 class="heading">
                                        <a href="blog-details.php?id=<?php echo $row->post_id?>"><?php echo $row->post_title?></a>
                                    </h3>
                                    <p class="short-desc">
                                        The first line of lorem Ipsum: "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.
                                    </p>
                                    <div class="blog-meta">
                                        <ul>
                                            <li>Oct.20.2019</li>
                                            <li>
                                                <a href="javascript:void(0)">02 Comments</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                           
                            <?php
                            }
                            
                            ?>   
                       
                    </div>