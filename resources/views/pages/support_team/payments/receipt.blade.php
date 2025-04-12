<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>Receipt_{{ $pr->ref_no.'_'.$sr->user->name }}</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/receipt.css') }}"/>
</head>
<body>
<div class="container">
    <div id="print" xmlns:margin-top="http://www.w3.org/1999/xhtml">
        {{--  School Details--}}
                    <tr>
                        <td style="text-align: center;">
                            <div style="text-align: center;">
                                <img src="{{ asset('logo.png') }}" alt="Logo" style="width: 100px; height: 100px;"/>
                                <h2 style="margin: 5px 0;">মুসলিহুল উম্মাহ হিফজ মাদ্রাসা</h2>
                                <p>১৪০ আজমপুর কাঁচা বাজার, দক্ষিণখান,উত্তরা, ঢাকা -১২৩০</p>
                                <p><strong>Phone:</strong> ০১৯১৬৩৫৪৭৭০</p>
                            </div>
                        </td>
                    </tr>
                     <span style="color: #000; font-weight: bold; font-size: 20px;"> PAYMENT RECEIPT</span>

        {{--Receipt No --}}
    <div class="bold arial" style="text-align: center; float:right; width: 200px; padding: 5px; margin-right:30px">
        <div style="padding: 10px 20px; width: 200px; background-color: lightcyan;">
            <span  style="font-size: 16px;">Receipt Reference No.</span>
        </div>
        <div  style="padding: 10px 20px; width: 200px; background-color: lightyellow;">
            <span  style="font-size: 25px;">{{ $pr->ref_no }}</span>
        </div>
    </div>

        <div style="clear: both"></div>

        {{-- Student Info --}}
        <div style="margin-top:5px; display: block; background-color: rgba(92, 172, 237, 0.12); padding: 5px; ">
            <span style="font-weight:bold; font-size: 20px; color: #000; padding-left: 10px">STUDENT INFORMATION</span>
        </div>

        {{--Photo--}}
        <div style="margin: 15px;">
            <img style="width: 100px; height: 100px; float: left;" src="{{asset($sr->user->photo) }}" alt="...">
        </div>

       <div style="float: left; margin-left: 20px">
           <table style="font-size: 16px" class="td-left" cellspacing="5" cellpadding="5">
               <tr>
                   <td class="bold">NAME:</td>
                   <td>{{ $sr->user->name }}</td>
               </tr>
               <tr>
                   <td class="bold">ADM_NO:</td>
                   <td>{{ $sr->adm_no }}</td>
               </tr>
               <tr>
                   <td class="bold">CLASS:</td>
                   <td>{{ $sr->my_class->name??'none' }}</td>
               </tr>
           </table>
       </div>
        <div class="clear"></div>

        {{-- Payment Info --}}
        <div style="margin-top:5px; display: block; background-color: rgba(92, 172, 237, 0.12); padding: 5px; ">
            <span style="font-weight:bold; font-size: 20px; color: #000; padding-left: 10px">PAYMENT INFORMATION</span>
        </div>

        <table class="td-left" style="font-size: 16px" cellspacing="2" cellpadding="2">
                <tr>
                    <td class="bold">REFERENCE:</td>
                    <td>{{ $pr->ref_no }}</td>
                    <td class="bold">Payment Month/Year:</td>
                    <td>{{ $pr->month.'-'.$pr->year }}</td>
                </tr>
                <tr>
                    <td class="bold">AMOUNT:</td>
                    <td>
                        @if($pr->is_residential == 1)
                            {{ $payment->tution_fee + $payment->khoraki }}
                        @else
                            {{ $payment->tution_fee }}
                        @endif
                    </td>
                    <td class="bold">DISCOUNT:</td>
                    <td>{{ $pr->discount }}</td>
                    <td class="bold">GRAND TOTAL:</td>
                    <td>{{  $receipts[0]->total }}</td>
                </tr>
            </table>

        {{-- Payment Desc --}}
        <div style="margin-top:5px; display: block; background-color: rgba(92, 172, 237, 0.12); padding: 5px; ">
            <span style="font-weight:bold; font-size: 20px; color: #000; padding-left: 10px">DESCRIPTION</span>
        </div>

        <table class="td-left" style="font-size: 16px" width="100%" cellspacing="2" cellpadding="2">
           <thead>
           <tr>
               <td class="bold">Date</td>
               <td class="bold">Amount Paid <del style="text-decoration-style: double"></del></td>
               <td class="bold">Due <del style="text-decoration-style: double"></del></td>
           </tr>
           </thead>
            <tbody>
            @foreach($receipts as $r)
                <tr>
                    <td>{{ date('D\, j F\, Y', strtotime($r->created_at)) }}</td>
                    <td>{{ $r->amt_paid }}</td>
                    <td>{{ $r->due }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>

        <hr>
        <div class="bold arial" style="text-align: center; float:right; width: 200px; padding: 5px; margin-right:30px">
            <div style="padding: 10px 20px; width: 200px; background-color: lightcyan;">
                <span  style="font-size: 16px;">{{ $pr->paid ? 'PAYMENT STATUS' : 'TOTAL DUE' }}</span>
            </div>
            <div  style="padding: 10px 20px; width: 200px; background-color: lightyellow;">
                <span  style="font-size: 25px;">{{ $pr->paid ? 'CLEARED' : $pr->due }}</span>
            </div>
        </div>
        <div class="clear"></div>
    </div>
</div>
<script>
window.print();
</script>
</body>
</html>
