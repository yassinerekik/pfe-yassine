<!-- Nom Société Field -->
<div class="col-sm-12">
    {!! Form::label('nom_societe', 'Nom Société:') !!}
    <p>{{ $installateur->nom_societe }}</p>
</div>

<!-- Code Anme Field -->
<div class="col-sm-12">
    {!! Form::label('code_anme', 'Code Anme:') !!}
    <p>{{ $installateur->code_anme }}</p>
</div>

<!-- Code Steg Field -->
<div class="col-sm-12">
    {!! Form::label('code_steg', 'Code Steg:') !!}
    <p>{{ $installateur->code_steg }}</p>
</div>

<!-- Created At Field -->
<div class="col-sm-12">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $installateur->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="col-sm-12">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $installateur->updated_at }}</p>
</div>

