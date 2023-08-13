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
                <h4>Edit Category</h4>
            </div>
            <div class="card-body">
                <form action="{{ route('admin.category.update',$category->id) }}" method="POST">
                    @csrf
                    @method('PUT')

                    <div class="form-group">
                        <label>Icon</label> <br>
                        <button class="btn btn-info" data-selected-class="btn-info" data-icon="{{ $category->icon }}" name="icon" data-unselected-class="btn-primary" role="iconpicker"></button>
                    </div>
                    <div class="form-group">
                        <label>Name</label>
                        <input type="text" name="name" value="{{ $category->name }}" class="form-control">
                    </div>

                    <div class="form-group ">
                        <label for="inputState">State</label>
                        <select id="inputState" class="form-control" name="status">
                          <option {{ $category->status==1 ? 'selected' : '' }}  value="1" >Active</option>
                          <option  {{ $category->status==0 ? 'selected' : '' }} value="0">Inactive</option>
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
