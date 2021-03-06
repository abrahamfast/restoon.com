@props([
    'status' => 'success',
    'message' => "success"
]);

@if (session('resent'))
    <div class="alert alert-{{$status}}" role="alert">
        {{ __('global.'.$message) }}
    </div>
@endif