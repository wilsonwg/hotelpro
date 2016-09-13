@extends('master')

@section('content')

    <h1 class="page-header">Room {{ $room_no }} Reports</h1>

    <div role="tabpanel">

<!-- Nav tabs -->
        <ul class="nav nav-tabs" role="tablist">
            <li role="presentation" class="active"><a href="#d_clean" aria-controls="d_clean" role="tab" data-toggle="tab">Deep Clean</a></li>
            <li role="presentation"><a href="#q_clean" aria-controls="q_clean" role="tab" data-toggle="tab">Quick Clean</a></li>
            <li role="presentation"><a href="#we_checks" aria-controls="we_checks" role="tab" data-toggle="tab">Water Electric</a></li>
            <li role="presentation"><a href="#room_notes" aria-controls="room_notes" role="tab" data-toggle="tab">Room Notes</a></li>
        </ul>

        <script>

function new_D_Check(){
    location.href='{{ url('/d_checks/'.$room_no.'/create') }}';
            }

function new_Q_Check(){
    location.href='{{ url('/q_checks/'.$room_no.'/create') }}';
}

function new_WE_Check(){
    location.href='{{ url('/we_checks/'.$room_no.'/create') }}';
}

function new_problem(){
    location.href='{{ url('/notes/'.$room_no.'/create') }}';
}


            $(document).ready(function() {
                $('#d_clean_table').DataTable({
                    "dom": 'fl<"createD_Check">r<t>ip',
                    "order": [[ 0, "desc" ]]
                });

                $('#q_clean_table').DataTable({
                    "dom": 'fl<"createQ_Check">r<t>ip',
                    "order": [[ 0, "desc" ]]
                });

                $('#we_checks_table').DataTable({
                    "dom": 'fl<"createWE_Check">r<t>ip',
                    "order": [[ 0, "desc" ]]
                });

                $('#room_notes_table').DataTable(
                   {
                    "dom": 'fl<"createNote">r<t>ip',
                    "order": [[ 0, "desc" ]]
                   }
                  );

                $("div.createD_Check").html('<button type="button" class="btn btn-sm" onclick="new_D_Check()"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> New </button>');

                $("div.createQ_Check").html('<button type="button" class="btn btn-sm" onclick="new_Q_Check()"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> New </button>');

                $("div.createWE_Check").html('<button type="button" class="btn btn-sm" onclick="new_WE_Check()"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> New </button>');

                $("div.createNote").html('<button type="button" class="btn btn-sm" onclick="new_problem()"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> New </button>');
            } );

        </script>

        <!-- Tab panes -->

        <div class="tab-content">
            <div role="tabpanel" class="tab-pane active" id="d_clean">



                    <table id="d_clean_table" class="table table-striped table-bordered" cellspacing="0" width="100%">
                        <thead>
                        <tr>
                            <th>Case ID</th>
                            <th>Date Created</th>
                            <th>Date Modified</th>
                            <th>Status</th>
                        </tr>
                        </thead>

                        <tfoot>
                        <tr>
                            <th>Case ID</th>
                            <th>Date Created</th>
                            <th>Date Modified</th>
                            <th>Status</th>
                        </tr>
                        </tfoot>

                        <tbody>
                        @foreach ($d_clean_records as $d_clean_record)
                        <tr>
                        <td><a href="{{url('/d_checks/')}}/{{ $d_clean_record->id }}/edit">{{ $d_clean_record->id }}</a></td>
                        <td>{{ $d_clean_record->created_at }}</td>
                        <td>{{ $d_clean_record->updated_at }}</td>
                            @if ($d_clean_record->case_status == 0)
                        <td>OK</td>
                            @elseif ($d_clean_record->case_status == 1)
                        <td>OO</td>
                            @endif
                            </tr>
                        @endforeach

                        </tbody>
                    </table>
            </div>
            <div role="tabpanel" class="tab-pane" id="q_clean">

                <table id="q_clean_table" class="table table-striped table-bordered" cellspacing="0" width="100%">
                    <thead>
                    <tr>
                        <th>Case ID</th>
                        <th>Date Created</th>
                        <th>Date Modified</th>
                        <th>Status</th>
                    </tr>
                    </thead>

                    <tfoot>
                    <tr>
                        <th>Case ID</th>
                        <th>Date Created</th>
                        <th>Date Modified</th>
                        <th>Status</th>
                    </tr>
                    </tfoot>

                    <tbody>
                    @foreach ($q_clean_records as $q_clean_record)
                        <tr>
                            <td><a href="{{url('/q_checks/')}}/{{ $q_clean_record->id }}/edit">{{ $q_clean_record->id }}</a></td>
                            <td>{{ $q_clean_record->created_at }}</td>
                            <td>{{ $q_clean_record->updated_at }}</td>
                            @if ($q_clean_record->case_status == 0)
                                <td>OK</td>
                            @elseif ($q_clean_record->case_status == 1)
                                <td>OO</td>
                            @endif
                        </tr>
                    @endforeach

                    </tbody>
                </table>


            </div>






            <div role="tabpanel" class="tab-pane" id="we_checks">

                <table id="we_checks_table" class="table table-striped table-bordered" cellspacing="0" width="100%">
                    <thead>
                    <tr>
                        <th>Case ID</th>
                        <th>Date Created</th>
                        <th>Date Modified</th>
                        <th>Status</th>
                    </tr>
                    </thead>

                    <tfoot>
                    <tr>
                        <th>Case ID</th>
                        <th>Date Created</th>
                        <th>Date Modified</th>
                        <th>Status</th>
                    </tr>
                    </tfoot>

                    <tbody>
                    @foreach ($we_checks as $we_check)
                        <tr>
                            <td><a href="{{url('/we_checks/')}}/{{ $we_check->id }}/edit">{{ $we_check->id }}</a></td>
                            <td>{{ $we_check->created_at }}</td>
                            <td>{{ $we_check->updated_at }}</td>
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





            <div role="tabpanel" class="tab-pane" id="room_notes">


                <table id="room_notes_table" class="table table-striped table-bordered" cellspacing="0" width="100%">
                    <thead>
                    <tr>
                        <th>Case ID</th>
                        <th>Date Created</th>
                        <th>Date Modified</th>
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
                            <td> {{ $room_note->work }}</td>
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
        </div>

    </div>


@stop