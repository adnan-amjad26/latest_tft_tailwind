<?php
namespace W3TC;

if ( ! defined( 'W3TC' ) ) {
	die();
}
?>
<tr>
	<th style="width: 300px;"><label for="cdn_akamai_username"><?php esc_html_e( 'Username:', 'w3-total-cache' ); ?></label></th>
	<td>
		<input id="cdn_akamai_username" class="w3tc-ignore-change" type="text"
			<?php Util_Ui::sealing_disabled( 'cdn.' ); ?> name="cdn__akamai__username" value="<?php echo esc_attr( $this->_config->get_string( 'cdn.akamai.username' ) ); ?>" size="60" />
	</td>
</tr>
<tr>
	<th><label for="cdn_akamai_password"><?php esc_html_e( 'Password:', 'w3-total-cache' ); ?></label></th>
	<td>
		<input id="cdn_akamai_password" class="w3tc-ignore-change"
			<?php Util_Ui::sealing_disabled( 'cdn.' ); ?> type="password" name="cdn__akamai__password" value="<?php echo esc_attr( $this->_config->get_string( 'cdn.akamai.password' ) ); ?>" size="60" />
	</td>
</tr>
<tr>
	<th><label for="cdn_akamai_email_notification"><?php esc_html_e( 'Email notification:', 'w3-total-cache' ); ?></label></th>
	<td>
		<textarea id="cdn_akamai_email_notification" name="cdn__akamai__email_notification"
			<?php Util_Ui::sealing_disabled( 'cdn.' ); ?> cols="40" rows="5"><?php echo esc_textarea( implode( "\r\n", $this->_config->get_array( 'cdn.akamai.email_notification' ) ) ); ?></textarea>
		<p class="description"><?php esc_html_e( 'Specify email addresses for completed removal notifications. One email per line.', 'w3-total-cache' ); ?></p>
	</td>
</tr>
<tr>
	<th><label for="cdn_akamai_zone"><?php esc_html_e( 'Domain to purge:', 'w3-total-cache' ); ?></label></th>
	<td>
		<select  id="cdn_akamai_zone" name="cdn__akamai__zone">
			<option value="production" <?php selected( $this->_config->get_string( 'cdn.akamai.zone' ), 'production' ); ?>>Production</option>
			<option value="staging" <?php selected( $this->_config->get_string( 'cdn.akamai.zone' ), 'staging' ); ?>>Staging</option>
		</select>
	</td>
</tr>
<tr>
	<th><label for="cdn_akamai_action"><?php esc_html_e( 'Purge action:', 'w3-total-cache' ); ?></label></th>
	<td>
		<select  id="cdn_akamai_action" name="cdn__akamai__action">
			<option value="invalidate" <?php selected( $this->_config->get_string( 'cdn.akamai.action' ), 'invalidate' ); ?>>Invalidate</option>
			<option value="remove" <?php selected( $this->_config->get_string( 'cdn.akamai.action' ), 'remove' ); ?>>Remove</option>
		</select>
	</td>
</tr>
<tr>
	<th>
		<label for="cdn_akamai_ssl">
			<?php
			echo wp_kses(
				sprintf(
					// translators: 1 opening HTML acronym tag, 2 closing HTML acronym tag.
					__(
						'%1$sSSL%2$s support:',
						'w3-total-cache'
					),
					'<acronym title="' . __( 'Secure Sockets Layer', 'w3-total-cache' ) . '">',
					'</acronym>'
				),
				array(
					'acronym' => array(
						'title' => array(),
					),
				)
			);
			?>
		</label>
	</th>
	<td>
		<select id="cdn_akamai_ssl" name="cdn__akamai__ssl" <?php Util_Ui::sealing_disabled( 'cdn.' ); ?>>
			<option value="auto"<?php selected( $this->_config->get_string( 'cdn.akamai.ssl' ), 'auto' ); ?>><?php esc_html_e( 'Auto (determine connection type automatically)', 'w3-total-cache' ); ?></option>
			<option value="enabled"<?php selected( $this->_config->get_string( 'cdn.akamai.ssl' ), 'enabled' ); ?>><?php esc_html_e( 'Enabled (always use SSL)', 'w3-total-cache' ); ?></option>
			<option value="disabled"<?php selected( $this->_config->get_string( 'cdn.akamai.ssl' ), 'disabled' ); ?>><?php esc_html_e( 'Disabled (always use HTTP)', 'w3-total-cache' ); ?></option>
		</select>
		<p class="description">
			<?php
			echo wp_kses(
				sprintf(
					// translators: 1 opening HTML acronym tag, 2 closing HTML acronym tag,
					// translators: 3 opening HTML acronym tag, 4 closing HTML acronym tag.
					__(
						'Some %1$sCDN%2$s providers may or may not support %3$sSSL%4$s, contact your vendor for more information.',
						'w3-total-cache'
					),
					'<acronym title="' . __( 'Content Delivery Network', 'w3-total-cache' ) . '">',
					'</acronym>',
					'<acronym title="' . __( 'Secure Sockets Layer', 'w3-total-cache' ) . '">',
					'</acronym>'
				),
				array(
					'acronym' => array(
						'title' => array(),
					),
				)
			);
			?>
		</p>
	</td>
</tr>
<tr>
	<th><?php esc_html_e( 'Replace site\'s hostname with:', 'w3-total-cache' ); ?></th>
	<td>
		<?php
		$cnames = $this->_config->get_array( 'cdn.akamai.domain' );
		require W3TC_INC_DIR . '/options/cdn/common/cnames.php';
		?>
		<p class="description">
			<?php
			echo wp_kses(
				sprintf(
					// translators: 1 opening HTML acronym tag, 2 closing HTML acronym tag,
					// translators: 3 opening HTML acronym tag, 4 closing HTML acronym tag.
					__(
						'Enter the hostname provided by your %1$sCDN%2$s provider, this value will replace your site\'s hostname in the %3$sHTML%4$s.',
						'w3-total-cache'
					),
					'<acronym title="' . __( 'Content Delivery Network', 'w3-total-cache' ) . '">',
					'</acronym>',
					'<acronym title="' . __( 'Hypertext Markup Language', 'w3-total-cache' ) . '">',
					'</acronym>'
				),
				array(
					'acronym' => array(
						'title' => array(),
					),
				)
			);
			?>
		</p>
	</td>
</tr>
<tr>
	<th colspan="2">
		<input id="cdn_test" class="button {type: 'akamai', nonce: '<?php echo esc_attr( wp_create_nonce( 'w3tc' ) ); ?>'}" type="button" value="<?php esc_attr_e( 'Test akamai', 'w3-total-cache' ); ?>" /> <span id="cdn_test_status" class="w3tc-status w3tc-process"></span>
	</th>
</tr>
