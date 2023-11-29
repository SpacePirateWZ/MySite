<?php
class Mendo_Dashboard_Page {
    /**
     * Constructor.
     */
    public function __construct() {
        add_action( 'admin_menu', array( $this, 'add_theme_page' ) );
        add_action( 'admin_enqueue_scripts', array( $this, 'enqueue_styles' ) );
    }

    /**
     * Add the dashboard page under the Appearance menu.
     */
    public function add_theme_page() {
        add_theme_page(
            'Mendo',
            'Mendo',
            'manage_options',
            'mendo-dashboard',
            array( $this, 'render_dashboard_page' )
        );
    }

    /**
     * Render the dashboard page.
     */
    public function render_dashboard_page() {
        $theme = wp_get_theme();
        ?>
        <div class="wrap">
            <div class="mendo-dashboard">
                <div class="dashboard-header">
                    <h1><?php echo esc_html__( 'Mendo Theme', 'mendo' ); ?> <span class="theme-version">v<?php echo esc_html( $theme->get( 'Version' ) ); ?></span></h1>
                    <p class="theme-desc"><?php echo esc_html__( 'Thank you for using Mendo for your website.', 'mendo' ); ?></p>
                </div>
                <div class="mendo-cards">						
                    <div class="mendo-card">
                        <h2><?php echo esc_html__( 'Starter sites', 'mendo' ); ?></h2>
                        <p><?php echo esc_html__( 'Looking for a quick start? You can import our demo content.', 'mendo' ); ?></p>
                        <?php Mendo_Install_Plugins::instance()->do_plugin_install(); ?>
                    </div>
                    <div class="mendo-card">
                        <h2><?php echo esc_html__( 'Support', 'mendo' ); ?></h2>
                        <p><?php echo esc_html__( 'Visit the forums if you need any help', 'mendo' ); ?></p>
                        <div class="card-footer">
                            <a target="_blank" href="https://wordpress.org/support/theme/mendo/" class="button"><?php echo esc_html__( 'Visit forums', 'mendo' ); ?></a>
                        </div>
                    </div>
                    <div class="mendo-card">
                        <h2><?php echo esc_html__( 'Changelog', 'mendo' ); ?></h2>
                        <p><?php echo esc_html__( 'Keep up with the latest changes', 'mendo' ); ?></p>
                        <div class="card-footer">
                            <a target="_blank" href="https://solicowp.com/mendo-changelog/" class="button"><?php echo esc_html__( 'See changelog', 'mendo' ); ?></a>
                        </div>
                    </div>
                    <div class="mendo-card">
                        <h2><?php echo esc_html__( 'Review', 'mendo' ); ?></h2>
                        <p><?php echo esc_html__( 'If you enjoy the theme, we would be thankful for a rating.', 'mendo' ); ?></p>
                        <div class="card-footer">
                            <a target="_blank" href="https://wordpress.org/support/theme/mendo/reviews/?filter=5#new-post" class="button"><?php echo esc_html__( 'Rate Mendo', 'mendo' ); ?></a>
                        </div>
                    </div>
                    <div class="mendo-card">
                        <h2><?php echo esc_html__( 'Upgrade to Pro', 'mendo' ); ?></h2>
                        <p><?php echo esc_html__( 'Unlock premium features with the Pro version of Mendo.', 'mendo' ); ?></p>
                        <div class="card-footer">
                            <a target="_blank" href="https://solicowp.com/themes/mendo/" class="button button-primary"><?php echo esc_html__( 'See Mendo Pro', 'mendo' ); ?></a>
                        </div>
                    </div>                                        
                </div>
            </div>

        </div>
        <?php
    }

    /**
     * Enqueue the stylesheet only on the dashboard page.
     */
    public function enqueue_styles( $hook ) {
        if ( 'appearance_page_mendo-dashboard' === $hook ) {
            wp_enqueue_style( 'mendo-dashboard-styles', get_stylesheet_directory_uri() . '/assets/css/admin/dashboard.min.css' );
        }
    }
}

new Mendo_Dashboard_Page();