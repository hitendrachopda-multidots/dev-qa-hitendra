<?php
/**
 * Handles free plugin user dashboard
 * 
 * @package Woocommerce_Conditional_Product_Fees_For_Checkout_Pro
 * @since   3.9.3
 */

// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
require_once( plugin_dir_path( __FILE__ ) . 'header/plugin-header.php' );
global $wcpffc_fs;
?>
	<div class="wcpfc-section-left">
		<div class="dotstore-upgrade-dashboard">
			<div class="premium-benefits-section">
				<h2><?php esc_html_e( 'Go Premium to Increase Profitability', 'woocommerce-conditional-product-fees-for-checkout' ); ?></h2>
				<p><?php esc_html_e( 'Three Benefits for Upgrading to Premium', 'woocommerce-conditional-product-fees-for-checkout' ); ?></p>
				<div class="premium-features-boxes">
					<div class="feature-box">
						<span><?php esc_html_e('01', 'woocommerce-conditional-product-fees-for-checkout'); ?></span>
						<h3><?php esc_html_e('Extra Profits', 'woocommerce-conditional-product-fees-for-checkout'); ?></h3>
						<p><?php esc_html_e('Optimize revenue generation from each purchase with conditional fees and earn profits on every confirmed sale.', 'woocommerce-conditional-product-fees-for-checkout'); ?></p>
					</div>
					<div class="feature-box">
						<span><?php esc_html_e('02', 'woocommerce-conditional-product-fees-for-checkout'); ?></span>
						<h3><?php esc_html_e('Better Sales', 'woocommerce-conditional-product-fees-for-checkout'); ?></h3>
						<p><?php esc_html_e('Fair pricing based on conditional fees improves conversions and ensures better sales on your WooStore.', 'woocommerce-conditional-product-fees-for-checkout'); ?></p>
					</div>
					<div class="feature-box">
						<span><?php esc_html_e('03', 'woocommerce-conditional-product-fees-for-checkout'); ?></span>
						<h3><?php esc_html_e('Faster Checkout', 'woocommerce-conditional-product-fees-for-checkout'); ?></h3>
						<p><?php esc_html_e('Display a detailed breakdown of conditional fees to generate trust with transparency, leading to a faster checkout.', 'woocommerce-conditional-product-fees-for-checkout'); ?></p>
					</div>
				</div>
			</div>
			<div class="premium-benefits-section unlock-premium-features">
				<p><span><?php esc_html_e( 'Unlock Premium Features', 'woocommerce-conditional-product-fees-for-checkout' ); ?></span></p>
				<div class="premium-features-boxes">
					<div class="feature-box">
						<h3><?php esc_html_e('WooCommerce Dynamic Extra Fees', 'woocommerce-conditional-product-fees-for-checkout'); ?></h3>
						<span><i class="fa fa-cogs"></i></span>
						<p><?php esc_html_e('Charge dynamic fee charges based on the product stock, quantity, cart subtotal, special products, etc.', 'woocommerce-conditional-product-fees-for-checkout'); ?></p>
						<div class="feature-explanation-popup-main">
							<div class="feature-explanation-popup-outer">
								<div class="feature-explanation-popup-inner">
									<div class="feature-explanation-popup">
										<span class="dashicons dashicons-no-alt popup-close-btn" title="<?php esc_attr_e('Close', 'woocommerce-conditional-product-fees-for-checkout'); ?>"></span>
										<div class="popup-body-content">
											<div class="feature-image">
												<img src="<?php echo esc_url(WCPFC_PRO_PLUGIN_URL . 'admin/images/pro-features-img/feature-box-one-img.png'); ?>" alt="<?php echo esc_attr('WooCommerce Dynamic Extra Fees', 'woocommerce-conditional-product-fees-for-checkout'); ?>">
											</div>
											<div class="feature-content">
												<p><?php esc_html_e('Now, you have the power to create personalized fee rules tailored to your specific needs. Define rules based on different criteria such as country, city, state, category, coupon code, and quantity range.', 'woocommerce-conditional-product-fees-for-checkout'); ?></p>
												<ul>
													<li><?php esc_html_e('Tailor your pricing to quantity levels with tiered fees: $10 for 1-3 items, $20 for 4-10 items, and $29 for 10 or more items.', 'woocommerce-conditional-product-fees-for-checkout'); ?></li>
													<li><?php esc_html_e('Easily apply quantity-based fees to shipping classes: $39 for Bulky items, $21 for Lightweight items, and more. Easily apply quantity-based fees to shipping classes: $39 for Bulky items, $21 for Lightweight items, and more.', 'woocommerce-conditional-product-fees-for-checkout'); ?></li>
												</ul>
											</div>
										</div>
									</div>		
								</div>
							</div>
						</div>
					</div>
					<div class="feature-box">
						<h3><?php esc_html_e('Location-Based Conditional Fees', 'woocommerce-conditional-product-fees-for-checkout'); ?></h3>
						<span><i class="fa fa-location-arrow"></i></span>
						<p><?php esc_html_e('You can set the shipping charges at checkout based on locational factors such as country, state, postal code, and zone.', 'woocommerce-conditional-product-fees-for-checkout'); ?></p>
						<div class="feature-explanation-popup-main">
							<div class="feature-explanation-popup-outer">
								<div class="feature-explanation-popup-inner">
									<div class="feature-explanation-popup">
										<span class="dashicons dashicons-no-alt popup-close-btn" title="<?php esc_attr_e('Close', 'woocommerce-conditional-product-fees-for-checkout'); ?>"></span>
										<div class="popup-body-content">
											<div class="feature-image">
												<img src="<?php echo esc_url(WCPFC_PRO_PLUGIN_URL . 'admin/images/pro-features-img/feature-box-two-img.png'); ?>" alt="<?php echo esc_attr('Location-Based Conditional Fees', 'woocommerce-conditional-product-fees-for-checkout'); ?>">
											</div>
											<div class="feature-content">
												<p><?php esc_html_e('Expand your fee configuration options with different locations such as country, state, postcodes, and city rules.', 'woocommerce-conditional-product-fees-for-checkout'); ?></p>
												<ul>
													<li><?php esc_html_e('Easy to apply country-based Fees: $10 for orders shipped to the United States or $15 for orders shipped to Canada.', 'woocommerce-conditional-product-fees-for-checkout'); ?></li>
													<li><?php esc_html_e('Capability to apply service area-based charges: $5 fee for deliveries within the town area or a $15 fee for orders shipped to remote areas.', 'woocommerce-conditional-product-fees-for-checkout'); ?></li>
												</ul>
											</div>
										</div>
									</div>		
								</div>
							</div>
						</div>
					</div>
					<div class="feature-box">
						<h3><?php esc_html_e('User Role-Based Checkout Fees', 'woocommerce-conditional-product-fees-for-checkout'); ?></h3>
						<span><i class="fa fa-user"></i></span>
						<p><?php esc_html_e('Set conditional product fees based on user roles such as consumer, seller, shop manager, premium customer, and more.', 'woocommerce-conditional-product-fees-for-checkout'); ?></p>
						<div class="feature-explanation-popup-main">
							<div class="feature-explanation-popup-outer">
								<div class="feature-explanation-popup-inner">
									<div class="feature-explanation-popup">
										<span class="dashicons dashicons-no-alt popup-close-btn" title="<?php esc_attr_e('Close', 'woocommerce-conditional-product-fees-for-checkout'); ?>"></span>
										<div class="popup-body-content">
											<div class="feature-image">
												<img src="<?php echo esc_url(WCPFC_PRO_PLUGIN_URL . 'admin/images/pro-features-img/feature-box-three-img.png'); ?>" alt="<?php echo esc_attr('User Role-Based Checkout Fees', 'woocommerce-conditional-product-fees-for-checkout'); ?>">
											</div>
											<div class="feature-content">
												<p><?php esc_html_e('It is easy to apply charges based on customer types. Set different delivery charges for consumers, sellers, shop managers, and premium customers.', 'woocommerce-conditional-product-fees-for-checkout'); ?></p>
												<ul>
													<li><?php esc_html_e('Easy to apply service charge on bulk orders: $49 surcharge for specific product orders exceeding $3000.', 'woocommerce-conditional-product-fees-for-checkout'); ?></li>
													<li><?php esc_html_e('Customize charges based on weight:  $99 for items weighing between 0.01 - 99.99 and $149 for 100 pounds or more.', 'woocommerce-conditional-product-fees-for-checkout'); ?></li>
												</ul>
											</div>
										</div>
									</div>		
								</div>
							</div>
						</div>
					</div>
					<div class="feature-box">
						<h3><?php esc_html_e('Percentage Fees Based On Product Quantity', 'woocommerce-conditional-product-fees-for-checkout'); ?></h3>
						<span><i class="fa fa-percent"></i></span>
						<p><?php esc_html_e('Charge additional percentage fees for a specific range of items added to the cart by the users.', 'woocommerce-conditional-product-fees-for-checkout'); ?></p>
						<div class="feature-explanation-popup-main">
							<div class="feature-explanation-popup-outer">
								<div class="feature-explanation-popup-inner">
									<div class="feature-explanation-popup">
										<span class="dashicons dashicons-no-alt popup-close-btn" title="<?php esc_attr_e('Close', 'woocommerce-conditional-product-fees-for-checkout'); ?>"></span>
										<div class="popup-body-content">
											<div class="feature-image">
												<img src="<?php echo esc_url(WCPFC_PRO_PLUGIN_URL . 'admin/images/pro-features-img/feature-box-four-img.png'); ?>" alt="<?php echo esc_attr('Percentage Fees Based On Product Quantity', 'woocommerce-conditional-product-fees-for-checkout'); ?>">
											</div>
											<div class="feature-content">
												<p><?php echo sprintf( esc_html__('You have the power to charge percentage fees for special products. Define a %d%% fee for high-value product items.', 'woocommerce-conditional-product-fees-for-checkout'), 2 ); ?></p>
												<ul>
													<li><?php esc_html_e('Tailor your fees based on product quantity: $15 for orders with 10 or more items.', 'woocommerce-conditional-product-fees-for-checkout'); ?></li>
													<li><?php echo sprintf( esc_html__('Easy to apply user-specific percentage fees: a %d%% fee for shop managers or a %d%% fee for members.', 'woocommerce-conditional-product-fees-for-checkout'), 3, 2 ); ?></li>
												</ul>
											</div>
										</div>
									</div>		
								</div>
							</div>
						</div>
					</div>
					<div class="feature-box">
						<h3><?php esc_html_e('Free Shipping Based Check-Out Fees', 'woocommerce-conditional-product-fees-for-checkout'); ?></h3>
						<span><i class="fa fa-truck"></i></span>
						<p><?php esc_html_e('Offer extra charges to your customer based on the order amount if they select the free shipping option.', 'woocommerce-conditional-product-fees-for-checkout'); ?></p>
						<div class="feature-explanation-popup-main">
							<div class="feature-explanation-popup-outer">
								<div class="feature-explanation-popup-inner">
									<div class="feature-explanation-popup">
										<span class="dashicons dashicons-no-alt popup-close-btn" title="<?php esc_attr_e('Close', 'woocommerce-conditional-product-fees-for-checkout'); ?>"></span>
										<div class="popup-body-content">
											<div class="feature-image">
												<img src="<?php echo esc_url(WCPFC_PRO_PLUGIN_URL . 'admin/images/pro-features-img/feature-box-five-img.png'); ?>" alt="<?php echo esc_attr('Free Shipping Based Check-Out Fees', 'woocommerce-conditional-product-fees-for-checkout'); ?>">
											</div>
											<div class="feature-content">
												<p><?php esc_html_e('You can offer extra charges to your customer based on the order amount for the free shipping option.', 'woocommerce-conditional-product-fees-for-checkout'); ?></p>
												<ul>
													<li><?php esc_html_e('Easy to apply dynamic fees for free shipping: $10 box charges for express free shipping and $21 charge for orders below $199.', 'woocommerce-conditional-product-fees-for-checkout'); ?></li>
													<li><?php esc_html_e('Customize country-specific charges for free delivery: $10 charges for the United States and $21 for Europe.', 'woocommerce-conditional-product-fees-for-checkout'); ?></li>
												</ul>
											</div>
										</div>
									</div>		
								</div>
							</div>
						</div>
					</div>
					<div class="feature-box">
						<h3><?php esc_html_e('Payment Gateway-Based Extra Fees', 'woocommerce-conditional-product-fees-for-checkout'); ?></h3>
						<span><i class="fa fa-credit-card"></i></span>
						<p><?php esc_html_e('Charge extra fees from the customers for choosing a specific payment gateway based on the order amount.', 'woocommerce-conditional-product-fees-for-checkout'); ?></p>
						<div class="feature-explanation-popup-main">
							<div class="feature-explanation-popup-outer">
								<div class="feature-explanation-popup-inner">
									<div class="feature-explanation-popup">
										<span class="dashicons dashicons-no-alt popup-close-btn" title="<?php esc_attr_e('Close', 'woocommerce-conditional-product-fees-for-checkout'); ?>"></span>
										<div class="popup-body-content">
											<div class="feature-image">
												<img src="<?php echo esc_url(WCPFC_PRO_PLUGIN_URL . 'admin/images/pro-features-img/feature-box-six-img.png'); ?>" alt="<?php echo esc_attr('Payment Gateway-Based Extra Fees', 'woocommerce-conditional-product-fees-for-checkout'); ?>">
											</div>
											<div class="feature-content">
												<p><?php esc_html_e('Power to generate extra revenue by collecting transaction fees for specific payment gateways.', 'woocommerce-conditional-product-fees-for-checkout'); ?></p>
												<ul>
													<li><?php echo sprintf( esc_html__('Customize charges based on payment type: %d%% fee for payments made through credit cards.', 'woocommerce-conditional-product-fees-for-checkout'), 2 ); ?></li>
													<li><?php esc_html_e('Easily apply a processing fee for cheque payments: a $5 fee per transaction.', 'woocommerce-conditional-product-fees-for-checkout'); ?></li>
												</ul>
											</div>
										</div>
									</div>		
								</div>
							</div>
						</div>
					</div>
					<div class="feature-box">
						<h3><?php esc_html_e('Advanced Extra Fees Rules', 'woocommerce-conditional-product-fees-for-checkout'); ?></h3>
						<span><i class="fa fa-cart-plus"></i></span>
						<p><?php esc_html_e('Enhance your pricing strategy by adding advanced fee rules based on specific product or category subtotal ranges.', 'woocommerce-conditional-product-fees-for-checkout'); ?></p>
						<div class="feature-explanation-popup-main">
							<div class="feature-explanation-popup-outer">
								<div class="feature-explanation-popup-inner">
									<div class="feature-explanation-popup">
										<span class="dashicons dashicons-no-alt popup-close-btn" title="<?php esc_attr_e('Close', 'woocommerce-conditional-product-fees-for-checkout'); ?>"></span>
										<div class="popup-body-content">
											<div class="feature-image">
												<img src="<?php echo esc_url(WCPFC_PRO_PLUGIN_URL . 'admin/images/pro-features-img/feature-box-seven-img.png'); ?>" alt="<?php echo esc_attr('Advanced Extra Fees Rules', 'woocommerce-conditional-product-fees-for-checkout'); ?>">
											</div>
											<div class="feature-content">
												<p><?php esc_html_e('Enhance your pricing strategy by adding advanced fee rules based on specific product or category subtotal ranges.', 'woocommerce-conditional-product-fees-for-checkout'); ?></p>
												<ul>
													<li><?php esc_html_e('Harness the power of charges on popular products: Apply a $19 fee for orders between $199 and $999, $29 for orders between $1999 and $5999, and $35 for orders exceeding $6000.', 'woocommerce-conditional-product-fees-for-checkout'); ?></li>
													<li><?php echo sprintf( esc_html__('Enhance fee options with additional charges for top products: Apply a %d%% fee for orders below $1499 and %d%% for orders above $1500.', 'woocommerce-conditional-product-fees-for-checkout'), 5, 2 ); ?></li>
												</ul>
											</div>
										</div>
									</div>		
								</div>
							</div>
						</div>
					</div>
					<div class="feature-box">
						<h3><?php esc_html_e('Tiered Extra Fees', 'woocommerce-conditional-product-fees-for-checkout'); ?></h3>
						<span><i class="fa fa-adjust"></i></span>
						<p><?php esc_html_e('Provide customers with lower rate fees based on product, category, shipping class totals, and quantity ranges.', 'woocommerce-conditional-product-fees-for-checkout'); ?></p>
						<div class="feature-explanation-popup-main">
							<div class="feature-explanation-popup-outer">
								<div class="feature-explanation-popup-inner">
									<div class="feature-explanation-popup">
										<span class="dashicons dashicons-no-alt popup-close-btn" title="<?php esc_attr_e('Close', 'woocommerce-conditional-product-fees-for-checkout'); ?>"></span>
										<div class="popup-body-content">
											<div class="feature-image">
												<img src="<?php echo esc_url(WCPFC_PRO_PLUGIN_URL . 'admin/images/pro-features-img/feature-box-eight-img.png'); ?>" alt="<?php echo esc_attr('Tiered Extra Fees', 'woocommerce-conditional-product-fees-for-checkout'); ?>">
											</div>
											<div class="feature-content">
												<p><?php esc_html_e('Offer customers discounted fees based on product, category, shipping class totals, and quantity ranges to enhance their experience.', 'woocommerce-conditional-product-fees-for-checkout'); ?></p>
												<ul>
													<li><?php esc_html_e('Effortlessly implement product-specific charges: Apply a $10 processing fee for orders below $599 and $14 for orders exceeding that amount for special products.', 'woocommerce-conditional-product-fees-for-checkout'); ?></li>
													<li><?php esc_html_e('Empower yourself with category-specific charges: Apply a $10 processing fee for orders below 19 items from the accessory products and $15 for orders exceeding that quantity.', 'woocommerce-conditional-product-fees-for-checkout'); ?></li>
												</ul>
											</div>
										</div>
									</div>		
								</div>
							</div>
						</div>
					</div>
					<div class="feature-box">
						<h3><?php esc_html_e('Revenue Dashboard', 'woocommerce-conditional-product-fees-for-checkout'); ?></h3>
						<span><i class="fa fa-bar-chart"></i></span>
						<p><?php esc_html_e('Develop a revenue-driven strategy by analyzing top fees, including yearly, monthly, and daily charges, and visualizing pie chart graphs.', 'woocommerce-conditional-product-fees-for-checkout'); ?></p>
						<div class="feature-explanation-popup-main">
							<div class="feature-explanation-popup-outer">
								<div class="feature-explanation-popup-inner">
									<div class="feature-explanation-popup">
										<span class="dashicons dashicons-no-alt popup-close-btn" title="<?php esc_attr_e('Close', 'woocommerce-conditional-product-fees-for-checkout'); ?>"></span>
										<div class="popup-body-content">
											<div class="feature-image">
												<img src="<?php echo esc_url(WCPFC_PRO_PLUGIN_URL . 'admin/images/pro-features-img/feature-box-nine-img.png'); ?>" alt="<?php echo esc_attr('Revenue Dashboard', 'woocommerce-conditional-product-fees-for-checkout'); ?>">
											</div>
											<div class="feature-content">
												<p><?php esc_html_e('Develop a revenue-driven strategy by analyzing top fees, including yearly, monthly, and daily charges, and visualizing pie chart graphs.', 'woocommerce-conditional-product-fees-for-checkout'); ?></p>
												<ul>
													<li><?php esc_html_e('Track additional revenue: Visualize line charts based on fees and customize fee amounts based on generated revenue.', 'woocommerce-conditional-product-fees-for-checkout'); ?></li>
													<li><?php esc_html_e('Track and optimize top fees: Gain insights into the top 10 revenue-generating fees and refine your strategy accordingly.', 'woocommerce-conditional-product-fees-for-checkout'); ?></li>
												</ul>
											</div>
										</div>
									</div>		
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="upgrade-to-premium-btn">
				<a href="<?php echo esc_url('https://www.thedotstore.com/woocommerce-extra-fees-plugin/') ?>" target="_blank" class="button button-primary"><?php esc_html_e('Upgrade to Premium', 'woocommerce-conditional-product-fees-for-checkout'); ?><svg id="Group_52548" data-name="Group 52548" xmlns="http://www.w3.org/2000/svg" width="22" height="20" viewBox="0 0 27.263 24.368"><path id="Path_199491" data-name="Path 199491" d="M333.833,428.628a1.091,1.091,0,0,1-1.092,1.092H316.758a1.092,1.092,0,1,1,0-2.183h15.984a1.091,1.091,0,0,1,1.091,1.092Z" transform="translate(-311.117 -405.352)" fill="#fff"></path><path id="Path_199492" data-name="Path 199492" d="M312.276,284.423h0a1.089,1.089,0,0,0-1.213-.056l-6.684,4.047-4.341-7.668a1.093,1.093,0,0,0-1.9,0l-4.341,7.668-6.684-4.047a1.091,1.091,0,0,0-1.623,1.2l3.366,13.365a1.091,1.091,0,0,0,1.058.825h18.349a1.09,1.09,0,0,0,1.058-.825l3.365-13.365A1.088,1.088,0,0,0,312.276,284.423Zm-4.864,13.151H290.764l-2.509-9.964,5.373,3.253a1.092,1.092,0,0,0,1.515-.4l3.944-6.969,3.945,6.968a1.092,1.092,0,0,0,1.515.4l5.373-3.253Z" transform="translate(-285.455 -280.192)" fill="#fff"></path></svg></a>
			</div>
		</div>
	</div>
	</div>
</div>
</div>
</div>
<?php 
