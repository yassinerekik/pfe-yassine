<div class="table-responsive">
    <table class="table" id="dossiers-table">
        <thead>
        <tr>
            <th>Reference</th>
            <th>Nom Client</th>
            <th>Puissance</th>
            <th>Type Ctr</th>
            <th>Num Ctr Pose</th>
            <!-- <th>Date Arriv Dossier Technique</th>
            <th>Commentaire Technique</th>
            <th>Date Approbation Technique</th>
            <th>Date Arriv Dossier Commerciale</th>
            <th>Commentaire Commerciale</th>
            <th>Date Approbation Commerciale</th>
            <th>Date Réception Technique</th>
            <th>Commentaire Réception</th>
            <th>Date Mise En Service</th> -->
            <th colspan="3">Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($dossiers as $dossier)
            <tr>
                <td>{{ $dossier->reference }}</td>
                <td>{{ $dossier->nom_client }}</td>
                <td>{{ $dossier->puissance }}</td>
                <td>{{ $dossier->type_ctr }}</td>
                <td>{{ $dossier->num_ctr_pose }}</td>
                <!-- <td>{{ $dossier->date_arriv_dossier_technique }}</td>
                <td>{{ $dossier->commentaire_technique }}</td>
                <td>{{ $dossier->date_approbation_technique }}</td>
                <td>{{ $dossier->date_arriv_dossier_commerciale }}</td>
                <td>{{ $dossier->commentaire_commerciale }}</td>
                <td>{{ $dossier->date_approbation_commerciale }}</td>
                <td>{{ $dossier->date_reception_technique }}</td>
                <td>{{ $dossier->commentaire_réception }}</td>
                <td>{{ $dossier->date_mise_en_service }}</td> -->
                <td width="120">
                    {!! Form::open(['route' => ['dossiers.destroy', $dossier->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('dossiers.show', [$dossier->id]) }}"
                           class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('dossiers.edit', [$dossier->id]) }}"
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
