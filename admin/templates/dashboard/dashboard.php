<?php
/**
 * Dashboard Template.
 *
 * @since 3.0.0
 */

?>

		<div class="wrap wpmoly wpmoly-wrap">
			<div id="wpmoly-<?php echo esc_attr( $dashboard_mode ); ?>" class="wpmoly-container loading">
				<?php if ( ! empty( $object_id ) ) : ?><input type="hidden" id="object_ID" value="<?php echo esc_attr( $object_id ); ?>" /><?php endif; ?>
				<div id="wpmoly-<?php echo esc_attr( $dashboard_mode ); ?>-content" class="wpmoly-content">
					<div id="wpmoly-<?php echo esc_attr( $page ); ?>">
						<noscript><?php echo $noscript; ?></noscript>
					</div>
				</div>
				<div id="wpmoly-<?php echo esc_attr( $dashboard_mode ); ?>-sidebar" class="wpmoly-sidebar">
					<?php
						if ( 'dashboard' !== $dashboard_mode ) {
							if ( ! empty( $object_type ) ) {
								/**
								 * Do Dashboard Block.
								 *
								 * @since 3.0.0
								 */
								do_action( "wpmoly/dashboard/{$object_type}/{$dashboard_mode}/blocks" );
							} else {
								/**
								 * Do Dashboard Block.
								 *
								 * @since 3.0.0
								 */
								do_action( "wpmoly/dashboard/{$dashboard_mode}/blocks" );
							}
						} else {
							/**
							 * Do Dashboard Blocks.
							 *
							 * @since 3.0.0
							 */
							do_action( 'wpmoly/dashboard/blocks' );
						}
					?>
				</div>
			</div>
		</div>
