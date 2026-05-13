<div class="relative group">
	<button class="flex items-center gap-2 px-3 py-2 rounded-lg hover:bg-primary transition-colors cursor-pointer group">
		<div class="text-right hidden sm:block">
			<p class="font-inter text-xs font-semibold tracking-tight text-white">{Nome do Usuário}</p>
			<p class="text-[9px] uppercase text-green-400 font-bold tracking-wider">{Perfil do Usuário}</p>
		</div>
		<span class="material-symbols-outlined text-slate-400 group-hover:text-blue-900">expand_more</span>
	</button>
	<!-- User Dropdown Menu -->
	<div class="absolute right-0 top-full mt-2 w-48 bg-white border border-slate-200 shadow-xl rounded-xl py-2 opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-200 z-[60]">
		<a class="flex items-center gap-3 px-4 py-2 text-sm text-slate-700 hover:bg-slate-50" href="#">
			<span class="material-symbols-outlined text-slate-400" data-icon="person">person</span>
			Meu Perfil
		</a>
		<a class="flex items-center gap-3 px-4 py-2 text-sm text-slate-700 hover:bg-slate-50" href="#">
			<span class="material-symbols-outlined text-slate-400" data-icon="person">group</span>
			Editar Usuários
		</a>
		<div class="h-[1px] bg-slate-100 my-1"></div>
		<a class="flex items-center gap-3 px-4 py-2 text-sm text-error hover:bg-error-container" href="{{ route('logout') }}">
			<span class="material-symbols-outlined" data-icon="logout">logout</span>
			Sair
		</a>
	</div>
</div>