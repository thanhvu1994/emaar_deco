<?php
$menuLocations = get_nav_menu_locations();
$menuID = $menuLocations['main-menu'];
$menuItems = sortMenuItems(wp_get_nav_menu_items($menuID));
?>

<?php if(is_home()): ?>
    <nav class="nav-primary" itemscope itemtype="https://schema.org/SiteNavigationElement">
        <div class="wrap">
            <ul id="menu-menu-intro" class="menu genesis-nav-menu menu-primary js-superfish">
                <li id="menu-item-917" class="menu-home-intro menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-917"><a itemprop="url"><span itemprop="name"><i class="fa fa-bars" aria-hidden="true"></i></span></a>
                    <ul  class="sub-menu">
                        <li id="menu-item-home" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home"><a href="<?php echo site_url(); ?>" itemprop="url"><span itemprop="name">Home</span></a></li>
                        <?php foreach($menuItems as $key => $item): ?>
                            <li id="menu-item-<?php echo $key; ?>" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-<?php echo $key; ?> <?php echo $item['class']; ?>"><a href="<?php echo $item['url']; ?>" itemprop="url"><span itemprop="name"><?php echo $item['title']; ?></span></a></li>
                        <?php endforeach; ?>
                    </ul>
                </li>
            </ul>
        </div>
    </nav>
<?php else: ?>
    <nav class="nav-primary" itemscope itemtype="https://schema.org/SiteNavigationElement" style="display:none !important;">
        <div class="wrap">
            <ul id="menu-menu-intro" class="menu genesis-nav-menu menu-primary js-superfish">
                <li id="menu-item-917" class="menu-home-intro menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-917"><a itemprop="url"><span itemprop="name"><i class="fa fa-bars" aria-hidden="true"></i></span></a>
                    <ul  class="sub-menu">
                        <li id="menu-item-917" class="menu-home-intro menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-917"><a itemprop="url"><span itemprop="name"><i class="fa fa-bars" aria-hidden="true"></i></span></a>
                            <?php foreach($menuItems as $key => $item): ?>
                            <li id="menu-item-<?php echo $key; ?>" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-<?php echo $key; ?> <?php echo $item['class']; ?>"><a href="<?php echo $item['url']; ?>" itemprop="url"><span itemprop="name"><?php echo $item['title']; ?></span></a></li>
                        <?php endforeach; ?>
                    </ul>
                </li>
            </ul>
        </div>
    </nav>
<?php endif; ?>
