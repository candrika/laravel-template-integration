@if (config('layout.page-loader.type')=='default')
    <div class="page-loader">
        <div class="spinner spinner-primary"></div>
    </div>
@endif

{{-- spinner Message --}}
@if (config('layout.page-loader.type')=='spinner-message')
    <div class="page-loader page-loader-base">
        <div class="blockui">
            <span>Please wait ...</span> 
            <span><div class="spinner spinner-primar"></div></span>   
        </div>    
    </div>    
@endif

{{-- Spinner Logo --}}
@if (config('layout.page-loader.type')=='spinner-logo')
    <div class="page-loader page-">
        <img alt="{{config('app.name')}}" src="{{asset('media/logos/logo-letter-1.pgn')}}">    
        <div class="spinner spinner-prinary"></div>
    </div>    
@endif