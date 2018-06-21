<div class="container-fluid social-links p-0 px-lg-2" style="background-color: #53197d;">
  <div class="container d-flex flex-wrap justify-content-between py-2" style="position: relative;">
    <div class="col p-0">
      <div class="contact-info d-flex mt-2">
        <p class="mb-0">
          <small>
            <a href="mailto:apag.dx.am@gmail.com" class="nav-link">
              <i class="fa fa-envelope "></i>&nbsp; 
              <span class="d-none d-md-inline">registrar@westfields.edu.ph</span>
            </a>
          </small>
        </p>

        <p class="mb-0">
          <small>
            <a href="javascript:void(0)" class="nav-link">
              <i class="fa fa-mobile "></i>&nbsp; 
              <span class="d-none d-md-inline">+639123456789</span>
            </a>
          </small>
        </p>

      </div>
    </div>

    <div class="col p-0">
      <input class="form-control col-md-6 ml-auto mr-5 mt-1 rounded-0 form-control-sm" type="text" placeholder="Search" style="background-color: #eee0f9; cursor: text;">
    </div>
  </div>
</div>

<nav class="navbar navbar-expand-lg navbar-light navbar-top nav bg-light py-0 p-lg-3 px-0 pl-1">
  <div class="container r-pad">
      <a class="navbar-brand logo-top" href="#">
        <img src="{{ asset('images/logo.png') }}" alt="">
      </a>
      <button class="navbar-toggler rounded-0 custom-toggler" type="button" data-toggle="collapse" data-target="#navbarHeader" aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation">
        <i class="fas fa-chevron-right fa-1x"></i>
      </button>
      
      {{-- <div class="navbar-overlay"> --}}
          <div class="collapse pl-md-5 navbar-collapse" id="navbarHeader">

            <ul class="navbar-nav transformative mr-auto pl-3">
              <button class="navbar-toggler rounded-0 border-0 mt-3 mb-3" type="button" data-toggle="collapse" data-target="#navbarHeader" aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation">
              <i class="fas fa-times float-left"></i>
              </button>

              <li class="nav-item">
                <a class="nav-link" href="#">Students</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Parents</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Faculty and Staff</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Alumni</a>
              </li>
            </ul>
      
          </div>
      {{-- </div> --}}
  </div>
</nav>

<div class="container-fluid p-0 px-lg-2">
  <div class="container r-pad">
        <nav class="navbar navbar-expand-lg nav-header2 box-shadow-lg px-md-0 px-sm-0">

          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarHeader2" aria-controls="navbarHeader2" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fas fa-bars "></i>
          </button>

          <div class="collapse navbar-collapse" id="navbarHeader2">
    
       <nav class="navbar navbar-default">
          <div class="container-fluid">

            <div class="collapse navbar-collapse" id="myNavbar">
                <ul class="nav navbar-nav">

                    @if ($menu_items->count())
                        @foreach ($menu_items as $k => $menu_item)
                            @if (($menu_item->page_id && is_object($menu_item->page)) || !$menu_item->page_id)
                              @if ($menu_item->children->count())
                                <li class="navitem dropdown {{ ($k==0)?' fistitem':'' }}">
                                  <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">{{ $menu_item->name }} <span class="caret"></span></a>
                                  <ul class="dropdown-menu">
                                    @foreach ($menu_item->children as $i => $child)
                                      <li class="{{ ($child->url() == Request::url())?'active':'' }}"><a class="nav-link" href="{{ $child->url() }}">{{ $child->name }}</a>
                                      </li>
                                    @endforeach
                                  </ul>
                                </li>
                              @else
                                <li class="navitem {{ ($k==0)?' fistitem':'' }} {{ ($menu_item->url() == Request::url())?' active':'' }}">
                                    <a class="nav-link" href="{{ $menu_item->url() }}">{{ $menu_item->name }}</a>
                                </li>
                              @endif
                            @endif
                        @endforeach
                    @endif
              
              </ul>
            </div>
          </div>
        </nav>

          </div>
        </nav>
  </div>

  {{-- <button class="btn btn-desktop-view d-none d-lg-block" style="background-color: transparent; position: absolute; right: 10%; z-index: 99; bottom: 10%;"><i class="fas text-white fa-2x fa-search"></i></button>
  <div class="search-bar col-md-3 p-2 shadow" style="position: absolute; bottom: -54px; right: 6.8%; z-index: 999; background-color: #F6BB3D;">
        <div class="input-group">
          
          <input type="text" class="form-control rounded-0" id="validationTooltipUsername" placeholder="Search" aria-describedby="validationTooltipUsernamePrepend" required>
          <div class="input-group-prepend">
            <span class="input-group-text" id="validationTooltipUsernamePrepend">Search</span>
          </div>
        </div>
  </div> --}}
</div>

<div class="diagonal-shape d-none d-lg-block">
</div>
