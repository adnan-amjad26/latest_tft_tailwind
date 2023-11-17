/* Controls the day/night mode appearance on page load */
if (!localStorage.getItem('dnmode')) {
	var DNMode = 'night', TimeNow = new Date().getHours();
	DNMode = (TimeNow < 18) ? 'day' : 'night';
	localStorage.setItem('dnmode', DNMode);
}
if (localStorage.getItem('dnmode') == 'night') {
	jQuery('.mode .toggle-input').trigger('click');
	jQuery('body').addClass('theme-dark').removeAttr('data-day');
}
jQuery(document).ready(function ($) {
	// Main Menu
	$(".btn-menu").click(function () {
		$("header")
			.toggleClass("overlay")
			.find(".menu-nav-wrap")
			.toggleClass("active");
	});
	$(".btn-menu-close").click(function () {
		$("header")
			.removeClass("overlay")
			.find(".menu-nav-wrap")
			.removeClass("active");
	});
	$("body, html").click(function (e) {
		if ($(e.target).closest(".btn-menu, .menu-nav-wrap").length === 0) {
			$("header")
				.removeClass("overlay")
				.find(".menu-nav-wrap")
				.removeClass("active");
		}
	});

	// Function to generate the challenge URL based on parameters
	function generateChallengeURL(challengeType, accountType, accountSize) {
		var planId;
		// Convert accountSize to the appropriate format
		accountSize = accountSize.endsWith("000") ? parseInt(accountSize) / 1000 : parseInt(accountSize);
		// Determine the planId based on challengeType and accountSize
		if (challengeType === "standard") {
			if (accountType === "swing") {
				planId = {
					5: 1189,
					10: 1190,
					25: 1191,
					50: 1192,
					100: 1193,
					200: 1194,
					300: 1195,
					400: 1196
				}[accountSize];
			} else if (accountType === "regular") {
				planId = {
					5: 1157,
					10: 1158,
					25: 1159,
					50: 1160,
					100: 1161,
					200: 1162,
					300: 1163,
					400: 1164
				}[accountSize];
			}
		} else if (challengeType === "rapid") {
			if (accountType === "swing") {
				planId = {
					5: 594,
					10: 2072,
					25: 2073,
					50: 2074,
					100: 2075,
					200: 2076
				}[accountSize];
			} else if (accountType === "regular") {
				planId = {
					5: 592,
					10: 2042,
					25: 2043,
					50: 2044,
					100: 2045,
					200: 2046
				}[accountSize];
			}
		} else if (challengeType === "royal") {
			planId = {
				50: 2012,
				100: 2013,
				200: 2014,
				300: 2015,
				400: 2016
			}[accountSize];
		} else if (challengeType === "knight") {
			planId = {
				25: 1999,
				50: 2000,
				100: 2001,
				200: 2002
			}[accountSize];
		}
		// console.log(planId);
		// Return the generated URL
		return 'https://' + 'dashboard.thefundedtraderprogram.com' + '/purchasechallenge-n/?planid=' + planId;
	}


	// function to have send the ajax request
	let product_id = $('h1#product_id').text();
	var tables = [];

	function makeAjaxRequest() {
		return new Promise(function (resolve, reject) {
			$.ajax({
				url: ajax_params.ajax_url,
				type: 'post',
				data: {
					action: 'tables_data_action',
					nonce: ajax_params.ajax_nonce,
					product_id: product_id
				},
				success: function (response) {
					tables = response.tables;
					resolve(tables);

				}
			});
		});
	}

	let buttonCombinations = [];

	makeAjaxRequest()
		.then(function (response) {
			response.forEach(function (element) {
				var challenge_type = element.challange_type.slug;
				var account_type = element.account_type.slug;
				var account_size = parseInt(element.account_size.slug); // Convert to integer

				// Add the transformed data to the result array
				buttonCombinations.push({
					"challenge_type": challenge_type,
					"account_type": account_type,
					"account_size": account_size
				});
			});


			$(".toggles li.account_size[account_size]").click(function () {
				$(".toggles li[account_size]").removeClass('active');
				$(this).addClass('active');
				var account_size = $(this).attr("account_size");
				var challenge_type = $(this).attr("challenge_type");
				var account_type = $(this).attr("account_type");
				let challengeType = '';
				// update the checkout button link with planId
				if (challenge_type.toLowerCase().includes('-challenge')) {
					// If challenge_type includes '-challenge', remove it
					challengeType = challenge_type.replace('-challenge', '');
				}
				var challengeURL = generateChallengeURL(challengeType, account_type, account_size);
				$('a#buyChallenge').attr('href', challengeURL);

				var filteredResults = filterData(response, challenge_type, account_type, account_size);
				var tableData = filteredResults[0];
				tableData.table.header.forEach(function (cell, index) {
					// Update the header cell based on the index
					$('.table__head .col-xxs-3:eq(' + index + ')').html(cell.c);
				});

				// Iterate through the table body and update the table cells
				tableData.table.body.forEach(function (row, rowIndex) {
					row.forEach(function (cell, cellIndex) {
						// Update the table cell based on the row index and cell index
						$('.table__body .row:eq(' + rowIndex + ') .col-xxs-3:eq(' + cellIndex + ')').html(cell.c);
					});
				});
				// Update mobile table header
				$('.product-table-mobile .table__head .row div:eq(0)').html(tableData.table.header[0].c);
				// Update mobile table body
				tableData.table.body.forEach(function (row, rowIndex) {
					// var mainRowIndex = rowIndex * 2;
					// var expandedRowIndex = mainRowIndex + 1;
					if (rowIndex % 2 == 0) {
						$('.product-table-mobile .table__body .row:eq(' + rowIndex + ') > div').html(row[0].c);
					} else {
						$('.product-table-mobile .table__expand:eq(' + rowIndex + ') > div').html(row[1].c);
					}

				});
				//
				// // Update mobile swiper table header
				tableData.table.header.forEach(function (cell, index) {
					// console.log(cell);
					if (index !== 0) {
						$('.product-table-mobile .swiper-slide .table__head .row div:eq(' + parseInt(index - 1) + ')').html(cell.c);
					}
				});

				// Update mobile swiper table body
				let i = 0;
				tableData.table.body.forEach(function (row, rowIndex) {
					if (rowIndex % 2 === 0) {
						row.forEach(function (cell, cellIndex) {
							if (cellIndex > 0) {
								$('.product-table-mobile .swiper-slide:eq(' + parseInt(cellIndex - 1) + ') .table__body .row:eq(' + rowIndex + ') div').html(cell.c);
							}
							i++;

						});
					}

				});
				// console.log(filteredResults[0]);
			});
		})
		.catch(function (error) {
			console.error(error);
		});


	function filterData(tables, challengeSlug, accountTypeSlug, accountSizeSlug) {
		// Initialize an empty array to store filtered results
		var filtereddData = [];
		// Iterate through the data array
		$.each(tables, function (index, element) {
			// console.log(element.account_type.slug);
			if (
				element.challange_type.slug === challengeSlug &&
				element.account_type.slug === accountTypeSlug &&
				element.account_size.slug === accountSizeSlug
			) {
				filtereddData.push(element);
			}
		});

		// Return the filtered data
		return filtereddData;
	}


	// Platform Toggles
	if (document.querySelector("section.platform")) {
		let button1 = document.querySelector(".platform .buttons a:nth-child(1)");
		let button2 = document.querySelector(".platform .buttons a:nth-child(2)");
		let button3 = document.querySelector(".platform .buttons a:nth-child(3)");
		let button4 = document.querySelector(".platform .buttons a:nth-child(4)");

		$(".platform .toggles li").on("click touch", function () {
			$(".platform .toggles li.active").removeClass("active");
			$(this).addClass("active");

			let newMac = $(this).data("mac");
			let newWindows = $(this).data("windows");
			let newPlay = $(this).data("play");
			let newIos = $(this).data("ios");

			$(button1).attr("href", newMac);
			$(button2).attr("href", newWindows);
			$(button3).attr("href", newPlay);
			$(button4).attr("href", newIos);
		});
	}

	// Media Boxes Swiper
	if (document.querySelector(".media-boxes .swiper")) {
		const mediaSwipers = document.querySelectorAll(".media-boxes .swiper");
		Array.prototype.forEach.call(mediaSwipers, (el) => {
			var mediaSwiper = new Swiper(el, {
				speed: 800,
				spaceBetween: 30,
				slidesPerView: 1,
				navigation: {
					nextEl: el.querySelector(".swiper-nav .next"),
					prevEl: el.querySelector(".swiper-nav .prev"),
				},
				breakpoints: {
					700: {
						spaceBetween: 30,
						slidesPerView: 2,
					},
					1080: {
						spaceBetween: 30,
						slidesPerView: 3,
					},
					1440: {
						spaceBetween: 60,
						slidesPerView: 3,
					},
				},
			});
		});
	}

	// Open & Close Disclaimer Modal
	$(".disclaimer-toggle").on("click touch", function (e) {
		e.preventDefault();
		$(".disclaimer:not(.open)").addClass("open");
	});

	$(".disclaimer").on("click touch", function (e) {
		if (!e.target.closest(".disclaimer-inner")) {
			$(".disclaimer").removeClass("open");
		}
	});

	// Move Content Image Title on Mobile
	if (window.innerWidth < 1024 || window.innerWidth < window.innerHeight) {
		$(".content-image .text .title").each(function () {
			let titleSlot = $(this).parents(".content-image").find(".video-col");
			$(this).prependTo(titleSlot);
		});
	}
	// Day / Night Switcher
	$(".mode .toggle-input").click(function () {
		// Change Body Class "theme-dark"
		if($('body').hasClass("theme-dark")) {
			$("body").addClass("theme-light").removeClass("theme-dark");
		} else {
			$("body").addClass("theme-dark").removeClass("theme-light");
		}
		
		// Change Body Attr "data-day"
		let day = $("body").attr("data-day");
		typeof day !== "undefined" && day !== false
			? $("body").removeAttr("data-day")
			: $("body").attr("data-day", "");
		// Update Scroll for "is-inview"
		scroll.update();
		// localStorage set mode
		localStorage.getItem("dnmode") == "night"
			? localStorage.setItem("dnmode", "day")
			: localStorage.setItem("dnmode", "night");
	});

	// Play / pause music
	$(".music-controls").click(function () {
		$(this).toggleClass("play");
		var audio = $(".music-controls audio")[0];
		audio.paused ? audio.play() : audio.pause();
	});

	// Scroll to anchor
	var hash = window.location.hash;
	if (hash)
		$("html, body").animate({scrollTop: $(hash).offset().top - 100}, 500);
	$('a[href*="#"]:not(.wpml-ls-item-toggle)').click(function () {
		var url = $(this).attr("href");
		var index = url.indexOf("#");
		if (index !== -1) {
			var hash = url.substring(index);
			$("html, body").animate({scrollTop: $(hash).offset().top - 100}, 500);
		}
	});

	// Process Challenge Type
	$(".content-scrolls .toggles li").click(function () {
		$(this).addClass("active").siblings().removeClass("active");
		$(".content-scrolls .scrolls-box").hide();
		$(
			'.content-scrolls .scrolls-box[data-type="' + $(this).data("type") + '"]'
		).show();
	});

	// Home wrap bricks element
	if ($("body").hasClass("home"))
		$(".home .bricks-elem").wrapAll('<div class="bricks"/>');

	// Comparison Firms Tab
	$(".comparison .toggles li").click(function () {
		$(this).addClass("active").siblings().removeClass("active");
		$(".comparison .comparison-firm").removeClass("active");
		$(
			'.comparison .comparison-firm[data-firm="' + $(this).data("firm") + '"]'
		).addClass("active");
	});

	// Product Table Mobile
	var productTableMobileSwiper = new Swiper(".product-table-mobile-swiper", {
		navigation: {
			nextEl: ".product-table-mobile-next",
			prevEl: ".product-table-mobile-prev",
		},
	});

	// Comparison Table Mobile
	var comparisonTableMobileSwiper = new Swiper(
		".comparison-table-mobile-swiper",
		{
			navigation: {
				nextEl: ".comparison-table-mobile-next",
				prevEl: ".comparison-table-mobile-prev",
			},
		}
	);

	// Challenge Type | Account Type | Account Size on Load
	$(window).on("load", function () {
		// Challenge Type
		var challenge_type = $(".toggles li[challenge_type].active").attr(
			"challenge_type"
		);
		var account_type = $(".toggles li[account_type]:visible")
			.first()
			.addClass("active")
			.attr("account_type");

		$(".toggles li[account_type]").attr('challenge_type', challenge_type);
		$(".toggles li[account_size]").attr('challenge_type', challenge_type).attr('account_type', account_type);
		$(".toggles li[account_type]").each(function () {
			// $(this).hide();
			var account_type = $(this).attr("account_type");
			// console.log($(this));
			// if (
			// 	!$(
			// 		".product-table[challenge_type=" +
			// 		challenge_type +
			// 		"][account_type=" +
			// 		account_type +
			// 		"]"
			// 	).length
			// )
			// 	$(this).hide();
		});
		// Account Type
		var account_type = $(".toggles li[account_type]:visible")
			.first()
			.addClass("active")
			.attr("account_type");
		$(".toggles li[account_size]").each(function () {
			var account_size = $(this).attr("account_size");
			// if (
			// 	!$(
			// 		".product-table[challenge_type=" +
			// 		challenge_type +
			// 		"][account_type=" +
			// 		account_type +
			// 		"][account_size=" +
			// 		account_size +
			// 		"]"
			// 	).length
			// )
			// $(this).hide();
		});
		// Account Size
		var account_size = $(".toggles li[account_size]:visible")
			.first()
			.addClass("active")
			.attr("account_size");
		// Product Table
		$(
			".product-table[challenge_type=" +
			challenge_type +
			"][account_type=" +
			account_type +
			"][account_size=" +
			account_size +
			"]"
		).addClass("active");
	});

	$(".toggles li.challenge_type[challenge_type]").click(function () {
		$(this).addClass("active").siblings().removeClass("active");
		var challenge_type = $(this).attr("challenge_type");
		$(".toggles li.account_type[account_type]").attr('challenge_type', challenge_type);
		var account_typee = $(".toggles li.account_type[account_type].active").attr(
			"account_type"
		);
		$(".toggles li.account_size[account_size]").attr('challenge_type', challenge_type).attr('account_type', account_typee);

		var filteredData = buttonCombinations.filter(function (item) {
			return item.challenge_type === challenge_type;
		});


		$(".toggles li.account_type[account_type]").each(function () {
			// Check if the combination is not present in the data
			var currentListItem = $(this);
			var isCombinationPresent = filteredData.some(function (item) {
				return item.challenge_type === currentListItem.attr('challenge_type') && item.account_type === currentListItem.attr('account_type');
			});
			// If not present, hide the list item
			if (!isCombinationPresent) {
				$(this).hide();
			} else {
				$(this).show();
			}
		});
		$(".toggles li.account_type[account_type]:visible").first().addClass('active').siblings().removeClass("active");

		let account_type = $(".toggles li.account_type[account_type].active").attr(
			"account_type"
		);

		$(".toggles li.account_size[account_size]").attr('challenge_type', challenge_type).attr('account_type', account_type);

		var filteredSizeData = buttonCombinations.filter(function (item) {
			return (item.challenge_type === challenge_type && item.account_type === account_type);
		});

		$(".toggles li.account_size[account_size]").each(function () {
			// Check if the combination is not present in the data
			var currentListItem = $(this);
			var isCombinationPresent = filteredSizeData.some(function (item) {

				return item.challenge_type === currentListItem.attr('challenge_type')
					&& item.account_type === currentListItem.attr('account_type')
					&& item.account_size === parseInt(currentListItem.attr('account_size'));
			});
			// If not present, hide the list item
			if (!isCombinationPresent) {
				$(this).hide();
			} else {
				$(this).show();
			}
		});

		$(".toggles li.account_size[account_size]:visible").first().addClass('active').siblings().removeClass("active");
		//
		$(".toggles li.account_size[account_size]:visible")
			.first().click();


	});

	//handling of the account type click
	$(".toggles li.account_type[account_type]").click(function () {
		$(this).addClass("active").siblings().removeClass("active");
		var challenge_type = $(this).attr("challenge_type");
		var account_type = $(this).attr("account_type");
		$(".toggles li[account_size]").attr('challenge_type', challenge_type).attr('account_type', account_type);

		$(".toggles li[account_size]:visible")
			.first().click();

		var filteredSizeData = buttonCombinations.filter(function (item) {
			return (item.challenge_type === challenge_type && item.account_type === account_type);
		});
		$(".toggles li.account_size[account_size]").each(function () {
			// Check if the combination is not present in the data
			var currentListItem = $(this);
			var isCombinationPresent = filteredSizeData.some(function (item) {

				return item.challenge_type === currentListItem.attr('challenge_type')
					&& item.account_type === currentListItem.attr('account_type')
					&& item.account_size === parseInt(currentListItem.attr('account_size'));
			});
			// If not present, hide the list item
			if (!isCombinationPresent) {
				$(this).hide();
			} else {
				$(this).show();
			}
		});

		$(".toggles li.account_size[account_size]:visible").first().addClass('active').siblings().removeClass("active");
		//
		$(".toggles li.account_size[account_size]:visible")
			.first().click();
	});

	// Checkout Update Product Variation
	$(window).on("load", function () {
		var challenge_type = $("#order_review [challenge_type]").attr(
			"challenge_type"
		);
		var account_size = $("#order_review [account_size]").attr("account_size");
		var account_type = $("#order_review [account_type]").attr("account_type");
		var platform = $("#order_review [platform]").attr("platform");
		var broker = $("#order_review [broker]").attr("broker");
		$("form[name=checkout] input[value=" + challenge_type + "]").prop(
			"checked",
			true
		);
		$("form[name=checkout] input[value=" + account_size + "]").prop(
			"checked",
			true
		);
		$("form[name=checkout] input[value=" + account_type + "]").prop(
			"checked",
			true
		);
		$("form[name=checkout] input[value=" + platform + "]").prop(
			"checked",
			true
		);
		$("form[name=checkout] input[value=" + broker + "]").prop("checked", true);
		$(
			".chooseChallengeTable > div[challenge_type=" +
			challenge_type +
			"][account_type=" +
			account_type +
			"][account_size=" +
			account_size +
			"]"
		).addClass("active");
		$(".checkout-toggles [account_type]").each(function () {
			var account_type = $(this).attr("account_type");
			if (
				!$(
					".chooseChallengeTable > div[challenge_type=" +
					challenge_type +
					"][account_type=" +
					account_type +
					"]"
				).length
			)
				$(this).hide();
		});
		$(".checkout-toggles [account_size]").each(function () {
			var account_size = $(this).attr("account_size");
			if (
				!$(
					".chooseChallengeTable > div[challenge_type=" +
					challenge_type +
					"][account_type=" +
					account_type +
					"][account_size=" +
					account_size +
					"]"
				).length
			)
				$(this).hide();
		});
		if (challenge_type == "knights-challenge" || platform == "mt5")
			$("[broker=purple-trading]").hide();
	});
	$("body").on(
		"change",
		"input[name=challenge_type], input[name=account_size], input[name=account_type], input[name=platform], input[name=broker]",
		function () {
			var challenge_type = $(
				".checkout-toggles [challenge_type] input:checked"
			).val();
			var platform = $(".checkout-toggles [platform] input:checked").val();
			if ($(this).is("[name=challenge_type]")) {
				var challenge_type = $(
					".checkout-toggles [challenge_type] input:checked"
				).val();
				$(".checkout-toggles [account_type]").each(function () {
					var account_type = $(this).attr("account_type");
					if (
						$(
							".chooseChallengeTable > div[challenge_type=" +
							challenge_type +
							"][account_type=" +
							account_type +
							"]"
						).length
					)
						$(this).show();
					else $(this).hide();
				});
				$(".checkout-toggles [account_type]:visible:first")
					.find("input")
					.prop("checked", true);
				var account_type = $(
					".checkout-toggles [account_type] input:checked"
				).val();
				$(".checkout-toggles [account_size]").each(function () {
					var account_size = $(this).attr("account_size");
					if (
						$(
							".chooseChallengeTable > div[challenge_type=" +
							challenge_type +
							"][account_type=" +
							account_type +
							"][account_size=" +
							account_size +
							"]"
						).length
					)
						$(this).show();
					else $(this).hide();
				});
				$(".checkout-toggles [account_size]:visible:first")
					.find("input")
					.prop("checked", true);
				var account_size = $(
					".checkout-toggles [account_size] input:checked"
				).val();
				$(".checkout-toggles [broker]:visible:first")
					.find("input")
					.prop("checked", true);
				challenge_type == "knights-challenge" || platform == "mt5"
					? $("[broker=purple-trading]").hide()
					: $("[broker=purple-trading]").show();
				$(".chooseChallengeTable > div").removeClass("active");
				$(
					".chooseChallengeTable > div[challenge_type=" +
					challenge_type +
					"][account_type=" +
					account_type +
					"][account_size=" +
					account_size +
					"]"
				).addClass("active");
			} else if ($(this).is("[name=account_type]")) {
				var challenge_type = $(
					".checkout-toggles [challenge_type] input:checked"
				).val();
				var account_type = $(
					".checkout-toggles [account_type] input:checked"
				).val();
				$(".checkout-toggles [account_size]").each(function () {
					var account_size = $(this).attr("account_size");
					if (
						$(
							".chooseChallengeTable > div[challenge_type=" +
							challenge_type +
							"][account_type=" +
							account_type +
							"][account_size=" +
							account_size +
							"]"
						).length
					)
						$(this).show();
					else $(this).hide();
				});
				$(".checkout-toggles [account_size]:visible:first")
					.find("input")
					.prop("checked", true);
				var account_size = $(
					".checkout-toggles [account_size] input:checked"
				).val();
				$(".chooseChallengeTable > div").removeClass("active");
				$(
					".chooseChallengeTable > div[challenge_type=" +
					challenge_type +
					"][account_type=" +
					account_type +
					"][account_size=" +
					account_size +
					"]"
				).addClass("active");
			} else if ($(this).is("[name=account_size]")) {
				var challenge_type = $(
					".checkout-toggles [challenge_type] input:checked"
				).val();
				var account_type = $(
					".checkout-toggles [account_type] input:checked"
				).val();
				var account_size = $(
					".checkout-toggles [account_size] input:checked"
				).val();
				$(".chooseChallengeTable > div").removeClass("active");
				$(
					".chooseChallengeTable > div[challenge_type=" +
					challenge_type +
					"][account_type=" +
					account_type +
					"][account_size=" +
					account_size +
					"]"
				).addClass("active");
			} else if ($(this).is("[name=platform]")) {
				if (platform == "mt5") {
					$(".checkout-toggles [broker]:visible:first")
						.find("input")
						.prop("checked", true);
					$("[broker=purple-trading]").hide();
				} else $("[broker=purple-trading]").show();
			}
			var challenge_type = $("input[name=challenge_type]:checked").val();
			var account_size = $("input[name=account_size]:checked").val();
			var account_type = $("input[name=account_type]:checked").val();
			var platform = $("input[name=platform]:checked").val();
			var broker = $("input[name=broker]:checked").val();
			var data = {
				action: "checkout_update_product_variation",
				challenge_type: challenge_type,
				account_size: account_size,
				account_type: account_type,
				platform: platform,
				broker: broker,
			};
			$.ajax({
				url: ajax_params.ajax_url,
				data: data,
				type: "POST",
				success: function (data) {
					$("body").trigger("update_checkout");
				},
			});
		}
	);

	$(".review-text.resize").textfill({
		minFontPixels: 10,
		maxFontPixels: 40,
	});
	// 	updateTextFill();

	// Spoilers
	$(".product-table-desktop .table__expand").each(function () {
		if ($(this).find(".row > .empty").length > 3) {
			$(this).prev().removeAttr("data-spoiler");
		}
	});
	$(".product-table-mobile .table__expand").each(function () {
		if ($(this).find(".row > .empty").length) {
			$(this).prev().removeAttr("data-spoiler");
		}
	});
	$(".product-table-desktop [data-spoiler]").click(function () {
		$(this).toggleClass("_active").next().slideToggle();
	});
	$(".product-table-mobile [data-spoiler]").click(function () {
		$(this).toggleClass("_active").next().toggle();
		var index = $(this).next().index();
		var height = $(this).next().find(".row > div").outerHeight();
		$(this).next().find(".row").height(height);
		$(this)
			.closest(".product-table-mobile")
			.find(
				".product-table-mobile-swiper .table__body > .row:nth-child(" +
				index +
				")"
			)
			.next()
			.height(height)
			.toggle();
	});

	// Brokers
	$("button[data-broker]").click(function () {
		$(".button-group[data-broker]").removeClass("active");
		$('.button-group[data-broker="' + $(this).data("broker") + '"]').addClass(
			"active"
		);
	});

	// Price Table Mobile
	var topMatchTd;
	var previousValue = "";
	jQuery(".table__expand").each(function () {
		var firstEl = jQuery(this).first().find(".col-xxs-3:first");
		jQuery(this)
			.find(".col-xxs-3")
			.each(function (i) {
				if (jQuery(this).text() === previousValue) {
					var index = i + 1;
					jQuery(topMatchTd).removeClass("col-xxs-3");
					if (index > 3) {
						jQuery(firstEl).remove();
						jQuery(topMatchTd).addClass("col-xxs-12");
					}
					jQuery(this).not(firstEl).remove();
				} else {
					topMatchTd = jQuery(this);
				}
				previousValue = jQuery(this).text();
			});
	});

	// Quick Comparison
	$(".table__tab[quick_comparison]").click(function () {
		$(this).toggleClass("active");
		var challange_type = $(".toggles li.account_size.active").attr("challenge_type");
		var table = $(".product-table.active");
		var comparison_table = $(
			'.comparison-table[challenge_type="' + challange_type + '"]'
		);
		$('.table.comparison-table').hide();
		comparison_table.toggle();
		table
			.find(".table:not(.comparison-table)")
			.toggle()
			.after(comparison_table);
	});
});

jQuery(window).on("resize", function () {
	updateTextFill();
	// 	jQuery('.review-text.resize').textfill({
	// 		minFontPixels: 10,
	// 		maxFontPixels: 40,
	// 		debug: true
	// 	});
});

function updateTextFill() {
	jQuery(".review-text.resize")
		// 		.height(jQuery('.review-text.resize').width()/1.5)
		.textfill({
			maxFontPixels: 40,
		});
}

jQuery(document).ready(function ($) {
	$done = false;
	$(window).mousemove(function () {
		if (!$done) {
			console.log("The page has fully loaded.");
			const lottieConfigs = [
				{
					class: "dragon imgs-day",
					speed: "0.6",
					src: $('#lottie1').data('src')
				},
				{
					class: "dragon imgs-night",
					speed: "0.6",
					src: $('#lottie2').data('src')

				},
				{
					class: "horse imgs-day",
					speed: "1",
					src: $('#lottie3').data('src')


				},
				{
					class: "knight imgs-night",
					speed: "0.6",
					src: $('#lottie4').data('src')


				},
				{
					class: "knight imgs-day",
					speed: "0.6",
					src: $('#lottie5').data('src')


				}
			];

// HTML strings for each lottie-player element
			const lottiePlayerHTML = lottieConfigs.map(config => {
				// console.log(config);
				return `<lottie-player src="${config.src}"  class="${config.class}" background="transparent" speed="${config.speed}" loop autoplay></lottie-player>`;
			});

// Append the lottie-player elements to their respective containers
			lottiePlayerHTML.forEach((html, index) => {
				$(`#lottie${index + 1}`).append(html);
			});
			$done = true;
			// container.appendChild(lottiePlayer2);
			// container.appendChild(lottiePlayer3);
		}
	});
});
