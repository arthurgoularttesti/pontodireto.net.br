<div class="relative group">

	<button class="flex items-center gap-2 bg-surface-container-low px-4 py-2 rounded-md border border-slate-200 hover:bg-slate-50 transition-colors" id="branchDropdownBtn" onclick="document.getElementById('branchMenu').classList.toggle('hidden')">

		@if(!is_null(auth()->user()->CurrentBranch()))
			<span class="material-symbols-outlined text-orange-600" data-icon="store">store</span>
			<span class="font-label-bold text-on-surface">{{ auth()->user()->CurrentBranch()->full_label_string }}</span>
		@else
			<span class="material-symbols-outlined mr-3 text-blue-900 scale-75" data-icon="public">public</span>
			<span class="font-label-bold text-on-surface">Visualização Global</span>
		@endif
	
		<span class="material-symbols-outlined text-slate-400" data-icon="expand_more">expand_more</span>
	
	</button>
	
	<div class="absolute left-0 mt-2 w-64 bg-white border border-slate-200 rounded-md shadow-xl z-[60] overflow-hidden animate-in fade-in zoom-in duration-150 hidden" id="branchMenu">
		<div class="py-1">
			<a class="flex items-center px-4 py-3 text-sm text-slate-600 hover:bg-surface-container-high transition-colors" href="#">
				<span class="material-symbols-outlined mr-3 text-blue-900 scale-75" data-icon="public">public</span>
				<span class="font-semibold">Visualização Global</span>
				@if (is_null(auth()->user()->CurrentBranch()))
					<span class="material-symbols-outlined ml-auto text-orange-600 text-sm">check_circle</span>
				@endif
			</a>

			@forelse (auth()->user()->branches as $branch)

				@if (!is_null(auth()->user()->CurrentBranch()) && auth()->user()->CurrentBranc()->id == $branc->id)

					<a class="flex items-center px-4 py-3 text-sm text-on-surface hover:bg-surface-container-high transition-colors border-t border-slate-50" href="#">
						<span class="material-symbols-outlined mr-3 text-orange-600 scale-75">store</span>
						<span class="font-semibold">{{ $branch->full_label_string }}</span>
						<span class="material-symbols-outlined ml-auto text-orange-600 text-sm">check_circle</span>
					</a>

				@else

					<a class="flex items-center px-4 py-3 text-sm text-slate-600 hover:bg-surface-container-high transition-colors border-t border-slate-50" href="#">
						<span class="material-symbols-outlined mr-3 text-slate-400 scale-75">store</span>
						<span>{{ $branch->full_label_string }}</span>
					</a>

				@endif

			@empty



			@endforelse
			
		</div>
		<!-- <div class="bg-slate-50 p-2 border-t border-slate-200">
			<button class="w-full py-2 text-[10px] font-bold text-blue-900 uppercase tracking-widest hover:bg-white rounded transition-colors">
				Manage All Branches
			</button>
		</div> -->
	</div>
</div>