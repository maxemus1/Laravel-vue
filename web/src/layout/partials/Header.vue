<template>
  <b-navbar id="template-header" class="navbar default-layout-navbar p-0" toggleable="lg">
    <div class="horizontal-menu">
      <nav class="navbar top-navbar col-lg-12 col-12 p-0">
        <div class="container">
          <div
            class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center"
          >
            <router-link class="navbar-brand brand-logo" to="/">
              <img src="@/assets/images/logo.svg" alt="logo" />
              <span
                class="font-12 d-none d-lg-block text-left text-muted font-weight-light"
              >Responsive Dashboard</span>
            </router-link>
            <router-link class="navbar-brand brand-logo-mini" to="/">
              <img src="@/assets/images/logo-mini.svg" alt="logo" />
            </router-link>
          </div>
          <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
            <ul class="navbar-nav mr-lg-2">
              <li class="nav-item nav-search d-none d-lg-block">
                <div class="input-group">
                  <div class="input-group-prepend hover-cursor" id="navbar-search-icon">
                    <span class="input-group-text" id="search">
                      <i class="mdi mdi-magnify"></i>
                    </span>
                  </div>
                  <input
                    type="text"
                    class="form-control"
                    id="navbar-search-input"
                    placeholder="Search"
                    aria-label="search"
                    aria-describedby="search"
                  />
                </div>
              </li>
            </ul>
            <b-navbar-nav class="navbar-nav-right ml-auto">
              <b-nav-item-dropdown right class="nav-profile">
                <template slot="button-content">
                  <span
                    class="nav-link dropdown-toggle"
                    id="profileDropdown"
                    href="javascript:void(0);"
                    data-toggle="dropdown"
                    aria-expanded="false"
                  >
                    <div class="nav-profile-img">
                      <img src="@/assets/images/faces/face1.jpg" alt="image" />
                    </div>
                    <div class="nav-profile-text">
                      <p class="mb-0 text-black">Olson jass</p>
                      <span class="d-block font-13 text-muted font-weight-normal">
                        online
                        <i class="mdi mdi-chevron-down"></i>
                      </span>
                    </div>
                  </span>
                </template>
                <b-dropdown-item class="preview-item">
                  <i class="mdi mdi-cached mr-2 text-success"></i> Activity Log
                </b-dropdown-item>
                <b-dropdown-item class="preview-item">
                  <i class="mdi mdi-logout mr-2 text-primary"></i> Signout
                </b-dropdown-item>
              </b-nav-item-dropdown>
            </b-navbar-nav>
            <button class="navbar-toggler navbar-toggler-right align-self-center"
              @click="toggleMobileSidebar()">
              <span class="mdi mdi-menu"></span>
            </button>
          </div>
        </div>
      </nav>
      <nav class="bottom-navbar">
        <div class="container">
          <ul class="nav page-navigation">
            <li class="nav-item">
              <router-link class="nav-link" to="/">
                <i class="mdi mdi-home menu-icon"></i>
                <span class="menu-title">Dashboard</span>
              </router-link>
            </li>
            <li class="nav-item mega-menu">
              <a href="javascript:void(0);" class="nav-link">
                <i class="mdi mdi-crosshairs-gps menu-icon"></i>
                <span class="menu-title">UI Elements</span>
                <i class="menu-arrow"></i>
              </a>
              <div class="submenu">
                <div class="col-group-wrapper row">
                  <div class="col-group col-md-4">
                    <div class="row">
                      <div class="col-12">
                        <p class="category-heading">Basic Elements</p>
                        <div class="submenu-item">
                          <div class="row">
                            <div class="col-md-6">
                              <ul>
                                <li class="nav-item">
                                  <router-link class="nav-link" to="/basic-ui/accordions/">Accordion</router-link>
                                </li>
                                <li class="nav-item">
                                  <router-link class="nav-link" to="/basic-ui/alerts/">Alerts</router-link>
                                </li>
                                <li class="nav-item">
                                  <router-link class="nav-link" to="/basic-ui/badges/">Badges</router-link>
                                </li>
                                <li class="nav-item">
                                  <router-link
                                    class="nav-link"
                                    to="/basic-ui/breadcrumbs/"
                                  >Breadcrumbs</router-link>
                                </li>
                                <li class="nav-item">
                                  <router-link class="nav-link" to="/basic-ui/buttons/">Buttons</router-link>
                                </li>
                                <li class="nav-item">
                                  <router-link class="nav-link" to="/basic-ui/dropdowns/">Dropdowns</router-link>
                                </li>
                              </ul>
                            </div>
                            <div class="col-md-6">
                              <ul>
                                <li class="nav-item">
                                  <router-link class="nav-link" to="/basic-ui/modals/">Modals</router-link>
                                </li>
                                <li class="nav-item">
                                  <router-link
                                    class="nav-link"
                                    to="/basic-ui/paginations/"
                                  >Paginations</router-link>
                                </li>
                                <li class="nav-item">
                                  <router-link class="nav-link" to="/basic-ui/progress/">Progress</router-link>
                                </li>
                                <li class="nav-item">
                                  <router-link class="nav-link" to="/basic-ui/tabs/">Tabs</router-link>
                                </li>
                                <li class="nav-item">
                                  <router-link
                                    class="nav-link"
                                    to="/basic-ui/tooltips/"
                                  >Tooltips & Popovers</router-link>
                                </li>
                                <li class="nav-item">
                                  <router-link
                                    class="nav-link"
                                    to="/basic-ui/typography/"
                                  >Typography</router-link>
                                </li>
                              </ul>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-group col-md-4">
                    <div class="row">
                      <div class="col-12">
                        <p class="category-heading">Advanced Elements</p>
                        <div class="submenu-item">
                          <div class="row">
                            <div class="col-md-6">
                              <ul>
                                <li class="nav-item">
                                  <router-link class="nav-link" to="/advanced-ui/dragula/">Dragula</router-link>
                                </li>
                                <li class="nav-item">
                                  <router-link class="nav-link" to="/advanced-ui/carousel/">Carousel</router-link>
                                </li>
                                <li class="nav-item">
                                  <router-link class="nav-link" to="/advanced-ui/loaders/">Loaders</router-link>
                                </li>
                                <li class="nav-item">
                                  <router-link class="nav-link" to="/advanced-ui/slider/">Slider</router-link>
                                </li>
                              </ul>
                            </div>
                            <div class="col-md-6">
                              <ul>
                                <li class="nav-item">
                                  <router-link
                                    class="nav-link"
                                    to="/advanced-ui/clipboard/"
                                  >Clipboard</router-link>
                                </li>
                                <li class="nav-item">
                                  <router-link
                                    class="nav-link"
                                    to="/advanced-ui/tree-view/"
                                  >Tree View</router-link>
                                </li>
                                <li class="nav-item">
                                  <router-link
                                    class="nav-link"
                                    to="/advanced-ui/context-menu/"
                                  >Context Menu</router-link>
                                </li>
                              </ul>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-group col-md-4">
                    <p class="category-heading">Icons</p>
                    <ul class="submenu-item">
                      <li class="nav-item">
                        <router-link class="nav-link" to="/icons/flag-icons/">Flag icons</router-link>
                      </li>
                      <li class="nav-item">
                        <router-link class="nav-link" to="/icons/fontawesome/">Font Awesome</router-link>
                      </li>
                      <li class="nav-item">
                        <router-link class="nav-link" to="/icons/mdi-icons/">MDI</router-link>
                      </li>
                      <li class="nav-item">
                        <router-link class="nav-link" to="/icons/simpleline/">Simple line icons</router-link>
                      </li>
                      <li class="nav-item">
                        <router-link class="nav-link" to="/icons/themify-icons/">Themify icons</router-link>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </li>
            <li class="nav-item">
              <a href="javascript:void(0);" class="nav-link">
                <i class="mdi mdi-clipboard-text menu-icon"></i>
                <span class="menu-title">Forms</span>
                <i class="menu-arrow"></i>
              </a>
              <div class="submenu">
                <ul class="submenu-item">
                  <li class="nav-item">
                    <router-link class="nav-link" to="/forms/basic-elements/">Basic Elements</router-link>
                  </li>
                  <li class="nav-item">
                    <router-link class="nav-link" to="/forms/advanced-elements/">Advanced Elements</router-link>
                  </li>
                  <li class="nav-item">
                    <router-link class="nav-link" to="/forms/wizard/">Wizard</router-link>
                  </li>
                  <li class="nav-item">
                    <router-link class="nav-link" to="/forms/validation/">Validation</router-link>
                  </li>
                  <li class="nav-item">
                    <router-link class="nav-link" to="/text-editors/">Text Editors</router-link>
                  </li>
                  <li class="nav-item">
                    <router-link class="nav-link" to="/code-editors/">Code Editors</router-link>
                  </li>
                </ul>
              </div>
            </li>
            <li class="nav-item mega-menu">
              <a href="javascript:void(0);" class="nav-link">
                <i class="mdi mdi-chart-bar menu-icon"></i>
                <span class="menu-title">Data</span>
                <i class="menu-arrow"></i>
              </a>
              <div class="submenu">
                <div class="col-group-wrapper row">
                  <div class="col-group col-md-6">
                    <p class="category-heading">Charts</p>
                    <div class="submenu-item">
                      <div class="row">
                        <div class="col-md-6">
                          <ul>
                            <li class="nav-item">
                              <router-link class="nav-link" to="/charts/chartjs/">Chart js</router-link>
                            </li>
                            <li class="nav-item">
                              <router-link class="nav-link" to="/charts/c3/">C3 charts</router-link>
                            </li>
                            <li class="nav-item">
                              <router-link class="nav-link" to="/charts/chartist/">Chartist</router-link>
                            </li>
                          </ul>
                        </div>
                        <div class="col-md-6">
                          <ul>
                            <li class="nav-item">
                              <router-link class="nav-link" to="/charts/googleChart/">Google Chart</router-link>
                            </li>
                            <li class="nav-item">
                              <router-link class="nav-link" to="/charts/justgage/">Justgage</router-link>
                            </li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-group col-md-3">
                    <p class="category-heading">Table</p>
                    <ul class="submenu-item">
                      <li class="nav-item">
                        <router-link class="nav-link" to="/tables/basic-tables/">Basic Table</router-link>
                      </li>
                      <li class="nav-item">
                        <router-link class="nav-link" to="/tables/advanced-tables/">Advanced Table</router-link>
                      </li>
                    </ul>
                  </div>
                  <div class="col-group col-md-3">
                    <p class="category-heading">Maps</p>
                    <ul class="submenu-item">
                      <li class="nav-item">
                        <router-link class="nav-link" to="/maps/google-map/">Google Maps</router-link>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </li>
            <li class="nav-item mega-menu">
              <a href="javascript:void(0);" class="nav-link">
                <i class="mdi mdi-content-copy menu-icon"></i>
                <span class="menu-title">Sample Pages</span>
                <i class="menu-arrow"></i>
              </a>
              <div class="submenu">
                <div class="col-group-wrapper row">
                  <div class="col-group col-md-2">
                    <p class="category-heading">User Pages</p>
                    <ul class="submenu-item">
                      <li class="nav-item">
                        <router-link class="nav-link" to="/auth-pages/login/">Login</router-link>
                      </li>
                      <li class="nav-item">
                        <router-link class="nav-link" to="/auth-pages/login-2/">Login - 2</router-link>
                      </li>
                      <li class="nav-item">
                        <router-link
                          class="nav-link"
                          to="/auth-pages/multi-level-login/"
                        >Multi Level Login</router-link>
                      </li>
                      <li class="nav-item">
                        <router-link class="nav-link" to="/auth-pages/register/">Register</router-link>
                      </li>
                      <li class="nav-item">
                        <router-link class="nav-link" to="/auth-pages/register-2/">Register - 2</router-link>
                      </li>
                      <li class="nav-item">
                        <router-link class="nav-link" to="/auth-pages/lock-screen/">Lockscreen</router-link>
                      </li>
                    </ul>
                  </div>
                  <div class="col-group col-md-2">
                    <p class="category-heading">Error Pages</p>
                    <ul class="submenu-item">
                      <li class="nav-item">
                        <router-link class="nav-link" to="/error-pages/error-404/">404</router-link>
                      </li>
                      <li class="nav-item">
                        <router-link class="nav-link" to="/error-pages/error-500/">500</router-link>
                      </li>
                    </ul>
                  </div>
                  <div class="col-group col-md-3">
                    <p class="category-heading">E-commerce</p>
                    <ul class="submenu-item">
                      <li class="nav-item">
                        <router-link class="nav-link" to="/e-commerce/invoice/">Invoice</router-link>
                      </li>
                      <li class="nav-item">
                        <router-link class="nav-link" to="/e-commerce/orders/">Orders</router-link>
                      </li>
                      <li class="nav-item">
                        <router-link class="nav-link" to="/e-commerce/pricing-table/">Pricing Table</router-link>
                      </li>
                      <li class="nav-item">
                        <router-link
                          class="nav-link"
                          to="/e-commerce/product-catalogue/"
                        >Product Catalogue</router-link>
                      </li>
                      <li class="nav-item">
                        <router-link class="nav-link" to="/e-commerce/project-list/">Project list</router-link>
                      </li>
                    </ul>
                  </div>
                  <div class="col-group col-md-5">
                    <p class="category-heading">General</p>
                    <div class="row">
                      <div class="col-md-6">
                        <ul class="submenu-item">
                          <li class="nav-item">
                            <router-link class="nav-link" to="/general-pages/blank-page/">Blank Page</router-link>
                          </li>
                          <li class="nav-item">
                            <router-link class="nav-link" to="/general-pages/profile/">Profile</router-link>
                          </li>
                          <li class="nav-item">
                            <router-link class="nav-link" to="/general-pages/faq-1/">FAQ</router-link>
                          </li>
                          <li class="nav-item">
                            <router-link class="nav-link" to="/general-pages/faq-2/">FAQ 2</router-link>
                          </li>
                          <li class="nav-item">
                            <router-link class="nav-link" to="/general-pages/news-grid/">News Grid</router-link>
                          </li>
                        </ul>
                      </div>
                      <div class="col-md-6">
                        <ul>
                          <li class="nav-item">
                            <router-link class="nav-link" to="/general-pages/timeline/">Timeline</router-link>
                          </li>
                          <li class="nav-item">
                            <router-link
                              class="nav-link"
                              to="/general-pages/search-result/"
                            >Search Result</router-link>
                          </li>
                          <li class="nav-item">
                            <router-link class="nav-link" to="/general-pages/portfolio/">Portfolio</router-link>
                          </li>
                          <li class="nav-item">
                            <router-link
                              class="nav-link"
                              to="/general-pages/user-listing/"
                            >User Listing</router-link>
                          </li>
                          <li class="nav-item">
                            <router-link
                              class="nav-link"
                              to="/general-pages/landing-page/"
                            >Landing Page</router-link>
                          </li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </li>
            <li class="nav-item">
              <a href="javascript:void(0);" class="nav-link">
                <i class="mdi mdi-webpack menu-icon"></i>
                <span class="menu-title">Apps</span>
                <i class="menu-arrow"></i>
              </a>
              <div class="submenu">
                <ul class="submenu-item">
                  <li class="nav-item">
                    <router-link class="nav-link" to="/apps/calendar/">Calendar</router-link>
                  </li>
                  <li class="nav-item">
                    <router-link class="nav-link" to="/apps/email/">E-mail</router-link>
                  </li>
                  <li class="nav-item">
                    <router-link class="nav-link" to="/apps/todo/">To-do</router-link>
                  </li>
                  <li class="nav-item">
                    <router-link class="nav-link" to="/apps/gallery/">Gallery</router-link>
                  </li>
                  <li class="nav-item">
                    <router-link class="nav-link" to="/apps/tickets/">Tickets</router-link>
                  </li>
                  <li class="nav-item">
                    <router-link class="nav-link" to="/apps/kanban/">Kanban Board</router-link>
                  </li>
                  <li class="nav-item">
                    <router-link class="nav-link" to="/apps/chat/">Chat</router-link>
                  </li>
                  <li class="nav-item">
                    <router-link class="nav-link" to="/widgets/">Widgets</router-link>
                  </li>
                </ul>
              </div>
            </li>
            <li class="nav-item">
              <router-link class="nav-link" to="/popups/">
                <i class="mdi mdi-forum menu-icon"></i>
                <span class="menu-title">Popups</span>
              </router-link>
            </li>
            <li class="nav-item">
              <router-link class="nav-link" to="/notifications/">
                <i class="mdi mdi-bell-ring menu-icon"></i>
                <span class="menu-title">Notifications</span>
              </router-link>
            </li>
            <li class="nav-item">
              <a
                href="http://www.bootstrapdash.com/demo/plus/vue/documentation/documentation.html"
                class="nav-link"
                target="_blank"
              >
                <i class="mdi mdi-file-document-box menu-icon"></i>
                <span class="menu-title">Docs</span>
              </a>
            </li>
            <li class="nav-item border-0 m-auto">
              <a href="#" class="nav-link p-0">
                <b-button variant="danger" class="btn-sm">Trailing</b-button>
              </a>
            </li>
            <li class="nav-item  m-auto">
              <a routerLink="/" class="nav-link p-0">
                <i class="mdi mdi-home-circle font-20"></i>
              </a>
            </li>
          </ul>
        </div>
      </nav>
    </div>
  </b-navbar>
</template>

<script>
export default {
  name: "app-header",
  mounted() {
    var navItems = document.querySelectorAll(
      ".horizontal-menu .page-navigation >.nav-item"
    );
    document
      .querySelectorAll(".horizontal-menu .page-navigation >.nav-item")
      .forEach(function(el) {
        el.addEventListener("click", function() {
          for (var i = 0; i < navItems.length; i++) {
            if (navItems[i] == el) {
              el.classList.toggle("show-submenu");
            } else {
              navItems[i].classList.remove("show-submenu");
            }
          }
        });
      });
  },
  methods: {
    toggleMobileSidebar: () => {
      document
        .querySelector(".bottom-navbar")
        .classList.toggle("header-toggled");
    },
    handleSCroll() {
      let header = document.querySelector("body");
      if (window.scrollY > 70) {
        header.classList.add("fixed-on-scroll");
      } else {
        header.classList.remove("fixed-on-scroll");
      }
    }
  },
  created() {
    window.addEventListener("scroll", this.handleSCroll);
  },
  destroyed() {
    window.removeEventListener("scroll", this.handleSCroll);
  },
  watch: {
    $route() {
      document
        .querySelector(".bottom-navbar")
        .classList.remove("header-toggled");
    }
  }
};
</script>

<style scoped>
</style>