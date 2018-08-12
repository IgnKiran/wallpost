
<!-- Qrcode Id Field -->
<div class="form-group">
        {!! Form::label('qrcode_id', 'Product Name:') !!}
        <p>
            <b><a href="/qrcodes/{!! $transaction->qrcode['id'] !!}">{!! $transaction->qrcode['product_name'] !!}</a></b>
        </p>
    </div>
    
<!-- Amount Field -->
<div class="form-group">
        {!! Form::label('amount', 'Amount:') !!}
        <p>${!! $transaction->amount !!}</p>
    </div>

<!-- User name Field -->
<div class="form-group">
    {!! Form::label('user_id', 'Buyer Name:') !!}
    <p>
        <b><a href="/users/{!! $transaction->user['id'] !!}">{!! $transaction->user['name'] !!} | {!! $transaction->user['email'] !!}</a></b>
    </p>
</div>

<!-- Qrcode Owner name Field -->
<div class="form-group">
    {!! Form::label('qrcode_owner_id', 'Qrcode Owner Name:') !!}
    <p>
        <b><a href="/users/{!! $transaction->qrcode_owner['id'] !!}">{!! $transaction->qrcode_owner['name'] !!}</a></b>
    </p>
</div>


<!-- Payment Method Field -->
<div class="form-group">
    {!! Form::label('payment_method', 'Payment Method:') !!}
    <p>{!! $transaction->payment_method !!}</p>
</div>

<!-- Message Field -->
<div class="form-group">
    {!! Form::label('message', 'Message:') !!}
    <p>{!! $transaction->message !!}</p>
</div>



<!-- Status Field -->
<div class="form-group">
    {!! Form::label('status', 'Status:') !!}
    <p>{!! $transaction->status !!}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{!! $transaction->created_at->format('D d, M, Y h:i') !!}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{!! $transaction->updated_at->format('D d, M, Y h:i') !!}</p>
</div>

