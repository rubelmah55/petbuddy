<?php
/*
Template Name: Home Page

*/
get_header(); 

$banner = get_field('banner');
?>

 <!-- hero sectio -->
        <div class="hero d-flex align-items-center" style="background-image: url('<?php echo $banner['bg']; ?>')">
            <div class="container  hero-content">
                <div class="head-text">
                    <?php 
                        if(!empty($banner['title'])):
                     ?>
                    <h1><?php echo __($banner['title'], 'airdesigns'); ?></h1>
                    <?php endif; ?>
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
<!-- section-01 -->
    <div class="hero-product-wrapper">
        <div class="container">
            <div class="row g-0 ">
                <div class="section-head text-center ">
                    <?php 
                        $own = get_field('owner_features');
                        if(!empty($own['subtitle'])){
                            printf(__('<h4>%s</h4>', 'airdesigns'), $own['subtitle']);
                        }

                        if(!empty($own['title'])){
                            printf(__('<h2>%s</h2>', 'airdesigns'), $own['title']);
                        }
                     ?>
                </div>
                <div class=" col-12 col-md-6 col-lg-6 pe-2">
                    <?php 
                        if(!empty($own['left_image'])){
                            printf('<img src="%s" alt="%s">', $own['left_image']['url'], $own['left_image']['atl']);
                        }
                     ?>
                </div>
                <div class="col-12 col-md-6 col-lg-6 ps-2">
                    <?php 

                        if(!empty($own['features'])):
                            foreach ($own['features'] as $f):
                     ?>
                   <div class="dog-sleep d-flex align-items-center">
                       <div class="dog-love-img">
                        <?php 
                            printf('<img src="%s" alt="%s">', $f['icon']['url'], $f['icon']['alt']);
                        ?>
                       </div>
                        <div class="best-helth">
                            <div class="beat-info-head">
                                <?php 
                                    printf(__('<h5>%s</h5>', 'airdesigns'), $f['title']);
                                    printf(__('<p>%s</p>', 'airdesigns'), $f['content']);
                                ?>
                            </div>
                        </div>
                   </div>
                    <?php endforeach; endif; ?>
                </div>
            </div>
        </div>
    </div>
<!-- section-01 -->
<!-- section-02 -->
    <div class="best-features-wrapper">
        <div class="container">
            <div class="row flex-row-reverse">
                <div class="col-12 col-md-6 col-lg-5 ">
                    <?php 
                        $pet_get = get_field('pet_get');

                        printf('<img src="%s" alt="%s">', $pet_get['right_image']['url'], $pet_get['right_image']['alt']);
                     ?>
                </div>
                <div class=" col-12 col-md-6 col-lg-7 ">
                    <div class="section-head">
                        <?php 
                            if(!empty($pet_get['title'])){
                                printf(__('<h2>%s</h2>', 'airdesigns'), $pet_get['title']);
                            }
                         ?>
                    </div>
                    <?php 
                        if(!empty($pet_get['features'])):
                            foreach ($pet_get['features'] as $featur):
                     ?>
                    <div class="dog-sleep d-flex align-items-center">
                        <div class="dog-love-img">
                            <?php 
                                printf('<img src="%s" alt="%s">', $featur['icon']['url'], $featur['icon']['alt']);
                             ?>
                        </div>
                        <div class="best-helth">
                            <div class="beat-info-head pl-10">
                                <?php 
                                    printf(__('<h5>%s</h5>', 'airdesigns'), $featur['title']);
                                    printf(__('<p>%s</p>', 'airdesigns'), $featur['content']);
                                ?>
                            </div>
                        </div>
                    </div>
                    <?php 
                        endforeach; endif;
                     ?>
                    <div class="three d-flex  align-items-center justify-content-center">
                        <?php 
                            if(!empty($pet_get['services'])):
                                foreach ($pet_get['services'] as $service):
                         ?>
                        <div class="one">
                        <?php 
                            printf('<img src="%s" alt="%s">', $service['shape']['url'], $service['shape']['url']);
                            printf(__('<p class="text-1">%s</p>', 'airdesigns'), $service['title']);
                         ?>  
                        </div>
                        <?php 
                            endforeach; endif;
                         ?>
                    </div>
                </div>

                <div class="lest-sub-button text-center">
                    <?php 
                        if(!empty($pet_get['button'])){
                            printf(__('<a href="%s" target="%s">%s</a>', 'airdesigns'), $pet_get['button']['url'], $pet_get['button']['target'], $pet_get['button']['title'] );
                        }
                     ?>
                </div>
            </div>
        </div>
    </div>
<!-- section-02 -->
<!-- section-03 -->
    <div class="custom-food-grid-wrapper">
       <div class="container">
       <div class="custom-hrad">
           <div class="head text-center">
            <?php 
                $subcription = get_field('subscription_food');

                if(!empty($subcription['title'])){
                    printf(__('<h2>%s</h2>', 'airdesigns'), $subcription['title']);
                }
                if(!empty($subcription['subtitle'])){
                    printf(__('<h5>%s</h5>', 'airdesigns'), $subcription['subtitle']);
                }
             ?>
               
           </div>
       </div>
       <div class="row align-items-center justify-content-center">
           <div class="col-lg-4 col-md-12">
                <div class="kakbo">
                    <?php 
                        if(!empty($subcription['left_lists'])):
                            foreach ($subcription['left_lists'] as $i => $l_list):
                     ?>
                    <div class="save-manuy d-flex <?php if($i == 0){echo "align-items-start"; }elseif($i == 1 || $i == 2){echo "d-flex mr-50";}?>">
                            <div class="best-save">
                                <div class="beat-info-head text-end">
                                    <?php 
                                        printf(__('<h5>%s</h5>', 'airdesigns'), $l_list['title']);
                                        printf(__('<p>%s</p>', 'airdesigns'), $l_list['content']);
                                     ?>
                                    
                                </div>
                            </div>
                            <div class="dog-save-img">
                                <?php 
                                    printf('<img src="%s" alt="%s">', $l_list['icon']['url'], $l_list['icon']['alt']);
                                ?>
                            </div>
                    </div>
                    <?php 
                        endforeach; endif;
                     ?>
                </div>
           </div>
           <div class=" col-12 col-md-0 col-lg-4 ">
                <div class="img-image-4 text-center">
                    <img src="<?php echo AIRDESIGNS_DIR_IMG.'/картинка.png' ?>"alt="<?php bloginfo('name'); ?>">
                </div>
           </div>
           <div class="col-sm-12 col-md-12 col-lg-4">
                <div class="kakbos">
                    <?php 
                        if(!empty($subcription['right_lists'])):
                            foreach ($subcription['right_lists'] as $i => $r_list):
                     ?>
                    <div class="save-manuy-2 d-flex <?php if($i == 1 || $i == 2){echo "ml-30"; }?>">
                            <div class="dog-save-img">
                                <?php 
                                    printf('<img src="%s" alt="%s">', $r_list['icon']['url'],$r_list['icon']['alt'] );
                                 ?>
                            </div>
                            <div class="best-save">
                                <div class="beat-info-head text-start">
                                    <?php 
                                        printf(__('<h5>%s</h5>', 'airdesigns'), $r_list['title']);
                                        printf(__('<p>%s</p>', 'airdesigns'), $r_list['content']);
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
                if(!empty($subcription['button'])){
                    printf(__('<a href="%s" target="%s">%s</a>', 'airdesigns'), $subcription['button']['url'], $subcription['button']['target'], $subcription['button']['title'] );
                }
             ?>
            </div>
       </div>
       </div>
    </div>
<!-- section-03 -->

<!-- section-04-->
    <div class="custom-grid-wrapper">
        <div class="container">
            <div class="section-heading text-center">

                <?php 
                    $your_choose = get_field('you_choose');

                    if(!empty($your_choose['title'])){
                        printf(__('<h2>%s</h2>', 'airdesigns'), $your_choose['title']);
                    }
                    if(!empty($your_choose['subtitle'])){
                        printf(__('<h4>%s</h4>', 'airdesigns'), $your_choose['subtitle']);
                    }
                 ?>
                
            </div>
            <div class="card-dog">
                <div class="dog-sucsess ">
                    <div class="row  align-items-center justify-content-center">
                        <div class=" col-12 col-md-5 col-lg-5 ">
                            <div class="headline-ill-dog">
                                <h4>Живот без Пет Бъди</h4>
                            </div>
                        </div>
                        <div class=" col-md-2 col-lg-2 d-none d-md-block">
                        </div>
                        <div class="col-12 col-md-5 col-lg-5">
                            <div class="helthy-dog">
                                <h4>Живота с Пет Бъди </h4>
                            </div>
                        </div>
                    </div>
                    <?php 
                        $c_list = $your_choose['compare_lists'];

                        if(!empty($c_list['items'])):
                            foreach ($c_list['items'] as $item):
                     ?>
                    <div class="row  align-items-center justify-content-center">
                        <div class=" col-12 col-md-5 col-lg-5 ">
                            <div class="bad-dog d-flex">
                                <img src="<?php echo AIRDESIGNS_DIR_IMG.'/icon/Sad-face.svg' ?>"alt="<?php bloginfo('name'); ?>">
                                <?php 
                                    printf(__('<p>%s</p>', 'airdesigns'), $item['left_content']);
                                ?>
                            </div>
                            
                        </div>
                        <div class=" col-md-2 col-lg-2 d-none d-md-block">
                            <div class="bad-dog text-center">
                                <img src="<?php echo AIRDESIGNS_DIR_IMG.'/icon/Arrow.svg' ?>"alt="<?php bloginfo('name'); ?>">
                            </div>
                            
                        </div>
                        <div class="col-12 col-md-5 col-lg-5">
                            <div class="bad-dog d-flex flex-row-reverse">
                                <img src="<?php echo AIRDESIGNS_DIR_IMG.'/icon/happy-face.svg' ?>"alt="<?php bloginfo('name'); ?>">
                                <?php 
                                    printf(__('<p>%s</p>', 'airdesigns'), $item['right_content']);
                                ?>
                            </div>
                            
                        </div>
                    </div>
                    <?php 
                        endforeach; endif;
                     ?>
                </div>
                <div class="dog-img-1">
                    <?php 
                        

                        if(!empty($c_list['left_image'])){
                            printf('<img src="%s" alt="%s" while="img-fluid">', $c_list['left_image']['url'], $c_list['left_image']['alt']);
                        }
                    ?>
                    
                </div>
                <div class="dog-img-2">
                    <?php 
                        if(!empty($c_list['right_image'])){
                            printf('<img src="%s" alt="%s" while="img-fluid">', $c_list['right_image']['url'], $c_list['right_image']['alt']);
                        }
                    ?>
                </div>
            </div>

            <div class="lest-sub-buttom text-center ">
                <?php 
                    if(!empty($your_choose['buttton'])){
                        printf(__('<a href="%s" target="%s">%s</a>', 'airdesigns'), $your_choose['buttton']['url'], $your_choose['buttton']['target'], $your_choose['buttton']['title']);
                    }
                ?>
            </div>

        </div>
    </div>
<!-- section-04 -->
<!-- section-05 -->
    <div class="save-time">
        <div class="save-money">
            <div class="container">
                <div class="row">
                    <?php 
                        $save_time = get_field('save_time_&_money');
                        if(!empty($save_time)):
                            foreach ($save_time as $ti):
                     ?>
                    <div class=" col-12 col-md-4 col-lg-4 ">
                        <div class="Convenience d-flex align-items-center justify-content-center">
                            <?php 
                                printf('<img src="%s" alt="%s">', $ti['icon']['url'], $ti['icon']['alt']);
                                printf(__('<h5>%s</h5>', 'airdesigns'), $ti['title']);
                            ?>
                        </div>
                    </div>
                    <?php endforeach; endif; ?>
                </div>
            </div>
        </div>
    </div>
<!-- section-05 -->
<!-- section-06-->
    <div class="link-company">
        <div class="prodact">
            <div class="container">
                <div class="head-prodact text-center">
                    <div class="title-main">
                        <?php 
                            $brands = get_field('brands');
                            if(!empty($brands['subtitle'])){
                                printf(__('<h5>%s</h5>', 'airdesigns'), $brands['subtitle']);
                            }
                        ?>
                    </div>
                    <div class="head-prodact-company">
                        <?php 
                            if(!empty($brands['title'])){
                                printf(__('<h2>%s</h2>', 'airdesigns'), $brands['title']);
                            } 
                            if(!empty($brands['content'])){
                                printf(__('<h4>%s</h4>', 'airdesigns'), $brands['content']);
                            }
                        ?>
                        
                        
                    </div>
                    <div class="title-sub">
                        <?php 
                            if(!empty($brands['brand_title'])){
                                printf(__('<h4>%s</h4>', 'airdesigns'), $brands['brand_title']);
                            }
                        ?>
                    </div>
                </div>

                <div class="row">
                <div class="  col-12 col-md-12 col-lg-12 ">
                    <?php 
                        if(!empty($brands['image'])){
                            printf('<img src="%s" alt="%s">', $brands['image']['url'], $brands['image']['alt']);
                        }
                    ?>
                </div>
            </div>
            </div>
        </div>
    </div>
<!-- section-06 -->
<!-- section-07 -->
    <div class="dog-food">
        <div class="dog-food-row">
            <div class="container">
                <div class="dog-food-head text-center">
                    <div class="image-head">
                        <?php 
                            $dog_shop = get_field('dog_shop');

                            if(!empty($dog_shop['image'])){
                                printf('<img src="%s" alt="%s">', $dog_shop['image']['url'], $dog_shop['image']['alt']);
                            }
                        ?>
                        
                    </div>
                   <div class="title">
                        <?php 

                            if(!empty($dog_shop['title'])){
                                printf(__('<h4>%s</h4>', 'airdesigns'), $dog_shop['title']);
                            }
                        ?>
                   </div>
                </div>
               <div class="row">
                <div class=" d-flex justify-content-between flex-wrap">
                        <?php 
                            if(!empty($dog_shop['items'])):
                                foreach ($dog_shop['items'] as $i => $item):
                         ?>
                        <div class="dog-food-5 text-center <?php if($i == 4){echo "pt"; } ?>">

                            <a href="<?php echo $item['url']; ?>"><img src="<?php echo $item['image']['url']; ?>" alt="<?php echo $item['image']['alt']; ?>"></a>
                            <p><a href="<?php echo $item['url']; ?>"><?php echo __($item['title'], 'airdesigns'); ?></a></p>
                        </div>
                        <?php endforeach; endif; ?>
                    </div>
               </div>
            </div>
        </div>
    </div>
<!-- section-07 -->
<!-- section-08 -->
    <div class="cat-food">  
        <div class="cat-food-row">
            <div class="container">
                <div class="cat-food-head text-center">
                    <div class="image-head">
                        <?php 
                            $cat_shop = get_field('cat_shop');

                            if(!empty($cat_shop['image'])){
                                printf('<img src="%s" alt="%s">', $cat_shop['image']['url'], $cat_shop['image']['alt']);
                            }
                        ?>
                    </div>
                   <div class="title">
                        <?php 

                            if(!empty($cat_shop['title'])){
                                printf(__('<h4>%s</h4>', 'airdesigns'), $cat_shop['title']);
                            }
                        ?>
                   </div>
                </div>
               <div class="row">
                <div class=" d-flex flex-wrap">
                        <?php 
                            if(!empty($cat_shop['items'])):
                                foreach ($cat_shop['items'] as $i => $item):
                         ?>
                        <div class="cat-food-5 text-center <?php if($i == 4){echo "pt"; } ?>">

                            <a href="<?php echo $item['url']; ?>"><img src="<?php echo $item['image']['url']; ?>" alt="<?php echo $item['image']['alt']; ?>"></a>
                            <p><a href="<?php echo $item['url']; ?>"><?php echo __($item['title'], 'airdesigns'); ?></a></p>
                        </div>
                        <?php endforeach; endif; ?>

                    </div>
               </div>
            </div>
        </div>
    </div>
<!-- section-08-->
<!-- section-09-->
    <div class="card-weper">
        <div class="dog-card">
            <div class="container">
            <div class="row">
                <div class="dog-helth-card">
                    <?php 
                        $vet = get_field('online_veterinary');
                     ?>
                    <div class="bg-dog" style="background-image: url('<?php echo $vet['image']; ?>');background-repeat: no-repeat;background-position: left top;">
                        <div class="content-card">
                                <div class="head-card d-flex align-items-center">
                                    <?php 
                                        if(!empty($vet['logo'])){
                                            printf('<img src="%s" alt="%s">', $vet['logo']['url'], $vet['logo']['alt']);
                                        }

                                        if(!empty($vet['top_title'])){
                                            printf(__('<h4>%s</h4>', 'airdesigns'), $vet['top_title']);
                                        }
                                     ?>
                                    
                                </div>
                                <div class="heading">
                                    <?php 
                                        if(!empty($vet['title'])){
                                            printf(__('<h4>%s</h4>', 'airdesigns'), $vet['title']);
                                        }
                                        if(!empty($vet['content'])){
                                            printf(__('<p>%s</p>', 'airdesigns'), $vet['content']);
                                        }
                                    ?>
                                </div>

                                <div class="lest-sub-buttom">
                                    <?php 
                                        if(!empty($vet['button'])){
                                            printf(__('<a href="%s" target="%s">%s</a>', 'airdesigns'), $vet['button']['url'], $vet['button']['target'], $vet['button']['title']);
                                        }
                                    ?>
                                    
                                </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </div>
    </div>
<!-- section-09-->
<!-- section-10-->
    <div class="love-dog">
        <div class="dog-lover-1">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-12 col-md-6 col-lg-6 ">
                        <div class="love-img ">
                            <?php 
                                $mission = get_field('our_mission');

                                if(!empty($mission['left_image'])){
                                    printf('<img src="%s" alt="%s">', $mission['left_image']['url'], $mission['left_image']['alt']);
                                }
                             ?>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-6 ">
                        <div class="info">
                            <div class="title-love">
                                <?php 
                                    if(!empty($mission['subtitle'])){
                                        printf(__('<h5>%s</h5>', 'airdesigns'), $mission['subtitle']);
                                    }
                                ?>
                                
                            </div>
                            <div class="head-love">
                                <?php 
                                    if(!empty($mission['title'])){
                                        printf(__('<h2>%s</h2>', 'airdesigns'), $mission['title']);
                                    } 
                                    if(!empty($mission['content'])){
                                        printf(__('<p>%s</p>', 'airdesigns'), $mission['content']);
                                    }
                                ?>
                            </div>
                            <div class="info-love">
                                <?php 
                                    if(!empty($mission['items'])):
                                        foreach ($mission['items'] as $item):
                                 ?>
                                <div class="info-love-4 d-flex">
                                    <?php 
                                        printf('<img src="%s" alt="%s">', $item['icon']['url'], $item['icon']['alt']);

                                        printf(__('<p>%s</p>', 'airdesigns'), $item['content']);
                                     ?>
                                </div>
                                <?php 
                                    endforeach; endif;
                                 ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<!-- section-10-->
<!-- section-11-->
    <div class="pet-buddy-eat">
        <div class="dog-eat">
            <div class="container">
                <div class="row align-items-center flex-row-reverse">
                    <div class=" col-12 col-md-6 col-lg-6 ">
                        <div class="eat-dog-image">
                            <?php 
                                $our_cause = get_field('our_cause');

                                if(!empty($our_cause['big_image'])){
                                    printf('<img src="%s" alt="%s">', $our_cause['big_image']['url'], $our_cause['big_image']['alt']);
                                }
                             ?>
                            <div class="dog-happy">
                                <?php 
                                    if(!empty($our_cause['small_image'])){
                                        printf('<img src="%s" alt="%s">', $our_cause['small_image']['url'], $our_cause['small_image']['alt']);
                                    }
                                 ?>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-md-6 col-lg-6">
                        <div class="eat-text">
                            <div class="title-eat">
                                <?php 
                                    if(!empty($our_cause['subtitle'])){
                                        printf(__('<h5>%s</h5>', 'airdesigns'), $our_cause['subtitle']);
                                    }
                                 ?>
                                
                            </div>
                            <div class="head-eat">
                                <?php 
                                    if(!empty($our_cause['title'])){
                                        printf(__('<h4>%s</h4>', 'airdesigns'), $our_cause['title']);
                                    }
                                 ?>
                            </div>
                            <div class="eat-more">
                                <?php 
                                    if(!empty($our_cause['content'])){
                                        echo __($our_cause['content'], 'airdesigns');
                                    }
                                 ?>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
<!-- section-11-->
<!-- section-12-->
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
<!-- section-12-->
<?php 
    get_footer();
?>