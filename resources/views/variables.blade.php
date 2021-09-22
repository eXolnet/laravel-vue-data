@if (\Exolnet\VueData\Facades\Vue::isNotEmpty())
<script>
window.{{ $key ?? 'App' }} = {!! \Exolnet\VueData\Facades\Vue::toJson() !!};
</script>
@endif
