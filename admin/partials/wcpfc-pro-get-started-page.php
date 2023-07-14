<?php
/**
 * Handles plugin about page
 * 
 * @package Woocommerce_Conditional_Product_Fees_For_Checkout_Pro
 * @since   1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
require_once( plugin_dir_path( __FILE__ ) . 'header/plugin-header.php' );
?>
<div class="wcpfc-section-left">
	<div class="wcpfc-main-table res-cl">
		<h2><?php esc_html_e( 'Getting Started', 'woocommerce-conditional-product-fees-for-checkout' ); ?></h2>
		<table class="table-outer">
			<tbody>
				<tr>
					<td class="fr-2">
						<p class="block textgetting"><?php esc_html_e( 'The plugin is for store owners can setup conditional rules where product fees will be added to the Cart based on what is in the cart, who is buying it, what is cart quantity / weight, which coupon used, or where the products are being shipped.', 'woocommerce-conditional-product-fees-for-checkout' ); ?></p>
						<p class="block textgetting"><?php esc_html_e( 'It is a valuable tool for store owners for creating and managing complex fee rules in their store without the help of a developer!', 'woocommerce-conditional-product-fees-for-checkout' ); ?></p>
						<p class="block textgetting"><strong><?php esc_html_e( 'Step 1 : ', 'woocommerce-conditional-product-fees-for-checkout' ); ?></strong> <?php esc_html_e( 'Add conditional product fees for checkout ', 'woocommerce-conditional-product-fees-for-checkout' ); ?></p>
						<p class="block textgetting"><?php esc_html_e( 'Add product fees title, cost / fee, and set conditional product fees rules as per your requirement.', 'woocommerce-conditional-product-fees-for-checkout' ); ?></p>
						<span class="gettingstarted">
                            <img src="<?php echo esc_url( WCPFC_PRO_PLUGIN_URL . 'admin/images/Getting_Started_01.png' ); ?>">
                        </span>
						<span class="gettingstarted">
                           	<img src="<?php echo esc_url( WCPFC_PRO_PLUGIN_URL . 'admin/images/Getting_Started_02.png' ); ?>">
                      	</span>
						<p class="block gettingstarted textgetting"><strong><?php esc_html_e( 'Step 2 : ', 'woocommerce-conditional-product-fees-for-checkout' ); ?></strong> <?php esc_html_e( 'All Conditional product fees method display as per below.', 'woocommerce-conditional-product-fees-for-checkout' ); ?></p>
						<span class="gettingstarted">
                           	<img src="<?php echo esc_url( WCPFC_PRO_PLUGIN_URL . 'admin/images/Getting_Started_03.png' ); ?>">
                      	</span>
						<p class="block gettingstarted textgetting"><strong><?php esc_html_e( 'Step 3 : ', 'woocommerce-conditional-product-fees-for-checkout' ); ?></strong> <?php esc_html_e( 'View conditional product fees on checkout page as per your rules.', 'woocommerce-conditional-product-fees-for-checkout' ); ?></p>
						<span class="gettingstarted">
                           	<img src="<?php echo esc_url( WCPFC_PRO_PLUGIN_URL . 'admin/images/Getting_Started_04.png' ); ?>">
                       	</span>
					</td>
				</tr>
			</tbody>
		</table>
	</div>
</div>
</div>
</div>
</div>
</div>
<?php
