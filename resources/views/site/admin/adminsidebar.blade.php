@guest


<ul class="my-5">

				<li class="nav-item">
                    <a class="nav-link" href="{{ route('login', app()->getLocale()) }}">Prijavi se</a>
                </li>
                @if (Route::has('register'))
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('register', app()->getLocale()) }}">Registruj se</a>
                </li>
                @endif 
	</ul>

@else
<aside class="app-sidebar sidebar-scroll ps ps--active-y">
    <div class="main-sidebar-header  active"> 
        <a class="desktop-logo logo-light active" href="">
            <img src="/assets/img/Group 49.svg" class="main-logo p-4 w-100" alt="logo"></a> 
           
            </div>
    <div class="main-sidemenu active">
        <div class="app-sidebar__user clearfix">
            <div class="dropdown user-pro-body p-0">
                <div class="user-info m-0 mb-5">
                    <span class="mb-0 text-muted">Vaš admin panel</span> <h4 class="font-weight-semibold mt-0 mb-0">{{ Auth::user()->first_name }} {{ Auth::user()->last_name }} </h4>
                </div>
            </div>
        </div>
        <ul class="side-menu" id="side-menu">
          <!--  <li class="side-item side-item-category">Glavni meni</li> -->
            <li class="slide "> <a class="side-menu__item " href=""><span id="dash" class="side-menu__label "><img src="/assets/img/ListaBlog.svg" class="p-1 mr-2" width="35px" alt="logo">Lista blogova</span></a> </li>
			
            <li class="slide"><a class="side-menu__item" href="/{{app()->getLocale()}}/blogs/create"><span id="blog-add" class="side-menu__label"><img src="/assets/img/AddBlog.svg" class="p-1 mr-2" width="35px" /> Dodaj Blog </span></a></li>




        </ul>
		 <div class="copyright">
        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="191" height="38" viewBox="0 0 191 38"><defs><style>.a{fill:url(#a);}.b,.c{fill:#fff;}.b{font-size:8px;font-family:Roboto-Regular, Roboto;}</style><linearGradient id="a" y1="0.5" x2="1" y2="0.5" gradientUnits="objectBoundingBox"><stop offset="0" stop-color="#d5303b"/><stop offset="1" stop-color="#282d39"/></linearGradient></defs><rect class="a" width="191" height="38" transform="translate(191 38) rotate(180)"/><g transform="translate(10 -1041)"><text class="b" transform="translate(49 1063)"><tspan x="0" y="0">Designed by</tspan></text><path class="c" d="M40.7,13.141a3.816,3.816,0,0,0,.567-1.153,5.162,5.162,0,0,0,.2-1.493,4.794,4.794,0,0,0-.305-1.774,3.677,3.677,0,0,0-.833-1.276A3.46,3.46,0,0,0,39.1,6.671a4.4,4.4,0,0,0-1.518-.261,4.3,4.3,0,0,0-1.488.261,3.547,3.547,0,0,0-1.237.774c-.084.084-.168.172-.246.266l-.227.271V6.6H32.819V8.051l-.237-.365a1.907,1.907,0,0,0-.562-.562,4.909,4.909,0,0,0-2.71-.626c-.325,0-.7.015-1.123.044a10.015,10.015,0,0,0-1.109.143V7.972L26.852,7.7c-.079-.094-.158-.182-.237-.261a3.46,3.46,0,0,0-1.237-.774A4.4,4.4,0,0,0,23.862,6.4a4.3,4.3,0,0,0-1.488.261,3.547,3.547,0,0,0-1.237.774,3.272,3.272,0,0,0-.251.271l-.1.118-.1-.118c-.079-.094-.163-.187-.246-.271a3.46,3.46,0,0,0-1.237-.774A4.4,4.4,0,0,0,17.688,6.4a4.3,4.3,0,0,0-1.488.261,3.547,3.547,0,0,0-1.237.774,3.756,3.756,0,0,0-.847,1.276,4.6,4.6,0,0,0-.315,1.774,4.869,4.869,0,0,0,.251,1.621,3.656,3.656,0,0,0,.685,1.217,3.33,3.33,0,0,0,1.03.8,4.223,4.223,0,0,0,1.3.389,5.377,5.377,0,0,0,.872.025l.133,0v.7h1.562v-1.1L19.7,14.1c.084-.044.163-.094.237-.138a3.269,3.269,0,0,0,.744-.66l.1-.118.1.118a.068.068,0,0,1,.015.02l.015.015a3.329,3.329,0,0,0,1.03.8,4.223,4.223,0,0,0,1.3.389,5.377,5.377,0,0,0,.872.025l.133,0v.7H25.8v-1.1l.069-.034c.084-.044.163-.094.237-.138a3.256,3.256,0,0,0,.744-.66l.227-.271v1.375h1.562V11.47H29.72l.039.044a7.781,7.781,0,0,1,.473.631c.158.232.315.478.478.729s.315.522.468.8c.138.251.276.493.414.739h2.784V13.057l.241.286a3.33,3.33,0,0,0,1.03.8,4.223,4.223,0,0,0,1.3.389,5.377,5.377,0,0,0,.872.025l.133,0v.7H39.53v-1.1l.069-.034c.084-.044.163-.094.237-.138A3.782,3.782,0,0,0,40.7,13.141ZM19.831,11.6h0a2.644,2.644,0,0,1-.443.862,1.519,1.519,0,0,1-.148.163l-.039.039H18.087V13.2l-.113.01a2.408,2.408,0,0,1-.266.015,2.276,2.276,0,0,1-.961-.2,1.953,1.953,0,0,1-.714-.567,2.644,2.644,0,0,1-.443-.862,3.865,3.865,0,0,1-.153-1.109,3.736,3.736,0,0,1,.153-1.1,2.574,2.574,0,0,1,.443-.867,2.074,2.074,0,0,1,.714-.572,2.173,2.173,0,0,1,.966-.207,2.318,2.318,0,0,1,.956.2,1.93,1.93,0,0,1,.719.567,2.621,2.621,0,0,1,.443.867,3.95,3.95,0,0,1,.153,1.114A3.9,3.9,0,0,1,19.831,11.6ZM26,11.6h0a2.644,2.644,0,0,1-.443.862,1.519,1.519,0,0,1-.148.163l-.039.039H24.256V13.2l-.113.01a2.408,2.408,0,0,1-.266.015,2.276,2.276,0,0,1-.961-.2,1.953,1.953,0,0,1-.714-.567,2.644,2.644,0,0,1-.443-.862,3.865,3.865,0,0,1-.153-1.109,3.736,3.736,0,0,1,.153-1.1,2.574,2.574,0,0,1,.443-.867,2.074,2.074,0,0,1,.714-.572,2.173,2.173,0,0,1,.966-.207,2.318,2.318,0,0,1,.956.2,1.93,1.93,0,0,1,.719.567A2.621,2.621,0,0,1,26,9.376a3.95,3.95,0,0,1,.153,1.114A4.082,4.082,0,0,1,26,11.6ZM30.824,10a3.193,3.193,0,0,1-1.532.271h-.641V7.839l.118-.01c.094-.01.192-.015.3-.025s.232-.01.365-.01a2.885,2.885,0,0,1,1.385.266,1.014,1.014,0,0,1,.512.956A1.044,1.044,0,0,1,30.824,10Zm2.01,3.375-.237-.394c-.034-.054-.069-.113-.1-.168-.172-.276-.35-.552-.527-.808s-.345-.488-.508-.685l-.108-.133.158-.064a2.493,2.493,0,0,0,1.069-.788s.01-.01.01-.015l.01-.01.232-.33v3.395ZM39.7,11.6a2.644,2.644,0,0,1-.443.862,1.52,1.52,0,0,1-.148.163l-.039.039H37.959V13.2l-.113.01a2.408,2.408,0,0,1-.266.015,2.276,2.276,0,0,1-.961-.2,1.953,1.953,0,0,1-.714-.567,2.644,2.644,0,0,1-.443-.862,3.865,3.865,0,0,1-.153-1.109,3.736,3.736,0,0,1,.153-1.1,2.621,2.621,0,0,1,.443-.867,2.074,2.074,0,0,1,.714-.572,2.173,2.173,0,0,1,.966-.207,2.318,2.318,0,0,1,.956.2,1.93,1.93,0,0,1,.719.567,2.621,2.621,0,0,1,.443.867,3.95,3.95,0,0,1,.153,1.114A3.734,3.734,0,0,1,39.7,11.6Z" transform="translate(81.528 1048.6)"/></g></svg>
    </div>
    </div>
	
    <div class="ps__rail-x" style="left: 0px; bottom: 0px;">
        <div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div>
    </div>
    <div class="ps__rail-y" style="top: 0px; height: 937px; right: 0px;">
        <div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 610px;"></div>
    </div>
	
</aside>

<script src="https://code.jquery.com/jquery-3.6.0.slim.js"></script>
<script
 src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.5.1/gsap.min.js"
 integrity="sha512-IQLehpLoVS4fNzl7IfH8Iowfm5+RiMGtHykgZJl9AWMgqx0AmJ6cRWcB+GaGVtIsnC4voMfm8f2vwtY+6oPjpQ=="
 crossorigin="anonymous"
></script>
<script>
$(document).ready(function () {
  let pathname = window.location.pathname;

  if (pathname == '/mne/dashboard') {
    $('#dash').addClass('active-slide-admin');
  }
  if (pathname == '/mne/blogs') {
    $('#blog-list').addClass('active-slide-admin');
  }
  if (pathname == '/mne/blogs/create') {
    $('#blog-add').addClass('active-slide-admin');
  }
  if (pathname == '/cars/create') {
    $('#add-car').addClass('active-slide-admin');
  }
  if (pathname == '/admin/vehicles') {
    $('#card-list').addClass('active-slide-admin');
  }

});
</script>

@endguest