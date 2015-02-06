@extends('master')

@section('content')

    <h1 class="page-header">Work Logs</h1>

    <script>
        $(document).ready(function() {
            $('#work_logs').DataTable({
                "order": [[ 2, "desc" ]]
            });
        } );
    </script>


    <div>

        <table id="work_logs" class="table table-striped table-bordered" cellspacing="0" width="100%">
            <caption>Problem Reports</caption>
            <thead>
            <tr>
                <th>Case ID</th>
                <th>Date Created</th>
                <th>Date Modified</th>
                <th>Room Number</th>
                <th>Description</th>
                <th>Status</th>
            </tr>
            </thead>

            <tfoot>
            <tr>
                <th>Case ID</th>
                <th>Date Created</th>
                <th>Date Modified</th>
                <th>Room Number</th>
                <th>Description</th>
                <th>Status</th>
            </tr>
            </tfoot>

            <tbody>

@foreach ($work_logs as $work_log)
            <tr>
                <td><a href="{{url('/notes/')}}/{{ $work_log->id }}/edit">{{ $work_log->id }}</a></td>
                <td>{{ $work_log->created_at }}</td>
                <td>{{ $work_log->updated_at }}</td>
                <td>{{ $work_log->room_no }}</td>
                <td>{{ $work_log->notes }}</td>
@if ($work_log->case_status == 0)
                <td>OK</td>
@elseif ($work_log->case_status == 1)
                <td>OO</td>
@endif
            </tr>
@endforeach
             </tbody>
        </table>
    </div>

@stop