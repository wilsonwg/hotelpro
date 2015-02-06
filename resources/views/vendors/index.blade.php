@extends('master')

@section('content')
<div class="container-fluid">


    <H1>廠商資料</H1>
    <p>
        <button type="button" class="btn btn-default btn-default" onclick="javascript:location.href='{{ url('/vendors/create') }}'">
            <span class="glyphicon glyphicon-pencil"></span> 建立新檔
        </button>
    </p>

    <script>
        $(document).ready(function() {
            $('#vendors_table').DataTable({
                "dom": 'flTr<t>ip',
                tableTools: {"aButtons": ["print"]},
                "order": [[0, "desc"]]
            });

        });
    </script>


            <table id="vendors_table" class="table table-striped table-bordered" cellspacing="0" width="100%">
                <caption>todo Reports</caption>
                <thead>
                <tr>
                    <th>ID</th>
                    <th>聯絡人</th>
                    <th>公司</th>
                    <th>電話</th>
                    <th>地址</th>
                    <th>補充資料</th>
                    <th>關鍵字</th>
                </tr>
                </thead>

                <tfoot>
                <tr>
                    <th>ID</th>
                    <th>聯絡人</th>
                    <th>公司</th>
                    <th>電話</th>
                    <th>地址</th>
                    <th>補充資料</th>
                    <th>關鍵字</th>
                </tr>
                </tfoot>

                <tbody>

                @foreach ($vendors as $vendor)
                    <tr>
                        <td><a href="{{url('/vendors/')}}/{{ $vendor->id }}/edit">{{ $vendor->id }}</a></td>
                        <td>{{ $vendor->name }}</td>
                        <td>{{ $vendor->company }}</td>
                        <td>{{ $vendor->phone_no }}</td>
                        <td>{{ $vendor->address }}</td>
                        <td>{{ $vendor->notes }}</td>
                        <td>{{ $vendor->keywords }}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>

</div>

@stop