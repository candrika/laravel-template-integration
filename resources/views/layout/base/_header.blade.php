<div id="kt_header" class="header header-fixed">
    {{-- begin::container --}}
    <div class="container d-flex align-items-stretch justify-content-between">
        @if (config('layout.header.self.display'))
            @php
                $kt_logo_image = 'logo-letter-1.png';
            @endphp
        {{-- begin::left --}}
        <div class="d-none d-lg-flex align-items-center mr-3">
            {{-- begin::Aside Toggle --}}
            <button class="btn btn-icon aside-toggle ml-n3 mr-10" id="kt_aside_desktop_toggle">
                <span class="svg-icon svg-icon-xxl svg-icon-dark-75">
                    {{-- begin::Svg --}}
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                            <rect x="0" y="0" width="24" height="24" />
                            <rect fill="#000000" opacity="0.3" x="4" y="5" width="16" height="2" rx="1" />
                            <rect fill="#000000" opacity="0.3" x="4" y="13" width="16" height="2" rx="1" />
                            <path d="M5,9 L13,9 C13.5522847,9 14,9.44771525 14,10 C14,10.5522847 13.5522847,11 13,11 L5,11 C4.44771525,11 4,10.5522847 4,10 C4,9.44771525 4.44771525,9 5,9 Z M5,17 L13,17 C13.5522847,17 14,17.4477153 14,18 C14,18.5522847 13.5522847,19 13,19 L5,19 C4.44771525,19 4,18.5522847 4,18 C4,17.4477153 4.44771525,17 5,17 Z" fill="#000000" />
                        </g>
                    </svg>
                    {{-- end:svg --}}
                </span>
            </button>
            {{-- end::Aside Toggle --}}
            {{-- begin::Logo --}}
            <a href="#">
                <img src="{{asset('media/logos/'.$kt_logo_image)}}" alt="logo" class="logo-sticky max-h-30px">
            </a>
            {{-- end::Logo --}}
            {{-- begin::Desktop Search--}}
            <div class="quick-search quick-search-inline ml-20 w-300px" id="kt_quick_search_inline">
                {{-- begin::Form --}}
                <form method="get" class="quick-search-form">
                    <div class="input-group rounded bg-light">
                        <div class="input-group-prepend">
                            <span class="input-group-text">
                                <span class="svg-icon svg-icon-lg">
                                    {{-- begin::Svg Icon --}}
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                            <rect x="0" y="0" width="24" height="24" />
                                            <path d="M14.2928932,16.7071068 C13.9023689,16.3165825 13.9023689,15.6834175 14.2928932,15.2928932 C14.6834175,14.9023689 15.3165825,14.9023689 15.7071068,15.2928932 L19.7071068,19.2928932 C20.0976311,19.6834175 20.0976311,20.3165825 19.7071068,20.7071068 C19.3165825,21.0976311 18.6834175,21.0976311 18.2928932,20.7071068 L14.2928932,16.7071068 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
                                            <path d="M11,16 C13.7614237,16 16,13.7614237 16,11 C16,8.23857625 13.7614237,6 11,6 C8.23857625,6 6,8.23857625 6,11 C6,13.7614237 8.23857625,16 11,16 Z M11,18 C7.13400675,18 4,14.8659932 4,11 C4,7.13400675 7.13400675,4 11,4 C14.8659932,4 18,7.13400675 18,11 C18,14.8659932 14.8659932,18 11,18 Z" fill="#000000" fill-rule="nonzero" />
                                        </g>
                                    </svg>
                                    {{-- end::Svg Icon --}}
                                </span>
                            </span>
                        </div>
                        <input type="text" placeholder="Search..." class="form-control h-45px"/>
                        <div class="input-group-append">
                            <span class="input-group-text">
                                <i class="quick-search-close ki ki-close icon-sm text-muted"></i>
                            </span>
                        </div>
                    </div>
                </form>
                {{-- end::Form --}}
                {{-- begin::Search Toggle --}}
                <div id="kt_quick_search_toggle" data-toggle="dropdown" data-offset="0px,1px"></div>
                {{-- end::Seach Toggle --}}
                {{-- begin::Dropdown --}}
                <div class="dropdown-menu dropdown-menu-left dropdown-menu-lg dropdown-menu-anim-up">
                    <div class="quick-search-wrapper scroll" data-scroll="true" data-height="350" data-mobile-height="200"></div>
                </div>
                {{-- end::Dropdown --}}
            </div>
            {{-- end::Destop Search --}}
        </div>
        {{-- end::Left --}}
        {{-- begin::Topbar --}}
        @include('layout.partials.extra._topbar')
        {{-- end:Topbar --}}
        @else
            <div></div>
        @endif
    </div>
</div>