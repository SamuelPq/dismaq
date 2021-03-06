@extends('layouts.app')
<!-- SideNav slide-out button -->
<a href="#" data-activates="slide-out" class="btn btn-primary p-3 button-collapse"><i class="fa fa-bars"></i></a>

<!-- SideNav Menu -->
<ul id="slide-out" class="side-nav fixed custom-scrollbar">

    <!-- Logo -->
    <li>
        <div class="logo-wrapper waves-light">
            <a href="#"><img src="https://mdbootstrap.com/img/logo/mdb-transparent.png" class="img-fluid flex-center"></a>
        </div>
    </li>
    <!--/. Logo -->

    <!--Social-->
    <li>
        <ul class="social">
            <li><a class="icons-sm fb-ic"><i class="fa fa-facebook"> </i></a></li>
            <li><a class="icons-sm pin-ic"><i class="fa fa-pinterest"> </i></a></li>
            <li><a class="icons-sm gplus-ic"><i class="fa fa-google-plus"> </i></a></li>
            <li><a class="icons-sm tw-ic"><i class="fa fa-twitter"> </i></a></li>
        </ul>
    </li>
    <!--/Social-->

    <!--Search Form-->
    <li>
        <form class="search-form" role="search">
            <div class="form-group waves-light">
                <input type="text" class="form-control" placeholder="Search">
            </div>
        </form>
    </li>
    <!--/.Search Form-->

    <!-- Side navigation links -->
    <li>
        <ul class="collapsible collapsible-accordion">

            <!-- Collapsible link -->
            <li><a class="collapsible-header waves-effect arrow-r"><i class="fa fa-chevron-right"></i> Collapsible menu<i class="fa fa-angle-down rotate-icon"></i></a>
                <div class="collapsible-body">
                    <ul>
                        <li><a href="#" class="waves-effect">Link 1</a>
                        </li>
                        <li><a href="#" class="waves-effect">Link 2</a>
                        </li>
                    </ul>
                </div>
            </li>

            <!-- Simple link -->
            <li><a class="waves-effect"><i class="fa fa-hand-pointer-o"></i> Simple link</a></li>

            <!-- Collapsible link -->
            <li><a class="collapsible-header waves-effect arrow-r"><i class="fa fa-eye"></i> Collapsible menu 2<i class="fa fa-angle-down rotate-icon"></i></a>
                <div class="collapsible-body">
                    <ul>
                        <li><a href="#" class="waves-effect">Link 1</a>
                        </li>
                        <li><a href="#" class="waves-effect">Link 2</a>
                        </li>
                    </ul>
                </div>
            </li>
            <!-- Simple link -->
            <li><a class="waves-effect"><i class="fa fa-diamond"></i> Simple link 2</a></li>

        </ul>
    </li>
    <!-- Side navigation links -->

</ul>
<!-- SideNav Menu -->
