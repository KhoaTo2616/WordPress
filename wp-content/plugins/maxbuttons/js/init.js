var $ = jQuery;

jQuery(document).ready(function(jq) {

	$ = jq; // to counter noConflict bandits

	function runMaxInit()
	{
		if (typeof window.maxFoundry === 'undefined')
			window.maxFoundry = {};

		// editor loading when needed.
		if (typeof maxLivePreview === 'function')
		{
		 	window.maxFoundry.livePreview = maxLivePreview;
		}
		else
		{
				//console.error('Could not Load Live Preview');
		}


		window.maxFoundry.maxadmin = new maxAdmin();
	 	window.maxFoundry.maxadmin.init();

		window.maxFoundry.maxmodal = new maxModal();
		window.maxFoundry.maxmodal.init();

		window.maxFoundry.maxAjax = new maxAjax();
		window.maxFoundry.maxAjax.init();

		window.maxFoundry.maxTabs = new maxTabs();
		window.maxFoundry.maxTabs.init();

		$(window).trigger('maxbuttons-js-init-done');

	}

	runMaxInit();

}); /* END OF JQUERY */
