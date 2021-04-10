<div class="{{ $row ?? 'col-lg-12 col-md-12'  }}">
    <div class="form-group">
        <label class="control-label" for="{{ $id }}">{{ $label }}</label>
        <input id="{{ $id }}" name="{{ $name }}" type="text"
               placeholder="{{ $placeholder }}"
               class="form-control {{ $class }}"
               required="{{ $required ?? 'required' }}"
        >
    </div>
</div>
