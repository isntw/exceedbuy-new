<div class="panel-body">
    <div class="dataTable_wrapper">
        <table class="table table-striped table-bordered table-hover" id="transporturi">
            <thead>
                <tr>                
                    <th>Nume</th>
                    <th>Email</th>
                    <th>Actiuni</th>
                </tr>
            </thead>
            <tbody>
                @foreach($contests as $contest)
                <tr class="odd gradeX">
                    <td>{{$contest->name}}</td>
                    <td>{{$contest->email}}</td>
                    <td class="text-right">
                        {!! \Html::deleteButton('admin.dashboard.delete', $contest->id ) !!}
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>