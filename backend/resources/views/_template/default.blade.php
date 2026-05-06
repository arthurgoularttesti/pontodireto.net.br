<!DOCTYPE html>
<html class="light" lang="en">
<head>
	<meta charset="utf-8"/>
	<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
	<title>Ponto Direto POS Dashboard</title>
	<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800;900&amp;display=swap" rel="stylesheet"/>
	<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
	<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
	<link rel="icon" type="image/x-icon" href="{{ asset('favicon/favicon.ico') }}">
	<script id="tailwind-config">
		tailwind.config = {
			darkMode: "class",
			theme: {
				extend: {
					"colors": {
						"tertiary-fixed": "#dde3eb",
						"surface": "#f8f9ff",
						"tertiary": "#11171d",
						"primary-fixed": "#d7e2ff",
						"on-surface": "#0b1c30",
						"outline": "#75777e",
						"inverse-primary": "#b6c7eb",
						"secondary-container": "#fd8b00",
						"on-primary": "#ffffff",
						"error-container": "#ffdad6",
						"on-primary-fixed": "#081b38",
						"on-secondary-fixed-variant": "#6e3900",
						"surface-variant": "#d3e4fe",
						"primary-fixed-dim": "#b6c7eb",
						"surface-container-low": "#eff4ff",
						"on-tertiary-fixed": "#161c22",
						"primary": "#031632",
						"secondary": "#904d00",
						"surface-container-highest": "#d3e4fe",
						"outline-variant": "#c5c6ce",
						"secondary-fixed-dim": "#ffb77d",
						"on-primary-container": "#8293b5",
						"tertiary-container": "#262c32",
						"surface-bright": "#f8f9ff",
						"on-tertiary": "#ffffff",
						"surface-tint": "#4e5f7e",
						"background": "#f8f9ff",
						"surface-dim": "#cbdbf5",
						"inverse-on-surface": "#eaf1ff",
						"on-error": "#ffffff",
						"on-secondary-container": "#603100",
						"on-tertiary-container": "#8d939a",
						"surface-container-lowest": "#ffffff",
						"surface-container": "#e5eeff",
						"inverse-surface": "#213145",
						"on-primary-fixed-variant": "#374765",
						"on-background": "#0b1c30",
						"on-secondary": "#ffffff",
						"secondary-fixed": "#ffdcc3",
						"surface-container-high": "#dce9ff"
					},
					"borderRadius": {
						"DEFAULT": "0.125rem",
						"lg": "0.25rem",
						"xl": "0.5rem",
						"full": "0.75rem"
					},
					"spacing": {
						"base": "8px",
						"gutter": "20px",
						"target-min": "48px",
						"touch-margin": "16px",
						"container-padding": "24px"
					},
					"fontFamily": {
						"numeral-xl": ["Inter"],
						"headline-md": ["Inter"],
						"label-bold": ["Inter"],
						"headline-lg": ["Inter"],
						"body-lg": ["Inter"],
						"display-price": ["Inter"],
						"body-md": ["Inter"]
					},
					"fontSize": {
						"numeral-xl": ["36px", {"lineHeight": "44px", "fontWeight": "500"}],
						"headline-md": ["24px", {"lineHeight": "32px", "fontWeight": "600"}],
						"label-bold": ["14px", {"lineHeight": "20px", "fontWeight": "700"}],
						"headline-lg": ["32px", {"lineHeight": "40px", "fontWeight": "600"}],
						"body-lg": ["18px", {"lineHeight": "28px", "fontWeight": "400"}],
						"display-price": ["48px", {"lineHeight": "56px", "letterSpacing": "-0.02em", "fontWeight": "700"}],
						"body-md": ["16px", {"lineHeight": "24px", "fontWeight": "400"}]
					}
				}
			}
		}
	</script>
	<style>
		.material-symbols-outlined {
			font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
		}
		body { font-family: 'Inter', sans-serif; }
	</style>

	@stack('css.pre')
	@stack('script.pre')

</head>
<body class="bg-background text-on-background antialiased flex">
	
	@include('_template.components.sidebar', [
		'title'		=> @$title,
	])
	<!-- Main Content Area -->
	<main class="flex-1 ml-64 min-h-screen">
	
		@include('_template.components.header', [
			'title'		=> @$title,
		])

		@yield('content')

	@stack('css.pos')
	@stack('script.pos')

</body>
</html>