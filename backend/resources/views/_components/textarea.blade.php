<div class="col-span-4 md:col-span-{{ $columns }}">
	<label class="block font-label-bold text-label-bold text-on-surface-variant mb-2">{{ $label }}</label>
	<textarea type="text" name="{{ $field }}" class="w-full border-2 border-outline-variant focus:border-primary focus:ring-0 p-3 rounded-lg font-body-md text-body-md">{{ old($field, $data->{$field}) }}</textarea>
</div>