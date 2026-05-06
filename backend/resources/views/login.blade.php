<!DOCTYPE html>
<html class="light" lang="en"><head>
	<meta charset="utf-8"/>
	<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
	<title>Ponto Direto POS - Login</title>
	<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800;900&amp;display=swap" rel="stylesheet"/>
	<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
	<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
	<script id="tailwind-config">
			tailwind.config = {
				darkMode: "class",
				theme: {
					extend: {
						"colors": {
							"secondary-container": "#fd8b00",
							"on-primary-fixed-variant": "#374765",
							"surface-container-high": "#dce9ff",
							"primary-container": "#1a2b48",
							"surface-container-highest": "#d3e4fe",
							"surface-variant": "#d3e4fe",
							"on-tertiary": "#ffffff",
							"on-secondary-fixed-variant": "#6e3900",
							"surface-container-lowest": "#ffffff",
							"surface-container-low": "#eff4ff",
							"on-surface-variant": "#44474d",
							"inverse-primary": "#b6c7eb",
							"surface-bright": "#f8f9ff",
							"secondary-fixed": "#ffdcc3",
							"on-tertiary-fixed-variant": "#41474e",
							"on-surface": "#0b1c30",
							"on-primary": "#ffffff",
							"surface-tint": "#4e5f7e",
							"primary": "#031632",
							"error": "#ba1a1a",
							"tertiary-container": "#262c32",
							"secondary-fixed-dim": "#ffb77d",
							"outline": "#75777e",
							"inverse-surface": "#213145",
							"tertiary-fixed": "#dde3eb",
							"on-background": "#0b1c30",
							"on-secondary-fixed": "#2f1500",
							"surface-container": "#e5eeff",
							"on-primary-container": "#8293b5",
							"on-error-container": "#93000a",
							"tertiary-fixed-dim": "#c1c7cf",
							"on-error": "#ffffff",
							"inverse-on-surface": "#eaf1ff",
							"on-primary-fixed": "#081b38",
							"surface": "#f8f9ff",
							"primary-fixed": "#d7e2ff",
							"on-secondary-container": "#603100",
							"on-tertiary-fixed": "#161c22",
							"surface-dim": "#cbdbf5",
							"secondary": "#904d00",
							"on-tertiary-container": "#8d939a",
							"outline-variant": "#c5c6ce",
							"on-secondary": "#ffffff",
							"error-container": "#ffdad6",
							"primary-fixed-dim": "#b6c7eb",
							"tertiary": "#11171d",
							"background": "#f8f9ff"
						},
						"borderRadius": {
							"DEFAULT": "0.125rem",
							"lg": "0.25rem",
							"xl": "0.5rem",
							"full": "0.75rem"
						},
						"spacing": {
							"touch-margin": "16px",
							"container-padding": "24px",
							"gutter": "20px",
							"target-min": "48px",
							"base": "8px"
						},
						"fontFamily": {
							"body-lg": ["Inter"],
							"headline-md": ["Inter"],
							"numeral-xl": ["Inter"],
							"label-bold": ["Inter"],
							"body-md": ["Inter"],
							"headline-lg": ["Inter"],
							"display-price": ["Inter"]
						},
						"fontSize": {
							"body-lg": ["18px", {"lineHeight": "28px", "fontWeight": "400"}],
							"headline-md": ["24px", {"lineHeight": "32px", "fontWeight": "600"}],
							"numeral-xl": ["36px", {"lineHeight": "44px", "fontWeight": "500"}],
							"label-bold": ["14px", {"lineHeight": "20px", "fontWeight": "700"}],
							"body-md": ["16px", {"lineHeight": "24px", "fontWeight": "400"}],
							"headline-lg": ["32px", {"lineHeight": "40px", "fontWeight": "600"}],
							"display-price": ["48px", {"lineHeight": "56px", "letterSpacing": "-0.02em", "fontWeight": "700"}]
						}
					},
				},
			}
		</script>
	<style>
		.material-symbols-outlined {
			font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
		}
		.industrial-grid {
			background-image: radial-gradient(circle, #e2e8f0 1px, transparent 1px);
			background-size: 24px 24px;
		}
	</style>
</head>
<body class="bg-background text-on-background font-body-md industrial-grid min-h-screen flex flex-col items-center justify-center p-touch-margin">
	<!-- Top Navigation Suppression: As per rules, navigation is hidden for transactional screens like Login -->
	<main class="w-full max-w-md">

		<!-- Brand/Logo Section -->
		<div class="flex flex-col items-center mb-8">
			<div class="p-1 w-full h-24 mb-6 bg-white border border-outline-variant flex items-center justify-center shadow-sm rounded-lg overflow-hidden">
				<img alt="Ponto Direto Logo" class="w-full h-full object-contain" data-alt="Professional flat vector logo of a blue and orange geometric abstract mark on a clean white background, minimalist industrial style" src="{{ asset('logo_horizontal.png') }}"/>
			</div>
		</div>
		
		<!-- Login Container -->
		<div class="bg-white border-2 border-surface-container-high rounded-xl p-8 shadow-sm">
			<form action="#" class="space-y-6" method="POST">
				<p class="text-center font-body-md text-body-md text-on-surface-variant">Autenticação (Terminal: {{ gethostname() }})</p>
				<!-- Username Field -->
				<div>
					<label class="block font-label-bold text-label-bold text-on-surface mb-2" for="username">Nome de Usuário</label>
					<div class="relative">
						<span class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-outline">person</span>
						<input class="w-full pl-10 pr-4 h-[48px] border-2 border-outline-variant rounded bg-surface-bright focus:border-primary focus:ring-0 transition-colors placeholder:text-outline font-body-md" id="username" name="username" placeholder="Enter your username" required="" type="text"/>
					</div>
				</div>
				<!-- Password Field -->
				<div>
					<label class="block font-label-bold text-label-bold text-on-surface mb-2" for="password">Senha</label>
					<div class="relative">
						<span class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-outline">lock</span>
						<input class="w-full pl-10 pr-4 h-[48px] border-2 border-outline-variant rounded bg-surface-bright focus:border-primary focus:ring-0 transition-colors placeholder:text-outline font-body-md" id="password" name="password" placeholder="••••••••" required="" type="password"/>
					</div>
				</div>
				<!-- Remember Me & Forgot Password -->
				<div class="flex items-center justify-between">
					<label class="flex items-center cursor-pointer group">
						<div class="relative">
							<input class="peer hidden" type="checkbox"/>
							<div class="w-5 h-5 border-2 border-outline rounded bg-white peer-checked:bg-secondary peer-checked:border-secondary transition-all"></div>
							<span class="material-symbols-outlined absolute inset-0 text-white text-[16px] flex items-center justify-center opacity-0 peer-checked:opacity-100" style="font-variation-settings: 'wght' 700;">check</span>
						</div>
						<span class="ml-2 font-label-bold text-label-bold text-on-surface-variant group-hover:text-on-surface">Manter logado</span>
					</label>
					<a class="font-label-bold text-label-bold text-secondary hover:underline" href="#">Esqueceu a senha?</a>
				</div>
				<!-- Action Button -->
				<button class="w-full h-[56px] bg-secondary-container text-on-tertiary font-headline-md text-headline-md rounded-lg shadow-sm hover:brightness-110 active:scale-[0.98] transition-all flex items-center justify-center gap-2" type="submit">
				<span>Login</span>
				<span class="material-symbols-outlined">login</span>
				</button>
			</form>
		</div>

		<!-- Footer Section -->
		<div class="mt-8 flex flex-col items-center gap-4">
			<div class="flex items-center gap-2 bg-surface-container rounded-full px-4 py-2 border border-surface-container-high">
				<span class="relative flex h-2 w-2">
					<span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-green-400 opacity-75"></span>
					<span class="relative inline-flex rounded-full h-2 w-2 bg-green-500"></span>
				</span>
				<span class="font-label-bold text-label-bold text-on-primary-fixed-variant">Conexão com o servidor local: Ativa</span>
			</div>
			<div class="flex items-center gap-6">
				<button class="flex items-center gap-1 font-label-bold text-label-bold text-on-surface-variant hover:text-primary transition-colors">
					<span class="material-symbols-outlined text-[18px]">support_agent</span>
					<span>Buscar Ajuda</span>
				</button>
				<button class="flex items-center gap-1 font-label-bold text-label-bold text-on-surface-variant hover:text-primary transition-colors">
					<span class="material-symbols-outlined text-[18px]">language</span>
					<span>Português</span>
				</button>
			</div>
		</div>
	</main>
	<!-- Version & Copyright -->
	<footer class="fixed bottom-6 w-full text-center">
		<p class="font-label-bold text-label-bold text-outline-variant tracking-widest uppercase">v1.0.0 Build 48 • © {{ date('Y') }} {{ config('app.name') }}</p>
	</footer>
</body>
</html>