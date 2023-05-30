<div class="table-responsive">
    <table class="table" id="installateurs-table">
        <thead>
        <tr>
            <th>Nom Société</th>
        <th>Code Anme</th>
        <th>Code Steg</th>
            <th colspan="3">Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($installateurs as $installateur)
            <tr>
                <td>{{ $installateur->nom_societe }}</td>
            <td>{{ $installateur->code_anme }}</td>
            <td>{{ $installateur->code_steg }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['installateurs.destroy', $installateur->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('installateurs.show', [$installateur->id]) }}"
                           class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('installateurs.edit', [$installateur->id]) }}"
                           class='btn btn-default btn-xs'>
                            <i class="far fa-edit"></i>
                        </a>
                        {!! Form::button('<i class="far fa-trash-alt"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
