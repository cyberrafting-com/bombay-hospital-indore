<!DOCTYPE html>
<html>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

<head>
    <title>Admin - View Data</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }

        th,
        td {
            padding: 10px;
            text-align: left;
            border: 1px solid #ddd;
        }

        th {
            text-align: center;
        }

        .wrapper {
            display: flex;
        }


        .sidebar {
            background-color: #0d6efd !important;
            padding: 15px;
            width: 250px;
            overflow-y: auto;
        }

        .content {
            flex-grow: 1;
            padding: 15px;
            overflow-x: auto;
        }

        .sidebar-row {
            margin-bottom: 10px;
            color: white;
            text-align: center;
            margin-top: 2rem
        }

        .btn-custom {
            background: none;
            border: none;
            color: white;
            cursor: pointer;
            padding: 10px 20px;
            text-align: left;
            width: 100%;
        }

        .btn-custom:hover {
            background-color: rgb(255, 136, 0);
        }
    </style>
</head>

<body>

    <div class="wrapper">
        <div class="sidebar">
            <div class="sidebar-row">
                <a href="{{ route('logout') }}" class="btn btn-danger">Log Out</a>
            </div>
            <div class="sidebar-row">
                <a href="{{ route('viewDataByForm', ['form_name' => urlencode('Associate Consultant')]) }}"
                    class="btn btn-custom">Associate Consultant</a>
            </div>
            <div class="sidebar-row">
                <a href="{{ route('viewDataByForm', ['form_name' => urlencode('RMO')]) }}"
                    class="btn btn-custom">RMO</a>
            </div>
            <div class="sidebar-row">
                <a href="{{ route('viewDataByForm', ['form_name' => urlencode('Medical Administrator')]) }}"
                    class="btn btn-custom">Medical Administrator</a>
            </div>
            <div class="sidebar-row">
                <a href="{{ route('viewDataByForm', ['form_name' => urlencode('Medical Oncologist')]) }}"
                    class="btn btn-custom">Medical Oncologist</a>
            </div>
            <div class="sidebar-row">
                <a href="{{ route('viewDataByForm', ['form_name' => urlencode('Surgical Oncologist')]) }}"
                    class="btn btn-custom">Surgical Oncologist</a>
            </div>
            <div class="sidebar-row">
                <a href="{{ route('viewDataByForm', ['form_name' => urlencode('Radio Therapist')]) }}"
                    class="btn btn-custom">Radio Therapist</a>
            </div>
            <div class="sidebar-row">
                <a href="{{ route('viewDataByForm', ['form_name' => urlencode('Pediatrician')]) }}"
                    class="btn btn-custom">Pediatrician</a>
            </div>
            <div class="sidebar-row">
                <a href="{{ route('viewDataByForm', ['form_name' => urlencode('G.I. Surgeon')]) }}"
                    class="btn btn-custom">G.I. Surgeon</a>
            </div>
            <div class="sidebar-row">
                <a href="{{ route('viewDataByForm', ['form_name' => urlencode('Intensivist')]) }}"
                    class="btn btn-custom">Intensivist</a>
            </div>
            <div class="sidebar-row">
                <a href="{{ route('viewDataByForm', ['form_name' => urlencode('Junior Resident Medical Officers')]) }}"
                    class="btn btn-custom">Junior Resident Medical Officers</a>
            </div>
        </div>
        <div class="content">
            <h2 class="text-center  m-4">Admin - View Data</h2>
            <table class="table table-striped">
                <thead class="bg-primary text-white">
                    <tr>
                        <th class="text-center">Name</th>
                        <th class="text-center">Date & Time</th>
                        <th class="text-center">Mobile Number</th>
                        <th class="text-center">Email</th>
                        <th class="text-center">Applied From</th>
                        <th class="text-center">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($personalInformations as $personalInformation)
                        <tr>
                            <td>{{ $personalInformation->name }}</td>
                            <td>{{ $personalInformation->date_time}}</td>
                            <td>{{ $personalInformation->mobile }}</td>
                            <td>{{ $personalInformation->email }}</td>
                            <td>{{ $personalInformation->form_name }}</td>
                            <td>
                                <a href="{{ route('viewDetails', ['id' => $personalInformation->id]) }}">View More</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</body>

</html>
