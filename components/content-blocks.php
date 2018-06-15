<?php
/**
 * Template part for displaying page content in page.php.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package buckhead
 */


 while(the_flexible_field('blocks')):
 $disabled = get_sub_field('disable_block');
 $row_layout = get_row_layout();
 $width = get_sub_field('width');
 $height = get_sub_field('height');
 $id = get_sub_field('custom_id') ? get_sub_field('custom_id') : 'block-'.get_row_index();
 $fixed_pane = get_sub_field('fixed_pane');
 $background_color = get_sub_field('select_brand_color');

 $classes = implode(' ', array(
   'layout-'.$row_layout,
   'height-'.$height,
   get_sub_field('additional_classes'),
	 ($background_color ? 'bg-'.$background_color : null),
 ));

 $row_classes = implode(' ', array(
	 get_sub_field('additional_row_classes'),
	 (in_array($width[0], array('full')) == 'full' ? 'expanded' : null),
	 (in_array($width[0], array('full')) ? 'columns' : null),
 ));
?>
  <?php if(!$disabled): ?>
	<section class="block <?php print $classes;  ?>" id="<?php print $id; ?>">
		<div class="row small-12 <?php print $row_classes; ?>">
			<?php get_template_part('components/block', $row_layout); ?>
		</div>
	</section>
  <?php endif; // if disabled ?>
<?php endwhile; ?>
