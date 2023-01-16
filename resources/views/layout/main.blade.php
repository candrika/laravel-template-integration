<!DOCTYPE html>
<html lang="{{str_replace('_','-',app()->getLocale())}}" {{Metronic::printAttrs('html')}} {{Metronic::printClasses('html')}}>
<head>
    <meta charset="UTF-8">
    <title>{{config('app.name')}} | @yield('title', $page_title ?? '')</title>
    {{-- Meta Data --}}
    <meta name="description" content="@yield('page_description',$page_description ?? '')">
    <meta name="viewport" content="width=device-width,initial-scale=1, shrink-to-fit=no">
    {{-- Favicon --}}
    <link rel="shortcuticon" href="{{asset('media/logos/favicon.ico')}}"/>
    {{-- Font --}}
    {{-- {{Metronic::getGoogleFontsInclude()}} --}}
    {{-- Fonts --}}
    {{ Metronic::getGoogleFontsInclude() }}
    {{-- Global Theme Styles (used by all pages) --}}
    @foreach (config('layout.resources.css') as $style)
    <link rel="stylesheet" href="{{config('layout.self.rtl') ? asset(Metronic::rtlCssPath($style)) : asset($style)}}"/>
    @endforeach
    {{-- Includable CSS --}}
    @yield('styles')
</head>
{{-- quick-panel-right demo-panel-right offcanvas-right header-fixed header-mobile-fixed aside-enabled aside-static page-loading --}}
<body id="kt_body" class="quick-panel-right demo-panel-right offcanvas-right header-fixed header-mobile-fixed aside-enabled aside-static page-loading">
    @if (config('layout.page-loader.type')!= '')
        @include('layout.partials._page-loader')
    @endif

    @include('layout.base._layout')

    <script>
        var HOST_URL ="{{route('quick-search')}}";
    </script>
    
    <script>
        var KTAppSettings ={!! json_encode(config('layout.js'),JSON_PRETTY_PRINT|JSON_UNESCAPED_SLASHES) !!};
    </script>

    {{-- Global Theme JS Bundle (used by all pages) --}}
    @foreach (config('layout.resources.js') as $script)
        <script src="{{asset($script)}}" type="type/javascript"></script>
    @endforeach

    {{-- Includable JS --}}
    @yield('script')
</body>
</html>