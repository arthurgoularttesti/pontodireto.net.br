<!DOCTYPE html>
<html class="light" lang="pt-BR">
<head>
	<meta charset="utf-8"/>
	<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
	<title>Ponto Direto POS - Dashboard</title>
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800;900&amp;display=swap" rel="stylesheet"/>
	<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
	<link rel="icon" type="image/x-icon" href="{{ asset('favicon/favicon.ico') }}">
	<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
	<script id="tailwind-config">
		tailwind.config = {
			darkMode: "class",
			theme: {
				extend: {
					"colors": {
						"error-container": "#ffdad6",
						"on-secondary-container": "#603100",
						"secondary": "#904d00",
						"outline-variant": "#c5c6ce",
						"surface-tint": "#4e5f7e",
						"primary": "#031632",
						"surface-bright": "#f8f9ff",
						"on-surface": "#0b1c30",
						"tertiary-fixed": "#dde3eb",
						"tertiary": "#11171d",
						"surface-container-highest": "#d3e4fe",
						"surface-container-low": "#eff4ff",
						"on-primary-fixed-variant": "#374765",
						"primary-fixed-dim": "#b6c7eb",
						"on-background": "#0b1c30",
						"on-secondary-fixed": "#2f1500",
						"surface-container": "#e5eeff",
						"on-secondary-fixed-variant": "#6e3900",
						"on-primary": "#ffffff",
						"error": "#ba1a1a",
						"on-secondary": "#ffffff",
						"on-tertiary-fixed-variant": "#41474e",
						"primary-container": "#1a2b48",
						"on-tertiary": "#ffffff",
						"tertiary-container": "#262c32",
						"surface": "#f8f9ff",
						"on-tertiary-container": "#8d939a",
						"surface-container-high": "#dce9ff",
						"surface-container-lowest": "#ffffff",
						"inverse-on-surface": "#eaf1ff",
						"tertiary-fixed-dim": "#c1c7cf",
						"on-primary-fixed": "#081b38",
						"surface-dim": "#cbdbf5",
						"secondary-container": "#fd8b00",
						"on-error-container": "#93000a",
						"surface-variant": "#d3e4fe",
						"outline": "#75777e",
						"on-tertiary-fixed": "#161c22",
						"on-primary-container": "#8293b5",
						"inverse-primary": "#b6c7eb",
						"inverse-surface": "#213145",
						"background": "#f8f9ff",
						"primary-fixed": "#d7e2ff",
						"secondary-fixed-dim": "#ffb77d",
						"secondary-fixed": "#ffdcc3",
						"on-error": "#ffffff",
						"on-surface-variant": "#44474d"
					},
					"borderRadius": {
						"DEFAULT": "0.125rem",
						"lg": "0.25rem",
						"xl": "0.5rem",
						"full": "0.75rem"
					},
					"spacing": {
						"touch-margin": "16px",
						"gutter": "20px",
						"target-min": "48px",
						"container-padding": "24px",
						"base": "8px"
					},
					"fontFamily": {
						"body-lg": ["Inter"],
						"label-bold": ["Inter"],
						"body-md": ["Inter"],
						"numeral-xl": ["Inter"],
						"headline-md": ["Inter"],
						"headline-lg": ["Inter"],
						"display-price": ["Inter"]
					},
					"fontSize": {
						"body-lg": ["18px", {"lineHeight": "28px", "fontWeight": "400"}],
						"label-bold": ["14px", {"lineHeight": "20px", "fontWeight": "700"}],
						"body-md": ["16px", {"lineHeight": "24px", "fontWeight": "400"}],
						"numeral-xl": ["36px", {"lineHeight": "44px", "fontWeight": "500"}],
						"headline-md": ["24px", {"lineHeight": "32px", "fontWeight": "600"}],
						"headline-lg": ["32px", {"lineHeight": "40px", "fontWeight": "600"}],
						"display-price": ["48px", {"lineHeight": "56px", "letterSpacing": "-0.02em", "fontWeight": "700"}]
					}
				},
			},
		}
	</script>
	<style>
		body { font-family: 'Inter', sans-serif; }
		.material-symbols-outlined {
			font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
			vertical-align: middle;
		}
		.custom-scrollbar::-webkit-scrollbar { width: 4px; }
		.custom-scrollbar::-webkit-scrollbar-track { background: transparent; }
		.custom-scrollbar::-webkit-scrollbar-thumb { background: #cbd5e1; border-radius: 10px; }
	</style>
	@stack('css.pre')
	@stack('script.pre')
</head>
<body class="bg-surface text-on-surface flex flex-col min-h-screen">
	
	@include('_template.components.navigation', [
	 	'title'		=> @$title,
	])

	<!-- Main Content Canvas -->
	<main class="flex-1 flex flex-col overflow-hidden">

		@include('_template.components.utilitybar', [
			'title'		=> @$title,
			'data'		=> @$data,
		])

		@yield('content')

	</main>

	@stack('css.pos')
	@stack('script.pos')

</body>
</html>