<div id= "form_container" class="container" style="margin-top:40px;">
    <div class="modal fade" role="dialog" tabindex="-1" id="modal1">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                    <h4 class="modal-title">Contact Information</h4></div>
                <div class="modal-body">
                    <form action="javascript:void();" method="get" id="contactForm">
                        <input class="form-control" type="hidden" name="Introduction" value="This email was sent from www.mywebsite.com" />
                        <input class="form-control" type="hidden" name="subject" value="My Contact Form" />
                        <input class="form-control" type="hidden" name="to" value="email@mywebsite.com" />
                        <div class="row">
                            <div class="col-md-6">
                                <div id="modal-successfail"></div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6" id="modal-message">
                                <fieldset>
                                    <legend><i class="fa fa-envelope"></i> Contact Us</legend>
                                </fieldset>
                                <div class="form-group has-feedback">
                                    <label class="control-label" for="modal_from_name">Name</label>
                                    <input class="form-control" type="text" name="from_name" required placeholder="Full Name" id="modal_from_name" tabindex="-1" />
                                </div>
                                <div class="form-group has-feedback">
                                    <label class="control-label" for="modal_from_email">Email</label>
                                    <input class="form-control" type="email" name="from_email" required placeholder="Email Address" id="modal_from_email" />
                                </div>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group has-feedback">
                                            <label class="control-label" for="modal_from_phone">Phone</label>
                                            <input class="form-control" type="text" name="from_phone" placeholder="Primary Phone" id="modal_from_phone" />
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label class="control-label" for="modal_calltime">Best Time to Call</label>
                                            <select class="form-control" name="Call Time" id="modal_calltime">
                                                <option value="Morning" selected>Morning</option>
                                                <option value="Afternoon">Afternoon</option>
                                                <option value="Evening">Evening</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label" for="modal_comments">Comments</label>
                                    <textarea class="form-control" rows="5" name="Comments" placeholder="Enter comments here" id="modal_comments"></textarea>
                                </div>
                                <div class="form-group">
                                    <button class="btn btn-primary" type="submit">Send <i class="fa fa-chevron-circle-right"></i></button>
                                </div>
                                <hr class="visible-xs-block visible-sm-block" />
                            </div>
                            <div class="col-md-6">
                                <fieldset>
                                    <legend> <i class="fa fa-location-arrow"></i> Locate Us</legend>
                                </fieldset>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="static-map">
                                            <a href="https://www.google.com/maps/place/2+15th+St+NW+Washington+DC+20024" target="_blank"><img class="img-responsive" src="http://maps.googleapis.com/maps/api/staticmap?autoscale=2&amp;size=600x210&amp;maptype=roadmap&amp;format=png&amp;visual_refresh=true&amp;markers=size:mid%7Ccolor:0xff0000%7Clabel:%7C582+1801+W+International+Speedway+Blvd+Daytona+Beach+FL+32114&amp;zoom=12"
                                                alt="Google Map of Washington Monument" /></a>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <fieldset>
                                            <legend><i class="fa fa-envelope"></i> Contact Us</legend>
                                        </fieldset>
                                        <div><span><strong>Name</strong></span></div>
                                        <div><span>email@address.com</span></div>
                                        <div><span>www.awebsite.com</span></div>
                                        <hr class="visible-xs-block" />
                                    </div>
                                    <div class="col-sm-6">
                                        <fieldset>
                                            <legend><i class="fa fa-location-arrow"></i> Our Address</legend>
                                        </fieldset>
                                        <div><span><strong>Office Name</strong></span></div>
                                        <div><span>55 Icannot Dr.</span></div>
                                        <div><span>Daytona Beach, FL 81500</span></div>
                                        <div>
                                            <div><abbr data-toggle="tooltip" data-placement="top" title="Office Phone: 555-867-5309">O:</abbr>555-867-5309</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <form action="javascript:void();" method="get" id="contactForm" style="margin-top:120px;padding-bottom:20px;">
        <input class="form-control" type="hidden" name="Introduction" value="This email was sent from www.mywebsite.com" />
        <input class="form-control" type="hidden" name="subject" value="My Contact Form" />
        <input class="form-control" type="hidden" name="to" value="email@mywebsite.com" />
        <div class="row">
            <div class="col-md-6">
                <div id="successfail"></div>
            </div>
        </div>
        <div class="row" style="background-color:rgba(37,36,36,0.81);color:#a39c87;font-family:Lobster Two;">
            <div class="col-md-6" id="message">
                <fieldset>
                    <legend style="color:#a39c87;"><i class="fa fa-envelope"></i> Contact Us</legend>
                </fieldset>
                <div class="form-group has-feedback">
                    <label class="control-label" for="from_name">Name</label>
                    <input class="form-control" type="text" name="from_name" required placeholder="Enter your Full name" id="from_name" tabindex="-1" />
                </div>
                <div class="form-group has-feedback">
                    <label class="control-label" for="from_email">Email</label>
                    <input class="form-control" type="email" name="from_email" required placeholder="Enter your E-mail address" id="from_email" />
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group has-feedback">
                            <label class="control-label" for="from_phone">Phone</label>
                            <input class="form-control" type="text" name="from_phone" placeholder="Primary Phone" id="from_phone" />
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group" style="font-family:Lobster Two;">
                            <label class="control-label" for="calltime">Best contact method</label>
                            <select class="form-control" name="Call Time" id="calltime">
                                <option value selected>Phone</option>
                                <option value>E-mail</option>
                                <option value>Skype</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-12 col-sm-6">
                        <div class="form-group">
                            <label class="control-label" for="calltime">How did you find out about my services?</label>
                            <input class="form-control" type="email" name="from_email" required placeholder="e.g. From a friend" id="from_email" />
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label" for="comments">Comments</label>
                    <textarea class="form-control" rows="5" name="Comments" placeholder="Enter comments here" id="comments"></textarea>
                </div>
                <div class="form-group">
                    <button class="btn btn-primary btn-block" type="submit">Send <i class="fa fa-chevron-circle-right"></i></button>
                </div>
                <hr class="visible-xs-block visible-sm-block" />
            </div>
            <div class="col-md-6">
                <fieldset>
                    <legend style="color:#a39c87;"> <i class="fa fa-location-arrow"></i> Living in beutiful Kelowna, BC </legend>
                    <iframe allowfullscreen frameborder="0" width="100%" height="200px" src="https://www.google.com/maps/embed/v1/place?key=AIzaSyBkffefIVKw3_rXRCp49WdeENLK_oTimfU&amp;q=Kelowna%2C+Bc&amp;zoom=11"></iframe>
                </fieldset>
                <div class="row">
                    <div class="col-md-12">
                        <div class="static-map">
                            <a href="https://www.google.com/maps/place/2+15th+St+NW+Washington+DC+20024" target="_blank"></a>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <fieldset style="color:#a39c87;">
                            <legend style="color:#a39c87;"><i class="fa fa-envelope"></i> Contact Information</legend>
                        </fieldset>
                        <div><span><strong>E</strong>dgard Ernesto Silva</span></div>
                        <div><span>edgard.ernesto.silva@gmail.com </span></div>
                        <div><span>+1 250-864-0736 </span></div>
                        <hr class="visible-xs-block" />
                    </div>
                    
                </div>
            </div>
            <div class="col-md-12">
                <div></div>
            </div>
        </div>
    </form>
</div>