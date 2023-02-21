class Header extends HTMLElement {
    connectedCallback() {
        this.innerHTML = `
    <div class="sticky-top">
    <div class="logo-container justify-content-center justify-items-center pt-3">
        <a class="navbar-logo justify-content-center">
            <img class="navbar-logo img-fluid" src="assets/logo.png" width="132">
        </a>
    </div>

    <nav class="navbar navbar-expand-sm p-0 navbar-light ">

        <div class="collapse navbar-collapse justify-content-center" id="navbarSupportedContent">

            <ul class="navbar-nav ms-auto">
                <li class="nav-item pl-3">
                    <a class="font-weight-bold nav-link links" href="index.php">Home</a>
                </li>
                <li class="nav-item pl-3">
                    <a class="font-weight-bold nav-link" href="explore.php">Explore</a>
                </li>
                <li class="nav-item pl-3">
                    <a class="font-weight-bold nav-link" href="accommodation.php">Accommodation</a>
                </li>
                <li class="nav-item pl-3">
                    <a class="font-weight-bold nav-link" href="promos.php">Promos</a>
                </li>
                <li class="nav-item pl-3">
                    <a class="font-weight-bold nav-link" href="rates.php">Rates</a>
                </li>
                <li class="nav-item pl-3">
                    <a class="font-weight-bold nav-link" href="bookings.php">Bookings</a>
                </li>

            </ul>
        </div>
    </nav>
    </div>

    `
    }

}

class Footer extends HTMLElement {
    connectedCallback() {
        this.innerHTML = `<section id="contact-section" class="contact-section">
        <div class="container pt-5 pb-5">
            <div class="row justify-content-between">
                <div class="col-md-4 col-xl-3 justify-content-center">
                    <img class="img-fluid" src="assets/logo.png">
                    <ul class="list-unstyled">
                        <li>
                            <a target="_blank" href="https://www.facebook.com/dreamislandresortdrt/" class="text-dark font-weight-bold"><i class="pl-lg-5 fa fa-facebook" aria-hidden="true"></i>
                                Dream-Island Resort</a>
                        </li>
                        <li>
                            <a href="" class="text-dark font-weight-bold"><i class="pl-lg-5 fa fa-instagram" aria-hidden="true"></i>
                                Dream-Islandresort</a>
                        </li>
                        <li>
                            <p class="font-weight-bold"><i class="pl-lg-5 fa fa-phone" aria-hidden="true"></i>
                                09776206943</p>
                        </li>
                    </ul>
        
        
        
        
                </div>
        
                <div class="rounded-yellow col-md-8 col-lg-6 text-center">
                    <img class="pt-3 img-fluid" src="./assets/di_map.png">
                    <span class="pt-1 pb-3"><i class="fa-solid fa-location-dot"></i>
                        53WX+8VM, Doña Remedios Trinidad, Bulacan
                    </span>
                </div>
            </div>
        
        
        
        </div>
        
        
        
        
        </section>`
    }

}



customElements.define('main-header', Header);
customElements.define('main-footer', Footer);

$(function () {
    $(document).scroll(function () {
      var scroll_pos = 0;
      var $nav = $(".navbar-fixed-top");
      var $header = $(".fixed-top");
      $nav.toggleClass('scrolled', $(this).scrollTop() > $header.height());
    });
  });


