<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Gentallela Alela! | </title>

    <?php $__env->startSection('styles_vendors'); ?>
      <!-- Bootstrap  -->
      <?php echo Html::style('assets/admin/vendors/bootstrap/dist/css/bootstrap.min.css'); ?>

      <!-- Font Awesome -->
      <?php echo Html::style('assets/admin/vendors/font-awesome/css/font-awesome.min.css'); ?>

      <!-- jQuery custom content scroller -->
      <?php echo Html::style('assets/admin/vendors/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.min.css'); ?>

      <!-- Custom Theme Style -->
      <?php echo Html::style('assets/admin/css/custom.css'); ?>

    <?php echo $__env->yieldSection(); ?>
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col menu_fixed">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="/admin" class="site_title"><i class="fa fa-paw"></i> <span>Melhor Idade!</span></a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile">
              <div class="profile_pic">
                <?php echo e(Html::image("assets/admin/images/img.jpg", 'Melhor idade', array('class' => 'img-circle profile_img'))); ?>

              </div>
              <div class="profile_info">
                <span>Bem,</span>
                <h2>Seu Idoso</h2>
              </div>
            </div>
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <ul class="nav side-menu">
                  <li><a><i class="fa fa-home"></i> usuario <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                        <?php echo $__env->yieldContent('menu'); ?>
                    </ul>
                  </li>
                </ul>
              </div>

            </div>
            <!-- /sidebar menu -->

            <!-- /menu footer buttons -->
            <div class="sidebar-footer hidden-small">
              <a data-toggle="tooltip" data-placement="top" title="Settings">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Lock">
                <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Logout">
                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
              </a>
            </div>
            <!-- /menu footer buttons -->
          </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">

          <div class="nav_menu">
            <nav class="" role="navigation">
              <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
              </div>

              <ul class="nav navbar-nav navbar-right">
                <li class="">
                  <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                    <?php echo e(Html::image("assets/admin/images/img.jpg", 'Melhor idade')); ?>John Doe
                    <span class=" fa fa-angle-down"></span>
                  </a>
                  <ul class="dropdown-menu dropdown-usermenu pull-right">
                    <li><a href="javascript:;">  Profile</a>
                    </li>
                    <!--
                    <li>
                      <a href="javascript:;">
                        <span class="badge bg-red pull-right">50%</span>
                        <span>Settings</span>
                      </a>
                    </li>
                    <li>
                      <a href="javascript:;">Help</a>
                    </li> -->
                    <li><a href="/login"><i class="fa fa-sign-out pull-right"></i> Log Out</a>
                    </li>
                  </ul> 
                </li>
                <!--
                <li role="presentation" class="dropdown">
                  <a href="javascript:;" class="dropdown-toggle info-number" data-toggle="dropdown" aria-expanded="false">
                    <i class="fa fa-envelope-o"></i>
                    <span class="badge bg-green">6</span>
                  </a>
                  <ul id="menu1" class="dropdown-menu list-unstyled msg_list" role="menu">
                    <li>
                      <a>
                        <span class="image">
                                          <?php echo e(Html::image("assets/admin/images/img.jpg", 'Melhor idade', array('class' => 'img-circle profile_img'))); ?>

                                      </span>
                        <span>
                                          <span>John Smith</span>
                        <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                                          Film festivals used to be do-or-die moments for movie makers. They were where...
                                      </span>
                      </a>
                    </li>
                    <li>
                      <a>
                        <span class="image">
                                          <?php echo e(Html::image("assets/admin/images/img.jpg", 'Melhor idade', array('class' => 'img-circle profile_img'))); ?>

                                      </span>
                        <span>
                                          <span>John Smith</span>
                        <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                                          Film festivals used to be do-or-die moments for movie makers. They were where...
                                      </span>
                      </a>
                    </li>
                    <li>
                      <a>
                        <span class="image">
                                          <?php echo e(Html::image("assets/admin/images/img.jpg", 'Melhor idade', array('class' => 'img-circle profile_img'))); ?>

                                      </span>
                        <span>
                                          <span>John Smith</span>
                        <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                                          Film festivals used to be do-or-die moments for movie makers. They were where...
                                      </span>
                      </a>
                    </li>
                    <li>
                      <a>
                        <span class="image">
                                          <?php echo e(Html::image("assets/admin/images/img.jpg", 'Melhor idade', array('class' => 'img-circle profile_img'))); ?>

                                      </span>
                        <span>
                                          <span>John Smith</span>
                        <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                                          Film festivals used to be do-or-die moments for movie makers. They were where...
                                      </span>
                      </a>
                    </li>
                    <li>
                      <div class="text-center">
                        <a>
                          <strong>See All Alerts</strong>
                          <i class="fa fa-angle-right"></i>
                        </a>
                      </div>
                    </li>
                  </ul>
                </li> -->

              </ul>
            </nav>
          </div>

        </div>
        <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <?php echo $__env->yieldContent('content'); ?>
              </div>
            </div>
          </div>
        </div>
        <!-- /page content -->

        <!-- footer content -->
        <footer>
          <div class="pull-right">
            Melhor Idade SA - Visite nosso GitHub: <a href="https://github.com/melhoridadesa">MelhorIdade</a>
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>
    </div>

    <?php $__env->startSection('vendor_scripts'); ?>
      <!-- jQuery -->
      <?php echo HTML::script('assets/admin/vendors/jquery/dist/jquery.min.js'); ?>

      <!-- Bootstrap -->
      <?php echo HTML::script('assets/admin/vendors/bootstrap/dist/js/bootstrap.min.js'); ?>

      <!-- FastClick -->
      <?php echo HTML::script('assets/admin/vendors/fastclick/lib/fastclick.js'); ?>

      <!-- NProgress -->
      <?php echo HTML::script('assets/admin/vendors/nprogress/nprogress.js'); ?>

      <!-- jQuery custom content scroller -->
      <?php echo HTML::script('assets/admin/vendors/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.concat.min.js'); ?>

      <!-- Custom Theme Scripts -->
      <?php echo HTML::script('assets/admin/js/custom.js'); ?>

    <?php echo $__env->yieldSection(); ?>
  </body>
</html>