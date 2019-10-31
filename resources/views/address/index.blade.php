@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">

        <div class="col-md-10">
        <td><a href="{{url('address/create')}}" class="btn btn-success">Create Address</a>  </td>
         <br><br>
         @if($message = Session::get('success'))
                  <div class="alert alert-success">
                  <button type="button" class="close" data-dismiss="alert">×</button>
                      <p>{{$message}}</p>
                </div>
                <?php Session::forget('success');?>

             @endif
          <table class="table table-boared">
           <tr> <th>#</th><th>Address</th><th>City</th><th>State</th><th>Zipcode</th><th>Mobile no</th><th>By User</th> <th colspan="3">Action</th> </tr>
            @foreach($addresss as $Address)
            <tr>
            <td>{{$Address->id}}</td>
            <td>{{$Address->address}}</td>
            <td>{{$Address->city}}</td>
            <td>{{$Address->state}}</td>
            <td>{{$Address->zipcode}}</td>
            <td>{{$Address->mobile}}</td>
            <td>{{$Address->user_id}}</td>
            <td>    <a href="{{url('address/'.$Address->id)}}" class="btn btn-info">Show</a>
            </td>
            <td><a href="{{url('address/'.$Address->id.'/edit')}}" class="btn btn-warning">Edit</a>  </td>
           <td>
          <form action="{{action('AddressController@destroy', $Address->id)}}" method="post">
            @csrf
            <input name="_method" type="hidden" value="DELETE">
            <button class="btn btn-danger" type="submit" onclick="return confirm(&quot;Confirm delete?&quot;)">Delete</button>
          </form>
          </td>
            </tr>
          @endforeach
          </table>


        </div>
    

    </div>
</div>
@endsection
