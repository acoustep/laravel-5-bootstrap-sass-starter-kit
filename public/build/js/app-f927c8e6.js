(function e(t,n,r){function s(o,u){if(!n[o]){if(!t[o]){var a=typeof require=="function"&&require;if(!u&&a)return a(o,!0);if(i)return i(o,!0);var f=new Error("Cannot find module '"+o+"'");throw f.code="MODULE_NOT_FOUND",f}var l=n[o]={exports:{}};t[o][0].call(l.exports,function(e){var n=t[o][1][e];return s(n?n:e)},l,l.exports,e,t,n,r)}return n[o].exports}var i=typeof require=="function"&&require;for(var o=0;o<r.length;o++)s(r[o]);return s})({1:[function(require,module,exports){
'use strict';

(function ($) {
	$('select').select2();
	$('.swipebox, .fancybox').swipebox();

	// Sortable
	$('.sortable').sortable({
		// handle: ".btn",
		ghostClass: "sortable-ghost",
		onUpdate: function onUpdate(evt /**Event*/) {
			var data;
			data = [];
			$('.sortable').children("li").each(function (index) {
				if (index % 2 != 0) {
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

},{}]},{},[1]);
