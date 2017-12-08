<?php $__env->startSection('title'); ?>
Contact
@parent
<?php $__env->stopSection(); ?>


<?php $__env->startSection('header_styles'); ?>
    <!--page level css starts-->
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/css/frontend/contact.css')); ?>">
    <!--end of page level css-->
<?php $__env->stopSection(); ?>


<?php $__env->startSection('top'); ?>
    <div class="breadcum">
        <div class="container">
            <ol class="breadcrumb">
                <li>
                    <a href="<?php echo e(route('home')); ?>"> <i class="livicon icon3 icon4" data-name="home" data-size="18" data-loop="true" data-c="#3d3d3d" data-hc="#3d3d3d"></i>Dashboard
                    </a>
                </li>
                <li class="hidden-xs">
                    <i class="livicon icon3" data-name="angle-double-right" data-size="18" data-loop="true" data-c="#01bc8c" data-hc="#01bc8c"></i>
                    <a href="#">Contact</a>
                </li>
            </ol>
            <div class="pull-right">
                <i class="livicon icon3" data-name="cellphone" data-size="20" data-loop="true" data-c="#3d3d3d" data-hc="#3d3d3d"></i> Contact
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>



<?php $__env->startSection('content'); ?>
    <!-- Map Section Start -->
    <div class="">
        <div id="map" style="width:100%; height:400px;"></div>
    </div>
    <!-- //map Section End -->
    <!-- Container Section Start -->
    <div class="container">
        <div class="row">
            <!-- Contact form Section Start -->
            <div class="col-md-6">
                <h2>Contact Form</h2>
                <!-- Notifications -->
                <?php echo $__env->make('notifications', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

                <form class="contact" id="contact" action="<?php echo e(route('contact')); ?>" method="POST">
                    <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>" />
                    <div class="form-group">
                        <input type="text" name="contact-name" class="form-control input-lg" placeholder="Your name" required>
                    </div>
                    <div class="form-group">
                        <input type="email" name="contact-email" class="form-control input-lg" placeholder="Your email address" required>
                    </div>
                    <div class="form-group">
                        <textarea name="contact-msg" class="form-control input-lg no-resize resize_vertical" rows="6" placeholder="Your comment" required></textarea>
                    </div>
                    <div class="input-group">
                        <button class="btn btn-primary" type="submit">submit</button>
                        <button class="btn btn-danger" type="reset">cancel</button>
                    </div>
                </form>
            </div>
            <!-- //Conatc Form Section End -->
            <!-- Address Section Start -->
            <div class="col-md-6 col-sm-6" id="address_margt">
                <div class="media media-right">
                    <div class="media-left media-top">
                        <a href="#">
                            <div class="box-icon">
                                <i class="livicon" data-name="home" data-size="22" data-loop="true" data-c="#fff" data-hc="#fff"></i>
                            </div>
                        </a>
                    </div>
                    <div class="media-body">
                        <h4 class="media-heading">Address:</h4>
                        <div class="danger">Jyostna</div>
                        <address>
                            Pediatric Surgeons of Alaska
                            <br> 3340 Providence Drive #565
                            <br> Anchorage, AK(Alaska)
                            <br> North Las Vegas, NV
                        </address>
                    </div>
                </div>
                <div class="media padleft10">
                    <div class="media-left media-top">
                        <a href="#">
                            <div class="box-icon">
                                <i class="livicon" data-name="phone" data-size="22" data-loop="true" data-c="#fff" data-hc="#fff"></i>
                            </div>
                        </a>
                    </div>
                    <div class="media-body padbtm2">
                        <h4 class="media-heading">Telephone:</h4> (703) 717-4200
                        <br /> Fax:400 423 1456
                    </div>
                </div>
            </div>
            <!-- //Address Section End -->
        </div>
    </div>
    
<?php $__env->stopSection(); ?>


<?php $__env->startSection('footer_scripts'); ?>
    <!-- page level js starts-->
    <script src="https://maps.google.com/maps/api/js?sensor=true"></script>
    <script type="text/javascript" src="<?php echo e(asset('assets/vendors/gmaps/js/gmaps.min.js')); ?>" ></script>
    <!--page level js ends-->
    <script>

        $(document).ready(function() {
            var map = new GMaps({
                el: '#map',
                lat: 38.8921021,
                lng: -77.0260358
            });
            map.addMarker({
                lat: 38.8921021,
                lng: -77.0260358,
                title: 'Washington'
            });
        });
    </script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts/default', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>