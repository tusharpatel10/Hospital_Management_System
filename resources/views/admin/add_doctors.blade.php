@extends('admin.mainDesign')

@section('add_doctors')
    <form action="{{ route('post_add_doctor') }}" method="post" enctype="multipart/form-data">
        @csrf
        @if (session('doctor_addmessage'))
            <div class="bg bg-primary p-3 mb-3">
                {{ session('doctor_addmessage') }}
            </div>
        @endif
        <div class="mb-3">
            <label for="doctor_name" class="form-label">Doctors Name :</label>
            <input type="text" name="doctor_name" id="doctor_name" class="form-control" aria-describedby="helpId" />
        </div>
        <div class="mb-3">
            <label for="doctor_phone" class="form-label">Doctors Phone No. :</label>
            <input type="text" name="doctor_phone" id="doctor_phone" class="form-control" aria-describedby="helpId" />
        </div>
        <div class="mb-3">
            <label for="speciality" class="form-label">Speciality :</label>
            <input type="text" name="speciality" id="speciality" class="form-control" aria-describedby="helpId" />
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
            <input type="submit" name="submit" class="btn btn-primary p-2" value="add doctor" />
        </div>
    </form>
@endsection
