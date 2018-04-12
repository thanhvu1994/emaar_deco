<?php
    $menuLocations = get_nav_menu_locations();
    $menuID = $menuLocations['main-menu'];
    $menuItems = sortMenuItems(wp_get_nav_menu_items($menuID));
?>

<nav class="nav-secondary" itemscope itemtype="https://schema.org/SiteNavigationElement">
    <div class="wrap">
        <ul id="menu-sticky-menu" class="menu genesis-nav-menu menu-secondary js-superfish">
            <?php foreach($menuItems as $key => $item): ?>
                <li id="menu-item-<?php echo $key; ?>" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-<?php echo $key; ?>"><a href="<?php echo $item['url']; ?>" itemprop="url"><span itemprop="name"><?php echo $item['title']; ?></span></a>
                    <?php if(!empty($item['child'])): ?>
                        <ul  class="sub-menu">
                            <?php foreach($item['child'] as $key1 => $item1): ?>
                                <li id="menu-item-child-<?php echo $key1; ?>" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-child-<?php echo $key1; ?>"><a href="<?php echo $item['url']; ?>" itemprop="url"><span itemprop="name">Painting</span></a></li>
                            <?php endforeach; ?>
                        </ul>
                    <?php endif; ?>
                </li>
            <?php endforeach; ?>
        </ul>
    </div>
</nav>