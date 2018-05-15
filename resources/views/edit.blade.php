@extends('layouts.app')

@section('content')
    <div class="container">

        <form method="post" action="{{action('HomeController@update')}}">
            <div class="form-group row">
                {{csrf_field()}}
                <input name="id" type="hidden" value="{{$id}}">
                <label for="lgFormGroupInput" class="col-sm-2 col-form-label col-form-label-lg">Title</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control form-control-lg" id="lgFormGroupInput" placeholder="title"
                           name="title" value="{{$crud->name}}">
                </div>
            </div>
            <div class="form-group row">
                <label for="smFormGroupInput" class="col-sm-2 col-form-label col-form-label-sm">Post</label>
                <div class="col-sm-10">
                    <div class="col-sm-10">
                        <select name="type" id="type">
                            <option value="1">A skill</option>
                            <option value="2">Another skill</option>
                            <option value="3">Yet another skill</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="form-group row">
                <div class="col-md-2"></div>
                <button type="submit" class="btn btn-primary">Update</button>
            </div>
        </form>
    </div>
@endsection
