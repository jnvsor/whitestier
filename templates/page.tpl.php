<?php 
 ?>
    <div id="page-wrapper">
        <div id="header">
            <div id="authorize-and-feed">
                <div id="authorize">
                    <ul>
                        <?php global $user;
                            if ($user->uid != 0){
                                print '<li class="first">' . t('logged in as ') . ' <a href="' . url('user/' . $user->uid) . '">' . $user->name . '</a></li>';
                                print '<li class="last"> <a href="' . url('user/logout') . '">' . t('logout') . '</a></li>';
                            }
                            else {
                                print '<li class="first">' . t('login is ') . ' <a href="' . url('user') . '">' . t('here') . '</a></li>';
                                print '<li class="last"> <a href="' . url('user/register') . '">' . t('register') . '</a></li>';
                            }
                        ?>                
                    </ul>
                </div><?php //authorize ?>
                <?php if ($feed_icons): ?>
                    <div class="feed-wrapper">
                        <?php print $feed_icons; ?>
                    </div>
                <?php endif; ?>
            </div><?php //authorize-and-feed ?>
            <div id="menu-and-search">
                <div id="home-link"><?php
                // this is a home link with an image, you can disable it with delete this or change the image in images directory. just enjoy it:D [sic] ?>
                    <a href="<?php print $base_path ?>" title="<?php print t('home') ?>" ><?php print t('home') ?></a>
                </div>
            <?php if ($main_menu): ?>
                <div id="nav">
                    <?php
                        print theme('links__system_main_menu', array('links' => $main_menu));
                     ?>
                </div>
            <?php endif; //nav ?>
            <?php if ($page['search_box']): ?>
                <div id="search-box">
                    <?php print render($page['search_box']); ?>
                </div>
            <?php endif; //search-box ?>
            </div><?php //menu-and-search ?>
            <?php if($is_front): ?>
            <div id="branding-wrapper">
                <div id="branding">
                <?php if ($logo): ?>
                    <div class="logo"> 
                        <a href="<?php print $base_path ?>" title="<?php print t('home') ?>" > <img src="<?php print $logo ?>" alt="<?php print t('home') ?>" /> </a>
                    </div>
                <?php endif;
                if ($site_name || $site_slogan): ?>
                    <div id="name-slogan-wrapper">
                        <?php if ($site_name): ?>
                            <h1 class="site-name"><a href="<?php print $base_path; ?>" title="<?php print $site_name ?>" ><?php print $site_name ?></a></h1>
                        <?php endif; ?>
                        
                        <?php if ($site_slogan): ?>
                            <span class="site-slogan"><?php print $site_slogan; ?></span>
                        <?php endif; ?>
                    </div>
                <?php endif; //name-slogan-wrapper ?>
                </div><?php //branding ?>
                <?php if ($page['top_note']): ?>
                    <div class="top-note">
                        <?php print render($page['top_note']); ?>
                    </div>
                <?php endif; //top-note ?>
            </div>
            <?php endif; //branding-wrapper ?>
        </div><?php //header ?>
            

        <?php if($page['big_top']): ?>        
        <div id="big-top">
            <?php print render($page['big_top']); ?>
        </div>
        <?php endif; //big-top (Use for slideshows etc) ?>
        
            
        <?php if($page['preface_first'] || $page['preface_middle'] || $page['preface_last']): ?>
        <div id="preface-wrapper">
            <div class="clearfix triplet-wrapper in<?php print (bool) $page['preface_first'] + (bool) $page['preface_middle'] + (bool) $page['preface_last']; ?>">
            <?php if($page['preface_first']): ?>
                <div class="column">
                    <?php print render($page['preface_first']); ?>
                </div>
            <?php endif; ?>
      
            <?php if($page['preface_middle']): ?>
                <div class="column">
                    <?php print render($page['preface_middle']); ?>
                </div>
            <?php endif; ?>
            
            <?php if($page['preface_last']): ?>
                <div class="column">
                    <?php print render($page['preface_last']); ?>
                </div>
            <?php endif; ?>
            </div>
        </div>
        <?php endif; //preface-wrapper ?>
            
        
        <?php if ($breadcrumb && !$is_front): ?>
            <div id="breadcrumb">
                <?php print $breadcrumb; ?>
            </div>
        <?php endif; ?>         
        <div id="main" class="clearfix">
        <?php if ($page['sidebar_first']): ?>
            <div id="sidebar-left" class="sidebar">
                <?php print render($page['sidebar_first']); ?>
            </div>
        <?php endif; ?>
                    
            
            <div id="main-content">
                
                <?php if ($page['content_top']): ?><div id="content-top"><?php print render($page['content_top']); ?></div><?php endif; ?>
                <?php if ($show_messages): print $messages; endif;?>
                <?php if ($tabs): ?><div class="tabs"><?php print render($tabs); ?></div><?php endif; ?>
                <?php print render($page['help']); ?>
                <?php if ($action_links): ?><ul class="action-links"><?php print render($action_links); ?></ul><?php endif; ?>
                <?php if ($page['content']): ?><div id="content-middle"><?php print render($page['content']); ?></div><?php endif; ?>
                <?php if ($page['content_bottom']): ?><div id="content-bottom"><?php print render($page['content_bottom']); ?></div><?php endif; ?>

            </div>
                
        <?php if ($page['sidebar_second']): ?>
            <div id="sidebar-right" class="sidebar">
                <?php print render($page['sidebar_second']); ?>
            </div>
        <?php endif; ?>
            
        </div><?php //main ?>

        
        <?php if($page['bottom_first'] || $page['bottom_middle'] || $page['bottom_last']): ?>        
        <div id="bottom-teaser">
            <div class="clearfix triplet-wrapper in<?php print (bool) $page['bottom_first'] + (bool) $page['bottom_middle'] + (bool) $page['bottom_last']; ?>">
            <?php if($page['bottom_first']): ?>
                <div class="column">
                    <?php print render($page['bottom_first']); ?>
                </div>
            <?php endif; ?>
            
            <?php if($page['bottom_middle']): ?>
                <div class="column">
                    <?php print render($page['bottom_middle']); ?>
                </div>
            <?php endif; ?>
      
            <?php if($page['bottom_last']): ?>
                <div class="column">
                    <?php print render($page['bottom_last']); ?>
                </div>
            <?php endif; ?>
            </div>
        </div>
        <?php endif; //bottom-teaser ?>

            
        <?php if($page['bottom_1'] || $page['bottom_2'] || $page['bottom_3'] || $page['bottom_note']): ?>
        <div id="bottom-wrapper">            
                <div class="clearfix triplet-wrapper in<?php print (bool) $page['bottom_1'] + (bool) $page['bottom_2'] + (bool) $page['bottom_3']; ?>">
                <?php if($page['bottom_1']): ?>
                    <div class="column">
                        <?php print render($page['bottom_1']); ?>
                    </div>
                <?php endif; ?>
          
                <?php if($page['bottom_2']): ?>
                    <div class="column">
                        <?php print render($page['bottom_2']); ?>
                    </div>
                <?php endif; ?>
          
                <?php if($page['bottom_3']): ?>
                    <div class="column">
                        <?php print render($page['bottom_3']); ?>
                    </div>
                <?php endif; ?>
                </div>
                
                <?php if($page['bottom_note']): ?>
                    <div class="bottom-note note">
                        <?php print render($page['bottom_note']); ?>
                    </div>
                <?php endif; ?>
        </div>
        <?php endif; //bottom-wrapper ?>
        
        <div id="footer">
            <?php if($page['footer_note']): ?>
                <div class="footer-note note footer-message">
                    <?php print render($page['footer_note']); ?>
                </div>
            <?php endif; ?>
            <?php if ($secondary_menu): ?>
                <div id="subnav">
                    <?php print theme('links__system_secondary_menu',
                    array(
                      'links' => $secondary_menu,
                      'attributes' => array(
                        'id' => 'subnav',
                        'class' => array('links', 'clearfix')))); ?>
                </div>
            <?php endif; ?>
            <div class="footer">
                <?php print render($page['footer']); ?>
            </div>
        </div>
    </div>
