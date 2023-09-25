@extends('admin.layouts.master')

@section('content')

    <section class="section">
        <div class="section-header">
            <h1>Slider</h1>

        </div>

        <div class="section-body">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Create Slider</h4>

                        </div>
                        <div class="card-body">
                            <form action="{{route('admin.slider.store')}}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <label>Banner</label>
                                    <input type="file" class="form-control" name="banner">
                                </div>
                                <div class="form-group">
                                    <label>Text Top</label>
                                    <input type="text" class="form-control" name="text_top" value="{{old('text_top')}}">
                                </div>
                                <div class="form-group">
                                    <label>Text Center</label>
                                    <input type="text" class="form-control" name="text_center" value="{{old('text_center')}}">
                                </div>
                                <div class="form-group">
                                    <label>Text Bottom</label>
                                    <input type="text" class="form-control" name="text_bottom" value="{{old('text_bottom')}}">
                                </div>
                                <div class="form-group">
                                    <label>URL</label>
                                    <input type="text" class="form-control" name="url" value="{{old('url')}}">
                                </div>
                                <div class="form-group">
                                    <label>Serial</label>
                                    <input type="number" class="form-control" name="serial" value="{{old('serial')}}">
                                </div>
                                <div class="form-group">
                                    <label for="inputStatus">Status</label>
                                    <select id="inputStatus" class="form-control" name="status">
                                        <option value="1">Active</option>
                                        <option value="0">Inactive</option>
                                    </select>
                                </div>
                                <button type="submit" class="btn btn-primary">Create</button>
                            </form>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
