<?php
/*
Template Name: Membership Page

*/
get_header(); 

$banner = get_field('banner');
?>

 <!-- hero sectio -->
        <div class="hero hero-overly d-flex align-items-center" style="background-image: url('<?php echo $banner['bg']; ?>')">
            <div class="container hero-content">
                <div class="head-text">
                    <?php 
                        if(!empty($banner['title'])){
                            printf(__('<h1>%s</h1>', 'airdesigns'), $banner['title']);
                        }
                    ?>
                </div>
                <div class="head-content">
                    <div class="table">
                        <ul>
                            <?php 
                                if(!empty($banner['lists'])):
                                    foreach ($banner['lists'] as $l):
                             ?>
                            <li><img src="<?php echo AIRDESIGNS_DIR_IMG.'/icon/check-mark-3.svg' ?>"alt="<?php bloginfo('name'); ?>"><span> <?php echo __($l['item'], 'airdesigns'); ?></span></li>
                            <?php 
                                endforeach; endif;
                             ?>
                        </ul>
                    </div>
                </div>
                <?php 
                    if(!empty($banner['button'])){
                        printf(__('<a herf="%s" class="button" target="%s">%s</a>', 'airdesigns'), $banner['button']['url'],$banner['button']['target'], $banner['button']['title'] );    
                    }
                ?>
            </div>
        </div>

<!-- section-1 -->
    <div class="part-halth-dog">
        <div class="row">
        <div class="beuty-dogs">
            <div class="beuty-hrad text-center">
                <?php 
                    $how_pet = get_field('how_pets_works');

                    if(!empty($how_pet['title'])){
                        printf(__('<h2>%s</h2>', 'airdesigns'), $how_pet['title']);
                    }
                 ?>
            </div>
            <?php 

                if(!empty($how_pet['items'])):
                    foreach ($how_pet['items'] as $key => $item):
             ?>
            <div class="row align-items-center justify-content-between mt-50 <?php if($key == 1 || $key == 3){echo "flex-row-reverse";} ?>">
                <div class="col-12 col-md-6 col-lg-6 ">
                    <div class="beuty-dog-image">
                        <?php 
                            printf('<img src="%s"alt="%s">', $item['image']['url'], $item['image']['alt']);
                        ?>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-6">
                    <div class="beuty-dog-text">
                        <?php 
                            printf(__('<h4>%s</h4>', 'airdesigns'), $item['title']);
                            printf(__('<p>%s<p>', 'airdesigns'), $item['content']);
                        ?>
                    </div>
                </div>
            </div>
            <?php 
                endforeach; endif;
             ?>

             <div class="button-text">
                <div class="lest-sub-button text-center">
                    <?php 
                        if(!empty($how_pet['button'])){
                            printf(__('<a href="%s" target="%s">%s</a>', 'airdesigns'), $how_pet['button']['url'], $how_pet['button']['target'], $how_pet['button']['title'] );
                        }
                     ?>
                </div>
                <div class="text">
                    <?php 
                        if(!empty($how_pet['content'])){
                            printf(__('<p>%s</p>', 'airdesigns'), $how_pet['content']);
                        }
                     ?>
                </div>
             </div>
             
        </div>
        </div>
    </div>
<!-- section-1 -->
<!-- section-2-->
    <div class="custom-food-grid-wrapper membership">
       <div class="container">
       <div class="custom-hrad">
           <div class="head text-center">
                <?php 
                    $include = get_field('what_is_included');

                    if(!empty($include['title'])){
                        printf(__('<h2>%s</h2>', 'airdesigns'), $include['title']);
                    }
                    if(!empty($include['subtitle'])){
                        printf(__('<h5>%s</h5>', 'airdesigns'), $include['subtitle']);
                    }
                 ?>
           </div>
       </div>
       <div class="coustom-medicin-wrapper">
           <div class="medicin-dog text-center">
                <?php 
                    if(!empty($include['ema_title'])){
                        printf(__('<h2>%s</h2>', 'airdesigns'), $include['ema_title']);
                    }
                 ?>
               <ul>
                <?php 
                    if(!empty($include['ema_features'])){
                        foreach ($include['ema_features'] as $fea) {
                            printf(__('<li>%s</li>', 'airdesigns'), $fea['item']);
                        }
                    }    
                 ?>
               </ul>
               <?php 
                   if(!empty($include['ema_content'])){
                       printf(__('<p>%s</p>', 'airdesigns'), $include['ema_content']);
                   }
                ?>
               
           </div>
       </div>
       <div class="row align-items-center justify-content-center">
           <div class="col-lg-4 col-md-4">
                <div class="kakbo">
                    <?php 

                        if(!empty($include['left_items'])):
                            foreach ($include['left_items'] as $key => $l_item):
                     ?>
                    <div class="save-manuy d-flex justify-content-end <?php if($key == 1){echo "mr-50";} ?>"> 
                            <div class="best-save">
                                <div class="beat-info-head text-end">
                                    <?php 
                                        printf(__('<h5>%s</h5>', 'airdesigns'), $l_item['title']);
                                        printf(__('<p>%s</p>', 'airdesigns'), $l_item['subtitle']);
                                     ?>
                                    
                                </div>
                            </div>
                            <div class="dog-save-img">
                                <?php 
                                    printf('<img src="%s" alt="%s">', $l_item['icon']['url'], $l_item['icon']['alt']);
                                 ?>
                            </div>
                    </div>
                    <?php 
                        endforeach; endif;
                     ?>
                </div>
           </div>
           <div class=" col-12 col-md-4 col-lg-4 ">
                <div class="img-image-4">
                    <?php 
                        if(!empty($include['center_image'])){
                            printf('<img src="%s" alt="%s">', $include['center_image']['url'], $include['center_image']['alt']);
                        }
                     ?>
                </div>
           </div>
           <div class="col-12 col-md-4 col-lg-4">
           <div class="kakbos">
                <?php 

                    if(!empty($include['right_items'])):
                        foreach ($include['right_items'] as $key => $r_item):
                 ?>
                    <div class="save-manuy-2 d-flex <?php if($key == 1){echo "ml-50";} ?>">
                            <div class="dog-save-img">
                                <?php 
                                    printf('<img src="%s" alt="%s">', $r_item['icon']['url'], $r_item['icon']['alt']);
                                 ?>
                            </div>
                            <div class="best-save">
                                <div class="beat-info-head text-start">
                                    <?php 
                                        printf(__('<h5>%s</h5>', 'airdesigns'), $r_item['title']);
                                        printf(__('<p>%s</p>', 'airdesigns'), $r_item['subtitle']);
                                     ?>
                                </div>
                            </div>
                    </div>
                <?php 
                    endforeach; endif;
                 ?>

                </div>
           </div>

           <div class="lest-sub-buttom text-center">
                <?php 
                    if(!empty($include['button'])){
                        printf(__('<a href="%s" target="%s">%s</a>', 'airdesigns'), $include['button']['url'], $include['button']['target'], $include['button']['title']);
                    }
                 ?>
            </div>
       </div>
       </div>
    </div>
<!-- section-2-->
<!-- section-3-->
    <div class="save-time-wepar">
        <div class="dog-helth">
            <div class="save-head-waoeer text-center">
                <?php 
                    $save = get_field('save_time_and_money');

                    if(!empty($save['title'])){
                        printf(__('<h4>%s</h4>', 'airdesigns'), $save['title']);
                    }
                 ?>
            </div>
            <div class="container">
            <div class="row">
                <?php 
                    if(!empty($save['items'])):
                        foreach ($save['items'] as $item):
                 ?>
                <div class="col-12 col-md-4 col-lg-4 text-center">
                    <div class="dog-money">
                        <div class="image">
                            <?php 
                                if(!empty($item['image'])){
                                    printf('<img src="%s" alt="%s">', $item['image']['url'], $item['image']['alt']);
                                }
 
                                if(!empty($item['discount'])){
                                    printf('<a href="#">-%s</a>', $item['discount']);
                                }
                             ?>
                            
                            
                        </div>
                        <div class="save">
                            <?php
                                if(!empty($item['title'])){
                                    printf(__('<h4>%s</h4>', 'airdesigns'), $item['title']);
                                }
                                if(!empty($item['content'])){
                                    printf(__('<p>%s</p>', 'airdesigns'), $item['content']);
                                }
                                if(!empty($item['member_title'])){
                                    printf(__('<h6>%s</h6>', 'airdesigns'), $item['member_title']);
                                }
                             ?>
                            
                            
                            
                        </div>
                    </div>
                </div>
                <?php endforeach; endif; ?>
            </div>
            </div>
        </div>
    </div>
<!-- section-3-->
<!-- section-4 -->
    <div class="sefty-good">
        <div class="dog-food-row">
            <div class="container">
                <div class="dog-food-head text-center">
                   <div class="title">
                    <?php 
                        $benefits = get_field('membership_and_benefits');

                        if(!empty($benefits['title'])){
                            printf(__('<h4>%s</h4>', 'airdesigns'), $benefits['title']);
                        }
                     ?>
                   </div>
                </div>
                <div class="row">
                    <?php 
                        if(!empty($benefits['items'])):
                            foreach ($benefits['items'] as $item):
                     ?>
                    <div class="col-12 col-md-4 col-lg-4 text-center">
                        <div class="save-helth">
                            <div class="image">
                                <?php 
                                    if(!empty($item['image'])){
                                        printf('<img src="%s" alt="%s">', $item['image']['url'], $item['image']['alt']);
                                    }
                                ?>
                            </div>
                            <div class="info-helth text-center">
                                <?php 
                                    if(!empty($item['title'])){
                                        printf(__('<p>%s</p>', 'airdesigns'), $item['title']);
                                    }
                                ?>
                            </div>
                            <div class="bg-vector">
                                <?php 
                                    if(!empty($item['shape'])){
                                        printf('<img src="%s" alt="%s">', $item['shape']['url'], $item['shape']['alt']);
                                    }
                                ?>
                            </div>
                        </div>
                    </div>
                    <?php endforeach; endif; ?>
                </div>
            </div>
        </div>
    </div>
<!-- section-4 -->
<!-- section-5 -->
    <div class="card-wepeer">
        <div class="container">
            <div class="card-head text-center">
                <?php 
                    $subcription = get_field('subscriptions');

                    if(!empty($subcription['subtitle'])){
                        printf(__('<h5>%s</h5>', 'airdesigns'), $subcription['subtitle']);
                    }
                    if(!empty($subcription['title'])){
                        printf(__('<h2>%s</h2>', 'airdesigns'), $subcription['title']);
                    }
                    if(!empty($subcription['content'])){
                        printf(__('<p>%s</p>', 'airdesigns'), $subcription['content']);
                    }
                 ?>
                
            </div>
            <div class="row justify-content-center">
                <div class="card">
                    <div class="card-info">
                        <div class="head">
                            <?php 
                                $package_one = $subcription['package_one'];

                                if(!empty($package_one['subtitle'])){
                                    printf(__('<h5>%s</h5>', 'airdesigns'), $package_one['subtitle']);
                                }
                                if(!empty($package_one['title'])){
                                    printf(__('<h4>%s</h4>', 'airdesigns'), $package_one['title']);
                                }
                                if(!empty($package_one['content'])){
                                    printf(__('<p>%s</p>', 'airdesigns'), $package_one['content']);
                                }

                             ?>
                        </div>
                        <table class="table">
                            <?php 
                                if(!empty($package_one['features'])):
                                    foreach ($package_one['features'] as $pf):
                             ?>
                            <tr>
                                <th> <img src="<?php echo AIRDESIGNS_DIR_IMG.'/petbuddy/icon/done.svg' ?>" alt="<?php echo $pf['item']; ?>"></th>
                                <th><p><?php echo __($pf['item'], 'airdesigns'); ?></p></th>
                            </tr>
                            <?php endforeach; endif; ?>
                        </table>
                    </div>
                </div>
                <div class="card-2 ">
                    <div class="card-info ">
                        <div class="head">
                            <?php 
                                $package_two = $subcription['package_two'];

                                if(!empty($package_two['subtitle'])){
                                    printf(__('<h5>%s</h5>', 'airdesigns'), $package_two['subtitle']);
                                }
                                if(!empty($package_two['title'])){
                                    printf(__('<h4> <span>%s</span></h4>', 'airdesigns'), $package_two['title']);
                                }
                                if(!empty($package_two['content'])){
                                    printf(__('<p>%s</p>', 'airdesigns'), $package_two['content']);
                                }

                            ?>
                        </div>
                        <table class="table">
                            <?php 
                                if(!empty($package_two['features'])):
                                    foreach ($package_two['features'] as $pf):
                             ?>
                            <tr>
                                <th> <img src="<?php echo AIRDESIGNS_DIR_IMG.'/petbuddy/icon/done.svg' ?>" alt="<?php echo $pf['item']; ?>"></th>
                                <th><p><?php echo __($pf['item'], 'airdesigns'); ?></p></th>
                            </tr>
                            <?php endforeach; endif; ?>
                        </table>

                        <div class="lest-sub-buttom text-center">
                            <?php 
                                if(!empty($package_two['button'])){
                                    printf(__('<a href="%s" target="%s">%s</a>', 'airdesigns'), $package_two['button']['url'], $package_two['button']['target'], $package_two['button']['title']);
                                }
                             ?>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<!-- section-5 -->
<!-- section-6 -->
   <div class="myAccroding">
       <div class="container">
           <div class="accroding-into">
                <div class="heading-accdroing text-center">
                    <?php 
                        $faq = get_field('faq');

                        if(!empty($faq['title'])){
                            printf(__('<h2>%s</h2>', 'airdesigns'), $faq['title']);
                        }
                     ?>
                </div>
                <div class="accordion" id="accordionExample">
                    <?php 
                        if(!empty($faq['items'])):
                            foreach ($faq['items'] as $key => $fa):
                     ?>
                    <div class="accordion-item border-buttom">
                        <h2 class="accordion-header " id="heading_<?php echo $key; ?>">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse_<?php echo $key; ?>" aria-expanded="<?php if($key == 0){echo "true"; }?>" aria-controls="collapse_<?php echo $key; ?>">
                                <?php echo __($fa['question'], 'airdesigns'); ?>
                            </button>
                        </h2>
                        <div id="collapse_<?php echo $key; ?>" class="accordion-collapse collapse <?php if($key == 0){echo "show"; }?>" aria-labelledby="heading_<?php echo $key; ?>" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p><?php echo __($fa['ans'], 'airdesigns'); ?></p>
                            </div>
                        </div>
                    </div>
                    <?php endforeach; endif; ?>
                </div>
                <!-- button -->
                <div class="lest-sub-buttom text-center">
                    <?php 
                        if(!empty($faq['button'])){
                            printf(__('<a href="%s" target="%s">%s</a>', 'airdesigns'), $faq['button']['url'], $faq['button']['target'], $faq['button']['title']);
                        }
                     ?>
                </div>
           </div>
       </div>
   </div>
<!-- section-6 -->
<!-- section-7-->
<div class="slider-worper">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-12 col-md-5 col-lg-5 text-left">
                <div class="image">
                    <?php 
                        $testimonials = get_field('testimonials');

                        if(!empty($testimonials['image'])){
                            printf('<img src="%s" alt="%s">', $testimonials['image']['url'], $testimonials['image']['alt']);
                        }
                     ?>
                </div>
            </div>
            <div class="col-12 col-md-7 col-lg-7 text-left">
                <div class="slider-dog ">
                    <?php 
                        if(!empty($testimonials['reviews'])):
                            foreach ($testimonials['reviews'] as $review):
                     ?>
                    <div class="slider item single-item d-flex align-items-center justify-content-between ">
                        <div class="text">
                            <div class="title-image">
                                <img src="<?php echo AIRDESIGNS_DIR_IMG.'/icon/“.svg' ?>" alt="">
                            </div>
                            <div class="slider-text-1">
                                <?php 
                                    printf(__('<h4>%s</h4>', 'airdesigns'), $review['title']);
                                    printf(__('<p>%s</p>', 'airdesigns'), $review['content']);
                                 ?>
                            </div>
                            <div class="slider-text-2">
                                <?php 
                                    printf(__('<h6>%s</h6>', 'airdesigns'), $review['name']);
                                    printf(__('<p>%s</p>', 'airdesigns'), $review['designation']);
                                ?>
                            </div>
                        </div>
                    </div>
                    <?php endforeach; endif; ?>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- section-7 -->
<?php 
    get_footer();
?>