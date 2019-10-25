@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
        <td><a href="{{url('posts')}}" class="btn btn-success">Back</a>  </td>
         <br><br>

          <table class="table table-boared">
           <tr><th>Post</th><th>By User</th> </tr>
            
            <tr>
           <td>{{$posts->post_data}}</td>
            <td>{{$posts->users->name}}</td>
            </tr>
          
          </table>
                       
            
        </div>
    </div>
</div>
@endsection
