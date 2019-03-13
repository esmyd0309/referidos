<table class="table table-responsive" id="archives-table">
    <thead>
        <tr>
            <th>User</th>
        <th>File Title</th>
        <th>File Name</th>
        <th>Image Path</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($archives as $archive)
        <tr>
            <td>{!! $archive->user !!}</td>
            <td>{!! $archive->file_title !!}</td>
            <td>{!! $archive->file_name !!}</td>
            <td>{!! $archive->image_path !!}</td>
            <td>
                {!! Form::open(['route' => ['archives.destroy', $archive->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('media.ver', [$archive->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-download"></i></a>
                    <a href="{!! route('archives.edit', [$archive->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>