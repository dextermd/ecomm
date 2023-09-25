@extends('admin.layouts.master')

@section('content')

    <section class="section">
        <div class="section-header">
            <h1>Edit Slider</h1>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Create Slider</h4>

                        </div>
                        <div class="card-body">
                            <form action="{{route('admin.slider.update', $slider->id)}}" method="post" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class="form-group">
                                    <label>Preview</label><br>
                                    <img width="150px" src="{{asset($slider->banner)}}" alt="slider">
                                </div>
                                <div class="form-group">
                                    <label>Banner</label>
                                    <input type="file" class="form-control" name="banner">
                                </div>
                                <div class="form-group">
                                    <label>Text Top</label>
                                    <input type="text" class="form-control" name="text_top" value="{{$slider->text_top}}">
                                </div>
                                <div class="form-group">
                                    <label>Text Center</label>
                                    <input type="text" class="form-control" name="text_center" value="{{$slider->text_center}}">
                                </div>
                                <div class="form-group">
                                    <label>Text Bottom</label>
                                    <input type="text" class="form-control" name="text_bottom" value="{{$slider->text_bottom}}">
                                </div>
                                <div class="form-group">
                                    <label>URL</label>
                                    <input type="text" class="form-control" name="url" value="{{$slider->url}}">
                                </div>
                                <div class="form-group">
                                    <label>Serial</label>
                                    <input type="number" class="form-control" name="serial" value="{{$slider->serial}}">
                                </div>
                                <div class="form-group">
                                    <label for="inputStatus">Status</label>
                                    <select id="inputStatus" class="form-control" name="status">
                                        <option {{$slider->status == 1 ? 'selected' : ''}} value="1">Active</option>
                                        <option {{$slider->status == 0 ? 'selected' : ''}} value="0">Inactive</option>
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
