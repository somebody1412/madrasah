@extends("layout.web.layout")

@section('head')

@endsection

@section('content')

<!-- Main -->
<div id="main">


    <!-- Post -->
    <section class="post">
        <header class="major">
            <span class="date">Welcome to TASNIM</span>
            <h1>Registration</h1>
            <p>Description</p>
            <hr>
            <h3>Fees</h3>
            <div class="table-wrapper">
                <table class="alt">
                    <thead>
                        <tr>
                            <th>Item</th>
                            <th>Description</th>
                            <th>Price</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Item 1</td>
                            <td>Registration Fee</td>
                            <td>RM 100.00</td>
                        </tr>
                        <tr>
                            <td>Item 2</td>
                            <td>Nursery and Reception</td>
                            <td>RM 400.00</td>
                        </tr>
                        <tr>
                            <td colspan="2">Total</td>
                            <td>RM 500.00</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </header>
        <div class=" main">
            <form method="post" action="#">
                <div class="row gtr-uniform">
                    <div class="col-12 col-12-xsmall">
                        <hr>
                        <p class="mb-0">Child's Information</p>
                    </div>
                    <div class="col-6 col-12-xsmall">
                        <input type="text" name="cname" id="cname" value="" placeholder="Name" />
                    </div>
                    <div class="col-6 col-12-xsmall">
                        <input type="number" max="5" min="1" name="cage" id="cage" value="" placeholder="Age" />
                    </div>
                    <!-- Break -->
                    <div class="col-12">
                        <select name="gender" id="gender">
                            <option selected value="1">Male</option>
                            <option value="2">Female</option>
                        </select>
                    </div>

                    <div class="col-12 col-12-xsmall">
                        <hr>
                        <p class="mb-0">Parent Information</p>
                    </div>
                    <div class="col-6 col-12-xsmall">
                        <input type="text" name="name" id="name" value="" placeholder="Name" />
                    </div>
                    <div class="col-6 col-12-xsmall">
                        <input type="text" name="ic" id="ic" value="" placeholder="IC Number" />
                    </div>
                    <div class="col-6 col-12-xsmall">
                        <input type="text" name="contact" id="contact" value="" placeholder="Contact Number" />
                    </div>
                    <div class="col-6 col-12-xsmall">
                        <input type="email" name="email" id="email" value="" placeholder="Email Address" />
                    </div>
                    <!-- Break -->
                    <div class="col-12">
                        <textarea name="address" id="address" placeholder="Residence Address"
                            rows="6"></textarea>
                    </div>
                    <!-- Break -->
                    <div class="col-12">
                        <ul class="actions">
                            <li><input type="submit" value="Register" class="primary" /></li>
                            <li><input type="reset" value="Reset" /></li>
                        </ul>
                    </div>
                </div>
            </form>
        </div>
    </section>

</div>

@stop
