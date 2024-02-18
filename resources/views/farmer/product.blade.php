@extends('layout.header')
@section('homeContents')
<div class="container w-75">
    <form>
    <div class="form-group">
        <label  for="name" class="fs-3 mt-3">Name:</label>
        <input type="text" id="name" name="name" class="form-control fs-3" required />
    </div>  
    <div class="form-group">
        <label  for="description" class="fs-3 mt-3">Description:</label>
        <textarea id="description" name="description" class="form-control fs-3" required></textarea>
    </div>
    <div class="form-group">
        <label for="price" class="fs-3 mt-3">Price:</label>
        <input type="number" id="price" name="price" class="form-control fs-3" required>
    </div>
    <div class="form-group">
        <label for="file" class="fs-3 mt-3">Add Image</label>
        <input type="file" id="file" name="file" class="form-control-file fs-3" accept=".pdf,.jpg,.png" required>
    </div>
    <button type="submit" class="btn btn-primary fs-3 mt-3">Add</button>
    </form>
    <div class="mt-5">
    <table class="table">
  <thead class="table-light">
     <tr>
        <th>SN</th>
        <th>Image</th>
        <th>Name</th>
        <th>Price</th>
        <th>Action</th>
     </tr>
  </thead>
  <tbody>
      <tr>
        <th>1</th>
        <th>
            <img  src="" />
        </th>
        <th>Tool</th>
        <th>100</th>
        <th>
            <div class="d-flex" style="gap:10px">
               <button class="btn btn-danger">Delete</button>
               <button class="btn btn-warning">Update</button>
            </div>
        </th>
      </tr>
  </tbody>
</table>
    </div>
</div>

@endsection