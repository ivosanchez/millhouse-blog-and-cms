<?php

function image_category($print){
                 
            foreach($print as $blogdata){ ?>
                       
                <div class="col-xs-12, col-md-6" style="height: 600px; overflow: hidden;">
                       
                    <div style="height: 550px; overflow: hidden;">

                        <?php
                    // IMAGE & CATEGORY: IF WATCHES
                        if($blogdata["category"] == 'Klockor'){ ?>
                            <div class="watch2 cat"> <?php
                                if(!($blogdata["image"] == NULL)){ ?>
                                    <img src="<?=$blogdata["image"];?>"><?php    
                                }else{ ?>
                                    <img src="images/klockor_profil.png" alt="Klockor">'; 
                                <?php } ?>
                               </div>
                                <div>
                                <p class="watch-label uppercase small text-bold">Klockor</p>
                               </div>
                               <?php
                            
                    // IMAGE & CATEGORY: IF SUNGLASSES
                        }elseif($blogdata["category"] == 'Solglasögon'){ ?>
                                <div class="sunglasses2 cat"> 
                                   <?php
                                    if(!($blogdata["image"] == NULL)){ ?>
                                        <img src="<?=$blogdata["image"];?>"><?php    
                                    }else{ ?>
                                        <img src="images/glasses_profil.png" alt="Solglasögon">
                                    <?php }?>
                                   </div>
                               <div>
                                <p class="sunglasses-label uppercase small text-bold">Solglasögon</p>
                               </div>
                                   <?php
                            
                    // IMAGE & CATEGORY: IF INTERIOR DESIGN
                        }elseif($blogdata["category"] == 'Inredning'){ ?>
                                <div class="furnish2 cat"> 
                                    <?php
                                    if(!($blogdata["image"] == NULL)){ ?>
                                        <img src="<?=$blogdata["image"];?>"><?php    
                                    }else{ ?>
                                        <img src="images/glasses_profil.png" alt="Solglasögon">
                                    <?php } ?>         
                               </div>
                               <div>
                                <p class="furnish-label uppercase small text-bold">Inredning</p>
                               </div>
                               <?php
                        }?>
 
                        <div>
                            <h2><a href="post.php?post=<?=$blogdata["id"]?>"><?=$blogdata["title"]?></a></h2>
                        </div>
                       
                        <span class="glyphicon glyphicon-time" aria-hidden="true"></span>
                        <?= $blogdata["date"] . ' | '; ?>  
                        <span class="glyphicon glyphicon-user" aria-hidden="true"></span> 
                        <?= $blogdata["firstname"] . ' ' . $blogdata["lastname"] . ' | '; ?> 
                        <span class="glyphicon glyphicon-envelope" aria-hidden="true"></span> 
                        <?= $blogdata["email"]; ?>  
                        <p class="blogpost-text">
                            <?php
                               $hej = $blogdata["post"];
                                echo substr($hej, 0, 200) . '...';
                            ?> 
                        </p>   
                    </div>
                    
                    <div style="padding: 10px;">
                        <a class="btn button-test btn-block" href="post.php?post=<?=$blogdata["id"];?>" target="_self">Läs mer & kommentera</a>              
                    </div> 

            </div>              
        <?php
            }
        ?>
<?php    
}

function first_image_category($print){
                 
            foreach($print as $blogdata){ ?>
                       
                <div style="height: 500px; overflow: hidden;">
                       
                    <div style="height: 450px; overflow: hidden;">

                        <?php
                    // IMAGE & CATEGORY: IF WATCHES
                        if($blogdata["category"] == 'Klockor'){ ?>
                            <div class="watch2 cat"> <?php
                                if(!($blogdata["image"] == NULL)){ ?>
                                    <img src="<?=$blogdata["image"];?>"><?php    
                                }else{ ?>
                                    <img src="images/klockor_profil.png" alt="Klockor">'; 
                                <?php } ?>
                               </div>
                                <div>
                                <p class="watch-label uppercase small text-bold">Klockor</p>
                               </div>
                               <?php
                            
                    // IMAGE & CATEGORY: IF SUNGLASSES
                        }elseif($blogdata["category"] == 'Solglasögon'){ ?>
                                <div class="sunglasses2 cat"> 
                                   <?php
                                    if(!($blogdata["image"] == NULL)){ ?>
                                        <img src="<?=$blogdata["image"];?>"><?php    
                                    }else{ ?>
                                        <img src="images/glasses_profil.png" alt="Solglasögon">
                                    <?php }?>
                                   </div>
                               <div>
                                <p class="sunglasses-label uppercase small text-bold">Solglasögon</p>
                               </div>
                                   <?php
                            
                    // IMAGE & CATEGORY: IF INTERIOR DESIGN
                        }elseif($blogdata["category"] == 'Inredning'){ ?>
                                <div class="furnish2 cat"> 
                                    <?php
                                    if(!($blogdata["image"] == NULL)){ ?>
                                        <img src="<?=$blogdata["image"];?>"><?php    
                                    }else{ ?>
                                        <img src="images/glasses_profil.png" alt="Solglasögon">
                                    <?php } ?>         
                               </div>
                               <div>
                                <p class="furnish-label uppercase small text-bold">Inredning</p>
                               </div>
                               <?php
                        }?>
 
                        <div>
                            <h2><a href="post.php?post=<?=$blogdata["id"]?>"><?=$blogdata["title"]?></a></h2>
                        </div>
                       
                        <span class="glyphicon glyphicon-time" aria-hidden="true"></span>
                        <?= $blogdata["date"] . ' | '; ?>  
                        <span class="glyphicon glyphicon-user" aria-hidden="true"></span> 
                        <?= $blogdata["firstname"] . ' ' . $blogdata["lastname"] . ' | '; ?> 
                        <span class="glyphicon glyphicon-envelope" aria-hidden="true"></span> 
                        <?= $blogdata["email"]; ?>  
                        <p class="blogpost-text">
                            <?php
                               $hej = $blogdata["post"];
                                echo substr($hej, 0, 200) . '...';
                            ?> 
                        </p>   
                    </div>
                    
                    <div style="padding: 10px;">
                        <a class="btn button-test btn-block" href="post.php?post=<?=$blogdata["id"];?>" target="_self">Läs mer & kommentera</a>              
                    </div> 

            </div>              
        <?php
            }
        ?>
<?php    
}


?>