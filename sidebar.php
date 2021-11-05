<?php
if( ! is_active_sidebar('main-sidebar')){
    return;
}
?>
<aside id="second" class="widget-area" role="complementary">
<?php dynamic_sidebar('main-sidebar'); ?>
</aside>
