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
 $get_row_layout = get_row_layout();
 $width = get_sub_field('width');
 $height = 'height-'.get_sub_field('height');
 $padded = get_sub_field('padding') ? 'padded' : '';
 $id = get_sub_field('custom_id') ? get_sub_field('custom_id') : 'block-'.get_row_index();
 $fixed_pane = get_sub_field('fixed_pane');
 $background_color = get_sub_field('select_brand_color');

 $classes = implode(' ', array(
   $get_row_layout,
   $height,
   $padded,
   get_sub_field('additional_classes'),
	 ($background_color ? 'bg-'.$background_color : ''),
 ));
 $row_classes = implode(' ', array(
	 ($width[0] == 'full' ? 'expanded' : ''),
 ));
?>
  <?php if(!$disabled): ?>
	<section class="block <?php print $classes;  ?>" id="<?php print $id; ?>">
		<div class="row small-12 <?php print $row_classes; ?>">
			<?php if($get_row_layout == 'full'): ?>
			<?php the_sub_field('content'); ?>
		  <?php elseif($get_row_layout == 'photo_and_text'): ?>
				<div class="medium-10 medium-centered flex-center">
					<?php if(get_sub_field('photo')): ?><div class="photo"><img src="<?php print get_sub_field('photo')['sizes']['large']; ?>" /></div><?php endif; ?>
					<div class="content">
						<?php the_sub_field('content'); ?>
					</div>
				</div>
      <?php elseif($get_row_layout == 'form'): ?>
        <div class="medium-6 medium-centered columns">
        <h1 class="text-center"><?php print get_sub_field('title'); ?></h1>
        <p class="text-center description"><?php print get_sub_field('subheading'); ?></h1>
        <?php $form = get_sub_field('select_gravity_form'); ?>
        <?php if($form == 1): ?>

        <?php elseif($form == 2): ?>

        <?php endif; ?>
        </div>
  	  <?php endif; ?>
		</div>
	</section>
  <?php endif; // if disabled ?>
<?php endwhile; ?>
