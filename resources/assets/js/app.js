(function($) {
	$('select').select2();
	$('.swipebox, .fancybox').swipebox();
	
	// Sortable
		$('.sortable').sortable({
			ghostClass: "sortable-ghost",
			onUpdate: function (evt/**Event*/){
				var data;
				data = [];
				$('.sortable').children("li").each(function(index) {
					if(index % 2 != 0) {
						$(this).find('table').removeClass('table-striped');
					} else { 
						$(this).find('table').addClass('table-striped');
					}
					var index_plus_one;
					index_plus_one = index + 1;
					$(this).data("current-order", index_plus_one);
					$(this).find("span.order").html(index_plus_one);
					return data.push({
						id: $(this).data("id"),
						order: $(this).data("current-order")
					});
				});
				return $.ajax({
					type: "POST",
					url: $('.sortable').data('url'),
					data: {
						orders: data,
						_token: $('meta[name=token]').attr('content')
					}
				});
			}
		});
	
})(jQuery);
