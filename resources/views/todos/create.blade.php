@extends('Layout.app')
@section('title ')
    New Todo   
@endsection
@section('content')
    <h1  class="text-center my-5">
        Create Todo
    </h1>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card card-default">
                <div class="card">
                    <div class="card-header">Create New Todo </div>
                    <div class="card-body">
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul class="list-group">
                                    @foreach ($errors->all() as $error)
                                        <li class="list-group-item">
                                            {{ $error }}
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <form  action="/storeTodo" method="post">
                            @csrf
                            <div class="form-group">
                                <label for="exampleInputEmail1">Name</label>
                                <input type="text" class="form-control" name="name"  placeholder="Enter Name">
                            </div>
                            <div class="form-group">
                                <label for="">description</label>
                                <textarea class="form-control"  name="description" id="" rows="3"> </textarea>
                            </div>
                            <div class="from-group text-center">
                                <button  type="submit" class="btn btn-primary ">Create Todo</button>

                            </div>
                        </form>
                        
                    </div>
                </div>
            </div>
             
        </div>
    </div>
@endsection