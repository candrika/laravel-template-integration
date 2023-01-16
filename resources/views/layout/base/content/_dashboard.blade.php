@extends('layout.main')
@section('content')
{{-- begin::Row --}}
<div class="row">
  @include('layout.partials.widget._card-widget')
</div>
<div class="row">
  @include('layout.partials.widget._chart-widget')
</div>   
<div class="row">
  @include('layout.partials.widget._datatables-widget')
</div>
{{-- end:Row --}} 
@endsection
{{-- begin::script --}}
@section('script')
<script src="{{asset('js/pages/widgets.js')}}" type="type/javascript"></script>
@endsection
{{-- end::script --}}