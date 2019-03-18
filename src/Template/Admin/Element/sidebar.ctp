<nav class="sidebar sidebar-offcanvas" id="sidebar">
  <ul class="nav">
    <li class="nav-item nav-profile">
      <div class="nav-link">
        <div class="profile-image"> <?= $this->Html->image('home/ana-lina.jpg', ['class'=>'profile-image'])?> <span class="online-status online"></span>
        </div>
        <div class="profile-name">
          <p class="name"><?= $this->User->userName() ?></p>
          <p class="designation">Bloco A - Apartamento 103</p>
          <div class="badge badge-teal mx-auto mt-3">Online</div>
        </div>
      </div>
    </li>
    <!-- <li class="nav-item">
      <a class="nav-link" data-toggle="collapse" href="#blocos" aria-expanded="false" aria-controls="blocos">
        <?= $this->Html->image('/menu_icons/01.png', ['class' => 'menu-icon'])?> <span class="menu-title">Blocos</span><i
          class="menu-arrow"></i></a>
      <div class="collapse" id="blocos">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item"> <a class="nav-link" href="blocos">Listar blocos</a></li>
          <li class="nav-item"> <a class="nav-link" href="blocos/add">Adicionar bloco</a></li>
        </ul>
      </div>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-toggle="collapse" href="#contas-pagar" aria-expanded="false" aria-controls="contas-pagar">
        <?= $this->Html->image('/menu_icons/01.png', ['class' => 'menu-icon'])?> <span class="menu-title">Contas à pagar</span><i
          class="menu-arrow"></i></a>
      <div class="collapse" id="contas-pagar">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item"> <a class="nav-link" href="contas-pagar">Listar contas à pagar</a></li>
          <li class="nav-item"> <a class="nav-link" href="contas-pagar/add">Lançar conta</a></li>
        </ul>
      </div>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-toggle="collapse" href="#contas-receber" aria-expanded="false" aria-controls="contas-receber">
        <?= $this->Html->image('/menu_icons/01.png', ['class' => 'menu-icon'])?> <span class="menu-title">Contas à receber</span><i
          class="menu-arrow"></i></a>
      <div class="collapse" id="contas-receber">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item"> <a class="nav-link" href="contas-receber">Listar contas à receber</a></li>
          <li class="nav-item"> <a class="nav-link" href="contas-receber/add">Lançar conta</a></li>
        </ul>
      </div>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-toggle="collapse" href="#morador-contas" aria-expanded="false" aria-controls="morador-contas">
        <?= $this->Html->image('/menu_icons/01.png', ['class' => 'menu-icon'])?> <span class="menu-title">Contas dos moradores</span><i
          class="menu-arrow"></i></a>
      <div class="collapse" id="morador-contas">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item"> <a class="nav-link" href="morador-contas">Listar contas dos moradores</a></li>
          <li class="nav-item"> <a class="nav-link" href="morador-contas/add">Lançar conta</a></li>
        </ul>
      </div>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-toggle="collapse" href="#bloco-contas" aria-expanded="false" aria-controls="bloco-contas">
        <?= $this->Html->image('/menu_icons/01.png', ['class' => 'menu-icon'])?> <span class="menu-title">Contas dos blocos</span><i
          class="menu-arrow"></i></a>
      <div class="collapse" id="bloco-contas">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item"> <a class="nav-link" href="bloco-contas">Listar contas dos blocos</a></li>
          <li class="nav-item"> <a class="nav-link" href="bloco-contas/add">Lançar conta</a></li>
        </ul>
      </div>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-toggle="collapse" href="#appartments" aria-expanded="false" aria-controls="appartments">
        <?= $this->Html->image('/menu_icons/01.png', ['class' => 'menu-icon'])?> <span class="menu-title">Apartamentos</span><i
          class="menu-arrow"></i></a>
      <div class="collapse" id="appartments">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item"> <a class="nav-link" href="apartamentos">Listar apartamentos</a></li>
          <li class="nav-item"> <a class="nav-link" href="apartamentos/add">Adicionar apartamento</a></li>
        </ul>
      </div>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-toggle="collapse" href="#entry-types" aria-expanded="false" aria-controls="entry-types">
        <?= $this->Html->image('/menu_icons/01.png', ['class' => 'menu-icon'])?> <span class="menu-title">Tipos de entrada</span><i
          class="menu-arrow"></i></a>
      <div class="collapse" id="entry-types">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item"> <a class="nav-link" href="tipo-entrada">Listar tipos de entrada</a></li>
          <li class="nav-item"> <a class="nav-link" href="tipo-entrada/add">Adicionar tipo de entrada</a></li>
        </ul>
      </div>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-toggle="collapse" href="#invoice-plans" aria-expanded="false" aria-controls="invoice-plans">
        <?= $this->Html->image('/menu_icons/01.png', ['class' => 'menu-icon'])?> <span class="menu-title">Plano de contas</span><i
          class="menu-arrow"></i></a>
      <div class="collapse" id="invoice-plans">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item"> <a class="nav-link" href="plano-contas">Listar plano de contas</a></li>
          <li class="nav-item"> <a class="nav-link" href="plano-contas/add">Adicionar plano</a></li>
        </ul>
      </div>
    </li> -->
  </ul>
</nav>