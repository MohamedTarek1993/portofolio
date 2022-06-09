<header class="_header_portfolio_wrapper">
    <nav class="navbar navbar-expand-lg navbar-light _header_portfolio_navbar">
      <div class="container">
        <div class="_header_logo">
          <?php
          if (has_custom_logo()) {
            the_custom_logo();
          }
          ?>
        </div>
        
        <button class="navbar-toggler _toggler _nav_bg_color" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse _header_portfolio_nav" id="navbarNav">
          <?php echo get_menu('main-menu', 'navbar-nav _header_portfolio_nav_ul ms-auto') ?>

        </div>
      </div>
    </nav>

  </header>