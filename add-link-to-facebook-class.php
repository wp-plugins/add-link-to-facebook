<?php

/*
	Support class Add Link to Facebook Plugin
	Copyright (c) 2011 by Marcel Bokhorst
*/

// Define constants
define('c_al2fb_text_domain', 'add-link-to-facebook');
define('c_al2fb_nonce_form', 'al2fb-nonce-form');

// Global options
define('c_al2fb_option_version', 'al2fb_version');
define('c_al2fb_option_timeout', 'al2fb_timeout');
define('c_al2fb_option_nonotice', 'al2fb_nonotice');
define('c_al2fb_option_min_cap', 'al2fb_min_cap');
define('c_al2fb_option_msg_refresh', 'al2fb_comment_refresh');
define('c_al2fb_option_max_descr', 'al2fb_max_msg');
define('c_al2fb_option_max_text', 'al2fb_max_text');
define('c_al2fb_option_exclude_type', 'al2fb_exclude_type');
define('c_al2fb_option_exclude_cat', 'al2fb_exclude_cat');
define('c_al2fb_option_noverifypeer', 'al2fb_noverifypeer');
define('c_al2fb_option_css', 'al2fb_css');
define('c_al2fb_option_siteurl', 'al2fb_siteurl');
define('c_al2fb_option_nocurl', 'al2fb_nocurl');
define('c_al2fb_option_use_pp', 'al2fb_use_pp');
define('c_al2fb_option_debug', 'al2fb_debug');

// Site options
define('c_al2fb_option_app_share', 'al2fb_app_share');

// Transient options
define('c_al2fb_transient_cache', 'al2fb_cache_');

// User meta
define('c_al2fb_meta_client_id', 'al2fb_client_id');
define('c_al2fb_meta_app_secret', 'al2fb_app_secret');
define('c_al2fb_meta_access_token', 'al2fb_access_token');
define('c_al2fb_meta_picture_type', 'al2fb_picture_type');
define('c_al2fb_meta_picture', 'al2fb_picture');
define('c_al2fb_meta_picture_default', 'al2fb_picture_default');
define('c_al2fb_meta_page', 'al2fb_page');
define('c_al2fb_meta_page_owner', 'al2fb_page_owner');
define('c_al2fb_meta_use_groups', 'al2fb_use_groups');
define('c_al2fb_meta_group', 'al2fb_group');
define('c_al2fb_meta_caption', 'al2fb_caption');
define('c_al2fb_meta_msg', 'al2fb_msg');
define('c_al2fb_meta_shortlink', 'al2fb_shortlink');
define('c_al2fb_meta_add_new_page', 'al2fb_add_to_page');
define('c_al2fb_meta_trailer', 'al2fb_trailer');
define('c_al2fb_meta_hyperlink', 'al2fb_hyperlink');
define('c_al2fb_meta_share_link', 'al2fb_share_link');
define('c_al2fb_meta_fb_comments', 'al2fb_fb_comments');
define('c_al2fb_meta_fb_comments_postback', 'al2fb_fb_comments_postback');
define('c_al2fb_meta_fb_comments_copy', 'al2fb_fb_comments_copy');
define('c_al2fb_meta_fb_comments_nolink', 'al2fb_fb_comments_nolink');
define('c_al2fb_meta_fb_likes', 'al2fb_fb_likes');
define('c_al2fb_meta_post_likers', 'al2fb_post_likers');
define('c_al2fb_meta_post_like_button', 'al2fb_post_like_button');
define('c_al2fb_meta_like_nohome', 'al2fb_like_nohome');
define('c_al2fb_meta_like_noposts', 'al2fb_like_noposts');
define('c_al2fb_meta_like_nopages', 'al2fb_like_nopages');
define('c_al2fb_meta_like_noarchives', 'al2fb_like_noarchives');
define('c_al2fb_meta_like_nocategories', 'al2fb_like_nocategories');
define('c_al2fb_meta_like_layout', 'al2fb_like_layout');
define('c_al2fb_meta_like_faces', 'al2fb_like_faces');
define('c_al2fb_meta_like_width', 'al2fb_like_width');
define('c_al2fb_meta_like_action', 'al2fb_like_action');
define('c_al2fb_meta_like_font', 'al2fb_like_font');
define('c_al2fb_meta_like_colorscheme', 'al2fb_like_colorscheme');
define('c_al2fb_meta_like_link', 'al2fb_like_link');
define('c_al2fb_meta_like_top', 'al2fb_like_top');
define('c_al2fb_meta_like_iframe', 'al2fb_like_iframe');
define('c_al2fb_meta_post_send_button', 'al2fb_post_send_button');
define('c_al2fb_meta_post_combine_buttons', 'al2fb_post_combine_buttons');
define('c_al2fb_meta_like_box_width', 'al2fb_box_width');
define('c_al2fb_meta_like_box_border', 'al2fb_box_border');
define('c_al2fb_meta_like_box_noheader', 'al2fb_box_noheader');
define('c_al2fb_meta_like_box_nostream', 'al2fb_box_nostream');
define('c_al2fb_meta_comments_posts', 'al2fb_comments_posts');
define('c_al2fb_meta_comments_width', 'al2fb_comments_width');
define('c_al2fb_meta_open_graph', 'al2fb_open_graph');
define('c_al2fb_meta_open_graph_type', 'al2fb_open_graph_type');
define('c_al2fb_meta_open_graph_admins', 'al2fb_open_graph_admins');
define('c_al2fb_meta_exclude_default', 'al2fb_exclude_default');
define('c_al2fb_meta_not_post_list', 'al2fb_like_not_list');
define('c_al2fb_meta_fb_encoding', 'al2fb_fb_encoding');
define('c_al2fb_meta_fb_locale', 'al2fb_fb_locale');
define('c_al2fb_meta_clean', 'al2fb_clean');
define('c_al2fb_meta_donated', 'al2fb_donated');
define('c_al2fb_meta_rated', 'al2fb_rated');
define('c_al2fb_meta_service', 'al2fb_service');

// Post meta
define('c_al2fb_meta_link_id', 'al2fb_facebook_link_id');
define('c_al2fb_meta_link_time', 'al2fb_facebook_link_time');
define('c_al2fb_meta_link_picture', 'al2fb_facebook_link_picture');
define('c_al2fb_meta_exclude', 'al2fb_facebook_exclude');
define('c_al2fb_meta_error', 'al2fb_facebook_error');
define('c_al2fb_meta_image_id', 'al2fb_facebook_image_id');
define('c_al2fb_meta_nolike', 'al2fb_facebook_nolike');
define('c_al2fb_meta_nointegrate', 'al2fb_facebook_nointegrate');
define('c_al2fb_meta_excerpt', 'al2fb_facebook_excerpt');

define('c_al2fb_action_update', 'al2fb_action_update');
define('c_al2fb_action_delete', 'al2fb_action_delete');
define('c_al2fb_action_clear', 'al2fb_action_clear');

// Comment meta
define('c_al2fb_meta_fb_comment_id', 'al2fb_facebook_comment_id');

// Logging
define('c_al2fb_log_redir_init', 'al2fb_redir_init');
define('c_al2fb_log_redir_check', 'al2fb_redir_check');
define('c_al2fb_log_redir_time', 'al2fb_redir_time');
define('c_al2fb_log_redir_ref', 'al2fb_redir_ref');
define('c_al2fb_log_redir_from', 'al2fb_redir_from');
define('c_al2fb_log_redir_to', 'al2fb_redir_to');
define('c_al2fb_log_auth_time', 'al2fb_auth_time');
define('c_al2fb_last_error', 'al2fb_last_error');
define('c_al2fb_last_error_time', 'al2fb_last_error_time');

// Mail
define('c_al2fb_mail_name', 'al2fb_debug_name');
define('c_al2fb_mail_email', 'al2fb_debug_email');
define('c_al2fb_mail_msg', 'al2fb_debug_msg');

define('USERPHOTO_APPROVED', 2);

// To Do
// - Check app permissions? not possible :-(
// - target="_blank"? how to do?
// - Update meta box after update media gallery?
// - Improve cleaning

// Define class
if (!class_exists('WPAL2Facebook')) {
	class WPAL2Facebook {
		// Class variables
		var $main_file = null;
		var $plugin_url = null;
		var $php_error = null;
		var $debug = null;
		var $site_id = '';
		var $blog_id = '';

		// Constructor
		function __construct() {
			global $wp_version;

			// Get main file name
			$this->main_file = str_replace('-class', '', __FILE__);

			// Get plugin url
			$this->plugin_url = WP_PLUGIN_URL . '/' . basename(dirname($this->main_file));
			if (strpos($this->plugin_url, 'http') === 0 && is_ssl())
				$this->plugin_url = str_replace('http://', 'https://', $this->plugin_url);

			// Log
			$this->debug = get_option(c_al2fb_option_debug);

			// Get site & blog id
			if (is_multisite()) {
				$current_site = get_current_site();
				$this->site_id = $current_site->id;
				global $blog_id;
				$this->blog_id = $blog_id;
			}

			// register activation actions
			//register_activation_hook($this->main_file, array(&$this, 'Activate'));
			register_deactivation_hook($this->main_file, array(&$this, 'Deactivate'));

			// Register actions
			add_action('init', array(&$this, 'Init'), 0);
			if (is_admin()) {
				add_action('admin_menu', array(&$this, 'Admin_menu'));
				add_filter('plugin_action_links', array(&$this, 'Plugin_action_links'), 10, 2);
				add_action('admin_notices', array(&$this, 'Admin_notices'));
				add_action('post_submitbox_misc_actions', array(&$this, 'Post_submitbox_misc_actions'));
				add_action('post_submitbox_start', array(&$this, 'Post_submitbox'));
				add_filter('manage_posts_columns', array(&$this, 'Manage_posts_columns'));
				add_action('manage_posts_custom_column', array(&$this, 'Manage_posts_custom_column'), 10, 2);
				add_filter('manage_pages_columns', array(&$this, 'Manage_posts_columns'));
				add_action('manage_pages_custom_column', array(&$this, 'Manage_posts_custom_column'), 10, 2);
				add_action('add_meta_boxes', array(&$this, 'Add_meta_boxes'));
				add_action('save_post', array(&$this, 'Save_post'));
			}

			add_action('transition_post_status', array(&$this, 'Transition_post_status'), 10, 3);
			add_action('xmlrpc_publish_post', array(&$this, 'Remote_publish'));
			add_action('app_publish_post', array(&$this, 'Remote_publish'));
			add_action('future_to_publish', array(&$this, 'Future_to_publish'));
			add_action('al2fb_publish', array(&$this, 'Remote_publish'));

			if (get_option(c_al2fb_option_use_pp))
				add_action('publish_post', array(&$this, 'Remote_publish'));

			add_action('comment_post', array(&$this, 'Comment_post'));
			add_action('comment_unapproved_to_approved', array(&$this, 'Comment_approved'));
			add_action('comment_approved_to_unapproved', array(&$this, 'Comment_unapproved'));

			// Content
			add_action('wp_head', array(&$this, 'WP_head'));
			add_filter('the_content', array(&$this, 'The_content'), 999);
			add_filter('comments_array', array(&$this, 'Comments_array'), 10, 2);
			add_filter('get_comments_number', array(&$this, 'Get_comments_number'), 10, 2);
			add_filter('comment_class', array(&$this, 'Comment_class'));
			add_filter('get_avatar', array(&$this, 'Get_avatar'), 10, 5);

			// Shortcodes
			add_shortcode('al2fb_likers', array(&$this, 'Shortcode_likers'));
			add_shortcode('al2fb_like_button', array(&$this, 'Shortcode_like_button'));
			add_shortcode('al2fb_like_box', array(&$this, 'Shortcode_like_box'));
			add_shortcode('al2fb_send_button', array(&$this, 'Shortcode_send_button'));
			add_shortcode('al2fb_comments_plugin', array(&$this, 'Shortcode_comments_plugin'));

			// Custom filters
			add_filter('al2fb_excerpt', array(&$this, 'Filter_excerpt'), 10, 2);
			add_filter('al2fb_content', array(&$this, 'Filter_content'), 10, 2);

			// Widget
			add_action('widgets_init', create_function('', 'return register_widget("AL2FB_Widget");'));
			if (!is_admin())
				add_action('wp_print_styles', array(&$this, 'WP_print_styles'));
			if (is_admin())
				add_action('wp_print_scripts', array(&$this, 'WP_print_scripts'));
		}

		// Handle plugin activation
		function Activate() {
			global $wpdb;
			$version = get_option(c_al2fb_option_version);
			if ($version <= 1) {
				delete_option(c_al2fb_meta_client_id);
				delete_option(c_al2fb_meta_app_secret);
				delete_option(c_al2fb_meta_access_token);
				delete_option(c_al2fb_meta_picture_type);
				delete_option(c_al2fb_meta_picture);
				delete_option(c_al2fb_meta_page);
				delete_option(c_al2fb_meta_clean);
				delete_option(c_al2fb_meta_donated);
			}
			if ($version <= 2) {
				$rows = $wpdb->get_results("SELECT user_id, meta_value FROM " . $wpdb->usermeta . " WHERE meta_key='al2fb_integrate'");
				foreach ($rows as $row) {
					update_user_meta($row->user_id, c_al2fb_meta_fb_comments, $row->meta_value);
					update_user_meta($row->user_id, c_al2fb_meta_fb_likes, $row->meta_value);
					delete_user_meta($row->user_id, 'al2fb_integrate');
				}
			}
			if ($version <= 3) {
				global $wpdb;
				$rows = $wpdb->get_results("SELECT ID FROM " . $wpdb->users);
				foreach ($rows as $row)
					update_user_meta($row->ID, c_al2fb_meta_like_faces, true);
			}
			if ($version <= 4) {
				$rows = $wpdb->get_results("SELECT user_id, meta_value FROM " . $wpdb->usermeta . " WHERE meta_key='" . c_al2fb_meta_trailer . "'");
				foreach ($rows as $row) {
					$value = get_user_meta($row->user_id, c_al2fb_meta_trailer, true);
					update_user_meta($row->user_id, c_al2fb_meta_trailer, ' ' . $value);
				}
			}
			if ($version <= 5) {
				if (!get_option(c_al2fb_option_css))
					update_option(c_al2fb_option_css,
'.al2fb_widget_comments { }
.al2fb_widget_comments li { }
.al2fb_widget_picture { width: 32px; height: 32px; }
.al2fb_widget_name { }
.al2fb_widget_comment { }
.al2fb_widget_date { font-size: smaller; }
');
			}
			if ($version < 6)
				update_option(c_al2fb_option_version, 6);
		}

		// Handle plugin deactivation
		function Deactivate() {
			global $user_ID;
			get_currentuserinfo();

			// Cleanup if requested
			if (get_user_meta($user_ID, c_al2fb_meta_clean, true)) {
				delete_user_meta($user_ID, c_al2fb_meta_client_id);
				delete_user_meta($user_ID, c_al2fb_meta_app_secret);
				delete_user_meta($user_ID, c_al2fb_meta_access_token);
				delete_user_meta($user_ID, c_al2fb_meta_picture_type);
				delete_user_meta($user_ID, c_al2fb_meta_picture);
				delete_user_meta($user_ID, c_al2fb_meta_picture_default);
				delete_user_meta($user_ID, c_al2fb_meta_page);
				delete_user_meta($user_ID, c_al2fb_meta_page_owner);
				delete_user_meta($user_ID, c_al2fb_meta_use_groups);
				delete_user_meta($user_ID, c_al2fb_meta_group);
				delete_user_meta($user_ID, c_al2fb_meta_caption);
				delete_user_meta($user_ID, c_al2fb_meta_msg);
				delete_user_meta($user_ID, c_al2fb_meta_shortlink);
				delete_user_meta($user_ID, c_al2fb_meta_add_new_page);
				delete_user_meta($user_ID, c_al2fb_meta_trailer);
				delete_user_meta($user_ID, c_al2fb_meta_hyperlink);
				delete_user_meta($user_ID, c_al2fb_meta_share_link);
				delete_user_meta($user_ID, c_al2fb_meta_fb_comments);
				delete_user_meta($user_ID, c_al2fb_meta_fb_comments_postback);
				delete_user_meta($user_ID, c_al2fb_meta_fb_comments_copy);
				delete_user_meta($user_ID, c_al2fb_meta_fb_comments_nolink);
				delete_user_meta($user_ID, c_al2fb_meta_fb_likes);
				delete_user_meta($user_ID, c_al2fb_meta_post_likers);
				delete_user_meta($user_ID, c_al2fb_meta_post_like_button);
				delete_user_meta($user_ID, c_al2fb_meta_like_nohome);
				delete_user_meta($user_ID, c_al2fb_meta_like_noposts);
				delete_user_meta($user_ID, c_al2fb_meta_like_nopages);
				delete_user_meta($user_ID, c_al2fb_meta_like_noarchives);
				delete_user_meta($user_ID, c_al2fb_meta_like_nocategories);
				delete_user_meta($user_ID, c_al2fb_meta_like_layout);
				delete_user_meta($user_ID, c_al2fb_meta_like_faces);
				delete_user_meta($user_ID, c_al2fb_meta_like_width);
				delete_user_meta($user_ID, c_al2fb_meta_like_action);
				delete_user_meta($user_ID, c_al2fb_meta_like_font);
				delete_user_meta($user_ID, c_al2fb_meta_like_colorscheme);
				delete_user_meta($user_ID, c_al2fb_meta_like_link);
				delete_user_meta($user_ID, c_al2fb_meta_like_top);
				delete_user_meta($user_ID, c_al2fb_meta_like_iframe);
				delete_user_meta($user_ID, c_al2fb_meta_post_send_button);
				delete_user_meta($user_ID, c_al2fb_meta_post_combine_buttons);
				delete_user_meta($user_ID, c_al2fb_meta_like_box_width);
				delete_user_meta($user_ID, c_al2fb_meta_like_box_border);
				delete_user_meta($user_ID, c_al2fb_meta_like_box_noheader);
				delete_user_meta($user_ID, c_al2fb_meta_like_box_nostream);
				delete_user_meta($user_ID, c_al2fb_meta_comments_posts);
				delete_user_meta($user_ID, c_al2fb_meta_comments_width);
				delete_user_meta($user_ID, c_al2fb_meta_open_graph);
				delete_user_meta($user_ID, c_al2fb_meta_open_graph_type);
				delete_user_meta($user_ID, c_al2fb_meta_open_graph_admins);
				delete_user_meta($user_ID, c_al2fb_meta_exclude_default);
				delete_user_meta($user_ID, c_al2fb_meta_not_post_list);
				delete_user_meta($user_ID, c_al2fb_meta_fb_encoding);
				delete_user_meta($user_ID, c_al2fb_meta_fb_locale);
				delete_user_meta($user_ID, c_al2fb_meta_clean);
				delete_user_meta($user_ID, c_al2fb_meta_donated);
				delete_user_meta($user_ID, c_al2fb_meta_rated);
			}
		}

		// Initialization
		function Init() {
			// Secret request
			if (isset($_REQUEST['al2fb_check'])) {
				if ($_REQUEST['al2fb_check'] == self::Authorize_secret())
					echo 'OK';
				exit();
			}

			// Image request
			if (isset($_GET['al2fb_image'])) {
				$img = dirname(__FILE__) . '/wp-blue-s.png';
				header('Content-type: image/png');
				readfile($img);
  				exit();
			}

			// Set default capability
			if (!get_option(c_al2fb_option_min_cap))
				update_option(c_al2fb_option_min_cap, 'edit_posts');

			// I18n
			load_plugin_textdomain(c_al2fb_text_domain, false, dirname(plugin_basename(__FILE__)) . '/language/');

			// Enqueue style sheet
			$upload_dir = wp_upload_dir();
			$css_name = $this->Change_extension(basename($this->main_file), '.css');
			if (file_exists($upload_dir['basedir'] . '/' . $css_name))
				$css_url = $upload_dir['baseurl'] . '/' . $css_name;
			else if (file_exists(TEMPLATEPATH . '/' . $css_name))
				$css_url = get_bloginfo('template_directory') . '/' . $css_name;
			else
				$css_url = $this->plugin_url . '/' . $css_name;
			wp_register_style('al2fb_style', $css_url);
			wp_enqueue_style('al2fb_style');

			// Check user capability
			if (current_user_can(get_option(c_al2fb_option_min_cap))) {
				if (is_admin()) {
					// Initiate Facebook authorization
					if (isset($_REQUEST['al2fb_action']) && $_REQUEST['al2fb_action'] == 'init') {
						// Debug info
						update_option(c_al2fb_log_redir_init, date('c'));

						// Get current user
						global $user_ID;
						get_currentuserinfo();

						// Redirect
						$auth_url = self::Authorize_url($user_ID);
						try {
							// Check
							if (ini_get('safe_mode') || ini_get('open_basedir'))
								update_option(c_al2fb_log_redir_check, 'No');
							else {
								$response = self::Request($auth_url, '', 'GET');
								update_option(c_al2fb_log_redir_check, date('c'));
							}
							// Redirect
							wp_redirect($auth_url);
							exit();
						}
						catch (Exception $e) {
							// Register error
							update_option(c_al2fb_log_redir_check, $e->getMessage());
							update_option(c_al2fb_last_error, $e->getMessage());
							update_option(c_al2fb_last_error_time, date('c'));
							// Redirect
							$error_url = admin_url('tools.php?page=' . plugin_basename($this->main_file));
							$error_url .= '&al2fb_action=error';
							$error_url .= '&error=' . urlencode($e->getMessage());
							wp_redirect($error_url);
							exit();
						}
					}
				}

				// Handle Facebook authorization
				self::Authorize();
			}
		}

		// Display admin messages
		function Admin_notices() {
			// Check user capability
			if (current_user_can(get_option(c_al2fb_option_min_cap))) {
				// Get current user
				global $user_ID;
				get_currentuserinfo();

				// Check actions
				if (isset($_REQUEST['al2fb_action'])) {
					// Configuration
					if ($_REQUEST['al2fb_action'] == 'config')
						self::Action_config();

					// Authorization
					else if ($_REQUEST['al2fb_action'] == 'authorize')
						self::Action_authorize();

					// Mail debug info
					else if ($_REQUEST['al2fb_action'] == 'mail')
						self::Action_mail();

					else if ($_REQUEST['al2fb_action'] == 'service')
						self::Action_service();
				}

				self::Check_config();
			}
		}

		// Save settings
		function Action_config() {
			// Security check
			check_admin_referer(c_al2fb_nonce_form);

			// Get current user
			global $user_ID;
			get_currentuserinfo();

			// Default values
			if (empty($_POST[c_al2fb_meta_picture_type]))
				$_POST[c_al2fb_meta_picture_type] = 'wordpress';
			if (empty($_POST[c_al2fb_meta_page]))
				$_POST[c_al2fb_meta_page] = null;
			if (empty($_POST[c_al2fb_meta_page_owner]))
				$_POST[c_al2fb_meta_page_owner] = null;
			if (empty($_POST[c_al2fb_meta_use_groups]))
				$_POST[c_al2fb_meta_use_groups] = null;
			if (empty($_POST[c_al2fb_meta_group]))
				$_POST[c_al2fb_meta_group] = null;
			if (empty($_POST[c_al2fb_meta_caption]))
				$_POST[c_al2fb_meta_caption] = null;
			if (empty($_POST[c_al2fb_meta_msg]))
				$_POST[c_al2fb_meta_msg] = null;
			if (empty($_POST[c_al2fb_meta_shortlink]))
				$_POST[c_al2fb_meta_shortlink] = null;
			if (empty($_POST[c_al2fb_meta_add_new_page]))
				$_POST[c_al2fb_meta_add_new_page] = null;
			if (empty($_POST[c_al2fb_meta_trailer]))
				$_POST[c_al2fb_meta_trailer] = null;
			if (empty($_POST[c_al2fb_meta_hyperlink]))
				$_POST[c_al2fb_meta_hyperlink] = null;
			if (empty($_POST[c_al2fb_meta_share_link]))
				$_POST[c_al2fb_meta_share_link] = null;
			if (empty($_POST[c_al2fb_meta_fb_comments]))
				$_POST[c_al2fb_meta_fb_comments] = null;
			if (empty($_POST[c_al2fb_meta_fb_comments_postback]))
				$_POST[c_al2fb_meta_fb_comments_postback] = null;
			if (empty($_POST[c_al2fb_meta_fb_comments_copy]))
				$_POST[c_al2fb_meta_fb_comments_copy] = null;
			if (empty($_POST[c_al2fb_meta_fb_comments_nolink]))
				$_POST[c_al2fb_meta_fb_comments_nolink] = null;
			if (empty($_POST[c_al2fb_meta_fb_likes]))
				$_POST[c_al2fb_meta_fb_likes] = null;
			if (empty($_POST[c_al2fb_meta_post_likers]))
				$_POST[c_al2fb_meta_post_likers] = null;
			if (empty($_POST[c_al2fb_meta_post_like_button]))
				$_POST[c_al2fb_meta_post_like_button] = null;
			if (empty($_POST[c_al2fb_meta_like_nohome]))
				$_POST[c_al2fb_meta_like_nohome] = null;
			if (empty($_POST[c_al2fb_meta_like_noposts]))
				$_POST[c_al2fb_meta_like_noposts] = null;
			if (empty($_POST[c_al2fb_meta_like_nopages]))
				$_POST[c_al2fb_meta_like_nopages] = null;
			if (empty($_POST[c_al2fb_meta_like_noarchives]))
				$_POST[c_al2fb_meta_like_noarchives] = null;
			if (empty($_POST[c_al2fb_meta_like_nocategories]))
				$_POST[c_al2fb_meta_like_nocategories] = null;
			if (empty($_POST[c_al2fb_meta_like_layout]))
				$_POST[c_al2fb_meta_like_layout] = null;
			if (empty($_POST[c_al2fb_meta_like_faces]))
				$_POST[c_al2fb_meta_like_faces] = null;
			if (empty($_POST[c_al2fb_meta_like_action]))
				$_POST[c_al2fb_meta_like_action] = null;
			if (empty($_POST[c_al2fb_meta_like_font]))
				$_POST[c_al2fb_meta_like_font] = null;
			if (empty($_POST[c_al2fb_meta_like_colorscheme]))
				$_POST[c_al2fb_meta_like_colorscheme] = null;
			if (empty($_POST[c_al2fb_meta_like_top]))
				$_POST[c_al2fb_meta_like_top] = null;
			if (empty($_POST[c_al2fb_meta_post_send_button]))
				$_POST[c_al2fb_meta_post_send_button] = null;
			if (empty($_POST[c_al2fb_meta_post_combine_buttons]))
				$_POST[c_al2fb_meta_post_combine_buttons] = null;
			if (empty($_POST[c_al2fb_meta_like_box_noheader]))
				$_POST[c_al2fb_meta_like_box_noheader] = null;
			if (empty($_POST[c_al2fb_meta_like_box_nostream]))
				$_POST[c_al2fb_meta_like_box_nostream] = null;
			if (empty($_POST[c_al2fb_meta_open_graph]))
				$_POST[c_al2fb_meta_open_graph] = null;
			if (empty($_POST[c_al2fb_meta_exclude_default]))
				$_POST[c_al2fb_meta_exclude_default] = null;
			if (empty($_POST[c_al2fb_meta_not_post_list]))
				$_POST[c_al2fb_meta_not_post_list] = null;
			if (empty($_POST[c_al2fb_meta_clean]))
				$_POST[c_al2fb_meta_clean] = null;
			if (empty($_POST[c_al2fb_meta_donated]))
				$_POST[c_al2fb_meta_donated] = null;
			if (empty($_POST[c_al2fb_meta_rated]))
				$_POST[c_al2fb_meta_rated] = null;

			$_POST[c_al2fb_meta_client_id] = trim($_POST[c_al2fb_meta_client_id]);
			$_POST[c_al2fb_meta_app_secret] = trim($_POST[c_al2fb_meta_app_secret]);
			$_POST[c_al2fb_meta_picture] = trim(stripslashes($_POST[c_al2fb_meta_picture]));
			$_POST[c_al2fb_meta_picture_default] = trim(stripslashes($_POST[c_al2fb_meta_picture_default]));
			$_POST[c_al2fb_meta_trailer] = rtrim(html_entity_decode(stripslashes($_POST[c_al2fb_meta_trailer]), ENT_QUOTES, get_bloginfo('charset')));
			$_POST[c_al2fb_meta_like_width] = trim($_POST[c_al2fb_meta_like_width]);
			$_POST[c_al2fb_meta_like_link] = trim($_POST[c_al2fb_meta_like_link]);
			$_POST[c_al2fb_meta_like_box_width] = trim($_POST[c_al2fb_meta_like_box_width]);
			$_POST[c_al2fb_meta_like_box_border] = trim($_POST[c_al2fb_meta_like_box_border]);
			$_POST[c_al2fb_meta_comments_posts] = trim($_POST[c_al2fb_meta_comments_posts]);
			$_POST[c_al2fb_meta_comments_width] = trim($_POST[c_al2fb_meta_comments_width]);
			$_POST[c_al2fb_meta_open_graph_type] = trim($_POST[c_al2fb_meta_open_graph_type]);
			$_POST[c_al2fb_meta_open_graph_admins] = trim($_POST[c_al2fb_meta_open_graph_admins]);
			$_POST[c_al2fb_meta_fb_encoding] = trim($_POST[c_al2fb_meta_fb_encoding]);
			$_POST[c_al2fb_meta_fb_locale] = trim($_POST[c_al2fb_meta_fb_locale]);

			// Prevent losing selected page
			if (!self::Is_authorized($user_ID) ||
				(get_user_meta($user_ID, c_al2fb_meta_use_groups, true) &&
				get_user_meta($user_ID, c_al2fb_meta_group, true)))
				$_POST[c_al2fb_meta_page] = get_user_meta($user_ID, c_al2fb_meta_page, true);

			// Prevent losing selected group
			if (!self::Is_authorized($user_ID) || !get_user_meta($user_ID, c_al2fb_meta_use_groups, true))
				$_POST[c_al2fb_meta_group] = get_user_meta($user_ID, c_al2fb_meta_group, true);

			// App ID or secret changed
			if (get_user_meta($user_ID, c_al2fb_meta_client_id, true) != $_POST[c_al2fb_meta_client_id] ||
				get_user_meta($user_ID, c_al2fb_meta_app_secret, true) != $_POST[c_al2fb_meta_app_secret])
				delete_user_meta($user_ID, c_al2fb_meta_access_token);

			// Page owner changed
			if ($_POST[c_al2fb_meta_page_owner] && !get_user_meta($user_ID, c_al2fb_meta_page_owner, true))
				delete_user_meta($user_ID, c_al2fb_meta_access_token);

			// Use groups changed
			if ($_POST[c_al2fb_meta_use_groups] && !get_user_meta($user_ID, c_al2fb_meta_use_groups, true))
				if (!get_user_meta($user_ID, c_al2fb_meta_group, true))
					delete_user_meta($user_ID, c_al2fb_meta_access_token);

			// Like or send button enabled
			if ((!get_user_meta($user_ID, c_al2fb_meta_post_like_button, true) && !empty($_POST[c_al2fb_meta_post_like_button])) ||
				(!get_user_meta($user_ID, c_al2fb_meta_post_send_button, true) && !empty($_POST[c_al2fb_meta_post_send_button])))
				$_POST[c_al2fb_meta_open_graph] = true;

			// Update user options
			update_user_meta($user_ID, c_al2fb_meta_client_id, $_POST[c_al2fb_meta_client_id]);
			update_user_meta($user_ID, c_al2fb_meta_app_secret, $_POST[c_al2fb_meta_app_secret]);
			update_user_meta($user_ID, c_al2fb_meta_picture_type, $_POST[c_al2fb_meta_picture_type]);
			update_user_meta($user_ID, c_al2fb_meta_picture, $_POST[c_al2fb_meta_picture]);
			update_user_meta($user_ID, c_al2fb_meta_picture_default, $_POST[c_al2fb_meta_picture_default]);
			update_user_meta($user_ID, c_al2fb_meta_page, $_POST[c_al2fb_meta_page]);
			update_user_meta($user_ID, c_al2fb_meta_page_owner, $_POST[c_al2fb_meta_page_owner]);
			update_user_meta($user_ID, c_al2fb_meta_use_groups, $_POST[c_al2fb_meta_use_groups]);
			update_user_meta($user_ID, c_al2fb_meta_group, $_POST[c_al2fb_meta_group]);
			update_user_meta($user_ID, c_al2fb_meta_caption, $_POST[c_al2fb_meta_caption]);
			update_user_meta($user_ID, c_al2fb_meta_msg, $_POST[c_al2fb_meta_msg]);
			update_user_meta($user_ID, c_al2fb_meta_shortlink, $_POST[c_al2fb_meta_shortlink]);
			update_user_meta($user_ID, c_al2fb_meta_add_new_page, $_POST[c_al2fb_meta_add_new_page]);
			update_user_meta($user_ID, c_al2fb_meta_trailer, $_POST[c_al2fb_meta_trailer]);
			update_user_meta($user_ID, c_al2fb_meta_hyperlink, $_POST[c_al2fb_meta_hyperlink]);
			update_user_meta($user_ID, c_al2fb_meta_share_link, $_POST[c_al2fb_meta_share_link]);
			update_user_meta($user_ID, c_al2fb_meta_fb_comments, $_POST[c_al2fb_meta_fb_comments]);
			update_user_meta($user_ID, c_al2fb_meta_fb_comments_postback, $_POST[c_al2fb_meta_fb_comments_postback]);
			update_user_meta($user_ID, c_al2fb_meta_fb_comments_copy, $_POST[c_al2fb_meta_fb_comments_copy]);
			update_user_meta($user_ID, c_al2fb_meta_fb_comments_nolink, $_POST[c_al2fb_meta_fb_comments_nolink]);
			update_user_meta($user_ID, c_al2fb_meta_fb_likes, $_POST[c_al2fb_meta_fb_likes]);
			update_user_meta($user_ID, c_al2fb_meta_post_likers, $_POST[c_al2fb_meta_post_likers]);
			update_user_meta($user_ID, c_al2fb_meta_post_like_button, $_POST[c_al2fb_meta_post_like_button]);
			update_user_meta($user_ID, c_al2fb_meta_like_nohome, $_POST[c_al2fb_meta_like_nohome]);
			update_user_meta($user_ID, c_al2fb_meta_like_noposts, $_POST[c_al2fb_meta_like_noposts]);
			update_user_meta($user_ID, c_al2fb_meta_like_nopages, $_POST[c_al2fb_meta_like_nopages]);
			update_user_meta($user_ID, c_al2fb_meta_like_noarchives, $_POST[c_al2fb_meta_like_noarchives]);
			update_user_meta($user_ID, c_al2fb_meta_like_nocategories, $_POST[c_al2fb_meta_like_nocategories]);
			update_user_meta($user_ID, c_al2fb_meta_like_layout, $_POST[c_al2fb_meta_like_layout]);
			update_user_meta($user_ID, c_al2fb_meta_like_faces, $_POST[c_al2fb_meta_like_faces]);
			update_user_meta($user_ID, c_al2fb_meta_like_width, $_POST[c_al2fb_meta_like_width]);
			update_user_meta($user_ID, c_al2fb_meta_like_action, $_POST[c_al2fb_meta_like_action]);
			update_user_meta($user_ID, c_al2fb_meta_like_font, $_POST[c_al2fb_meta_like_font]);
			update_user_meta($user_ID, c_al2fb_meta_like_colorscheme, $_POST[c_al2fb_meta_like_colorscheme]);
			update_user_meta($user_ID, c_al2fb_meta_like_link, $_POST[c_al2fb_meta_like_link]);
			update_user_meta($user_ID, c_al2fb_meta_like_top, $_POST[c_al2fb_meta_like_top]);
			update_user_meta($user_ID, c_al2fb_meta_post_send_button, $_POST[c_al2fb_meta_post_send_button]);
			update_user_meta($user_ID, c_al2fb_meta_post_combine_buttons, $_POST[c_al2fb_meta_post_combine_buttons]);
			update_user_meta($user_ID, c_al2fb_meta_like_box_width, $_POST[c_al2fb_meta_like_box_width]);
			update_user_meta($user_ID, c_al2fb_meta_like_box_border, $_POST[c_al2fb_meta_like_box_border]);
			update_user_meta($user_ID, c_al2fb_meta_like_box_noheader, $_POST[c_al2fb_meta_like_box_noheader]);
			update_user_meta($user_ID, c_al2fb_meta_like_box_nostream, $_POST[c_al2fb_meta_like_box_nostream]);
			update_user_meta($user_ID, c_al2fb_meta_comments_posts, $_POST[c_al2fb_meta_comments_posts]);
			update_user_meta($user_ID, c_al2fb_meta_comments_width, $_POST[c_al2fb_meta_comments_width]);
			update_user_meta($user_ID, c_al2fb_meta_open_graph, $_POST[c_al2fb_meta_open_graph]);
			update_user_meta($user_ID, c_al2fb_meta_open_graph_type, $_POST[c_al2fb_meta_open_graph_type]);
			update_user_meta($user_ID, c_al2fb_meta_open_graph_admins, $_POST[c_al2fb_meta_open_graph_admins]);
			update_user_meta($user_ID, c_al2fb_meta_exclude_default, $_POST[c_al2fb_meta_exclude_default]);
			update_user_meta($user_ID, c_al2fb_meta_not_post_list, $_POST[c_al2fb_meta_not_post_list]);
			update_user_meta($user_ID, c_al2fb_meta_fb_encoding, $_POST[c_al2fb_meta_fb_encoding]);
			update_user_meta($user_ID, c_al2fb_meta_fb_locale, $_POST[c_al2fb_meta_fb_locale]);
			update_user_meta($user_ID, c_al2fb_meta_clean, $_POST[c_al2fb_meta_clean]);
			update_user_meta($user_ID, c_al2fb_meta_donated, $_POST[c_al2fb_meta_donated]);
			update_user_meta($user_ID, c_al2fb_meta_rated, $_POST[c_al2fb_meta_rated]);

			if (isset($_REQUEST['debug'])) {
				if (empty($_POST[c_al2fb_meta_access_token]))
					$_POST[c_al2fb_meta_access_token] = null;
				$_POST[c_al2fb_meta_access_token] = trim($_POST[c_al2fb_meta_access_token]);
				update_user_meta($user_ID, c_al2fb_meta_access_token, $_POST[c_al2fb_meta_access_token]);
			}

			// Update admin options
			if (current_user_can('manage_options')) {
				if (empty($_POST[c_al2fb_option_app_share]))
					$_POST[c_al2fb_option_app_share] = null;
				else
					$_POST[c_al2fb_option_app_share] = $user_ID;
				if (is_multisite())
					update_site_option(c_al2fb_option_app_share, $_POST[c_al2fb_option_app_share]);
				else
					update_option(c_al2fb_option_app_share, $_POST[c_al2fb_option_app_share]);

				if (empty($_POST[c_al2fb_option_timeout]))
					$_POST[c_al2fb_option_timeout] = null;
				if (empty($_POST[c_al2fb_option_nonotice]))
					$_POST[c_al2fb_option_nonotice] = null;
				if (empty($_POST[c_al2fb_option_min_cap]))
					$_POST[c_al2fb_option_min_cap] = null;
				if (empty($_POST[c_al2fb_option_noverifypeer]))
					$_POST[c_al2fb_option_noverifypeer] = null;

				$_POST[c_al2fb_option_msg_refresh] = trim($_POST[c_al2fb_option_msg_refresh]);
				$_POST[c_al2fb_option_max_descr] = trim($_POST[c_al2fb_option_max_descr]);
				$_POST[c_al2fb_option_max_text] = trim($_POST[c_al2fb_option_max_text]);
				$_POST[c_al2fb_option_exclude_type] = trim($_POST[c_al2fb_option_exclude_type]);
				$_POST[c_al2fb_option_exclude_cat] = trim($_POST[c_al2fb_option_exclude_cat]);
				$_POST[c_al2fb_option_css] = trim($_POST[c_al2fb_option_css]);

				update_option(c_al2fb_option_timeout, $_POST[c_al2fb_option_timeout]);
				update_option(c_al2fb_option_nonotice, $_POST[c_al2fb_option_nonotice]);
				update_option(c_al2fb_option_min_cap, $_POST[c_al2fb_option_min_cap]);
				update_option(c_al2fb_option_msg_refresh, $_POST[c_al2fb_option_msg_refresh]);
				update_option(c_al2fb_option_max_descr, $_POST[c_al2fb_option_max_descr]);
				update_option(c_al2fb_option_max_text, $_POST[c_al2fb_option_max_text]);
				update_option(c_al2fb_option_exclude_type, $_POST[c_al2fb_option_exclude_type]);
				update_option(c_al2fb_option_exclude_cat, $_POST[c_al2fb_option_exclude_cat]);
				update_option(c_al2fb_option_noverifypeer, $_POST[c_al2fb_option_noverifypeer]);
				update_option(c_al2fb_option_css, $_POST[c_al2fb_option_css]);

				if (isset($_REQUEST['debug'])) {
					if (empty($_POST[c_al2fb_option_siteurl]))
						$_POST[c_al2fb_option_siteurl] = null;
					if (empty($_POST[c_al2fb_option_nocurl]))
						$_POST[c_al2fb_option_nocurl] = null;
					if (empty($_POST[c_al2fb_option_use_pp]))
						$_POST[c_al2fb_option_use_pp] = null;
					if (empty($_POST[c_al2fb_option_debug]))
						$_POST[c_al2fb_option_debug] = null;

					update_option(c_al2fb_option_siteurl, $_POST[c_al2fb_option_siteurl]);
					update_option(c_al2fb_option_nocurl, $_POST[c_al2fb_option_nocurl]);
					update_option(c_al2fb_option_use_pp, $_POST[c_al2fb_option_use_pp]);
					update_option(c_al2fb_option_debug, $_POST[c_al2fb_option_debug]);
				}
			}

			// Show result
			echo '<div id="message" class="updated fade al2fb_notice"><p>' . __('Settings updated', c_al2fb_text_domain) . '</p></div>';
		}

		// Get token
		function Action_authorize() {
			// Get current user
			global $user_ID;
			get_currentuserinfo();

			// Server-side flow authorization
			if (isset($_REQUEST['code'])) {
				try {
					// Get & store token
					$access_token = self::Get_fb_token($user_ID);
					update_option(c_al2fb_log_auth_time, date('c'));
					update_user_meta($user_ID, c_al2fb_meta_access_token, $access_token);
					if (get_option(c_al2fb_option_version) <= 6)
						update_option(c_al2fb_option_version, 7);
					delete_option(c_al2fb_last_error);
					delete_option(c_al2fb_last_error_time);
					echo '<div id="message" class="updated fade al2fb_notice"><p>' . __('Authorized, go posting!', c_al2fb_text_domain) . '</p></div>';
				}
				catch (Exception $e) {
					delete_user_meta($user_ID, c_al2fb_meta_access_token);
					update_option(c_al2fb_last_error, $e->getMessage());
					update_option(c_al2fb_last_error_time, date('c'));
					echo '<div id="message" class="error fade al2fb_error"><p>' . htmlspecialchars($e->getMessage(), ENT_QUOTES, get_bloginfo('charset')) . '</p></div>';
				}
			}

			// Authorization error
			else if (isset($_REQUEST['error'])) {
				delete_user_meta($user_ID, c_al2fb_meta_access_token);
				$faq = 'http://wordpress.org/extend/plugins/add-link-to-facebook/faq/';
				$msg = stripslashes($_REQUEST['error_description']);
				$msg .= ' error: ' . stripslashes($_REQUEST['error']);
				$msg .= ' reason: ' . stripslashes($_REQUEST['error_reason']);
				update_option(c_al2fb_last_error, $msg);
				update_option(c_al2fb_last_error_time, date('c'));
				$msg .= '<br /><br />Most errors are described in <a href="' . $faq . '" target="_blank">the FAQ</a>';
				echo '<div id="message" class="error fade al2fb_error"><p>' . htmlspecialchars($msg, ENT_QUOTES, get_bloginfo('charset')) . '</p></div>';
			}
		}

		// Send debug info
		function Action_mail() {
			// Check security
			check_admin_referer(c_al2fb_nonce_form);

			// Build headers
			$headers = 'From: ' . stripslashes($_POST[c_al2fb_mail_name]) . '<' . stripslashes($_POST[c_al2fb_mail_email]) . '>' . "\r\n";
			$headers .= 'X-Mailer: AL2FB' . "\r\n";
			$headers .= 'MIME-Version: 1.0' . "\r\n";
			$headers .= 'Content-type: text/html; charset=' . get_bloginfo('charset') . "\r\n";

			// Build message
			$message = '<html><head><title>Add Link to Facebook</title></head><body>';
			$message .= '<p>' . nl2br(htmlspecialchars(stripslashes($_POST[c_al2fb_mail_msg]), ENT_QUOTES, get_bloginfo('charset'))) . '</p>';
			$message .= '<hr />';
			$message .= self::Debug_info();
			$message .= '</body></html>';
			if (mail('marcel@bokhorst.biz', '[Add Link to Facebook] Debug information', $message, $headers))
				echo '<div id="message" class="updated fade al2fb_notice"><p>' . __('Debug information sent', c_al2fb_text_domain) . '</p></div>';
			else
				echo '<div id="message" class="error fade al2fb_error"><p>' . __('Sending debug information failed', c_al2fb_text_domain) . '</p></div>';
		}

		// Handle service message
		function Action_service() {
			// Security check
			check_admin_referer(c_al2fb_nonce_form);

			// Get current user
			global $user_ID;
			get_currentuserinfo();

			// Check messages
			$msgs = get_user_meta($user_ID, c_al2fb_meta_service, false);
			if ($msgs)
				foreach ($msgs as $msg)
					if ($msg->id == $_POST['al2fb_msgid'])
						delete_user_meta($user_ID, c_al2fb_meta_service, $msg);
		}

		// Display notices
		function Check_config() {
			// Get current user
			global $user_ID;
			get_currentuserinfo();

			// Check config/authorization
			$uri = $_SERVER['REQUEST_URI'];
			$url = 'tools.php?page=' . plugin_basename($this->main_file);

			$nonotice = get_option(c_al2fb_option_nonotice);
			if (is_multisite())
				$nonotice = $nonotice || get_site_option(c_al2fb_option_app_share);
			else
				$nonotice = $nonotice || get_option(c_al2fb_option_app_share);
			$donotice = ($nonotice ? strpos($uri, $url) !== false : true);

			if ($donotice) {
				if (!get_user_meta($user_ID, c_al2fb_meta_client_id, true) ||
					!get_user_meta($user_ID, c_al2fb_meta_app_secret, true)) {
					$notice = __('needs configuration', c_al2fb_text_domain);
					$anchor = 'configure';
				}
				else if (!self::Is_authorized($user_ID)) {
					$notice = __('needs authorization', c_al2fb_text_domain);
					$anchor = 'authorize';
				}
				else {
					$version = get_option(c_al2fb_option_version);
					if ($version && $version <= 6) {
						$notice = __('should be authorized again to show Facebook messages in the widget', c_al2fb_text_domain);
						$anchor = 'authorize';
					}
				}
				if (!empty($notice)) {
					echo '<div class="error fade al2fb_error"><p>';
					_e('Add Link to Facebook', c_al2fb_text_domain);
					echo ' <a href="' . $url . '#' . $anchor . '">' . $notice . '</a></p></div>';
				}
			}

			// Check for error
			if (isset($_REQUEST['al2fb_action']) && $_REQUEST['al2fb_action'] == 'error') {
				$faq = 'http://wordpress.org/extend/plugins/add-link-to-facebook/faq/';
				$msg = htmlspecialchars(stripslashes($_REQUEST['error']), ENT_QUOTES, get_bloginfo('charset'));
				$msg .= '<br /><br />Most errors are described in <a href="' . $faq . '" target="_blank">the FAQ</a>';
				echo '<div id="message" class="error fade al2fb_error"><p>' . $msg . '</p></div>';
			}

			// Check for post errors
			$posts = new WP_Query(array(
				'author' => $user_ID,
				'meta_key' => c_al2fb_meta_error,
				'posts_per_page' => 5));
			while ($posts->have_posts()) {
				$posts->next_post();
				$error = get_post_meta($posts->post->ID, c_al2fb_meta_error, true);
				if (!empty($error)) {
					echo '<div id="message" class="error fade al2fb_error"><p>';
					echo __('Add Link to Facebook', c_al2fb_text_domain) . ' - ';
					edit_post_link($posts->post->post_title, null, null, $posts->post->ID);
					echo ': ' . htmlspecialchars($error, ENT_QUOTES, get_bloginfo('charset')) . '</p></div>';
				}
			}

			// Check for rating notice
			if ($donotice && !get_user_meta($user_ID, c_al2fb_meta_rated, true)) {
				echo '<div id="message" class="error fade al2fb_error"><p>';
				$msg = __('If you like the Add Link to Facebook plugin, please rate it on <a href="[wordpress]" target="_blank">wordpress.org</a>.<br />If the average rating is low, it makes no sense to support this plugin any longer.<br />You can disable this notice by checking the option "I have rated this plugin" on the <a href="[settings]">settings page</a>.', c_al2fb_text_domain);
				$msg = str_replace('[wordpress]', 'http://wordpress.org/extend/plugins/add-link-to-facebook/', $msg);
				$msg = str_replace('[settings]', $url, $msg);
				echo $msg . '</p></div>';
			}

			// Check for messages
			$msgs = get_user_meta($user_ID, c_al2fb_meta_service, false);
			if ($msgs)
				foreach ($msgs as $msg) {
?>
					<div class="updated fade al2fb_service"><p>
					<form method="post" action="<?php echo $url; ?>">
					<input type="hidden" name="al2fb_action" value="service">
					<input type="hidden" name="al2fb_msgid" value="<?php echo $msg->id; ?>">
					<?php wp_nonce_field(c_al2fb_nonce_form); ?>
					<h3><?php _e('Add Link to Facebook', c_al2fb_text_domain); ?></h3>
					<span><?php echo $msg->msg; ?></span>
					<p class="submit">
					<input type="submit" class="button-primary" value="<?php _e('Ok', c_al2fb_text_domain) ?>" />
					</p>
					</form>
					</p></div>
<?php
				}
		}

		// Register options page
		function Admin_menu() {
			// Get current user
			global $user_ID;
			get_currentuserinfo();

			// Check for app share
			if (is_multisite())
				$shared_user_ID = get_site_option(c_al2fb_option_app_share);
			else
				$shared_user_ID = get_option(c_al2fb_option_app_share);
			if ($shared_user_ID && $shared_user_ID != $user_ID)
				return;

			if (function_exists('add_management_page'))
				add_management_page(
					__('Add Link to Facebook', c_al2fb_text_domain) . ' ' . __('Administration', c_al2fb_text_domain),
					__('Add Link to Facebook', c_al2fb_text_domain),
					get_option(c_al2fb_option_min_cap),
					$this->main_file,
					array(&$this, 'Administration'));
		}

		function Plugin_action_links($links, $file) {
			if ($file == plugin_basename($this->main_file)) {
				if (current_user_can(get_option(c_al2fb_option_min_cap))) {
					// Get current user
					global $user_ID;
					get_currentuserinfo();

					// Check for shared app
					if (is_multisite())
						$shared_user_ID = get_site_option(c_al2fb_option_app_share);
					else
						$shared_user_ID = get_option(c_al2fb_option_app_share);
					if (!$shared_user_ID || $shared_user_ID == $user_ID) {
						// Add settings link
						$config_url = admin_url('tools.php?page=' . plugin_basename($this->main_file));
						$links[] = '<a href="' . $config_url . '">' . __('Settings', c_al2fb_text_domain) . '</a>';
					}
				}
			}
			return $links;
		}

		// Handle option page
		function Administration() {
			// Security check
			if (!current_user_can(get_option(c_al2fb_option_min_cap)))
				die('Unauthorized');

			// Get current user
			global $user_ID;
			get_currentuserinfo();

			$charset = get_bloginfo('charset');
			$config_url = admin_url('tools.php?page=' . plugin_basename($this->main_file));
			if (isset($_REQUEST['debug']))
				$config_url .= '&debug=1';

			// Decode picture type
			$pic_type = get_user_meta($user_ID, c_al2fb_meta_picture_type, true);
			$pic_wordpress = ($pic_type == 'wordpress' ? ' checked' : '');
			$pic_media = ($pic_type == 'media' ? ' checked' : '');
			$pic_featured = ($pic_type == 'featured' ? ' checked' : '');
			$pic_facebook = ($pic_type == 'facebook' ? ' checked' : '');
			$pic_post = ($pic_type == 'post' ? ' checked' : '');
			$pic_avatar = ($pic_type == 'avatar' ? ' checked' : '');
			$pic_userphoto = ($pic_type == 'userphoto' ? ' checked' : '');
			$pic_custom = ($pic_type == 'custom' ? ' checked' : '');

			if (!current_theme_supports('post-thumbnails') ||
				!function_exists('get_post_thumbnail_id') ||
				!function_exists('wp_get_attachment_image_src'))
				$pic_featured .= ' disabled';

			if (!in_array('user-photo/user-photo.php', get_option('active_plugins')))
				$pic_userphoto .= ' disabled';

			// Like button
			$like_layout = get_user_meta($user_ID, c_al2fb_meta_like_layout, true);
			$like_layout_standard = ($like_layout == 'standard' ? ' checked' : '');
			$like_layout_button = ($like_layout == 'button_count' ? ' checked' : '');
			$like_layout_box = ($like_layout == 'box_count' ? ' checked' : '');
			$like_action = get_user_meta($user_ID, c_al2fb_meta_like_action, true);
			$like_action_like = ($like_action == 'like' ? ' checked' : '');
			$like_action_recommend = ($like_action == 'recommend' ? ' checked' : '');
			$like_font = get_user_meta($user_ID, c_al2fb_meta_like_font, true);
			$like_color = get_user_meta($user_ID, c_al2fb_meta_like_colorscheme, true);
			$like_color_light = ($like_color == 'light' ? ' checked' : '');
			$like_color_dark = ($like_color == 'dark' ? ' checked' : '');

			// Comment link option
			$comments_nolink = get_user_meta($user_ID, c_al2fb_meta_fb_comments_nolink, true);
			if (empty($comments_nolink))
				$comments_nolink = 'author';
			else if ($comments_nolink == 'on')
				$comments_nolink = 'none';
			$comments_nolink_none = ($comments_nolink == 'none' ? ' checked' : '');
			$comments_nolink_author = ($comments_nolink == 'author' ? ' checked' : '');
			$comments_nolink_link = ($comments_nolink == 'link' ? ' checked' : '');

			// Sustainable Plugins Sponsorship Network
			self::Render_sponsorship();
?>
			<div class="wrap">
			<h2><?php _e('Add Link to Facebook', c_al2fb_text_domain); ?></h2>
<?php
			// Check connectivity
			if (!ini_get('allow_url_fopen') && !function_exists('curl_init'))
				echo '<div id="message" class="error fade al2fb_error"><p>' . __('Your server may not allow external connections', c_al2fb_text_domain) . '</p></div>';

			self::Render_debug_info();
			self::Render_resources();
?>
			<div class="al2fb_options">

			<div class="al2fb_instructions" style="width: 550px;">
			<strong><?php _e('Please be aware that comment integration or showing Facebook messages in the widget could harm the privacy of other Facebook users!', c_al2fb_text_domain); ?></strong>
			</div>

<?php		if (get_user_meta($user_ID, c_al2fb_meta_client_id, true) &&
				get_user_meta($user_ID, c_al2fb_meta_app_secret, true)) {
?>
				<hr />
				<a name="authorize"></a>
				<h3><?php _e('Authorization', c_al2fb_text_domain); ?></h3>
<?php
				if (self::Is_authorized($user_ID)) {
					echo '<span>' . __('Plugin is authorized', c_al2fb_text_domain) . '</span><br />';
					// Get page name
					try {
						$me = self::Get_fb_me($user_ID, false);
						if ($me != null) {
							_e('Links will be added to', c_al2fb_text_domain);
							echo ' <a href="' . $me->link . '" target="_blank">' . htmlspecialchars($me->name, ENT_QUOTES, $charset);
							if (!empty($me->category))
								echo ' - ' . htmlspecialchars($me->category, ENT_QUOTES, $charset);
							echo '</a>';
						}
					}
					catch (Exception $e) {
						echo '<div id="message" class="error fade al2fb_error"><p>' . htmlspecialchars($e->getMessage(), ENT_QUOTES, $charset) . '</p></div>';
					}
				}
?>
				<table>
				<tr><td>
				<form method="get" action="<?php echo admin_url('tools.php?page=' . plugin_basename($this->main_file)); ?>">
				<input type="hidden" name="al2fb_action" value="init">
				<p class="submit">
				<input type="submit" class="button-primary" value="<?php _e('Authorize', c_al2fb_text_domain) ?>" />
				</p>
				</form>
				</td>

<?php			if (!get_user_meta($user_ID, c_al2fb_meta_donated, true)) { ?>
					<td>
					<form action="https://www.paypal.com/cgi-bin/webscr" method="post">
					<input type="hidden" name="cmd" value="_s-xclick">
					<input type="hidden" name="encrypted" value="-----BEGIN PKCS7-----MIIHZwYJKoZIhvcNAQcEoIIHWDCCB1QCAQExggEwMIIBLAIBADCBlDCBjjELMAkGA1UEBhMCVVMxCzAJBgNVBAgTAkNBMRYwFAYDVQQHEw1Nb3VudGFpbiBWaWV3MRQwEgYDVQQKEwtQYXlQYWwgSW5jLjETMBEGA1UECxQKbGl2ZV9jZXJ0czERMA8GA1UEAxQIbGl2ZV9hcGkxHDAaBgkqhkiG9w0BCQEWDXJlQHBheXBhbC5jb20CAQAwDQYJKoZIhvcNAQEBBQAEgYApWh+oUn2CtY+7zwU5zu5XKj096Mj0sxBhri5/lYV7i7B+JwhAC1ta7kkj2tXAbR3kcjVyNA9n5kKBUND+5Lu7HiNlnn53eFpl3wtPBBvPZjPricLI144ZRNdaaAVtY32pWX7tzyWJaHgClKWp5uHaerSZ70MqUK8yqzt0V2KKDjELMAkGBSsOAwIaBQAwgeQGCSqGSIb3DQEHATAUBggqhkiG9w0DBwQIn3eeOKy6QZGAgcDKPGjy/6+i9RXscvkaHQqjbFI1bE36XYcrttae+aXmkeicJpsm+Se3NCBtY9yt6nxwwmxhqNTDNRwL98t8EXNkLg6XxvuOql0UnWlfEvRo+/66fqImq2jsro31xtNKyqJ1Qhx+vsf552j3xmdqdbg1C9IHNYQ7yfc6Bhx914ur8UPKYjy66KIuZBCXWge8PeYjuiswpOToRN8BU6tV4OW1ndrUO9EKZd5UHW/AOX0mjXc2HFwRoD22nrapVFIsjt2gggOHMIIDgzCCAuygAwIBAgIBADANBgkqhkiG9w0BAQUFADCBjjELMAkGA1UEBhMCVVMxCzAJBgNVBAgTAkNBMRYwFAYDVQQHEw1Nb3VudGFpbiBWaWV3MRQwEgYDVQQKEwtQYXlQYWwgSW5jLjETMBEGA1UECxQKbGl2ZV9jZXJ0czERMA8GA1UEAxQIbGl2ZV9hcGkxHDAaBgkqhkiG9w0BCQEWDXJlQHBheXBhbC5jb20wHhcNMDQwMjEzMTAxMzE1WhcNMzUwMjEzMTAxMzE1WjCBjjELMAkGA1UEBhMCVVMxCzAJBgNVBAgTAkNBMRYwFAYDVQQHEw1Nb3VudGFpbiBWaWV3MRQwEgYDVQQKEwtQYXlQYWwgSW5jLjETMBEGA1UECxQKbGl2ZV9jZXJ0czERMA8GA1UEAxQIbGl2ZV9hcGkxHDAaBgkqhkiG9w0BCQEWDXJlQHBheXBhbC5jb20wgZ8wDQYJKoZIhvcNAQEBBQADgY0AMIGJAoGBAMFHTt38RMxLXJyO2SmS+Ndl72T7oKJ4u4uw+6awntALWh03PewmIJuzbALScsTS4sZoS1fKciBGoh11gIfHzylvkdNe/hJl66/RGqrj5rFb08sAABNTzDTiqqNpJeBsYs/c2aiGozptX2RlnBktH+SUNpAajW724Nv2Wvhif6sFAgMBAAGjge4wgeswHQYDVR0OBBYEFJaffLvGbxe9WT9S1wob7BDWZJRrMIG7BgNVHSMEgbMwgbCAFJaffLvGbxe9WT9S1wob7BDWZJRroYGUpIGRMIGOMQswCQYDVQQGEwJVUzELMAkGA1UECBMCQ0ExFjAUBgNVBAcTDU1vdW50YWluIFZpZXcxFDASBgNVBAoTC1BheVBhbCBJbmMuMRMwEQYDVQQLFApsaXZlX2NlcnRzMREwDwYDVQQDFAhsaXZlX2FwaTEcMBoGCSqGSIb3DQEJARYNcmVAcGF5cGFsLmNvbYIBADAMBgNVHRMEBTADAQH/MA0GCSqGSIb3DQEBBQUAA4GBAIFfOlaagFrl71+jq6OKidbWFSE+Q4FqROvdgIONth+8kSK//Y/4ihuE4Ymvzn5ceE3S/iBSQQMjyvb+s2TWbQYDwcp129OPIbD9epdr4tJOUNiSojw7BHwYRiPh58S1xGlFgHFXwrEBb3dgNbMUa+u4qectsMAXpVHnD9wIyfmHMYIBmjCCAZYCAQEwgZQwgY4xCzAJBgNVBAYTAlVTMQswCQYDVQQIEwJDQTEWMBQGA1UEBxMNTW91bnRhaW4gVmlldzEUMBIGA1UEChMLUGF5UGFsIEluYy4xEzARBgNVBAsUCmxpdmVfY2VydHMxETAPBgNVBAMUCGxpdmVfYXBpMRwwGgYJKoZIhvcNAQkBFg1yZUBwYXlwYWwuY29tAgEAMAkGBSsOAwIaBQCgXTAYBgkqhkiG9w0BCQMxCwYJKoZIhvcNAQcBMBwGCSqGSIb3DQEJBTEPFw0xMTAyMDcwOTQ4MTlaMCMGCSqGSIb3DQEJBDEWBBQOOy+JroeRlZL7jGU/azSibWz1fjANBgkqhkiG9w0BAQEFAASBgCUXDO9KLIuy/XJwBa6kMWi0U1KFarbN9568i14mmZCFDvBmexRKhnSfqx+QLzdpNENBHKON8vNKanmL9jxgtyc88WAtrP/LqN4tmSrr0VB5wrds/viLxWZfu4Spb+YOTpo+z2hjXCJzVSV3EDvoxzHEN1Haxrvr1gWNhWzvVN3q-----END PKCS7-----">
					<input type="image" src="https://www.paypal.com/en_US/i/btn/btn_donate_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
					</form>
					</td>
					<td>
					<a class="FlattrButton" style="display:none;" rev="flattr;button:compact;" href="http://wordpress.org/extend/plugins/add-link-to-facebook/"></a>
					<noscript><a href="http://flattr.com/thing/315162/Add-Link-to-Facebook-WordPress-plugin" target="_blank">
					<img src="http://api.flattr.com/button/flattr-badge-large.png" alt="Flattr this" title="Flattr this" border="0" /></a></noscript>
					</td>
<?php			} ?>
				</tr>
				</table>
<?php			if (!get_user_meta($user_ID, c_al2fb_meta_donated, true)) { ?>
					<span><a href="http://www.bitcoin.org/">Bitcoin</a>: <code>19Y8QKKK4cpBMZ64UtAT4C6MEwknUerNDe</code></span>
<?php			} ?>

<?php		} ?>

			<hr />
			<a name="configure"></a>
			<h3><?php _e('Easy setup', c_al2fb_text_domain); ?></h3>

			<form method="post" action="<?php echo $config_url; ?>">
			<input type="hidden" name="al2fb_action" value="config">
			<?php wp_nonce_field(c_al2fb_nonce_form); ?>

			<div id="al2fb_app_private">
			<div class="al2fb_instructions">
			<h4><?php _e('To get an App ID and App Secret you have to create a Facebook application', c_al2fb_text_domain); ?></h4>
			<span><strong><?php _e('You have to fill in the following:', c_al2fb_text_domain); ?></strong></span>
			<table>
				<tr>
					<td><span class="al2fb_label"><strong><?php _e('App Name:', c_al2fb_text_domain); ?></strong></span></td>
					<td><span class="al2fb_data"><?php _e('Anything you like, will appear as "via ..." below the message', c_al2fb_text_domain); ?></span></td>
				</tr>
				<tr>
					<td><span class="al2fb_label"><strong><?php _e('Web Site > Site URL:', c_al2fb_text_domain); ?></strong></span></td>
					<td><span class="al2fb_data"><?php echo htmlspecialchars(self::Redirect_uri(), ENT_QUOTES, $charset); ?></span></td>
				</tr>
			</table>
			<a href="http://developers.facebook.com/" target="_blank"><?php _e('Click here to create', c_al2fb_text_domain); ?></a>
			<span><?php _e('and navigate to \'<em>My Apps</em>\' and then to \'<em>Set Up New App</em>\'', c_al2fb_text_domain); ?></span>
			</div>

			<table class="form-table al2fb_border">
			<tr valign="top"><th scope="row">
				<label for="al2fb_client_id"><strong><?php _e('App ID:', c_al2fb_text_domain); ?></strong></label>
			</th><td>
				<input id="al2fb_client_id" class="al2fb_text" name="<?php echo c_al2fb_meta_client_id; ?>" type="text" value="<?php echo get_user_meta($user_ID, c_al2fb_meta_client_id, true); ?>" />
			</td></tr>

			<tr valign="top"><th scope="row">
				<label for="al2fb_app_secret"><strong><?php _e('App Secret:', c_al2fb_text_domain); ?></strong></label>
			</th><td>
				<input id="al2fb_app_secret" class="al2fb_text" name="<?php echo c_al2fb_meta_app_secret; ?>" type="text" value="<?php echo get_user_meta($user_ID, c_al2fb_meta_app_secret, true); ?>" />
			</td></tr>

<?php		if (isset($_REQUEST['debug'])) { ?>
				<tr valign="top"><th scope="row">
					<label for="al2fb_access_token"><strong><?php _e('Access token:', c_al2fb_text_domain); ?></strong></label>
				</th><td>
					<input id="al2fb_access_token" class="al2fb_text" name="<?php echo c_al2fb_meta_access_token; ?>" type="text" value="<?php echo get_user_meta($user_ID, c_al2fb_meta_access_token, true); ?>" />
				</td></tr>
<?php
			}

			if (self::Is_authorized($user_ID))
				try {
					$app = self::Get_fb_application($user_ID);
?>
					<tr valign="top"><th scope="row">
						<label for="al2fb_app_name"><?php _e('App Name:', c_al2fb_text_domain); ?></label>
					</th><td>
						<a id="al2fb_app_name" href="<?php echo $app->link; ?>" target="_blank"><?php echo htmlspecialchars($app->name, ENT_QUOTES, $charset); ?></a>
					</td></tr>
<?php
				}
				catch (Exception $e) {
					echo '<div id="message" class="error fade al2fb_error"><p>' . htmlspecialchars($e->getMessage(), ENT_QUOTES, $charset) . '</p></div>';
				}

			if (current_user_can('manage_options')) {
?>
				<tr valign="top"><th scope="row">
					<label for="al2fb_app_share"><?php _e('Share with all users on this site:', c_al2fb_text_domain); ?></label>
				</th><td>
					<input id="al2fb_app_share" name="<?php echo c_al2fb_option_app_share; ?>" type="checkbox"<?php if (get_site_option(c_al2fb_option_app_share)) echo ' checked="checked"'; ?> />
				</td></tr>
<?php
			}
?>
			</table>
			</div>

			<p class="submit">
			<input type="submit" class="button-primary" value="<?php _e('Save', c_al2fb_text_domain) ?>" />
			</p>

			<hr />
			<h3><?php _e('Additional settings', c_al2fb_text_domain); ?></h3>

			<h4><?php _e('Link picture', c_al2fb_text_domain); ?></h4>
			<table class="form-table al2fb_border">
			<tr valign="top"><th scope="row">
				<label for="al2fb_picture_type"><?php _e('Link picture:', c_al2fb_text_domain); ?></label>
			</th><td>
				<input type="radio" name="<?php echo c_al2fb_meta_picture_type; ?>" value="wordpress"<?php echo $pic_wordpress; ?>><?php _e('WordPress logo', c_al2fb_text_domain); ?><br />
				<input type="radio" name="<?php echo c_al2fb_meta_picture_type; ?>" value="media"<?php echo $pic_media; ?>><?php _e('First attached image', c_al2fb_text_domain); ?><br />
				<input type="radio" name="<?php echo c_al2fb_meta_picture_type; ?>" value="featured"<?php echo $pic_featured; ?>><?php _e('Featured post image', c_al2fb_text_domain); ?><br />
				<input type="radio" name="<?php echo c_al2fb_meta_picture_type; ?>" value="facebook"<?php echo $pic_facebook; ?>><?php _e('Let Facebook select', c_al2fb_text_domain); ?><br />
				<input type="radio" name="<?php echo c_al2fb_meta_picture_type; ?>" value="post"<?php echo $pic_post; ?>><?php _e('First image in the post', c_al2fb_text_domain); ?><br />
				<input type="radio" name="<?php echo c_al2fb_meta_picture_type; ?>" value="avatar"<?php echo $pic_avatar; ?>><?php _e('Avatar of author', c_al2fb_text_domain); ?><br />
				<input type="radio" name="<?php echo c_al2fb_meta_picture_type; ?>" value="userphoto"<?php echo $pic_userphoto; ?>><?php _e('Image from User Photo plugin', c_al2fb_text_domain); ?><br />
				<input type="radio" name="<?php echo c_al2fb_meta_picture_type; ?>" value="custom"<?php echo $pic_custom; ?>><?php _e('Custom picture below', c_al2fb_text_domain); ?><br />
			</td></tr>

			<tr valign="top"><th scope="row">
				<label for="al2fb_picture"><?php _e('Custom picture URL:', c_al2fb_text_domain); ?></label>
			</th><td>
				<input id="al2fb_picture" class="al2fb_text" name="<?php echo c_al2fb_meta_picture; ?>" type="text" value="<?php echo get_user_meta($user_ID, c_al2fb_meta_picture, true); ?>" />
				<br /><span class="al2fb_explanation"><?php _e('At least 50 x 50 pixels', c_al2fb_text_domain); ?></span>
			</td></tr>

			<tr valign="top"><th scope="row">
				<label for="al2fb_picture_default"><?php _e('Default picture URL:', c_al2fb_text_domain); ?></label>
			</th><td>
				<input id="al2fb_picture_default" class="al2fb_text" name="<?php echo c_al2fb_meta_picture_default; ?>" type="text" value="<?php echo get_user_meta($user_ID, c_al2fb_meta_picture_default, true); ?>" />
				<br /><span class="al2fb_explanation"><?php _e('Default WordPress logo', c_al2fb_text_domain); ?></span>
			</td></tr>
			</table>
			<p class="submit">
			<input type="submit" class="button-primary" value="<?php _e('Save', c_al2fb_text_domain) ?>" />
			</p>
<?php
			if (self::Is_authorized($user_ID))
				try {
					if (!get_user_meta($user_ID, c_al2fb_meta_use_groups, true) ||
						!get_user_meta($user_ID, c_al2fb_meta_group, true)) {
						try {
							$me = self::Get_fb_me($user_ID, true);
						}
						catch (Exception $e) {
							$me = null;
						}
						$pages = self::Get_fb_pages($user_ID);
						$selected_page = get_user_meta($user_ID, c_al2fb_meta_page, true);
?>
						<h4><?php _e('Facebook page', c_al2fb_text_domain); ?></h4>
						<table class="form-table al2fb_border">
						<tr valign="top"><th scope="row">
							<label for="al2fb_page"><?php _e('Add to page:', c_al2fb_text_domain); ?></label>
						</th><td>
							<select id="al2fb_page" name="<?php echo c_al2fb_meta_page; ?>">
<?php
							if ($me != null)
								echo '<option value=""' . ($selected_page ? '' : ' selected') . '>' . htmlspecialchars($me->name, ENT_QUOTES, $charset) . '</option>';
							if ($pages->data)
								foreach ($pages->data as $page) {
									echo '<option value="' . $page->id . '"';
									if ($page->id == $selected_page)
										echo ' selected';
									echo '>' . htmlspecialchars($page->name, ENT_QUOTES, $charset) . ' - ' . htmlspecialchars($page->category, ENT_QUOTES, $charset) . '</option>';
								}
?>
							</select>
						</td></tr>

						<tr valign="top"><th scope="row">
							<label for="al2fb_page_owner"><?php _e('Add as page owner:', c_al2fb_text_domain); ?></label>
						</th><td>
							<input id="al2fb_page_owner" name="<?php echo c_al2fb_meta_page_owner; ?>" type="checkbox"<?php if (get_user_meta($user_ID, c_al2fb_meta_page_owner, true)) echo ' checked="checked"'; ?> />
							<br /><span class="al2fb_explanation"><?php _e('Requires manage pages permission', c_al2fb_text_domain); ?></span>
						</td></tr>
						</table>
						<p class="submit">
						<input type="submit" class="button-primary" value="<?php _e('Save', c_al2fb_text_domain) ?>" />
						</p>
<?php				} ?>

					<h4><?php _e('Facebook group', c_al2fb_text_domain); ?></h4>
					<table class="form-table al2fb_border">
					<tr valign="top"><th scope="row">
						<label for="al2fb_use_groups"><?php _e('Use groups:', c_al2fb_text_domain); ?></label>
					</th><td>
						<input id="al2fb_use_groups" name="<?php echo c_al2fb_meta_use_groups; ?>" type="checkbox"<?php if (get_user_meta($user_ID, c_al2fb_meta_use_groups, true)) echo ' checked="checked"'; ?> />
						<br /><span class="al2fb_explanation"><?php _e('Requires user groups permission', c_al2fb_text_domain); ?></span>
					</td></tr>

<?php				if (get_user_meta($user_ID, c_al2fb_meta_use_groups, true)) {
						$groups = self::Get_fb_groups($user_ID);
						$selected_group = get_user_meta($user_ID, c_al2fb_meta_group, true);
?>
						<tr valign="top"><th scope="row">
							<label for="al2fb_group"><?php _e('Add to group:', c_al2fb_text_domain); ?></label>
						</th><td>
							<select id="al2fb_group" name="<?php echo c_al2fb_meta_group; ?>">
<?php
							echo '<option value=""' . ($selected_group ? '' : ' selected') . '>' . __('None', c_al2fb_text_domain) . '</option>';
							if ($groups->data)
								foreach ($groups->data as $group) {
									echo '<option value="' . $group->id . '"';
									if ($group->id == $selected_group)
										echo ' selected';
									echo '>' . htmlspecialchars($group->name, ENT_QUOTES, $charset) . '</option>';
								}
?>
							</select>
						</td></tr>
<?php
					}
?>
					</table>
					<p class="submit">
					<input type="submit" class="button-primary" value="<?php _e('Save', c_al2fb_text_domain) ?>" />
					</p>
<?php
				}
				catch (Exception $e) {
					echo '<div id="message" class="error fade al2fb_error"><p>' . htmlspecialchars($e->getMessage(), ENT_QUOTES, $charset) . '</p></div>';
				}
?>
			<h4><?php _e('Link appearance', c_al2fb_text_domain); ?></h4>
			<table class="form-table al2fb_border">
			<tr valign="top"><th scope="row">
				<label for="al2fb_caption"><?php _e('Use site title as caption:', c_al2fb_text_domain); ?></label>
			</th><td>
				<input id="al2fb_caption" name="<?php echo c_al2fb_meta_caption; ?>" type="checkbox"<?php if (get_user_meta($user_ID, c_al2fb_meta_caption, true)) echo ' checked="checked"'; ?> />
				<br /><span class="al2fb_explanation">&quot;<?php echo html_entity_decode(get_bloginfo('title'), ENT_QUOTES, get_bloginfo('charset')); ?>&quot;</span>
			</td></tr>

			<tr valign="top"><th scope="row">
				<label for="al2fb_msg"><?php _e('Use excerpt as message:', c_al2fb_text_domain); ?></label>
			</th><td>
				<input id="al2fb_msg" name="<?php echo c_al2fb_meta_msg; ?>" type="checkbox"<?php if (get_user_meta($user_ID, c_al2fb_meta_msg, true)) echo ' checked="checked"'; ?> />
			</td></tr>

			<tr valign="top"><th scope="row">
				<label for="al2fb_trailer"><?php _e('Text trailer:', c_al2fb_text_domain); ?></label>
			</th><td>
				<input id="al2fb_trailer" class="al2fb_text" name="<?php echo c_al2fb_meta_trailer; ?>" type="text" value="<?php  echo htmlentities(get_user_meta($user_ID, c_al2fb_meta_trailer, true), ENT_QUOTES, get_bloginfo('charset')); ?>" />
				<br /><span class="al2fb_explanation"><?php _e('For example "Read more ..."', c_al2fb_text_domain); ?></span>
			</td></tr>

			<tr valign="top"><th scope="row">
				<label for="al2fb_hyperlink"><?php _e('Keep hyperlinks:', c_al2fb_text_domain); ?></label>
			</th><td>
				<input id="al2fb_hyperlink" name="<?php echo c_al2fb_meta_hyperlink; ?>" type="checkbox"<?php if (get_user_meta($user_ID, c_al2fb_meta_hyperlink, true)) echo ' checked="checked"'; ?> />
				<br /><span class="al2fb_explanation"><?php _e('The hyperlink title will be removed', c_al2fb_text_domain); ?></span>
			</td></tr>

			<tr valign="top"><th scope="row">
				<label for="al2fb_share_link"><?php _e('Add \'Share\' link:', c_al2fb_text_domain); ?></label>
			</th><td>
				<input id="al2fb_share_link" name="<?php echo c_al2fb_meta_share_link; ?>" type="checkbox"<?php if (get_user_meta($user_ID, c_al2fb_meta_share_link, true)) echo ' checked="checked"'; ?> />
				<strong>Experimental!</strong>
			</td></tr>

			<tr valign="top"><th scope="row">
				<label for="al2fb_shortlink"><?php _e('Use short URL:', c_al2fb_text_domain); ?></label>
			</th><td>
				<input id="al2fb_shortlink" name="<?php echo c_al2fb_meta_shortlink; ?>" type="checkbox"<?php if (get_user_meta($user_ID, c_al2fb_meta_shortlink, true)) echo ' checked="checked"'; ?> />
				<br /><span class="al2fb_explanation"><?php _e('If available', c_al2fb_text_domain); ?></span>
			</td></tr>

			<tr valign="top"><th scope="row">
				<label for="al2fb_add_new_page"><?php _e('Add links for new pages:', c_al2fb_text_domain); ?></label>
			</th><td>
				<input id="al2fb_add_new_page" name="<?php echo c_al2fb_meta_add_new_page; ?>" type="checkbox"<?php if (get_user_meta($user_ID, c_al2fb_meta_add_new_page, true)) echo ' checked="checked"'; ?> />
			</td></tr>
			</table>
			<p class="submit">
			<input type="submit" class="button-primary" value="<?php _e('Save', c_al2fb_text_domain) ?>" />
			</p>

			<h4><?php _e('Facebook comments', c_al2fb_text_domain); ?></h4>
			<table class="form-table al2fb_border">
			<tr valign="top"><th scope="row">
				<label for="al2fb_fb_comments"><?php _e('Integrate comments from Facebook:', c_al2fb_text_domain); ?></label>
			</th><td>
				<input id="al2fb_fb_comments" name="<?php echo c_al2fb_meta_fb_comments; ?>" type="checkbox"<?php if (get_user_meta($user_ID, c_al2fb_meta_fb_comments, true)) echo ' checked="checked"'; ?> />
			</td></tr>

			<tr valign="top"><th scope="row">
				<label for="al2fb_fb_comments_postback"><?php _e('Post WordPress comments back to Facebook:', c_al2fb_text_domain); ?></label>
			</th><td>
				<input id="al2fb_fb_comments_postback" name="<?php echo c_al2fb_meta_fb_comments_postback; ?>" type="checkbox"<?php if (get_user_meta($user_ID, c_al2fb_meta_fb_comments_postback, true)) echo ' checked="checked"'; ?> />
			</td></tr>

			<tr valign="top"><th scope="row">
				<label for="al2fb_fb_comments_copy"><?php _e('Copy comments from Facebook to WordPress:', c_al2fb_text_domain); ?></label>
			</th><td>
				<input id="al2fb_fb_comments_copy" name="<?php echo c_al2fb_meta_fb_comments_copy; ?>" type="checkbox"<?php if (get_user_meta($user_ID, c_al2fb_meta_fb_comments_copy, true)) echo ' checked="checked"'; ?> />
				<br /><span class="al2fb_explanation"><?php _e('Enables for example editing of Facebook comments', c_al2fb_text_domain); ?></span>
			</td></tr>

			<tr valign="top"><th scope="row">
				<label for="al2fb_fb_comments_nolink"><?php _e('Link Facebook comment to:', c_al2fb_text_domain); ?></label>
			</th><td>
				<input type="radio" name="<?php echo c_al2fb_meta_fb_comments_nolink; ?>" value="none"<?php echo $comments_nolink_none; ?>><?php _e('None', c_al2fb_text_domain); ?><br />
				<span class="al2fb_explanation"><?php _e('Disables displaying of Facebook avatars too', c_al2fb_text_domain); ?></span><br />
				<input type="radio" name="<?php echo c_al2fb_meta_fb_comments_nolink; ?>" value="author"<?php echo $comments_nolink_author; ?>><?php _e('Profile author', c_al2fb_text_domain); ?><br />
				<input type="radio" name="<?php echo c_al2fb_meta_fb_comments_nolink; ?>" value="link"<?php echo $comments_nolink_link; ?>><?php _e('Added link', c_al2fb_text_domain); ?><br />
				<span class="al2fb_explanation"><?php _e('Disables displaying of Facebook avatars too', c_al2fb_text_domain); ?></span><br />
			</td></tr>

			<tr valign="top"><th scope="row">
				<label for="al2fb_fb_likes"><?php _e('Integrate likes from Facebook:', c_al2fb_text_domain); ?></label>
			</th><td>
				<input id="al2fb_fb_likes" name="<?php echo c_al2fb_meta_fb_likes; ?>" type="checkbox"<?php if (get_user_meta($user_ID, c_al2fb_meta_fb_likes, true)) echo ' checked="checked"'; ?> />
			</td></tr>

			<tr valign="top"><th scope="row">
				<label for="al2fb_post_likers"><?php _e('Show likers below the post text:', c_al2fb_text_domain); ?></label>
			</th><td>
				<input id="al2fb_post_likers" name="<?php echo c_al2fb_meta_post_likers; ?>" type="checkbox"<?php if (get_user_meta($user_ID, c_al2fb_meta_post_likers, true)) echo ' checked="checked"'; ?> />
			</td></tr>
			</table>
			<p class="submit">
			<input type="submit" class="button-primary" value="<?php _e('Save', c_al2fb_text_domain) ?>" />
			</p>

			<h4><?php _e('Facebook like button', c_al2fb_text_domain); ?></h4>
			<table class="form-table al2fb_border">
			<tr valign="top"><th scope="row">
				<label for="al2fb_post_like_button"><?php _e('Show Facebook like button:', c_al2fb_text_domain); ?></label>
			</th><td>
				<input id="al2fb_post_like_button" name="<?php echo c_al2fb_meta_post_like_button; ?>" type="checkbox"<?php if (get_user_meta($user_ID, c_al2fb_meta_post_like_button, true)) echo ' checked="checked"'; ?> />
				<br /><a class="al2fb_explanation" href="http://developers.facebook.com/docs/reference/plugins/like/" target="_blank"><?php _e('Documentation', c_al2fb_text_domain); ?></a>
			</td></tr>

			<tr valign="top"><th scope="row">
				<label for="al2fb_like_layout"><?php _e('Layout:', c_al2fb_text_domain); ?></label>
			</th><td>
				<input type="radio" name="<?php echo c_al2fb_meta_like_layout; ?>" value="standard"<?php echo $like_layout_standard; ?>><?php _e('Standard', c_al2fb_text_domain); ?><br />
				<input type="radio" name="<?php echo c_al2fb_meta_like_layout; ?>" value="button_count"<?php echo $like_layout_button; ?>><?php _e('Button with count', c_al2fb_text_domain); ?><br />
				<input type="radio" name="<?php echo c_al2fb_meta_like_layout; ?>" value="box_count"<?php echo $like_layout_box; ?>><?php _e('Box with count', c_al2fb_text_domain); ?><br />
			</td></tr>

			<tr valign="top"><th scope="row">
				<label for="al2fb_like_width"><?php _e('Width:', c_al2fb_text_domain); ?></label>
			</th><td>
				<input class="al2fb_numeric" id="al2fb_like_width" name="<?php echo c_al2fb_meta_like_width; ?>" type="text" value="<?php echo get_user_meta($user_ID, c_al2fb_meta_like_width, true); ?>" />
				<span><?php _e('Pixels', c_al2fb_text_domain); ?></span>
			</td></tr>

			<tr valign="top"><th scope="row">
				<label for="al2fb_like_action"><?php _e('Action:', c_al2fb_text_domain); ?></label>
			</th><td>
				<input type="radio" name="<?php echo c_al2fb_meta_like_action; ?>" value="like"<?php echo $like_action_like; ?>><?php _e('Like', c_al2fb_text_domain); ?><br />
				<input type="radio" name="<?php echo c_al2fb_meta_like_action; ?>" value="recommend"<?php echo $like_action_recommend; ?>><?php _e('Recommend', c_al2fb_text_domain); ?><br />
			</td></tr>

			<tr valign="top"><th scope="row">
				<label for="al2fb_like_font"><?php _e('Font:', c_al2fb_text_domain); ?></label>
			</th><td>
				<select id="al2fb_like_font" name="<?php echo c_al2fb_meta_like_font; ?>">
				<option value="" <?php echo empty($like_font) ? 'selected' : ''; ?>></option>
				<option value="arial" <?php echo $like_font == 'arial' ? 'selected' : ''; ?>>arial</option>
				<option value="lucida grande" <?php echo $like_font == 'lucida grande' ? 'selected' : ''; ?>>lucida grande</option>
				<option value="segoe ui" <?php echo $like_font == 'segoe ui' ? 'selected' : ''; ?>>segoe ui</option>
				<option value="tahoma" <?php echo $like_font == 'tahoma' ? 'selected' : ''; ?>>tahoma</option>
				<option value="trebuchet ms" <?php echo $like_font == 'trebuchet ms' ? 'selected' : ''; ?>>trebuchet ms</option>
				<option value="verdana" <?php echo $like_font == 'verdana' ? 'selected' : ''; ?>>verdana</option>
				</select>
			</td></tr>

			<tr valign="top"><th scope="row">
				<label for="al2fb_like_top"><?php _e('Show at the top of the post:', c_al2fb_text_domain); ?></label>
			</th><td>
				<input id="al2fb_like_top" name="<?php echo c_al2fb_meta_like_top; ?>" type="checkbox"<?php if (get_user_meta($user_ID, c_al2fb_meta_like_top, true)) echo ' checked="checked"'; ?> />
			</td></tr>

			<tr valign="top"><th scope="row">
				<label for="al2fb_like_send"><?php _e('Show Facebook send button:', c_al2fb_text_domain); ?></label>
			</th><td>
				<input id="al2fb_like_send" name="<?php echo c_al2fb_meta_post_send_button; ?>" type="checkbox"<?php if (get_user_meta($user_ID, c_al2fb_meta_post_send_button, true)) echo ' checked="checked"'; ?> />
				<br /><a class="al2fb_explanation" href="http://developers.facebook.com/docs/reference/plugins/send/" target="_blank"><?php _e('Documentation', c_al2fb_text_domain); ?></a>
			</td></tr>

			<tr valign="top"><th scope="row">
				<label for="al2fb_combine"><?php _e('Combine Facebook like and send buttons:', c_al2fb_text_domain); ?></label>
			</th><td>
				<input id="al2fb_combine" name="<?php echo c_al2fb_meta_post_combine_buttons; ?>" type="checkbox"<?php if (get_user_meta($user_ID, c_al2fb_meta_post_combine_buttons, true)) echo ' checked="checked"'; ?> />
			</td></tr>

			</table>
			<p class="submit">
			<input type="submit" class="button-primary" value="<?php _e('Save', c_al2fb_text_domain) ?>" />
			</p>

			<h4><?php _e('Facebook like box', c_al2fb_text_domain); ?></h4>
			<table class="form-table al2fb_border">

			<tr valign="top"><th scope="row">
				<label for="al2fb_like_box_width"><?php _e('Width:', c_al2fb_text_domain); ?></label>
			</th><td>
				<input class="al2fb_numeric" id="al2fb_like_box_width" name="<?php echo c_al2fb_meta_like_box_width; ?>" type="text" value="<?php echo get_user_meta($user_ID, c_al2fb_meta_like_box_width, true); ?>" />
				<span><?php _e('Pixels', c_al2fb_text_domain); ?></span>
			</td></tr>

			<tr valign="top"><th scope="row">
				<label for="al2fb_like_box_border"><?php _e('Border color:', c_al2fb_text_domain); ?></label>
			</th><td>
				<input id="al2fb_like_box_border" name="<?php echo c_al2fb_meta_like_box_border; ?>" type="text" value="<?php echo get_user_meta($user_ID, c_al2fb_meta_like_box_border, true); ?>" />
			</td></tr>

			<tr valign="top"><th scope="row">
				<label for="al2fb_box_noheader"><?php _e('Disable like box header:', c_al2fb_text_domain); ?></label>
			</th><td>
				<input id="al2fb_box_noheader" name="<?php echo c_al2fb_meta_like_box_noheader; ?>" type="checkbox"<?php if (get_user_meta($user_ID, c_al2fb_meta_like_box_noheader, true)) echo ' checked="checked"'; ?> />
			</td></tr>

			<tr valign="top"><th scope="row">
				<label for="al2fb_box_nostream"><?php _e('Disable like box stream:', c_al2fb_text_domain); ?></label>
			</th><td>
				<input id="al2fb_box_nostream" name="<?php echo c_al2fb_meta_like_box_nostream; ?>" type="checkbox"<?php if (get_user_meta($user_ID, c_al2fb_meta_like_box_nostream, true)) echo ' checked="checked"'; ?> />
			</td></tr>

			</table>
			<p class="submit">
			<input type="submit" class="button-primary" value="<?php _e('Save', c_al2fb_text_domain) ?>" />
			</p>

			<h4><?php _e('Facebook comments plugin', c_al2fb_text_domain); ?></h4>
			<table class="form-table al2fb_border">

			<tr valign="top"><th scope="row">
				<label for="al2fb_comments_posts"><?php _e('Number of posts:', c_al2fb_text_domain); ?></label>
			</th><td>
				<input class="al2fb_numeric" id="al2fb_comments_posts" name="<?php echo c_al2fb_meta_comments_posts; ?>" type="text" value="<?php echo get_user_meta($user_ID, c_al2fb_meta_comments_posts, true); ?>" />
			</td></tr>

			<tr valign="top"><th scope="row">
				<label for="al2fb_comments_width"><?php _e('Width:', c_al2fb_text_domain); ?></label>
			</th><td>
				<input class="al2fb_numeric" id="al2fb_comments_width" name="<?php echo c_al2fb_meta_comments_width; ?>" type="text" value="<?php echo get_user_meta($user_ID, c_al2fb_meta_comments_width, true); ?>" />
				<span><?php _e('Pixels', c_al2fb_text_domain); ?></span>
			</td></tr>

			</table>
			<p class="submit">
			<input type="submit" class="button-primary" value="<?php _e('Save', c_al2fb_text_domain) ?>" />
			</p>

			<h4><?php _e('Facebook common', c_al2fb_text_domain); ?></h4>
			<table class="form-table al2fb_border">

			<tr valign="top"><th scope="row">
				<label for="al2fb_post_nohome"><?php _e('Do not show on the home page:', c_al2fb_text_domain); ?></label>
			</th><td>
				<input id="al2fb_post_nohome" name="<?php echo c_al2fb_meta_like_nohome; ?>" type="checkbox"<?php if (get_user_meta($user_ID, c_al2fb_meta_like_nohome, true)) echo ' checked="checked"'; ?> />
			</td></tr>

			<tr valign="top"><th scope="row">
				<label for="al2fb_post_noposts"><?php _e('Do not show on posts:', c_al2fb_text_domain); ?></label>
			</th><td>
				<input id="al2fb_post_noposts" name="<?php echo c_al2fb_meta_like_noposts; ?>" type="checkbox"<?php if (get_user_meta($user_ID, c_al2fb_meta_like_noposts, true)) echo ' checked="checked"'; ?> />
			</td></tr>

			<tr valign="top"><th scope="row">
				<label for="al2fb_post_nopages"><?php _e('Do not show on pages:', c_al2fb_text_domain); ?></label>
			</th><td>
				<input id="al2fb_post_nopages" name="<?php echo c_al2fb_meta_like_nopages; ?>" type="checkbox"<?php if (get_user_meta($user_ID, c_al2fb_meta_like_nopages, true)) echo ' checked="checked"'; ?> />
			</td></tr>

			<tr valign="top"><th scope="row">
				<label for="al2fb_post_noarchives"><?php _e('Do not show in archives:', c_al2fb_text_domain); ?></label>
			</th><td>
				<input id="al2fb_post_noarchives" name="<?php echo c_al2fb_meta_like_noarchives; ?>" type="checkbox"<?php if (get_user_meta($user_ID, c_al2fb_meta_like_noarchives, true)) echo ' checked="checked"'; ?> />
			</td></tr>

			<tr valign="top"><th scope="row">
				<label for="al2fb_post_nocategories"><?php _e('Do not show in categories:', c_al2fb_text_domain); ?></label>
			</th><td>
				<input id="al2fb_post_nocategories" name="<?php echo c_al2fb_meta_like_nocategories; ?>" type="checkbox"<?php if (get_user_meta($user_ID, c_al2fb_meta_like_nocategories, true)) echo ' checked="checked"'; ?> />
			</td></tr>

			<tr valign="top"><th scope="row">
				<label for="al2fb_like_faces"><?php _e('Faces:', c_al2fb_text_domain); ?></label>
			</th><td>
				<input id="al2fb_like_faces" name="<?php echo c_al2fb_meta_like_faces; ?>" type="checkbox"<?php if (get_user_meta($user_ID, c_al2fb_meta_like_faces, true)) echo ' checked="checked"'; ?> />
			</td></tr>

			<tr valign="top"><th scope="row">
				<label for="al2fb_like_color"><?php _e('Color scheme:', c_al2fb_text_domain); ?></label>
			</th><td>
				<input type="radio" name="<?php echo c_al2fb_meta_like_colorscheme; ?>" value="light"<?php echo $like_color_light; ?>><?php _e('Light', c_al2fb_text_domain); ?><br />
				<input type="radio" name="<?php echo c_al2fb_meta_like_colorscheme; ?>" value="dark"<?php echo $like_color_dark; ?>><?php _e('Dark', c_al2fb_text_domain); ?><br />
			</td></tr>

			<tr valign="top"><th scope="row">
				<label for="al2fb_like_link"><?php _e('Link to:', c_al2fb_text_domain); ?></label>
			</th><td>
				<input id="al2fb_like_link" class="al2fb_text" name="<?php echo c_al2fb_meta_like_link; ?>" type="text" value="<?php echo get_user_meta($user_ID, c_al2fb_meta_like_link, true); ?>" />
				<br /><span class="al2fb_explanation"><?php _e('Default the post or page', c_al2fb_text_domain); ?></span>
			</td></tr>

			<tr valign="top"><th scope="row">
				<label for="al2fb_open_graph"><?php _e('Use Open Graph protocol:', c_al2fb_text_domain); ?></label>
			</th><td>
				<input id="al2fb_open_graph" name="<?php echo c_al2fb_meta_open_graph; ?>" type="checkbox"<?php if (get_user_meta($user_ID, c_al2fb_meta_open_graph, true)) echo ' checked="checked"'; ?> />
				<br /><a class="al2fb_explanation" href="http://developers.facebook.com/docs/opengraph/" target="_blank"><?php _e('Documentation', c_al2fb_text_domain); ?></a>
			</td></tr>

			<tr valign="top"><th scope="row">
				<label for="al2fb_open_graph_type"><?php _e('Open Graph protocol <em>og:type</em>:', c_al2fb_text_domain); ?></label>
			</th><td>
				<input id="al2fb_open_graph_type" class="al2fb_text" name="<?php echo c_al2fb_meta_open_graph_type; ?>" type="text" value="<?php echo get_user_meta($user_ID, c_al2fb_meta_open_graph_type, true); ?>" />
				<br /><a class="al2fb_explanation" href="http://developers.facebook.com/docs/opengraph/#types" target="_blank"><?php _e('Documentation', c_al2fb_text_domain); ?></a>
			</td></tr>

			<tr valign="top"><th scope="row">
				<label for="al2fb_open_graph_admin"><?php _e('Facebook administrators:', c_al2fb_text_domain); ?></label>
			</th><td>
				<input id="al2fb_open_graph_admin" class="al2fb_text" name="<?php echo c_al2fb_meta_open_graph_admins; ?>" type="text" value="<?php echo get_user_meta($user_ID, c_al2fb_meta_open_graph_admins, true); ?>" />
				<br /><span class="al2fb_explanation"><?php _e('Separate multiple administrators by a comma without spaces', c_al2fb_text_domain); ?></span>
			</td></tr>

			</table>
			<p class="submit">
			<input type="submit" class="button-primary" value="<?php _e('Save', c_al2fb_text_domain) ?>" />
			</p>

			<h4><?php _e('Miscelaneous settings', c_al2fb_text_domain); ?></h4>
			<table class="form-table al2fb_border">
			<tr valign="top"><th scope="row">
				<label for="al2fb_exclude_default"><?php _e('Do not add link by default:', c_al2fb_text_domain); ?></label>
			</th><td>
				<input id="al2fb_exclude_default" name="<?php echo c_al2fb_meta_exclude_default; ?>" type="checkbox"<?php if (get_user_meta($user_ID, c_al2fb_meta_exclude_default, true)) echo ' checked="checked"'; ?> />
			</td></tr>

			<tr valign="top"><th scope="row">
				<label for="al2fb_not_post_list"><?php _e('Don\'t show a summary in the post list:', c_al2fb_text_domain); ?></label>
			</th><td>
				<input id="al2fb_not_post_list" name="<?php echo c_al2fb_meta_not_post_list; ?>" type="checkbox"<?php if (get_user_meta($user_ID, c_al2fb_meta_not_post_list, true)) echo ' checked="checked"'; ?> />
			</td></tr>

			<tr valign="top"><th scope="row">
				<label for="al2fb_fb_encoding"><?php _e('Facebook character encoding:', c_al2fb_text_domain); ?></label>
			</th><td>
				<input id="al2fb_fb_encoding" class="al2fb_text" name="<?php echo c_al2fb_meta_fb_encoding; ?>" type="text" value="<?php echo get_user_meta($user_ID, c_al2fb_meta_fb_encoding, true); ?>" />
				<br /><span class="al2fb_explanation"><?php _e('Default UTF-8; do not change if no need', c_al2fb_text_domain); ?></span>
			</td></tr>

			<tr valign="top"><th scope="row">
				<label for="al2fb_fb_locale"><?php _e('Facebook locale:', c_al2fb_text_domain); ?></label>
			</th><td>
				<input id="al2fb_fb_locale" class="al2fb_text" name="<?php echo c_al2fb_meta_fb_locale; ?>" type="text" value="<?php echo get_user_meta($user_ID, c_al2fb_meta_fb_locale, true); ?>" />
				<br /><span class="al2fb_explanation"><?php _e('Do not change if no need', c_al2fb_text_domain); ?><span>&nbsp;(<?php echo WPLANG; ?>)</span></span>
			</td></tr>

			<tr valign="top"><th scope="row">
				<label for="al2fb_clean"><?php _e('Clean on deactivate:', c_al2fb_text_domain); ?></label>
			</th><td>
				<input id="al2fb_clean" name="<?php echo c_al2fb_meta_clean; ?>" type="checkbox"<?php if (get_user_meta($user_ID, c_al2fb_meta_clean, true)) echo ' checked="checked"'; ?> />
				<br /><span class="al2fb_explanation"><?php _e('All data, except link id\'s', c_al2fb_text_domain); ?></span>
			</td></tr>

			<tr valign="top"><th scope="row">
				<label for="al2fb_donated"><?php _e('I have donated to this plugin:', c_al2fb_text_domain); ?></label>
			</th><td>
				<input id="al2fb_donated" name="<?php echo c_al2fb_meta_donated; ?>" type="checkbox"<?php if (get_user_meta($user_ID, c_al2fb_meta_donated, true)) echo ' checked="checked"'; ?> />
			</td></tr>

			<tr valign="top"><th scope="row">
				<label for="al2fb_rated"><?php _e('I have rated this plugin:', c_al2fb_text_domain); ?></label>
			</th><td>
				<input id="al2fb_rated" name="<?php echo c_al2fb_meta_rated; ?>" type="checkbox"<?php if (get_user_meta($user_ID, c_al2fb_meta_rated, true)) echo ' checked="checked"'; ?> />
			</td></tr>
			</table>
			<p class="submit">
			<input type="submit" class="button-primary" value="<?php _e('Save', c_al2fb_text_domain) ?>" />
			</p>

<?php		if (current_user_can('manage_options')) { ?>
				<h3><?php _e('Administrator options', c_al2fb_text_domain); ?></h3>

				<table class="form-table al2fb_border">
				<tr valign="top"><th scope="row">
					<label for="al2fb_timeout"><?php _e('Facebook communication timeout:', c_al2fb_text_domain); ?></label>
				</th><td>
					<input class="al2fb_numeric" id="al2fb_timeout" name="<?php echo c_al2fb_option_timeout; ?>" type="text" value="<?php echo get_option(c_al2fb_option_timeout); ?>" />
					<span><?php _e('Seconds', c_al2fb_text_domain); ?></span>
					<br /><span class="al2fb_explanation"><?php _e('Default 30 seconds', c_al2fb_text_domain); ?></span>
				</td></tr>

				<tr valign="top"><th scope="row">
					<label for="al2fb_nonotice"><?php _e('Do not display notices:', c_al2fb_text_domain); ?></label>
				</th><td>
					<input id="al2fb_nonotice" name="<?php echo c_al2fb_option_nonotice; ?>" type="checkbox"<?php if (get_option(c_al2fb_option_nonotice)) echo ' checked="checked"'; ?> />
					<br /><span class="al2fb_explanation"><?php _e('Except on this page', c_al2fb_text_domain); ?></span>
				</td></tr>

				<tr valign="top"><th scope="row">
					<label for="al2fb_min_cap"><?php _e('Required capability to use plugin:', c_al2fb_text_domain); ?></label>
				</th><td>
					<select id="al2fb_min_cap" name="<?php echo c_al2fb_option_min_cap; ?>">
<?php
					// Get list of capabilities
					global $wp_roles;
					$capabilities = array();
					foreach ($wp_roles->role_objects as $key => $role)
						if (is_array($role->capabilities))
							foreach ($role->capabilities as $cap => $grant)
								$capabilities[$cap] = $cap;
					sort($capabilities);

					// List capabilities and select current
					$min_cap = get_option(c_al2fb_option_min_cap);
					foreach ($capabilities as $cap) {
						echo '<option value="' . $cap . '"';
						if ($cap == $min_cap)
							echo ' selected';
						echo '>' . $cap . '</option>';
					}
?>
					</select>
				</td></tr>

				<tr valign="top"><th scope="row">
					<label for="al2fb_cache"><?php _e('Refresh Facebook comments every:', c_al2fb_text_domain); ?></label>
				</th><td>
					<input class="al2fb_numeric" id="al2fb_cache" name="<?php echo c_al2fb_option_msg_refresh; ?>" type="text" value="<?php echo get_option(c_al2fb_option_msg_refresh); ?>" />
					<span><?php _e('Minutes', c_al2fb_text_domain); ?></span>
					<br /><span class="al2fb_explanation"><?php _e('Default every 10 minutes', c_al2fb_text_domain); ?></span>
				</td></tr>

				<tr valign="top"><th scope="row">
					<label for="al2fb_max_descr"><?php _e('Maximum text length with trailer:', c_al2fb_text_domain); ?></label>
				</th><td>
					<input class="al2fb_numeric" id="al2fb_max_descr" name="<?php echo c_al2fb_option_max_descr; ?>" type="text" value="<?php echo get_option(c_al2fb_option_max_descr); ?>" />
					<span><?php _e('Characters', c_al2fb_text_domain); ?></span>
					<br /><span class="al2fb_explanation"><?php _e('Default 256 characters', c_al2fb_text_domain); ?></span>
				</td></tr>

				<tr valign="top"><th scope="row">
					<label for="al2fb_max_text"><?php _e('Maximum Facebook text length:', c_al2fb_text_domain); ?></label>
				</th><td>
					<input class="al2fb_numeric" id="al2fb_max_text" name="<?php echo c_al2fb_option_max_text; ?>" type="text" value="<?php echo get_option(c_al2fb_option_max_text); ?>" />
					<span><?php _e('Characters', c_al2fb_text_domain); ?></span>
					<br /><span class="al2fb_explanation"><?php _e('Default 10,000 characters', c_al2fb_text_domain); ?></span>
				</td></tr>

				<tr valign="top"><th scope="row">
					<label for="al2fb_exclude_type"><?php _e('Exclude these custom post types:', c_al2fb_text_domain); ?></label>
				</th><td>
					<input class="al2fb_text" id="al2fb_exclude_type" name="<?php echo c_al2fb_option_exclude_type; ?>" type="text" value="<?php echo get_option(c_al2fb_option_exclude_type); ?>" />
					<br /><span class="al2fb_explanation"><?php _e('Separate by commas', c_al2fb_text_domain); ?></span>
				</td></tr>

				<tr valign="top"><th scope="row">
					<label for="al2fb_exclude_cat"><?php _e('Exclude these categories:', c_al2fb_text_domain); ?></label>
				</th><td>
					<input class="al2fb_text" id="al2fb_exclude_cat" name="<?php echo c_al2fb_option_exclude_cat; ?>" type="text" value="<?php echo get_option(c_al2fb_option_exclude_cat); ?>" />
					<br /><span class="al2fb_explanation"><?php _e('Separate by commas', c_al2fb_text_domain); ?></span>
				</td></tr>

				<tr valign="top"><th scope="row">
					<label for="al2fb_noverifypeer"><?php _e('Do not verify the peer\'s certificate:', c_al2fb_text_domain); ?></label>
				</th><td>
					<input id="al2fb_noverifypeer" name="<?php echo c_al2fb_option_noverifypeer; ?>" type="checkbox"<?php if (get_option(c_al2fb_option_noverifypeer)) echo ' checked="checked"'; ?> />
					<br /><span class="al2fb_explanation"><?php _e('Try this in case of cURL error 60', c_al2fb_text_domain); ?></span>
				</td></tr>

				<tr valign="top"><th scope="row" colspan="2">
					<label for="al2fb_css"><?php _e('Additional styling rules (CSS):', c_al2fb_text_domain); ?></label>
					<br />
					<textarea id="al2fb_css" name="<?php echo c_al2fb_option_css; ?>" cols="75" rows="10"><?php echo get_option(c_al2fb_option_css); ?></textarea>
				</th><td>
				</td></tr>
				</table>

<?php			if (isset($_REQUEST['debug'])) { ?>
					<h3><?php _e('Debug options', c_al2fb_text_domain); ?></h3>
					<table class="form-table al2fb_border">
					<tr valign="top"><th scope="row">
						<label for="al2fb_siteurl"><?php _e('Use site URL as request URI:', c_al2fb_text_domain); ?></label>
					</th><td>
						<input id="al2fb_siteurl" name="<?php echo c_al2fb_option_siteurl; ?>" type="checkbox"<?php if (get_option(c_al2fb_option_siteurl)) echo ' checked="checked"'; ?> />
					</td></tr>

					<tr valign="top"><th scope="row">
						<label for="al2fb_nocurl"><?php _e('Do not use cURL:', c_al2fb_text_domain); ?></label>
					</th><td>
						<input id="al2fb_nocurl" name="<?php echo c_al2fb_option_nocurl; ?>" type="checkbox"<?php if (get_option(c_al2fb_option_nocurl)) echo ' checked="checked"'; ?> />
					</td></tr>

					<tr valign="top"><th scope="row">
						<label for="al2fb_use_pp"><?php _e('Use publish_post action:', c_al2fb_text_domain); ?></label>
					</th><td>
						<input id="al2fb_use_pp" name="<?php echo c_al2fb_option_use_pp; ?>" type="checkbox"<?php if (get_option(c_al2fb_option_use_pp)) echo ' checked="checked"'; ?> />
					</td></tr>

					<tr valign="top"><th scope="row">
						<label for="al2fb_debug"><?php _e('Debug:', c_al2fb_text_domain); ?></label>
					</th><td>
						<input id="al2fb_debug" name="<?php echo c_al2fb_option_debug; ?>" type="checkbox"<?php if (get_option(c_al2fb_option_debug)) echo ' checked="checked"'; ?> />
					</td></tr>
					</table>
<?php			} ?>
				<p class="submit">
				<input type="submit" class="button-primary" value="<?php _e('Save', c_al2fb_text_domain) ?>" />
				</p>
<?php		} ?>

			</form>

			</div>
			</div>
<?php
		}

		function Render_sponsorship() {
			global $user_ID;
			get_currentuserinfo();
			if (!get_user_meta($user_ID, c_al2fb_meta_donated, true)) {
?>
				<script type="text/javascript">
				var psHost = (("https:" == document.location.protocol) ? "https://" : "http://");
				document.write(unescape("%3Cscript src='" + psHost + "pluginsponsors.com/direct/spsn/display.php?client=add-link-to-facebook&spot=' type='text/javascript'%3E%3C/script%3E"));
				</script>
				<a class="al2fb_sponsorship" href="http://pluginsponsors.com/privacy.html" target="_blank">
				<?php _e('Privacy in the Sustainable Plugins Sponsorship Network', c_al2fb_text_domain); ?></a>
<?php
			}
		}

		function Render_resources() {
			global $user_ID;
			get_currentuserinfo();
?>
			<div class="al2fb_resources">
			<h3><?php _e('Resources', c_al2fb_text_domain); ?></h3>
			<ul>
			<li><a href="http://wordpress.org/extend/plugins/add-link-to-facebook/faq/" target="_blank"><?php _e('Frequently asked questions', c_al2fb_text_domain); ?></a></li>
			<li><a href="http://forum.bokhorst.biz/add-link-to-facebook/" target="_blank"><?php _e('Support page', c_al2fb_text_domain); ?></a></li>
			<li><a href="<?php echo 'tools.php?page=' . plugin_basename($this->main_file) . '&debug=1'; ?>"><?php _e('Debug information', c_al2fb_text_domain); ?></a></li>
			<li><a href="http://blog.bokhorst.biz/about/" target="_blank"><?php _e('About the author', c_al2fb_text_domain); ?></a></li>
			<li><a href="http://wordpress.org/extend/plugins/profile/m66b" target="_blank"><?php _e('Other plugins', c_al2fb_text_domain); ?></a></li>
			</ul>
<?php		if (!get_user_meta($user_ID, c_al2fb_meta_donated, true)) { ?>
				<form action="https://www.paypal.com/cgi-bin/webscr" method="post">
				<input type="hidden" name="cmd" value="_s-xclick">
				<input type="hidden" name="encrypted" value="-----BEGIN PKCS7-----MIIHZwYJKoZIhvcNAQcEoIIHWDCCB1QCAQExggEwMIIBLAIBADCBlDCBjjELMAkGA1UEBhMCVVMxCzAJBgNVBAgTAkNBMRYwFAYDVQQHEw1Nb3VudGFpbiBWaWV3MRQwEgYDVQQKEwtQYXlQYWwgSW5jLjETMBEGA1UECxQKbGl2ZV9jZXJ0czERMA8GA1UEAxQIbGl2ZV9hcGkxHDAaBgkqhkiG9w0BCQEWDXJlQHBheXBhbC5jb20CAQAwDQYJKoZIhvcNAQEBBQAEgYApWh+oUn2CtY+7zwU5zu5XKj096Mj0sxBhri5/lYV7i7B+JwhAC1ta7kkj2tXAbR3kcjVyNA9n5kKBUND+5Lu7HiNlnn53eFpl3wtPBBvPZjPricLI144ZRNdaaAVtY32pWX7tzyWJaHgClKWp5uHaerSZ70MqUK8yqzt0V2KKDjELMAkGBSsOAwIaBQAwgeQGCSqGSIb3DQEHATAUBggqhkiG9w0DBwQIn3eeOKy6QZGAgcDKPGjy/6+i9RXscvkaHQqjbFI1bE36XYcrttae+aXmkeicJpsm+Se3NCBtY9yt6nxwwmxhqNTDNRwL98t8EXNkLg6XxvuOql0UnWlfEvRo+/66fqImq2jsro31xtNKyqJ1Qhx+vsf552j3xmdqdbg1C9IHNYQ7yfc6Bhx914ur8UPKYjy66KIuZBCXWge8PeYjuiswpOToRN8BU6tV4OW1ndrUO9EKZd5UHW/AOX0mjXc2HFwRoD22nrapVFIsjt2gggOHMIIDgzCCAuygAwIBAgIBADANBgkqhkiG9w0BAQUFADCBjjELMAkGA1UEBhMCVVMxCzAJBgNVBAgTAkNBMRYwFAYDVQQHEw1Nb3VudGFpbiBWaWV3MRQwEgYDVQQKEwtQYXlQYWwgSW5jLjETMBEGA1UECxQKbGl2ZV9jZXJ0czERMA8GA1UEAxQIbGl2ZV9hcGkxHDAaBgkqhkiG9w0BCQEWDXJlQHBheXBhbC5jb20wHhcNMDQwMjEzMTAxMzE1WhcNMzUwMjEzMTAxMzE1WjCBjjELMAkGA1UEBhMCVVMxCzAJBgNVBAgTAkNBMRYwFAYDVQQHEw1Nb3VudGFpbiBWaWV3MRQwEgYDVQQKEwtQYXlQYWwgSW5jLjETMBEGA1UECxQKbGl2ZV9jZXJ0czERMA8GA1UEAxQIbGl2ZV9hcGkxHDAaBgkqhkiG9w0BCQEWDXJlQHBheXBhbC5jb20wgZ8wDQYJKoZIhvcNAQEBBQADgY0AMIGJAoGBAMFHTt38RMxLXJyO2SmS+Ndl72T7oKJ4u4uw+6awntALWh03PewmIJuzbALScsTS4sZoS1fKciBGoh11gIfHzylvkdNe/hJl66/RGqrj5rFb08sAABNTzDTiqqNpJeBsYs/c2aiGozptX2RlnBktH+SUNpAajW724Nv2Wvhif6sFAgMBAAGjge4wgeswHQYDVR0OBBYEFJaffLvGbxe9WT9S1wob7BDWZJRrMIG7BgNVHSMEgbMwgbCAFJaffLvGbxe9WT9S1wob7BDWZJRroYGUpIGRMIGOMQswCQYDVQQGEwJVUzELMAkGA1UECBMCQ0ExFjAUBgNVBAcTDU1vdW50YWluIFZpZXcxFDASBgNVBAoTC1BheVBhbCBJbmMuMRMwEQYDVQQLFApsaXZlX2NlcnRzMREwDwYDVQQDFAhsaXZlX2FwaTEcMBoGCSqGSIb3DQEJARYNcmVAcGF5cGFsLmNvbYIBADAMBgNVHRMEBTADAQH/MA0GCSqGSIb3DQEBBQUAA4GBAIFfOlaagFrl71+jq6OKidbWFSE+Q4FqROvdgIONth+8kSK//Y/4ihuE4Ymvzn5ceE3S/iBSQQMjyvb+s2TWbQYDwcp129OPIbD9epdr4tJOUNiSojw7BHwYRiPh58S1xGlFgHFXwrEBb3dgNbMUa+u4qectsMAXpVHnD9wIyfmHMYIBmjCCAZYCAQEwgZQwgY4xCzAJBgNVBAYTAlVTMQswCQYDVQQIEwJDQTEWMBQGA1UEBxMNTW91bnRhaW4gVmlldzEUMBIGA1UEChMLUGF5UGFsIEluYy4xEzARBgNVBAsUCmxpdmVfY2VydHMxETAPBgNVBAMUCGxpdmVfYXBpMRwwGgYJKoZIhvcNAQkBFg1yZUBwYXlwYWwuY29tAgEAMAkGBSsOAwIaBQCgXTAYBgkqhkiG9w0BCQMxCwYJKoZIhvcNAQcBMBwGCSqGSIb3DQEJBTEPFw0xMTAyMDcwOTQ4MTlaMCMGCSqGSIb3DQEJBDEWBBQOOy+JroeRlZL7jGU/azSibWz1fjANBgkqhkiG9w0BAQEFAASBgCUXDO9KLIuy/XJwBa6kMWi0U1KFarbN9568i14mmZCFDvBmexRKhnSfqx+QLzdpNENBHKON8vNKanmL9jxgtyc88WAtrP/LqN4tmSrr0VB5wrds/viLxWZfu4Spb+YOTpo+z2hjXCJzVSV3EDvoxzHEN1Haxrvr1gWNhWzvVN3q-----END PKCS7-----">
				<input type="image" src="https://www.paypal.com/en_US/i/btn/btn_donate_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
				</form>
				<br />
				<a class="FlattrButton" style="display:none;" rev="flattr;button:compact;" href="http://wordpress.org/extend/plugins/add-link-to-facebook/"></a>
				<noscript><a href="http://flattr.com/thing/315162/Add-Link-to-Facebook-WordPress-plugin" target="_blank">
				<img src="http://api.flattr.com/button/flattr-badge-large.png" alt="Flattr this" title="Flattr this" border="0" /></a></noscript>
<?php		} ?>
			</div>
<?php
		}

		function Render_debug_info() {
			// Debug information
			if (isset($_REQUEST['debug'])) {
				global $user_identity, $user_email;
				get_currentuserinfo();
?>
				<hr />
				<h3><?php _e('Debug information', c_al2fb_text_domain) ?></h3>
				<form method="post" action="">
				<input type="hidden" name="al2fb_action" value="mail">
				<?php wp_nonce_field(c_al2fb_nonce_form); ?>

				<table class="form-table">
				<tr valign="top"><th scope="row">
					<label for="al2fb_debug_name"><strong><?php _e('Name:', c_al2fb_text_domain); ?></strong></label>
				</th><td>
					<input id="al2fb_debug_name" class="" name="<?php echo c_al2fb_mail_name; ?>" type="text" value="<?php echo $user_identity; ?>" />
				</td></tr>

				<tr valign="top"><th scope="row">
					<label for="al2fb_debug_email"><strong><?php _e('E-mail:', c_al2fb_text_domain); ?></strong></label>
				</th><td>
					<input id="al2fb_debug_email" class="" name="<?php echo c_al2fb_mail_email; ?>" type="text" value="<?php echo $user_email; ?>" />
					<br><strong><?php _e('Please check if this is a correct, reachable e-mail address', c_al2fb_text_domain); ?></strong>
				</td></tr>

				<tr valign="top"><th scope="row">
					<label for="al2fb_debug_msg"><strong><?php _e('Message:', c_al2fb_text_domain); ?></strong></label>
				</th><td>
					<textarea id="al2fb_debug_msg" name="<?php echo c_al2fb_mail_msg; ?>" rows="10" cols="50"></textarea>
					<br><strong><?php _e('Please describe your problem, even if you did before', c_al2fb_text_domain); ?></strong>
				</td></tr>
				</table>

				<p class="submit">
				<input type="submit" class="button-primary" value="<?php _e('Send', c_al2fb_text_domain) ?>" />
				</p>
				</form>
<?php
				echo self::Debug_info();
			}
		}

		// Get Facebook authorize address
		function Authorize_url($user_ID) {
			// http://developers.facebook.com/docs/authentication/permissions
			$url = 'https://graph.facebook.com/oauth/authorize';

			$url .= '?client_id=' . get_user_meta($user_ID, c_al2fb_meta_client_id, true);
			$url .= '&redirect_uri=' . urlencode(self::Redirect_uri());

			$url .= '&scope=read_stream,publish_stream,offline_access';

			if (get_user_meta($user_ID, c_al2fb_meta_page_owner, true))
				$url .= ',manage_pages';

			if (get_user_meta($user_ID, c_al2fb_meta_use_groups, true))
				$url .= ',user_groups';

			$url .= '&state=' . self::Authorize_secret();
			return $url;
		}

		// Get Facebook return addess
		function Redirect_uri() {
			// WordPress Address -> get_site_url() -> WordPress folder
			// Blog Address -> get_home_url() -> Home page
			if (get_option(c_al2fb_option_siteurl))
				return get_site_url(null, '/');
			else
				return get_home_url(null, '/');
		}

		// Generate authorization secret
		function Authorize_secret() {
			return 'al2fb_auth_' . substr(md5(AUTH_KEY ? AUTH_KEY : get_bloginfo('url')), 0, 10);
		}

		// Handle Facebook authorization
		function Authorize() {
			parse_str($_SERVER['QUERY_STRING'], $query);
			if (isset($query['state']) && strpos($query['state'], self::Authorize_secret()) !== false) {
				// Build new url
				$query['state'] = '';
				$query['al2fb_action'] = 'authorize';
				$url = admin_url('tools.php?page=' . plugin_basename($this->main_file));
				$url .= '&' . http_build_query($query, '', '&');

				// Debug info
				update_option(c_al2fb_log_redir_time, date('c'));
				update_option(c_al2fb_log_redir_ref, (empty($_SERVER['HTTP_REFERER']) ? null : $_SERVER['HTTP_REFERER']));
				update_option(c_al2fb_log_redir_from, $_SERVER['REQUEST_URI']);
				update_option(c_al2fb_log_redir_to, $url);

				// Redirect
				wp_redirect($url);
				exit();
			}
		}

		// Request token
		function Get_fb_token($user_ID) {
			$url = 'https://graph.facebook.com/oauth/access_token';
			$query = http_build_query(array(
				'client_id' => get_user_meta($user_ID, c_al2fb_meta_client_id, true),
				'redirect_uri' => self::Redirect_uri(),
				'client_secret' => get_user_meta($user_ID, c_al2fb_meta_app_secret, true),
				'code' => $_REQUEST['code']
			), '', '&');
			$response = self::Request($url, $query, 'GET');
			$key = 'access_token=';
			$access_token = substr($response, strpos($response, $key) + strlen($key));
			$access_token = explode('&', $access_token);
			$access_token = $access_token[0];
			return $access_token;
		}

		// Get application properties
		function Get_fb_application($user_ID) {
			$app_id = get_user_meta($user_ID, c_al2fb_meta_client_id, true);
			$url = 'https://graph.facebook.com/' . $app_id;
			$query = http_build_query(array(
				'access_token' => get_user_meta($user_ID, c_al2fb_meta_access_token, true)
			), '', '&');
			$response = self::Request($url, $query, 'GET');
			$app = json_decode($response);
			return $app;
		}

		// Get wall, page or group name and cache
		function Get_fb_me_cached($user_ID, $self) {
			$me_key = c_al2fb_transient_cache . md5('me' . $user_ID . ($self ? 'me' : ''));
			$me = get_transient($me_key);
			if ($me === false) {
				$me = self::Get_fb_me($user_ID, $self);
				if ($me != null) {
					$duration = intval(get_option(c_al2fb_option_msg_refresh));
					if (!$duration)
						$duration = 10;
					set_transient($me_key, $me, $duration * 60);
				}
			}
			return $me;
		}

		// Get wall, page or group name
		function Get_fb_me($user_ID, $self) {
			if (get_user_meta($user_ID, c_al2fb_meta_use_groups, true))
				$page_id = get_user_meta($user_ID, c_al2fb_meta_group, true);
			if (empty($page_id))
				$page_id = get_user_meta($user_ID, c_al2fb_meta_page, true);
			if ($self || empty($page_id))
				$page_id = 'me';
			$url = 'https://graph.facebook.com/' . $page_id;
			$token = self::Get_access_token_by_page($user_ID, $page_id);
			if (empty($token))
				return null;
			$query = http_build_query(array('access_token' => $token), '', '&');
			$response = self::Request($url, $query, 'GET');
			$me = json_decode($response);
			if ($me) {
				if (empty($me->link))	// Group
					$me->link = 'http://www.facebook.com/home.php?sk=group_' . $page_id;
				return $me;
			}
			else
				throw new Exception('Page "' . $page_id . '" not found');
		}

		// Get page list
		function Get_fb_pages($user_ID) {
			$url = 'https://graph.facebook.com/me/accounts';
			$query = http_build_query(array(
				'access_token' => get_user_meta($user_ID, c_al2fb_meta_access_token, true)
			), '', '&');
			$response = self::Request($url, $query, 'GET');
			$accounts = json_decode($response);
			return $accounts;
		}

		// Get group list
		function Get_fb_groups($user_ID) {
			$url = 'https://graph.facebook.com/me/groups';
			$query = http_build_query(array(
				'access_token' => get_user_meta($user_ID, c_al2fb_meta_access_token, true)
			), '', '&');
			$response = self::Request($url, $query, 'GET');
			$groups = json_decode($response);
			return $groups;
		}

		// Get comments and cache
		function Get_fb_comments_cached($user_ID, $link_id) {
			// Get (cached) comments
			$fb_key = c_al2fb_transient_cache . md5( 'c' . $link_id);
			$fb_comments = get_transient($fb_key);
			if ($this->debug)
				$fb_comments = false;
			if ($fb_comments === false) {
				$fb_comments = self::Get_fb_comments($user_ID, $link_id);

				$duration = intval(get_option(c_al2fb_option_msg_refresh));
				if (!$duration)
					$duration = 10;
				set_transient($fb_key, $fb_comments, $duration * 60);
			}
			return $fb_comments;
		}

		// Get comments
		function Get_fb_comments($user_ID, $id) {
			$url = 'https://graph.facebook.com/' . $id . '/comments';
			$query = http_build_query(array(
				'access_token' => get_user_meta($user_ID, c_al2fb_meta_access_token, true)
			), '', '&');
			$response = self::Request($url, $query, 'GET');
			$comments = json_decode($response);
			return $comments;
		}

		// Get likes and cache
		function Get_fb_likes_cached($user_ID, $link_id) {
			// Get (cached) likes
			$fb_key = c_al2fb_transient_cache . md5('l' . $link_id);
			$fb_likes = get_transient($fb_key);
			if ($this->debug)
				$fb_likes = false;
			if ($fb_likes === false) {
				$fb_likes = self::Get_fb_likes($user_ID, $link_id);

				$duration = intval(get_option(c_al2fb_option_msg_refresh));
				if (!$duration)
					$duration = 10;
				set_transient($fb_key, $fb_likes, $duration * 60);
			}
			return $fb_likes;
		}

		// Get likes
		function Get_fb_likes($user_ID, $id) {
			$url = 'https://graph.facebook.com/' . $id . '/likes';
			$query = http_build_query(array(
				'access_token' => get_user_meta($user_ID, c_al2fb_meta_access_token, true)
			), '', '&');
			$response = self::Request($url, $query, 'GET');
			$likes = json_decode($response);
			return $likes;
		}

		function Get_fb_feed($user_ID) {
			if (get_user_meta($user_ID, c_al2fb_meta_use_groups, true))
				$page_id = get_user_meta($user_ID, c_al2fb_meta_group, true);
			if (empty($page_id))
				$page_id = get_user_meta($user_ID, c_al2fb_meta_page, true);
			if (empty($page_id))
				$page_id = 'me';
			$url = 'https://graph.facebook.com/' . $page_id . '/feed';
			$token = self::Get_access_token_by_page($user_ID, $page_id);
			if (empty($token))
				return null;

			$query = http_build_query(array('access_token' => $token), '', '&');
			$response = self::Request($url, $query, 'GET');
			$posts = json_decode($response);
			return $posts;
		}

		// Get Facebook picture
		function Get_fb_picture_url_cached($id, $size) {
			$fb_key = c_al2fb_transient_cache . md5('p' . $id);
			$fb_url = get_transient($fb_key);
			if ($this->debug)
				$fb_url = false;
			if ($fb_url === false) {
				$fb_url = self::Get_fb_picture_url($id, 'normal');

				$duration = intval(get_option(c_al2fb_option_msg_refresh));
				if (!$duration)
					$duration = 10;
				set_transient($fb_key, $fb_url, $duration * 60);
			}
			return $fb_url;
		}

		// Get Facebook picture
		// Returns a HTTP 302 with the URL of the user's profile picture (use ?type=square | small | normal | large to request a different photo)
		function Get_fb_picture_url($id, $size) {
			$url = 'https://graph.facebook.com/' . $id . '/picture?' . $size;
			if (function_exists('curl_init') && !get_option(c_al2fb_option_nocurl)) {
				$timeout = get_option(c_al2fb_option_timeout);
				if (!$timeout)
					$timeout = 30;

				$c = curl_init();
				curl_setopt($c, CURLOPT_URL, $url);
				curl_setopt($c, CURLOPT_HEADER, 1);
				curl_setopt($c, CURLOPT_NOBODY, 1);
				curl_setopt($c, CURLOPT_RETURNTRANSFER, 1);
				curl_setopt($c, CURLOPT_TIMEOUT, $timeout);
				$headers = curl_exec($c);
				curl_close ($c);
				if (preg_match('/Location: (.*)/', $headers, $location))
					return trim($location[1]);
				else
					return false;
			}
			else if (function_exists('get_header') && ini_get('allow_url_fopen')) {
				$headers = get_headers($url, true);
				if (isset($headers['Location']))
					return $headers['Location'];
				else
					return false;
			}
			else
				return false;
		}

		function Post_submitbox_misc_actions() {
			self::Post_submit();
		}

		function Post_submitbox() {
		}

		// Add checkboxes
		function Post_submit() {
			global $post;
			$user_ID = self::Get_user_ID($post);

			// Get exclude indication
			$exclude = get_post_meta($post->ID, c_al2fb_meta_exclude, true);
			$link_id = get_post_meta($post->ID, c_al2fb_meta_link_id, true);
			if (!$link_id && get_user_meta($user_ID, c_al2fb_meta_exclude_default, true))
				$exclude = true;
			$chk_exclude = ($exclude ? ' checked' : '');

			// Get no like button indication
			$chk_nolike = (get_post_meta($post->ID, c_al2fb_meta_nolike, true) ? ' checked' : '');
			$chk_nointegrate = (get_post_meta($post->ID, c_al2fb_meta_nointegrate, true) ? ' checked' : '');

			// Check if errors
			$error = get_post_meta($post->ID, c_al2fb_meta_error, true);

			global $wp_version;
			if (version_compare($wp_version, '3.2') < 0) {
?>
				<div class="misc-pub-section"></div>
<?php		} ?>
			<div class="al2fb_post_submit">
			<div class="misc-pub-section">
<?php
			wp_nonce_field(plugin_basename(__FILE__), c_al2fb_nonce_form);
?>
			<input id="al2fb_exclude" type="checkbox" name="<?php echo c_al2fb_meta_exclude; ?>"<?php echo $chk_exclude; ?> />
			<label for="al2fb_exclude"><?php _e('Do not add link to Facebook', c_al2fb_text_domain); ?></label>
			<br />
			<input id="al2fb_nolike" type="checkbox" name="<?php echo c_al2fb_meta_nolike; ?>"<?php echo $chk_nolike; ?> />
			<label for="al2fb_nolike"><?php _e('Do not add like button', c_al2fb_text_domain); ?></label>
			<br />
			<input id="al2fb_nointegrate" type="checkbox" name="<?php echo c_al2fb_meta_nointegrate; ?>"<?php echo $chk_nointegrate; ?> />
			<label for="al2fb_nointegrate"><?php _e('Do not integrate comments', c_al2fb_text_domain); ?></label>

<?php		if (!empty($link_id)) { ?>
				<br />
				<input id="al2fb_update" type="checkbox" name="<?php echo c_al2fb_action_update; ?>"/>
				<label for="al2fb_update"><?php _e('Update existing Facebook link', c_al2fb_text_domain); ?></label>
				<br />
				<span class="al2fb_explanation"><?php _e('Comments and likes will be lost!', c_al2fb_text_domain); ?></span>
				<br />
				<input id="al2fb_delete" type="checkbox" name="<?php echo c_al2fb_action_delete; ?>"/>
				<label for="al2fb_delete"><?php _e('Delete existing Facebook link', c_al2fb_text_domain); ?></label>
				<br />
				<a href="<?php echo self::Get_fb_permalink($link_id); ?>" target="_blank"><?php _e('Link on Facebook', c_al2fb_text_domain); ?></a>
<?php		} ?>
<?php		if (!empty($error)) { ?>
				<br />
				<input id="al2fb_clear" type="checkbox" name="<?php echo c_al2fb_action_clear; ?>"/>
				<label for="al2fb_clear"><?php _e('Clear error messages', c_al2fb_text_domain); ?></label>
<?php		} ?>
			</div>
			</div>
<?php
		}

		// Add post Facebook column
		function Manage_posts_columns($posts_columns) {
			// Get current user
			global $user_ID;
			get_currentuserinfo();

			if (current_user_can(get_option(c_al2fb_option_min_cap)) &&
				!get_user_meta($user_ID, c_al2fb_meta_not_post_list, true))
				$posts_columns['al2fb'] = __('Facebook', c_al2fb_text_domain);
			return $posts_columns;
		}

		// Populate post facebook column
		function Manage_posts_custom_column($column_name, $post_ID) {
			if ($column_name == 'al2fb') {
				$link_id = get_post_meta($post_ID, c_al2fb_meta_link_id, true);
				if ($link_id)
					echo '<a href="' . self::Get_fb_permalink($link_id) . '" target="_blank">' . __('Yes', c_al2fb_text_domain) . '</a>';
				else
					echo '<span>' . __('No', c_al2fb_text_domain) . '</span>';

				if ($link_id) {
					$post = get_post($post_ID);
					$user_ID = self::Get_user_ID($post);

					// Show number of comments
					if (get_user_meta($user_ID, c_al2fb_meta_fb_comments, true)) {
						$fb_comments = self::Get_comments_or_likes($post, false);
						if (!empty($fb_comments))
							echo '<br /><span>' . count($fb_comments->data) . ' ' . __('comments', c_al2fb_text_domain) . '</span>';
					}

					// Show number of likes
					if (get_user_meta($user_ID, c_al2fb_meta_fb_likes, true)) {
						$fb_likes = self::Get_comments_or_likes($post, true);
						if (!empty($fb_likes))
							echo '<br /><span>' . count($fb_comments->data) . ' ' . __('likes', c_al2fb_text_domain) . '</span>';
					}
				}
			}
		}

		// Add post meta box
		function Add_meta_boxes() {
			add_meta_box(
				'al2fb_meta',
				__('Add Link to Facebook', c_al2fb_text_domain),
				array(&$this, 'Meta_box'),
				'post');
			add_meta_box(
				'al2fb_meta',
				__('Add Link to Facebook', c_al2fb_text_domain),
				array(&$this, 'Meta_box'),
				'page');
		}

		// Display attached image selector
		function Meta_box() {
			// Security
			wp_nonce_field(plugin_basename(__FILE__), c_al2fb_nonce_form);

			if ($this->debug) {
				global $post;
				$texts = self::Get_texts($post);
				echo '<strong>Original:</strong> ' . htmlspecialchars($post->post_content) . '<br />';
				echo '<strong>Processed:</strong> ' . htmlspecialchars($texts['content']) . '<br />';
			}

			if (function_exists('wp_get_attachment_image_src')) {
				// Get attached images
				global $post;
				$images = &get_children('post_type=attachment&post_mime_type=image&order=ASC&post_parent=' . $post->ID);
				if (empty($images))
					echo '<span>' . __('No images in the media library for this post', c_al2fb_text_domain) . '</span><br />';
				else {
					// Display image selector
					$disabled = get_post_meta($post->ID, c_al2fb_meta_link_id, true);
					$disabled = (empty($disabled) ? '' : ' disabled');
					$image_id = get_post_meta($post->ID, c_al2fb_meta_image_id, true);

					// Header
					echo '<h4>' . __('Select link image:', c_al2fb_text_domain) . '</h4>';
					echo '<div class="al2fb_images">';

					// None
					echo '<div class="al2fb_image">';
					echo '<input type="radio" name="al2fb_image_id" id="al2fb_image_0"';
					if (empty($image_id))
						echo ' checked';
					echo $disabled;
					echo ' value="0">';
					echo '<br />';
					echo '<label for="al2fb_image_0">';
					echo __('None', c_al2fb_text_domain) . '</label>';
					echo '</div>';

					// Images
					if ($images)
						foreach ($images as $attachment_id => $attachment) {
							$picture = wp_get_attachment_image_src($attachment_id, 'thumbnail');

							echo '<div class="al2fb_image">';
							echo '<input type="radio" name="al2fb_image_id" id="al2fb_image_' . $attachment_id . '"';
							if ($attachment_id == $image_id)
								echo ' checked';
							echo $disabled;
							echo ' value="' . $attachment_id . '">';
							echo '<br />';
							echo '<label for="al2fb_image_' . $attachment_id . '">';
							echo '<img src="' . $picture[0] . '" alt=""></label>';
							echo '<br />';
							echo '<span>' . $picture[1] . ' x ' . $picture[2] . '</span>';
							echo '</div>';
						}
					echo '</div>';
				}
			}
			else
				echo 'wp_get_attachment_image_src does not exist';

			$excerpt = get_post_meta($post->ID, c_al2fb_meta_excerpt, true);
			echo '<h4>' . __('Custom exerpt', c_al2fb_text_domain) . '</h4>';
			echo '<textarea id="al2fb_excerpt" name="al2fb_excerpt" cols="40" rows="1" class="attachmentlinks">';
			echo $excerpt . '</textarea>';
		}

		// Save indications & selected attached image
		function Save_post($post_id) {
			// Security checks
			$nonce = (isset($_POST[c_al2fb_nonce_form]) ? $_POST[c_al2fb_nonce_form] : null);
			if (!wp_verify_nonce($nonce, plugin_basename(__FILE__)))
				return $post_id;
			if (!current_user_can('edit_post', $post_id))
				return $post_id;

			// Skip auto save
			if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE)
				return $post_id;

			// Process exclude indication
			if (isset($_POST[c_al2fb_meta_exclude]) && $_POST[c_al2fb_meta_exclude])
				update_post_meta($post_id, c_al2fb_meta_exclude, true);
			else
				delete_post_meta($post_id, c_al2fb_meta_exclude);

			// Process no like indication
			if (isset($_POST[c_al2fb_meta_nolike]) && $_POST[c_al2fb_meta_nolike])
				update_post_meta($post_id, c_al2fb_meta_nolike, true);
			else
				delete_post_meta($post_id, c_al2fb_meta_nolike);

			// Process no integrate indication
			if (isset($_POST[c_al2fb_meta_nointegrate]) && $_POST[c_al2fb_meta_nointegrate])
				update_post_meta($post_id, c_al2fb_meta_nointegrate, true);
			else
				delete_post_meta($post_id, c_al2fb_meta_nointegrate);

			// Clear errors
			if (isset($_POST[c_al2fb_action_clear]) && $_POST[c_al2fb_action_clear])
				delete_post_meta($post_id, c_al2fb_meta_error);

			// Persist data
			if (empty($_POST['al2fb_image_id']))
				delete_post_meta($post_id, c_al2fb_meta_image_id);
			else
				update_post_meta($post_id, c_al2fb_meta_image_id, $_POST['al2fb_image_id']);

			if (isset($_POST['al2fb_excerpt']) && !empty($_POST['al2fb_excerpt']))
				update_post_meta($post_id, c_al2fb_meta_excerpt, $_POST['al2fb_excerpt']);
		}

		// Remote publish & custom action
		function Remote_publish($post_ID) {
			$post = get_post($post_ID);

			// Only if published
			if ($post->post_status == 'publish')
				self::Publish_post($post);
		}

		// Workaround
		function Future_to_publish($post_ID) {
			$post = get_post($post_ID);

			// Delegate
			self::Transition_post_status('publish', 'future', $post);
		}

		// Handle post status change
		function Transition_post_status($new_status, $old_status, $post) {
			$user_ID = self::Get_user_ID($post);
			$update = (isset($_POST[c_al2fb_action_update]) && $_POST[c_al2fb_action_update]);
			$delete = (isset($_POST[c_al2fb_action_delete]) && $_POST[c_al2fb_action_delete]);

			// Security check
			if (self::user_can($user_ID, get_option(c_al2fb_option_min_cap))) {
				// Add, update or delete link
				if ($update || $delete) {
					$link_id = get_post_meta($post->ID, c_al2fb_meta_link_id, true);
					if (!empty($link_id) && self::Is_authorized($user_ID))
						self::Delete_fb_link($post);
				}
				if (!$delete) {
					// Check post status
					if ($new_status == 'publish' &&
						($new_status != $old_status || $update ||
						get_post_meta($post->ID, c_al2fb_meta_error, true)))
						self::Publish_post($post);
				}
			}
		}

		// Handle publish post / XML-RPC publish post
		function Publish_post($post) {
			$user_ID = self::Get_user_ID($post);

			// Checks
			if (self::user_can($user_ID, get_option(c_al2fb_option_min_cap))) {
				// Check if not added
				if (self::Is_authorized($user_ID) &&
					!get_post_meta($post->ID, c_al2fb_meta_link_id, true) &&
					!get_post_meta($post->ID, c_al2fb_meta_exclude, true)) {

					$add_new_page = get_user_meta($user_ID, c_al2fb_meta_add_new_page, true);

					$exclude_category = false;
					$categories = get_the_category($post->ID);
					$excluding_categories = explode(',', get_option(c_al2fb_option_exclude_cat));
					if ($categories)
						foreach ($categories as $category)
							if (in_array($category->cat_ID, $excluding_categories))
								$exclude_category = true;

					$ex_custom_types = explode(',', get_option(c_al2fb_option_exclude_type));
					$ex_custom_types[] = 'nav_menu_item';

					// Check if public post
					if (empty($post->post_password) &&
						($post->post_type != 'page' || $add_new_page) &&
						!in_array($post->post_type, $ex_custom_types) &&
						!$exclude_category)
						self::Add_fb_link($post);
				}
			}
		}

		// Build texts for link/ogp
		function Get_texts($post) {
			$user_ID = self::Get_user_ID($post);

			// Filter texts
			$excerpt = get_post_meta($post->ID, c_al2fb_meta_excerpt, true);
			if (empty($excerpt))
				$excerpt = $post->post_excerpt;
			$excerpt = apply_filters('al2fb_excerpt', $excerpt, $post);
			$content = apply_filters('al2fb_content', $post->post_content, $post);

			// Get body
			$description = '';
			if (get_user_meta($user_ID, c_al2fb_meta_msg, true))
				$description = $content;
			else
				$description = ($excerpt ? $excerpt : $content);

			// Trailer: limit body size
			$trailer = get_user_meta($user_ID, c_al2fb_meta_trailer, true);
			if ($trailer) {
				$trailer = preg_replace('/<[^>]*>/', '', $trailer);

				// Get maximum FB description size
				$maxlen = get_option(c_al2fb_option_max_descr);
				if (!$maxlen)
					$maxlen = 256;

				// Add maximum number of sentences
				$lines = explode('.', $description);
				if ($lines) {
					$count = 0;
					$description = '';
					foreach ($lines as $sentence) {
						$line = $sentence;
						if ($count + 1 < count($lines))
							$line .= '.';
						if (strlen($description) + strlen($line) + strlen($trailer) < $maxlen)
							$description .= $line;
						else
							break;
					}
					if (empty($description) && count($lines) > 0)
						$description = substr($lines[0], 0, $maxlen - strlen($trailer));
					$description .= $trailer;
				}
			}

			// Build result
			$texts = array(
				'excerpt' => $excerpt,
				'content' => $content,
				'description' => $description
			);
			return $texts;
		}

		// Get link picture
		function Get_link_picture($post, $user_ID) {
			// Get selected image
			$image_id = get_post_meta($post->ID, c_al2fb_meta_image_id, true);
			if (!empty($image_id) && function_exists('wp_get_attachment_thumb_url')) {
				$picture_type = 'meta';
				$picture = wp_get_attachment_thumb_url($image_id);
			}

			if (empty($picture)) {
				// Default picture
				$picture = get_user_meta($user_ID, c_al2fb_meta_picture_default, true);
				if (empty($picture))
					$picture = self::Redirect_uri() . '?al2fb_image=1';

				// Check picture type
				$picture_type = get_user_meta($user_ID, c_al2fb_meta_picture_type, true);
				if ($picture_type == 'media') {
					$images = array_values(get_children('post_type=attachment&post_mime_type=image&order=ASC&post_parent=' . $post->ID));
					if (!empty($images) && function_exists('wp_get_attachment_image_src')) {
						$picture = wp_get_attachment_image_src($images[0]->ID, 'thumbnail');
						if ($picture && $picture[0])
							$picture = $picture[0];
					}
				}
				else if ($picture_type == 'featured') {
					if (current_theme_supports('post-thumbnails') &&
						function_exists('get_post_thumbnail_id') &&
						function_exists('wp_get_attachment_image_src')) {
						$picture_id = get_post_thumbnail_id($post->ID);
						if ($picture_id) {
							$picture = wp_get_attachment_image_src($picture_id, 'thumbnail');
							if ($picture && $picture[0])
								$picture = $picture[0];
						}
					}
				}
				else if ($picture_type == 'facebook')
					$picture = '';
				else if ($picture_type == 'post') {
					if (preg_match('/< *img[^>]*src *= *["\']([^"\']*)["\']/i', do_shortcode($post->post_content), $matches))
						$picture = $matches[1];
				}
				else if ($picture_type == 'avatar') {
					$userdata = get_userdata($post->post_author);
					$avatar = get_avatar($userdata->user_email);
					if (!empty($avatar))
						if (preg_match('/< *img[^>]*src *= *["\']([^"\']*)["\']/i', $avatar, $matches))
							$picture = $matches[1];
				}
				else if ($picture_type == 'userphoto') {
					$userdata = get_userdata($post->post_author);
					if ($userdata->userphoto_approvalstatus == USERPHOTO_APPROVED) {
						$image_file = $userdata->userphoto_image_file;
						$upload_dir = wp_upload_dir();
						$picture = trailingslashit($upload_dir['baseurl']) . 'userphoto/' . $image_file;
					}
				}
				else if ($picture_type == 'custom') {
					$custom = get_user_meta($user_ID, c_al2fb_meta_picture, true);
					if ($custom)
						$picture = $custom;
				}
			}

			return array(
				'picture' => $picture,
				'picture_type' => $picture_type
			);
		}

		function Get_fb_permalink($link_id) {
			if (empty($link_id))
				return '';
			$ids = explode('_', $link_id);
			return 'http://www.facebook.com/permalink.php?story_fbid=' . $ids[1] . '&id=' . $ids[0];
		}

		function Filter_excerpt($excerpt, $post) {
			return self::Filter_standard($excerpt, $post);
		}

		function Filter_content($content, $post) {
			return self::Filter_standard($content, $post);
		}

		function Filter_standard($text, $post) {
			$user_ID = self::Get_user_ID($post);

			// Convert to UTF-8 if needed
			$text = self::Convert_encoding($user_ID, $text);

			// Execute shortcodes
			$text = do_shortcode($text);

			// http://www.php.net/manual/en/reference.pcre.pattern.modifiers.php

			// Remove scripts
			$text = preg_replace('/<script.+?<\/script>/ims', '', $text);

			// Remove styles
			$text = preg_replace('/<style.+?<\/style>/ims', '', $text);

			// Replace hyperlinks
			if (get_user_meta($user_ID, c_al2fb_meta_hyperlink, true))
				$text = preg_replace('/< *a[^>]*href *= *["\']([^"\']*)["\'][^<]*/i', '$1<a>', $text);

			// Remove image captions
			$text = preg_replace('/<p[^>]*class="wp-caption-text"[^>]*>[^<]*<\/p>/i', '', $text);

			// Get plain texts
			$text = preg_replace('/<[^>]*>/', '', $text);

			// Truncate text
			$maxtext = get_option(c_al2fb_option_max_text);
			if (!$maxtext)
				$maxtext = 10000;
			$text = substr($text, 0, $maxtext);

			return $text;
		}

		// Convert charset
		function Convert_encoding($user_ID, $text) {
			$blog_encoding = get_option('blog_charset');
			$fb_encoding = get_user_meta($user_ID, c_al2fb_meta_fb_encoding, true);
			if (empty($fb_encoding))
				$fb_encoding = 'UTF-8';

			if ($blog_encoding != $fb_encoding && function_exists('mb_convert_encoding'))
				return @mb_convert_encoding($text, $fb_encoding, $blog_encoding);
			else
				return $text;
		}

		// Add Link to Facebook
		function Add_fb_link($post) {
			// Get url
			$user_ID = self::Get_user_ID($post);
			if (get_user_meta($user_ID, c_al2fb_meta_shortlink, true))
				$link = wp_get_shortlink($post->ID);
			if (empty($link))
				$link = get_permalink($post->ID);

			// Get processed texts
			$texts = self::Get_texts($post);
			$excerpt = $texts['excerpt'];
			$content = $texts['content'];
			$description = $texts['description'];

			// Get name
			$name = self::Convert_encoding($user_ID, $post->post_title);

			// Get caption
			$caption = '';
			if (get_user_meta($user_ID, c_al2fb_meta_caption, true)) {
				$caption = html_entity_decode(get_bloginfo('title'), ENT_QUOTES, get_bloginfo('charset'));
				$caption = self::Convert_encoding($user_ID, $caption);
			}

			// Get link picture
			$picture_info = self::Get_link_picture($post, $user_ID);
			$picture = $picture_info['picture'];
			$picture_type = $picture_info['picture_type'];

			// Get user note
			$message = '';
			if (get_user_meta($user_ID, c_al2fb_meta_msg, true))
				$message = $excerpt;

			// Do not disturb WordPress
			try {
				// Build request
				if (get_user_meta($user_ID, c_al2fb_meta_use_groups, true))
					$page_id = get_user_meta($user_ID, c_al2fb_meta_group, true);
				if (empty($page_id))
					$page_id = get_user_meta($user_ID, c_al2fb_meta_page, true);
				if (empty($page_id))
					$page_id = 'me';
				$url = 'https://graph.facebook.com/' . $page_id . '/feed';

				$query_array = array(
					'access_token' => self::Get_access_token_by_post($post),
					'link' => $link,
					'name' => $name,
					'caption' => $caption,
					'description' => $description,
					'picture' => $picture,
					'message' => $message
				);

				// Add share link
				if (get_user_meta($user_ID, c_al2fb_meta_share_link, true)) {
					// http://forum.developers.facebook.net/viewtopic.php?id=50049
					// http://bugs.developers.facebook.net/show_bug.cgi?id=9075
					$actions = array(
						'name' => __('Share', c_al2fb_text_domain),
						'link' => 'http://www.facebook.com/share.php?u=' . urlencode($link) . '&t=' . urlencode($post->post_title)
					);
					$query_array['actions'] = json_encode($actions);
				}

				// http://developers.facebook.com/docs/reference/api/link/
				$query = http_build_query($query_array, '', '&');

				// Execute request
				$response = self::Request($url, $query, 'POST');
				$fb_link = json_decode($response);

				// Register link/date
				add_post_meta($post->ID, c_al2fb_meta_link_id, $fb_link->id);
				update_post_meta($post->ID, c_al2fb_meta_link_time, date('c'));
				update_post_meta($post->ID, c_al2fb_meta_link_picture, $picture_type . '=' . $picture);
				delete_post_meta($post->ID, c_al2fb_meta_error);

				// Update stats
				$this->Update_statistics('add', $post);
			}
			catch (Exception $e) {
				add_post_meta($post->ID, c_al2fb_meta_error, $e->getMessage());
				update_post_meta($post->ID, c_al2fb_meta_link_time, date('c'));
				update_post_meta($post->ID, c_al2fb_meta_link_picture, $picture_type . '=' . $picture);
			}
		}

		// Delete Link from Facebook
		function Delete_fb_link($post) {
			// Do not disturb WordPress
			try {
				// Build request
				// http://developers.facebook.com/docs/reference/api/link/
				$link_id = get_post_meta($post->ID, c_al2fb_meta_link_id, true);
				$url = 'https://graph.facebook.com/' . $link_id;
				$query = http_build_query(array(
					'access_token' => self::Get_access_token_by_post($post),
					'method' => 'delete'
				), '', '&');

				// Execute request
				$response = self::Request($url, $query, 'POST');

				// Delete meta data
				delete_post_meta($post->ID, c_al2fb_meta_link_id);
				delete_post_meta($post->ID, c_al2fb_meta_link_time);
				delete_post_meta($post->ID, c_al2fb_meta_link_picture);
				delete_post_meta($post->ID, c_al2fb_meta_error);

				// Update stats
				$this->Update_statistics('del', $post);
			}
			catch (Exception $e) {
				add_post_meta($post->ID, c_al2fb_meta_error, $e->getMessage());
				update_post_meta($post->ID, c_al2fb_meta_link_time, date('c'));
			}
		}

		// Delete Link from Facebook
		function Delete_fb_link_comment($comment) {
			// Get data
			$fb_comment_id = get_comment_meta($comment->comment_ID, c_al2fb_meta_fb_comment_id, true);
			if (empty($fb_comment_id))
				return;
			$post = get_post($comment->comment_post_ID);
			if (empty($post))
				return;

			// Do not disturb WordPress
			try {
				// Build request
				$url = 'https://graph.facebook.com/' . $fb_comment_id;
				$query = http_build_query(array(
					'access_token' => self::Get_access_token_by_post($post),
					'method' => 'delete'
				), '', '&');

				// Execute request
				$response = self::Request($url, $query, 'POST');

				// Delete meta data
				delete_comment_meta($comment->comment_ID, c_al2fb_meta_fb_comment_id);
			}
			catch (Exception $e) {
				add_post_meta($post->ID, c_al2fb_meta_error, $e->getMessage());
			}
		}

		// New comment
		function Comment_post($comment_ID) {
			$comment = get_comment($comment_ID);
			if ($comment->comment_approved == '1')
				self::Add_fb_link_comment($comment);
		}

		// Approved comment
		function Comment_approved($comment) {
			self::Add_fb_link_comment($comment);
		}

		// Disapproved comment
		function Comment_unapproved($comment) {
			self::Delete_fb_link_comment($comment);
		}

		// Add comment to link
		function Add_fb_link_comment($comment) {
			// Get data
			$fb_comment_id = get_comment_meta($comment->comment_ID, c_al2fb_meta_fb_comment_id, true);
			if (!empty($fb_comment_id))
				return;
			$post = get_post($comment->comment_post_ID);
			if (empty($post))
				return;
			$link_id = get_post_meta($post->ID, c_al2fb_meta_link_id, true);
			if (empty($link_id))
				return;
			if (get_post_meta($post->ID, c_al2fb_meta_nointegrate, true))
				return;
			$user_ID = self::Get_user_ID($post);
			if (!get_user_meta($user_ID, c_al2fb_meta_fb_comments_postback, true))
				return;

			// Build message
			$message = $comment->comment_author . ' ' .  __('commented on', c_al2fb_text_domain) . ' ';
			$message .= html_entity_decode(get_bloginfo('title'), ENT_QUOTES, get_bloginfo('charset')) . ":\n\n";
			$message .= $comment->comment_content;
			$message = self::Convert_encoding($user_ID, $message);

			// Do not disturb WordPress
			try {
				$url = 'https://graph.facebook.com/' . $link_id . '/comments';

				$query_array = array(
					'access_token' => self::Get_access_token_by_post($post),
					'message' => $message
				);

				// http://developers.facebook.com/docs/reference/api/Comment/
				$query = http_build_query($query_array, '', '&');

				// Execute request
				$response = self::Request($url, $query, 'POST');

				// Process response
				$fb_comment = json_decode($response);
				add_comment_meta($comment->comment_ID, c_al2fb_meta_fb_comment_id, $fb_comment->id);
			}
			catch (Exception $e) {
				add_post_meta($post->ID, c_al2fb_meta_error, $e->getMessage());
			}
		}

		function Is_authorized($user_ID) {
			return get_user_meta($user_ID, c_al2fb_meta_access_token, true);
		}

		// Get correct access for post
		function Get_access_token_by_post($post) {
			$user_ID = self::Get_user_ID($post);
			$page_id = get_user_meta($user_ID, c_al2fb_meta_page, true);
			return self::Get_access_token_by_page($user_ID, $page_id);
		}

		// Get access token for page
		function Get_access_token_by_page($user_ID, $page_id) {
			$access_token = get_user_meta($user_ID, c_al2fb_meta_access_token, true);
			if ($page_id && $page_id != 'me' &&
				get_user_meta($user_ID, c_al2fb_meta_page_owner, true)) {
				$found = false;
				$pages = self::Get_fb_pages($user_ID);
				if ($pages->data)
					foreach ($pages->data as $page)
						if ($page->id == $page_id) {
							$found = true;
							$access_token = $page->access_token;
						}
			}
			return $access_token;
		}

		// HTML header
		function WP_head() {
			if (is_single() || is_page()) {
				global $post;
				$user_ID = self::Get_user_ID($post);
				if (get_user_meta($user_ID, c_al2fb_meta_open_graph, true)) {
					$charset = get_bloginfo('charset');
					$title = html_entity_decode(get_bloginfo('title'), ENT_QUOTES, get_bloginfo('charset'));

					// Get link picture
					$link_picture = get_post_meta($post->ID, c_al2fb_meta_link_picture, true);
					if (empty($link_picture)) {
						$picture_info = self::Get_link_picture($post, $user_ID);
						$picture = $picture_info['picture'];
						if (empty($picture))
							$picture = self::Redirect_uri() . '?al2fb_image=1';
					}
					else
						$picture = substr($link_picture, strpos($link_picture, '=') + 1);

					// Get type
					$ogp_type = get_user_meta($user_ID, c_al2fb_meta_open_graph_type, true);
					if (empty($ogp_type))
						$ogp_type = 'article';

					// Generate meta tags
					echo '<meta property="og:title" content="' . htmlspecialchars($post->post_title, ENT_QUOTES, $charset) . '" />' . PHP_EOL;
					echo '<meta property="og:type" content="' . $ogp_type . '" />' . PHP_EOL;
					echo '<meta property="og:url" content="' . get_permalink($post->ID) . '" />' . PHP_EOL;
					echo '<meta property="og:image" content="' . $picture . '" />' . PHP_EOL;
					echo '<meta property="og:site_name" content="' . htmlspecialchars($title, ENT_QUOTES, $charset) . '" />' . PHP_EOL;

					if (is_single()) {
						$texts = self::Get_texts($post);
						echo '<meta property="og:description" content="' . htmlspecialchars($texts['description'], ENT_QUOTES, $charset) . '" />' . PHP_EOL;
					}

					$appid = get_user_meta($user_ID, c_al2fb_meta_client_id, true);
					if (!empty($appid))
						echo '<meta property="fb:app_id" content="' . $appid . '" />' . PHP_EOL;

					$admins = get_user_meta($user_ID, c_al2fb_meta_open_graph_admins, true);
					if (!empty($admins))
						echo '<meta property="fb:admins" content="' . $admins . '" />' . PHP_EOL;
				}
			}

			else if (is_home())
			{
				// Check if any user has enabled the OGP
				global $wpdb;
				$opg = false;
				$rows = $wpdb->get_results("SELECT meta_value FROM " . $wpdb->usermeta . " WHERE meta_key='" . c_al2fb_meta_open_graph . "'");
				foreach ($rows as $row)
					if ($row->meta_value) {
						$opg = true;
						break;
					}

				// Generate meta tags
				if ($opg) {
					$charset = get_bloginfo('charset');
					$title = html_entity_decode(get_bloginfo('title'), ENT_QUOTES, get_bloginfo('charset'));
					echo '<meta property="og:title" content="' . htmlspecialchars($title, ENT_QUOTES, $charset) . '" />' . PHP_EOL;
					echo '<meta property="og:type" content="blog" />' . PHP_EOL;
					echo '<meta property="og:url" content="' . get_home_url() . '" />' . PHP_EOL;
				}
			}
		}

		// Additional styles
		function WP_print_styles() {
			$css = get_option(c_al2fb_option_css);
			if (!empty($css)) {
				echo '<style type="text/css">' . PHP_EOL;
				echo $css;
				echo '</style>' . PHP_EOL;
			}
		}

		// Flattr script
		function WP_print_scripts() {
			echo '<script type="text/javascript">';
			echo '/* <![CDATA[ */';
			echo '(function() {';
			echo "var s = document.createElement('script'), t = document.getElementsByTagName('script')[0];";
			echo "s.type = 'text/javascript';";
			echo "s.async = true;";
			echo "s.src = 'http://api.flattr.com/js/0.6/load.js?mode=auto';";
			echo "t.parentNode.insertBefore(s, t);";
			echo '})();';
			echo '/* ]]> */';
			echo '</script>';
		}

		// Post content
		function The_content($content = '') {
			global $post;

			$user_ID = self::Get_user_ID($post);
			if (!(get_user_meta($user_ID, c_al2fb_meta_like_nohome, true) && is_home()) &&
				!(get_user_meta($user_ID, c_al2fb_meta_like_noposts, true) && is_single()) &&
				!(get_user_meta($user_ID, c_al2fb_meta_like_nopages, true) && is_page()) &&
				!(get_user_meta($user_ID, c_al2fb_meta_like_noarchives, true) && is_archive()) &&
				!(get_user_meta($user_ID, c_al2fb_meta_like_nocategories, true) && is_category())) {

				// Show likers
				if (get_user_meta($user_ID, c_al2fb_meta_post_likers, true)) {
					$likers = self::Get_likers($post);
					if (!empty($likers))
						if (get_user_meta($user_ID, c_al2fb_meta_like_top, true))
							$content = $likers . $content;
						else
							$content .= $likers;
				}

				// Show like button
				if (!get_post_meta($post->ID, c_al2fb_meta_nolike, true)) {
					if (get_user_meta($user_ID, c_al2fb_meta_post_like_button, true))
						$button = self::Get_like_button($post, false);
					if (get_user_meta($user_ID, c_al2fb_meta_post_send_button, true) &&
						!get_user_meta($user_ID, c_al2fb_meta_post_combine_buttons, true))
						$button .= self::Get_send_button($post);
				}
				if (!empty($button))
					if (get_user_meta($user_ID, c_al2fb_meta_like_top, true))
						$content = $button . $content;
					else
						$content .= $button;
			}

			return $content;
		}

		// Shortcode likers names
		function Shortcode_likers($atts) {
			extract(shortcode_atts(array('post_id' => null), $atts));
			if (empty($post_id))
				global $post;
			else
				$post = get_post($post_id);
			if (isset($post))
				return self::Get_likers($post);
		}

		// Shortcode like button
		function Shortcode_like_button($atts) {
			extract(shortcode_atts(array('post_id' => null), $atts));
			if (empty($post_id))
				global $post;
			else
				$post = get_post($post_id);
			if (isset($post))
				return self::Get_like_button($post, false);
		}

		// Shortcode like box
		function Shortcode_like_box($atts) {
			extract(shortcode_atts(array('post_id' => null), $atts));
			if (empty($post_id))
				global $post;
			else
				$post = get_post($post_id);
			if (isset($post))
				return self::Get_like_button($post, true);
		}

		// Shortcode send button
		function Shortcode_send_button($atts) {
			extract(shortcode_atts(array('post_id' => null), $atts));
			if (empty($post_id))
				global $post;
			else
				$post = get_post($post_id);
			if (isset($post))
				return self::Get_send_button($post);
		}

		// Shortcode comments plugin
		function Shortcode_comments_plugin($atts) {
			extract(shortcode_atts(array('post_id' => null), $atts));
			if (empty($post_id))
				global $post;
			else
				$post = get_post($post_id);
			if (isset($post))
				return self::Get_comments_plugin($post);
		}

		// Get HTML for likers
		function Get_likers($post) {
			$user_ID = self::Get_user_ID($post);
			$likers = '';
			$charset = get_bloginfo('charset');
			$fb_likes = self::Get_comments_or_likes($post, true);
			if ($fb_likes)
				foreach ($fb_likes->data as $fb_like) {
					if (!empty($likers))
						$likers .= ', ';
					if (get_user_meta($user_ID, c_al2fb_meta_fb_comments_nolink, true) == 'author') {
						$link = 'http://www.facebook.com/profile.php?id=' . $fb_like->id;
						$likers .= '<a href="' . $link . '" rel="nofollow">' . htmlspecialchars($fb_like->name, ENT_QUOTES, $charset) . '</a>';
					}
					else
						$likers .= htmlspecialchars($fb_like->name, ENT_QUOTES, $charset);
				}

			if (!empty($likers)) {
				$likers .= ' <span class="al2fb_liked">' . _n('liked this post', 'liked this post', count($fb_likes->data), c_al2fb_text_domain) . '</span>';
				$likers = '<div class="al2fb_likers">' . $likers . '</div>';
			}
			return $likers;
		}

		function Get_locale($user_ID) {
			$locale = get_user_meta($user_ID, c_al2fb_meta_fb_locale, true);
			if (empty($locale)) {
				$locale = defined('WPLANG') ? WPLANG : '';
				$locale = str_replace('-', '_', $locale);
				if (empty($locale) || strlen($locale) != 5)
					$locale = 'en_US';
			}
			return $locale;
		}

		// Button:

		// Box:
		// - URL (generated)
		// - Width
		// - Border color
		// - Show stream
		// - Show header

		// Common:
		// - Color scheme
		// - Show faces

		// Get HTML for like button
		function Get_like_button($post, $box) {
			$user_ID = self::Get_user_ID($post);

			// Get language
			$lang = self::Get_locale($user_ID);

			// Get options
			$layout = get_user_meta($user_ID, c_al2fb_meta_like_layout, true);
			$faces = get_user_meta($user_ID, c_al2fb_meta_like_faces, true);
			if ($box)
				$width = get_user_meta($user_ID, c_al2fb_meta_like_box_width, true);
			else
				$width = get_user_meta($user_ID, c_al2fb_meta_like_width, true);
			$action = get_user_meta($user_ID, c_al2fb_meta_like_action, true);
			$font = get_user_meta($user_ID, c_al2fb_meta_like_font, true);
			$colorscheme = get_user_meta($user_ID, c_al2fb_meta_like_colorscheme, true);
			$border = get_user_meta($user_ID, c_al2fb_meta_like_box_border, true);
			$noheader = get_user_meta($user_ID, c_al2fb_meta_like_box_noheader, true);
			$nostream = get_user_meta($user_ID, c_al2fb_meta_like_box_nostream, true);

			$link = get_user_meta($user_ID, c_al2fb_meta_like_link, true);
			if (empty($link))
				if ($box) {
					// Get page
					if (self::Is_authorized($user_ID) &&
						!get_user_meta($user_ID, c_al2fb_meta_use_groups, true) &&
						get_user_meta($user_ID, c_al2fb_meta_page, true))
						try {
							$page = self::Get_fb_me_cached($user_ID, false);
							$link = $page->link;
						}
						catch (Exception $e) {
						}
				}
				else
					$link = get_permalink($post->ID);

			// Build content
			$content = ($box ? '<div class="al2fb_like_box">' : '<div class="al2fb_like_button">');
			$content .= '<div id="fb-root"></div>';
			$content .= '<script src="http://connect.facebook.net/' . $lang . '/all.js#xfbml=1" type="text/javascript"></script>';
			$content .= ($box ? '<fb:like-box' : '<fb:like');
			$content .= ' href="' . $link . '"';
			if (!$box && get_user_meta($user_ID, c_al2fb_meta_post_combine_buttons, true))
				$content .= ' send="true"';
			if (!$box)
				$content .= ' layout="' . (empty($layout) ? 'standard' : $layout) . '"';
			$content .= ' show_faces="' . ($faces ? 'true' : 'false') . '"';
			$content .= ' width="' . (empty($width) ? ($box ? '292' : '450') : $width) . '"';
			if (!$box) {
				$content .= ' action="' . (empty($action) ? 'like' : $action) . '"';
				$content .= ' font="' . (empty($font) ? 'arial' : $font) . '"';
			}
			$content .= ' colorscheme="' . (empty($colorscheme) ? 'light' : $colorscheme) . '"';
			if (!$box)
				$content .= ' ref="AL2FB"';
			if ($box) {
				$content .= ' border_color="' . $border . '"';
				$content .= ' stream="' . ($nostream ? 'false' : 'true') . '"';
				$content .= ' header="' . ($noheader ? 'false' : 'true') . '"';
			}
			$content .= ($box ? '></fb:like-box>' : '></fb:like>');
			$content .= '</div>';

			return $content;
		}

		// Get HTML for like button
		function Get_send_button($post) {
			$user_ID = self::Get_user_ID($post);

			// Get language
			$lang = self::Get_locale($user_ID);

			// Get options
			$font = get_user_meta($user_ID, c_al2fb_meta_like_font, true);
			$colorscheme = get_user_meta($user_ID, c_al2fb_meta_like_colorscheme, true);
			$link = get_user_meta($user_ID, c_al2fb_meta_like_link, true);
			if (empty($link))
				$link = get_permalink($post->ID);

			// Send button
			$content = '<div class="al2fb_send_button">';
			$content .= '<div id="fb-root"></div>';
			$content .= '<script src="http://connect.facebook.net/' . $lang . '/all.js#xfbml=1" type="text/javascript"></script>';
			$content .= '<fb:send ref="AL2FB"';
			$content .= ' font="' . (empty($font) ? 'arial' : $font) . '"';
			$content .= ' colorscheme="' . (empty($colorscheme) ? 'light' : $colorscheme) . '"';
			$content .= ' href="' . $link . '"></fb:send>';
			$content .= '</div>';

			return $content;
		}

		// Get HTML for comments plugin
		function Get_comments_plugin($post) {
			$user_ID = self::Get_user_ID($post);

			// Get language
			$lang = self::Get_locale($user_ID);

			// Get options
			$posts = get_user_meta($user_ID, c_al2fb_meta_comments_posts, true);
			$width = get_user_meta($user_ID, c_al2fb_meta_comments_width, true);
			$colorscheme = get_user_meta($user_ID, c_al2fb_meta_like_colorscheme, true);
			$link = get_user_meta($user_ID, c_al2fb_meta_like_link, true);
			if (empty($link))
				$link = get_permalink($post->ID);

			// Send button
			$content = '<div class="al2fb_comments_plugin">';
			$content .= '<div id="fb-root"></div>';
			$content .= '<script src="http://connect.facebook.net/' . $lang . '/all.js#xfbml=1" type="text/javascript"></script>';
			$content .= '<fb:comments';
			$content .= ' num_posts="' . (empty($posts) ? '2' : $posts) . '"';
			$content .= ' width="' . (empty($width) ? '500' : $width) . '"';
			$content .= ' colorscheme="' . (empty($colorscheme) ? 'light' : $colorscheme) . '"';
			$content .= ' href="' . $link . '"></fb:comments>';
			$content .= '</div>';

			return $content;
		}

		// Modify comment list
		function Comments_array($comments, $post_ID) {
			$post = get_post($post_ID);
			$user_ID = self::Get_user_ID($post);

			// Integration?
			if (!get_post_meta($post->ID, c_al2fb_meta_nointegrate, true)) {
				// Get time zone offset
				$tz_off = get_option('gmt_offset');
				if (empty($tz_off))
					$tz_off = 0;
				else
					$tz_off = $tz_off * 3600;

				// Get Facebook comments
				if (get_user_meta($user_ID, c_al2fb_meta_fb_comments, true)) {
					$fb_comments = self::Get_comments_or_likes($post, false);
					if ($fb_comments) {
						// Get WordPress comments
						$stored_comments = array_merge(
							get_comments('post_id=' . $post->ID),
							get_comments('status=spam&post_id=' . $post->ID));

						foreach ($fb_comments->data as $fb_comment) {
							// Check if stored comment
							$stored = false;
							if ($stored_comments)
								foreach ($stored_comments as $comment) {
									$fb_comment_id = get_comment_meta($comment->comment_ID, c_al2fb_meta_fb_comment_id, true);
									if ($fb_comment_id == $fb_comment->id) {
										$stored = true;
										break;
									}
								}

							// Create new comment
							if (!$stored) {
								$comment_ID = $fb_comment->id;
								$commentdata = array(
									'comment_post_ID' => $post_ID,
									'comment_author' => $fb_comment->from->name . ' ' . __('on Facebook', c_al2fb_text_domain),
									'comment_author_email' => '',
									'comment_author_url' => 'http://www.facebook.com/profile.php?id=' . $fb_comment->from->id,
									'comment_author_IP' => '',
									'comment_date' => date('Y-m-d H:i:s', strtotime($fb_comment->created_time) + $tz_off),
									'comment_date_gmt' => date('Y-m-d H:i:s', strtotime($fb_comment->created_time)),
									'comment_content' => $fb_comment->message,
									'comment_karma' => 0,
									'comment_approved' => 1,
									'comment_agent' => 'AL2FB',
									'comment_type' => '', // pingback|trackback
									'comment_parent' => 0,
									'user_id' => 0
								);

								// Copy Facebook comment to WordPress database
								if (get_user_meta($user_ID, c_al2fb_meta_fb_comments_copy, true)) {
									// Apply filters
									$commentdata = apply_filters('preprocess_comment', $commentdata);
									$commentdata = wp_filter_comment($commentdata);
									$commentdata['comment_approved'] = wp_allow_comment($commentdata);

									// Insert comment in database
									$comment_ID = wp_insert_comment($commentdata);
									add_comment_meta($comment_ID, c_al2fb_meta_fb_comment_id, $fb_comment->id);
									do_action('comment_post', $comment_ID, $commentdata['comment_approved']);

									// Notify
									if ('spam' !== $commentdata['comment_approved']) {
										if ('0' == $commentdata['comment_approved'])
											wp_notify_moderator($comment_ID);
										if (get_option('comments_notify') && $commentdata['comment_approved'])
											wp_notify_postauthor($comment_ID, $commentdata['comment_type']);
									}
								}

								// Add comment to array
								if ($commentdata['comment_approved'] == 1) {
									$new = null;
									$new->comment_ID = $comment_ID;
									$new->comment_post_ID = $commentdata['comment_post_ID'];
									$new->comment_author = $commentdata['comment_author'];
									$new->comment_author_email = $commentdata['comment_author_email'];
									$new->comment_author_url = $commentdata['comment_author_url'];
									$new->comment_author_ip = $commentdata['comment_author_IP'];
									$new->comment_date = $commentdata['comment_date'];
									$new->comment_date_gmt = $commentdata['comment_date_gmt'];
									$new->comment_content = stripslashes($commentdata['comment_content']);
									$new->comment_karma = $commentdata['comment_karma'];
									$new->comment_approved = $commentdata['comment_approved'];
									$new->comment_agent = $commentdata['comment_agent'];
									$new->comment_type = $commentdata['comment_type'];
									$new->comment_parent = $commentdata['comment_parent'];
									$new->user_id = $commentdata['user_id'];
									$comments[] = $new;
								}
							}
						}
					}
				}

				// Get likes
				if (get_user_meta($user_ID, c_al2fb_meta_fb_likes, true)) {
					$fb_likes = self::Get_comments_or_likes($post, true);
					if ($fb_likes)
						foreach ($fb_likes->data as $fb_like) {
							// Create new virtual comment
							$link = 'http://www.facebook.com/profile.php?id=' . $fb_like->id;
							$new = null;
							$new->comment_ID = $fb_like->id;
							$new->comment_post_ID = $post_ID;
							$new->comment_author = $fb_like->name . ' ' . __('on Facebook', c_al2fb_text_domain);
							$new->comment_author_email = '';
							$new->comment_author_url = $link;
							$new->comment_author_ip = '';
							$new->comment_date_gmt = date('Y-m-d H:i:s', time());
							$new->comment_date = $new->comment_date_gmt;
							$new->comment_content = '<em>' . __('Liked this post', c_al2fb_text_domain) . '</em>';
							$new->comment_karma = 0;
							$new->comment_approved = 1;
							$new->comment_agent = 'AL2FB';
							$new->comment_type = 'pingback';
							$new->comment_parent = 0;
							$new->user_id = 0;
							$comments[] = $new;
						}
				}

				// Sort comments by time
				if (!empty($fb_comments) || !empty($fb_likes)) {
					usort($comments, array(&$this, 'Comment_compare'));
					if (get_option('comment_order') == 'desc')
						array_reverse($comments);
				}
			}

			// Comment link type
			$link_id = get_post_meta($post->ID, c_al2fb_meta_link_id, true);
			$comments_nolink = get_user_meta($user_ID, c_al2fb_meta_fb_comments_nolink, true);
			if (empty($comments_nolink))
				$comments_nolink = 'author';
			else if ($comments_nolink == 'on' || empty($link_id))
				$comments_nolink = 'none';

			if ($comments_nolink == 'none' || $comments_nolink == 'link') {
				$link = self::Get_fb_permalink($link_id);
				if ($comments)
					foreach ($comments as $comment)
						if ($comment->comment_agent == 'AL2FB')
							if ($comments_nolink == 'none')
								$comment->comment_author_url = '';
							else if ($comments_nolink == 'link')
								$comment->comment_author_url = $link;
			}

			return $comments;
		}

		// Sort helper
		function Comment_compare($a, $b) {
			return strcmp($a->comment_date_gmt, $b->comment_date_gmt);
		}

		// Get comment count with FB comments/likes
		function Get_comments_number($count, $post_ID) {
			$post = get_post($post_ID);

			// Integration turned off?
			if (get_post_meta($post->ID, c_al2fb_meta_nointegrate, true))
				return $count;

			$user_ID = self::Get_user_ID($post);

			// Comment count
			if (get_user_meta($user_ID, c_al2fb_meta_fb_comments, true)) {
				$fb_comments = self::Get_comments_or_likes($post, false);
				if ($fb_comments) {
					$stored_comments = get_comments('post_id=' . $post_ID);

					foreach ($fb_comments->data as $fb_comment)
						if (!empty($fb_comments)) {
							$stored = false;
							if ($stored_comments)
								foreach ($stored_comments as $comment) {
									$fb_comment_id = get_comment_meta($comment->comment_ID, c_al2fb_meta_fb_comment_id, true);
									if ($fb_comment_id == $fb_comment->id) {
										$stored = true;
										break;
									}
								}
							if (!$stored)
								$count++;
						}
				}
			}

			// Like count
			if (get_user_meta($user_ID, c_al2fb_meta_fb_likes, true))
				$fb_likes = self::Get_comments_or_likes($post, true);
			if (!empty($fb_likes))
				$count += count($fb_likes->data);

			return $count;
		}

		// Annotate FB comments/likes
		function Comment_class($classes) {
			global $comment;
			if (!empty($comment) && $comment->comment_agent == 'AL2FB')
				$classes[] = 'facebook-comment';
			return $classes;
		}

		// Get FB picture as avatar
		function Get_avatar($avatar, $id_or_email, $size, $default) {
			if (is_object($id_or_email)) {
				$comment = $id_or_email;
				if ($comment->comment_agent == 'AL2FB' &&
					($comment->comment_type == '' || $comment->comment_type == 'comment')) {

					// Get picture url
					$id = explode('id=', $comment->comment_author_url);
					if (count($id) == 2) {
						$fb_picture_url = self::Get_fb_picture_url_cached($id[1], 'normal');

						// Build avatar image
						if ($fb_picture_url)
							$avatar = '<img alt="' . esc_attr($comment->comment_author) . '"';
							$avatar .= ' src="' . $fb_picture_url . '"';
							$avatar .= ' class="avatar avatar-' . $size . ' photo al2fb"';
							$avatar .= ' height="' . $size . '"';
							$avatar .= ' width="' . $size . '"';
							$avatar .= ' />';
					}
				}
			}
			return $avatar;
		}

		function Get_comments_or_likes($post, $likes) {
			$user_ID = self::Get_user_ID($post);
			$link_id = get_post_meta($post->ID, c_al2fb_meta_link_id, true);
			if ($link_id)
				try {
					if ($likes)
						return self::Get_fb_likes_cached($user_ID, $link_id);
					else
						return self::Get_fb_comments_cached($user_ID, $link_id);
				}
				catch (Exception $e) {
					if ($this->debug)
						echo htmlspecialchars($e->getMessage());
					return null;
				}
			return null;
		}

		function Get_user_ID($post) {
			if (is_multisite())
				$shared_user_ID = get_site_option(c_al2fb_option_app_share);
			else
				$shared_user_ID = get_option(c_al2fb_option_app_share);
			if ($shared_user_ID)
				return $shared_user_ID;
			return $post->post_author;
		}

		// Generic http request
		function Request($url, $query, $type) {
			// Get timeout
			$timeout = get_option(c_al2fb_option_timeout);
			if (!$timeout)
				$timeout = 30;

			// Use cURL if available
			if (function_exists('curl_init') && !get_option(c_al2fb_option_nocurl))
				return self::Request_cURL($url, $query, $type, $timeout);

			if (version_compare(PHP_VERSION, '5.2.1') < 0)
				ini_set('default_socket_timeout', $timeout);

			$this->php_error = '';
			set_error_handler(array(&$this, 'PHP_error_handler'));
			if ($type == 'GET') {
				$context = stream_context_create(array(
				'http' => array(
					'method'  => 'GET',
					'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
					'timeout' => $timeout
					)
				));
				$content = file_get_contents($url . ($query ? '?' . $query : ''), false, $context);
			}
			else {
				$context = stream_context_create(array(
					'http' => array(
						'method'  => 'POST',
						'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
						'timeout' => $timeout,
						'content' => $query
					)
				));
				$content = file_get_contents($url, false, $context);
			}
			restore_error_handler();

			// Check for errors
			$status = false;
			$auth_error = '';
			if (!empty($http_response_header))
				foreach ($http_response_header as $h)
					if (strpos($h, 'HTTP/') === 0) {
						$status = explode(' ', $h);
						$status = intval($status[1]);
					}
					else if (strpos($h, 'WWW-Authenticate:') === 0)
						$auth_error = $h;

			if ($status == 200)
				return $content;
			else {
				if ($auth_error)
					$msg = 'Error ' . $status . ': ' . $auth_error;
				else
					$msg = 'Error ' . $status . ': ' . $this->php_error . ' ' . print_r($http_response_header, true);
				update_option(c_al2fb_last_error, $msg);
				update_option(c_al2fb_last_error_time, date('c'));
				throw new Exception($msg);
			}
		}

		// Persist PHP errors
		function PHP_error_handler($errno, $errstr) {
			$this->php_error = $errstr;
		}

		// cURL http request
		function Request_cURL($url, $query, $type, $timeout) {
			$c = curl_init();
			curl_setopt($c, CURLOPT_RETURNTRANSFER, 1);

			if (!ini_get('safe_mode') && !ini_get('open_basedir')) {
				curl_setopt($c, CURLOPT_FOLLOWLOCATION, true);
				curl_setopt($c, CURLOPT_MAXREDIRS, 10);
			}
			curl_setopt($c, CURLOPT_TIMEOUT, $timeout);

			if ($type == 'GET')
				curl_setopt($c, CURLOPT_URL, $url . ($query ? '?' . $query : ''));
			else {
				curl_setopt($c, CURLOPT_URL, $url);
				curl_setopt($c, CURLOPT_POST, true);
				curl_setopt($c, CURLOPT_POSTFIELDS, $query);
			}

			if (get_option(c_al2fb_option_noverifypeer))
				curl_setopt($c, CURLOPT_SSL_VERIFYPEER, false);

			$content = curl_exec($c);
			$errno = curl_errno($c);
			$info = curl_getinfo($c);
			curl_close($c);

			if ($errno === 0 && $info['http_code'] == 200)
				return $content;
			else {
				$error = json_decode($content);
				$error = empty($error->error->message) ? $content : $error->error->message;
				if ($errno || !$error)
					$msg = 'cURL error ' . $errno . ': ' . $error . ' ' . print_r($info, true);
				else
					$msg = $error;
				update_option(c_al2fb_last_error, $msg);
				update_option(c_al2fb_last_error_time, date('c'));
				throw new Exception($msg);
			}
		}

		function user_can($user, $capability) {
			if (!is_object($user))
				$user = new WP_User($user);

			if (!$user || !$user->ID)
				return false;

			$args = array_slice(func_get_args(), 2 );
			$args = array_merge(array($capability), $args);

			return call_user_func_array(array(&$user, 'has_cap'), $args);
		}

 		// Generate debug info
		function Debug_info() {
			// Get current user
			global $user_ID;
			get_currentuserinfo();

			// Get users
			global $wpdb;
			$users = $wpdb->get_var('SELECT COUNT(ID) FROM ' . $wpdb->users);

			// Get versions
			global $wp_version;
			if (!function_exists('get_plugins'))
				require_once(ABSPATH . 'wp-admin/includes/plugin.php');
			$plugin_folder = get_plugins('/' . plugin_basename(dirname(__FILE__)));
			$plugin_version = $plugin_folder[basename($this->main_file)]['Version'];

			// Get charset, token
			$charset = get_bloginfo('charset');

			// Get application
			try {
				if (self::Is_authorized($user_ID)) {
					$a = self::Get_fb_application($user_ID);
					$app = '<a href="' . $a->link . '" target="_blank">' . $a->name . '</a>';
				}
				else
					$app = 'n/a';
			}
			catch (Exception $e) {
				$app = get_user_meta($user_ID, c_al2fb_meta_client_id, true) . ': ' . $e->getMessage();
			}

			// Get page
			try {
				if (self::Is_authorized($user_ID)) {
					$me = self::Get_fb_me($user_ID, false);
					if ($me == null)
						$page = 'n/a';
					else {
						$page = '<a href="' . $me->link . '" target="_blank">' . htmlspecialchars($me->name, ENT_QUOTES, $charset);
						if (!empty($me->category))
							$page .= ' - ' . htmlspecialchars($me->category, ENT_QUOTES, $charset);
						$page .= '</a>';
					}
				}
				else
					$page = 'n/a';
			}
			catch (Exception $e) {
				$page = get_user_meta($user_ID, c_al2fb_meta_page, true) . ': ' . $e->getMessage();
			}

			// Get picture
			$picture = '<a href="' . get_user_meta($user_ID, c_al2fb_meta_picture, true) . '" target="_blank">' . get_user_meta($user_ID, c_al2fb_meta_picture, true) . '</a>';
			$picture_default = '<a href="' . get_user_meta($user_ID, c_al2fb_meta_picture_default, true) . '" target="_blank">' . get_user_meta($user_ID, c_al2fb_meta_picture_default, true) . '</a>';

			// Get theme data
			$theme_data = get_theme_data(STYLESHEETPATH . '/style.css');

			$info = '<div class="al2fb_debug"><table border="1">';
			$info .= '<tr><td>Time:</td><td>' . date('c') . '</td></tr>';
			$info .= '<tr><td>Server software:</td><td>' . htmlspecialchars($_SERVER['SERVER_SOFTWARE'], ENT_QUOTES, $charset) . '</td></tr>';
			$info .= '<tr><td>SAPI:</td><td>' . htmlspecialchars(php_sapi_name(), ENT_QUOTES, $charset) . '</td></tr>';
			$info .= '<tr><td>PHP version:</td><td>' . PHP_VERSION . '</td></tr>';
			$info .= '<tr><td>safe_mode:</td><td>' . (ini_get('safe_mode') ? 'Yes' : 'No') . '</td></tr>';
			$info .= '<tr><td>open_basedir:</td><td>' . ini_get('open_basedir') . '</td></tr>';
			$info .= '<tr><td>User agent:</td><td>' . htmlspecialchars($_SERVER['HTTP_USER_AGENT'], ENT_QUOTES, $charset) . '</td></tr>';
			$info .= '<tr><td>WordPress version:</td><td>' . $wp_version . '</td></tr>';
			$info .= '<tr><td>Theme name:</td><td>' . '<a href="' . $theme_data['URI'] . '" target="_blank">' . htmlspecialchars($theme_data['Name'], ENT_QUOTES, $charset) . '</a>' . '</td></tr>';
			$info .= '<tr><td>Theme version:</td><td>' . htmlspecialchars($theme_data['Version'], ENT_QUOTES, $charset) . '</td></tr>';

			foreach (get_plugins() as $plugin_data)
				$info .= '<tr><td>Active plugin:</td><td><a href="' . $plugin_data['PluginURI'] . '" target="_blank">' . htmlspecialchars($plugin_data['Name'], ENT_QUOTES, $charset) . '</a></td></tr>';

			$info .= '<tr><td>Plugin version:</td><td>' . $plugin_version . '</td></tr>';
			$info .= '<tr><td>Settings version:</td><td>' . get_option(c_al2fb_option_version) . '</td></tr>';
			$info .= '<tr><td>Multi site:</td><td>' . (is_multisite() ? 'Yes' : 'No') . '</td></tr>';
			$info .= '<tr><td>Site id:</td><td>' . $this->site_id . '</td></tr>';
			$info .= '<tr><td>Blog id:</td><td>' . $this->blog_id . '</td></tr>';
			$info .= '<tr><td>Number of users:</td><td>' . $users . '</td></tr>';
			$info .= '<tr><td>Blog address (home):</td><td><a href="' . get_home_url() . '" target="_blank">' . htmlspecialchars(get_home_url(), ENT_QUOTES, $charset) . '</a></td></tr>';
			$info .= '<tr><td>WordPress address (site):</td><td><a href="' . get_site_url() . '" target="_blank">' . htmlspecialchars(get_site_url(), ENT_QUOTES, $charset) . '</a></td></tr>';
			$info .= '<tr><td>Redirect URI:</td><td><a href="' . self::Redirect_uri() . '" target="_blank">' . htmlspecialchars(self::Redirect_uri(), ENT_QUOTES, $charset) . '</a></td></tr>';
			$info .= '<tr><td>Authorize URL:</td><td><a href="' . self::Authorize_url($user_ID) . '" target="_blank">' . htmlspecialchars(self::Authorize_url($user_ID), ENT_QUOTES, $charset) . '</a></td></tr>';
			$info .= '<tr><td>Authorization init:</td><td>' . htmlspecialchars(get_option(c_al2fb_log_redir_init), ENT_QUOTES, $charset) . '</td></tr>';
			$info .= '<tr><td>Authorization check:</td><td>' . htmlspecialchars(get_option(c_al2fb_log_redir_check), ENT_QUOTES, $charset) . '</td></tr>';
			$info .= '<tr><td>Redirect time:</td><td>' . htmlspecialchars(get_option(c_al2fb_log_redir_time), ENT_QUOTES, $charset) . '</td></tr>';
			$info .= '<tr><td>Redirect referer:</td><td><a href="' . get_option(c_al2fb_log_redir_ref) . '" target="_blank">' . htmlspecialchars(get_option(c_al2fb_log_redir_ref), ENT_QUOTES, $charset) . '</a></td></tr>';
			$info .= '<tr><td>Redirect from:</td><td>' . htmlspecialchars(get_option(c_al2fb_log_redir_from), ENT_QUOTES, $charset) . '</td></tr>';
			$info .= '<tr><td>Redirect to:</td><td><a href="' . get_option(c_al2fb_log_redir_to) . '" target="_blank">' . htmlspecialchars(get_option(c_al2fb_log_redir_to), ENT_QUOTES, $charset) . '</a></td></tr>';
			$info .= '<tr><td>Authorized:</td><td>' . (self::Is_authorized($user_ID) ? 'Yes' : 'No') . '</td></tr>';
			$info .= '<tr><td>Authorized time:</td><td>' . get_option(c_al2fb_log_auth_time) . '</td></tr>';
			$info .= '<tr><td>allow_url_fopen:</td><td>' . (ini_get('allow_url_fopen') ? 'Yes' : 'No') . '</td></tr>';
			$info .= '<tr><td>cURL:</td><td>' . (function_exists('curl_init') ? 'Yes' : 'No') . '</td></tr>';
			$info .= '<tr><td>SSL:</td><td>' . (function_exists('openssl_sign') ? 'Yes' : 'No') . '</td></tr>';

			$info .= '<tr><td>Encoding:</td><td>' . htmlspecialchars(get_option('blog_charset'), ENT_QUOTES, $charset) . '</td></tr>';
			$info .= '<tr><td>Facebook:</td><td>' . htmlspecialchars(get_user_meta($user_ID, c_al2fb_meta_fb_encoding, true), ENT_QUOTES, $charset) . '</td></tr>';
			$info .= '<tr><td>Locale:</td><td>' . htmlspecialchars(WPLANG, ENT_QUOTES, $charset) . '</td></tr>';
			$info .= '<tr><td>Facebook:</td><td>' . htmlspecialchars(self::Get_locale($user_ID), ENT_QUOTES, $charset) . '</td></tr>';
			$info .= '<tr><td>mb_convert_encoding:</td><td>' . (function_exists('mb_convert_encoding') ? 'Yes' : 'No') . '</td></tr>';

			$info .= '<tr><td>Application:</td><td>' . $app . '</td></tr>';

			$info .= '<tr><td>Picture type:</td><td>' . get_user_meta($user_ID, c_al2fb_meta_picture_type, true) . '</td></tr>';
			$info .= '<tr><td>Custom picture URL:</td><td>' . $picture . '</td></tr>';
			$info .= '<tr><td>Default picture URL:</td><td>' . $picture_default . '</td></tr>';

			$info .= '<tr><td>Page:</td><td>' . $page . '</td></tr>';
			$info .= '<tr><td>Page owner:</td><td>' . (get_user_meta($user_ID, c_al2fb_meta_page_owner, true) ? 'Yes' : 'No') . '</td></tr>';
			$info .= '<tr><td>Use groups:</td><td>' . (get_user_meta($user_ID, c_al2fb_meta_use_groups, true) ? 'Yes' : 'No')  . '</td></tr>';
			$info .= '<tr><td>Group:</td><td>' . get_user_meta($user_ID, c_al2fb_meta_group, true) . '</td></tr>';

			$info .= '<tr><td>Caption:</td><td>' . (get_user_meta($user_ID, c_al2fb_meta_caption, true) ? 'Yes' : 'No') . '</td></tr>';
			$info .= '<tr><td>Excerpt:</td><td>' . (get_user_meta($user_ID, c_al2fb_meta_msg, true) ? 'Yes' : 'No') . '</td></tr>';
			$info .= '<tr><td>Trailer:</td><td>' . htmlspecialchars(get_user_meta($user_ID, c_al2fb_meta_trailer, true), ENT_QUOTES, $charset) . '</td></tr>';
			$info .= '<tr><td>Hyperlink:</td><td>' . (get_user_meta($user_ID, c_al2fb_meta_hyperlink, true) ? 'Yes' : 'No') . '</td></tr>';
			$info .= '<tr><td>Share link:</td><td>' . (get_user_meta($user_ID, c_al2fb_meta_share_link, true) ? 'Yes' : 'No') . '</td></tr>';
			$info .= '<tr><td>Shortlink:</td><td>' . (get_user_meta($user_ID, c_al2fb_meta_shortlink, true) ? 'Yes' : 'No') . '</td></tr>';
			$info .= '<tr><td>Page link:</td><td>' . (get_user_meta($user_ID, c_al2fb_meta_add_new_page, true) ? 'Yes' : 'No') . '</td></tr>';

			$info .= '<tr><td>FB comments:</td><td>' . (get_user_meta($user_ID, c_al2fb_meta_fb_comments, true) ? 'Yes' : 'No') . '</td></tr>';
			$info .= '<tr><td>FB comments postback:</td><td>' . (get_user_meta($user_ID, c_al2fb_meta_fb_comments_postback, true) ? 'Yes' : 'No') . '</td></tr>';
			$info .= '<tr><td>FB comments copy:</td><td>' . (get_user_meta($user_ID, c_al2fb_meta_fb_comments_copy, true) ? 'Yes' : 'No') . '</td></tr>';
			$info .= '<tr><td>FB comments no link:</td><td>' . get_user_meta($user_ID, c_al2fb_meta_fb_comments_nolink, true) . '</td></tr>';
			$info .= '<tr><td>FB likes:</td><td>' . (get_user_meta($user_ID, c_al2fb_meta_fb_likes, true) ? 'Yes' : 'No') . '</td></tr>';

			$info .= '<tr><td>Post likers:</td><td>' . (get_user_meta($user_ID, c_al2fb_meta_post_likers, true) ? 'Yes' : 'No') . '</td></tr>';
			$info .= '<tr><td>Post like button:</td><td>' . (get_user_meta($user_ID, c_al2fb_meta_post_like_button, true) ? 'Yes' : 'No') . '</td></tr>';
			$info .= '<tr><td>Not home page:</td><td>' . (get_user_meta($user_ID, c_al2fb_meta_like_nohome, true) ? 'Yes' : 'No') . '</td></tr>';
			$info .= '<tr><td>Not posts:</td><td>' . (get_user_meta($user_ID, c_al2fb_meta_like_noposts, true) ? 'Yes' : 'No') . '</td></tr>';
			$info .= '<tr><td>Not pages:</td><td>' . (get_user_meta($user_ID, c_al2fb_meta_like_nopages, true) ? 'Yes' : 'No') . '</td></tr>';
			$info .= '<tr><td>Not archives:</td><td>' . (get_user_meta($user_ID, c_al2fb_meta_like_noarchives, true) ? 'Yes' : 'No') . '</td></tr>';
			$info .= '<tr><td>Not categories:</td><td>' . (get_user_meta($user_ID, c_al2fb_meta_like_nocategories, true) ? 'Yes' : 'No') . '</td></tr>';
			$info .= '<tr><td>Like layout:</td><td>' . get_user_meta($user_ID, c_al2fb_meta_like_layout, true) . '</td></tr>';
			$info .= '<tr><td>Like faces:</td><td>' . (get_user_meta($user_ID, c_al2fb_meta_like_faces, true) ? 'Yes' : 'No') . '</td></tr>';
			$info .= '<tr><td>Like width:</td><td>' . get_user_meta($user_ID, c_al2fb_meta_like_width, true) . '</td></tr>';
			$info .= '<tr><td>Like action:</td><td>' . get_user_meta($user_ID, c_al2fb_meta_like_action, true) . '</td></tr>';
			$info .= '<tr><td>Like font:</td><td>' . get_user_meta($user_ID, c_al2fb_meta_like_font, true) . '</td></tr>';
			$info .= '<tr><td>Like color scheme:</td><td>' . get_user_meta($user_ID, c_al2fb_meta_like_colorscheme, true) . '</td></tr>';
			$info .= '<tr><td>Like link:</td><td>' . get_user_meta($user_ID, c_al2fb_meta_like_link, true) . '</td></tr>';
			$info .= '<tr><td>Like top:</td><td>' . (get_user_meta($user_ID, c_al2fb_meta_like_top, true) ? 'Yes' : 'No') . '</td></tr>';

			$info .= '<tr><td>Send button:</td><td>' . (get_user_meta($user_ID, c_al2fb_meta_post_send_button, true) ? 'Yes' : 'No') . '</td></tr>';
			$info .= '<tr><td>Combine buttons:</td><td>' . (get_user_meta($user_ID, c_al2fb_meta_post_combine_buttons, true) ? 'Yes' : 'No') . '</td></tr>';

			$info .= '<tr><td>Like box width:</td><td>' . get_user_meta($user_ID, c_al2fb_meta_like_box_width, true) . '</td></tr>';
			$info .= '<tr><td>Like box border:</td><td>' . get_user_meta($user_ID, c_al2fb_meta_like_box_border, true) . '</td></tr>';
			$info .= '<tr><td>Like box no header:</td><td>' . (get_user_meta($user_ID, c_al2fb_meta_like_box_noheader, true) ? 'Yes' : 'No') . '</td></tr>';
			$info .= '<tr><td>Like box no stream:</td><td>' . (get_user_meta($user_ID, c_al2fb_meta_like_box_nostream, true) ? 'Yes' : 'No') . '</td></tr>';

			$info .= '<tr><td>Comments posts:</td><td>' . get_user_meta($user_ID, c_al2fb_meta_comments_posts, true) . '</td></tr>';
			$info .= '<tr><td>Comments width:</td><td>' . get_user_meta($user_ID, c_al2fb_meta_comments_width, true) . '</td></tr>';

			$info .= '<tr><td>OGP:</td><td>' . (get_user_meta($user_ID, c_al2fb_meta_open_graph, true) ? 'Yes' : 'No') . '</td></tr>';
			$info .= '<tr><td>OGP type:</td><td>' . get_user_meta($user_ID, c_al2fb_meta_open_graph_type, true) . '</td></tr>';
			$info .= '<tr><td>OGP admins:</td><td>' . get_user_meta($user_ID, c_al2fb_meta_open_graph_admins, true) . '</td></tr>';

			$info .= '<tr><td>Timeout:</td><td>' . htmlspecialchars(get_option(c_al2fb_option_timeout), ENT_QUOTES, $charset) . '</td></tr>';
			$info .= '<tr><td>No notices:</td><td>' . (get_option(c_al2fb_option_nonotice) ? 'Yes' : 'No') . '</td></tr>';
			$info .= '<tr><td>Min. capability:</td><td>' . htmlspecialchars(get_option(c_al2fb_option_min_cap), ENT_QUOTES, $charset) . '</td></tr>';
			$info .= '<tr><td>Refresh comments:</td><td>' . htmlspecialchars(get_option(c_al2fb_option_msg_refresh), ENT_QUOTES, $charset) . '</td></tr>';
			$info .= '<tr><td>Max. length:</td><td>' . htmlspecialchars(get_option(c_al2fb_option_max_descr), ENT_QUOTES, $charset) . '</td></tr>';
			$info .= '<tr><td>Max. text length:</td><td>' . htmlspecialchars(get_option(c_al2fb_option_max_text), ENT_QUOTES, $charset) . '</td></tr>';
			$info .= '<tr><td>Exclude post types:</td><td>' . htmlspecialchars(get_option(c_al2fb_option_exclude_type), ENT_QUOTES, $charset) . '</td></tr>';
			$info .= '<tr><td>Exclude categories:</td><td>' . htmlspecialchars(get_option(c_al2fb_option_exclude_cat), ENT_QUOTES, $charset) . '</td></tr>';
			$info .= '<tr><td>No verify peer:</td><td>' . (get_option(c_al2fb_option_noverifypeer) ? 'Yes' : 'No') . '</td></tr>';
			$info .= '<tr><td>Site URL:</td><td>' . htmlspecialchars(get_option(c_al2fb_option_siteurl), ENT_QUOTES, $charset) . '</td></tr>';
			$info .= '<tr><td>Do not use cURL:</td><td>' . (get_option(c_al2fb_option_nocurl) ? 'Yes' : 'No') . '</td></tr>';
			$info .= '<tr><td>Use publish_post:</td><td>' . (get_option(c_al2fb_option_use_pp) ? 'Yes' : 'No') . '</td></tr>';
			$info .= '<tr><td>Debug:</td><td>' . (get_option(c_al2fb_option_debug) ? 'Yes' : 'No') . '</td></tr>';

			$info .= '<tr><td>CSS:</td><td>' . htmlspecialchars(get_option(c_al2fb_option_css), ENT_QUOTES, $charset) . '</td></tr>';

			$info .= '<tr><td>wp_get_attachment_thumb_url:</td><td>' . (function_exists('wp_get_attachment_thumb_url') ? 'Yes' : 'No') . '</td></tr>';
			$info .= '<tr><td>wp_get_attachment_image_src:</td><td>' . (function_exists('wp_get_attachment_image_src') ? 'Yes' : 'No') . '</td></tr>';
			$info .= '<tr><td>theme - post-thumbnails:</td><td>' . (current_theme_supports('post-thumbnails') ? 'Yes' : 'No') . '</td></tr>';
			$info .= '<tr><td>get_post_thumbnail_id:</td><td>' . (function_exists('get_post_thumbnail_id') ? 'Yes' : 'No') . '</td></tr>';
			$info .= '<tr><td>wp_get_attachment_image_src:</td><td>' . (function_exists('wp_get_attachment_image_src') ? 'Yes' : 'No') . '</td></tr>';

			// Last posts
			$posts = new WP_Query(array('posts_per_page' => 10));
			while ($posts->have_posts()) {
				$posts->next_post();
				$userdata = get_userdata($posts->post->post_author);
				$link_id = get_post_meta($posts->post->ID, c_al2fb_meta_link_id, true);

				// Selected picture
				$selected_picture = null;
				$image_id = get_post_meta($posts->post->ID, c_al2fb_meta_image_id, true);
				if (!empty($image_id) && function_exists('wp_get_attachment_thumb_url'))
					$selected_picture = wp_get_attachment_thumb_url($image_id);

				// Attached picture
				$attached_picture = null;
				$images = array_values(get_children('post_type=attachment&post_mime_type=image&order=ASC&post_parent=' . $posts->post->ID));
				if (!empty($images) && function_exists('wp_get_attachment_image_src')) {
					$picture = wp_get_attachment_image_src($images[0]->ID, 'thumbnail');
					if ($picture && $picture[0])
						$attached_picture = $picture[0];
				}

				// Feature picture
				$featured_picture = null;
				if (current_theme_supports('post-thumbnails') &&
					function_exists('get_post_thumbnail_id') &&
					function_exists('wp_get_attachment_image_src')) {
					$picture_id = get_post_thumbnail_id($posts->post->ID);
					if ($picture_id) {
						$picture = wp_get_attachment_image_src($picture_id, 'thumbnail');
						if ($picture && $picture[0])
							$featured_picture = $picture[0];
					}
				}

				// First picture in post
				$post_picture = null;
				if (preg_match('/< *img[^>]*src *= *["\']([^"\']*)["\']/i', do_shortcode($posts->post->post_content), $matches))
					$post_picture = $matches[1];

				// Author avatar
				$avatar_picture = null;
				$avatar = get_avatar($userdata->user_email);
				if (!empty($avatar))
					if (preg_match('/< *img[^>]*src *= *["\']([^"\']*)["\']/i', $avatar, $matches))
						$avatar_picture = $matches[1];

				// Actual picture
				$picture = self::Get_link_picture($posts->post, self::Get_user_ID($posts->post));

				$info .= '<tr><td>Post #' . $posts->post->ID . ':</td>';
				$info .= '<td><a href="' . get_permalink($posts->post->ID) . '" target="_blank">' . htmlspecialchars($posts->post->post_title, ENT_QUOTES, $charset) . '</a>';
				$info .= ' by ' . htmlspecialchars($userdata->user_login, ENT_QUOTES, $charset);
				$info .= ' @ ' . $posts->post->post_date;
				$info .= ' <a href="' . $picture['picture'] . '" target="_blank">' . $picture['picture_type'] . '</a>';
				if (!empty($selected_picture))
					$info .= ' <a href="' . $selected_picture . '" target="_blank">selected</a>';
				if (!empty($attached_picture))
					$info .= ' <a href="' . $attached_picture . '" target="_blank">attached</a>';
				if (!empty($featured_picture))
					$info .= ' <a href="' . $featured_picture . '" target="_blank">featured</a>';
				if (!empty($post_picture))
					$info .= ' <a href="' . $post_picture . '" target="_blank">post</a>';
				if (!empty($avatar_picture))
					$info .= ' <a href="' . $avatar_picture . '" target="_blank">avatar</a>';
				if (!empty($link_id))
					$info .= ' <a href="' . self::Get_fb_permalink($link_id) . '" target="_blank">Facebook</a>';
				$info .= '</td></tr>';
			}

			// Last link pictures
			$posts = new WP_Query(array('meta_key' => c_al2fb_meta_link_picture, 'posts_per_page' => 5));
			while ($posts->have_posts()) {
				$posts->next_post();
				$link_picture = get_post_meta($posts->post->ID, c_al2fb_meta_link_picture, true);
				if (!empty($link_picture)) {
					$info .= '<tr><td>Link picture #' . $posts->post->ID . ':</td>';
					$info .= '<td><a href="' . get_permalink($posts->post->ID) . '" target="_blank">' . htmlspecialchars($posts->post->post_title, ENT_QUOTES, $charset) . '</a>';
					$info .= ' ' . htmlspecialchars($link_picture, ENT_QUOTES, $charset);
					$info .= ' @ ' . $posts->post->post_date . '</td></tr>';
				}
			}

			// Last errors
			$posts = new WP_Query(array('meta_key' => c_al2fb_meta_error, 'posts_per_page' => 10));
			while ($posts->have_posts()) {
				$posts->next_post();
				$error = get_post_meta($posts->post->ID, c_al2fb_meta_error, true);
				if (!empty($error)) {
					$info .= '<tr><td>Error:</td>';
					$info .= '<td>' . htmlspecialchars($error, ENT_QUOTES, $charset) . '</td></tr>';
					$info .= '<tr><td>Error time:</td>';
					$info .= '<td>' . htmlspecialchars(get_post_meta($posts->post->ID, c_al2fb_meta_link_time, true), ENT_QUOTES, $charset) . '</td></tr>';
					$info .= '<tr><td>Error post:</td>';
					$info .= '<td><a href="' . get_permalink($posts->post->ID) . '" target="_blank">' . htmlspecialchars($posts->post->post_title, ENT_QUOTES, $charset) . '</a></td></tr>';
				}
			}

			$info .= '<tr><td>Last error:</td><td>' . htmlspecialchars(get_option(c_al2fb_last_error), ENT_QUOTES, $charset) . '</td></tr>';
			$info .= '<tr><td>Last error time:</td><td>' . htmlspecialchars(get_option(c_al2fb_last_error_time), ENT_QUOTES, $charset) . '</td></tr>';
			$info .= '</table></div>';
			return $info;
		}

		// Update usage statistics
		function Update_statistics($action, $post) {
			try {
				$title = html_entity_decode(get_bloginfo('title'), ENT_QUOTES, get_bloginfo('charset'));

				// Get plugin version
				if (!function_exists('get_plugins'))
					require_once(ABSPATH . 'wp-admin/includes/plugin.php');
				$plugin_folder = get_plugins('/' . plugin_basename(dirname(__FILE__)));
				$plugin_version = $plugin_folder[basename($this->main_file)]['Version'];

				// Post author
				$userdata = get_userdata($post->post_author);

				// Post categories
				$cats = array();
				$post_cats = get_the_category($post->ID);
				if (!empty($post_cats))
					foreach ($post_cats as $category)
						$cats[] = $category->cat_name;

				// Post tags
				$tags = array();
				$post_tags = get_the_tags($post->ID);
				if (!empty($post_tags))
					foreach ($post_tags as $tag)
						$tags[] = $tag->name;

				$link_picture = get_post_meta($post->ID, c_al2fb_meta_link_picture, true);
				$picture = substr($link_picture, strpos($link_picture, '=') + 1);

				// Security
				$hash = md5(AUTH_KEY ? AUTH_KEY : get_bloginfo('url'));

				// Update
				$query = http_build_query(array(
					'action' => $action,
					'url' => self::Redirect_uri(),
					'charset' => get_bloginfo('charset'),
					'lang' => get_bloginfo('language'),
					'dir' => get_bloginfo('text_direction'),
					'ver' => $plugin_version,
					'title' => $title,
					'post_id' => $post->ID,
					'post_date' => $post->post_date_gmt,
					'post_type' => $post->post_type,
					'post_author' => $userdata->display_name,
					'post_url' => get_permalink($post->ID),
					'post_title' => $post->post_title,
					'post_cat' => $cats,
					'post_tag' => $tags,
					'post_pic' => $picture,
					'hash' => $hash
				), '', '&');
				$response = self::Request('http://al2fb.bokhorst.biz/', $query, 'POST');
				$service = json_decode($response);

				if (!empty($service->id)) {
					$user_ID = self::Get_user_ID($post);

					$found = false;
					$msgs = get_user_meta($user_ID, c_al2fb_meta_service, false);
					if ($msgs)
						foreach ($msgs as $msg)
							if ($msg->id == $service->id) {
								$found = true;
								break;
							}

					if (!$found)
						add_user_meta($user_ID, c_al2fb_meta_service, $service);
				}
			}
			catch (Exception $e) {
			}
		}

		// Check environment
		function Check_prerequisites() {
			// Check WordPress version
			global $wp_version;
			if (version_compare($wp_version, '3.0') < 0)
				die('Add Link to Facebook requires at least WordPress 3.0');

			// Check basic prerequisities
			self::Check_function('add_action');
			self::Check_function('add_filter');
			self::Check_function('wp_register_style');
			self::Check_function('wp_enqueue_style');
			self::Check_function('file_get_contents');
			self::Check_function('json_decode');
			self::Check_function('md5');
		}

		function Check_function($name) {
			if (!function_exists($name))
				die('Required WordPress function "' . $name . '" does not exist');
		}

		// Change file extension
		function Change_extension($filename, $new_extension) {
			return preg_replace('/\..+$/', $new_extension, $filename);
		}
	}
}

class AL2FB_Widget extends WP_Widget {
	function AL2FB_Widget() {
		$widget_ops = array('classname' => 'widget_al2fb', 'description' => '');
		$this->WP_Widget('AL2FB_Widget', 'Add Link to Facebook', $widget_ops);
	}

	function widget($args, $instance) {
		global $wp_al2fb;
		if (!empty($GLOBALS['post']))
			$post = $GLOBALS['post'];
		if (empty($post))
			return;
		if (empty($post->ID) && !empty($post['post_id']))
			$post = get_post($post['post_id']);

		$user_ID = $wp_al2fb->Get_user_ID($post);
		$charset = get_bloginfo('charset');
		$link_id = get_post_meta($post->ID, c_al2fb_meta_link_id, true);

		// Check if widget should be displayed
		$buttons = (!(get_user_meta($user_ID, c_al2fb_meta_like_nohome, true) && is_home()) &&
			!(get_user_meta($user_ID, c_al2fb_meta_like_noposts, true) && is_single()) &&
			!(get_user_meta($user_ID, c_al2fb_meta_like_nopages, true) && is_page()) &&
			!(get_user_meta($user_ID, c_al2fb_meta_like_noarchives, true) && is_archive()) &&
			!(get_user_meta($user_ID, c_al2fb_meta_like_nocategories, true) && is_category()) &&
			!get_post_meta($post->ID, c_al2fb_meta_nolike, true));

		$comments = isset($instance['al2fb_comments']) ? $instance['al2fb_comments'] : false;
		$messages = isset($instance['al2fb_messages']) ? $instance['al2fb_messages'] : false;
		$messages_comments = isset($instance['al2fb_messages_comments']) ? $instance['al2fb_messages_comments'] : false;
		$like_button = isset($instance['al2fb_like_button']) ? $instance['al2fb_like_button'] && $buttons : false;
		$like_box = isset($instance['al2fb_like_box']) ? $instance['al2fb_like_box'] && $buttons : false;
		$send_button = isset($instance['al2fb_send_button']) ? $instance['al2fb_send_button'] && $buttons : false;
		$comments_plugin = isset($instance['al2fb_comments_plugin']) ? $instance['al2fb_comments_plugin'] && $buttons : false;
		$profile = isset($instance['al2fb_profile']) ? $instance['al2fb_profile'] : false;

		// Get link type
		$comments_nolink = get_user_meta($user_ID, c_al2fb_meta_fb_comments_nolink, true);
		if (empty($comments_nolink))
			$comments_nolink = 'author';
		else if ($comments_nolink == 'on')
			$comments_nolink = 'none';

		// Get time zone offset
		$tz_off = get_option('gmt_offset');
		if (empty($tz_off))
			$tz_off = 0;
		else
			$tz_off = $tz_off * 3600;

		// Get comments
		$fb_comments = false;
		if ($comments && is_single())
			$fb_comments = $wp_al2fb->Get_comments_or_likes($post, false);

		// Get messages
		$fb_messages = false;
		if ($messages && is_single())
			try {
				$fb_messages = $wp_al2fb->Get_fb_feed($user_ID);
			}
			catch (Exception $e) {
				$error = $e->getMessage();
			}

		// Get link to me
		$me = null;
		$error = null;
		if ($profile) {
			try {
				$me = $wp_al2fb->Get_fb_me_cached($user_ID, false);
			}
			catch (Exception $e) {
				$error = $e->getMessage();
			}
		}

		if ($fb_comments || $fb_messages || $like_button || $like_box || $send_button || $comments_plugin || $me || $error) {
			// Get values
			extract($args);
			$title = apply_filters('widget_title', $instance['title']);

			// Build content
			echo $before_widget;
			if (empty($title))
				$title = 'Add Link to Facebook';
			echo $before_title . $title . $after_title;

			// Comments
			if ($fb_comments) {
				echo '<div class="al2fb_widget_comments">';
				self::Render_fb_comments($fb_comments, $comments_nolink, $link_id);
				echo '</div>';
			}

			// Messages
			if ($fb_messages) {
				echo '<div class="al2fb_widget_messages"><ul>';
				foreach ($fb_messages->data as $fb_message)
					if ($fb_message->type == 'status') {
						echo '<li>';

						// Image
						if ($comments_nolink == 'author')
							echo '<img class="al2fb_widget_picture" alt="' . htmlspecialchars($fb_message->from->name, ENT_QUOTES, $charset) . '" src="' . $wp_al2fb->Get_fb_picture_url_cached($fb_message->from->id, 'small') . '" />';

						// Author
						if ($comments_nolink == 'link')
							echo '<a href="' . $wp_al2fb->Get_fb_permalink($fb_message->id) . '" class="al2fb_widget_name">' .  htmlspecialchars($fb_message->from->name, ENT_QUOTES, $charset) . '</a>';
						else if ($comments_nolink == 'author')
							echo '<a href="http://www.facebook.com/profile.php?id=' . $fb_message->from->id . '" class="al2fb_widget_name">' .  htmlspecialchars($fb_message->from->name, ENT_QUOTES, $charset) . '</a>';
						else
							echo '<span class="al2fb_widget_name">' .  htmlspecialchars($fb_message->from->name, ENT_QUOTES, $charset) . '</span>';

						// Message
						echo ' ';
						echo '<span class="al2fb_widget_message">' .  htmlspecialchars($fb_message->message, ENT_QUOTES, $charset) . '</span>';

						// Time
						echo ' ';
						$fb_time = strtotime($fb_message->created_time) + $tz_off;
						echo '<span class="al2fb_widget_date">' . date(get_option('date_format') . ' ' . get_option('time_format'), $fb_time) . '</span>';

						// Comments
						if ($messages_comments)
							try {
								$fb_message_comments = $wp_al2fb->Get_fb_comments_cached($user_ID, $fb_message->id);
								if ($fb_message_comments)
									self::Render_fb_comments($fb_message_comments, $comments_nolink, $fb_message->id);
							}
							catch (Exception $e) {
								$error = $e->getMessage();
							}

						echo '</li>';
					}
				echo '</ul></div>';
			}

			// Like button
			if ($like_button)
				echo $wp_al2fb->Get_like_button($post, false);

			if ($like_box)
				echo $wp_al2fb->Get_like_button($post, true);

			// Send button
			if ($send_button)
				echo $wp_al2fb->Get_send_button($post);

			if ($comments_plugin)
				echo $wp_al2fb->Get_comments_plugin($post);

			// Profile
			if ($profile) {
				if (!empty($me)) {
					$img = 'http://creative.ak.fbcdn.net/ads3/creative/pressroom/jpg/b_1234209334_facebook_logo.jpg';
					echo '<div class="al2fb_profile"><a href="' . $me->link . '">';
					echo '<img src="' . $img . '" alt="Facebook profile" /></a></div>';
				}
			}

			// Errors
			if (!empty($error) && $wp_al2fb->debug)
				echo '<span>' . htmlspecialchars($error, ENT_QUOTES, $charset) . '</span><br />';

			echo $after_widget;
		}
	}

	// Helper render Facebook comments
	function Render_fb_comments($fb_comments, $comments_nolink, $link_id) {
		global $wp_al2fb;
		$charset = get_bloginfo('charset');

		// Get time zone offset
		$tz_off = get_option('gmt_offset');
		if (empty($tz_off))
			$tz_off = 0;
		else
			$tz_off = $tz_off * 3600;

		echo '<ul>';
		foreach ($fb_comments->data as $fb_comment) {
			echo '<li>';

			// Picture
			if ($comments_nolink == 'author')
				echo '<img class="al2fb_widget_picture" alt="' . htmlspecialchars($fb_comment->from->name, ENT_QUOTES, $charset) . '" src="' . $wp_al2fb->Get_fb_picture_url_cached($fb_comment->from->id, 'small') . '" />';

			// Author
			echo ' ';
			if ($comments_nolink == 'link')
				echo '<a href="' . $wp_al2fb->Get_fb_permalink($link_id) . '" class="al2fb_widget_name">' .  htmlspecialchars($fb_comment->from->name, ENT_QUOTES, $charset) . '</a>';
			else if ($comments_nolink == 'author')
				echo '<a href="http://www.facebook.com/profile.php?id=' . $fb_comment->from->id . '" class="al2fb_widget_name">' .  htmlspecialchars($fb_comment->from->name, ENT_QUOTES, $charset) . '</a>';
			else
				echo '<span class="al2fb_widget_name">' .  htmlspecialchars($fb_comment->from->name, ENT_QUOTES, $charset) . '</span>';

			// Comment
			echo ' ';
			echo '<span class="al2fb_widget_comment">' .  htmlspecialchars($fb_comment->message, ENT_QUOTES, $charset) . '</span>';

			// Time
			echo ' ';
			$fb_time = strtotime($fb_comment->created_time) + $tz_off;
			echo '<span class="al2fb_widget_date">' . date(get_option('date_format') . ' ' . get_option('time_format'), $fb_time) . '</span>';

			echo '</li>';
		}
		echo '</ul>';
	}

	function update($new_instance, $old_instance) {
		$instance = $old_instance;
		$instance['title'] = strip_tags($new_instance['title']);
		$instance['al2fb_comments'] = $new_instance['al2fb_comments'];
		$instance['al2fb_messages'] = $new_instance['al2fb_messages'];
		$instance['al2fb_messages_comments'] = $new_instance['al2fb_messages_comments'];
		$instance['al2fb_like_button'] = $new_instance['al2fb_like_button'];
		$instance['al2fb_like_box'] = $new_instance['al2fb_like_box'];
		$instance['al2fb_send_button'] = $new_instance['al2fb_send_button'];
		$instance['al2fb_comments_plugin'] = $new_instance['al2fb_comments_plugin'];
		$instance['al2fb_profile'] = $new_instance['al2fb_profile'];
		return $instance;
	}

	function form($instance) {
		if (empty($instance['title']))
			$instance['title'] = null;
		if (empty($instance['al2fb_comments']))
			$instance['al2fb_comments'] = false;
		if (empty($instance['al2fb_messages']))
			$instance['al2fb_messages'] = false;
		if (empty($instance['al2fb_messages_comments']))
			$instance['al2fb_messages_comments'] = false;
		if (empty($instance['al2fb_like_button']))
			$instance['al2fb_like_button'] = false;
		if (empty($instance['al2fb_like_box']))
			$instance['al2fb_like_box'] = false;
		if (empty($instance['al2fb_send_button']))
			$instance['al2fb_send_button'] = false;
		if (empty($instance['al2fb_comments_plugin']))
			$instance['al2fb_comments_plugin'] = false;
		if (empty($instance['al2fb_profile']))
			$instance['al2fb_profile'] = false;

		$chk_comments = ($instance['al2fb_comments'] ? ' checked ' : '');
		$chk_messages = ($instance['al2fb_messages'] ? ' checked ' : '');
		$chk_messages_comments = ($instance['al2fb_messages_comments'] ? ' checked ' : '');
		$chk_like = ($instance['al2fb_like_button'] ? ' checked ' : '');
		$chk_box = ($instance['al2fb_like_box'] ? ' checked ' : '');
		$chk_send = ($instance['al2fb_send_button'] ? ' checked ' : '');
		$chk_comments_plugin = ($instance['al2fb_comments_plugin'] ? ' checked ' : '');
		$chk_profile = ($instance['al2fb_profile'] ? ' checked ' : '');
		?>
		<p>
			<label for="<?php echo $this->get_field_id('title'); ?>"><?php _e('Title:'); ?></label>
			<input class="widefat" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" type="text" value="<?php echo esc_attr($instance['title']); ?>" />
			<br />
			<input class="checkbox" type="checkbox" <?php echo $chk_comments; ?> id="<?php echo $this->get_field_id('al2fb_comments'); ?>" name="<?php echo $this->get_field_name('al2fb_comments'); ?>" />
			<label for="<?php echo $this->get_field_id('al2fb_comments'); ?>"><?php _e('Show Facebook comments', c_al2fb_text_domain); ?></label>
			<br />
			<strong><?php _e('Appearance depends on your theme!', c_al2fb_text_domain); ?></strong>
			<br />
			<input class="checkbox" type="checkbox" <?php echo $chk_messages; ?> id="<?php echo $this->get_field_id('al2fb_messages'); ?>" name="<?php echo $this->get_field_name('al2fb_messages'); ?>" />
			<label for="<?php echo $this->get_field_id('al2fb_messages'); ?>"><?php _e('Show Facebook messages', c_al2fb_text_domain); ?></label>
			<br />
			<input class="checkbox" type="checkbox" <?php echo $chk_messages_comments; ?> id="<?php echo $this->get_field_id('al2fb_messages_comments'); ?>" name="<?php echo $this->get_field_name('al2fb_messages_comments'); ?>" />
			<label for="<?php echo $this->get_field_id('al2fb_messages_comments'); ?>"><?php _e('Show comments on messages', c_al2fb_text_domain); ?></label>
			<br />
			<strong><?php _e('Appearance depends on your theme!', c_al2fb_text_domain); ?></strong>
			<br />
			<input class="checkbox" type="checkbox" <?php echo $chk_like; ?> id="<?php echo $this->get_field_id('al2fb_like_button'); ?>" name="<?php echo $this->get_field_name('al2fb_like_button'); ?>" />
			<label for="<?php echo $this->get_field_id('al2fb_like_button'); ?>"><?php _e('Show Facebook like button', c_al2fb_text_domain); ?></label>
			<br />
			<input class="checkbox" type="checkbox" <?php echo $chk_box; ?> id="<?php echo $this->get_field_id('al2fb_like_box'); ?>" name="<?php echo $this->get_field_name('al2fb_like_box'); ?>" />
			<label for="<?php echo $this->get_field_id('al2fb_like_box'); ?>"><?php _e('Show Facebook like box', c_al2fb_text_domain); ?></label>
			<br />
			<input class="checkbox" type="checkbox" <?php echo $chk_send; ?> id="<?php echo $this->get_field_id('al2fb_send_button'); ?>" name="<?php echo $this->get_field_name('al2fb_send_button'); ?>" />
			<label for="<?php echo $this->get_field_id('al2fb_send_button'); ?>"><?php _e('Show Facebook send button', c_al2fb_text_domain); ?></label>
			<br />
			<input class="checkbox" type="checkbox" <?php echo $chk_comments_plugin; ?> id="<?php echo $this->get_field_id('al2fb_comments_plugin'); ?>" name="<?php echo $this->get_field_name('al2fb_comments_plugin'); ?>" />
			<label for="<?php echo $this->get_field_id('al2fb_comments_plugin'); ?>"><?php _e('Show Facebook comments plugin', c_al2fb_text_domain); ?></label>
			<br />
			<input class="checkbox" type="checkbox" <?php echo $chk_profile; ?> id="<?php echo $this->get_field_id('al2fb_profile'); ?>" name="<?php echo $this->get_field_name('al2fb_profile'); ?>" />
			<label for="<?php echo $this->get_field_id('al2fb_profile'); ?>"><?php _e('Show Facebook image/link', c_al2fb_text_domain); ?></label>
		</p>
		<?php
	}
}

?>
