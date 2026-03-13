@extends('admin.mainDesign')

@section('view_doctors')
    <div class="table-responsive">
        <h1>Doctor's List</h1>
        <table class="table table-dark">
            <thead>
                <tr class="text-center">
                    <th>No.</th>
                    <th>Doctors Name</th>
                    <th>Phone No.</th>
                    <th>Specialities</th>
                    <th>Room No.</th>
                    <th>Doctor Images</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($doctors as $doctor)
                    <tr class="text-center">
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $doctor->doctors_name }}</td>
                        <td>{{ $doctor->doctors_phone }}</td>
                        <td>{{ $doctor->speciality }}</td>
                        <td>{{ $doctor->room_number }}</td>
                        <td><img src="{{ asset('project_img/' . $doctor->doctor_image) }}" alt="{{ $doctor->doctor_image }}"
                                style="width: 60px;height:60px;"></td>

                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
