<!-- Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('name', 'Nom et Prénom:') !!}
    {!! Form::text('name', null, ['class' => 'form-control']) !!}
</div>

<!-- Email Field -->
<div class="form-group col-sm-6">
    {!! Form::label('email', 'Email:') !!}
    {!! Form::text('email', null, ['class' => 'form-control']) !!}
</div>

<!-- Password Field -->
<div class="form-group col-sm-6">
    {!! Form::label('password', 'Password:') !!}
    {!! Form::text('password', null, ['class' => 'form-control']) !!}
</div>

<!-- Role -->
<div class="form-group col-sm-3">
    {!! Form::label('Role', 'Role:') !!}
    {!! Form::select('role_id', $roles, null, ['class' => 'form-control']) !!}
</div>