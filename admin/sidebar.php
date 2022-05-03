<div class="app-sidebar__overlay" data-toggle="sidebar"></div>
    <aside class="app-sidebar">
      <div class="app-sidebar__user"><img class="app-sidebar__user-avatar" src="images/admin-face.png" height="50" width="50" alt="User Image">
        <div>
          <p class="app-sidebar__user-name"><?php echo $_SESSION['admin']['name'] ?></p>
          <p class="app-sidebar__user-designation">Frontend Developer</p>
        </div>
      </div>
      <ul class="app-menu">
        <li><a class="app-menu__item active" href="index.php"><i class="app-menu__icon fa fa-dashboard"></i><span class="app-menu__label">Dashboard</span></a></li>
        <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-laptop"></i><span class="app-menu__label">Categories</span><i class="treeview-indicator fa fa-angle-right"></i></a>
          <ul class="treeview-menu">
            <li>
              <a class="treeview-item" href="categories.php"><i class="icon fa fa-circle-o"></i> 
                Categories
              </a>
            </li>
            <li>
              <a class="treeview-item" href="subcategories.php " target="_blank" rel="noopener"><i class="icon fa fa-circle-o"></i> 
                Subcategories
              </a>
            </li>
            <li>
              <a class="treeview-item" href="product.php " target="_blank" rel="noopener"><i class="icon fa fa-circle-o"></i> 
                Products
              </a>
            </li>
          </ul>
        </li>

        <li class="treeview">
          <a class="app-menu__item" href="bookings.php">
            <i class="app-menu__icon fa fa-th-list"></i>
            <span class="app-menu__label">Bookings</span>
          </a>
        </li>
      </ul>
    </aside>