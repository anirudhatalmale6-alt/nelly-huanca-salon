<?php
/**
 * Nelly Salon Child Theme Functions
 */

// Enqueue parent + child styles
add_action('wp_enqueue_scripts', function () {
    wp_enqueue_style('astra-parent', get_template_directory_uri() . '/style.css');
    wp_enqueue_style('nelly-salon', get_stylesheet_directory_uri() . '/style.css', ['astra-parent'], '1.0.0');
    wp_enqueue_style('nelly-salon-custom', get_stylesheet_directory_uri() . '/custom.css', ['nelly-salon'], '1.0.0');
    wp_enqueue_script('nelly-salon-js', get_stylesheet_directory_uri() . '/custom.js', ['jquery'], '1.0.0', true);
});

// Customize Astra theme options
add_action('after_setup_theme', function () {
    // Add custom logo support
    add_theme_support('custom-logo', [
        'height'      => 80,
        'width'       => 280,
        'flex-height' => true,
        'flex-width'  => true,
    ]);
});

// Set Astra theme options
add_action('init', function () {
    $astra_settings = get_option('astra-settings', []);

    // Header
    $astra_settings['header-bg-obj'] = [
        'background-color' => '#1a1a1a',
    ];
    $astra_settings['header-color-site-title'] = '#ffffff';
    $astra_settings['header-color-h-site-title'] = '#c6a364';

    // Colors
    $astra_settings['text-color'] = '#2d2d2d';
    $astra_settings['link-color'] = '#c6a364';
    $astra_settings['link-h-color'] = '#a88b4a';
    $astra_settings['theme-color'] = '#c6a364';
    $astra_settings['header-bg-color'] = '#1a1a1a';

    // Typography
    $astra_settings['body-font-family'] = "'Montserrat', sans-serif";
    $astra_settings['body-font-weight'] = '300';
    $astra_settings['headings-font-family'] = "'Cormorant Garamond', serif";
    $astra_settings['headings-font-weight'] = '400';

    // Footer
    $astra_settings['footer-bg-obj'] = [
        'background-color' => '#1a1a1a',
    ];
    $astra_settings['footer-color'] = 'rgba(255,255,255,0.6)';
    $astra_settings['footer-link-color'] = '#c6a364';
    $astra_settings['footer-link-h-color'] = '#d4b87a';

    // Layout
    $astra_settings['site-content-width'] = 1200;
    $astra_settings['site-layout'] = 'ast-full-width-layout';

    update_option('astra-settings', $astra_settings);
});

// Register widget areas
add_action('widgets_init', function () {
    register_sidebar([
        'name'          => 'Footer Column 1',
        'id'            => 'footer-1',
        'before_widget' => '<div class="footer-widget">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4 class="footer-widget-title">',
        'after_title'   => '</h4>',
    ]);

    register_sidebar([
        'name'          => 'Footer Column 2',
        'id'            => 'footer-2',
        'before_widget' => '<div class="footer-widget">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4 class="footer-widget-title">',
        'after_title'   => '</h4>',
    ]);

    register_sidebar([
        'name'          => 'Footer Column 3',
        'id'            => 'footer-3',
        'before_widget' => '<div class="footer-widget">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4 class="footer-widget-title">',
        'after_title'   => '</h4>',
    ]);
});

// Add custom footer with salon info
add_action('astra_footer_content_top', function () {
    ?>
    <div class="nh-footer-top" style="background:#1a1a1a; padding:60px 0 40px; border-top:1px solid rgba(198,163,100,0.3);">
        <div class="ast-container" style="max-width:1200px; margin:0 auto; padding:0 20px;">
            <div style="display:grid; grid-template-columns:repeat(auto-fit, minmax(250px, 1fr)); gap:40px;">
                <div>
                    <h4 style="font-family:'Cormorant Garamond',serif; color:#fff; font-size:1.5rem; letter-spacing:0.08em; margin-bottom:20px;">Nelly Huanca</h4>
                    <p style="color:rgba(255,255,255,0.6); font-size:0.9rem; line-height:1.8;">Where beauty meets artistry. Experience premium hair and beauty services in an elegant, relaxing environment.</p>
                    <div style="margin-top:20px;">
                        <a href="#" style="color:#c6a364; margin-right:15px; font-size:1.2rem;">&#xf09a;</a>
                        <a href="#" style="color:#c6a364; margin-right:15px; font-size:1.2rem;">&#xf16d;</a>
                        <a href="#" style="color:#c6a364; font-size:1.2rem;">&#xf0d5;</a>
                    </div>
                </div>
                <div>
                    <h4 style="font-family:'Montserrat',sans-serif; color:#c6a364; font-size:0.75rem; font-weight:500; letter-spacing:0.2em; text-transform:uppercase; margin-bottom:20px;">Quick Links</h4>
                    <ul style="list-style:none; padding:0; margin:0;">
                        <li style="margin-bottom:10px;"><a href="/services" style="color:rgba(255,255,255,0.6); font-size:0.9rem; text-decoration:none;">Our Services</a></li>
                        <li style="margin-bottom:10px;"><a href="/book-now" style="color:rgba(255,255,255,0.6); font-size:0.9rem; text-decoration:none;">Book Appointment</a></li>
                        <li style="margin-bottom:10px;"><a href="/shop" style="color:rgba(255,255,255,0.6); font-size:0.9rem; text-decoration:none;">Shop Products</a></li>
                        <li style="margin-bottom:10px;"><a href="/gallery" style="color:rgba(255,255,255,0.6); font-size:0.9rem; text-decoration:none;">Gallery</a></li>
                        <li><a href="/contact" style="color:rgba(255,255,255,0.6); font-size:0.9rem; text-decoration:none;">Contact Us</a></li>
                    </ul>
                </div>
                <div>
                    <h4 style="font-family:'Montserrat',sans-serif; color:#c6a364; font-size:0.75rem; font-weight:500; letter-spacing:0.2em; text-transform:uppercase; margin-bottom:20px;">Opening Hours</h4>
                    <ul style="list-style:none; padding:0; margin:0; color:rgba(255,255,255,0.6); font-size:0.9rem;">
                        <li style="display:flex; justify-content:space-between; margin-bottom:8px;"><span>Monday - Friday</span><span>9:00 AM - 7:00 PM</span></li>
                        <li style="display:flex; justify-content:space-between; margin-bottom:8px;"><span>Saturday</span><span>9:00 AM - 6:00 PM</span></li>
                        <li style="display:flex; justify-content:space-between;"><span>Sunday</span><span>Closed</span></li>
                    </ul>
                </div>
                <div>
                    <h4 style="font-family:'Montserrat',sans-serif; color:#c6a364; font-size:0.75rem; font-weight:500; letter-spacing:0.2em; text-transform:uppercase; margin-bottom:20px;">Contact</h4>
                    <ul style="list-style:none; padding:0; margin:0; color:rgba(255,255,255,0.6); font-size:0.9rem;">
                        <li style="margin-bottom:10px;">&#128205; 123 Beauty Street, Suite 100</li>
                        <li style="margin-bottom:10px;">&#128222; +1 (555) 123-4567</li>
                        <li style="margin-bottom:10px;">&#128231; info@nellyhuanca.com</li>
                        <li>&#128172; WhatsApp Available</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div style="background:#111; padding:20px 0; text-align:center;">
        <p style="color:rgba(255,255,255,0.4); font-size:0.8rem; margin:0; font-family:'Montserrat',sans-serif; letter-spacing:0.1em;">
            &copy; <?php echo date('Y'); ?> Nelly Huanca - Beauty and Hair. All rights reserved.
        </p>
    </div>
    <?php
});

// Remove default Astra footer credit
add_filter('astra_footer_copyright_text', function () {
    return '';
});

// Hide default page titles (we use custom headers in page content)
add_filter('astra_the_title_enabled', '__return_false');

// Disable Astra page header for all pages (we handle it in content)
add_filter('astra_banner_elements_display', '__return_false');

// Add preloader
add_action('wp_body_open', function () {
    ?>
    <div id="nh-preloader" style="position:fixed;top:0;left:0;width:100%;height:100%;background:#1a1a1a;display:flex;align-items:center;justify-content:center;z-index:99999;transition:opacity 0.5s ease;">
        <div style="text-align:center;">
            <div style="font-family:'Cormorant Garamond',serif;color:#fff;font-size:2rem;letter-spacing:0.2em;margin-bottom:10px;">NELLY HUANCA</div>
            <div style="width:40px;height:1px;background:#c6a364;margin:0 auto;animation:pulse 1.5s infinite;"></div>
        </div>
    </div>
    <style>@keyframes pulse{0%,100%{width:40px;opacity:0.5}50%{width:80px;opacity:1}}</style>
    <script>window.addEventListener('load',function(){var p=document.getElementById('nh-preloader');if(p){p.style.opacity='0';setTimeout(function(){p.style.display='none'},500)}});</script>
    <?php
});
