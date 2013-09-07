<?php 
 ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php print $language->language; ?>" lang="<?php print $language->language; ?>" dir="<?php print $language->dir; ?>">
<head>
  <?php print $head; ?>
  <title><?php print $head_title; ?></title>
  <?php print $styles; ?>
</head>
<body class="<?php print $classes; ?>" <?php print $attributes; ?>>


    <div id="page-wrapper">
        <div id="header" class="clearfix">
            <div id="authorize-and-feed">
                <div id="authorize">
                    <ul>
                        <?php global $user;
                            if ($user->uid != 0):
                                print '<li class="first">' . t('logged in as ') . ' <a href="' . url('user/' . $user->uid) . '">' . $user->name . '</a></li>';
                                print '<li class="last"> <a href="' . url('user/logout') . '">' . t('logout') . '</a></li>';
                            else:
                                print '<li class="first">' . t('login is ') . ' <a href="' . url('user') . '">' . t('here') . '</a></li>';
                                print '<li class="last"> <a href="' . url('user/register') . '">' . t('register') . '</a></li>';
                            endif;
                        ?>                
                    </ul>
                </div>
                
                <?php if ($feed_icons): ?>
                    <div class="feed-wrapper">
                        <?php print $feed_icons; ?>
                    </div>
                <?php endif; ?>
            
            </div>
            
            <div id="menu-and-search">
                <div id="home-link" style="float:left;">
                     <a href="<?php print $base_path ?>" title="<?php print t('home') ?>" ><?php print t('home') ?></a>
                </div>                           
            </div>
            
            <div id="branding-wrapper">
                <div id="branding">
                    <?php if ($logo): ?>
                        <div class="logo"> 
                            <a href="<?php print $base_path  ?>" title="<?php print t('home') ?>" > <img src="<?php print $logo  ?>" alt="<?php print t('home') ?>" /> </a>
                        </div>
                    <?php endif; ?>
                
                <?php if ($site_name || $site_slogan): ?>
                    <div id="name-slogan-wrapper">
                        <?php if ($site_name): ?>
                            <h1 class="site-name"><a href="<?php print $base_path; ?>" title="<?php print $site_name ?>" ><?php print $site_name ?></a></h1>
                        <?php endif; ?>
                        
                        <?php if ($site_slogan): ?>
                            <span class="site-slogan"><?php print $site_slogan; ?></span>
                        <?php endif; ?>
                    </div>
                <?php endif; //name-slogan-wrapper ?>
                </div>
            </div>
        </div>
        <div id="main">
            <?php if ($show_messages){ print $messages; } ?>
            <?php if ($content){ print $content; } ?>
        </div>
    </div>
