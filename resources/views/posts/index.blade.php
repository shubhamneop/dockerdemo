@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">

        <div class="col-md-8">
        <td><a href="{{url('posts/create')}}" class="btn btn-success">Create post</a>  </td>
         <br><br>
          <table class="table table-boared">
           <tr> <th>#</th><th>Post</th><th>By User</th> <th colspan="3">Action</th> </tr>
            @foreach($posts as $post)
            <tr>
            <td>{{$loop->iteration}}</td>
            <td>{{$post->post_data}}</td>
            <td>{{$post->users->name}}</td>
            <td>    <a href="{{url('posts/'.$post->id)}}" class="btn btn-info">Show</a>
            </td>
            <td><a href="{{url('posts/'.$post->id.'/edit')}}" class="btn btn-warning">Edit</a>  </td>
           <td>
          <form action="{{action('PostController@destroy', $post->id)}}" method="post">
            @csrf
            <input name="_method" type="hidden" value="DELETE">
            <button class="btn btn-danger" type="submit" onclick="return confirm(&quot;Confirm delete?&quot;)">Delete</button>
          </form>
          </td>
            </tr>
          @endforeach
          </table>

          <?php phpinfo() ?>

        </div>
    

    </div>
</div>
@endsection
