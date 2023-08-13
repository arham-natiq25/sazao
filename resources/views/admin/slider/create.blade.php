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
                <form action="{{ route('admin.slider.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label>Banner</label>
                        <input type="file" name="banner" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Type</label>
                        <input type="text" name="type" value="{{ old('type') }}" class="form-control">
                     </div>
                    <div class="form-group">
                        <label>Title</label>
                        <input type="text" name="title" value="{{ old('title') }}"class="form-control">
                     </div>
                    <div class="form-group">
                        <label>Starting price</label>
                        <input type="text" name="starting_price"value="{{ old('starting_price') }}" class="form-control">
                     </div>
                    <div class="form-group">
                        <label>Button Url</label>
                        <input type="url" name="btn_url" value="{{ old('btn_url') }}" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Serial</label>
                        <input type="text" name="serial" value="{{ old('serial') }}" class="form-control">
                    </div>
                    <div class="form-group ">
                        <label for="inputState">State</label>
                        <select id="inputState" class="form-control" name="status">
                          <option value="1" >Active</option>
                          <option value="0">Inactive</option>
                        </select>
                    </div>
                      <button class="btn btn-primary" type="submit">Create</button>
                </form>
            </div>

          </div>
        </div>
      </div>
    </div>
  </section>
@endsection
