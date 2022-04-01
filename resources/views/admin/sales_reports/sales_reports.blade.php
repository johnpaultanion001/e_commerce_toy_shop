@extends('../layouts.admin')
@section('sub-title','Sales Reports')
@section('navbar')
    @include('../partials.admin.navbar')
@endsection
@section('sidebar')
    @include('../partials.admin.sidebar')
@endsection

@section('content')
    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-md-12">
                <div class="card p-2">
                    <div class="card-header border-0">
                        <div class="row ">
                            <div class="col-md-9">
                                <h4 class="mb-0 text-uppercase" id="titletable">Sales Reports</h4>
                                <b class="mb-0 text-uppercase">{{$title_filter}}</b>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <select name="filter_dd" id="filter_dd" class="select2" style="width: 100%;">
                                        <option value="">FILTER BY DATE</option>
                                        <option value="daily" {{ request()->is('admin/sales_reports/daily') ? 'selected' : '' }}>DAILY</option>
                                        <option value="monthly" {{ request()->is('admin/sales_reports/monthly') ? 'selected' : '' }}>MONTHLY</option>
                                        <option value="yearly" {{ request()->is('admin/sales_reports/yearly') ? 'selected' : '' }}>YEARLY</option>
                                    </select>
                                </div>
                            </div> 
                        </div>
                    </div>
                    <div class="table-responsive">
                        <table class="table datatable-table display" width="100%">
                            <thead class="thead-light">
                                <tr>
                                    <th>ORDER ID/CUSTOMER</th>
                                    <th>PRODUCT</th>
                                    <th>SOLD</th>
                                    <th>PROFIT</th>
                                    <th>AMOUNT</th>
                                    <th>ORDER AT</th>
                                </tr>
                            </thead>
                            <tbody class="text-uppercase font-weight-bold">
                                @foreach($sales as $order)
                                        <tr>
                                            <td>
                                                {{$order->order->id}}/{{$order->order->user->name}}
                                            </td>
                                            <td>
                                                {{$order->product->name}}
                                            </td>
                                            <td>
                                                {{$order->sold}}
                                            </td>
                                            <td>
                                                {{ number_format($order->profit ?? '' , 2, '.', ',') }}
                                            </td>
                                            <td>
                                                {{ number_format($order->amount ?? '' , 2, '.', ',') }}
                                                
                                            </td>
                                            <td>
                                                {{ $order->created_at->format('M j , Y h:i A') }}
                                            </td>
                                        </tr>       
                                @endforeach
                                        <tr>
                                            <td>
                                                TOTAL: 
                                            </td>
                                            <td>
                                            </td>
                                            <td>
                                                {{ $sales->sum('sold') }}
                                            </td>
                                            <td>
                                                {{ number_format($sales->sum('profit') ?? '' , 2, '.', ',') }}
                                            </td>
                                            <td>
                                                {{ number_format($sales->sum('amount') ?? '' , 2, '.', ',') }}
                                            </td>
                                            <td>
                                            </td>
                                        </tr>  
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    

    @section('footer')
        @include('../partials.admin.footer')
    @endsection
@endsection


@section('script')
<script> 
$(function () {
    let dtButtons = $.extend(true, [], $.fn.dataTable.defaults.buttons)

    $.extend(true, $.fn.dataTable.defaults, {
    pageLength: 100,
    });

    $('.datatable-table:not(.ajaxTable)').DataTable({ buttons: dtButtons });
    $('a[data-toggle="tab"]').on('shown.bs.tab', function(e){
        $($.fn.dataTable.tables(true)).DataTable()
            .columns.adjust();
        });
});

$('#filter_dd').on("change", function(event){
    var date = $(this).val();
    window.location.href = '/admin/sales_reports/'+date;
});




</script>
@endsection



