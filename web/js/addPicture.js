// Script Javascript: image upload in the NewGalery Form

$(document).ready(function(){
	// get div with data-prototype attribute for new gallery or edit gallery
	if ($('#julie_platformbundle_galerie_images').length) {
	var $container = $('div#julie_platformbundle_galerie_images');
	} else {
		var $container = $('div#julie_platformbundle_edit_galerie_images');
	}
	// link to add new image
	var $addLink = $('<a href="#" id="add_images" class="btn btn-default">Ajouter une photo</a>');
	$container.append($addLink);

	// Add new field with each click on the AddLink
	$addLink.click(function(e){
		addImage($container);
		e.preventDefault(); // prevent the # in the URL
		return false;
	});

	// counter to name dynamically created fields
	var index = $container.find(':input').length;

	// create a first field if it doesn't exists
	if (index == 0){
		addImage($container);
	} else {
		// add delete link for each new image
		$container.children('div').each(function(){
			addDeleteLink($(this));
		});
	}

	// addImage function
	function addImage($container){
		// in data-prototype content: we replace
		// __name__titre__ -> field label
		// __name__        -> field name
		var $prototype = $($container.attr('data-prototype').replace(/__name__label__/g, 'Photo n°' + (index+1)).replace(/__name__/g, index));

		// Add delete link to prototype
		addDeleteLink($prototype);

		// Add modified prototype and the end of the div
		$container.append($prototype);

		// Counter increment
		index++;
	}

	// addDeleteLink function
	function addDeleteLink($prototype){
		var $deleteLink = $('<a href="#" class="btn btn-danger">Supprimer</a>');
		// Implement link
		$prototype.append($deleteLink);

		// Implement listener onclick
		$deleteLink.on ('click', function(e){
			e.preventDefault();
			$prototype.remove();
			return false;
		});
	}
});
