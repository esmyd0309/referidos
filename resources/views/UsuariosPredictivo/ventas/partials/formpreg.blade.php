
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Actualizar Extension</div>

                <div class="card-body">
                        <div class="form-group">
                            {{ form::label('user', 'user') }}
                            {{ form::text('user', null, ['class' => 'form-control']) }}
                        </div>

                        <div class="form-group">
                            {{ form::label('phone_login', 'Extension Actual') }}
                            {{ form::text('phone_login', null, ['class' => 'form-control','disabled']) }}
                        </div>


                        <div class="form-group">
                        {{ form::label('phone_login', 'Nueva   Extension ') }}
                        <select name="phone_login2" class="browser-default custom-select" class="form-control{{ $errors->has('phone_login') ? ' is-invalid' : ''  }}" autofocus  >
                        <option value="">---- Extension -----</option>
                            @foreach ($phone as $phones)
                        
                                <option value="{{ $phones->extension }}">{{ $phones->extension }} {{ $phones->login }}</option>
                            @endforeach
                            @if ($errors->has('phone_login'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('phone_login') }}</strong>
                                </span>
                            @endif
                        </select>
                        </div>


                </div>
                <center>
                        <div class="form-group">
                            {{ form::submit('Actualizar', ['class' => 'btn btn-sm btn-primary']) }}
|||||
                            <a href="javascript:window.history.back();" class="btn btn-success btn-sm">Volver</a>
                           
                        </div>
                </center>
            </div>
                        
        </div>
    </div>

</div>

