<!DOCTYPE html>
<html>


<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

<head>
    <title>Admin - View Details</title>
    {{-- <style>
        .wrapper {
            display: flex;
        }

        .sidebar {
            background-color: #0d6efd;
            padding: 15px;
            width: 250px;
            overflow-y: auto;
            height: 100vh;
        }

        .content {
            flex-grow: 1;
            padding: 15px;
        }

        .sidebar-row {
            margin-bottom: 10px;
            color: white;
            text-align: center;
            margin-top: 2rem;
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

        .btn-full-width {
            width: 100%;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th,
        td {
            padding: 10px;
            text-align: left;
            border: 1px solid #484747;
        }

        th {
            background-color: #0c9ab3;
            color: white;
            align-items: center;
            width: 25%;
        }

        td {
            font-size: 1.2rem;
        }
    </style> --}}
    <style>
        .wrapper {
            display: flex;
            min-height: 100vh;
        }

        .sidebar {
            background-color: #0d6efd;
            padding: 15px;
            width: 250px;
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
            margin-top: 2rem;
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

        .btn-full-width {
            width: 100%;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th,
        td {
            padding: 10px;
            text-align: left;
            border: 1px solid #484747;
        }

        th {
            background-color: #0c9ab3 !important;
            color: white;
            align-items: center;
            width: 25% !important;
        }

        td {
            font-size: 1.2rem;
        }
    </style>
</head>

<body>


    <div class="wrapper d-flex">
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
        <div class="container">
            <div class="content">
                <h2 class="text-center m-5">Admin - View Details</h2>
                <table class="table">
                    <tr>
                        <th>Name</th>
                        <td>{{ $personalInformation->name }}</td>
                    </tr>
                    <tr>
                        <th>Applied From</th>
                        <td>{{ $personalInformation->form_name }}</td>
                    </tr>
                    <tr>
                        <th>DOB</th>
                        <td>{{ $personalInformation->dob }}</td>
                    </tr>
                    <tr>
                        <th>Permanent Address</th>
                        <td>{{ $personalInformation->permanent_address }}</td>
                    </tr>
                    <tr>
                        <th>Current Address</th>
                        <td>{{ $personalInformation->current_address }}</td>
                    </tr>
                    <tr>
                        <th>Marital Status</th>
                        <td>{{ $personalInformation->marital_status }}</td>
                    </tr>
                    <tr>
                        <th>If married, details of Spouse</th>
                        <td>{{ $personalInformation->spouse_details }}</td>
                    </tr>
                    <tr>
                        <th>Mobile</th>
                        <td>{{ $personalInformation->mobile }}</td>
                    </tr>
                    <tr>
                        <th>Email</th>
                        <td>{{ $personalInformation->email }}</td>
                    </tr>
                    <tr>
                        <th>Medical Council Registration No (MBBS/BDS/BHMS)</th>
                        <td>{{ $personalInformation->medical_registration }}</td>
                    </tr>
                    <tr>
                        <th>State</th>
                        <td>{{ $personalInformation->state }}</td>
                    </tr>
                    <tr>
                        <th>Present Remuneration</th>
                        <td>{{ $personalInformation->remuneration }}</td>
                    </tr>
                </table>
                <h3 class="m-3">Education Details:</h3>
                <table>
                    <thead>
                        <tr>
                            <th>Education Level</th>
                            <th>College</th>
                            <th>University</th>
                            <th>Year</th>
                            <th>Percentage</th>
                            <th>Position</th>
                            <th>Attempt</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($personalInformation->educationDetails as $educationDetail)
                            <tr>
                                <td>{{ $educationDetail->education_level }}</td>
                                <td>{{ $educationDetail->college }}</td>
                                <td>{{ $educationDetail->university }}</td>
                                <td>{{ $educationDetail->year }}</td>
                                <td>{{ $educationDetail->marks }}</td>
                                <td>{{ $educationDetail->position }}</td>
                                <td>{{ $educationDetail->attempt }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                <h3 class="m-3">Experience:</h3>
                <table>
                    <thead>
                        <tr>
                            <th>Sr.No.</th>
                            <th>Designation</th>
                            <th>Duration with period</th>
                            <th>Institution</th>
                            <th>Details</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>{{ $personalInformation->designation_1 }}</td>
                            <td>{{ $personalInformation->duration_period_1 }}</td>
                            <td>{{ $personalInformation->institution_1 }}</td>
                            <td>{{ $personalInformation->details_1 }}</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>{{ $personalInformation->designation_2 }}</td>
                            <td>{{ $personalInformation->duration_period_2 }}</td>
                            <td>{{ $personalInformation->institution_2 }}</td>
                            <td>{{ $personalInformation->details_2 }}</td>
                        </tr>
                    </tbody>
                </table>
                <div class="m-4"></div>
                <table class="">
                    <tr>
                        <th>Academic Activities & Publication</th>
                        <td>{{ $personalInformation->activities }}</td>
                    </tr>
                    <tr>
                        <th>Any other Achievements</th>
                        <td>{{ $personalInformation->other_achievements }}</td>
                    </tr>
                    <tr>
                        <th>Language Known</th>
                        <td>{{ $personalInformation->languages_known }}</td>
                    </tr>
                </table>
                <h3 class="m-4">References:</h3>
                <table>
                    <thead>
                        <tr>
                            <th>Sr.No.</th>
                            <th>Name</th>
                            <th>Address</th>
                            <th>Tel/Mobile No.</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>{{ $personalInformation->ref_name_1 }}</td>
                            <td>{{ $personalInformation->ref_add_1 }}</td>
                            <td>{{ $personalInformation->ref_mob_1 }}</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>{{ $personalInformation->ref_name_2 }}</td>
                            <td>{{ $personalInformation->ref_add_2 }}</td>
                            <td>{{ $personalInformation->ref_mob_2 }}</td>
                        </tr>
                    </tbody>
                </table>
                <div class="m-4"></div>
                <table class="mb-5">
                    <tr>
                        <th>Name</th>
                        <td>{{ $personalInformation->name_2 }}</td>
                    </tr>
                </table>
            </div>
        </div>

    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>

</body>

</html>
