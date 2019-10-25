@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
        <td><a href="{{url('posts')}}" class="btn btn-success">Back</a>  </td>
         <br><br>
            <div class="card">
                <div class="card-header">{{ __('Post') }}</div>
 
                <div class="card-body">
                    <form method="POST" action="{{ url('posts/'.$posts->id) }}" aria-label="{{ __('posts') }}">
                        @csrf
                       {{method_field('PATCH')}}
                        <div class="form-group row">
                            <label for="post_data" class="col-sm-4 col-form-label text-md-right">{{ __('Post_data') }}</label>

                            <div class="col-md-6">
                                <input id="post_data" type="post_data" class="form-control{{ $errors->has('post_data') ? ' is-invalid' : '' }}" name="post_data"  value="{{$posts->post_data}}" required autofocus>
                              
                                @if ($errors->has('post_data'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('post_data') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                    


                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Post') }}
                                </button>

                              
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
