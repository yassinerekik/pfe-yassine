<!-- Reference Field -->
<div class="form-group col-sm-6">
    {!! Form::label('reference', 'Reference:') !!}
    {!! Form::text('reference', null, ['class' => 'form-control']) !!}
</div>

<!-- Installateur -->
<div class="form-group col-sm-3">
    {!! Form::label('Installateur', 'Installateur:') !!}
    {!! Form::select('installateur_id', $installateurs, null, ['class' => 'form-control']) !!}
</div>

<!-- District -->
<div class="form-group col-sm-3">
    {!! Form::label('district', 'District:') !!}
    {!! Form::select('district_id', $districts, null, ['class' => 'form-control']) !!}
</div>

<!-- Nom Client Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nom_client', 'Nom Client:') !!}
    {!! Form::text('nom_client', null, ['class' => 'form-control']) !!}
</div>

<!-- Puissance Field -->
<div class="form-group col-sm-6">
    {!! Form::label('puissance', 'Puissance:') !!}
    {!! Form::text('puissance', null, ['class' => 'form-control']) !!}
</div>

<!-- Type Ctr Field -->
<div class="form-group col-sm-6">
    {!! Form::label('type_ctr', 'Type Ctr:') !!}
    {!! Form::text('type_ctr', null, ['class' => 'form-control']) !!}
</div>

<!-- Num Ctr Pose Field -->
<div class="form-group col-sm-6">
    {!! Form::label('num_ctr_pose', 'Num Ctr Pose:') !!}
    {!! Form::text('num_ctr_pose', null, ['class' => 'form-control']) !!}
</div>

<!-- Date Arriv Dossier Technique Field -->
<div class="form-group col-sm-6">
    {!! Form::label('date_arriv_dossier_technique', 'Date Arriv Dossier Technique:') !!}
    {!! Form::text('date_arriv_dossier_technique', null, ['class' => 'form-control','id'=>'date_arriv_dossier_technique']) !!}
</div>

 <!-- Date Arriv Dossier Technique Field -->
<div class="form-group col-sm-6">
    {!! Form::label('date_approbation_technique', 'Date Arriv Dossier Technique:') !!}
    {!! Form::text('date_approbation_technique', null, ['class' => 'form-control','id'=>'date_approbation_technique']) !!}
</div>

@push('page_scripts')
    <script type="text/javascript">
        $('#date_arriv_dossier_technique').datetimepicker({
            format: 'YYYY-MM-DD HH:mm:ss',
            useCurrent: true,
            sideBySide: true
        })
        $('#date_approbation_technique').datetimepicker({
            format: 'YYYY-MM-DD HH:mm:ss',
            useCurrent: true,
            sideBySide: true
        })
    </script>
@endpush

<!-- Commentaire Technique Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('commentaire_technique', 'Commentaire Technique:') !!}
    {!! Form::textarea('commentaire_technique', null, ['class' => 'form-control']) !!}
</div>

<!-- Commentaire Commerciale Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('commentaire_commerciale', 'Commentaire Commerciale:') !!}
    {!! Form::textarea('commentaire_commerciale', null, ['class' => 'form-control']) !!}
</div>

<!-- Commentaire Réception Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('commentaire_réception', 'Commentaire Réception:') !!}
    {!! Form::textarea('commentaire_réception', null, ['class' => 'form-control']) !!}
</div>