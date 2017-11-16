<?php
/**
 * Description tab
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product/tabs/description.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see 	    https://docs.woocommerce.com/document/template-structure/
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     2.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

global $post;

$heading = esc_html( apply_filters( 'woocommerce_product_description_heading', __( 'Description', 'woocommerce' ) ) );

?>

<?php if ( $heading ) : ?>
  <h2><?php echo $heading; ?></h2>
<?php endif; ?>

<?php the_content();

$allergener = get_field('allergener');
if ($allergener) : ?>
<h3><?php _e('Allergenes');?></h3>
	<ul>
			<?php foreach ($allergener as $allergen) :?>
				<li><?php echo $allergen; ?></li>
			<?php endforeach; ?>
	</ul>
<?php endif ; ?>

<?php $ingredienser = get_field('ingredienser');
if ($ingredienser) : ?>
	<h3>Ingredienser</h3>
		<?php echo $ingredienser; ?>
	<?php endif;?>
