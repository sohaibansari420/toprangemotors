<x-app-layout :assets="$assets ?? []">
    <div class="row">
       <div class="col-sm-12">
          <div class="card">
             <div class="card-header d-flex justify-content-between">
                <div class="header-title">
                   <h4 class="card-title">Vehicle</h4>
                </div>
             </div>
             <div class="card-body">
                <div class="table-responsive">
                   <table id="datatable" class="table table-striped" data-toggle="data-table">
                        <thead>
                            <tr>
                                <th>Vehicle Details</th>
                                <th>Type</th>
                                <th>Price</th>
                                <th>City</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($vehicles as $vehicle)
                                <tr>
                                    <td>
                                        {{ $vehicle->licence_plate_number }},
                                        {{ @$vehicle->car_make->name }},
                                        {{ @$vehicle->car_model->name }},
                                        {{ $vehicle->year }},
                                        {{$vehicle->colour}}
                                    </td>
                                    <td>
                                        @if ($vehicle->fuel_type == 0)
                                            petrol
                                        @elseif ($vehicle->fuel_type == 4)
                                            Hybrid
                                        @elseif ($vehicle->fuel_type == 3)
                                            Electric
                                        @else
                                            Electric Hybrid
                                        @endif
                                    </td>
                                    <td>£{{ $vehicle->price }}</td>
                                    <td>{{$vehicle->city}}</td>
                                </tr>
                            @endforeach
                        </tbody>
                   </table>
                </div>
             </div>
          </div>
       </div>
    </div>
</x-app-layout>
    