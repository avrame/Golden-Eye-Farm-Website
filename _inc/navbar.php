<nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
    </div>
    <div id="navbar" class="navbar-collapse collapse">
      <ul class="nav navbar-nav">
        <li<?php if ($pageName == 'home') { ?> class="active"<?php } ?>><a href="/">Home</a></li>
        <li<?php if ($pageName == 'about') { ?> class="active"<?php } ?>><a href="/about/">About</a></li>
        <li<?php if ($pageName == 'photos') { ?> class="active"<?php } ?>><a href="/photos/">Photos</a></li>
        <li<?php if ($pageName == 'amenities') { ?> class="active"<?php } ?>><a href="/amenities/">Amenities</a></li>
        <li<?php if ($pageName == 'history') { ?> class="active"<?php } ?>><a href="/history/">History</a></li>
        <li<?php if ($pageName == 'directions') { ?> class="active"<?php } ?>><a href="/directions/">Directions</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a class="book-now" href="http://bookings.sanjuanpm.com/Unit/Details/110672" role="button">Book now!</a></li>
        <li<?php if ($pageName == 'contact') { ?> class="active"<?php } ?>><a href="/contact/">Contact</a></li>
      </ul>
    </div><!--/.nav-collapse -->
  </div>
</nav>
