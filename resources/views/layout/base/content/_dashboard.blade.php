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
  @include('layout.partials.widget.datatables._datatables1-widget')
</div>
<div class="row">
  @include('layout.partials.widget.datatables._datatables2-widget')
</div>
<div class="row">
  @include('layout.partials.widget.datatables._datatables3-widget')
</div>
{{-- end:Row --}} 
@endsection

{{-- begin::script --}}
@section('script')
{{-- <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script> --}}
<script src="{{asset('plugins/custom/apexcharts/apexcharts.js')}}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js" integrity="sha512-STof4xm1wgkfm7heWqFJVn58Hm3EtS31XFaagaa8VMReCXAkQnJZ+jEy8PCC/iT18dFy95WcExNHFTqLyp72eQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>
'use strict';
var KTDashboad=function(){

  const _initChartsWidget=()=>{
    // alert('tes')
    let element = document.getElementById('kt_charts_widget_2_chart');

    if(!element){
      return;
    }
    var options = {
      series: [{
        name: 'Net Profit',
        data: [44, 55, 57, 56, 61, 58]
      }, {
        name: 'Revenue',
        data: [76, 85, 101, 98, 87, 105]
      }],
      chart: {
          type: 'bar',
          height: 350,
          toolbar: {
              show: false
          }
      },
      plotOptions: {
        bar: {
            horizontal: false,
            columnWidth: ['30%'],
            endingShape: 'rounded'
        },
      },
      legend: {
          show: false
      },
      dataLabels: {
          enabled: false
      },
      stroke: {
          show: true,
          width: 2,
          colors: ['transparent']
      },
      xaxis: {
        categories: ['Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul'],
        axisBorder: {
            show: false,
        },
        axisTicks: {
            show: false
        },
        labels: {
          style: {
            colors: KTAppSettings.colors.gray['gray-500'],
            fontSize: '12px',
            fontFamily: KTAppSettings.fontFamily
          }
        }
      },
      yaxis: {
        labels: {
          style: {
              colors: KTAppSettings.colors.gray['gray-500'],
              fontSize: '12px',
              fontFamily: KTAppSettings.fontFamily
          }
        }
      },
      fill: {
        opacity: 1
      },
      states: {
        normal: {
            filter: {
                type: 'none',
                value: 0
            }
        },
        hover: {
            filter: {
                type: 'none',
                value: 0
            }
        },
        active: {
            allowMultipleDataPointsSelection: false,
            filter: {
                type: 'none',
                value: 0
            }
        }
      },
      tooltip: {
          style: {
              fontSize: '12px',
              fontFamily: KTAppSettings.fontFamily
          },
          y: {
              formatter: function (val) {
                  return "$" + val + " thousands"
              }
          }
      },
      colors: [KTAppSettings.colors.theme.base.warning, KTAppSettings.colors.gray['gray-300']],
      grid: {
          borderColor: KTAppSettings.colors.gray['gray-200'],
          strokeDashArray: 4,
          yaxis: {
              lines: {
                  show: true
              }
          }
      }
    };

    var chart = new ApexCharts(element, options);
    chart.render();
  }

  return{
    init:function(){
      _initChartsWidget();
      console.log(KTAppSettings.colors.gray['gray-500']);
      console.log(KTAppSettings.colors.theme.base.warning);
      console.log(KTAppSettings.fontFamily);
    }
  }
}();

jQuery(document).ready(()=>{
    KTDashboad.init();
})
</script>
{{-- <script src="{{asset('js/pages/dashboard.js')}}" type="type/javascript"></script> --}}
@endsection
{{-- end::script --}}