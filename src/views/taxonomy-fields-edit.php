<table class="form-table location-edit" role="presentation">
	<tbody>
		<tr class="form-field form-required term-name-wrap">
			<th scope="row"><label><?php echo __('Default for new products', 'stock-locations-for-woocommerce'); ?></label></th>
			<td>
				<select name="default_location">
					<option value="0" <?php echo ($default_location == 0) ? 'selected="selected"' : ''; ?>>No</option>
					<option value="1" <?php echo ($default_location == 1) ? 'selected="selected"' : ''; ?>>Yes</option>
				</select>
				<p class="description"><?php echo __('Should location be selected by default for new products?', 'stock-locations-for-woocommerce'); ?></p>
			</td>
		</tr>
        
		<tr class="form-field form-required term-name-wrap auto_order_allocate">
			<th scope="row"><label><?php echo __('Auto order allocate', 'stock-locations-for-woocommerce'); ?></label> <i class="fas fa-link"></i></th>
			<td>
				<select name="auto_order_allocate" data-id="auto_order_allocate">
					<option value="0" <?php echo ($auto_order_allocate == 0) ? 'selected="selected"' : ''; ?>>No</option>
					<option value="1" <?php echo ($auto_order_allocate == 1) ? 'selected="selected"' : ''; ?>>Yes</option>
				</select>
				<p class="description"><?php echo __('Should stock be auto allocated to stock locations when an order is placed?', 'stock-locations-for-woocommerce'); ?><br />
                <div class="alert alert-info" role="alert"><?php echo __('See priority field below to set priority. Priority number will decide the auto location selection when show selection in cart is OFF.', 'stock-locations-for-woocommerce'); ?></div>
</p>
               
			</td>
		</tr>
		<tr class="form-field form-required term-name-wrap auto_order_allocate">
			<th scope="row"><label><?php echo __('Backorder location', 'stock-locations-for-woocommerce'); ?></label> <i class="fas fa-link"></i></th>
			<td>
				<select name="primary_location">
					<option value="0" <?php echo ($primary_location == 0) ? 'selected="selected"' : ''; ?>>No</option>
					<option value="1" <?php echo ($primary_location == 1) ? 'selected="selected"' : ''; ?>>Yes</option>
				</select>
				<p class="description"><?php echo __('Should backorder stock be allocated to this location? Only used if auto order allocate is enabled.', 'stock-locations-for-woocommerce'); ?><br />

                <div class="alert alert-info" role="alert"><?php echo __('Only one backorder location is will be considered and priority number will decide the auto location selection when show selection in cart is OFF.', 'stock-locations-for-woocommerce'); ?></div>
               
                </p>
			</td>
		</tr>
		<tr class="form-field form-required term-name-wrap auto_order_allocate">
			<th scope="row"><label><?php echo __('Location priority', 'stock-locations-for-woocommerce'); ?></label> <i class="fas fa-link"></i></th>
			<td>
				<input name="auto_order_allocate_priority" type="number" value="<?php echo $auto_order_allocate_priority; ?>" size="40"> <a title="<?php echo __('Click here to watch priority in action', 'stock-locations-for-woocommerce'); ?>" href="https://www.youtube.com/embed/9kGVJZNNxRk" target="_blank"><i class="fab fa-youtube"></i></a>
				<p class="description"><?php echo __('This is the order in which stock is auto allocated if enabled.', 'stock-locations-for-woocommerce'); ?><br />
                <div class="alert alert-info" role="alert"><?php echo __('Higher the number will have higher the priority.', 'stock-locations-for-woocommerce'); ?></div>
                </p>
			</td>
		</tr>
		<?php if( isset($location_email) && !is_null($location_email) ) : ?>
		<tr class="form-field term-name-wrap auto_order_allocate">
			<th scope="row"><label><?php echo __('Location email', 'stock-locations-for-woocommerce'); ?></label> <i class="fas fa-link"></i></th>
			<td>
				<input type="email" name="location_email" value="<?php echo $location_email; ?>">
				<p class="description"><?php echo __('Email address for notifications when a customer buys from this location. Works only if auto order allocation is enabled for this location.', 'stock-locations-for-woocommerce'); ?></p>
			</td>
		</tr>
		<?php endif; ?>
	</tbody>
</table>