 <div class="side-content-wrap">
        <div
          class="sidebar-left open rtl-ps-none"
          data-perfect-scrollbar
          data-suppress-scroll-x="true"
        >
          <ul class="navigation">
            <li class="nav-item active" data-item="welcome">
              </a>
            </li>
            </li>
          </ul>
        </div>

        <div
          class="sidebar-left-secondary rtl-ps-none"
          data-perfect-scrollbar
          data-suppress-scroll-x="true"
        >
        <i class="sidebar-close i-Close" (click)="toggelSidebar()"></i>
        <header>
            <div class="logo">
                <img src="{{asset('assets/images/logo-text.png')}}" alt="">
            </div>
        </header>
          <!-- Submenu Dashboards -->
          <div class="submenu-area" data-parent="welcome">

            <ul class="childNav">
            <li class="nav-item">
                        <a href="{{route('starter')}}">
                        <i class="nav-icon i-Bell1"></i>
                        <span class="item-name">Welcome</span>
                        </a>
                    </li>
                    <div class="separator border-top"></div>
            <li class="nav-item">
                        <a href="{{route('pools')}}">
                        <i class="nav-icon i-Bell1"></i>
                        <span class="item-name">Mining Pools</span>
                        </a>
                    </li>
                    <div class="separator border-top"></div>
                    <li class="nav-item">
                        <a href="{{route('network')}}">
                        <i class="nav-icon i-Bell1"></i>
                        <span class="item-name">Network Status</span>
                        </a>
                    </li>
                    <div class="separator border-top"></div>
                    <li class="nav-item">

                        <a href="{{route('altilly')}}">
                        <i class="nav-icon i-Bell1"></i>
                      
                        <span class="item-name">Altilly</span>
                        
                        </a>
                    </li>
<div class="separator border-top"></div>
                    <li class="nav-item">

                        <a href="{{route('hodlerenergy')}}">
                        <i class="nav-icon i-Bell1"></i>
                      
                        <span class="item-name">Hodler Energy</span>
                        
                        </a>
                    </li>

                </ul>
          </div>
        </div>
      </div>
      <!--=============== Left side End ================-->
