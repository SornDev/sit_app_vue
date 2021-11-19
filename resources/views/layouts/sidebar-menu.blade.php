<nav class="sidenav navbar navbar-vertical  fixed-left  navbar-expand-xs navbar-light bg-white" id="sidenav-main">
    <div class="scroll-wrapper scrollbar-inner" style="position: relative;"><div class="scrollbar-inner scroll-content" style="height: 976px; margin-bottom: 0px; margin-right: 0px; max-height: none;">
      <!-- Brand -->
      <div class="sidenav-header  d-flex  align-items-center">
        <a class="navbar-brand" href="javascript:void(0)">
          <img src="../../argon/img/brand/blue.png" class="navbar-brand-img" alt="...">
        </a>
        <div class=" ml-auto ">
          <!-- Sidenav toggler -->
          <div class="sidenav-toggler d-none d-xl-block active" data-action="sidenav-unpin" data-target="#sidenav-main">
            <div class="sidenav-toggler-inner">
              <i class="sidenav-toggler-line"></i>
              <i class="sidenav-toggler-line"></i>
              <i class="sidenav-toggler-line"></i>
            </div>
          </div>
        </div>
      </div>
      <div class="navbar-inner">
        <!-- Collapse -->
        <div class="collapse navbar-collapse" id="sidenav-collapse-main">
          <!-- Nav items -->
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link collapsed" href="#navbar-dashboards" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="navbar-dashboards">
                <i class="ni ni-shop text-primary"></i>
                <span class="nav-link-text">Dashboards</span>
              </a>
              <div class="collapse" id="navbar-dashboards" style="">
                <ul class="nav nav-sm flex-column">
                  <li class="nav-item">
                  <router-link to="/dashboard">
                    <a class="nav-link">
                      <span class="sidenav-mini-icon"> D </span>
                      <span class="sidenav-normal"> Dashboard </span>
                    </a></router-link>
                  </li>
                  <li class="nav-item">
                        <router-link to="/products">
                        <a class="nav-link">
                          <span class="sidenav-mini-icon"> P </span>
                          <span class="sidenav-normal"> Products </span>
                          </a>
                        </router-link>
                  </li>
                </ul>
              </div>
            </li>
            

            <li class="nav-item">
              <a class="nav-link collapsed" href="#service" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="service">
                <i class="ni ni-bullet-list-67 text-default"></i>
                <span class="nav-link-text">ວຽກບໍລິການ</span>
              </a>
              <div class="collapse" id="service">
                <ul class="nav nav-sm flex-column">
                  <li class="nav-item">
                    <router-link to="/service/repaire">
                    <a class="nav-link">
                      <span class="sidenav-mini-icon"> ສ </span>
                      <span class="sidenav-normal"> ສ້ອມແປງເຄື່ອງ </span>
                    </a></router-link>
                  </li>
                  <li class="nav-item">
                    <router-link to="/service/order">
                    <a class="nav-link">
                      <span class="sidenav-mini-icon"> ຮ </span>
                      <span class="sidenav-normal"> ຮັບສັ່ງອາໄຫລ່ </span>
                    </a></router-link>
                  </li>
                </ul>
              </div>
            </li>

            <li class="nav-item">
              <router-link to="/transection">
              <a class="nav-link">
                <i class="ni ni-chart-pie-35 text-info"></i>
                <span class="nav-link-text">ການເຄື່ອນໄຫວທຸລະກຳ</span>
              </a></router-link>
            </li>

            <li class="nav-item">
              <a class="nav-link collapsed" href="#report" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="report">
                <i class="ni ni-single-copy-04 text-orange"></i>
                <span class="nav-link-text">ລາຍງານ</span>
              </a>
              <div class="collapse" id="report">
                <ul class="nav nav-sm flex-column">
                  <li class="nav-item">
                    <router-link to="/service/repaire">
                    <a class="nav-link">
                      <span class="sidenav-mini-icon"> ສ </span>
                      <span class="sidenav-normal"> ສ້ອມແປງເຄື່ອງ </span>
                    </a></router-link>
                  </li>
                  <li class="nav-item">
                    <router-link to="/service/order">
                    <a class="nav-link">
                      <span class="sidenav-mini-icon"> ຮ </span>
                      <span class="sidenav-normal"> ຮັບສັ່ງອາໄຫລ່ </span>
                    </a></router-link>
                  </li>
                </ul>
              </div>
            </li>
            
          </ul>
          <!-- Divider -->
          <hr class="my-3">
          <!-- Heading -->
          <h6 class="navbar-heading p-0 text-muted">
            <span class="docs-normal">ຈັດການລະບົບ</span>
            <span class="docs-mini">ຈ</span>
          </h6>
          <!-- Navigation -->
          <ul class="navbar-nav mb-md-3">
          <li class="nav-item">
              <a class="nav-link collapsed" href="#mg-users" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="mg-users">
                <i class="ni ni-single-02 text-primary"></i> 
                <span class="nav-link-text">ຈັດການຜູ້ໃຊ້</span>
              </a>
              <div class="collapse" id="mg-users">
                <ul class="nav nav-sm flex-column">
                  <li class="nav-item">
                    <router-link to="/users">
                    <a  class="nav-link">
                      <span class="sidenav-mini-icon"> ລ </span>
                      <span class="sidenav-normal"> ລາຍການຜູ້ໃຊ້ </span>
                    </a>
                  </router-link>
                  </li>
                </ul>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link collapsed" href="#setting" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="setting">
                <i class="ni ni-settings text-red"></i>
                <span class="nav-link-text">ການຕັ້ງຄ່າ</span>
              </a>
              <div class="collapse" id="setting">
                <ul class="nav nav-sm flex-column">
                  <li class="nav-item">
                    <router-link to="/setting/equipment">
                    <a  class="nav-link">
                      <span class="sidenav-mini-icon"> ປ </span>
                      <span class="sidenav-normal"> ປະເພດອຸປະກອນ </span>
                    </a></router-link>
                  </li>
        
                </ul>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </div><div class="scroll-element scroll-x" style=""><div class="scroll-element_outer"><div class="scroll-element_size"></div><div class="scroll-element_track"></div><div class="scroll-bar" style="width: 0px; left: 0px;"></div></div></div><div class="scroll-element scroll-y" style=""><div class="scroll-element_outer"><div class="scroll-element_size"></div><div class="scroll-element_track"></div><div class="scroll-bar" style="height: 0px; top: 0px;"></div></div></div></div>
  </nav>


  