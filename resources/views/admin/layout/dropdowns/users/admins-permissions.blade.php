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

    <option value="access-admins" {{(isset($select_from)&&in_array('access-admins', $select_from))?'selected':''}}>@lang('users.Access Admins')</option>
    <option value="create-admins" {{(isset($select_from)&&in_array('create-admins', $select_from))?'selected':''}}>@lang('users.Create Admins')</option>
    <option value="update-admins" {{(isset($select_from)&&in_array('update-admins', $select_from))?'selected':''}}>@lang('users.Update Admins')</option>
    <option value="delete-admins" {{(isset($select_from)&&in_array('delete-admins', $select_from))?'selected':''}}>@lang('users.Delete Admins')</option>

    <option value="access-guests" {{(isset($select_from)&&in_array('access-guests', $select_from))?'selected':''}}>@lang('users.Access Guests')</option>

    <option value="access-admins-permission" {{(isset($select_from)&&in_array('access-admins-permission', $select_from))?'selected':''}}>@lang('users.Access Admins Permissions')</option>
    <option value="create-admins-permission" {{(isset($select_from)&&in_array('create-admins-permission', $select_from))?'selected':''}}>@lang('users.Create Admins Permissions')</option>
    <option value="update-admins-permission" {{(isset($select_from)&&in_array('update-admins-permission', $select_from))?'selected':''}}>@lang('users.Update Admins Permissions')</option>
    <option value="delete-admins-permission" {{(isset($select_from)&&in_array('delete-admins-permission', $select_from))?'selected':''}}>@lang('users.Delete Admins Permissions')</option>

    <option value="access-slider" {{(isset($select_from)&&in_array('access-slider', $select_from))?'selected':''}}>@lang('users.Access Home Slider')</option>
    <option value="create-slider" {{(isset($select_from)&&in_array('create-slider', $select_from))?'selected':''}}>@lang('users.Create Home Slider')</option>
    <option value="update-slider" {{(isset($select_from)&&in_array('update-slider', $select_from))?'selected':''}}>@lang('users.Update Home Slider')</option>
    <option value="delete-slider" {{(isset($select_from)&&in_array('delete-slider', $select_from))?'selected':''}}>@lang('users.Delete Home Slider')</option>

    <option value="access-about" {{(isset($select_from)&&in_array('access-about', $select_from))?'selected':''}}>@lang('users.Access About Us')</option>
    <option value="create-about" {{(isset($select_from)&&in_array('create-about', $select_from))?'selected':''}}>@lang('users.Create About Us')</option>
    <option value="update-about" {{(isset($select_from)&&in_array('update-about', $select_from))?'selected':''}}>@lang('users.Update About Us')</option>
    <option value="delete-about" {{(isset($select_from)&&in_array('delete-about', $select_from))?'selected':''}}>@lang('users.Delete About Us')</option>

    <option value="access-fields" {{(isset($select_from)&&in_array('access-fields', $select_from))?'selected':''}}>@lang('users.Access Fields')</option>
    <option value="create-fields" {{(isset($select_from)&&in_array('create-fields', $select_from))?'selected':''}}>@lang('users.Create Fields')</option>
    <option value="update-fields" {{(isset($select_from)&&in_array('update-fields', $select_from))?'selected':''}}>@lang('users.Update Fields')</option>
    <option value="delete-fields" {{(isset($select_from)&&in_array('delete-fields', $select_from))?'selected':''}}>@lang('users.Delete Fields')</option>

    <option value="access-achievements" {{(isset($select_from)&&in_array('access-achievements', $select_from))?'selected':''}}>@lang('users.Access Achievements')</option>
    <option value="create-achievements" {{(isset($select_from)&&in_array('create-achievements', $select_from))?'selected':''}}>@lang('users.Create Achievements')</option>
    <option value="update-achievements" {{(isset($select_from)&&in_array('update-achievements', $select_from))?'selected':''}}>@lang('users.Update Achievements')</option>
    <option value="delete-achievements" {{(isset($select_from)&&in_array('delete-achievements', $select_from))?'selected':''}}>@lang('users.Delete Achievements')</option>

    <option value="access-clients" {{(isset($select_from)&&in_array('access-clients', $select_from))?'selected':''}}>@lang('users.Access Clients')</option>
    <option value="create-clients" {{(isset($select_from)&&in_array('create-clients', $select_from))?'selected':''}}>@lang('users.Create Clients')</option>
    <option value="update-clients" {{(isset($select_from)&&in_array('update-clients', $select_from))?'selected':''}}>@lang('users.Update Clients')</option>
    <option value="delete-clients" {{(isset($select_from)&&in_array('delete-clients', $select_from))?'selected':''}}>@lang('users.Delete Clients')</option>

    <option value="access-gallery" {{(isset($select_from)&&in_array('access-gallery', $select_from))?'selected':''}}>@lang('users.Access Gallery')</option>
    <option value="create-gallery" {{(isset($select_from)&&in_array('create-gallery', $select_from))?'selected':''}}>@lang('users.Create Gallery')</option>
    <option value="update-gallery" {{(isset($select_from)&&in_array('update-gallery', $select_from))?'selected':''}}>@lang('users.Update Gallery')</option>
    <option value="delete-gallery" {{(isset($select_from)&&in_array('delete-gallery', $select_from))?'selected':''}}>@lang('users.Delete Gallery')</option>

    <option value="access-videos" {{(isset($select_from)&&in_array('access-videos', $select_from))?'selected':''}}>@lang('users.Access Videos')</option>
    <option value="create-videos" {{(isset($select_from)&&in_array('create-videos', $select_from))?'selected':''}}>@lang('users.Create Videos')</option>
    <option value="update-videos" {{(isset($select_from)&&in_array('update-videos', $select_from))?'selected':''}}>@lang('users.Update Videos')</option>
    <option value="delete-videos" {{(isset($select_from)&&in_array('delete-videos', $select_from))?'selected':''}}>@lang('users.Delete Videos')</option>

    <option value="access-contacts" {{(isset($select_from)&&in_array('access-contacts', $select_from))?'selected':''}}>@lang('users.Access Contacts')</option>
    <option value="create-contacts" {{(isset($select_from)&&in_array('create-contacts', $select_from))?'selected':''}}>@lang('users.Create Contacts')</option>
    <option value="update-contacts" {{(isset($select_from)&&in_array('update-contacts', $select_from))?'selected':''}}>@lang('users.Update Contacts')</option>
    <option value="delete-contacts" {{(isset($select_from)&&in_array('delete-contacts', $select_from))?'selected':''}}>@lang('users.Delete Contacts')</option>

    <option value="access-blog" {{(isset($select_from)&&in_array('access-blog', $select_from))?'selected':''}}>@lang('users.Access Blog')</option>
    <option value="create-blog" {{(isset($select_from)&&in_array('create-blog', $select_from))?'selected':''}}>@lang('users.Create Blog')</option>
    <option value="update-blog" {{(isset($select_from)&&in_array('update-blog', $select_from))?'selected':''}}>@lang('users.Update Blog')</option>
    <option value="delete-blog" {{(isset($select_from)&&in_array('delete-blog', $select_from))?'selected':''}}>@lang('users.Delete Blog')</option>

</select>
