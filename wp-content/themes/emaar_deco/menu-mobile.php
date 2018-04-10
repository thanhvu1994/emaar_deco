<?php
    $menuLocations = get_nav_menu_locations();
    $menuID = $menuLocations['main-menu'];
    $menuItems = sortMenuItems(wp_get_nav_menu_items($menuID));
?>

<!-- MENU FOR MOBILE - OFF CANVAS - START -->
<div id="nus-sidebar-off-canvas" class="nus-sidebar-off-canvas hidden-lg hidden-md off-canvas-effect-4 off-canvas-right">
    <div class="header">
        <h2>Sidebar</h2>
        <button type="button" class="close" >×</button>
    </div>
    <div class="body">
        <div class="nus-module module_menu">
            <div class="module-inner">
                <h3 class="title "><span>Main Menu</span></h3>
                <div class="module-ct">
                    <ul class="nav nav-pills nav-stacked ">
                        <?php foreach($menuItems as $key => $item): ?>
                            <?php if(!empty($item['child'])): ?>
                                <li class="<?php echo $item['class']; ?>">
                                    <a href="<?php echo $item['url']; ?>"><?php echo $item['title']; ?></a>
                                    <ul class="nav level2">
                                        <?php foreach($item['child'] as $child): ?>
                                            <?php if(!empty($child['child'])): ?>
                                                <li>
                                                    <a href="<?php echo $child['url']; ?>"><?php echo $child['title']; ?></a>
                                                    <ul class="nav level3">
                                                        <?php foreach($child['child'] as $grandChild): ?>
                                                            <li><a href="<?php echo $grandChild['url']; ?>"><?php echo $grandChild['title']; ?></a></li>
                                                        <?php endforeach; ?>
                                                    </ul>
                                                </li>
                                            <?php else: ?>
                                                <li><a href="<?php echo $child['url']; ?>"><?php echo $child['title']; ?></a></li>
                                            <?php endif; ?>
                                        <?php endforeach; ?>
                                    </ul>
                                </li>
                            <?php else: ?>
                                <li class="<?php echo $item['class']; ?>">
                                    <a href="<?php echo $item['url']; ?>"><?php echo $item['title']; ?></a>
                                </li>
                            <?php endif; ?>
                        <?php endforeach; ?>
                    </ul>
                    <a href="<?php echo get_page_link(349); ?>" class="btn-1 btn-block">Give Now</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- MENU FOR MOBILE - OFF CANVAS - END -->