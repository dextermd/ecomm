@extends('admin.layouts.master')

@section('content')

    <section class="section">
        <div class="section-header">
            <h1>Category</h1>
        </div>

        <div class="section-body">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Create Category</h4>
                        </div>
                        <div class="card-body">
                            <form action="{{route('admin.category.update', $category->id)}}" method="POST">
                                @csrf
                                @method('PUT')

                                <div class="form-group">
                                    <label>Icon</label>
                                    <div class="pb-3">
                                        <button data-icon="{{$category->icon}}" data-unselected-class="btn" name="icon" class="btn btn-info" data-icon="fab fa-twitter"  role="iconpicker"></button>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Name</label>
                                    <input type="text" class="form-control" name="name" value="{{$category->name}}">
                                </div>
                                <div class="form-group">
                                    <label for="inputStatus">Status</label>
                                    <select id="inputStatus" class="form-control" name="status">
                                        <option {{$category->status == 1 ? 'selected' : ''}} value="1">Active</option>
                                        <option {{$category->status == 0 ? 'selected' : ''}} value="0">Inactive</option>
                                    </select>
                                </div>
                                <button type="submit" class="btn btn-primary">Update</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

