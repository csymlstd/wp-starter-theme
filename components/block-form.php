<div class="medium-6 medium-centered columns">
    <h1 class="text-center"><?php print get_sub_field('title'); ?></h1>
    <p class="text-center description"><?php print get_sub_field('subheading'); ?></h1>
    <?php $form = get_sub_field('select_gravity_form'); ?>
    <?php gravity_form($form, $display_title = false, $display_description = false, $display_inactive = false, $field_values = null, $ajax = false, $tabindex = 0, $echo = true); ?>
</div>