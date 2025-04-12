<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>Student Payment Dues</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/receipt.css') }}"/>
</head>
<body>
<div class="container">
    <div id="print" xmlns:margin-top="http://www.w3.org/1999/xhtml">

        <table class="td-left" style="font-size: 16px" width="100%" cellspacing="2" cellpadding="2">
            <thead>
            <tr>
                <td style="font-weight: bold">S/N</td>
                <td style="font-weight: bold">Month</td>
                <td style="font-weight: bold">Name</td>
                <td style="font-weight: bold">ADM_No</td>
                <td style="font-weight: bold">Due</td>
            </tr>
            </thead>
            <tbody>
            @foreach($students as $s)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $s->user->name }}</td>
                    <td>{{ $s->user->name }}</td>
                    <td>{{ $s->adm_no }}</td>
                    <td>
                        {{--                                {{$s->payment_records->due??'0'}}--}}
                        @if($s->is_residential==1)
                            {{ $s->payment_records->due??$fee_info->tution_fee+$fee_info->khoraki-$s->discount }}
                        @else
                            {{ $s->payment_records->due??$fee_info->tution_fee-$s->discount }}
                        @endif

                    </td>

                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</div>
<script>
window.print();
</script>
</body>
</html>
