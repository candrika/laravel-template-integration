{{-- begin::Main --}}
{{-- begin::Mobile Header --}}
@include('layout.base._mobile-header')
{{-- end::Mobile Header --}}
{{-- begin::Page --}}
<div class="d-flex flex-column flex-root">
    {{-- begin::Page --}}
    <div class="d-flex flex-row flex-column-fluid page">
        {{-- begin::Aside --}}
        <div class="aside aside-left d-flex flex-column flex-row-auto" id="kt_side">
            @include('layout.base._aside')
        </div>
        {{-- end::Aside --}}
        {{-- begin::Wrapper --}}
        <div class="d-flex flex-column flex-row-fluid wrapper" id="kt_wrapper">
            {{-- begin::Header --}}
            @include('layout.base._header')
            {{-- end::Header --}}
            {{-- begin::Content --}}
            @include('layout.base.content._content')
            {{-- end::Content --}}
            {{-- begin::Footer --}}
            @include('layout.base._footer')
            {{-- end::Footer --}}
        </div>
        {{-- end::Wrapper --}}
    </div>
    {{-- end::Page --}}
</div>
{{-- end::Main --}}
{{-- begin::Notification --}}
@include('layout.base._notification')
{{-- end::Notifaction --}}