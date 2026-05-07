<nav class="bg-blue-950 border-b border-blue-900 sticky top-0 z-50">
	<div class="px-6 h-16 flex items-center justify-between">
		<div class="flex items-center gap-8">
			<div class="text-white font-bold flex items-center gap-3">
				<span class="text-lg font-black tracking-tighter">Ponto Direto</span>
				<div class="h-6 w-[1px] bg-blue-800"></div>
				<!-- <div class="hidden lg:block">
					<p class="font-inter text-[11px] font-medium uppercase tracking-wider text-orange-500">Station 01</p>
					<p class="text-[9px] text-blue-300 opacity-70">Op: Admin</p>
				</div> -->
			</div>
			<div class="hidden xl:flex items-center gap-1">

				@foreach (config('menu') as $menu)

					<a class="{{ request()->segment(1) == @$menu->route ? 'bg-orange-600 text-white transition-transform scale-95' : 'text-blue-200 hover:bg-blue-900 transition-all duration-150' }} px-3 py-2 flex items-center gap-2" href="{{ route($menu->route) }}">

						@if(isset($menu->icon) && !is_null($menu->icon) && !empty($menu->icon))

							<span class="material-symbols-outlined text-[18px]" data-icon="point_of_sale">{{ $menu->icon }}</span>

						@endif

						<span class="font-inter text-[11px] font-medium uppercase tracking-wider">{!! @$menu->label !!}</span>
					</a>

				@endforeach
			</div>
		</div>
		<div class="flex items-center gap-4">
			<!-- <div class="relative hidden md:block">
				<span class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-blue-300/50 text-lg">search</span>
				<input class="w-64 pl-10 pr-4 py-1.5 bg-blue-900/50 border border-blue-800 rounded text-xs text-white placeholder-blue-300/50 focus:ring-1 focus:ring-orange-600 focus:border-transparent outline-none transition-all" placeholder="Buscar pedidos..." type="text"/>
			</div> -->
			<!-- <div class="h-8 w-[1px] bg-blue-900"></div> -->
			
			<div class="relative group">
				<button class="flex items-center gap-2 px-3 py-2 rounded-lg hover:bg-primary transition-colors cursor-pointer group">
					<div class="text-right hidden sm:block">
						<p class="font-inter text-xs font-semibold tracking-tight text-white">Gerente Geral</p>
						<p class="text-[9px] uppercase text-green-400 font-bold tracking-wider">Online</p>
					</div>
					<div class="relative">
						<img alt="User profile" class="w-8 h-8 rounded border border-blue-800 object-cover" src="https://lh3.googleusercontent.com/aida/ADBb0uhRJZ93VuSN6Xf0Lf7tJ2lmq9G9yihetHI2-LBj1JMMSEJEgTZei6WUbe90s0ysaABNxd_xkD0CEVi31NPM2D5mm8_lAUbZtTiG21BxV8fHt1tOkPj1976sn1NFqsCE5mRN2toJy-t2xDextpXWrXzflDIBABV-WTR3qTsdjBO388F_N55iHlmUCxA11ygPUZQsdGnY37y-zV0h2V-45g0wcRuydQsf8hN6tehSVj5rHn25I9YSZW643So"/>
						<span class="absolute -bottom-1 -right-1 w-2.5 h-2.5 bg-green-500 rounded-full border-2 border-blue-950"></span>
					</div>
					<span class="material-symbols-outlined text-slate-400 group-hover:text-blue-900">expand_more</span>
				</button>
				<!-- User Dropdown Menu -->
				<div class="absolute right-0 top-full mt-2 w-48 bg-white border border-slate-200 shadow-xl rounded-xl py-2 opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-200 z-[60]">
					<a class="flex items-center gap-3 px-4 py-2 text-sm text-slate-700 hover:bg-slate-50" href="#">
						<span class="material-symbols-outlined text-slate-400" data-icon="person">person</span>
						Editar Perfil
					</a>
					<div class="h-[1px] bg-slate-100 my-1"></div>
					<a class="flex items-center gap-3 px-4 py-2 text-sm text-error hover:bg-error-container" href="#">
						<span class="material-symbols-outlined" data-icon="logout">logout</span>
						Sair
					</a>
				</div>
			</div>
			
			<button class="xl:hidden text-white p-2">
				<span class="material-symbols-outlined">menu</span>
			</button>
		</div>
	</div>
</nav>