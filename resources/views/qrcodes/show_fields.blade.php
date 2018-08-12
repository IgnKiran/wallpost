<div class="row">
            <div class="col-sm-6">
                <!-- Product Name Field -->
                <div class="form-group">
                        <h3>{!! $qrcode->product_name !!} <br>
                        <!-- company name field -->
                        @if(isset($qrcode->comapany_name))
                            <small>by {!! $qrcode->comapany_name !!}</small>
                        @endif
                        </h3>
                    </div>

                <!-- Amount Field -->
                <div class="form-group">
                        <h4>Amount: ${!! $qrcode->amount !!}</h4>
                    </div>

                <!-- Product Url Field -->
                <div class="form-group">
                        {!! Form::label('product_url', 'Product Url:') !!}
                        <p>
                            <a href="{!! $qrcode->product_url !!}" target="_blank">{!! $qrcode->product_url !!}</a>
                        </p>
                    </div>

                <!-- Status Field -->
                <div class="form-group">
                        {!! Form::label('status', 'Status:') !!}
                        <p>{!! $qrcode->status ? '<i class="fa fa-check-square text-green" aria-hidden="true"></i>
                            ' : '<i class="fa fa-times text-red" aria-hidden="true"></i>
                ' !!}</p>
                    </div>
                    <hr>
                @if($qrcode->user_id == Auth::user()->id || Auth::user()->role_id < 3)
                    
                        <!-- Id Field -->
                    <div class="form-group">
                            {!! Form::label('id', 'Id:') !!}
                            <p>{!! $qrcode->id !!}</p>
                        </div>
                    
                    <!-- User Id Field -->
                    <div class="form-group">
                        {!! Form::label('user_id', 'User Id:') !!}
                        <p>{!! $qrcode->user_id !!}</p>
                    </div>
                    
                    <!-- Website Field -->
                    <div class="form-group">
                        {!! Form::label('website', 'Website:') !!}
                        <p>{!! $qrcode->website !!}</p>
                    </div>
                    
                    <!-- Callback Url Field -->
                    <div class="form-group">
                        {!! Form::label('callback_url', 'Callback Url:') !!}
                        <p>{!! $qrcode->callback_url !!}</p>
                    </div>
                    
                    <!-- Created At Field -->
                    <div class="form-group">
                        {!! Form::label('created_at', 'Created At:') !!}
                        <p>{!! $qrcode->created_at !!}</p>
                    </div>
                    
                    <!-- Updated At Field -->
                    <div class="form-group">
                        {!! Form::label('updated_at', 'Updated At:') !!}
                        <p>{!! $qrcode->updated_at !!}</p>
                    </div>

                @endif

                    
            </div>
            <div class="col-sm-6">
                    <!-- Qrcode Path Field -->
                    <div class="form-group">
                            {!! Form::label('qrcode_path', 'Scan & pay with our App') !!}
                            <p>
                            <img src="{{ asset($qrcode->qrcode_path) }}" alt="{!! $qrcode->qrcode_path !!}"></p>
                        </div>
                </div>
</div>