@extends('admin/layouts/default')

{{-- Page title --}}
@section('title')
Advanced Data Tables
@parent
@stop

{{-- page level styles --}}
@section('header_styles')
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendors/datatables/css/dataTables.bootstrap.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendors/datatables/css/buttons.bootstrap.css') }}"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendors/datatables/css/colReorder.bootstrap.css') }}"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendors/datatables/css/dataTables.bootstrap.css') }}"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendors/datatables/css/rowReorder.bootstrap.css') }}"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendors/datatables/css/buttons.bootstrap.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendors/datatables/css/scroller.bootstrap.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/pages/tables.css') }}" />
@stop

{{-- Page content --}}
@section('content')

<section class="content-header">
                <!--section starts-->
                <h1>Advanced Data Tables</h1>
                <ol class="breadcrumb">
                    <li>
                        <a href="{{ route('admin.dashboard') }}">
                            <i class="livicon" data-name="home" data-size="14" data-loop="true"></i>
                            Dashboard
                        </a>
                    </li>
                    <li>
                        <a href="#">DataTables</a>
                    </li>
                    <li class="active">Advanced Data Tables</li>
                </ol>
            </section>
            <!--section ends-->
            <section class="content">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="panel panel-primary filterable">
                            <div class="panel-heading clearfix  ">
                                <div class="panel-title pull-left">
                                       <div class="caption">
                                    <i class="livicon" data-name="camera" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i>
                                    TableTools
                                </div>
                                </div>
                            </div>
                            <div class="panel-body table-responsive">
                                <table class="table table-striped table-bordered" id="table1">
                                    <thead>

                                    </thead>
                                    <tbody>
                                       
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- row-->
               
                
                
                
                <!-- Third Basic Table Ends Here-->
                <!--delete modal starts here-->
                <div class="modal fade" id="delete" tabindex="-1" role="dialog" aria-labelledby="edit" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                <h4 class="modal-title custom_align" id="Heading">
                                    Delete this entry
                                </h4>
                            </div>
                            <div class="modal-body">
                                <div class="alert alert-warning">
                                    <span class="glyphicon glyphicon-warning-sign"></span>
                                    Are you sure you want to delete this Record?
                                </div>
                            </div>
                            <div class="modal-footer ">
                                <button type="button" class="btn btn-warning">
                                    <span class="glyphicon glyphicon-ok-sign"></span>
                                    Yes
                                </button>
                                <button type="button" class="btn btn-warning" data-dismiss="modal">
                                    <span class="glyphicon glyphicon-remove"></span>
                                    No
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.modal ends here -->
            </section>
            <!-- content -->

    @stop

{{-- page level scripts --}}
@section('footer_scripts')

    <script type="text/javascript" src="{{ asset('assets/vendors/datatables/js/jquery.dataTables.js') }}" ></script>
    <script type="text/javascript" src="{{ asset('assets/vendors/jeditable/js/jquery.jeditable.js') }}" ></script>
    <script type="text/javascript" src="{{ asset('assets/vendors/datatables/js/dataTables.bootstrap.js') }}" ></script>
    <script type="text/javascript" src="{{ asset('assets/vendors/datatables/js/dataTables.buttons.js') }}" ></script>
    <script type="text/javascript" src="{{ asset('assets/vendors/datatables/js/dataTables.colReorder.js') }}" ></script>
    <script type="text/javascript" src="{{ asset('assets/vendors/datatables/js/dataTables.responsive.js') }}" ></script>
    <script type="text/javascript" src="{{ asset('assets/vendors/datatables/js/dataTables.rowReorder.js') }}" ></script>
    <script type="text/javascript" src="{{ asset('assets/vendors/datatables/js/buttons.colVis.js') }}" ></script>
    <script type="text/javascript" src="{{ asset('assets/vendors/datatables/js/buttons.html5.js') }}" ></script>
    <script type="text/javascript" src="{{ asset('assets/vendors/datatables/js/buttons.print.js') }}" ></script>
    <script type="text/javascript" src="{{ asset('assets/vendors/datatables/js/buttons.bootstrap.js') }}" ></script>
    <script type="text/javascript" src="{{ asset('assets/vendors/datatables/js/buttons.print.js') }}" ></script>
    <script type="text/javascript" src="{{ asset('assets/vendors/datatables/js/pdfmake.js') }}" ></script>
    <script type="text/javascript" src="{{ asset('assets/vendors/datatables/js/vfs_fonts.js') }}" ></script>
    <script type="text/javascript" src="{{ asset('assets/vendors/datatables/js/dataTables.scroller.js') }}" ></script>
    <script type="text/javascript" src="{{ asset('assets/js/pages/table-advanced.js') }}" ></script>
@stop