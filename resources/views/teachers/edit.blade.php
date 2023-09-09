<div class="row">
    <h4>Teacher</h4>
    <div class="col-md-4 mb-3">
        <label>Name</label>
        <input type="text" name="name" value="{{ $teacher->name }}" class="form-control" />
    </div>
    <div class="col-md-4 mb-3">
        <label>Email</label>
        <input type="text" name="email" value="{{ $teacher->email }}" class="form-control" />
    </div>
    <div class="col-md-4 mb-3">
        <label>Phone</label>
        <input type="text" name="phone" value="{{ $teacher->phone }}" class="form-control" />
    </div>
</div>


<div class="row">
    <h4>Student Details</h4>
    <div class="mb-3 col-md-4">
        <label>Alternate Phone</label>
        <input type="text" name="alternate_phone" value="{{ $teacher->teacherDetail->alternate_phone }}" class="form-control" />
    </div>
    <div class="mb-3 col-md-4">
        <label>City</label>
        <input type="text" name="city" value="{{ $teacher->teacherDetail->city }}" class="form-control" />
    </div>
    <div class="mb-3 col-md-4">
        <label>Address</label>
        <input type="text" name="address" value="{{ $teacher->teacherDetail->address }}" class="form-control" />
    </div>
    <div class="mb-3 col-md-12">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>










{{-- <div class="row">
  <h4>Teacher Details</h4>
  <div class="mb-3 col-md-4">
      <label>Alternate Phone</label>
      <input type="text" name="alternate_phone" value="{{ $teacher->alternate_phone }}" class="form-control" />
  </div>
  <div class="mb-3 col-md-4">
      <label>City</label>
      <input type="text" name="course" value="{{ $teacher->city }}" class="form-control" />
  </div>
  <div class="mb-3 col-md-4">
      <label>Address</label>
      <input type="text" name="roll_no" value="{{ $teacher->address }}" class="form-control" />
  </div>
</div> --}}