@extends('index')

@section('content')

<div class="container text-center">
    <h3>Calender of Event</h3> 
    <h6><strong>Academic Year {{ session('academic_year') }}</strong></h6>
</div>

@include('eventheader')

    <div class="container mt-3">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Sl No</th>
                    <th>Activity</th>
                    <th>Description</th>
                    <th>Date</th>
                    <th>Files</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($activities as $index => $activity)
                    <tr>
                        <td>{{ $index + 1 }}</td>
                        <td>{{ $activity->activity }}</td>
                        <td>{{ $activity->description }}</td>
                        <td>{{ $activity->date }}</td>
                        <td>
                            @if ($activity->files)
                                <a href="{{ asset($activity->files) }}" download>
                                    <i class="fa fa-download"></i>
                                </a>
                            @else
                                No file
                            @endif
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    </script>
@endsection
