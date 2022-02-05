@extends('layouts.app')
@section('content')
    <div class="col-6 m-auto">
        <form  method="post" class="p-3 border border-primary" action="{{ route('feedback.store') }}"> 
            @csrf
            <div class="form-group row">
                <label class="col-3">Nội dung</label>
                <div class="col-9">
                    <textarea rows="5" cols="40" class="form-control" name="content"></textarea>
                </div>
                <span class="error-message">{{ $errors->first('message') }}</span>
            </div>
            <div class="form-group row">
                <div class="col-12">
                    <button type="submit" class="btn btn-primary">Feedback</button>
                </div>
            </div>
        </form> 
    </div>
@endsection