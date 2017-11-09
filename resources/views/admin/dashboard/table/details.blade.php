
<div class="panel-body">
    <div class="dataTable_wrapper">
        <table class="table table-striped table-bordered table-hover" id="transporturi">
            <thead>
                <tr>                
                    <th>#</th>
                    <th>Nume</th>
                    <th>Email</th>
                </tr>
            </thead>
            <tbody>
                @foreach($contests as $contest)
                <tr class="odd gradeX">
                    <td>{{$contest->id}}</td>
                    <td>{{$contest->name}}</td>
                    <td>{{$contest->email}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>