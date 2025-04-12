@extends('layouts.master')
@section('page_title', 'Manage Payments')
@section('content')

    <div class="card">
        <div class="card-header header-elements-inline">
            <h6 class="card-title font-weight-bold">Manage Payment Records for {{ $sr->user->name}} </h6>
            {!! Qs::getPanelOptions() !!}
        </div>

        <div class="card-body">
        <div class="tab-content">
            <div class="tab-pane fade show active" id="all-uc">
                <table class="table datatable-button-html5-columns table-responsive">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>Tution Fee</th>
                        <th>Khoraki</th>
                        <th>Discount</th>
                        <th>Paid</th>
                        <th>due</th>
                        <th>Pay Now</th>
                        <th>Month/Year</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($payable_months as $p)
                        <tr>

                            <td>#</td>
                            <td>{{ $p['tution_fee'] }}</td>
                            <td>
                                @if($p['is_residential'] == 1)
                                    {{ $p['khoraki'] }}
                                @else
                                    অনাবাসিক
                                @endif

                            </td>
                            <form method="post" class="" action="{{route('payments.pay_now')}}">
                                @csrf
                                <input value="{{ $sr->user->id }}" class="form-control" required name="student_id" type="hidden">
                                <input value="{{ $p['month'] }}" class="form-control" required name="month" type="hidden">
                                <input value="{{ $p['year'] }}" class="form-control" required name="year" type="hidden">
                                <input value="{{ $p['is_residential'] }}" class="form-control" required name="is_residential" type="hidden">
                                @if(isset($p['pr_id']))
                                    <input value="{{ $p['pr_id'] }}" class="form-control" required name="pr_id" type="hidden">
                                @endif
                            <td>
                                <input min="0" value="{{ $sr->discount}}" class="form-control" required name="discount" type="number">
                            </td>
                            <td>{{ $p['amt_paid'] }}</td>
                            <td>{{ $p['due'] }}</td>
                            {{--Pay Now Form--}}
                            <td>
                                <div class="row">
                                    @if($p['paid'] == 0)
                                        <div class="col-md-7">
                                            <input min="0" class="form-control" required placeholder="Pay Now" title="Pay Now" name="amt_paid" type="number">
                                        </div>
                                        <div class="col-md-5">
                                            <button data-text="Pay" class="btn btn-danger" type="submit">Pay <i class="icon-paperplane ml-2"></i></button>
                                        </div>
                                    @else
                                        <div class="col-md-5">
                                            <i class="icon-check text-success"></i><i class="icon-check text-success"></i><i class="icon-check text-success"></i>Completed
                                        </div>
                                    @endif

                                </div>
                            </td>
                            </form>
                            <td>{{ $p['month']}}, {{$p['year'] }}</td>
                            {{--Receipt No--}}

                            {{--Action--}}
                            <td class="text-center">
                                @if(isset($p['pr_id']))
                                    <a href="{{ route('payments.receipts', ['pr_id'=>$p['pr_id']]) }}" class="">
                                        <i class="icon-printer text-primary"></i>
                                    </a>
                                @endif
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>

{{--            <div class="tab-pane fade" id="all-cl">--}}
{{--                <table class="table datatable-button-html5-columns table-responsive">--}}
{{--                    <thead>--}}
{{--                    <tr>--}}
{{--                        <th>#</th>--}}
{{--                        <th>Title</th>--}}
{{--                        <th>Pay_Ref</th>--}}
{{--                        <th>Amount</th>--}}
{{--                        <th>Receipt_No</th>--}}
{{--                        <th>Year</th>--}}
{{--                        <th>Action</th>--}}
{{--                    </tr>--}}
{{--                    </thead>--}}
{{--                    <tbody>--}}
{{--                    @foreach($cleared as $cl)--}}
{{--                        <tr>--}}
{{--                            <td>{{ $loop->iteration }}</td>--}}
{{--                            <td>{{ $cl->payment->title }}</td>--}}
{{--                            <td>{{ $cl->payment->ref_no }}</td>--}}

{{--                            --}}{{--Amount--}}
{{--                            <td class="font-weight-bold">{{ $cl->payment->amount }}</td>--}}
{{--                            --}}{{--Receipt No--}}
{{--                            <td>{{ $cl->ref_no }}</td>--}}

{{--                            <td>{{ $cl->year }}</td>--}}

{{--                            --}}{{--Action--}}
{{--                            <td class="text-center">--}}
{{--                                <div class="list-icons">--}}
{{--                                    <div class="dropdown">--}}
{{--                                        <a href="#" class="list-icons-item" data-toggle="dropdown"><i class="icon-menu9"></i>--}}
{{--                                        </a>--}}

{{--                                        <div class="dropdown-menu dropdown-menu-left">--}}

{{--                                            --}}{{--Reset Payment--}}
{{--                                            <a id="{{ Qs::hash($cl->id) }}" onclick="confirmReset(this.id)" href="#" class="dropdown-item"><i class="icon-reset"></i> Reset Payment</a>--}}
{{--                                            <form method="post" id="item-reset-{{ Qs::hash($cl->id) }}" action="{{ route('payments.reset_record', Qs::hash($cl->id)) }}" class="hidden">@csrf @method('delete')</form>--}}

{{--                                            --}}{{--Receipt--}}
{{--                                            <a target="_blank" href="{{ route('payments.receipts', Qs::hash($cl->id)) }}" class="dropdown-item"><i class="icon-printer"></i> Print Receipt</a>--}}

{{--                                            --}}{{--PDF Receipt--}}
{{--                                            --}}{{--                    <a  href="{{ route('payments.pdf_receipts', Qs::hash($uc->id)) }}" class="dropdown-item download-receipt"><i class="icon-download"></i> Download Receipt</a>--}}

{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </td>--}}
{{--                        </tr>--}}
{{--                    @endforeach--}}
{{--                    </tbody>--}}
{{--                </table>--}}

{{--            </div>--}}
        </div>
        </div>
    </div>

    {{--Payments Invoice List Ends--}}

@endsection
