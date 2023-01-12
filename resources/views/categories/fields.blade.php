<!-- Namecategory Field -->
<div class="form-group col-sm-6">
    {!! Form::label('namecategory', 'Namecategory:') !!}
    {!! Form::text('namecategory', null, ['class' => 'form-control']) !!}

    @if(!empty($category->Meta_id))
        <div><a href="{{ route('metaSeos.edit', $category->Meta_id??'') }}"> Thẻ seo nhóm tin tức</a> </div>
    @endif

    
</div>



