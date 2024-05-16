const { __ } = wp.i18n;

/* Default header. */
wp.blocks.registerBlockVariation( 'core/template-part', {
	name: 'header-default',
	title: 'Header default',
	description: __( 'Default style' ),
	scope: [ 'transform' ],
	attributes: {
		className: 'is-style-default'
	},
});

/* Sticky header. */
wp.blocks.registerBlockVariation( 'core/template-part', {
	name: 'header-sticky',
	title: 'Header sticky',
	description: __( 'Sticky header.' ),
	scope: [ 'transform' ],
	attributes: {
		className: 'is-style-yith-wonder-sticky-header',
	},
});

/* Transparent header. */
wp.blocks.registerBlockVariation( 'core/template-part', {
	name: 'header-overlay',
	title: 'Header overlay',
	description: __( 'Overlay header.' ),
	scope: [ 'transform' ],
	attributes: {
		className: 'is-style-yith-wonder-overlay-header',
	},
});
