<div id="top-bar" class="top-bar">
  <div class="container">
    <div class="row">
      <div class="col-lg-8 col-md-8 col-sm-6 col-xs-12">
        <ul class="top-info">
          <li><i class="fa fa-map-marker">&nbsp;</i>
            <p class="info-text">{{$contacts['address']}}</p>
          </li>
        </ul>
      </div>
      <!--/ Top info end -->

      <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 top-social text-right">
        <ul class="unstyled">
          <li>
            <a title="Facebook" href="{{$contacts['facebook']}}">
              <span class="social-icon"><i class="fa fa-facebook"></i></span>
            </a>
            <a title="Twitter" href="{{$contacts['twitter']}}">
              <span class="social-icon"><i class="fa fa-twitter"></i></span>
            </a>
            <a title="Instagram" href="{{$contacts['instagram']}}">
              <span class="social-icon"><i class="fa fa-instagram"></i></span>
            </a>
          </li>
        </ul>
      </div>
      <!--/ Top social end -->
    </div>
    <!--/ Content row end -->
  </div>
  <!--/ Container end -->
</div>
<!--/ Topbar end -->
