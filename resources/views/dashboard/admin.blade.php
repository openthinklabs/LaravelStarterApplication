@extends('layouts.app')

@section('content')
<div id="contextWrap">
    <!--sidebar-->
    <div class="ui sidebar vertical left menu overlay  borderless visible sidemenu inverted  grey" style="-webkit-transition-duration: 0.1s; transition-duration: 0.1s;" data-color="grey">
        <a class="item logo" href="{{route('home')}}">
            <img src="img/logo.png" alt=""  class='ui small image' /><img src="img/thumblogo.png" alt="stagblogo" class="displaynone" />
        </a>
        <div class="ui accordion inverted">

            <a href="#" class="item">
                <i class="ion-speedometer titleIcon icon"></i> Dashboard
            </a>

            <div class="title item">
                <i class="ion-ios-lightbulb titleIcon icon"></i>

                <i class="dropdown icon"></i> Apps
            </div>
            <div class="content">
                <a class="item" href="#">
                Inbox
            </a>

                <a class="item" href="#">
                Chat
            </a>

                <a class="item" href="#">
                Filter
            </a>
                <a class="item" href="#">
                Todo
            </a>
            </div>

        </div>

        <div class="ui dropdown item displaynone scrolling">
            <a href="#">
              <span>Dashboard</span>
              <i class="ion-speedometer icon"></i>
            </a>
        </div>


        <div class="ui dropdown item displaynone scrolling">
            <span>Apps</span>
            <i class="ion-ios-lightbulb icon"></i>
            <div class="menu">
                <div class="header">
                    Apps
                </div>
                <div class="ui divider"></div>
                <a class="item" href="inbox.html">
                Inbox
            </a>
                <a class="item" href="filter.html">
                Filter
            </a>
                <a class="item" href="todo.html">
                Todo
            </a>
            </div>
        </div>


        <div class="ui divider"></div>
        <a class="item" href="#">
            <i class="ion-code icon"></i> <span class="colhidden">Document</span>
        </a>
    </div>

    <!--sidebar-->
    <div class="ui right sidebar">
        <div class="ui pointing secondary two item tabular menu">
            <a class="item active" data-tab="first"><i class="red icon ion-chatbox-working icon"></i></a>

            <a class="item" data-tab="fourth"><i class="blue icon ion-gear-a"></i></a>
        </div>
        <div class="ui tab active" data-tab="first">
            <div class="ui small feed">
                <h4 class="ui header">Followers Activity</h4>
                <div class="event">
                    <div class="label">
                        <img src="img/avatar/people/Abraham.png" alt="label-image" />
                    </div>
                    <div class="content">
                        <div class="date">
                            3 days ago
                        </div>
                        <div class="summary">
                            You added <a>Jenny Hess</a> to your <a>coworker</a> group.
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="ui tab" data-tab="fourth">
            <h4 class="ui header">Navbar Color</h4>
            <div class="ui basic segment">

                <ul class="colorlist">
                    <li>
                        <a class="ui segment yellow inverted" data-addClass="inverted yellow">
                        </a>
                    </li>
                    <li>
                        <a class="ui segment red inverted" data-addClass="inverted red">
                        </a>
                    </li>
                    <li>
                        <a class="ui segment blue inverted" data-addClass="inverted blue">
                        </a>
                    </li>
                    <li>
                        <a class="ui segment black inverted" data-addClass="inverted black">
                        </a>
                    </li>
                    <li>
                        <a class="ui segment orange inverted" data-addClass="inverted orange">
                        </a>
                    </li>
                    <li>
                        <a class="ui segment pink inverted" data-addClass="inverted pink">
                        </a>
                    </li>
                    <li>
                        <a class="ui segment green inverted" data-addClass="inverted green">
                        </a>
                    </li>
                    <li>
                        <a class="ui segment purple inverted" data-addClass="inverted purple">
                        </a>
                    </li>
                    <li>
                        <a class="ui segment violet inverted" data-addClass="inverted violet">
                        </a>
                    </li>
                    <li>
                        <a class="ui segment brown inverted" data-addClass="inverted brown">
                        </a>
                    </li>
                    <li>
                        <a class="ui segment teal inverted" data-addClass="inverted teal">
                        </a>
                    </li>
                    <li>
                        <a class="ui segment greenli inverted" data-addClass="inverted greenli">
                        </a>
                    </li>
                    <li>
                        <a class="ui segment grey inverted" data-addClass="inverted grey">
                        </a>
                    </li>
                    <li>
                        <a class="ui segment redli inverted" data-addClass="inverted redli">
                        </a>
                    </li>
                    <li>
                        <a class="ui segment yellowli inverted" data-addClass="inverted yellowli">
                        </a>
                    </li>
                    <li>
                        <a class="ui segment blueli inverted" data-addClass="inverted blueli">
                        </a>
                    </li>
                    <li>
                        <a class="ui segment darkpurpleli inverted" data-addClass="inverted darkpurpleli">
                        </a>
                    </li>
                    <li>
                        <a class="ui segment darkorangeli inverted" data-addClass="inverted darkorangeli">
                        </a>
                    </li>
                    <li>
                        <a class="ui segment greenli2 inverted" data-addClass="inverted greenli2">
                        </a>
                    </li>
                    <li>
                        <a class="ui segment pinkli inverted" data-addClass="inverted pinkli">
                        </a>
                    </li>
                    <li>
                        <a class="ui segment lightyellowli inverted" data-addClass="inverted lightyellowli">
                        </a>
                    </li>
                    <li>
                        <a class="ui segment darkli inverted" data-addClass="inverted darkli">
                        </a>
                    </li>
                    <li>
                        <a class="ui segment lightbrownli inverted" data-addClass="inverted lightbrownli">
                        </a>
                    </li>
                </ul>
            </div>
            <h4 class="ui header">Sidebar Color</h4>
            <div class="ui basic segment">

                <ul class="sidecolor">
                    <li>
                        <a class="ui segment yellow inverted" data-addClass="inverted yellow">
                        </a>
                    </li>
                    <li>
                        <a class="ui segment red inverted" data-addClass="inverted red">
                        </a>
                    </li>
                    <li>
                        <a class="ui segment blue inverted" data-addClass="inverted blue">
                        </a>
                    </li>
                    <li>
                        <a class="ui segment black inverted" data-addClass="inverted black">
                        </a>
                    </li>
                    <li>
                        <a class="ui segment orange inverted" data-addClass="inverted orange">
                        </a>
                    </li>
                    <li>
                        <a class="ui segment pink inverted" data-addClass="inverted pink">
                        </a>
                    </li>
                    <li>
                        <a class="ui segment green inverted" data-addClass="inverted green">
                        </a>
                    </li>
                    <li>
                        <a class="ui segment purple inverted" data-addClass="inverted purple">
                        </a>
                    </li>
                    <li>
                        <a class="ui segment violet inverted" data-addClass="inverted violet">
                        </a>
                    </li>
                    <li>
                        <a class="ui segment brown inverted" data-addClass="inverted brown">
                        </a>
                    </li>
                    <li>
                        <a class="ui segment teal inverted" data-addClass="inverted teal">
                        </a>
                    </li>
                    <li>
                        <a class="ui segment greenli inverted" data-addClass="inverted greenli">
                        </a>
                    </li>
                    <li>
                        <a class="ui segment grey inverted" data-addClass="inverted grey">
                        </a>
                    </li>
                    <li>
                        <a class="ui segment redli inverted" data-addClass="inverted redli">
                        </a>
                    </li>
                    <li>
                        <a class="ui segment yellowli inverted" data-addClass="inverted yellowli">
                        </a>
                    </li>
                    <li>
                        <a class="ui segment blueli inverted" data-addClass="inverted blueli">
                        </a>
                    </li>
                    <li>
                        <a class="ui segment darkpurpleli inverted" data-addClass="inverted darkpurpleli">
                        </a>
                    </li>
                    <li>
                        <a class="ui segment darkorangeli inverted" data-addClass="inverted darkorangeli">
                        </a>
                    </li>
                    <li>
                        <a class="ui segment greenli2 inverted" data-addClass="inverted greenli2">
                        </a>
                    </li>
                    <li>
                        <a class="ui segment pinkli inverted" data-addClass="inverted pinkli">
                        </a>
                    </li>
                    <li>
                        <a class="ui segment lightyellowli inverted" data-addClass="inverted lightyellowli">
                        </a>
                    </li>
                    <li>
                        <a class="ui segment darkli inverted" data-addClass="inverted darkli">
                        </a>
                    </li>
                    <li>
                        <a class="ui segment lightbrownli inverted" data-addClass="inverted lightbrownli">
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="pusher">
        <!--navbar-->
        <div class="navslide navwrap">
            <div class="ui menu icon borderless grid" data-color="inverted white">
                <a class="item labeled openbtn">
                    <i class="ion-navicon-round big icon"></i>
                </a>
                <a class="item labeled expandit" onclick="toggleFullScreen(document.body)">
                    <i class="ion-arrow-expand big icon"></i>
                </a>
                <div class="item ui colhidden">
                    <div class="ui icon input">
                        <input type="text" placeholder="Search...">
                        <i class="search icon"></i>
                    </div>
                </div>
                <div class="right menu colhidden">

                    <div class="ui dropdown item labeled icon">
                        <i class="bell icon"></i>
                        <div class="ui red label mini circular">6</div>
                        <div class="menu">
                            <div class="header">
                                People You Might Know
                            </div>
                            <div class="item">
                                <img class="ui avatar image" src="img/avatar/people/enid.png" alt="label-image" /> Janice Robinson
                            </div>
                            <div class="item">
                                <img class="ui avatar image" src="img/avatar/people/Hershell.png" alt="label-image" /> Cynthia May
                            </div>
                            <div class="item">
                                <img class="ui avatar image" src="img/avatar/people/Rick.png" alt="label-image" /> Hugh Carter
                            </div>
                            <div class="header">
                                Your Friends' Friends
                            </div>
                            <div class="item">
                                <img class="ui avatar image" src="img/avatar/people/Meggie.png" alt="label-image" /> Pauline Cain
                            </div>
                            <div class="item">
                                <img class="ui avatar image" src="img/avatar/people/Glenn.png" alt="label-image" /> Marco Beck
                            </div>
                            <div class="item">
                                <img class="ui avatar image" src="img/avatar/people/Daryl.png" alt="label-image" /> Sue Quinn
                            </div>
                        </div>
                    </div>
                    <div class="ui dropdown item">
                        Language <i class="dropdown icon"></i>
                        <div class="menu">
                            <a class="item"><i class="united states flag"></i>English</a>
                            <a class="item"><i class="indonesia flag"></i>Indonesia</a>
                        </div>
                    </div>
                    <div class="ui dropdown item">
                        <img class="ui mini circular image" src="img/avatar/people/enid.png" alt="label-image" />
                        <div class="menu">
                            <a class="item" href="#">Profile</a>
                            <a class="item" href="#">Settings</a>
                            <div class="ui divider"></div>
                            <a class="item" hraf="#">Need Help?</a>
                            <a class="item" href="{{ route('logout') }}"
                              onclick="event.preventDefault();
                                          document.getElementById('logout-form').submit();">
                             {{ __('Logout') }}
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </div>
                    </div>
                    <a class="item labeled rightsidebar computer only">
                        <i class="ion-wrench large icon"></i>
                    </a>

                </div>
            </div>
        </div>
        <!--navbar-->
        <!--maincontent-->
        <div class="mainWrap navslide">
            <div class="ui one column left aligned padded grid stackable">
                <div class="column">
                    <div class="ui one column grid">
                        <div class="column">
                            <div class="ui segment">
                                <h1 class="ui dividing header">Dashboard</h1>

                                    <div class="ui grey labeled icon menu">
                                    <a class="item">
                                      <i class="big user outline icon"></i>
                                      Personal Data
                                    </a>
                                    <a class="item">
                                      <i class="video camera icon"></i>
                                      Other Menu
                                    </a>
                                    <a class="item">
                                      <i class="video play icon"></i>
                                      Other Menu
                                    </a>
                                  </div>
                                  <div class="ui equal width left aligned padded grid stackable">
                                    <div class="stretched row">
                                        <div class="sixteen wide tablet five wide computer column">
                                            <div class="ui segment">
                                                <h5 class="ui dividing header">
                                                    Recent Activities
                                                </h5>
                                                <div class="ui feed timeline">
                                                    <div class="event">
                                                        <div class="label">
                                                            <img src="img/avatar/people/Abraham.png" alt="label-image" />
                                                        </div>
                                                        <div class="content">
                                                            <div class="summary">
                                                                <a class="user">
                                                                Francis	Baldwin
                                                            </a> added you as a friend
                                                                <div class="date">
                                                                    1 Hour Ago
                                                                </div>
                                                            </div>
                                                            <div class="meta">
                                                                <a class="like">
                                                                    <i class="like icon"></i> 4 Likes
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="sixteen wide tablet five wide computer column">
                    
                                            <div class="ui segment">
                                                <div class="ui middle aligned relaxed list">
                                                    <div class="item">
                                                        <div class="right floated content">
                                                            <a class="ui red basic label">Just Now</a>
                                                        </div>
                                                        <i class="icon large ion-pizza circular red"></i>
                                                        <div class="content">
                                                            You have 4 pending tasks.
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="sixteen wide tablet six wide computer column">
                                        </div>
                                    </div>
                                </div>
                                                                  
                            </div>                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--maincontent-->
    </div>
</div>
<!--counter number-->
<script src="plugins/counterup/jquery.counterup.min.js"></script>
<script src="plugins/counterup/jquery.waypoints.min.js"></script>
<!--counter number-->
<script src="plugins/js-cookie/js.cookie.js"></script>
<!--flot chart-->
<!--chartjs chart-->
<script src="plugins/chartjs/chart.min.js"></script>
<!--chartjs chart-->

<script src="plugins/nicescrool/jquery.nicescroll.pathced.js"></script>

<script data-pace-options='{ "ajax": false }' src="plugins/pacejs/pace.js"></script>

<script src="plugins/chartist/chartist.min.js"></script>

<script src="js/dashboard.js"></script>
<script src="js/main.js"></script>
@endsection