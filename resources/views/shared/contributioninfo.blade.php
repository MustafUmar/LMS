@if($ctb->error)
    <div class="widget user-view-style-2">
        <div class="widget-wrapper">
            <div class="widget-content">
                
                <div class="text-center user-profile bg-danger">
                    <div class="header-cover bg-danger">
                    </div>
                    <div class="user-profile-inner padding-top-17">
                        <p class="fg-white"><i class="fa fa-exclamation-triangle fa-2x"></i></p>
                        <h4 class="fg-white font-bold">Monthly schedule misconfigured</h4>
                        <h5 class="fg-white">{{$ctb->message}}</h5>
                            
                        <!-- User button -->
                        <div class="user-button">
                            <div class="row">
                                <div class="col-md-6 col-md-offset-3">
                                    <button type="button" class="btn btn-pomegranate btn-flat btn-sm btn-block"></i> Reset monthly schedule</button>
                                </div>
                            </div>
                        </div><!-- End div .user-button -->
                    </div><!-- End div .user-profile-inner -->
                </div>

            </div><!--widget-content-->
        </div>
    </div>
@else
    <div class="widget user-view-style-2">
        <div class="widget-wrapper">
            <div class="widget-content">
                
                <div class="text-center user-profile bg-white">
                    <div class="header-cover bg-green">
                    </div>
                    <div class="user-profile-inner padding-top-17">
                        <h4 class="fg-white font-bold">Contributions</h4>
                        <h5 class="fg-white">{{now()->format('F Y')}}</h5>
                        <ul class="list-group">
                          <li class="list-group-item">
                            <span class="badge bg-warning">1,245</span>
                            Number of contributors
                          </li>
                          <li class="list-group-item">
                            <span class="badge bg-info">245</span>
                            Total contributions
                          </li>
                        </ul>
                            
                    </div><!-- End div .user-profile-inner -->
                </div>

            </div><!--widget-content-->
        </div>
    </div>
@endif