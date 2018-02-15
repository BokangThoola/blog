<table class="table table-responsive" id="posts-table">
    <thead>
        
        <th colspan="3">List of Posts</th>

    </thead>

    
    <tbody>
    @foreach($posts as $post)
       
         <tr>
             
        
            <td>
                {!! Form::open(['route' => ['posts.destroy', $post->id], 'method' => 'delete']) !!}
                 {{csrf_field()}}
                <div class='btn-group'>
                
            
                <div class="form-group">
                    <label for = "title">{{$post->title}}</label>
                </div>
                
                <div class="form-group">
                
                    <p name="body" id="body">{{$post->body}}</p>
                </div>
                <hr>
                <div class="comments">
                <ul class="list-group">
                    @foreach($post->comments as $comment)
                        <li class= "list-item-group">
                        <strong>
                            {{$comment->created_at->diffForHumans()}}
                        </strong>
                        {{$comment->body}}
                        </li>

                    @endforeach
                
                </ul>
                </div>

                
             
             
                    <a href="{!! route('posts.show', [$post->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('posts.edit', [$post->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>