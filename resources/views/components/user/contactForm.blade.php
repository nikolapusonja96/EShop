
<div class="jumbotron jumbotron-sm">
    <div class="container">
        <div class="row">
            <div class="col-sm-9 col-lg-9">
                <h1 class="h1">
                    Contact us <small>Feel free to contact us</small></h1>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        @if($message = session()->get('message'))
            <div class="alert alert-success">
                {{ session()->get('message') }}
                <button type="button" class="close" data-dismiss="alert">x</button>
            </div>

        @endif
        <div class="col-md-8">
            <div class="well well-sm">

                <form method="post" action="{{asset('contact/sendemail')}}">
                    {{csrf_field()}}
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="name">
                                    Name</label>
                                <input type="text" class="form-control" name="mail_customer_name" id="mail_customer_name" placeholder="Enter name" required="required" />
                            </div>
                            <div class="form-group">
                                <label for="email">
                                    Email Address</label>
                                <div class="input-group">
                                <span class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span>
                                </span>
                                    <input type="email" class="form-control"  name="mail_customer_email"  id="email" placeholder="Enter email" required="required" /></div>
                            </div>

                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="name">
                                    Message</label>
                                <textarea   name="mail_customer_message"  id="message" class="form-control" rows="9" cols="25" required="required"
                                          placeholder="Message"></textarea>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <button type="submit" class="btn btn-primary pull-right" id="btnContactUs">
                                Send Message</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="col-md-4">
            <form>
                <h3><strong><span class="glyphicon glyphicon-globe"></span> Our office</strong></h3>
                <address>
                    <strong><b style="color:darkorange">E</b>-SHOP.</strong><br>
                    Belgrade, Serbia, 11000<br>
                    Tel: +38163/43-54-11  or +38162/434-12-323<br>

                </address>

            </form>
        </div>
    </div>
</div>
