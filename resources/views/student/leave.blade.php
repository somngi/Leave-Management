@extends('admin.master')

@section('page_title','Leave Management')

@section('stylesheet')
    <!-- DataTables -->
    <link rel="stylesheet" href="{{ asset('AdminLTE/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css') }}">
@endsection

@section('content')

    <div class="row">
        <div class="col-xs-12">
            @if(session('success'))
                <div class="alert alert-success alert-dismissable">
                    {{ session('success') }}
                </div>
            @endif

            @if(session('error'))
                <div class="alert alert-danger alert-dismissable">
                    {{ session('error') }}
                </div>
            @endif

            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">Leave Management</h3>
                    <a href="{{ route('student.get_add_leave') }}" class="btn btn-primary pull-right">Add Leave</a>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <table id="student_leave" class="table table-bordered table-striped">
                        <thead>
                        <tr>
                            <th>Sr. No</th>
                            <th>Leave Reason</th>
                            <th>Leave To</th>
                            <th>Leave Description</th>
                            <th>Leave Start</th>
                            <th>Leave End</th>
                            <th>Leave Days</th>
                            <th>Status</th>
                            <th>Option</th>
                        </tr>
                        </thead>
                        <tfoot>
                        <tr>
                            <th>Sr. No</th>
                            <th>Leave Reason</th>
                            <th>Leave To</th>
                            <th>Leave Description</th>
                            <th>Leave Start</th>
                            <th>Leave End</th>
                            <th>Leave Days</th>
                            <th>Status</th>
                            <th>Option</th>
                        </tr>
                        </tfoot>
                    </table>
                </div>
                <!-- /.box-body -->
            </div>
            <!-- /.box -->
        </div>
        <!-- /.col -->
    </div>

@endsection

@section('script')
    <!-- DataTables -->
    <script src="{{ asset('AdminLTE/bower_components/datatables.net/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('AdminLTE/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js') }}"></script>

    <script>
        $(function () {
            $('#student_leave').DataTable({
                "processing": true,
                "serverSide": true,
                "ajax":{
                    "url": "{{ route('student.get_all_leave') }}",
                    "dataType": "json",
                    "type": "POST",
                    "data":{ _token: "{{csrf_token()}}"}
                },
                "columns": [
                    { "data": "id" },
                    { "data": "leave_reason" },
                    { "data": "leave_to" },
                    { "data": "leave_description" },
                    { "data": "leave_start" },
                    { "data": "leave_end" },
                    { "data": "leave_days"},
                    { "data": "status" },
                    { "data": "options"},
                ]
            })
        })
    </script>
@endsection
