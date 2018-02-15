@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Post
        </h1>
    </section>
    <div class="content">
        <div class="box box-primary">
            <div class="box-body">
                <div class="row" style="padding-left: 20px">
                    @include('posts.show_fields')
                    <a href="{!! route('posts.index') !!}" class="btn btn-default">Back</a>
                </div>
            </div>
        </div>

        {{--  comments  --}}
         <div class = "card">
            <div class = "card-block">
                <Form method ="POST" action="/posts/{{$post->id}}/comments">
                 {{csrf_field()}}
                    <div class = "form-group">
                        <textarea name = "body" placeholder = "your comment" class = "form-control"></textarea>
                    </div>

                    <div class ="form-group">
                        <button type ="submit" class = "btn btn-primary">Add comment</button>
                    </div>
                </Form>
            </div>
        </div
    </div>
@endsection
