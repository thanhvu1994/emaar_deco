<?php
$menuLocations = get_nav_menu_locations();
$menuID = $menuLocations['main-menu'];
$menuItems = sortMenuItems(wp_get_nav_menu_items($menuID));
?>

<?php if(is_home()): ?>
    <header class="site-header" itemscope itemtype="https://schema.org/WPHeader">
        <div class="wrap">
            <div class="title-area">
                <p class="site-title" itemprop="headline">
                    <a href="<?php echo site_url(); ?>"><?php echo get_bloginfo('name'); ?></a>
                </p>
                <p class="site-description" itemprop="description"><?php echo get_bloginfo('description'); ?></p>
            </div>
            <div class="widget-area header-widget-area">
                <section id="text_icl-4" class="widget widget_text_icl">
                    <div class="widget-wrap">
                        <div class="textwidget">"<?php echo get_bloginfo('name'); ?>, <?php echo get_bloginfo('description'); ?>"</div>
                    </div>
                </section>
                <section id="icl_lang_sel_widget-2" class="widget widget_icl_lang_sel_widget"><div class="widget-wrap">
                        <div class="wpml-ls-sidebars-header-right wpml-ls wpml-ls-legacy-list-horizontal">
                            <ul>
                                <!-- Do it later -->
                            </ul>
                        </div>
                    </div>
                </section>
                <section id="nav_menu-2" class="widget widget_nav_menu">
                    <div class="widget-wrap">
                        <nav class="nav-header" itemscope itemtype="https://schema.org/SiteNavigationElement">
                            <ul id="menu-menu-main" class="menu genesis-nav-menu js-superfish">
                                <li id="menu-item-home" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home page_item page-item-40 menu-item-home <?php echo (is_home())? 'current-menu-item current-page-item' : ''; ?>">
                                    <a href="<?php echo site_url(); ?>" itemprop="url"><span itemprop="name">Home</span></a>
                                </li>
                                <?php foreach($menuItems as $key => $item): ?>
                                <li id="menu-item-<?php echo $key; ?>" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-<?php echo $key; ?> <?php echo (!empty($item['child']))? 'menu-item-has-children' : ''; ?> <?php echo $item['class']; ?>">
                                    <a href="<?php echo $item['url']; ?>" itemprop="url"><span itemprop="name"><?php echo $item['title']; ?></span></a>
                                    <?php if(!empty($item['child'])): ?>
                                        <ul  class="sub-menu">
                                            <?php foreach($item['child'] as $keyChild => $itemChild): ?>
                                                <li id="menu-item-<?php echo $keyChild; ?>" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-<?php echo $keyChild; ?> <?php echo (!empty($itemChild['child']))? 'menu-item-has-children' : ''; ?>">
                                                    <a href="<?php echo $itemChild['url']; ?>" itemprop="url"><span itemprop="name"><?php echo $itemChild['title']; ?></span></a>
                                                    <?php if(!empty($itemChild['child'])): ?>
                                                        <ul  class="sub-menu">
                                                            <?php foreach($itemChild['child'] as $keyChildChild => $itemChildChild): ?>
                                                            <li id="menu-item-<?php echo $keyChildChild; ?>" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-<?php echo $keyChildChild; ?>">
                                                                <a href="<?php echo $itemChildChild['url']; ?>" itemprop="url"><span itemprop="name"><?php echo $itemChildChild['title']; ?></span></a>
                                                                <?php endforeach; ?>
                                                        </ul>
                                                    <?php endif; ?>
                                                </li>
                                            <?php endforeach; ?>
                                        </ul>
                                    <?php endif; ?>
                                    <?php endforeach; ?>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </section>
            </div>
        </div>
    </header>
<?php else: ?>
    <header class="site-header" itemscope itemtype="https://schema.org/WPHeader" style="display: block !important;">
        <div class="wrap">
            <div class="title-area">
                <p class="site-title" itemprop="headline">
                    <a href="<?php echo site_url(); ?>"><?php echo get_bloginfo('name'); ?></a>
                </p>
                <p class="site-description" itemprop="description"><?php echo get_bloginfo('description'); ?></p>
            </div>
            <div class="widget-area header-widget-area">
                <section id="text_icl-4" class="widget widget_text_icl">
                    <div class="widget-wrap">
                        <div class="textwidget">"<?php echo get_bloginfo('name'); ?>, <?php echo get_bloginfo('description'); ?>"</div>
                    </div>
                </section>
                <section id="icl_lang_sel_widget-2" class="widget widget_icl_lang_sel_widget"><div class="widget-wrap">
                        <div class="wpml-ls-sidebars-header-right wpml-ls wpml-ls-legacy-list-horizontal">
                            <ul class="language-switcher">
                                <?php dynamic_sidebar('language-switcher'); ?>
                            </ul>
                        </div>
                    </div>
                </section>
                <section id="nav_menu-2" class="widget widget_nav_menu">
                    <div class="widget-wrap">
                        <nav class="nav-header" itemscope itemtype="https://schema.org/SiteNavigationElement">
                            <ul id="menu-menu-main" class="menu genesis-nav-menu js-superfish">
                                <li id="menu-item-home" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home page_item page-item-40 menu-item-home <?php echo (is_home())? 'current-menu-item current-page-item' : ''; ?>">
                                    <a href="<?php echo site_url(); ?>" itemprop="url"><span itemprop="name">Home</span></a>
                                </li>
                                <?php foreach($menuItems as $key => $item): ?>
                                <li id="menu-item-<?php echo $key; ?>" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-<?php echo $key; ?> <?php echo (!empty($item['child']))? 'menu-item-has-children' : ''; ?> <?php echo $item['class']; ?>">
                                    <a href="<?php echo $item['url']; ?>" itemprop="url"><span itemprop="name"><?php echo $item['title']; ?></span></a>
                                    <?php if(!empty($item['child'])): ?>
                                        <ul  class="sub-menu">
                                            <?php foreach($item['child'] as $keyChild => $itemChild): ?>
                                                <li id="menu-item-<?php echo $keyChild; ?>" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-<?php echo $keyChild; ?> <?php echo (!empty($itemChild['child']))? 'menu-item-has-children' : ''; ?>">
                                                    <a href="<?php echo $itemChild['url']; ?>" itemprop="url"><span itemprop="name"><?php echo $itemChild['title']; ?></span></a>
                                                    <?php if(!empty($itemChild['child'])): ?>
                                                        <ul  class="sub-menu">
                                                            <?php foreach($itemChild['child'] as $keyChildChild => $itemChildChild): ?>
                                                                <li id="menu-item-<?php echo $keyChildChild; ?>" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-<?php echo $keyChildChild; ?>">
                                                                    <a href="<?php echo $itemChildChild['url']; ?>" itemprop="url"><span itemprop="name"><?php echo $itemChildChild['title']; ?></span></a>
                                                            <?php endforeach; ?>
                                                        </ul>
                                                    <?php endif; ?>
                                                </li>
                                            <?php endforeach; ?>
                                        </ul>
                                    <?php endif; ?>
                                <?php endforeach; ?>
                            </ul>
                        </nav>
                    </div>
                </section>
            </div>
        </div>
    </header>
<?php endif; ?>