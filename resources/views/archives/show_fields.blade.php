<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{!! $archive->id !!}</p>
</div>

<!-- User Field -->
<div class="form-group">
    {!! Form::label('user', 'User:') !!}
    <p>{!! $archive->user !!}</p>
</div>

<!-- File Title Field -->
<div class="form-group">
    {!! Form::label('file_title', 'File Title:') !!}
    <p>{!! $archive->file_title !!}</p>
</div>

<!-- File Name Field -->
<div class="form-group">
    {!! Form::label('file_name', 'File Name:') !!}
    <p>{!! $archive->file_name !!}</p>
</div>

<!-- Image Path Field -->
<div class="form-group">
    {!! Form::label('image_path', 'Image Path:') !!}
    <p>{!! $archive->image_path !!}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{!! $archive->created_at !!}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{!! $archive->updated_at !!}</p>
</div>

