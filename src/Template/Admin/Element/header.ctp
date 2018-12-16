<nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
  <div class="text-center navbar-brand-wrapper d-flex align-items-top justify-content-center">
    <a class="navbar-brand brand-logo" href="/">
      <h4 style="color: black; margin-top: 15px"><?= $this->User->condominiumName() ?></h4>
      <!-- <img src="/img/home/livinglab-logo-nome.png" alt="logo" /> -->
    </a>
    <a class="navbar-brand brand-logo-mini" href="/">
      <h4 style="color: black; margin-top: 15px">NdC</h4>
      <!-- <img src="/img/home/livinglab-logo.png" alt="logo" /> -->
    </a>
  </div>
  <div class="navbar-menu-wrapper d-flex align-items-center">
    <ul class="navbar-nav navbar-nav-left header-links d-none d-md-flex">
      <li class="nav-item">
        <a href="#" class="nav-link">
          <i class="mdi mdi-image-filter"></i>Fotos</a>
      </li>
      <li class="nav-item">
        <a href="#" class="nav-link">
          <i class="mdi mdi-email-outline"></i>Avisos</a>
      </li>
      <li class="nav-item">
        <a href="#" class="nav-link">
          <i class="mdi mdi-calendar"></i>Calendario</a>
      </li>
    </ul>
    <ul class="navbar-nav navbar-nav-right">
      <li class="nav-item dropdown">
        <a class="nav-link count-indicator dropdown-toggle" id="notificationDropdown" href="#" data-toggle="dropdown">
          <i class="mdi mdi-bell-ring"></i>
          <span class="count">4</span>
        </a>
        <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="notificationDropdown">
          <a class="dropdown-item">
            <p class="mb-0 font-weight-normal float-left">Voce tem 4 notificacoes
            </p>
            <span class="badge badge-pill badge-warning float-right">Ver todas</span>
          </a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item preview-item">
            <div class="preview-thumbnail">
                <img src="/img/faces/face4.jpg" alt="image" class="profile-pic">
            </div>
            <div class="preview-item-content">
              <strong class="preview-subject font-weight-medium">Rodrigo</strong>
              <h6 class="preview-subject font-weight-medium">Editou uma conta</h6>
              <p class="font-weight-light small-text">
                <?= date('d/m/Y').' as '.date('H:i')?>
              </p>
            </div>
          </a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item preview-item">
            <div class="preview-thumbnail">
                <img src="/img/faces/face6.jpg" alt="image" class="profile-pic">
            </div>
            <div class="preview-item-content">
              <strong class="preview-subject font-weight-medium">Janaina</strong>
              <h6 class="preview-subject font-weight-medium">agendou o pagamento de uma conta</h6>
              <p class="font-weight-light small-text">
                <?= date('d/m/Y').' as '.date('H:i')?>
              </p>
            </div>
          </a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item preview-item">
            <div class="preview-thumbnail">
                <img src="/img/faces/face6.jpg" alt="image" class="profile-pic">
            </div>
            <div class="preview-item-content">
              <strong class="preview-subject font-weight-medium">Janaina</strong>
              <h6 class="preview-subject font-weight-medium">Lancou uma conta</h6>
              <p class="font-weight-light small-text">
                <?= date('d/m/Y').' as '.date('H:i')?>
              </p>
            </div>
          </a>
        </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link count-indicator dropdown-toggle" id="messageDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
          <i class="mdi mdi-email-variant"></i>
          <span class="count">7</span>
        </a>
        <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="messageDropdown">
          <div class="dropdown-item">
            <p class="mb-0 font-weight-normal float-left">Voce tem 7 mensagens nao lidas
            </p>
            <span class="badge badge-info badge-pill float-right">Ver todas</span>
          </div>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item preview-item">
            <div class="preview-thumbnail">
              <img src="/img/faces/face4.jpg" alt="image" class="profile-pic">
            </div>
            <div class="preview-item-content flex-grow">
              <h6 class="preview-subject ellipsis font-weight-medium">Fernando
                <span class="float-right font-weight-light small-text"><?= date('d/m').' as '.date('H:i')?></span>
              </h6>
              <p class="font-weight-light small-text">
                Reuniao Confirmada
              </p>
            </div>
          </a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item preview-item">
            <div class="preview-thumbnail">
              <img src="/img/faces/face2.jpg" alt="image" class="profile-pic">
            </div>
            <div class="preview-item-content flex-grow">
              <h6 class="preview-subject ellipsis font-weight-medium">Camila
                <span class="float-right font-weight-light small-text"><?= date('d/m').' as '.date('H:i')?></span>
              </h6>
              <p class="font-weight-light small-text">
                Preciso falar com voce
              </p>
            </div>
          </a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item preview-item">
            <div class="preview-thumbnail">
              <img src="/img/faces/face3.jpg" alt="image" class="profile-pic">
            </div>
            <div class="preview-item-content flex-grow">
              <h6 class="preview-subject ellipsis font-weight-medium">Joaquim
                <span class="float-right font-weight-light small-text"><?= date('d/m').' as '.date('H:i')?></span>
              </h6>
              <p class="font-weight-light small-text">
                Chegarei mais cedo hoje
              </p>
            </div>
          </a>
        </div>
      </li>
      <li class="nav-item d-none d-lg-block">
        <a class="nav-link" href="#">
          <img class="img-xs rounded-circle" src="/img/home/ana-lina.jpg" alt="">
        </a>
      </li>
    </ul>
    <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
      <span class="icon-menu"></span>
    </button>
  </div>
</nav>