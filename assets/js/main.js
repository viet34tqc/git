// function:
(function(){
	var $window =$(window);
	$('section[data-type="background"]').each(function(){
		var $bgObj = $(this);

		$window.scroll(function() {
			var yPos = -($window.scrollTop() / $bgObj.data('speed'));

			var bgPos = '50% ' + yPos + 'px';

			$bgObj.css({
				backgroundPosition = bgPos
			})
		});
	}) //end window scroll

	//Javascript for modal
	
})();
