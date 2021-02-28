<!--  BEGIN SIDEBAR  -->
<div class="sidebar-wrapper sidebar-theme">

    <nav id="sidebar">
        <div class="shadow-bottom"></div>
        <ul class="list-unstyled menu-categories" id="accordionExample">

            <li class="menu">
                <a href="{{ route('dashboard') }}" @if(request()->routeIs('dashboard')) data-active="true" @endif class="dropdown-toggle">
                    <div class="">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path><polyline points="9 22 9 12 15 12 15 22"></polyline></svg>
                        <span>Dashboard</span>
                    </div>
                </a>
            </li>

            <li class="menu">
                <a href="#portfolios" data-toggle="collapse" @if(request()->is('portfolio*')) data-active="true" @endif class="dropdown-toggle">
                    <div class="">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trending-up"><polyline points="23 6 13.5 15.5 8.5 10.5 1 18"></polyline><polyline points="17 6 23 6 23 12"></polyline></svg>
                        <span>Portfolios</span>
                    </div>
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg>
                    </div>
                </a>
                <ul class="collapse submenu list-unstyled @if(request()->is('portfolio*')) show @endif" id="portfolios" data-parent="#portfolios">
                    <li class="@if(request()->routeIs('portfolio.index')) active @endif">
                        <a href="{{ route('portfolio.index') }}"> Portfolios </a>
                    </li>
                    <li class="@if(request()->routeIs('portfolio.create')) active @endif">
                        <a href="{{ route('portfolio.create') }}"> Add Portfolio </a>
                    </li>
                </ul>
            </li>

            <li class="menu">
                <a href="#transactions" data-toggle="collapse" @if(request()->is('transaction*')) data-active="true" @endif class="dropdown-toggle">
                    <div class="">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trending-up"><polyline points="23 6 13.5 15.5 8.5 10.5 1 18"></polyline><polyline points="17 6 23 6 23 12"></polyline></svg>
                        <span>Buy / Sell</span>
                    </div>
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg>
                    </div>
                </a>
                <ul class="collapse submenu list-unstyled @if(request()->is('transaction*')) show @endif" id="transactions" data-parent="#transactions">
                    <li class="@if(request()->routeIs('transaction.buy')) active @endif">
                        <a href="{{ route('transaction.buy') }}">Buys </a>
                    </li>
                    <li class="@if(request()->routeIs('transaction.sell')) active @endif">
                        <a href="{{ route('transaction.sell') }}">Sells </a>
                    </li>
                    <li class="@if(request()->routeIs('transaction.create')) active @endif">
                        <a href="{{ route('transaction.create') }}"> Add Buy / Sell </a>
                    </li>
                </ul>
            </li>

        </ul>


    </nav>

</div>
<!--  END SIDEBAR  -->
