@extends('vendor.layout')
@section('content')

<div class="page-content-wrap">
          
    <!--    <div class="row">  
         <div class="panel-body" style="padding:1px 5px 2px 5px;">
       
        <div class="col-md-12" style="margin-top:5px;">
                <label style="color:#000; background-color:#FFCC00; width:7%; height:25px; padding-top:5px;margin-top: 1vh;" align="center"><span class=""></span> <strong>Project Entry</strong></label>
                   
              
            <a href="added_project_entry.html"> <button id="on" type="button" class="btn mjks"
                style="color:#FFFFFF; height:30px; width:auto;background-color: #009999;"><i
                    class="fa fa-plus"></i>Added Project Entry</button>
        </a>                       
</div>
            </div> 
       
         </div>-->
	
	<div class="row">  
         <div class="panel-body" style="padding:1px 5px 2px 5px;">
       
            <div class="col-md-12" style="margin-top:5px;">
                {{-- <label style="color:#000; background-color:#FFCC00; width:7%; height:25px; padding-top:5px;margin-top: 1vh;" align="center"><span class=""></span> <strong>Project Entry</strong></label> --}}
                   
              
                             
</div>
            </div> 
       
         </div>
          
         <div class="row" >
            <div class="col-md-12" style="text-align: center;margin-top: 5px;">
                <h6 class="panel-title" style="color:#FFFFFF; background-color:#5e5a5a; width:100%;height: 50%; font-size:12px; padding:7px;" align="center">
					<i class="fa fa-file-text"> &nbsp;<b style="font-family: 'Open Sans', sans-serif;">Confirm Booking</b> </i> </h6>
            
            </div>
            <div class="col-md-12" style="overflow:scroll">

                <!-- START DEFAULT DATATABLE -->
          
                    <div class="panel-body" style="margin-top:5px; margin-bottom:15px;">
                        <table class="table datatable" style="overflow:auto !important;">
                            <thead>
                                <tr>
                                    <th>Sr. No.</th>
                                    <th>Date</th>
                                    <th>Name</th>
                                    
                                    <th>Contact No</th>
                                  
                                    <th>Time Slot</th>
                                    <th>Wedding Venue Type</th>
                                   
                                    <th>Guest</th>
                                  
                                    <th>Status</th>
                                    {{-- <th>Action</th> --}}
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($approve_booking as $approve_bookings)
                                <tr>
                                <td>{{$loop->iteration}}</td>       
                                <td>{{ date('d-m-Y',strtotime($approve_bookings->date))}}</td>
                                <td>{{$approve_bookings->name}}</td>
                                <td>{{$approve_bookings->contact_no}}</td>
                                <td>{{$approve_bookings->time_slot}}</td>
                               <td>{{$approve_bookings->categoryname->category ?? ''}}</td>
                                {{-- @php
                                $time_slot = json_decode($approve_bookings->time_slot);
                                $amenities_for_booking = json_decode($approve_bookings->amenities_for_booking);

                            @endphp

                            @if (is_array($time_slot))

                                @foreach ($time_slot as $index => $time)
                                <td>{{$time}}</td>
                                @endforeach
                                @endif
                                
                                @if (is_array($amenities_for_booking))

                                @foreach ($amenities_for_booking as $index => $amenities_for_bookings)
                                <td>{{$amenities_for_bookings}}</td>
                                @endforeach
                                @endif --}}
                                <td>{{$approve_bookings->guest}}</td>
                                <td>{{"Approved"}}</td>
                                {{-- <td>
                                    <!-- <button data-toggle="modal" data-target="#popup3" style="background-color:#1abc3d; border:none; max-height:25px; margin-top:-5px; margin-bottom:-5px;" type="button" class="btn btn-info" data-toggle="tooltip" data-placement="top" title="View"><i class="fa fa-eye" style="margin-left:5px;"></i></button> -->
                                    <button type="button" class="btn btn-sm btn-success" >Approve</button>
                                    <!-- <button style="background-color:#ff0000; border:none; max-height:25px; margin-top:-5px; margin-bottom:-5px;" type="button" class="btn btn-info" data-toggle="tooltip" data-placement="top" title="Delete"><i class="fa fa-trash-o" style="margin-left:5px;"></i></button> -->
                                </td> --}}
                                 
                                </tr>
                                @endforeach

                               
                            </tbody>
                        </table>
                    </div>
             
            </div>
        </div>
</div>
@stop