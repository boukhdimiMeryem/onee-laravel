<div class="form-group {{ $errors->has('IC') ? 'has-error' : ''}}">
    <label for="IC" class="control-label">{{ 'Ic' }}</label>
    <input class="form-control" name="IC" type="text" id="IC" value="{{ isset($supernorme->IC) ? $supernorme->IC : ''}}" >
    {!! $errors->first('IC', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('Code_NM') ? 'has-error' : ''}}">
    <label for="Code_NM" class="control-label">{{ 'Code Nm' }}</label>
    <input class="form-control" name="Code_NM" type="text" id="Code_NM" value="{{ isset($supernorme->Code_NM) ? $supernorme->Code_NM : ''}}" >
    {!! $errors->first('Code_NM', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('Version_ NM') ? 'has-error' : ''}}">
    <label for="Version_ NM" class="control-label">{{ 'Version  Nm' }}</label>
    <input class="form-control" name="Version_ NM" type="number" id="Version_ NM" value="{{ isset($supernorme->Version_ NM) ? $supernorme->Version_ NM : ''}}" >
    {!! $errors->first('Version_ NM', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('Titre') ? 'has-error' : ''}}">
    <label for="Titre" class="control-label">{{ 'Titre' }}</label>
    <textarea class="form-control" rows="5" name="Titre" type="textarea" id="Titre" >{{ isset($supernorme->Titre) ? $supernorme->Titre : ''}}</textarea>
    {!! $errors->first('Titre', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('Origine') ? 'has-error' : ''}}">
    <label for="Origine" class="control-label">{{ 'Origine' }}</label>
    <input class="form-control" name="Origine" type="text" id="Origine" value="{{ isset($supernorme->Origine) ? $supernorme->Origine : ''}}" >
    {!! $errors->first('Origine', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('Version_Originale') ? 'has-error' : ''}}">
    <label for="Version_Originale" class="control-label">{{ 'Version Originale' }}</label>
    <input class="form-control" name="Version_Originale" type="text" id="Version_Originale" value="{{ isset($supernorme->Version_Originale) ? $supernorme->Version_Originale : ''}}" >
    {!! $errors->first('Version_Originale', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
