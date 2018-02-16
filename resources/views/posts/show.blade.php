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
                        <textarea name = "body"  placeholder = "your comment" class = "form-control"></textarea>
                    </div>
                    <div class = "form-group">
                        <input  type="hidden"  value ="{{$post->id}}"  class="form-control"  id="post_id"  name="post_id"  > 
                        
                    </div>
                     <div class="form-group">      
                            <input type="hidden" name="user_id" value={!! Auth::user()->id !!}>
                    </div>
                     <div class="form-group col-sm-12">      
                        <input type="hidden" name="user_name" value={!! Auth::user()->name !!}>
                    </div>

                    <div class ="form-group">
                    <div class="form-group col-sm-12">
    
                        <!-- <input  type="hidden"  value ="{{Auth::user()->post_id}}"  class="form-control" . id="body"  name="post_id"   required> -->
    

                        <button type ="submit" class = "btn btn-primary">Add comment</button>
                    </div>
                </Form>
            </div>
        </div>
    </div>
@endsection
