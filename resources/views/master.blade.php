<!DOCTYPE html>
<html lang="en">
<head>

<!-- Basic -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<title>GenZ || Home </title>	

<meta name="keywords" content="WebSite" />
<meta name="description" content="GenZ  | Home Page">
<meta name="author" content="">

<!-- Favicon -->
<link rel="shortcut icon" href="{{ asset('') }}img/favicon.ico" type="image/x-icon" />
<link rel="apple-touch-icon" href="{{ asset('') }}img/apple-touch-icon.png">

<!-- Mobile Metas -->
<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, shrink-to-fit=no">

<!-- Web Fonts  -->
<link id="googleFonts" href="https://fonts.googleapis.com/css?family=Playfair+Display:400,700%7CSintony:400,700&display=swap" rel="stylesheet" type="text/css">

<!-- Vendor CSS -->
<link rel="stylesheet" href="{{ asset('') }}vendor/bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="{{ asset('') }}vendor/fontawesome-free/css/all.min.css">
<link rel="stylesheet" href="{{ asset('') }}vendor/animate/animate.compat.css">
<link rel="stylesheet" href="{{ asset('') }}vendor/simple-line-icons/css/simple-line-icons.min.css">
<link rel="stylesheet" href="{{ asset('') }}vendor/owl.carousel/assets/owl.carousel.min.css">
<link rel="stylesheet" href="{{ asset('') }}vendor/owl.carousel/assets/owl.theme.default.min.css">
<link rel="stylesheet" href="{{ asset('') }}vendor/magnific-popup/magnific-popup.min.css">

<!-- Theme CSS -->
<link rel="stylesheet" href="css/theme.css">
<link rel="stylesheet" href="css/theme-elements.css">
<link rel="stylesheet" href="css/theme-blog.css">
<link rel="stylesheet" href="css/theme-shop.css">

<!-- Demo CSS -->
<link rel="stylesheet" href="css/demos/demo-business-consulting.css">
<!-- <link rel="stylesheet" href="css/demos/demo-business-consulting-2.css"> -->

<!-- Skin CSS -->
<link id="skinCSS" rel="stylesheet" href="css/skins/skin-business-consulting.css">
<!-- <link id="skinCSS" rel="stylesheet" href="css/skins/skin-business-consulting-2.css"> -->

<!-- Theme Custom CSS -->
<link rel="stylesheet" href="css/custom.css">

</head>
	<body class="loading-overlay-showing" data-plugin-page-transition data-loading-overlay data-plugin-options="{'hideDelay': 0, 'effect': 'pulse'}">
		<div class="loading-overlay">
			<div class="bounce-loader">
				<div class="wrapper-pulse">
					<div class="cssload-pulse-loader"></div>
				</div>
			</div>
		</div>

		<div class="body">
			@include('body.header')

			@yield('content')

            @include('body.footer')
			
		</div>

		<!-- <a class="style-switcher-open-loader" href="#" data-base-path="" data-skin-src="" 
			data-bs-toggle="tooltip" data-bs-animation="false" data-bs-placement="right" 
			title="Style Switcher" aria-label="Style Switcher">
			<i class="fas fa-cogs"></i>
			<div class="style-switcher-tooltip">
				<strong>Style Switcher</strong>
				<p>Check out different color options and styles.</p>
			</div>
		</a> -->

		<!-- Vendor -->
		<script src='https://code.jquery.com/jquery-3.4.1.min.js'></script>
		<script src='https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js'></script>
		<script src="{{ asset('') }}vendor/plugins/js/plugins.min.js"></script>

		<!-- Theme Base, Components and Settings -->
		<script src="{{ asset('') }}js/theme.js"></script>

		<!-- Current Page Vendor and Views -->
		<script src="{{ asset('') }}js/views/view.landing.js"></script>

		<!-- Theme Custom -->
		<script src="{{ asset('') }}js/custom.js"></script>

		<!-- Theme Initialization Files -->
		<script src="{{ asset('') }}js/theme.init.js"></script>
		
		<script>
			// ------------step-wizard-------------
			$(document).ready(function () {
				$('.nav-tabs > li a[title]').tooltip();
				
				//Wizard
				$('a[data-toggle="tab"]').on('shown.bs.tab', function (e) {

					var target = $(e.target);
				
					if (target.parent().hasClass('disabled')) {
						return false;
					}
				});

				// $(".next-step").click(function (e) {

				// 	var active = $('.wizard .nav-tabs li.active');
				// 	active.next().removeClass('disabled');
				// 	nextTab(active);

				// });
				// $(".prev-step").click(function (e) {

				// 	var active = $('.wizard .nav-tabs li.active');
				// 	prevTab(active);

				// });

				$('.next-step').click(function(e) {
					var currentTab = $(this).closest('.tab-pane');
					var nextTab = currentTab.next('.tab-pane');
					var nextTabNav = $('ul.nav-tabs li').eq(currentTab.index() + 1);
					
					if (nextTab.length) {
						currentTab.removeClass('active');  // Remove active class from the current tab
						nextTab.addClass('active');  // Add active class to the next tab
						$('ul.nav-tabs li').removeClass('active');  // Remove active from all nav-tabs
						nextTabNav.addClass('active');  // Add active to the corresponding nav-tab
					}
				});

				// When Back button is clicked
				$('.prev-step').click(function(e) {
					var currentTab = $(this).closest('.tab-pane');
					var prevTab = currentTab.prev('.tab-pane');
					var prevTabNav = $('ul.nav-tabs li').eq(currentTab.index() - 1);

					if (prevTab.length) {
						currentTab.removeClass('active');  // Remove active class from the current tab
						prevTab.addClass('active');  // Add active class to the previous tab
						$('ul.nav-tabs li').removeClass('active');  // Remove active from all nav-tabs
						prevTabNav.addClass('active');  // Add active to the corresponding nav-tab
					}
				});

				// Skip button logic
				$('.skip-btn').click(function(e) {
					var currentTab = $(this).closest('.tab-pane');
					var nextTab = currentTab.next('.tab-pane');
					var nextTabNav = $('ul.nav-tabs li').eq(currentTab.index() + 1);
					
					if (nextTab.length) {
						currentTab.removeClass('active');
						nextTab.addClass('active');
						nextTabNav.removeClass('disabled').addClass('active');
						$('ul.nav-tabs li').eq(currentTab.index()).addClass('completed');
					}
				});		
			});

			function nextTab(elem) {
				$(elem).next().find('a[data-toggle="tab"]').click();
			}
			function prevTab(elem) {
				$(elem).prev().find('a[data-toggle="tab"]').click();
			}


			$('.nav-tabs').on('click', 'li', function() {
				$('.nav-tabs li.active').removeClass('active');
				$(this).addClass('active');
			});
		</script>
	</body>
</html>