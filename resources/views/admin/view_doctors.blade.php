@extends('admin.mainDesign')

@section('view_doctors')
    <div class="table-responsive">
        <h1>Doctor's List</h1>
        @if (session())
            <div class="bg bg-primary text-">
                {{ session('delete_message') }}
            </div>
        @else
            <div class="bg bg-primary">
            </div>
        @endif
        <table class="table table-dark">
            <thead>
                <tr class="text-center" style="background-color: lightblue">
                    <th style="color: black">No.</th>
                    <th style="color: black">Doctors Name</th>
                    <th style="color: black">Phone No.</th>
                    <th style="color: black">Specialities</th>
                    <th style="color: black">Room No.</th>
                    <th style="color: black">Doctor Images</th>
                    <th style="color: black">Action</th>
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
                        <td><a class="btn btn-danger btn-sm" href="{{ route('delete_doctors', $doctor->id) }}"
                                onclick="return confirm('Are you Sure!  You want to Delete?')">Delete</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
