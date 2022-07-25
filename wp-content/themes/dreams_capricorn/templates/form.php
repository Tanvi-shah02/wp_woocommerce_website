
    <html>
    <body>

    <form action="<?php echo esc_url( admin_url('admin-post.php') ); ?>" method="post" enctype="multipart/form-data">
        <input type="hidden" name="action" value="your_form">
        <input type="hidden" name="post_id" value="<?php echo $postid; ?>">

        <div class="pt-3">
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <?php /*<label for="fname">First Name</label>*/?>
                        <input type="text"  class="form-control" placeholder="First Name" id="fname" name="fname" required="true">
                        <span id="f_name" style="display: none;" class="small text-danger">Please Enter First Name</span>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <?php /* <label for="lname">Last Name:</label> */?>
                        <input type="text" class="form-control"  placeholder="Last Name" id="lname" name="lname" required="true">
                        <span id="l_name" style="display: none;" class="small text-danger">Please Enter Last Name</span>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <?php /*<label for="phone">Phone:</label>*/?>
                        <input type="text" class="form-control" data-inputmask='"mask": "999-999-9999"'placeholder="Eg.999-999-9999" id="phone" name="phone">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <?php /*<label for="email">Email:</label>*/?>
                        <input type="email" class="form-control" placeholder="Email Address" id="email" name="email" required="true">
                        <span id="e_mail" style="display: none;" class="small text-danger">Please Enter Email ID</span>
                    </div>
                </div>
            </div>

            <html>
            <body>

            <form action="<?php echo esc_url( admin_url('admin-post.php') ); ?>" method="post" enctype="multipart/form-data">
                <input type="hidden" name="action" value="your_form">
                <input type="hidden" name="post_id" value="<?php echo $postid; ?>">

                <div class="pt-3">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <?php /*<label for="fname">First Name</label>*/?>
                                <input type="text"  class="form-control" placeholder="First Name" id="fname" name="fname" required="true">
                                <span id="f_name" style="display: none;" class="small text-danger">Please Enter First Name</span>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <?php /* <label for="lname">Last Name:</label> */?>
                                <input type="text" class="form-control"  placeholder="Last Name" id="lname" name="lname" required="true">
                                <span id="l_name" style="display: none;" class="small text-danger">Please Enter Last Name</span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <?php /*<label for="phone">Phone:</label>*/?>
                                <input type="text" class="form-control" data-inputmask='"mask": "999-999-9999"'placeholder="Eg.999-999-9999" id="phone" name="phone">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <?php /*<label for="email">Email:</label>*/?>
                                <input type="email" class="form-control" placeholder="Email Address" id="email" name="email" required="true">
                                <span id="e_mail" style="display: none;" class="small text-danger">Please Enter Email ID</span>
                            </div>
                        </div>
                    </div>


            </form>

            </body>
            </html>


