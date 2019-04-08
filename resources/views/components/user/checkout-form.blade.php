<div class="section">
    <!-- container -->
    <div class="container">
        <!-- row -->
        <div class="row">
            <form action="{{asset('/postCheckout')}}" method="post" id="checkout-form" class="clearfix">
                {{csrf_field()}}
                <div class="col-md-6">
                    <div class="billing-details">
                        <div class="section-title">
                            <h3 class="title">Billing Details</h3>
                        </div>
                        <div class="form-group">
                            <input class="input" type="text" name="first-name" placeholder="First Name">
                        </div>
                        <div class="form-group">
                            <input class="input" type="text" name="last-name" placeholder="Last Name">
                        </div>

                        <div class="form-group">
                            <input class="input" type="text" name="address" placeholder="Address">
                        </div>
                        <div class="form-group">
                            <input class="input" type="text" name="city" placeholder="City">
                        </div>
                        <div class="form-group">
                            <input class="input" type="text" name="country" placeholder="Country">
                        </div>
                        <div class="form-group">
                            <input class="input" type="text" name="zip-code" placeholder="ZIP Code">
                        </div>
                        <div class="form-group">
                            <input class="input" type="tel" name="tel" placeholder="Telephone">
                        </div>
                    </div>
                </div>



                <div class="col-md-12">
                    <div class="order-summary clearfix">

                        <table class="shopping-cart-table table">

                            <tfoot>
                            <tr>
                                <th class="empty" colspan="3"></th>
                                <th>SUBTOTAL</th>
                                <th colspan="2" class="sub-total">${{$total}}</th>
                            </tr>
                            <tr>
                                <th class="empty" colspan="3"></th>
                                <th>SHIPING</th>
                                <td colspan="2">Free Shipping</td>
                            </tr>
                            <tr>
                                <th class="empty" colspan="3"></th>
                                <th>TOTAL</th>
                                <th colspan="2" class="total">${{$total}}</th>
                            </tr>
                            </tfoot>
                        </table>
                        <div class="pull-right">
                            <input type="submit" value="PLACE ORDER" class="primary-btn">
                        </div>
                    </div>

                </div>
            </form>
        </div>
        <!-- /row -->
    </div>
    <!-- /container -->
</div>
<!-- /section -->