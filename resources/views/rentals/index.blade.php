@extends('master')

@section('content')
<div class="container-fluid">


    <H1>物品借用、移動記錄</H1>
    <p>客人借用物品，或是(椅子、燈)等東西有搬動都請作記錄，謝謝！</p>
    <p>
        <button type="button" class="btn btn-default btn-default" onclick="javascript:location.href='{{ url('rentals/create') }}'">
            <span class="glyphicon glyphicon-pencil"></span> 建立新檔
        </button>
    </p>

    <script>
        $(document).ready(function() {
            $('#unsolved_rentals_table').DataTable({
                "dom": 'flTr<t>ip',
                tableTools: {"aButtons": ["print"]},
                "order": [[0, "desc"]]
            });
            $('#resolved_rentals_table').DataTable({
                "dom": 'flTr<t>ip',
                tableTools: {"aButtons": ["print"]},
                "order": [[0, "desc"]]
            });

        });
    </script>

    <div role="tabpanel">

        <!-- Nav tabs -->
        <ul class="nav nav-tabs" role="tablist">
            <li role="presentation" class="active"><a href="#unsolved_rentals_tab" aria-controls="unsolved_rentals" role="tab" data-toggle="tab">使用中</a></li>
            <li role="presentation"><a href="#resolved_rentals_tab" aria-controls="resolved_rentals" role="tab" data-toggle="tab">已歸還</a></li>
        </ul>
        <!-- End of Nav tabs-->


        <!-- Tab panes -->
        <div class="tab-content">


        <div role="tabpanel" class="tab-pane active" id="unsolved_rentals_tab">
            <table id="unsolved_rentals_table" class="table table-striped table-bordered" cellspacing="0" width="100%">
                <caption>rental Reports</caption>
                <thead>
                <tr>
                    <th>Case ID</th>
                    <th>Date Created</th>
                    <th>借用物品</th>
                    <th>原本位置</th>
                    <th>借用位置</th>
                    <th>Status</th>
                </tr>
                </thead>

                <tfoot>
                <tr>
                    <th>Case ID</th>
                    <th>Date Created</th>
                    <th>借用物品</th>
                    <th>原本位置</th>
                    <th>借用位置</th>
                    <th>Status</th>
                </tr>
                </tfoot>

                <tbody>

                @foreach ($unsolved_rentals as $unsolved_rental)
                    <tr>
                        <td><a href="{{url('/rentals/')}}/{{ $unsolved_rental->id }}/edit">{{ $unsolved_rental->id }}</a></td>
                        <td>{{ $unsolved_rental->created_at }}</td>
                        <td>{{ $unsolved_rental->item }}</td>
                        <td>{{ $unsolved_rental->original_location }}</td>
                        <td>{{ $unsolved_rental->new_location }}</td>
                        @if ($unsolved_rental->case_status == 0)
                            <td>OK</td>
                        @elseif ($unsolved_rental->case_status == 1)
                            <td>OO</td>
                        @endif
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>







        <div role="tabpanel" class="tab-pane" id="resolved_rentals_tab">
            <table id="resolved_rentals_table" class="table table-striped table-bordered" cellspacing="0" width="100%">
                <caption>rental Reports</caption>
                <thead>
                <tr>
                    <th>Case ID</th>
                    <th>Date Created</th>
                    <th>借用物品</th>
                    <th>原本位置</th>
                    <th>借用位置</th>
                    <th>Status</th>
                </tr>
                </thead>

                <tfoot>
                <tr>
                    <th>Case ID</th>
                    <th>Date Created</th>
                    <th>借用物品</th>
                    <th>原本位置</th>
                    <th>借用位置</th>
                    <th>Status</th>
                </tr>
                </tfoot>

                <tbody>

                @foreach ($resolved_rentals as $resolved_rental)
                    <tr>
                        <td><a href="{{url('/rentals/')}}/{{ $resolved_rental->id }}/edit">{{ $resolved_rental->id }}</a></td>
                        <td>{{ $resolved_rental->created_at }}</td>
                        <td>{{ $resolved_rental->item }}</td>
                        <td>{{ $resolved_rental->original_location }}</td>
                        <td>{{ $resolved_rental->new_location }}</td>
                        @if ($resolved_rental->case_status == 0)
                            <td>OK</td>
                        @elseif ($resolved_rental->case_status == 1)
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