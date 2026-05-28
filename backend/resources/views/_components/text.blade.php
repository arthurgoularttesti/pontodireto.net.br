<div class="col-span-4 md:col-span-{{ $columns }}">
	<label class="block font-label-bold text-label-bold text-on-surface-variant mb-2">{{ $label }}</label>

	@if (isset($icon) && !is_null($icon))

		<div class="relative">
			<input type="text" name="{{ $field }}" value="{{ old($field, $data->{$field}) }}" class="w-full border-2 border-outline-variant focus:border-primary focus:ring-0 p-3 rounded-lg font-body-md text-body-md pr-12" />
			<span class="material-symbols-outlined absolute right-3 top-3 text-outline">{{ $icon }}</span>
		</div>

	@else

		<input type="text" name="{{ $field }}" value="{{ old($field, $data->{$field}) }}" class="w-full border-2 border-outline-variant focus:border-primary focus:ring-0 p-3 rounded-lg font-body-md text-body-md"  />

	@endif
</div>