<!-- File Title Field -->
<div class="form-group col-sm-6">
    {!! Form::label('file_title', 'File Title:') !!}
    {!! Form::text('file_title', null, ['class' => 'form-control']) !!}
</div>

<!-- File Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('file_name', 'File Name:') !!}
    {!! Form::text('file_name', null, ['class' => 'form-control']) !!}
</div>

<!-- Image Path Field -->
<div class="form-group col-sm-6">

      <input type="file" name="file" class="myfrm form-control" multiple="">
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('archives.index') !!}" class="btn btn-default">Cancel</a>
</div>
