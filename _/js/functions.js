(function ($) {
	jQuery(document).ready(function($){

		$('nav > ul').tinyNav({
			active: 'selected', // Set the "active" class
			header: true // Show header instead of the active item
		});

	});
})(jQuery);