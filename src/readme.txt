=== Stock Locations for WooCommerce ===
Contributors: fahadmahmood,alexmigf
Tags: woocommerce, stock, stock locations, simple, variable, products, product
Requires at least: 4.9
Tested up to: 5.8
Requires PHP: 7.2
Stable tag: __STABLE_TAG__
License: GPLv2 or later
License URI: https://www.gnu.org/licenses/gpl-2.0.html

This plugin will help you manage WooCommerce Products stocks through locations.


== Description ==
Stock Locations for WooCommerce will help you manage your products stock across multiple locations easily. If you have multiple physical stores or storage locations, like warehouses, this plugin may help you.

You can print the locations inside a product page on the frontend, with this shortcodes:

= Product pages =

`[slw_product_locations show_qty="yes" show_stock_status="no" show_empty_stock="yes"]`
`[slw_product_variations_locations show_qty="yes" show_stock_status="no" show_empty_stock="yes"]`
`[slw_product_message is_available="yes" only_location_available="no" location="location-slug"]Your custom product message/HTML here[/slw_product_message]`

= Cart page =

`[slw_cart_message qty_from_location="location-slug" only_location_available="no"]Your custom cart message/HTML here[/slw_cart_message]`

= REST API =

REST API endpoints (both accept `GET` and `PUT` requests):

`/wp-json/wc/v3/products/id`
`/wp-json/wc/v3/products/id/variations/id (first ID is for parent product, the second one for the variation ID)`
`/wp-json/wp/v2/location/`
`/wp-json/wp/v2/location/id`


This plugin requires at least *WooCommerce 3.4*.


= Features =

- New taxonomy for stock locations
- Works on both, simple and variable products
- Easy management of stock with multiple locations, both in product and orders
- Get and update product stock locations from the REST API
- Allow customers to select locations when purchasing
- Auto order allocation for locations stock reduction
- Send email notifications when stock is allocated for a product in a location
- Send WooCommerce New Order email copy to item location
- Compatible with WPML


= Compatibility =

- PHP 7.2+


== Installation ==

1. Upload "stock-locations-for-woocommerce" to the "/wp-content/plugins/" directory.
2. Check if you have WooCommerce 3.4+ plugin activated
3. Activate SLW plugin through the "Plugins" menu in WordPress.

**Simple Products**

1. Assign Stock Locations to the product > Update Post
2. Under Inventory Tab > Activate Manage Stock
3. Under Stock Locations Tab > Manage the stock for the locations

**Variable Products**

1. Assign Stock Locations to the product > Update Post
2. Under Inventory Tab > Deativate Manage Stock
3. Under Attributes Tab > Create attributes
4. Under Variations Tab > Create variations based on attributes
5. In each variation > Activate Manage Stock & Add Price > Update Post
6. Under Stock Locations Tab > Manage the stock for the locations for each variation


== Frequently Asked Questions ==

= How to lock pre-selected location on frontend? =

Turn ON "Enable default location in frontend selection" from WooCommerce > Stock Locations for WC. This option will allow you to select default location for a product on Product Edit page. Now turn ON "Lock frontend location to default" and it will lock frontend location which is selected as default.

= I found a bug, where i can report it? =
I prefer you to use the Github issues. You can submit a new one here [GitHub](https://github.com/fahadmahmood8/stock-locations-for-woocommerce/issues/new)

= How to show location stock quantity with a postfix e.g. 20+? =
On settings page you can define a number. If location stock value will be less than the given number, it will display the stock value else will not show the exact number but a plus sign "+" just after the maximum number given.

[youtube http://www.youtube.com/watch?v=nWj5MTLcPjI]

= How to make location selection required on cart page? =

[youtube http://www.youtube.com/watch?v=64N7-b90r3E]

= How location priority work with auto order stock allocation? =

[youtube http://www.youtube.com/watch?v=9kGVJZNNxRk]

== Screenshots ==

1. Product list filter and stock locations column
2. Stock locations taxonomy
3. Manage stock locations in simple products
4. Manage stock locations in variable products
5. Deduct stock from locations manually
6. Deduct stock from location automatically
7. Allow customers to select locations in cart page
8. Allow customers to select location in variable products
9. Allow customers to select location in simple products
10. Plugin settings
11. Show location stock quantity with a postfix e.g. 20+
12. Edit Stock locations taxonomy
13. Lock default location on frontend.
14. Set price for product as per each stock location.
15. Pre-select default location on product page (frontend).
16. Stock locations for each variation.


== Changelog ==
= 1.7.0 =
- New: A new functionality to get a pick-list of how many orders for each product have been pre-made for each location. https://wordpress.org/support/topic/location-stock-summary/ [Thanks to msbbill115 / MySalesButler.com][08/12/2021]

= 1.6.9 =
- Fix: Cancelled order location was staying with -1 stock. [Thanks to Phannaline Khemdy][19/12/2021]

= 1.6.8 =
- Fix: Out of stock status not being displayed, showing 0 availabilty instead. https://wordpress.org/support/topic/out-of-stock-status-not-being-displayed-showing-0-availabilty-instead/ [Thanks to Donny Tejeda][15/12/2021]
- New: Visibility section for stock location under cart items with checkbox options. [Thanks to Phannaline Khemdy][16/12/2021]
- Fix: Show location selection in cart will not effect the user selected items. [17/12/2021]
- New: Price for different warehouse on same product? https://github.com/fahadmahmood8/stock-locations-for-woocommerce/issues/110 [Thanks to IHEnan99, Puigdemunt & oppssssss][17/12/2021]

= 1.6.7 =
- Fix: Variable product locations are empty, stock was not appearing as it was dependent on location selection. https://wordpress.org/support/topic/availability-not-displaying-after-upgrade-to-1-6-6/ [Thanks to Donny Tejeda][14/12/2021]
- Fix: Product and Varitons stock values should be editable if locations are not yet selected. [14/12/2021]

= 1.6.6 =
- New: Settings page option for restore stock for failed order status tested with the user on Google meeting. [Thanks to Jere][12/12/2021]

= 1.6.5 =
- New: Settings page updated with one more option, restore stock for failed order status. [Thanks to Jere Seppä][12/12/2021]

= 1.6.4 =
- New: Added urgent help link to help section for better support. [12/12/2021]

= 1.6.3 =
- New: Settings page updated with two more options, restore stock for cancelled and pending order statuses. [Thanks to Phannaline Khemdy][11/12/2021]

= 1.6.2 =
- Fix: Stock is not automatically allocated. https://wordpress.org/support/topic/stock-is-not-automatically-allocated/ [Thanks to weertman & freshwebno][09/12/2021]

= 1.6.1 =
- Fix: Critical error after installation. https://wordpress.org/support/topic/critical-error-after-installation-2/ [Thanks to martinnijkamp][08/12/2021]

= 1.6.0 =
- Fix: Bug on cart page - https://wordpress.org/support/topic/bug-on-cart-page/ [Thanks to designfin][08/12/2021]

= 1.5.9 =
- New: Assets updated.

= 1.5.8 =
- New: (Name change and old orders for customers) - Hide location information from old orders, solution provided on support ticket thread. [Thanks to Petri Mustanoja / pemu.se][07/12/2021]
- Fix: Can't manage my stock anymore. [Thanks to Jelle Tempelman][07/12/2021]
- Fix: Stock at Locations set but Stock still shows 0. [Thanks to andrehlprr & leax] [07/12/2021]
- New: Change Text for quantity value - new feature added. https://wordpress.org/support/topic/change-text-for-quantity-value/ [Thanks to Gina Pelli/mediih] [07/12/2021]
- Fix: Make it possible to change location in cart #116. [Thanks to screenpartner & Michael Wilhelmsen][08/12/2021]

= 1.5.7 =
- New: Bootstrap and FontAwesome added. Assets are rearranged and simplified.
- Fix: Fatal error fixed. [Thanks to kentakofot][07/12/2021]
 
= 1.5.6 =
- New: Debug log tab added for better troubleshooting. [Thanks to nickdill, rivalink and tomkolp][07/12/2021]
- Fix: Infinite redirection replaced with a notice so customers can be saved from inconvenience.


= 1.5.5 =
- Fix: Update suggest by pacmanito. [20/11/2021]

= 1.5.4 =
- New: First revised commit through github. [19/11/2021]
- New: Updated authors info and removed email address. [19/11/2021]

= 1.5.3 =
- New: Plugin support team extended and repositories are relocated. [Thanks to Alexandre Faustino][08/11/2021]
- Fix: PHP warning fixed. [Thanks to dsl225/John & mustanoja][09/11/2021]

= 1.5.2 =
- New: updated compatibility for WooCommerce 5.3
- Fix: bug on order item manual stock reduction on order save

= 1.5.1 =
- Fix: bug that triggers fatal error

= 1.5.0 =
- New: stock locations table in settings with each location ID
- New: setting to define a default location to be locked in frontend
- New: locations stocks reduction on pair with WooCommerce reduce actions
- New: WPML compatibility
- New: bumps Import/Export add-on version to 1.1.0
- Fix: frontend selector style issues on variable products
- Fix: if rest location is provided with an empty array we now clear the previous allocations as you would expect to happen. Thanks to @shanerutter
- Fix: order item view, show previous stock locations when stock was allocated against a location but the location is no longer valid for that item. Thanks to @shanerutter
- Fix: showing allocate stock message, if the product no longer has stock allocations and the order line has previous stock location allocations. Thanks to @shanerutter
- Fix: missing stock or stock status in frontend selection 
- Fix: bug on showing 'outofstock' when adding new products with stock available

= 1.4.5 =
- Fix: updates stock status on stock reduction
- Fix: marking product 'instock' if has stock instead of backorder 
- Fix: bug that crashes WP

= 1.4.4 =
- New: branding
- New: allow third party functions to deduct WC stock on the main variation product with new hook 'slw_allow_variation_product_stock_reduce'
- Fix: restriction on manual stock allocation if the order has stock reduced meta
- Fix: same location per cart item not being respected 
- Fix: cart page location selection required not working 

= 1.4.3 =
- Fix: bug of product variation WC stock not being updated when locations stock is deducted (updated)

= 1.4.2 =
- New: setting to show location stock quantities on product and cart pages on location selectors
- Fix: bug of product variation WC stock not being updated when locations stock is deducted

= 1.4.1 =
- New: POT file for languages
- New: settings tabs
- Fix: issue on WC reducing product stock on line item save

= 1.4.0 =
- New: removed barcodes feature from plugin to focus only on stock locations
- New: plugin settings moved to the WooCommerce menu 
- New: restore order items stock locations on WooCommerce order restore
- New: setting to make locations selection in cart required 
- New: filter 'slw_disallow_third_party_allocate_order_item_stock' to allow third party plugins to allocate item locations stock
- Fix: to prevent product WC stock decrease below zero 
- Fix: undefined index error for plugin setting 'location_email_notifications'
- Fix: to prevent reducing the stock twice for the product if the order was already reduced
- Fix: replace post parent_id property by get_parent_id() method stopping warnings thrown by woocommerce
- Fix: adding callable check for product method get_id() in stock allocation helper

= 1.3.2 =
- Fix: jQuery request returning 404 because of missing hook

= 1.3.1 =
- New: include 'Out of stock' and 'On backorder' locations in frontend selections
- New: filter 'slw_allow_wc_stock_reduce' to allow third party plugins to prevent WC stock reduction
- Fix: jQuery error for variants without locations
- Fix: jQuery bug on clearing location selection on variation in product page
- Fix: jQuery error when frontend settings not enabled
- Fix: meta '_slw_data' not beeing saved correctly

= 1.3.0 =
- New: filter 'slw_stock_allocation_notification_message' to customize the email notification message
- New: send email copy of New Order WC email to location registered address
- New: send email notification when stock is allocated for a product in some location
- New: show location taxonomy in REST API
- New: setting to enable/disable the barcodes tab
- Fix: stock allocation when customer selects or not a location
- Fix: bug preventing stock deduction when using in conjugation with Point of Sale for WooCommerce plugin

= 1.2.4 =
- New: setting to include location data in formatted item meta
- Fix: several bugs showing warnings

= 1.2.3 =
- New: setting to auto delete unused product stock locations meta
- New: filter 'slw_shortcode_product_location_stock' for shortcodes 'slw_product_locations' and 'slw_product_variations_locations'
- New: CSS classes for shortcodes 'slw_product_locations' and 'slw_product_variations_locations'
- Fix: 'outofstock' taxonomy on product save/update
- Fix: setting 'Different location per cart item', values were exchanged

= 1.2.2 =
- Fix: helper 'view' function call, preventing colision with other plugins with the same function name

= 1.2.1 =
- New: plugin setting to lock selected location in cart for every cart item
- Fix: check if location stock is enough for the cart item, if not hide from select option
- Fix: if auto allocation exist for the location disable WC hold stock

= 1.2.0 =
- New: stock locations select in cart page
- New: settings page
- New: auto order allocation for stock
- New: shortcode 'slw_cart_message' to display a custom message in the cart page
- New: shortcode 'slw_product_message' to displaying a custom message on product page
- New: options for stock locations: Default for New Products, Backorder Location, Auto Order Allocate and Stock Location Priority
- Fix: several bugs and PHP legacy compatibilities

= 1.1.5 =
- Fixes bug on shortcodes method

= 1.1.4 =
- Improved stock locations levels products listing
- Locations added to REST API products and variations endpoints for GET and PUT requests, thanks to @shanerutter

= 1.1.3 =
- Remove flush rewrite rules, should be avoided for now

= 1.1.2 =
- Add variations stock levels to products listing column
- New shortcode 'slw_product_variations_locations'
- Fixes on shortcode 'slw_product_locations'

= 1.1.1 =
- New filter 'slw_shortcode_product_location_name'
- New shortcode 'slw_product_locations'

= 1.1.0 =
- New column in product listing with stock locations imventory
- Fix bug on getting barcodes data for shortcodes
- Fix bug reported by @sebtoombs
- Plugin structure refactoring

= 1.0.3 =
- Tested up to WordPress 5.4
- Fix - Removed condition that prevent other roles beyond the admin from accessing the plugin functionality
- Added Capabilities to the location taxonomy
- Fix - Some actions priorities and arguments number were missing

= 1.0.2 =
- Fix - Bug creating new order, trying to get items on nonexistent order

= 1.0.1 =
- Tested up to WooCommerce 4.0.1
- Fix - Added condition to check variation products in hide meta function
- Fix - Check if order item product exists before trying to hide meta
- Fix - Check if order has items before trying to hide meta

= 1.0.0 =
- Initial release
