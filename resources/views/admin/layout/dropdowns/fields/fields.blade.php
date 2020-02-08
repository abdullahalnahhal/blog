@if(isset($extensions))
<select name="{{$name??'field_id'}}"
id="{{$id??'field_id'}}"
class='form-control {{$classes??''}}'
{{$required??''}}
@foreach($extensions as $key=>$extension)
{{$key}}='{{$extension}}'
@endforeach
>
@else
<select name="{{$name??'field_id'}}" id="{{$id??'field_id'}}" class='{{$classes??""}}' data-live-search='true' {{$required??''}}>
@endif

 	@if(!isset($fields))
		@php
			$fields = App\Models\Fields::all();
		@endphp
	@endif
  <option value=""></option>
	@foreach($fields as $field)
		@if(old('field_id') == $field->id)
		<option value="{{$field->id}}" selected>{{$field->title}}</option>
		@elseif(isset($selected_id) && $selected_id == $field->id)
		<option value="{{$field->id}}" selected>{{$field->title}}</option>
		@else
		<option value="{{$field->id}}" >{{$field->title}}</option>
		@endif

	@endforeach
</select>
