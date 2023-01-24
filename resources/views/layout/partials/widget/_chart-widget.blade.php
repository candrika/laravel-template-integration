<div class="col-xl-8">
    {{-- begin::Chart Widget2 --}}
    <div class="card card-custom bg-gray-100 gutter-b card-stretch card-shadowless">
        {{-- begin::Header --}}
        <div class="card-header h-auto border-0">
            {{-- begin::Title --}}
            <div class="card-title py-5">
                <h3 class="card-label">
                    <span class="d-block text-dark font-weight-bolder">Recent Orders</span>
                    <span class="d-block text-dark-50 mt-2 font-size-sm">More than 500+ new orders</span>
                </h3>
            </div>
            {{-- end::Title --}}
            {{-- begin::Toolbar --}}
            <div class="card-toolbar">
                <ul class="nav nav-pills nav-pills-sm nav-dark-75" role="tablist">
                    <li class="nav-item">
                        <a href="#" class="nav-link py-2 px-4">
                            <span class="nav-text font-size-sm">Month</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link py-2 px-4">
                            <span class="nav-text font-size-20">Week</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link py-2 px-4 active">Day</a>
                    </li>
                </ul>
            </div>
            {{-- end::Toolbar --}}
        </div>
        {{-- end::Header --}}
        {{-- begin::Body --}}
        <div class="card-body">
            {{-- begin::Charts --}}
            <div id="kt_charts_widget_2_chart"></div>
            {{-- end::Charts --}}
        </div>
        {{-- end::Body --}}
    </div>
    {{-- end::Chart Widget 2 --}}
</div>
<div class="col-xl-4">
    {{-- begin::List Widget 2 --}}
    <div class="card card-custom bg-light-success gutter-b card-stretch card-shadowless">
        {{-- begin::Header --}}
        <div class="card-header border-0">
            <h3 class="card-title font-weight-bolder text-success btn-sm btn-icon">People</h3>
            <div class="card-toolbar">
                @include('layout.partials.extra.dropdown._tooltip-dropdown')
            </div>
        </div>
        {{-- end::Header --}}
        {{-- begin::Body --}}
        <div class="card-body pt-2">
            {{-- begin::Item --}}
            <div class="d-flex align-items-center mb-10">
                {{-- begin::Symbol --}}
                <div class="symbol symbol-40 symbol-light-white mr-5">
                    <div class="symbol-label">
                        <img src="{{asset('media/svg/avatars/004-boy-1.svg')}}" alt="" class="h-75 align-self-end">
                    </div>   
                </div>
                {{-- end::Symbol --}}
                {{-- begin::Text --}}
                <div class="d-flex flex-column font-weight-bold">
                    <a href="#" class="text-dark text-hover-primary mb-1 fonr-size-lg">Ricky Hunt</a>
                    <span class="text-muted">Business Analyst</span>
                </div>
                {{-- end::Text --}}
            </div>
            <div class="d-flex align-items-center mb-10">
                {{-- begin::Symbol --}}
                <div class="symbol symbol-40 symbol-light-white mr-5">
                    <div class="symbol-label">
                        <img src="{{asset('media/svg/avatars/008-boy-3.svg')}}" alt="" class="h-75 align-self-end">
                    </div>   
                </div>
                {{-- end::Symbol --}}
                {{-- begin::Text --}}
                <div class="d-flex flex-column font-weight-bold">
                    <a href="#" class="text-dark text-hover-primary mb-1 fonr-size-lg">Randy Trent</a>
                    <span class="text-muted">Backend Development</span>
                </div>
                {{-- end::Text --}}
            </div>
            <div class="d-flex align-items-center mb-10">
                {{-- begin::Symbol --}}
                <div class="symbol symbol-40 symbol-light-white mr-5">
                    <div class="symbol-label">
                        <img src="{{asset('media/svg/avatars/009-boy-4.svg')}}" alt="" class="h-75 align-self-end">
                    </div>   
                </div>
                {{-- end::Symbol --}}
                {{-- begin::Text --}}
                <div class="d-flex flex-column font-weight-bold">
                    <a href="#" class="text-dark text-hover-primary mb-1 fonr-size-lg">Carles Puyol</a>
                    <span class="text-muted">Project Manager</span>
                </div>
                {{-- end::Text --}}
            </div>
            <div class="d-flex align-items-center mb-10">
                {{-- begin::Symbol --}}
                <div class="symbol symbol-40 symbol-light-white mr-5">
                    <div class="symbol-label">
                        <img src="{{asset('media/svg/avatars/007-boy-2.svg')}}" alt="" class="h-75 align-self-end">
                    </div>   
                </div>
                {{-- end::Symbol --}}
                {{-- begin::Text --}}
                <div class="d-flex flex-column font-weight-bold">
                    <a href="#" class="text-dark text-hover-primary mb-1 fonr-size-lg">Kristaps Zumman</a>
                    <span class="text-muted">Lead Developer</span>
                </div>
                {{-- end::Text --}}
            </div>
            {{-- end::Item --}}
            <div class="d-flex align-items-center mb-2">
                {{-- begin::Symbol --}}
                <div class="symbol symbol-40 symbol-light-white mr-5">
                    <div class="symbol-label">
                        <img src="{{asset('media/svg/avatars/002-girl.svg')}}" alt="" class="h-75 align-self-end">
                    </div>   
                </div>
                {{-- end::Symbol --}}
                {{-- begin::Text --}}
                <div class="d-flex flex-column font-weight-bold">
                    <a href="#" class="text-dark text-hover-primary mb-1 fonr-size-lg">Anne Clarc</a>
                    <span class="text-muted">Creative Director</span>
                </div>
                {{-- end::Text --}}
            </div>
            {{-- end::Item --}}
        </div>
        {{-- end::Body --}}
    </div>
</div>