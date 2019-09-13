( function( api ) {

	// Extends our custom "broadcast-lite" section.
	api.sectionConstructor['broadcast-lite'] = api.Section.extend( {

		// No events for this type of section.
		attachEvents: function () {},

		// Always make the section active.
		isContextuallyActive: function () {
			return true;
		}
	} );

} )( wp.customize );
