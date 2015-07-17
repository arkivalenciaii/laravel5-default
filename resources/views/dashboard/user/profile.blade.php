@extends('dashboard.app')

@section('content')

<div id="main-content">
			<!-- SAMPLE BOX CONFIGURATION MODAL FORM-->
			<div class="modal fade" id="box-config" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
				<div class="modal-dialog">
				  <div class="modal-content">
					<div class="modal-header">
					  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					  <h4 class="modal-title">Box Settings</h4>
					</div>
					<div class="modal-body">
					  Here goes box setting content.
					</div>
					<div class="modal-footer">
					  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
					  <button type="button" class="btn btn-primary">Save changes</button>
					</div>
				  </div>
				</div>
			  </div>
			<!-- /SAMPLE BOX CONFIGURATION MODAL FORM-->
			<div class="container">
				<div class="row">
					<div id="content" class="col-lg-12">
						<!-- PAGE HEADER-->
						<div class="row">
							<div class="col-sm-12">
								<div class="page-header">
									<!-- STYLER -->
									
									<!-- /STYLER -->
									<!-- BREADCRUMBS -->
									<ul class="breadcrumb">
										<li>
											<i class="fa fa-home"></i>
											<a href="index-2.html">Home</a>
										</li>
										<li>
											<a href="#">Dashboard</a>
										</li>
										<li>User Profile</li>
									</ul>
									<!-- /BREADCRUMBS -->
									<div class="clearfix">
										<h3 class="content-title pull-left">User Profile</h3>
									</div>
									<div class="description">User Profile, Activities, and other Statistics</div>
								</div>
							</div>
</div>
<!-- /PAGE HEADER -->
<!-- USER PROFILE -->
<div class="row">
<div class="col-md-12">
<!-- BOX -->
<div class="box border">
<div class="box-title">
<h4><i class="fa fa-user"></i><span class="hidden-inline-mobile">Hello, {{ $name }}!</span></h4>
</div>
<div class="box-body">
<div class="tabbable header-tabs user-profile">
<ul class="nav nav-tabs">

   @if($slots->count() >= 20)
   <li><a href="#" data-toggle="tab"><i class="fa fa-edit"></i> <span class="hidden-inline-mobile"> <strike>Queue Slots</strike></span></a></li>
   @else
   <li><a href="#pro_buy" data-toggle="tab"><i class="fa fa-edit"></i> <span class="hidden-inline-mobile"> Queue Slots</span></a></li>
   @endif
   
   <li><a href="#" data-toggle="tab"><i class="fa fa-edit"></i> <span class="hidden-inline-mobile"> <strike>Edit Account</strike></span></a></li>
   <li class="active"><a href="#pro_overview" data-toggle="tab"><i class="fa fa-dot-circle-o"></i> <span class="hidden-inline-mobile">Overview</span></a></li>
</ul>
<div class="tab-content">
   <!-- OVERVIEW -->
   <div class="tab-pane fade in active" id="pro_overview">
	  <div class="row">
		<!-- PROFILE PIC -->
		<div class="col-md-3">
			<div class="list-group">
			  <li class="list-group-item zero-padding">
				<img alt="" class="img-responsive" src="img/profile/avatar.jpg">
			  </li>
			  <div class="list-group-item profile-details">
					<h2>{{ $name }}</h2>
					<p><i class="fa fa-circle text-green"></i> Online</p>
					<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt laoreet dolore magna aliquam tincidunt erat volutpat laoreet dolore magna aliquam tincidunt erat volutpat.</p>
			 </div>
			  
			</div>														
		</div>
		<!-- /PROFILE PIC -->
		<!-- PROFILE DETAILS -->
		<div class="col-md-9">
			<!-- ROW 1 -->
			<div class="row">
				<div class="col-md-7 profile-details">																
					<h3>Account Statistics</h3>
					<div class="row">
						<div class="col-md-4 text-center">
							<div id="pie_1" class="piechart" data-percent="{{$slots->count() * 5}}">
								<span class="percent"></span>
							</div>
							<div class="skill-name">Slots ({{$slots->count()}}/20)</div>
						</div>
					</div>
					<div class="divide-20"></div>
					<!-- BUTTONS -->
					<div class="row">
						
						<div class="col-md-3">
							<a class="btn btn-success btn-icon input-block-level" href="javascript:void(0);">
								<i class="fa fa-github fa-2x"></i>
								<div>Slots</div>
								<span class="label label-right label-info">{{$slots->count()}}</span>
							</a>
						</div>
					</div>
					<!-- /BUTTONS -->
				</div>
				<div class="col-md-5">
					<!-- BOX -->
					<div class="box border inverse">
						<div class="box-title">
							<h4><i class="fa fa-bars"></i>Statistics</h4>
							<div class="tools">
							
								<a href="javascript:;" class="reload">
									<i class="fa fa-refresh"></i>
								</a>
								

							</div>
						</div>
						<div class="box-body big sparkline-stats">
							<div class="sparkline-row">
								<span class="title">Slots</span>
								<span class="value">{{ $slots->count() }}</span>
								<div class="linechart linechart-lg">
								@foreach($slots as $key)
								{{$key->id}}:{{$key->slot_rank}},
								@endforeach
								</div>
							</div>
							<div class="sparkline-row">
								<span class="title">Account balance</span>
								<span class="value"><i class="fa fa-rub"></i> 00.00</span>
								<span class="sparkline big" data-color="blue">16,6,23,14,12,10,15,4,19,18,4,24</span>
							</div>
							<div class="sparkline-row">
								<span class="title">Ready for payout</span>
								<span class="value"><i class="fa fa-rub"></i> 00.00</span>
								<!-- <span class="sparklinepie big">16,6,23</span> -->
							</div>
						</div>
					</div>
					<!-- /BOX -->
					<!-- /SAMPLE -->
				</div>
			</div>
			<!-- /ROW 1 -->
			<div class="divide-40"></div>
			<!-- ROW 2 -->
			<div class="row">
				<div class="col-md-12">
				<div class="box border blue">
				<div class="box-title">
					<h4><i class="fa fa-columns"></i> <span class="hidden-inline-mobile">Profile Summary</span></h4>																
				</div>
				<div class="box-body">
					<div class="tabbable">
						<ul class="nav nav-tabs">
						   <li class="active"><a href="#sales" data-toggle="tab"><i class="fa fa-signal"></i> <span class="hidden-inline-mobile">Queued Slots</span></a></li>
						   <li><a href="#" data-toggle="tab"><i class="fa fa-rss"></i> <span class="hidden-inline-mobile"><strike>Account Activity</strike></span></a></li>
						</ul>
						<div class="tab-content">
						   @include('dashboard.user.table')
						   <div class="tab-pane" id="feed">
							  <div class="scroller" data-height="250px" data-always-visible="1" data-rail-visible="1">
								  <div class="feed-activity clearfix">
									<div>
										<i class="pull-left roundicon fa fa-check btn btn-info"></i>
										<a class="user" href="#"> John Doe </a>
										accepted your connection request.
										<br>
										<a href="#">View profile</a>
										
									</div>
									<div class="time">
										<i class="fa fa-clock-o"></i>
										5 hours ago
									</div>
								  </div>
								  <div class="feed-activity clearfix">
									<div>
										<i class="pull-left roundicon fa fa-picture-o btn btn-danger"></i>
										<a class="user" href="#"> Jack Doe </a>
										uploaded a new photo.
										<br>
										<a href="#">Take a look</a>
										
									</div>
									<div class="time">
										<i class="fa fa-clock-o"></i>
										5 hours ago
									</div>
								  </div>
								  <div class="feed-activity clearfix">
									<div>
										<i class="pull-left roundicon fa fa-edit btn btn-pink"></i>
										<a class="user" href="#"> Jess Doe </a>
										edited their skills.
										<br>
										<a href="#">Endorse them</a>
										
									</div>
									<div class="time">
										<i class="fa fa-clock-o"></i>
										5 hours ago
									</div>
								  </div>
								  <div class="feed-activity clearfix">
									<div>
										<i class="pull-left roundicon fa fa-bitcoin btn btn-yellow"></i>
										<a class="user" href="#"> Divine Doe </a>
										made a bitcoin payment.
										<br>
										<a href="#">Check your financials</a>
										
									</div>
									<div class="time">
										<i class="fa fa-clock-o"></i>
										6 hours ago
									</div>
								  </div>
								  <div class="feed-activity clearfix">
									<div>
										<i class="pull-left roundicon fa fa-dropbox btn btn-primary"></i>
										<a class="user" href="#"> Lisbon Doe </a>
										saved a new document to Dropbox.
										<br>
										<a href="#">Download</a>
										
									</div>
									<div class="time">
										<i class="fa fa-clock-o"></i>
										1 day ago
									</div>
								  </div>
								  <div class="feed-activity clearfix">
									<div>
										<i class="pull-left roundicon fa fa-pinterest btn btn-inverse"></i>
										<a class="user" href="#"> Bob Doe </a>
										pinned a new photo to Pinterest.
										<br>
										<a href="#">Take a look</a>
										
									</div>
									<div class="time">
										<i class="fa fa-clock-o"></i>
										2 days ago
									</div>
								  </div>
							  </div>
						   </div>
						</div>
					 </div>
				</div>
				</div>
				</div>
			</div>
			<!-- /ROW 2 -->
		</div>
		<!-- /PROFILE DETAILS -->
	  </div>
   </div>
   <!-- /OVERVIEW -->
   
   <!-- EDIT ACCOUNT -->
   <div class="tab-pane fade" id="pro_edit">
	  <form class="form-horizontal" action="#">
		<div class="row">
			 <div class="col-md-6">
				<div class="box border green">
					<div class="box-title">
						<h4><i class="fa fa-bars"></i>General Information</h4>
					</div>
					<div class="box-body big">
						<div class="row">
						 <div class="col-md-12">
							<h4>Basic Information</h4>
							<div class="form-group">
							   <label class="col-md-4 control-label">Name</label> 
							   <div class="col-md-8"><input type="text" name="regular" class="form-control" value="Jennifer"></div>
							</div>
							<div class="form-group">
							   <label class="col-md-4 control-label">Birthday</label> 
							   <div class="col-md-8"><input  class="form-control datepicker" type="text" name="regular" size="10"></div>
							</div>
							<div class="form-group">
							   <label class="col-md-4 control-label">Gender</label> 
							   <div class="col-md-8">
								  <label class="radio"> <input type="radio" class="uniform" name="optionsRadios1" value="option1"> Male </label> 
								 <label class="radio"> <input type="radio" class="uniform" name="optionsRadios1" value="option2" checked> Female </label>
							   </div>
							</div>
							<h4>Contact Information</h4>
							<div class="form-group">
							   <label class="col-md-4 control-label">Phone</label> 
							   <div class="col-md-8"><input type="number" name="regular" class="form-control" value="1002927323"></div>
							</div>
							
							<div class="form-group">
							   <label class="col-md-4 control-label">Address</label> 
							   <div class="col-md-8"><textarea name="regular" class="form-control"></textarea></div>
							</div>
							<div class="form-group">
							   <label class="col-md-4 control-label">Website</label> 
							   <div class="col-md-8">
									<div class="input-group">
									  <span class="input-group-addon">http://</span>
									  <input type="text" class="form-control" placeholder="Website">
									</div>						
							   </div>
							</div>
						 </div>
					  </div>
					</div>
				</div>
			 </div>
		 </div>
	  </form>
	  <div class="form-actions clearfix"> <input type="submit" value="Update Account" class="btn btn-primary pull-right"> </div>
   </div>
   <!-- /EDIT ACCOUNT -->
   <!-- /BUY -->
   	<div class="tab-pane fade" id="pro_buy">
		<form class="form-horizontal" method="POST"action="{{ url('/dashboard/user')}}">
		<input type="hidden" name="_token" value="{{ csrf_token() }}">
			<div class="row">
			 	<div class="col-md-6">
					<div class="box border green">
						<div class="box-title">
							<h4><i class="fa fa-bars"></i>Buy Slots for Queueing</h4>
						</div>
						<div class="box-body big">
							<div class="row">
						 		<div class="col-md-12">
									<div class="form-group">
							   			<label class="col-md-4 control-label">Number of slots to queue(Max. 20)</label> 
							   		<div class="col-md-8"><input type="number" name="num_slots" class="form-control" placeholder="{{old('num_slots')}}">
							   		</div>
								</div>
						 	</div>
					  	</div>
					</div>
				</div>
			 </div>
		 </div>
	  {{-- </form> --}}
	  <div class="form-actions clearfix"> <input type="submit" value="Buy Slots" class="btn btn-primary pull-right"> </form></div>
   	</div>
</div>
</div>
<!-- /USER PROFILE -->
</div>
</div>
</div>
</div>
						

@endsection