<div class="adminx-sidebar expand-hover push">
    <ul class="sidebar-nav">
        <li class="sidebar-nav-item">
            <a href="<?= site_url('index') ?>" class="sidebar-nav-link active">
              <span class="sidebar-nav-icon">
                <i data-feather="home"></i>
              </span>
                <span class="sidebar-nav-name">
                Ana Sayfa
              </span>
                <span class="sidebar-nav-end">

              </span>
            </a>
        </li>
        <?php if (session('user_type') == 2): ?>
        <li class="sidebar-nav-item">
            <a href="<?= site_url('complete-transfer') ?>" class="sidebar-nav-link">
              <span class="sidebar-nav-icon">
                <i data-feather="map"></i>
              </span>
                <span class="sidebar-nav-name">
                Transferi Tamamla
              </span>
            </a>
        </li>
        <?php endif; ?>
        <?php if (session('user_type') == 1): ?>
        <li class="sidebar-nav-item">
            <a href="<?= site_url('users') ?>" class="sidebar-nav-link active">
              <span class="sidebar-nav-icon">
                <i data-feather="users"></i>
              </span>
                <span class="sidebar-nav-name">
                Üye Yönetimi
              </span>
                <span class="sidebar-nav-end">

              </span>
            </a>
        </li>
        <?php endif; ?>
        <?php if (session('user_type') == 1 || session('user_type') == 3): ?>
        <li class="sidebar-nav-item">
            <a href="<?= site_url('add-transfer') ?>" class="sidebar-nav-link">
              <span class="sidebar-nav-icon">
                <i data-feather="briefcase"></i>
              </span>
                <span class="sidebar-nav-name">
                Transfer Oluşturma
              </span>
            </a>
        </li>
        <?php endif; ?>
        <?php if (session('user_type') == 1): ?>
        <li class="sidebar-nav-item">
            <a href="<?= site_url('add-owner') ?>" class="sidebar-nav-link">
              <span class="sidebar-nav-icon">
                <i data-feather="user-plus"></i>
              </span>
                <span class="sidebar-nav-name">
                Şoför/Acenta Ekleme
              </span>
            </a>
        </li>
        <li class="sidebar-nav-item">
            <a href="<?= site_url('transfer-defined') ?>" class="sidebar-nav-link">
              <span class="sidebar-nav-icon">
                <i data-feather="map"></i>
              </span>
                <span class="sidebar-nav-name">
                Transferi Şoföre Tanımlama
              </span>
            </a>
        </li>
        <li class="sidebar-nav-item">
            <a href="#" class="sidebar-nav-link">
              <span class="sidebar-nav-icon">
                <i data-feather="trending-up"></i>
              </span>
                <span class="sidebar-nav-name">
                Muhasebesel Kayıtlar
              </span>
            </a>
        </li>
        <?php endif; ?>

    </ul>
</div><!-- Sidebar End -->
