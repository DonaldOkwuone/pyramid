

                      
                    <?php foreach($cates as $cate): ?>
<li><a href="<?php echo site_url('site/cate')."/".$cate->category; ?>">
                              <?php echo $cate->category ?></a></li>
                     <?php endforeach; ?>

                        