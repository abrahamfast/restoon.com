@props([
    'status' => 'success',
    'message' => "success"
]);

<div class="alert alert-{{$status}}" role="alert">
    {{ $message }}
</div>
