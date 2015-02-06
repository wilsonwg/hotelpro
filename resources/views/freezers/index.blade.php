@extends('master')

@section('content')
<div class="container-fluid">


    <H1>冰箱存放記錄</H1>
    <p>幫客人存放東西前，請先貼上標籤，註明房號或客人大名。</p>
    <p>
        <button type="button" class="btn btn-default btn-default" onclick="javascript:location.href='{{ url('freezers/create') }}'">
            <span class="glyphicon glyphicon-pencil"></span> 建立新檔
        </button>
    </p>

    <script>
        $(document).ready(function() {
            $('#unsolved_freezers_table').DataTable({
                "dom": 'flTr<t>ip',
                tableTools: {"aButtons": ["print"]},
                "order": [[0, "desc"]]
            });
            $('#resolved_freezers_table').DataTable({
                "dom": 'flTr<t>ip',
                tableTools: {"aButtons": ["print"]},
                "order": [[0, "desc"]]
            });

        });
    </script>

    <div role="tabpanel">

        <!-- Nav tabs -->
        <ul class="nav nav-tabs" role="tablist">
            <li role="presentation" class="active"><a href="#unsolved_freezers_tab" aria-controls="unsolved_freezers" role="tab" data-toggle="tab">未取</a></li>
            <li role="presentation"><a href="#resolved_freezers_tab" aria-controls="resolved_freezers" role="tab" data-toggle="tab">已取</a></li>
        </ul>
        <!-- End of Nav tabs-->


        <!-- Tab panes -->
        <div class="tab-content">


        <div role="tabpanel" class="tab-pane active" id="unsolved_freezers_tab">
            <table id="unsolved_freezers_table" class="table table-striped table-bordered" cellspacing="0" width="100%">
                <caption>freezer Reports</caption>
                <thead>
                <tr>
                    <th>Case ID</th>
                    <th>Date Created</th>
                    <th>Room No</th>
                    <th>Guest Name</th>
                    <th>Freezer</th>
                    <th>Item</th>
                    <th>Status</th>
                </tr>
                </thead>

                <tfoot>
                <tr>
                    <th>Case ID</th>
                    <th>Date Created</th>
                    <th>Room No</th>
                    <th>Guest Name</th>
                    <th>Freezer</th>
                    <th>Item</th>
                    <th>Status</th>
                </tr>
                </tfoot>

                <tbody>

                @foreach ($unsolved_freezers as $unsolved_freezer)
                    <tr>
                        <td><a href="{{url('/freezers/')}}/{{ $unsolved_freezer->id }}/edit">{{ $unsolved_freezer->id }}</a></td>
                        <td>{{ $unsolved_freezer->created_at }}</td>
                        <td>{{ $unsolved_freezer->room_no }}</td>
                        <td>{{ $unsolved_freezer->guest_name }}</td>
                        <td>{{ $unsolved_freezer->freezer }}</td>
                        <td>{{ $unsolved_freezer->item }}</td>
                        @if ($unsolved_freezer->case_status == 0)
                            <td>OK</td>
                        @elseif ($unsolved_freezer->case_status == 1)
                            <td>OO</td>
                        @endif
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>







        <div role="tabpanel" class="tab-pane" id="resolved_freezers_tab">
            <table id="resolved_freezers_table" class="table table-striped table-bordered" cellspacing="0" width="100%">
                <caption>freezer Reports</caption>
                <thead>
                <tr>
                    <th>Case ID</th>
                    <th>Date Created</th>
                    <th>Room No</th>
                    <th>Guest Name</th>
                    <th>Freezer</th>
                    <th>Item</th>
                    <th>Status</th>
                </tr>
                </thead>

                <tfoot>
                <tr>
                    <th>Case ID</th>
                    <th>Date Created</th>
                    <th>Room No</th>
                    <th>Guest Name</th>
                    <th>Freezer</th>
                    <th>Item</th>
                    <th>Status</th>
                </tr>
                </tfoot>

                <tbody>

                @foreach ($resolved_freezers as $resolved_freezer)
                    <tr>
                        <td><a href="{{url('/freezers/')}}/{{ $resolved_freezer->id }}/edit">{{ $resolved_freezer->id }}</a></td>
                        <td>{{ $resolved_freezer->created_at }}</td>
                        <td>{{ $resolved_freezer->room_no }}</td>
                        <td>{{ $resolved_freezer->guest_name }}</td>
                        <td>{{ $resolved_freezer->freezer }}</td>
                        <td>{{ $resolved_freezer->item }}</td>
                        @if ($resolved_freezer->case_status == 0)
                            <td>OK</td>
                        @elseif ($resolved_freezer->case_status == 1)
                            <td>OO</td>
                        @endif
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>


            <!-- End of Tab Contents -->
            </div>


    </div><!-- End of tablpanel -->

</div>

@stop