<!-- Title field -->
<div class="form-group">
    {!! Form::label('title', 'Title:') !!}
    <p>{!! $post->title !!}</p>

<div class="form-group">
    {!! Form::label('body', 'Body:') !!}
    <p>{!! $post->body !!}</p>
</div>
<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{!! $post->id !!}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{!! $post->created_at !!}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{!! $post->updated_at !!}</p>
</div>

 {{--  <div class = "card">
            <div class = "card-block">
                <Form>
                    <div class = "form-group">
                        <textarea name = "body" placeholder = "your comment" class = "form-control"></textarea>
                    </div>=
                </Form>
            </div>
        </div  --}}