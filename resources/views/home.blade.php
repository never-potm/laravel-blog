@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Dashboard</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success">
                                {{ session('status') }}
                            </div>
                        @endif

                        <div class="container">

                            <table class="table table-striped">
                                <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Title</th>
                                    <th>Post</th>
                                    <th>Edit</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($cruds as $post)
                                    <tr>
                                        <td>{{$post['id']}}</td>
                                        <td>{{$post['name']}}</td>
                                        <td>{{$post['type']}}</td>
                                        <td><a href="{{route('getEdit', ['id' => $post['id']])}}">Edit</a></td>
                                    </tr>
                                @endforeach

                                </tbody>
                            </table>

                            <form>
                                <div class="form-group row">
                                    <label for="lgFormGroupInput" class="col-sm-2 col-form-label col-form-label-lg">Title</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control form-control-lg" id="lgFormGroupInput"
                                               placeholder="title" name="title">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="smFormGroupInput"
                                           class="col-sm-2 col-form-label col-form-label-sm">Post</label>
                                    <div class="col-sm-10">
                                        <select name="type" id="type">
                                            <option value="1">A skill</option>
                                            <option value="2">Another skill</option>
                                            <option value="3">Yet another skill</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-md-2"></div>
                                    <input type="submit" class="btn btn-primary">
                                </div>
                            </form>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
