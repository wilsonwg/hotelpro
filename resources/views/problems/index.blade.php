@extends('master')

@section('content')
<div class="container-fluid">


    <H1>問題回報</H1>
    <p>建檔前請確認是否為：櫃檯、收款、訂房、軟體、硬體、備品、環境等相關等問題。(非客訴性質、非客房硬體問題)</p>
    <p>
        <button type="button" class="btn btn-default btn-default" onclick="javascript:location.href='{{ url('/problems/create') }}'">
            <span class="glyphicon glyphicon-pencil"></span> 建立新檔
        </button>
    </p>

    <script>
        $(document).ready(function() {
            $('#unsolved_problems_table').DataTable({
                "dom": 'flTr<t>ip',
                tableTools: {"aButtons": ["print"]},
                "order": [[0, "desc"]]
            });
            $('#resolved_problems_table').DataTable({
                "dom": 'flTr<t>ip',
                tableTools: {"aButtons": ["print"]},
                "order": [[0, "desc"]]
            });

        });
    </script>

    <div role="tabpanel">

        <!-- Nav tabs -->
        <ul class="nav nav-tabs" role="tablist">
            <li role="presentation" class="active"><a href="#unsolved_problems_tab" aria-controls="unsolved_problems" role="tab" data-toggle="tab">未解決</a></li>
            <li role="presentation"><a href="#resolved_problems_tab" aria-controls="resolved_problems" role="tab" data-toggle="tab">已解決</a></li>
        </ul>
        <!-- End of Nav tabs-->


        <!-- Tab panes -->
        <div class="tab-content">


        <div role="tabpanel" class="tab-pane active" id="unsolved_problems_tab">
            <table id="unsolved_problems_table" class="table table-striped table-bordered" cellspacing="0" width="100%">
                <caption>Problem Reports</caption>
                <thead>
                <tr>
                    <th>Case ID</th>
                    <th>Date Created</th>
                    <th>Date Modified</th>
                    <th>Title</th>
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
                    <th>Title</th>
                    <!--<th>Category</th>-->
                    <th>Description</th>
                    <th>Reporter</th>
                    <th>Status</th>
                </tr>
                </tfoot>

                <tbody>

                @foreach ($unsolved_problems as $unsolved_problem)
                    <tr>
                        <td><a href="{{url('/problems/')}}/{{ $unsolved_problem->id }}/edit">{{ $unsolved_problem->id }}</a></td>
                        <td>{{ $unsolved_problem->created_at }}</td>
                        <td>{{ $unsolved_problem->updated_at }}</td>
                        <td>{{ $unsolved_problem->title }}</td>
                        <!--<th>Category</th>-->
                        <td>{{ $unsolved_problem->problem }}</td>
                        <td>{{ $unsolved_problem->name }}</td>
                        @if ($unsolved_problem->case_status == 0)
                            <td>OK</td>
                        @elseif ($unsolved_problem->case_status == 1)
                            <td>OO</td>
                        @endif
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>







        <div role="tabpanel" class="tab-pane" id="resolved_problems_tab">
            <table id="resolved_problems_table" class="table table-striped table-bordered" cellspacing="0" width="100%">
                <caption>Problem Reports</caption>
                <thead>
                <tr>
                    <th>Case ID</th>
                    <th>Date Created</th>
                    <th>Date Modified</th>
                    <th>Title</th>
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
                    <th>Title</th>
                    <!--<th>Category</th>-->
                    <th>Description</th>
                    <th>Reporter</th>
                    <th>Status</th>
                </tr>
                </tfoot>

                <tbody>

                @foreach ($resolved_problems as $resolved_problem)
                    <tr>
                        <td><a href="{{url('/problems/')}}/{{ $resolved_problem->id }}/edit">{{ $resolved_problem->id }}</a></td>
                        <td>{{ $resolved_problem->created_at }}</td>
                        <td>{{ $resolved_problem->updated_at }}</td>
                        <td>{{ $resolved_problem->title }}</td>
                        <!--<th>Category</th>-->
                        <td>{{ $resolved_problem->problem }}</td>
                        <td>{{ $resolved_problem->name }}</td>
                        @if ($resolved_problem->case_status == 0)
                            <td>OK</td>
                        @elseif ($resolved_problem->case_status == 1)
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