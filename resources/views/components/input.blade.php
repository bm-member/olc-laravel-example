@props(['type'])

@if ($type === 'checkbox')
    <input {{ $attributes->merge([
        'class' => 'form-check-input',
        'type' => $type,
    ]) }}>
@else
    <input {{ $attributes->merge([
        'class' => 'form-control',
        'type' => $type,
    ]) }}>
@endif
