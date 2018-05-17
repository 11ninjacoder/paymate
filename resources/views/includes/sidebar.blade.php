<div class="">
                
                        <div class="profile-userpic">
                    
                    
                                <!-- SIDEBAR USERPIC -->
                                <div class=" text-center">
                                        <img src="{{ URL::to('/') }}/images/profile_user.jpg" class="img-responsive" alt="">
                                </div>
                                <!-- END SIDEBAR USERPIC -->
                        </div>
                        <div class="profile-sidebar">
                            
                            
                            <!-- SIDEBAR USER TITLE -->
                            <div class="profile-usertitle">
                                    <div class="profile-usertitle-name text-capitalize mark">
                                            @if (Session::has('name'))
                                              <?=Session::get('name')?>
                                            @endif
                                    </div>
                            </div>
                            <!-- END SIDEBAR USER TITLE -->
                            
                            <!-- SIDEBAR MENU -->
                            <div class="profile-usermenu">
                                    <ul class="nav navbar-nav">
                                            <li>
                                                    <a href="/addVideo">
                                                    <i class="glyphicon glyphicon-user"></i>
                                                    Add Video </a>
                                            </li>
                                            <li>
                                                 
                                            </li>
                                            
                                    </ul>
                            </div>
                            <!-- END MENU -->
                    </div>
</div>