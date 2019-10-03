@if(isset($extensions))
<select name="{{$name??'permissions'}}"
id="{{$id??'permissions'}}"
class='{{$classes??''}}'
{{$required??''}}
@foreach($extensions as $key=>$extension)
{{$key}}='{{$extension}}'
@endforeach
>
@else
<select name="{{$name??'permissions'}}" id="{{$id??'permissions'}}" class='{{$classes??""}}'{{$required??''}}>
@endif
    <option value="access-users" {{(isset($select_from)&&in_array('access-users', $select_from))?'selected':''}}>@lang('users.Access Users')</option>
    <option value="create-admins" {{(isset($select_from)&&in_array('create-admins', $select_from))?'selected':''}}>@lang('users.Access Admins')</option>
    <option value="create-guests" {{(isset($select_from)&&in_array('create-guests', $select_from))?'selected':''}}>@lang('users.Access Guests')</option>
    <option value="create-admins-permission" {{(isset($select_from)&&in_array('create-admins-permission', $select_from))?'selected':''}}>@lang('users.Access Admins Permissions')</option>
</select>
