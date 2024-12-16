( function( api ) {

	// Extends our custom "the-fashion-woocommerce" section.
	api.sectionConstructor['the-fashion-woocommerce'] = api.Section.extend( {

		// No events for this type of section.
		attachEvents: function () {},

		// Always make the section active.
		isContextuallyActive: function () {
			return true;
		}
	} );

} )( wp.customize );