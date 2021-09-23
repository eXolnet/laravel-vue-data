@if (\Exolnet\VueData\Facades\Vue::isNotEmpty())
<script{!! isset($nonce) ? ' nonce="' . e($nonce) . '"' : '' !!}>
window.{{ $key ?? 'App' }} = {!! \Exolnet\VueData\Facades\Vue::toJson() !!};
</script>
@endif
