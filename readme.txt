=== Widiyanata ===

Contributors: craftwerk
Tags: featured-images, threaded-comments, translation-ready

Requires at least: 4.5
Tested up to: 5.7.2
Requires PHP: 5.6
Stable tag: 5.0.2.1
License: GNU General Public License v2 or later
License URI: https://www.gnu.org/licenses/gpl-2.0.html

Widiyanata, Bootstrap 5 WordPress Theme, Copyright 2019 - 2021 Bastian Kreiter.


=== Plugin Name ===

A starter theme called Widiyanata.

Contributors: craftwerk


== Description ==

A powerful free Bootstrap 5 WordPress Starter Theme


== Installation ==

1. In your admin panel, go to Appearance > Themes and click the Add New button.
2. Click Upload Theme and Choose File, then select the theme's .zip file. Click Install Now.
3. Click Activate to use your new theme right away.


== Documentation ==

https://widiyanata.me/category/documentation/


== Frequently Asked Questions ==

= Does this theme support any plugins? =

Widiyanata includes support for Infinite Scroll in Jetpack.


== Credits ==

* Based on Underscores https://underscores.me/, (C) 2012-2017 Automattic, Inc., [GPLv2 or later](https://www.gnu.org/licenses/gpl-2.0.html)
* normalize.css https://necolas.github.io/normalize.css/, (C) 2012-2016 Nicolas Gallagher and Jonathan Neal, [MIT](https://opensource.org/licenses/MIT)
* Bootstrap https://getbootstrap.com/docs/5.0/about/license/
* Bootstrap 5 Wordpress Navbar Walker by AlexWebLab: https://github.com/AlexWebLab/bootstrap-5-wordpress-navbar-walker
* Comments Section Script by wp-bootstrap-starter https://github.com/afterimagedesigns/wp-bootstrap-starter
* Font Awesome https://fontawesome.com/license/free


== Changelog ==

    = 5.0.2.1 - June 05 2021 =
        
        * [IMPROVEMENT] transition-delay on offcanvas-cart loader https://github.com/craftwerkberlin/widiyanata-5/issues/6 (woocommerce-style.css, woocommerce.js, ajax-add-to-cart.php. Thnx Martin Holzer risingbytes.at)
        * [IMPROVEMENT] Tags is a complete pluggable function now (template-tags.php)
        * [IMPROVEMENT] Register comment-list.php is a pluggable function now. You can override file by register comment-list.php and place a copy in child .
        * [IMPROVEMENT] Nav Walker and Menu register are a complete pluggable function now. You can create your own menus and use a different nav walker by override them in child-theme.

    = 5.0.2.0 - May 31 2021 =
        
        * [BUGFIX] Added .w-100 class to offcanvas cart footer
        * [REMOVED] JavaScript workaround to set .active class to .nav-link (done by new nav-walker now)
        * [UPDATE] All languages
        * [UPDATE] Dropdown menu slide animation (theme.js)
        * [UPDATE] Replaced modified Bootstrap 4 Nav Walker with Bootstrap 5 Nav Walker https://github.com/AlexWebLab/bootstrap-5-wordpress-navbar-walker

    = 5.0.1.12 - May 28 2021 =
        
        * [BUGFIX] Checkout Stripe validation (<li> payment-method.php, thnx John https://widiyanata.me/documentation/woocommerce/#comment-3880)
        * [UPDATE] Swedish language
        * [UPDATE] Changed WooCommerce comments with Bootstrap custom component (review.php, single-product-reviews.php, woocommerce-style.css)

    = 5.0.1.11 - May 28 2021 =
        
        * [REMOVED] Language backup files
        * [NEW] Translation: Svenska (thnx Emil Lindén)
        * [BUGFIX] Two Factor Authentication support form-login.php. Does not work in offcanvas, must use my-account static page (Thnx cemmos, Github issue https://github.com/craftwerkberlin/widiyanata-5/issues/5)
        * [IMPROVEMENT] Added .img-thumbnail.rounded-circle to avatar (comment-list.php, all author-*.php)

    = 5.0.1.10 - May 16 2021 =
        
        * [BUGFIX] Readded jQuery in header.php. Required if a 3rd party plugin loads jQuery in header instead in footer.

    = 5.0.1.9 - May 16 2021 =
        
        * [BUGFIX] Added missing close </div> tag in page-full-width-image.php and single-full-width-image.php (thnx Trishah Woolley)

    = 5.0.1.8 - May 14 2021 =
        
        * [BUGFIX] Typo in index.php (thnx Whitetower-lloyd, https://github.com/craftwerkberlin/widiyanata-5/issues/4)
        * [UPDATE] Bootstrap 5.0.1

    = 5.0.1.7 - May 12 2021 =
        
        * [UPDATE] grouped.php (WooCommerce 5.3.0)

    = 5.0.1.6 - May 11 2021 =
        
        * [NEW] Added offcanvas-top to offcanvas navbar implementation (style.css)
        * [REMOVED] Removed WP jQuery from header.php
        * [IMPROVEMENT] Set offcanvas backdrop fade transition to .4s ease-in-out for smoother transition (style.css)

    = 5.0.1.5 - May 07 2021 =
        
        * [BUGFIX] Added missing spaces in dutch translations
        * [BUGFIX] Added [data-bs-popper] to search dropdown to override popper.js inline-style (Bootstrap 5 stable, dropdown could not be opened when using child-theme with bootstrap.min.css from parent theme, style.css). 

    = 5.0.1.4 - May 06 2021 =
        
        * [NEW] .zi-n1 helper class to set negative z-index
        * [BUGFIX] text-decoration: none hover product card (woocommerce-style.css)
        * [REMOVED] Bugfix custom checkboxes, radios, range, and select on Mac/iOS Safari if custom Sass compiled bootstrap.min.css is used (style.css, fixed in compiler settings)
        * [REMOVED] Workaround icon in offcanvas toggler https://github.com/twbs/bootstrap/issues/33457 (Bugfix Bootstrap 5.0.0, theme.js, woocommerce.js)
        * [REMOVED] Backdrop if navbar has class .fixed-top. Uses Bootstrap offcanvas backdrop now (style.css, theme.js)
        * [REMOVED] Offcanvas header align-items-center (style.css, Bootstrap included)
        * [UPDATE] Bootstrap 5.0.0

    = 5.0.1.3 - April 29 2021 =
    
        * [IMPROVEMENT] Replaced col in all author-*.php with custom media-object component (author-*.php)
        * [IMPROVEMENT] Replaced col in comments with custom media-object component (comments-list.php, style.css)
        * [IMPROVEMENT] Changed alert-primary to alert-info (payment-methods.php)
        * [BUGFIX] Moved offcanvas backdrop from .navbar.fixed-top to .fixed-top. Now it's possible to wrap the navbar in a fixed-top div.
        * [SEO] Removed aria-labelledby="" from offcanvas (thnx Mike Collignon)

    = 5.0.1.2 - April 16 2021 =
    
        * [REMOVED] backdrop-filter in image gallery caption (style.css)
        * [BUGFIX] Custom checkboxes, radios, range, and select on Mac/iOS Safari if custom Sass compiled bootstrap.min.css is used (style.css)
        * [BUGFIX] Footer menu class and id (twice, thnx Konstantinos Tzimas, footer.php)

    = 5.0.1.1 - April 15 2021 =
    
        * [UPDATE] mini-cart.php (WooCommerce 5.2.1)
        * [UPDATE] form-pay.php (WooCommerce 5.2.1)

    = 5.0.1.0 - April 12 2021 =
    
        * [IMPROVEMENT] Font size WooCommerce prices
        * [BUGFIX] Remove autop (WP 5.7 bug near shortcode, style.css) https://wordpress.org/support/topic/how-to-stop-wp-from-adding-p-tag-automatically/
        * [BUGFIX] Radios cart-shipping.php on devices below 768px
        * [BUGFIX] Offcanvas cart footer (iOS)
        * [UPDATE] Replaced all Offcanvas with Bootstrap component
        * [UPDATE] Bootstrap v5.0.0-beta3

    = 5.0.0.10 - March 29 2021 =
    
        * [NEW] Translation: Français (thnx Mike Collignon)
        * [BUGFIX] Offcanvas user will not close when filling out the form (woocommerce.js, thnx Mike Collignon)
        * [BUGFIX] Removed autop in theme.js again (Bug with CF7)  
        * [IMPROVEMENT] Custom radios to shipping (cart-shipping.php, woocommerce-style.css)
        * [IMPROVEMENT] New checkout page (form-checkout.php, form-billing.php, form-shipping.php, thnx Mike Collignon)
        * [IMPROVEMENT] Close offcanvas cart and user dashboard on click <a> (woocommerce.js, not working MacOS Safari)
        * [IMPROVEMENT] Using Semantic Versioning https://semver.org

    = 5.0.0.9 - March 17 2021 =
    
        * [BUGFIX] Missing line break tags in single-*.php
        * [NEW] Translation: Dutch, Dutch (Formal), (thnx Jan Revet)

    = 5.0.0.8 - March 14 2021 =
    
        * [NEW] Translation: Polski (thnx Marshall Reyher)

    = 5.0.0.7 - March 13 2021 =
    
        * [IMPROVEMENT] Changed theme description
        * [BUGFIX] <pre> in comments will not crash columns anymore (comment-list.php, style.css)
        
    = 5.0.0.6 - March 10 2021 =
    
        * [BUGFIX] Remove autop (WP 5.7, theme.js)
        * [NEW] Add hover effect to offcanvas-header (style.css)

    = 5.0.0.5 - March 08 2021 =
    
        * [NEW] Reusable .zi-10X0 classes for z-index

    = 5.0.0.4 - March 04 2021 =
    
        * [IMPROVEMENT] Removed position CSS on .dropdown-search.dropdown-menu, added Bootstrap classes start-0 and end-0 to display search in full browser-width (style.css, header.php). 
        * [BUGFIX] Search dropdown on Android Chrome (theme.js)

    = 5.0.0.3 - February 26 2021 =
    
        * [NEW] Translation: Português do Brasil (thnx Junio Jose)
        * [BUGFIX] margin undefined Github issue https://github.com/craftwerkberlin/widiyanata-5/issues/1 (thnx djcowan)
        * [IMPROVEMENT] Reorder CSS load (thnx Daniel Munoz Rey)

    = 5.0.0.2 - February 23 2021 =
    
        * [BUGFIX] Remove .active from all .nav-link if page is search-result
        * [NEW] HTML Markups (Theme Unit Test Data)
        * [NEW] Translation: Italiano (thnx Domenico Carbone)
        * [BUGFIX] Add overflow-x: hidden to body to hide horizontal scrollbars on Windows Chrome and Firefox if width-100 class is used.
        * [TEST] jQuery 3.5.1 ready
        * [SEO] Merged all CSS in /woocommerce/css into one file woocommerce-style.css
        * [SEO] Links in comments opens in new tab with rel=”nofollow” attribute (pluggable function, functions.php)
        * [SEO] Add <link rel=preload> to Fontawesome (functions.php)
        * [SEO] Merged theme-header.js and theme.js to reduce file requests
        * [SEO] Moved all CSS from all.css to style.css to reduce file requests
        * [SEO] Load all JS in footer
        * [BUGFIX] Workaround to highlight menu links when active. (theme.js, WP Bootstrap Navwalker is still v4)
        * [NEW] Hook after #primary in WooCommerce files
        * [NEW] Time updated separator has an own class to hide simply via CSS if updated time is not needed, template-tags.php.
        * [NEW] Removed Preloader from theme and made a plugin of it
        
    = 5.0.0.1 - February 11 2021 =
    
        * [UPDATE] Bootstrap 5.0.0-beta-2

    = 5.0.0.0 - January 29 2021 =
    
        * Initial release


