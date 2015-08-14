{{--  Name text field --}}
<div class="form-group">
    {!! Form::label('title', 'Заголовок новости') !!}
    {!! Form::text('title', null, ['class' => 'form-control']) !!}
</div>

{{--  Body text field --}}
<div class="form-group">
    {!! Form::label('body', 'Новость') !!}
    {!! Form::textarea('body', null, ['class' => 'form-control']) !!}
</div>


{{--  Published_at text field --}}
<div class="form-group">
    {!! Form::label('published_at', 'Дата создания') !!}
    {!! Form::input('date', 'published_at', $article->published_at->format('Y-m-d'), ['class' => 'form-control']) !!}
</div>
{{--  Tags text field --}}
<div class="form-group">
    {!! Form::label('tag_list', 'Тэги для новости') !!}
    {!! Form::select('tag_list[]', $tagsList, null, ['class' => 'form-control', 'multiple']) !!}
</div>

<div class="form-group">
    {!! Form::submit($buttonText, array('class' => 'form-control btn btn-success')) !!}
</div>