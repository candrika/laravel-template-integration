{{-- begin::Main --}}

{{-- begin::Mobile Header --}}
@include('layout.base._mobile-header')
{{-- end::Mobile Header --}}
@include('layout.base._aside')
{{-- d-flex flex-column flex-row-fluid wrapper --}}
<div class="d-flex flex-column flex-row-fluid-wrapper" id="kt_wrapper">
    {{-- begin::Header --}}
    @include('layout.base._header')
    {{-- end:Header --}}
</div>
{{-- begin::Content --}}
@include('layout.base.content._content')
{{-- end::Content --}}