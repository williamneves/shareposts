<nav class="navbar navbar-expand-sm navbar-dark bg-dark mb-3" aria-label="First navbar example">
  <div class="container">
    <a class="navbar-brand" href="<?php echo URLROOT; ?>"><?php echo SITENAME; ?></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample01" aria-controls="navbarsExample01" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarsExample01">
      <ul class="navbar-nav me-auto mb-2 mb-sm-0">
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="<?php echo URLROOT; ?>">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo URLROOT; ?>/pages/about/">About</a>
        </li>
      </ul>
      <ul class="navbar-nav ms-auto mb-2 mb-sm-0">
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="<?php echo URLROOT; ?>/users/login/">Login</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo URLROOT; ?>/users/register/">Register</a>
        </li>
      </ul>
    </div>
  </div>
</nav>