<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.5.1/min/dropzone.min.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href={{ URL::asset('css/layout.css') }}>
    <link rel="stylesheet" href={{ URL::asset('css/style.css') }}>
   
    <title>SP21</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap');
    </style>
</head>
<body>
    <header>
        <div id="app">
        <nav class="contain navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a href="{{ route('home') }}>
                    <img src={{ URL::asset('svg/logo.svg') }} alt="">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">
                    </ul>
                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>
   
    </header>
    <nav>
        <div class="banner">
            <h1>Xin chào! <br>SP21 có thể giúp gì cho bạn ?</h1>
        </div>
    </nav>
    <container>
        <div class="contain">
            <div class="container__helpbox">
                <div class="sidebar">
                    <div class="logo-details">
                    <i class='bx bxl-c-plus-plus icon'></i>
                        <div class="logo_name">S P 2 1</div>
                    <i class='bx bx-menu' id="btn" ></i>
                    </div>
                    <ul class="nav-list">
                    <li>
                        <a href="{{ route("home") }}">
                        <i class='bx bx-grid-alt'></i>
                        <span class="links_name">Dashboard</span>
                        </a>
                        <span class="tooltip">Dashboard</span>
                    </li>
                    <li>
                    <a href="{{ route("returnproduct.index") }}">
                        <i class='bx bxl-product-hunt' ></i>
                        <span class="links_name">Đổi Trả</span>
                    </a>
                    <span class="tooltip">Đổi Trả</span>
                    </li>
                    <li>
                    <a href="{{ route("inbox.index") }}">
                        <i class='bx bx-chat' ></i>
                        <span class="links_name">Nhắn tin</span>
                    </a>
                    <span class="tooltip">Nhắn tin</span>
                    </li>
                    <li>
                    <a href="{{ route("feedback") }}">
                        <i class='bx bx-pie-chart-alt-2' ></i>
                        <span class="links_name">Feedback</span>
                    </a>
                    <span class="tooltip">Feedback</span>
                    </li>
                    <li>
                    <a href="{{ route("comment.index") }}">
                        <i class='bx bx-comment-detail' ></i>
                        <span class="links_name">Comment</span>
                    </a>
                    <span class="tooltip">Comment</span>
                    </li>
                    <li>
                    <a href="{{ route("insurance.index") }}">
                        <i class='bx bx-bookmark-heart' ></i>
                        <span class="links_name">Bảo hành </span>
                    </a>
                    <span class="tooltip">Bảo hành </span>
                    </li>
                    </ul>
                </div>
                <section class="home-section">
                    @yield("content")
                    <section class="question-section">
                        @yield("question-content")
                    </section>
                    <section class="security-section" >
                        @yield("security-content")
                    </section>
                    <section class="services-section" >
                        @yield("service-content")
                    </section>
                    <section class="return-section" >
                        @yield("return-content")
                    </section>
                </section>
                @livewireScripts
            </div>
        </div>
    </container>
    <footer>
        <div class="contain">
        <div class="footer__content">
            <div class="footer__text">
                <p>© 2021 SP21. Tất cả các quyền được bảo lưu.</p>
            </div>
            <div class="footer__contact">
                <div class="pc-footer__item" >
                    <div class="pc-footer__social-buttons" >
                        <a href="#" >
                            <svg class="img_icon" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: #005B89;"><path d="M12.001 2.002c-5.522 0-9.999 4.477-9.999 9.999 0 4.99 3.656 9.126 8.437 9.879v-6.988h-2.54v-2.891h2.54V9.798c0-2.508 1.493-3.891 3.776-3.891 1.094 0 2.24.195 2.24.195v2.459h-1.264c-1.24 0-1.628.772-1.628 1.563v1.875h2.771l-.443 2.891h-2.328v6.988C18.344 21.129 22 16.992 22 12.001c0-5.522-4.477-9.999-9.999-9.999z"></path></svg>
                        </a>
                        <a href="#" >
                            <svg class="img_icon" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: #005B89;"><path d="M20.26,7.8a4.82,4.82,0,0,0-3.93-2.44,3.91,3.91,0,0,0-2.54,1.09,10.58,10.58,0,0,0-1.52,1.71,11,11,0,0,0-1.63-1.72A4.39,4.39,0,0,0,7.76,5.36,5,5,0,0,0,3.7,8,11.49,11.49,0,0,0,2,14a7,7,0,0,0,.18,1.64A4.44,4.44,0,0,0,2.71,17a3.23,3.23,0,0,0,3,1.6c1.25,0,2.19-.56,3.3-2A26.4,26.4,0,0,0,11.22,13l.63-1.12c.06-.09.11-.18.16-.27l.15.25,1.79,3A14.77,14.77,0,0,0,16,17.63a3.38,3.38,0,0,0,2.55,1,3,3,0,0,0,2.54-1.23,2.2,2.2,0,0,0,.18-.28,4.1,4.1,0,0,0,.31-.63l.12-.35A6.53,6.53,0,0,0,22,15,9,9,0,0,0,22,14,11.15,11.15,0,0,0,20.26,7.8ZM10.14,11.36c-.64,1-1.57,2.51-2.37,3.61-1,1.37-1.51,1.51-2.07,1.51a1.29,1.29,0,0,1-1.15-.66,3.3,3.3,0,0,1-.39-1.7A9.74,9.74,0,0,1,5.54,9,2.8,2.8,0,0,1,7.73,7.53,3,3,0,0,1,10,8.74a14.07,14.07,0,0,1,1,1.31Zm8.42,5.12c-.48,0-.85-.19-1.38-.83A34.87,34.87,0,0,1,14.82,12l-.52-.86c-.36-.61-.71-1.16-1-1.65a2.46,2.46,0,0,1,.17-.27c.94-1.39,1.77-2.17,2.8-2.17a3.12,3.12,0,0,1,2.49,1.66,10.17,10.17,0,0,1,1.37,5.34C20.09,15.36,19.79,16.48,18.56,16.48Z"></path></svg>
                        </a>
                    </div>
                    <!--render facet: 2259:0-->
                    <div class="pc-footer__text pc-footer__right-border" >
                        <a href="{{ route("security") }}" >Điều khoản SP21</a>
                    </div>
                    <div class="pc-footer__text pc-footer__right-border" >
                    <a href="{{ route("service") }}" >Điều khoản dịch vụ</a>
                    </div>
                    <div class="pc-footer__text pc-footer__right-border" >
                        <a href="{{ route("security") }}"  >Chính sách riêng tư</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </footer>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.perfect-scrollbar/1.5.0/perfect-scrollbar.min.js"></script>
    <script src="https://unpkg.com/@coreui/coreui@3.2/dist/js/coreui.min.js"></script>
    <script src="//cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
    <script src="//cdn.datatables.net/buttons/1.2.4/js/dataTables.buttons.min.js"></script>
    <script src="//cdn.datatables.net/buttons/1.2.4/js/buttons.flash.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.2.4/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.2.4/js/buttons.print.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.2.4/js/buttons.colVis.min.js"></script>
    <script src="https://cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/pdfmake.min.js"></script>
    <script src="https://cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/vfs_fonts.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jszip/2.5.0/jszip.min.js"></script>
    <script src="https://cdn.datatables.net/select/1.3.0/js/dataTables.select.min.js"></script>
    <script src="https://cdn.ckeditor.com/ckeditor5/16.0.0/classic/ckeditor.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.22.2/moment.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/js/bootstrap-datetimepicker.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.5/js/select2.full.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.5.1/min/dropzone.min.js"></script>
    <script>
        let sidebar = document.querySelector(".sidebar");
        let closeBtn = document.querySelector("#btn");
      
        closeBtn.addEventListener("click", ()=>{
          sidebar.classList.toggle("open");
          menuBtnChange();//calling the function(optional)
        });

        // following are the code to change sidebar button(optional)
        function menuBtnChange() {
         if(sidebar.classList.contains("open")){
           closeBtn.classList.replace("bx-menu", "bx-menu-alt-right");//replacing the iocns class
         }else {
           closeBtn.classList.replace("bx-menu-alt-right","bx-menu");//replacing the iocns class
         }
        }
        </script>
</body>
</html>
