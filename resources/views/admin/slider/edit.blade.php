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
                <h4>Edit Slider</h4>
            </div>
            <div class="card-body">
                <form action="{{ route('admin.slider.update', $slider->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label>Preview</label> <br>
                       <img src="{{ asset($slider->banner) }}" class="img-fluid " width="200px" alt="{{ __('') }}">
                    </div>
                    <div class="form-group">
                        <label>Banner</label>
                        <input type="file" name="banner" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Type</label>
                        <input type="text" name="type" value="{{ $slider->type }}" class="form-control">
                     </div>
                    <div class="form-group">
                        <label>Title</label>
                        <input type="text" name="title" value="{{ $slider->title }}"class="form-control">
                     </div>
                    <div class="form-group">
                        <label>Starting price</label>
                        <input type="text" name="starting_price"value="{{ $slider->starting_price }}" class="form-control">
                     </div>
                    <div class="form-group">
                        <label>Button Url</label>
                        <input type="url" name="btn_url" value="{{ $slider->btn_url }}" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Serial</label>
                        <input type="text" name="serial" value="{{ $slider->serial }}" class="form-control">
                    </div>
                    <div class="form-group ">
                        <label for="inputState">State</label>
                        <select id="inputState" class="form-control" name="status">
                          <option {{ $slider->status==1 ? 'selected' : '' }} value="1" >Active</option>
                          <option {{ $slider->status==0 ? 'selected' : '' }} value="0" >Inactive</option>
                        </select>
                    </div>
                      <button class="btn btn-primary" type="submit">Submit</button>
                </form>
            </div>

          </div>
        </div>
      </div>
    </div>
  </section>
@endsection
