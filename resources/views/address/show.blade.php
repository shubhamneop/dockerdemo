@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">

        <div class="col-md-10">
        <td><a href="{{url('address')}}" class="btn btn-success"> Back</a>  </td>
         <br><br>
      
          <table class="table table-boared">
           <tr> <th>#</th><th>Address</th><th>City</th><th>State</th><th>Zipcode</th><th>Mobile no</th><th>By User</th> <th colspan="3">Action</th> </tr>
            <tr>
            <td>{{$address->id}}</td>
            <td>{{$address->address}}</td>
            <td>{{$address->city}}</td>
            <td>{{$address->state}}</td>
            <td>{{$address->zipcode}}</td>
            <td>{{$address->mobile}}</td>
            <td>{{$address->user_id}}</td>
            
            </tr>
        
          </table>


        </div>
    

    </div>
</div>
@endsection
