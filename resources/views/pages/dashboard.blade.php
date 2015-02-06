@extends('master')

@section('content')

    <script>
        $(document).ready(function() {



            $('#problems').DataTable({
                "dom": 'flTr<t>ip',
                tableTools: {"aButtons": [ "print" ]},
                "order": [[ 0, "desc" ]]
            });


            $('#d_checks_table').DataTable({
                "dom": 'flTr<t>ip',
                tableTools: {"aButtons": [ "print" ]},
                "order": [[ 0, "desc" ]]
            });


            $('#q_checks_table').DataTable({
                "dom": 'flTr<t>ip',
                tableTools: {"aButtons": [ "print" ]},
                "order": [[ 0, "desc" ]]
            });

            $('#we_checks_table').DataTable({
                "dom": 'flTr<t>ip',
                tableTools: {"aButtons": [ "print" ]},
                "order": [[ 0, "desc" ]]
            });

        } );
    </script>

    <h1 class="page-header">Dashboard</h1>


    <h3>客房問題</h3>
    <div role="tabpanel">

        <!-- Nav tabs -->
        <ul class="nav nav-tabs" role="tablist">
            <li role="presentation" class="active"><a href="#notes_tab" aria-controls="notes_tab" role="tab" data-toggle="tab">Notes <span class="badge badge-info">{{count($room_notes)}}</span></a></li>
            <li role="presentation"><a href="#d_checks_tab" aria-controls="d_checks_tab" role="tab" data-toggle="tab">D Checks <span class="badge badge-info">{{count($d_checks)}}</span></a></li>
            <li role="presentation"><a href="#q_checks_tab" aria-controls="q_checks_tab" role="tab" data-toggle="tab">Q Checks <span class="badge badge-info">{{count($q_checks)}}</span></a></li>
            <li role="presentation"><a href="#we_checks_tab" aria-controls="we_checks_tab" role="tab" data-toggle="tab">WE Checks <span class="badge badge-info">{{count($we_checks)}}</span></a></li>
        </ul>





        <!-- Tab panes -->
        <div class="tab-content">




        <div role="tabpanel" class="tab-pane active" id="notes_tab">
        <table id="problems" class="table table-striped table-bordered" cellspacing="0" width="100%">
            <thead>
            <tr>
                <th>Case ID</th>
                <th>Date Created</th>
                <th>Date Modified</th>
                <th>Room Number</th>
                <th>Work Category</th>
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
                <th>Work Category</th>
                <th>Description</th>
                <th>Status</th>
            </tr>
            </tfoot>

            <tbody>

@foreach ($room_notes as $room_note)
            <tr>
                <td><a href="{{url('/notes/')}}/{{ $room_note->id }}/edit">{{ $room_note->id }}</a></td>
                <td>{{ $room_note->created_at }}</td>
                <td>{{ $room_note->updated_at }}</td>
                <td>{{ $room_note->room_no }}</td>
                <td>{{ $room_note->work }}</td>
                <td>{{ $room_note->notes }}</td>
@if ($room_note->case_status == 0)
                <td>OK</td>
@elseif ($room_note->case_status == 1)
                <td>OO</td>
@endif
            </tr>
@endforeach
             </tbody>
        </table>
        </div>








        <div role="tabpanel" class="tab-pane" id="d_checks_tab">
        <table id="d_checks_table" class="table table-striped table-bordered" cellspacing="0" width="100%">
            <caption>Deep Clean Reports</caption>
            <thead>
            <tr>
                <th>Case ID</th>
                <th>Date Created</th>
                <th>Date Modified</th>
                <th>Room Number</th>
                <th>Status</th>
            </tr>
            </thead>

            <tfoot>
            <tr>
                <th>Case ID</th>
                <th>Date Created</th>
                <th>Date Modified</th>
                <th>Room Number</th>
                <th>Status</th>
            </tr>
            </tfoot>

            <tbody>

            @foreach ($d_checks as $d_check)
                <tr>
                    <td><a href="{{url('/d_checks/')}}/{{ $d_check->id }}/edit">{{ $d_check->id }}</a></td>
                    <td>{{ $d_check->created_at }}</td>
                    <td>{{ $d_check->updated_at }}</td>
                    <td>{{ $d_check->room_no }}</td>
                    @if ($d_check->case_status == 0)
                        <td>OK</td>
                    @elseif ($d_check->case_status == 1)
                        <td>OO</td>
                    @endif
                </tr>
            @endforeach
            </tbody>
        </table>
        </div>








        <div role="tabpanel" class="tab-pane" id="q_checks_tab">
        <table id="q_checks_table" class="table table-striped table-bordered" cellspacing="0" width="100%">
            <caption>Quick Clean Reports</caption>
            <thead>
            <tr>
                <th>Case ID</th>
                <th>Date Created</th>
                <th>Date Modified</th>
                <th>Room Number</th>
                <th>Status</th>
            </tr>
            </thead>

            <tfoot>
            <tr>
                <th>Case ID</th>
                <th>Date Created</th>
                <th>Date Modified</th>
                <th>Room Number</th>
                <th>Status</th>
            </tr>
            </tfoot>

            <tbody>

            @foreach ($q_checks as $q_check)
                <tr>
                    <td><a href="{{url('/q_checks/')}}/{{ $q_check->id }}/edit">{{ $q_check->id }}</a></td>
                    <td>{{ $q_check->created_at }}</td>
                    <td>{{ $q_check->updated_at }}</td>
                    <td>{{ $q_check->room_no }}</td>
                    @if ($q_check->case_status == 0)
                        <td>OK</td>
                    @elseif ($q_check->case_status == 1)
                        <td>OO</td>
                    @endif
                </tr>
            @endforeach
            </tbody>
        </table>
        </div>


            <div role="tabpanel" class="tab-pane" id="we_checks_tab">
                <table id="we_checks_table" class="table table-striped table-bordered" cellspacing="0" width="100%">
                    <caption>Water Electric Reports</caption>
                    <thead>
                    <tr>
                        <th>Case ID</th>
                        <th>Date Created</th>
                        <th>Date Modified</th>
                        <th>Room Number</th>
                        <th>Status</th>
                    </tr>
                    </thead>

                    <tfoot>
                    <tr>
                        <th>Case ID</th>
                        <th>Date Created</th>
                        <th>Date Modified</th>
                        <th>Room Number</th>
                        <th>Status</th>
                    </tr>
                    </tfoot>

                    <tbody>

                    @foreach ($we_checks as $we_check)
                        <tr>
                            <td><a href="{{url('/we_checks/')}}/{{ $we_check->id }}/edit">{{ $we_check->id }}</a></td>
                            <td>{{ $we_check->created_at }}</td>
                            <td>{{ $we_check->updated_at }}</td>
                            <td>{{ $we_check->room_no }}</td>
                            @if ($we_check->case_status == 0)
                                <td>OK</td>
                            @elseif ($we_check->case_status == 1)
                                <td>OO</td>
                            @endif
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>



        </div><!-- End Tab Content -->



</div>


@stop