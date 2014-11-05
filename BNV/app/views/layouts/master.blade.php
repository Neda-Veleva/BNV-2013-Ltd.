<!DOCTYPE html>
<html>
    <head>  
        @section('head')
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="/styles/style.css">        
        @show
    </head>
    <body>
        <div class="content">
            <header>
                <div id="header-container">
                    
                    <div id="logo-container">
                        <a href="/">
                            {{ HTML::image('images/welcome.jpg','Logo')}}
                        </a>
                    </div>
                
                    <nav>
                        <ul id="main-nav-list" class="nav-list">
                            <li>
                                {{ HTML::Link('/', 'Начало') }}
                            </li>
                            <li>
                                {{ HTML::Link('/news', 'Новини') }}
                            </li>
                            <li>
                                {{ HTML::Link('/equipments', 'Продукти') }}                                
                            </li>                              
                            <li>
                                {{ HTML::Link('/contacts', 'Контакти') }}
                            </li> 
                            <li>
                                {{ HTML::Link('/profile', 'За Нас') }}
                            </li>
                        </ul>
                    </nav>
                </div>
            </header>
            <div class="wrapper">
                @yield('content')
            </div>
            <footer>
                
            </footer>
        </div>
    </body>
</html>