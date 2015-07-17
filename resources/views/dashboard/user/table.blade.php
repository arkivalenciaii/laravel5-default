<div class="tab-pane active" id="sales">
  <table class="table table-striped table-bordered table-hover">
	 <thead>
		<tr>
		   <th><i class="fa fa-user"></i> ID</th>
		   <th class="hidden-xs"><i class="fa fa-quote-left"></i> Slot Code</th>
		   <th><i class="fa fa-clock-o"></i> Time</th>
		   <th><i class="fa fa-bars"></i> Status</th>
		</tr>
	 </thead>
	 <tbody>
	 @foreach($slots as $slot)
	 	<tr>
		   <td><a href="#">{{$slot->id}}</a></td>
		   <td class="hidden-xs"><a href="#">{{$slot->slot_code}}</a></td>
		   <td>{{$slot->created_at->diffForHumans()}}</td>
		   @foreach($slot->status as $status)
		   	<td><span class="label label-{{ $status->status }} label-sm">{{ $status->status_message }}</span></td>
		   	@endforeach
		</tr>
	 @endforeach
	 </tbody>
  </table>
</div>