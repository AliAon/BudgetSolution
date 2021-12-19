<div class="row blog-item_wrap">
                            <?php
                            
                            $post=new Post();
                            $result=$post->get_all();
                             
                            while($row=$result->fetch_object()){
                                
                                ?>

                            <div class="col-lg-4">
                                <div class="blog-item">
                                    <div class="blog-img">
                                        <a href="blog-details.php?id=<?php echo $row->post_id?>">
                                            <img src="admin/<?php echo $row->featured_image?>" alt="Blog Image">
                                        </a>
                                    </div>
                                    <div class="blog-content">
                                        <h3 class="heading">
                                            <a href="blog-details.php?id=<?php echo $row->post_id?>"><?php echo $row->post_title?></a>
                                        </h3>
                                        <p class="short-desc">
                                            The first line of lorem Ipsum: "Lorem ipsum dolor sit amet..", comes from a
                                            line in section 1.10.32.
                                        </p>
                                        <div class="blog-meta">
                                            <ul>
                                                <li><?php echo $row->create_time?></li>
                                                <li>
                                                    <a href="javascript:void(0)">02 Comments :</a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0)">Category: <?php echo $row->name?></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                             <?php   
                            }
                            
                            ?>
                           
                           
                        </div>