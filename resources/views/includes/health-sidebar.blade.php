<aside class="sidebar has-marign-left">
    <div class="widget widget-services">
        <h5 class="widget__title">Health Library</h5>
        <div class="widget-content">
            <ul class="list-unstyled mb-0">
                <li><a href="{{ route('health-tips')}}">Health Tips<i
                            class="fa-solid fa-arrow-right mr-10"></i></a></li>
                <li><a href="{{ route('health-education')}}">Health Education<i class="fa-solid fa-arrow-right mr-10"></i></a></li>
                <li><a href="{{ route('tests-procedures')}}">Tests & Procedures<i class="fa-solid fa-arrow-right mr-10"></i></a></li>
            </ul>
        </div><!-- /.widget-content -->
    </div><!-- /.widget-services -->

</aside>

<div class="mt-20 sidebar-table blue-table sidebar-div">
    <h5 class="widget__title">Other Services</h5>
    <!-- Table -->
    <table class="table">
        <tbody>
            <tr>
                <td><a class="table-a" href="{{ route('blood-transfusion-service')}}">Diagnostic</a></td>
                <td class="text-right"><a class="table-a" href="{{ route('blood-transfusion-service')}}"><i
                            class="fas fa-angle-double-right"></i></a></td>
            </tr>
            <tr>
                <td><a class="table-a" href="{{ route('cardiology')}}">Medical</a></td>
                <td class="text-right"><a class="table-a" href="{{ route('cardiology')}}"><i
                            class="fas fa-angle-double-right"></i></a></td>
            </tr>
            <tr>
                <td><a class="table-a" href="{{ route('admission')}}">Round the Clock</a></td>
                <td class="text-right"><a class="table-a" href="{{ route('admission')}}"><i
                            class="fas fa-angle-double-right"></i></a></td>
            </tr>
            <tr>
                <td><a class="table-a" href="{{ route('cardiovascular-thoracic-surgery')}}">Surgical</a></td>
                <td class="text-right"><a class="table-a" href="{{ route('cardiovascular-thoracic-surgery')}}"><i
                            class="fas fa-angle-double-right"></i></a></td>
            </tr>
            <tr>
                <td><a class="table-a" href="{{ route('dialysis')}}">Therapeutic</a></td>
                <td class="text-right"><a class="table-a" href="{{ route('dialysis')}}"><i
                            class="fas fa-angle-double-right"></i></a></td>
            </tr>
        </tbody>
    </table>
</div>