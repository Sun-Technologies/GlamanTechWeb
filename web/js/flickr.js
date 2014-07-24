           $(document).ready(function(){
	var flickerUserId = '52617155@N08';
	var NumberofImages = 10;
	$('#cbox').jflickrfeed({
		limit: NumberofImages,
		qstrings: {
			id: flickerUserId
		},
		
		itemTemplate: '<li>'+
						'<a href="http://www.flickr.com/photos/'+flickerUserId+'" target="_blank" title="{{title}}">' +
							'<img src="{{image_s}}" alt="{{title}}" />' +
						'</a>' +
					  '</li>'
	}, function(data) {
		$('#cbox a').colorbox();
	});


});