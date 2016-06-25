@extends('admin/layouts/default')

{{-- Page title --}}
@section('title')
Form Wizard
@parent
@stop

{{-- page level styles --}}
@section('header_styles')
    <link href="{{ asset('assets/vendors/select2/css/select2.min.css') }}" type="text/css" rel="stylesheet">
    <link href="{{ asset('assets/vendors/select2/css/select2-bootstrap.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendors/bootstrapvalidator/css/bootstrapValidator.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/pages/wizard.css') }}" rel="stylesheet">
@stop

{{-- Page content --}}
@section('content')

<section class="content-header">
    <!--section starts-->
    <h1>Form Wizards</h1>
    <ol class="breadcrumb">
        <li>
            <a href="{{ route('dashboard') }}">
                <i class="livicon" data-name="home" data-size="14" data-loop="true"></i>
                Dashboard
            </a>
        </li>
        <li>
            <a href="#">Forms</a>
        </li>
        <li class="active">Form Wizards</li>
    </ol>
</section>
<!--section ends-->
<section class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title">
                        <i class="livicon" data-name="bell" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i>
                        Bootstrap Wizard
                    </h3>
                                <span class="pull-right clickable">
                                    <i class="glyphicon glyphicon-chevron-up"></i>
                                </span>
                </div>
                <div class="panel-body">
                    <form id="commentForm" method="post" action="#">
                        <div id="rootwizard">
                            <ul>
                                <li><a href="#tab1" data-toggle="tab">First</a></li>
                                <li><a href="#tab2" data-toggle="tab">Second</a></li>
                                <li><a href="#tab3" data-toggle="tab">Third</a></li>
                            </ul>
                            <div class="tab-content">
                                <div class="tab-pane" id="tab1">
                                    <h2 class="hidden">&nbsp;</h2>
                                    <div class="form-group">
                                        <label for="userName" class="control-label">User name</label>
                                        <input id="lastname" name="lastname" type="text" placeholder="Enter your name" class="form-control required">
                                    </div>
                                    <div class="form-group">
                                        <label for="password">Password *</label>
                                        <input id="password" name="password" type="password" placeholder="Enter your password" class="form-control required">
                                    </div>
                                    <div class="form-group">
                                        <label for="confirm">Confirm Password *</label>
                                        <input id="confirm" name="confirm" type="password" placeholder="Confirm your password " class="form-control required">
                                    </div>
                                    <div class="form-group">
                                        <label for="email">Email *</label>
                                        <input id="email" name="email" placeholder="Enter your Email" type="text" class="form-control required email">
                                    </div>
                                </div>
                                <div class="tab-pane" id="tab2" disabled="disabled">
                                    <h2 class="hidden">&nbsp;</h2>
                                    <div class="form-group">
                                        <label for="name">First name *</label>
                                        <input id="name" name="fname" placeholder="Enter your First name" type="text" class="form-control required">
                                    </div>
                                    <div class="form-group">
                                        <label for="surname">Last name *</label>
                                        <input id="surname" name="lname" type="text" placeholder=" Enter your Last name" class="form-control required">
                                    </div>
                                    <div class="form-group">
                                        <label for="email">Gender</label>
                                        <select class="form-control" name="gender" id="gender" title="Select an account type...">
                                            <option>Select</option>
                                            <option>MALE</option>
                                            <option>FEMALE</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="address">Address</label>
                                        <input id="address" name="address" type="text" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label for="age">Age *</label>
                                        <input id="age" name="age" type="text"  min="10"
                                               data-bv-greaterthan-inclusive="false"
                                               data-bv-greaterthan-message="The input must be greater than or equal to 10"

                                               max="100"
                                               data-bv-lessthan-inclusive="true"
                                               data-bv-lessthan-message="The input must be less than 100" class="form-control">
                                    </div>
                                </div>
                                <div class="tab-pane" id="tab3" disabled="disabled">
                                    <div class="form-group">
                                        <label>Home number</label>
                                        <input type="text" class="form-control" id="phone1" name="phone1" placeholder="(999)999-9999">
                                    </div>
                                    <div class="form-group">
                                        <label>Personal number</label>
                                        <input type="text" class="form-control" id="phone2" name="phone2" placeholder="(999)999-9999">
                                    </div>
                                    <div class="form-group">
                                        <label>Alternate number</label>
                                        <input type="text" class="form-control" id="phone3" name="phone3" placeholder="(999)999-9999">
                                    </div>
                                    <h2 class="hidden">&nbsp;</h2>
                                    <div class="form-group">
                                        <span>Terms and Conditions</span>

                                        <label>
                                            <input id="acceptTerms" name="acceptTerms" type="checkbox">
                                            I agree with the Terms and Conditions.
                                        </label>
                                    </div>
                                </div>
                                <ul class="pager wizard">
                                    <li class="previous"><a href="#">Previous</a></li>
                                    <li class="next"><a href="#">Next</a></li>
                                    <li class="next finish" style="display:none;"><a href="javascript:;">Finish</a></li>
                                </ul>
                            </div>
                        </div>
                        <div id="myModal" class="modal fade" role="dialog">
                            <div class="modal-dialog">

                                <!-- Modal content-->
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        <h4 class="modal-title">User Register</h4>
                                    </div>
                                    <div class="modal-body">
                                        <p>You Submitted Successfully.</p>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- content -->
@stop

{{-- page level scripts --}}
@section('footer_scripts')
    <script src="{{ asset('assets/vendors/moment/js/moment.min.js') }}" ></script>
    <script src="{{ asset('assets/vendors/select2/js/select2.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/vendors/bootstrapwizard/jquery.bootstrap.wizard.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/vendors/bootstrapvalidator/js/bootstrapValidator.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/js/pages/form_wizard.js') }}"  type="text/javascript"></script>
@stop