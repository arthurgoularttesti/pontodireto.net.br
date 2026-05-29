<div class="col-span-4 md:col-span-{{ $columns }}">
	<label class="block font-label-bold text-label-bold text-on-surface-variant mb-2">{{ $label }}</label>
	<select name="{{ $field }}" class="w-full border-2 border-outline-variant focus:border-primary focus:ring-0 p-3 rounded-lg font-body-md text-body-md appearance-none">
		
		@if (isset($placeholder) && !is_null($placeholder) && !empty($placeholder))

			<option disabled hidden {{ empty(old($field, $data->{$field})) ? 'selected' : '' }}>{{ $placeholder }}</option>

		@endif

		@foreach ($options as $value => $label)

			<option value="{{ $value }}" {{ old($field, $data->{$field}) == $value ? 'selected' : '' }}>{{ $label }}</option>

		@endforeach
		
	</select>
</div>