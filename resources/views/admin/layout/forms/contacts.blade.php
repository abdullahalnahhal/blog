<form action="{{route('cp.contacts.store')}}" method="post" accept-charset="utf-8" autocomplete="off" enctype='multipart/form-data'>
    @csrf
    <div class="row clearfix">
      <div class="col-sm-4">
          <div class="form-group form-float ">
            <label class="form-label">@lang('contacts.Email')</label>
            <input type="email" name='email' class="form-control" placeholder="@lang('contacts.Email')" required aria-required="true" maxlength='200' value='{{old('email')??$contacts["email"]}}'>
          </div>
      </div>
      <div class="col-sm-4">
          <div class="form-group form-float ">
            <label class="form-label">@lang('contacts.Phone Number')</label>
            <input type="text" name='mobile' class="form-control" placeholder="@lang('contacts.Phone Number')" required aria-required="true" maxlength='200' value='{{old('mobile')??$contacts["mobile"]}}'>
          </div>
      </div>
      <div class="col-sm-4">
          <div class="form-group form-float ">
            <label class="form-label">@lang('contacts.FaceBook Account')</label>
            <input type="text" name='facebook' class="form-control" placeholder="@lang('contacts.Facebook Account')" required aria-required="true" maxlength='200' value='{{old('facebook')??$contacts["facebook"]}}'>
          </div>
      </div>
      <div class="col-sm-4">
          <div class="form-group form-float ">
            <label class="form-label">@lang('contacts.Twitter Account')</label>
            <input type="text" name='twitter' class="form-control" placeholder="@lang('contacts.Twitter Account')" required aria-required="true" maxlength='200' value='{{old('twitter')??$contacts["twitter"]}}'>
          </div>
      </div>
      <div class="col-sm-4">
          <div class="form-group form-float ">
            <label class="form-label">@lang('contacts.Instagram Account')</label>
            <input type="text" name='instagram' class="form-control" placeholder="@lang('contacts.Instagram Account')" required aria-required="true" maxlength='200' value='{{old('instagram')??$contacts["instagram"]}}'>
          </div>
      </div>
      <div class="col-sm-2">
          <div class="form-group form-float ">
            <label class="form-label">@lang('contacts.Location Lattitude')</label>
            <input type="text" name='lat' class="form-control" placeholder="@lang('contacts.Location Lattitude')" required aria-required="true" maxlength='200' value='{{old('lat')??$contacts["lat"]}}'>
          </div>
      </div>
      <div class="col-sm-2">
          <div class="form-group form-float ">
            <label class="form-label">@lang('contacts.Location Longitude')</label>
            <input type="text" name='lon' class="form-control" placeholder="@lang('contacts.Location Longitude')" required aria-required="true" maxlength='200' value='{{old('lon')??$contacts["lon"]}}'>
          </div>
      </div>
      <div class="col-12">
        <div class="form-group form-float ">
          <label class="form-label">@lang('contacts.Address')</label>
          <textarea id="maxlength-textarea" name='address' class="form-control" maxlength="300" rows="3" placeholder="@lang('contacts.Address')" required>{{old('address')??$contacts["address"]}}</textarea>
        </div>
      </div>
    </div>
    <br>
    <button type="submit" class="btn btn-block btn-lg btn-info waves-effect">
        <i class="mdi mdi-content-save-all btn-icon-prepend"></i>
        <span>@lang('common.Save')</span>
    </button>
</form>
