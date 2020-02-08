@if(isset($extensions))
<select name="{{$name??'role_id'}}"
id="{{$id??'role_id'}}"
class='form-control {{$classes??''}}'
{{$required??''}}
@foreach($extensions as $key=>$extension)
{{$key}}='{{$extension}}'
@endforeach
>
@else
<select name="{{$name??'role_id'}}" id="{{$id??'role_id'}}" class='form-control show-tick {{$classes??""}}' data-live-search='true' {{$required??''}}>
@endif
 	@if(!isset($roles))
		@php
			$roles = App\Roles::all();
		@endphp
	@endif
	@foreach($roles as $role)
		@if(old('role_id') == $role->id)
		<option value="{{$role->id}}" selected>{{$role->name}}</option>
		@elseif(isset($selected_id) && $selected_id == $role->id)
		<option value="{{$role->id}}" selected>{{$role->name}}</option>
		@else
		<option value="{{$role->id}}" >{{$role->name}}</option>
		@endif

	@endforeach
</select>
