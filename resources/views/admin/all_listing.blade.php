@extends('admin.layout')
@section('content')
<style>
    .btn {
      border: 2px solid black;
      background-color: white;
      color: black;
      padding: 2px 2px;
      font-size: 12px;
      cursor: pointer;
    }
    
    /* Green */
    .success {
      border-color: #04AA6D;
      color: green;
    }
    
    .success:hover {
      background-color: #04AA6D;
      color: white;
    }
    
    /* Blue */
    .info {
      border-color: #f32121;
      color: #f32121;
    }
    
    .info:hover {
      background: #f32121;
      color: white;
    }
    
    /* Orange */
    .warning {
      border-color: #ff9800;
      color: orange;
    }
    
    .warning:hover {
      background: #ff9800;
      color: white;
    }
    
    /* Red */
    .danger {
      border-color: #f44336;
      color: red;
    }
    
    .danger:hover {
      background: #f44336;
      color: white;
    }
    
    /* Gray */
    .default {
      border-color: #e7e7e7;
      color: black;
    }
    
    .default:hover {
      background: #e7e7e7;
    }
    </style>

<div class="row">  
         <div class="panel-body" style="padding:1px 5px 2px 5px;">
       
            <div class="col-md-12" style="margin-top:5px;">
                {{-- <label style="color:#000; background-color:#FFCC00; width:7%; height:25px; padding-top:5px;margin-top: 1vh;" align="center"><span class=""></span> <strong>Project Entry</strong></label> --}}
                   
              
                             
</div>
            </div> 
       
         </div>

    <div class="row">
        <div class="col-md-12" style="text-align: center;margin-top: 5px;">
            <h6 class="panel-title" style="color:#FFFFFF; background-color:#5e5a5a; width:100%;height: 50%; font-size:16px;"
                align="center">
                <i class="fa fa-file-text"><label style="margin: 7px;">All Listing</label> </i>
            </h6>

        </div>
        <div class="col-md-12" style="overflow:scroll">

            <!-- START DEFAULT DATATABLE -->

            <div class="panel-body" style="margin-top:5px; margin-bottom:15px;">
                <table class="table datatable" style="overflow:auto !important;">
                    <thead>
                        <tr>
                            <th>Sr. No.</th>
                            <th>Business Name</th>
                            <th>Contact No</th>
                            <th>Address</th>
                            {{-- <th>Email</th> --}}
                            {{-- <th>Website Link</th> --}}
                            <th>Wedding Venue Type</th>
                            {{-- <th>Price</th> --}}
                            <th>City</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>

                        @foreach ($all_listing as $all_listings)
                            <tr>

                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $all_listings->name }}</td>
                                <td>{{ $all_listings->contact_no }}</td>
                                <td>{{ $all_listings->address }}</td>
                                {{-- <td>{{ $all_listings->email }}</td> --}}
                                {{-- <td>{{ $all_listings->website_link }}</td> --}}
                               
                       
              @php
              $categoryIds = json_decode($all_listings->WeddingVenueName, true); // Convert JSON string to array
              $categories = App\Models\admin\Category::whereIn('id', $categoryIds)->pluck('category')->toArray(); // Fetch category names as array
              $categoryString = implode(', ', $categories); // Convert array to comma-separated string
          @endphp
          
          <td>{{ $categoryString }}</td>
          
             
            
          {{-- @php
          $prices = json_decode($all_listings->Price, true); // Convert JSON string to array
          $price = implode(', ', $prices); // Convert array to comma-separated string
      @endphp --}}
      {{-- @php
      $prices = json_decode($all_listings->Price, true); // Convert JSON string to array
  @endphp --}}
  
  {{-- <td>{{ implode(', ', $all_listings->Price) }}</td> --}}
                                {{-- <<td>{{ implode(', ', $all_listings->capacity)  ?? ['']}}</td> --}}

                                <td>{{ $all_listings->city_name->city ?? '' }}</td>
                                @if ($all_listings->status == 'approve')
                             
                                <td style="color: green">
                                    <button class="btn success">{{ ucfirst($all_listings->status) }}</button>
                                    </td>
                               
                                    @elseif ($all_listings->status == 'pending')
                                  
                                     <td style="color: yellow">
                                        <button class="btn warning">{{ ucfirst($all_listings->status) }}</button>
                                        </td>
                                    
                                    @elseif ($all_listings->status == 'reject')
                                   
                                        <td style="color: red">
                                        <button class="btn info">{{ ucfirst($all_listings->status) }}</button>
                                        </td>
                                   
                                @endif
{{-- 
                                @if ($all_listings->status == 'approve')
                                    <td>
                                        <a href="{{ route('approve_listing', $all_listings->id) }}">
                                            <button type="button" class="btn btn-warning">Approve</button>
                                        </a>
                                        <a href="{{ route('reject_enquiry', $all_listings->id) }}">
                                            <button type="button" class="btn btn-danger">Reject</button>
                                        </a>
                                    </td>
                               @else --}}
                                <td>
                                  <a href="{{ route('view_listing', $all_listings->id) }}">
                                    <button type="button" class="btn btn-primary">View</button>
                                </a>
                                    {{-- <a href="{{ route('approve_listing', $all_listings->id) }}" onclick=""> --}}
                                        <button
                                        onclick="openCustomModal('{{ route('approve_listing', $all_listings->id) }}')"
                                        id="customModal"
                                        style="background-color:#10af23; border:none; max-height:25px;color:#FFFFFF"
                                        type="button" class="btn btn-info">Approve</button>
                                    {{-- </a> --}}
                                        <button
                                        onclick="openCustomModal_reject('{{ route('reject_listing', $all_listings->id) }}')"
                                        id="customModal_reject"
                                        style="background-color:#d40e0e; border:none; max-height:25px;color:#FFFFFF"; "
                                        type="button" class="btn btn-info">Reject</button>
                                   
                                    
                                </td>
                                {{-- @endif --}}
                            </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>

        </div>
    </div>

@stop
