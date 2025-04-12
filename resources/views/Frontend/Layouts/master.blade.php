<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>
    <!-- Bootstrap -->
    @yield('links')

</head>
<body>
<!-- iqoniq Wrapper Start -->
<div class="iq_wrapper">
    <!-- Header Wrap Start -->
    @include('Frontend.Layouts.header')

    @yield('content')
    <!--Iqoniq Content End-->


    <!--Footer Wrap Start-->
    @include('Frontend.Layouts.footer')

    <div class="modal fade" id="search-box" role="dialog">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <div class="modal-dialog">
            <!--SEARCH section STARTS-->
            <div class="iqoniq_courses_search">
                <div class="container">
                    <!--Heading Wrap Start-->
                    <div class="iq_heading_1 text-center">
                        <h4>Search For<span>Our Courses</span></h4>
                        <p>Fill the form below and start searching</p>
                    </div>
                    <!--Heading Wrap End-->
                    <!--iqoniq FORM STARTS-->
                    <div class="row">
                        <div class="col-md-3 col-sm-6">
                            <!--Iconiq Input STARTS-->
                            <div class="iq-input">
                                <input class="first_input" type="text" placeholder="Search Words">
                            </div>
                            <!--Iconiq Input End-->
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <!--Iconiq Input STARTS-->
                            <div class="iq-input">
                                <select name="Category">
                                    <option value="0">Category</option>
                                    <option value="9">Publishing Date</option>
                                    <option value="2">Publishing Date</option>
                                    <option value="3">Publishing Date</option>
                                </select>
                            </div>
                            <!--Iconiq Input End-->
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <!--Iconiq Input STARTS-->
                            <div class="iq-input">
                                <select name="Category">
                                    <option value="0">Category</option>
                                    <option value="9">Publishing Date</option>
                                    <option value="2">Publishing Date</option>
                                    <option value="3">Publishing Date</option>
                                </select>
                            </div>
                            <!--Iconiq Input End-->
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <!--Iconiq Input STARTS-->
                            <div class="iq-input">
                                <input class="iq_link_1" type="submit" value="Start Search">
                            </div>
                            <!--Iconiq Input End-->
                        </div>
                    </div>
                    <!--iqoniq FORM END-->
                </div>
            </div>
            <!--SEARCH section ENDS-->
        </div>
    </div>
</div>

@yield('scripts')

</body>

</html>
