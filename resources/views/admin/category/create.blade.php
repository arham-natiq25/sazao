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
                <form action="{{ route('admin.category.store') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label>Icon</label> <br>
                        <button class="btn btn-info" data-selected-class="btn-info" name="icon" data-unselected-class="btn-primary" role="iconpicker"></button>
                    </div>
                    <div class="form-group">
                        <label>Name</label>
                        <input type="text" name="name" value="" class="form-control">
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
