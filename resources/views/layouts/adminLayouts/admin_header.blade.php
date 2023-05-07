<!--top-Header-menu-->
<div id="user-nav" class="navbar navbar-inverse">
  <ul class="nav" >
    <li><a title="" href="/admin/dashboard" style="color:white;"><i class="fa fa-home" aria-hidden="true"  style="color:white; font-size:150%"></i>  <span class="text">Home</span></a>
     </li> <!--<ul class="dropdown-menu">
        <li><a href="{{ url('/admin/settings') }}" ><i class="icon-user"></i> <span style="color:white;">Settings</span></a></li>
        <li class="divider"></li>
        
      </ul>-->
<!--     </li>
    <li class="dropdown" id="menu-messages"><a href="#" data-toggle="dropdown" data-target="#menu-messages" class="dropdown-toggle"><i class="icon icon-envelope"></i> <span class="text">Messages</span> <span class="label label-important">5</span> <b class="caret"></b></a>
      <ul class="dropdown-menu">
        <li><a class="sAdd" title="" href="#"><i class="icon-plus"></i> new message</a></li>
        <li class="divider"></li>
        <li><a class="sInbox" title="" href="#"><i class="icon-envelope"></i> inbox</a></li>
        <li class="divider"></li>
        <li><a class="sOutbox" title="" href="#"><i class="icon-arrow-up"></i> outbox</a></li>
        <li class="divider"></li>
        <li><a class="sTrash" title="" href="#"><i class="icon-trash"></i> trash</a></li>
      </ul>
    </li> -->
    <li class=""><a title="" href="{{ url('/admin/settings') }}"style="color:white;"><i class="fa fa-cog" aria-hidden="true"  style="color:white; font-size:150%"></i><span class="text">Settings</span></a></li>
    <li class=""><a title="" href="{{ url('logout') }}" style="color:white;"><i class="fa fa-sign-out" aria-hidden="true"  style="color:white; font-size:150%"></i><span class="text">Logout</span></a></li>
  </ul>
</div>
<!--close-top-Header-menu-->
<!--start-top-serch-->
<div id="search">
  <input type="text" placeholder="Search here..."/>
  <button type="submit" class="tip-bottom" title="Search"><i class="icon-search icon-white"></i></button>
</div>
<!--close-top-serch-->
