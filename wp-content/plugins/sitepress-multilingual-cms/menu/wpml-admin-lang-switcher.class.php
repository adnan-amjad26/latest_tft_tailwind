<?php

use WPML\FP\Obj;
use WPML\UIPage;

class WPML_Admin_Language_Switcher {

	private $flag_kses_tags = array(
		'img' => array(
			'src'    => array(),
			'class'  => array(),
			'height' => array(),
			'width'  => array(),
		),
		'i'   => array(
			'class' => array(),
		),
	);

	private $current_language;

	function render() {
		wp_enqueue_script( OTGS_Assets_Handles::POPOVER_TOOLTIP );
		wp_enqueue_style( OTGS_Assets_Handles::POPOVER_TOOLTIP );

		$languages_links = $this->get_languages_links();
		$this->render_admin_bar_menu( $languages_links, $this->current_language );
	}

	public function get_languages_links() {
		global $wpdb, $pagenow, $mode, $sitepress;

		$all_languages_enabled = true;
		$current_page          = basename( $_SERVER['SCRIPT_NAME'] );
		$post_type             = false;
		$trid                  = false;
		$translations          = false;
		$languages_links       = array();

		// individual translations
		$is_post = false;
		$is_tax  = false;
		$is_menu = false;

		$this->current_language = $sitepress->get_current_language();
		$this->current_language = $this->current_language ? $this->current_language : $sitepress->get_default_language();

		switch ( $pagenow ) {
			case 'post.php':
			case 'admin-ajax.php':
				$is_post = true;
				$post_id = @intval( Obj::propOr( $_GET['post'], 'post_id', $_POST ) );
				$post    = get_post( $post_id );

				$post_language = $sitepress->get_language_for_element( $post_id, 'post_' . get_post_type( $post_id ) );
				if ( $post_language && $post_language != $this->current_language ) {
					$sitepress->switch_lang( $post_language );
					$this->current_language = $sitepress->get_current_language();
				}
				$trid         = $sitepress->get_element_trid( $post_id, 'post_' . $post->post_type );
				$translations = $sitepress->get_element_translations( $trid, 'post_' . $post->post_type, true );

				break;
			case 'post-new.php':
				$all_languages_enabled = false;
				if ( isset( $_GET['trid'] ) ) {
					$trid         = intval( $_GET['trid'] );
					$post_type    = isset( $_GET['post_type'] ) ? $_GET['post_type'] : 'post';
					$translations = $sitepress->get_element_translations( $trid, 'post_' . $post_type, true );
					$is_post      = true;
				}
				break;
			case 'edit-tags.php':
			case 'term.php':
				$is_tax = true;
				if ( $sitepress->get_wp_api()->is_term_edit_page() ) {
					$all_languages_enabled = false;
				}

				$taxonomy    = $_GET['taxonomy'];
				$term_tax_id = 0;

				if ( isset( $_GET['tag_ID'] ) ) {
					$term_id     = @intval( $_GET['tag_ID'] );
					$term_tax_id = $wpdb->get_var( $wpdb->prepare( "SELECT term_taxonomy_id FROM {$wpdb->term_taxonomy} WHERE taxonomy=%s AND term_id=%d", $taxonomy, $term_id ) );
				}
				if ( $term_tax_id ) {
					$trid = $sitepress->get_element_trid( $term_tax_id, 'tax_' . $taxonomy );
				}
				if ( $trid ) {
					$translations = $sitepress->get_element_translations( $trid, 'tax_' . $taxonomy, true );
				}

				break;
			case 'nav-menus.php':
				$is_menu = true;
				if ( isset( $_GET['menu'] ) && $_GET['menu'] ) {
					$menu_id    = $_GET['menu'];
					$element_id = $wpdb->get_var( $wpdb->prepare( "SELECT term_taxonomy_id FROM {$wpdb->term_taxonomy} WHERE term_id=%d", $menu_id ) );
					$trid         = $trid = $sitepress->get_element_trid( $element_id, 'tax_nav_menu' );
					$translations = $sitepress->get_element_translations( $trid, 'tax_nav_menu', true );
				}
				$all_languages_enabled = false;
				break;
			case 'upload.php':
				if ( $mode == 'grid' ) {
					$all_languages_enabled = false;
				}
				break;
		}

		if( UIPage::isTMDashboard( $_GET ) ) {
			$all_languages_enabled = false;
		}

		$active_languages        = $sitepress->get_active_languages();
		$current_active_language = null;
		if ( 'all' !== $this->current_language ) {
			$current_active_language = isset( $active_languages[ $this->current_language ] ) ? $active_languages[ $this->current_language ] : null;
		}
		$active_languages = apply_filters( 'wpml_admin_language_switcher_active_languages', $active_languages );
		if ( 'all' !== $this->current_language && ! isset( $active_languages[ $this->current_language ] ) ) {
			array_unshift( $active_languages, $current_active_language );
		}

		foreach ( $active_languages as $lang ) {
			$current_page_lang = $current_page;

			if ( isset( $_SERVER['QUERY_STRING'] ) ) {
				parse_str( $_SERVER['QUERY_STRING'], $query_vars );
				unset( $query_vars['lang'], $query_vars['admin_bar'] );
			} else {
				$query_vars = array();
			}
			// individual translations
			if ( $is_post ) {
				if ( isset( $translations[ $lang['code'] ] ) && isset( $translations[ $lang['code'] ]->element_id ) ) {
					$query_vars['post'] = $translations[ $lang['code'] ]->element_id;
					unset( $query_vars['source_lang'] );
					$current_page_lang    = 'post.php';
					$query_vars['action'] = 'edit';
				} else {
					$current_page_lang = 'post-new.php';
					if ( isset( $post ) ) {
						$query_vars['post_type']   = $post->post_type;
						$query_vars['source_lang'] = $this->current_language;
					} else {
						$query_vars['post_type'] = $post_type;
					}
					$query_vars['trid'] = $trid;
					unset( $query_vars['post'], $query_vars['action'] );
				}
			} elseif ( $is_tax ) {
				if ( isset( $translations[ $lang['code'] ] ) && isset( $translations[ $lang['code'] ]->term_id ) ) {
					$query_vars['tag_ID'] = $translations[ $lang['code'] ]->term_id;
				} else {
					$query_vars['trid']        = $trid;
					$query_vars['source_lang'] = $this->current_language;
					unset( $query_vars['tag_ID'], $query_vars['action'] );
				}
			} elseif ( $is_menu ) {
				if ( ! empty( $menu_id ) ) {
					if ( isset( $translations[ $lang['code'] ]->term_id ) ) {
						$query_vars['menu'] = $translations[ $lang['code'] ]->term_id;
					} else {
						$query_vars['menu']   = 0;
						$query_vars['trid']   = $trid;
						$query_vars['action'] = 'edit';
					}
				}
			}

			$query_string = http_build_query( $query_vars );

			$query = '?';
			if ( ! empty( $query_string ) ) {
				$query .= $query_string . '&';
			}
			$query .= 'lang=' . $lang['code']; // the default language need to specified explicitly yoo in order to set the lang cookie

			$link_url = admin_url( $current_page_lang . $query );

			$flag = $sitepress->get_flag( $lang['code'] );

			if ( $flag ) {
				if ( $flag->from_template ) {
					$wp_upload_dir = wp_upload_dir();
					$flag_url      = $wp_upload_dir['baseurl'] . '/flags/' . $flag->flag;
				} else {
					$flag_url = ICL_PLUGIN_URL . '/res/flags/' . $flag->flag;
				}
			} else {
				$flag_url = ICL_PLUGIN_URL . '/res/flags/';
			}

			$languages_links[ $lang['code'] ] = array(
				'url'     => $link_url . '&admin_bar=1',
				'current' => $lang['code'] == $this->current_language,
				'anchor'  => $lang['display_name'],
				'flag'    => $sitepress->get_flag_image($lang['code'], [], '', [ 'icl_als_iclflag' ] ),
			);

		}

		if ( $all_languages_enabled ) {
			$query = '?';
			if ( ! empty( $query_string ) ) {
				$query .= $query_string . '&';
			}
			$query   .= 'lang=all';
			$link_url = admin_url( basename( $_SERVER['SCRIPT_NAME'] ) . $query );

			$languages_links['all'] = array(
				'url'     => $link_url,
				'current' => 'all' == $this->current_language,
				'anchor'  => __( 'All languages', 'sitepress' ),
				'flag'    => '<i class="otgs-ico-wpml"></i>',
			);
		} else {
			// set the default language as current
			if ( 'all' == $this->current_language ) {
				$this->current_language                                = $sitepress->get_default_language();
				$languages_links[ $this->current_language ]['current'] = true;
			}
		}

		$current_language_item = isset( $languages_links[ $this->current_language ] ) ? $languages_links[ $this->current_language ] : null;
		$languages_links       = apply_filters( 'wpml_admin_language_switcher_items', $languages_links );
		if ( ! isset( $languages_links[ $this->current_language ] ) ) {
			$languages_links = array_merge( array( $this->current_language => $current_language_item ), $languages_links );
		}

		return $languages_links;
	}


	private function render_admin_bar_menu( $languages_links, $current_language ) {

		/** @var WP_Admin_Bar $wp_admin_bar */
		global $wp_admin_bar;

		$parent        = 'WPML_ALS';
		$lang          = $languages_links[ $this->current_language ];
		$help_tip_text = __( 'This language selector determines which content to display. You can choose items in a specific language or in all languages. To change the language of the WordPress Admin interface, go to your profile.', 'sitepress' );

		// Current language
		$wp_admin_bar->add_menu(
			array(
				'parent' => false,
				'id'     => $parent,
				'title'  => '<span title="' . __( 'Showing content in:', 'sitepress' ) . ' ' . $lang['anchor'] . '">'
							. wp_kses( $lang['flag'], $this->flag_kses_tags ) . '&nbsp;' . esc_html( $lang['anchor'] )
							. '</span>'
							. '&nbsp;<i  class="otgs-ico-help js-otgs-popover-tooltip" data-tippy-zIndex="999999" title="' . $help_tip_text . '" ></i>',
				'href'   => false,
			)
		);

		if ( $languages_links ) {
			foreach ( $languages_links as $code => $lang ) {
				if ( $code == $this->current_language ) {
					continue;
				}
				$wp_admin_bar->add_menu(
					array(
						'parent' => $parent,
						'id'     => $parent . '_' . $code,
						'title'  => wp_kses( $lang['flag'], $this->flag_kses_tags ) . '&nbsp;' . esc_html( $lang['anchor'] ),
						'href'   => $lang['url'],
						'meta'   => array(
							'title' => __( 'Show content in:', 'sitepress' ) . ' ' . $lang['anchor'],
						),
					)
				);
			}
		}
	}
}
