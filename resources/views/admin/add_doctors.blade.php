@extends('admin.mainDesign')

@section('add_doctors')
    <form action="" method="post" enctype="multipart/form-data">
        <div class="mb-3">
            <label for="doctor_name" class="form-label">Doctors Name :</label>
            <input type="text" name="doctor_name" id="doctor_name" class="form-control" aria-describedby="helpId" />
        </div>
        <div class="mb-3">
            <label for="doctor_phone" class="form-label">Doctors Phone No. :</label>
            <input type="text" name="doctor_phone" id="doctor_phone" class="form-control" aria-describedby="helpId" />
        </div>
        <div class="mb-3">
            <label for="doctor_name" class="form-label">Speciality :</label>
            <input type="text" name="doctor_name" id="doctor_name" class="form-control" aria-describedby="helpId" />
        </div>
        <div class="mb-3">
            <label for="room_number" class="form-label">Doctors Room No. :</label>
            <input type="text" name="room_number" id="room_number" class="form-control" aria-describedby="helpId" />
        </div>
        <div class="mb-3">
            <label for="doctor_image" class="form-label">Doctors Image :</label>
            <input type="file" name="doctor_image" id="doctor_image" class="form-control" aria-describedby="helpId" />
        </div>
        <div class="mb-3">
            <input type="submit" name="submit" class="btn btn-primary p-2" value="Add Doctor" aria-describedby="helpId" />
        </div>

    </form>
@endsection
