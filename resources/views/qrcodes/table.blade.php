<table class="table table-responsive" id="qrcodes-table">
    <thead>
        <tr>
           <th>Product Name</th>
            <th>Website</th>
            <th>Amount</th>
            <th>Status</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($qrcodes as $qrcode)
        <tr>
            <td><a class="text-info" href="{!! route('qrcodes.show', [$qrcode->id]) !!}"><b>{!! $qrcode->product_name !!}</b></a></td>
            <td>{!! $qrcode->website !!}</td>
            <td>$ {!! $qrcode->amount !!}</td>
            <td>
                {!! $qrcode->status ? '<i class="fa fa-check-square text-green" aria-hidden="true"></i>
            ' : '<i class="fa fa-times text-red" aria-hidden="true"></i>
' !!}
            </td>
            <td>
                {!! Form::open(['route' => ['qrcodes.destroy', $qrcode->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('qrcodes.show', [$qrcode->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('qrcodes.edit', [$qrcode->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>