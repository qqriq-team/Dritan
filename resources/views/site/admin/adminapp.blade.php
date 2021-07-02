<link rel="stylesheet" href="/assets/css/admin.css">
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" >
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.css" integrity="sha512-UTNP5BXLIptsaj5WdKFrkFov94lDx+eBvbKyoe1YAfjeRPC+gT5kyZ10kOHCfNZqEui1sxmqvodNUx3KbuYI/A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

<body class="dark-theme">
    <div id="app" class="row m-0">


        <div class="app-sidebar">
            @include('site.admin.adminsidebar')

        </div>
        <div class="py-lg-4 main-content app-content py-sm-0">
            @include('site.admin.adminheader')
            <div class="content">
                @yield('content')
            </div>  
        </div>
    </div>
</body>
