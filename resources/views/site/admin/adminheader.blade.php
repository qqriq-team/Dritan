<style>
 .main-header{
  color: white !important;
 }
</style>


<div class="main-header sticky side-header nav nav-item p-0 pl-0 padding-0">
    <div class="container-fluid">
					<div class="ham-icon">
			<img src="/assets/img/hamburger-icon.png" class="ham-menu" width="50px">
			</div>
        <div class="main-header-left ">

            <div class="responsive-logo clr-white"> <a class="navbar-brand clr-white" href="">
                 Admin Panel
                </a></div>

        </div>
        <div class="main-header-right">
            <ul class="navbar-nav ml-auto">
                @guest
                @else
                <li class="nav-item dropdown">
                    <a id="navbarDropdown " class="nav-link dropdown-toggle clr-white" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        {{ Auth::user()->first_name }}
                    </a>

                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="/logout" onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="/logout" method="POST" class="d-none">
                            @csrf
                        </form>
                    </div>
                </li>
                @endguest
            </ul>
      
        </div>
    </div>
	<div class="gratient-hr-black"></div>
</div>
<script>
$('.ham-icon').click(function() {
   $('.app-sidebar').toggle();
});
</script>
