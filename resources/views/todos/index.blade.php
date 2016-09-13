@extends('master')

@section('content')
<div class="container-fluid">


    <H1>待辦事項</H1>
    <p>
        <button type="button" class="btn btn-default btn-default" onclick="javascript:location.href='{{ url('/todos/create') }}'">
            <span class="glyphicon glyphicon-pencil"></span> 建立新檔
        </button>
    </p>

    <script>
        $(document).ready(function() {
            $('#unsolved_todos_table').DataTable({
                "dom": 'flTr<t>ip',
                tableTools: {"aButtons": ["print"]},
                "order": [[0, "desc"]]
            });
            $('#resolved_todos_table').DataTable({
                "dom": 'flTr<t>ip',
                tableTools: {"aButtons": ["print"]},
                "order": [[0, "desc"]]
            });

        });
    </script>

    <div role="tabpanel">

        <!-- Nav tabs -->
        <ul class="nav nav-tabs" role="tablist">
            <li role="presentation" class="active"><a href="#unsolved_todos_tab" aria-controls="unsolved_todos" role="tab" data-toggle="tab">未完成</a></li>
            <li role="presentation"><a href="#resolved_todos_tab" aria-controls="resolved_todos" role="tab" data-toggle="tab">已完成</a></li>
        </ul>
        <!-- End of Nav tabs-->


        <!-- Tab panes -->
        <div class="tab-content">


        <div role="tabpanel" class="tab-pane active" id="unsolved_todos_tab">
            <table id="unsolved_todos_table" class="table table-striped table-bordered" cellspacing="0" width="100%">
                <caption>todo Reports</caption>
                <thead>
                <tr>
                    <th>Case ID</th>
                    <th>Date Created</th>
                    <th>Date Modified</th>
                    <!--<th>Category</th>-->
                    <th>Description</th>
                    <th>Reporter</th>
                    <th>Status</th>
                </tr>
                </thead>

                <tfoot>
                <tr>
                    <th>Case ID</th>
                    <th>Date Created</th>
                    <th>Date Modified</th>
                    <!--<th>Category</th>-->
                    <th>Description</th>
                    <th>Reporter</th>
                    <th>Status</th>
                </tr>
                </tfoot>

                <tbody>

                @foreach ($unsolved_todos as $unsolved_todo)
                    <tr>
                        <td><a href="{{url('/todos/')}}/{{ $unsolved_todo->id }}/edit">{{ $unsolved_todo->id }}</a></td>
                        <td>{{ $unsolved_todo->created_at }}</td>
                        <td>{{ $unsolved_todo->updated_at }}</td>
                        <!--<th>Category</th>-->
                        <td>{{ $unsolved_todo->description }}</td>
                        <td>{{ $unsolved_todo->name }}</td>
                        @if ($unsolved_todo->case_status == 0)
                            <td>OK</td>
                        @elseif ($unsolved_todo->case_status == 1)
                            <td>OO</td>
                        @endif
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>







        <div role="tabpanel" class="tab-pane" id="resolved_todos_tab">
            <table id="resolved_todos_table" class="table table-striped table-bordered" cellspacing="0" width="100%">
                <caption>todo Reports</caption>
                <thead>
                <tr>
                    <th>Case ID</th>
                    <th>Date Created</th>
                    <th>Date Modified</th>
                    <!--<th>Category</th>-->
                    <th>Description</th>
                    <th>Reporter</th>
                    <th>Status</th>
                </tr>
                </thead>

                <tfoot>
                <tr>
                    <th>Case ID</th>
                    <th>Date Created</th>
                    <th>Date Modified</th>
                    <!--<th>Category</th>-->
                    <th>Description</th>
                    <th>Reporter</th>
                    <th>Status</th>
                </tr>
                </tfoot>

                <tbody>

                @foreach ($resolved_todos as $resolved_todo)
                    <tr>
                        <td><a href="{{url('/todos/')}}/{{ $resolved_todo->id }}/edit">{{ $resolved_todo->id }}</a></td>
                        <td>{{ $resolved_todo->created_at }}</td>
                        <td>{{ $resolved_todo->updated_at }}</td>
                        <!--<th>Category</th>-->
                        <td>{{ $resolved_todo->description }}</td>
                        <td>{{ $resolved_todo->name }}</td>
                        @if ($resolved_todo->case_status == 0)
                            <td>OK</td>
                        @elseif ($resolved_todo->case_status == 1)
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