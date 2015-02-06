@extends('master')

@section('content')
<div class="container-fluid">


    <H1>客訴回報</H1>
    <p>
        <button type="button" class="btn btn-default btn-default" onclick="javascript:location.href='{{ url('/complains/create') }}'">
            <span class="glyphicon glyphicon-pencil"></span> 建立新檔
        </button>
    </p>

    <script>
        $(document).ready(function() {
            $('#unsolved_complains_table').DataTable({
                "dom": 'flTr<t>ip',
                tableTools: {"aButtons": ["print"]},
                "order": [[0, "desc"]]
            });
            $('#resolved_complains_table').DataTable({
                "dom": 'flTr<t>ip',
                tableTools: {"aButtons": ["print"]},
                "order": [[0, "desc"]]
            });

        });
    </script>

    <div role="tabpanel">

        <!-- Nav tabs -->
        <ul class="nav nav-tabs" role="tablist">
            <li role="presentation" class="active"><a href="#unsolved_complains_tab" aria-controls="unsolved_complains" role="tab" data-toggle="tab">未解決</a></li>
            <li role="presentation"><a href="#resolved_complains_tab" aria-controls="resolved_complains" role="tab" data-toggle="tab">已解決</a></li>
        </ul>
        <!-- End of Nav tabs-->


        <!-- Tab panes -->
        <div class="tab-content">


        <div role="tabpanel" class="tab-pane active" id="unsolved_complains_tab">
            <table id="unsolved_complains_table" class="table table-striped table-bordered" cellspacing="0" width="100%">
                <caption>Complain Reports</caption>
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

                @foreach ($unsolved_complains as $unsolved_complain)
                    <tr>
                        <td><a href="{{url('/complains/')}}/{{ $unsolved_complain->id }}/edit">{{ $unsolved_complain->id }}</a></td>
                        <td>{{ $unsolved_complain->created_at }}</td>
                        <td>{{ $unsolved_complain->updated_at }}</td>
                        <td>{{ $unsolved_complain->title }}</td>
                        <!--<th>Category</th>-->
                        <td>{{ $unsolved_complain->problem }}</td>
                        <td>{{ $unsolved_complain->name }}</td>
                        @if ($unsolved_complain->case_status == 0)
                            <td>OK</td>
                        @elseif ($unsolved_complain->case_status == 1)
                            <td>OO</td>
                        @endif
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>







        <div role="tabpanel" class="tab-pane" id="resolved_complains_tab">
            <table id="resolved_complains_table" class="table table-striped table-bordered" cellspacing="0" width="100%">
                <caption>Complain Reports</caption>
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

                @foreach ($resolved_complains as $resolved_complain)
                    <tr>
                        <td><a href="{{url('/complains/')}}/{{ $resolved_complain->id }}/edit">{{ $resolved_complain->id }}</a></td>
                        <td>{{ $resolved_complain->created_at }}</td>
                        <td>{{ $resolved_complain->updated_at }}</td>
                        <td>{{ $resolved_complain->title }}</td>
                        <!--<th>Category</th>-->
                        <td>{{ $resolved_complain->problem }}</td>
                        <td>{{ $resolved_complain->name }}</td>
                        @if ($resolved_complain->case_status == 0)
                            <td>OK</td>
                        @elseif ($resolved_complain->case_status == 1)
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