<?php

?>
//<script>
elgg.provide('elgg.site_announcements');

elgg.site_announcements.init = function() {
	
	$(document).on('click', '#site-announcements-site li.elgg-menu-item-mark a', function(event) {
		event.preventDefault();
		
		var guid = $(this).attr('rel');
		
		elgg.action($(this).attr('href'), {
			success: function(res) {
				$('#elgg-object-' + guid).remove();
			}
		});
	});
}

// register init hook
elgg.register_hook_handler('init', 'system', elgg.site_announcements.init);