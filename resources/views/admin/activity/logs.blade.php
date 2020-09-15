@extends('home')

@section('title')
 Login Activities
@endsection

@section('extra-css')

@endsection

@section('index')
<div class="content">
<!-- Vertical Layout -->
<div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="card card-stats">
            <div class="">
                <h3>User Login Activities</h3>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dt-mant-table">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Message</th>
                                <!-- <th>Email</th> -->
                                <th>Mobile</th>
                                <!-- <th>Url</th> -->
                                <!-- <th>Method</th> -->
                                <th>IP</th>
                                <th>Agent</th>
                                <th>Date and Time</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if (count($userLoginActivities) > 0)
                                @foreach($userLoginActivities as $key => $row)
                                <tr>                                        	
                                    <td>{{ $key+1 }}</td>
                                    <td style="width: 1%;">{{ $row->subject }} </td> 
                                    <!-- <td>{{ $row->email }}</td> -->
                                    <td>{{ $row->mobile?$row->mobile:'NA' }}</td>
                                    <!-- <td>{{ $row->url }}</td> -->     
                                    <!-- <td>{{ $row->method }}</td> -->
                                    <td>{{ $row->ip }}</td>
                                    <td style="width: 1%;">{{ $row->agent }}</td>
                                    <td>{{ $row->created_at->toDayDateTimeString() }}<br> ({{ $row->created_at->diffForHumans() }})</td>                
                                </tr>
                                @endforeach
                            @endif
                        </tbody>
                    </table>
                    {{ $userLoginActivities->links() }}
                </div>
            </div>
        </div>
    </div>
</div>
<!-- #END# Vertical Layout -->

</div>
@endsection

@section('extra-script')

@endsection