<?php require_once '../header.php'; ?>

<main class="main">

    <!-- Page Title -->
    <div class="page-title light-background">
      <div class="container d-lg-flex justify-content-between align-items-center">
        <h1 class="mb-2 mb-lg-0">Cuenta</h1>
      </div>
    </div><!-- End Page Title -->

    <!-- Account Section -->
    <section id="account" class="account section">

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <!-- Mobile Menu Toggle -->
        <div class="mobile-menu d-lg-none mb-4">
          <button class="mobile-menu-toggle" type="button" data-bs-toggle="collapse" data-bs-target="#profileMenu">
            <i class="bi bi-grid"></i>
            <span>Menú</span>
          </button>
        </div>

        <div class="row g-4">
          <!-- Profile Menu -->
          <div class="col-lg-3">
            <div class="profile-menu collapse d-lg-block" id="profileMenu">
              <!-- User Info -->
              <div class="user-info" data-aos="fade-right">
                <div class="user-avatar">
                  <img src="assets/img/person/person-f-1.webp" alt="Profile" loading="lazy">
                  <span class="status-badge"><i class="bi bi-shield-check"></i></span>
                </div>
                <h4>Sarah Anderson</h4>
                <div class="user-status">
                  <i class="bi bi-award"></i>
                  <span>Miembro Premium</span>
                </div>
              </div>

              <!-- Navigation Menu -->
              <nav class="menu-nav">
                <ul class="nav flex-column" role="tablist">
                  <li class="nav-item">
                    <a class="nav-link active" data-bs-toggle="tab" href="#orders">
                      <i class="bi bi-box-seam"></i>
                      <span>Mis Pedidos</span>
                      <span class="badge">3</span>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" data-bs-toggle="tab" href="#wishlist">
                      <i class="bi bi-heart"></i>
                      <span>Lista de deseos</span>
                      <span class="badge">12</span>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" data-bs-toggle="tab" href="#wallet">
                      <i class="bi bi-wallet2"></i>
                      <span>Métodos de pago</span>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" data-bs-toggle="tab" href="#reviews">
                      <i class="bi bi-star"></i>
                      <span>Mis reseñas</span>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" data-bs-toggle="tab" href="#addresses">
                      <i class="bi bi-geo-alt"></i>
                      <span>Direcciones</span>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" data-bs-toggle="tab" href="#settings">
                      <i class="bi bi-gear"></i>
                      <span>Configuración de la cuenta</span>
                    </a>
                  </li>
                </ul>

                <div class="menu-footer">
                  <a href="#" class="help-link">
                    <i class="bi bi-question-circle"></i>
                    <span>Centro de Ayuda</span>
                  </a>
                  <a href="#" class="logout-link">
                    <i class="bi bi-box-arrow-right"></i>
                    <span>Cerrar Sesión</span>
                  </a>
                </div>
              </nav>
            </div>
          </div>

          <!-- Content Area -->
          <div class="col-lg-9">
            <div class="content-area">
              <div class="tab-content">
                <!-- Orders Tab -->
                <div class="tab-pane fade show active" id="orders">
                  <div class="section-header" data-aos="fade-up">
                    <h2>Mis Pedidos</h2>
                    <div class="header-actions">
                      <div class="search-box">
                        <i class="bi bi-search"></i>
                        <input type="text" placeholder="Buscar pedidos...">
                      </div>
                      <div class="dropdown">
                        <button class="filter-btn" data-bs-toggle="dropdown">
                          <i class="bi bi-funnel"></i>
                          <span>Filtrar</span>
                        </button>
                        <ul class="dropdown-menu">
                          <li><a class="dropdown-item" href="#">Todos los pedidos</a></li>
                          <li><a class="dropdown-item" href="#">En proceso</a></li>
                          <li><a class="dropdown-item" href="#">Enviado</a></li>
                          <li><a class="dropdown-item" href="#">Entregado</a></li>
                          <li><a class="dropdown-item" href="#">Cancelado</a></li>
                        </ul>
                      </div>
                    </div>
                  </div>

                  <div class="orders-grid">
                    <!-- Order Card 1 -->
                    <div class="order-card" data-aos="fade-up" data-aos-delay="100">
                      <div class="order-header">
                        <div class="order-id">
                          <span class="label">Order ID:</span>
                          <span class="value">#ORD-2024-1278</span>
                        </div>
                        <div class="order-date">Feb 20, 2025</div>
                      </div>
                      <div class="order-content">
                        <div class="product-grid">
                          <img src="assets/img/product/product-1.webp" alt="Product" loading="lazy">
                          <img src="assets/img/product/product-2.webp" alt="Product" loading="lazy">
                          <img src="assets/img/product/product-3.webp" alt="Product" loading="lazy">
                        </div>
                        <div class="order-info">
                          <div class="info-row">
                            <span>Estado</span>
                            <span class="status processing">En proceso</span>
                          </div>
                          <div class="info-row">
                            <span>Artículos</span>
                            <span>3 artículos</span>
                          </div>
                          <div class="info-row">
                            <span>Total</span>
                            <span class="price">$789.99</span>
                          </div>
                        </div>
                      </div>
                      <div class="order-footer">
                        <button type="button" class="btn-track" data-bs-toggle="collapse" data-bs-target="#tracking1" aria-expanded="false">Rastrear Pedido</button>
                        <button type="button" class="btn-details" data-bs-toggle="collapse" data-bs-target="#details1" aria-expanded="false">Ver Detalles</button>
                      </div>

                      <!-- Order Tracking -->
                      <div class="collapse tracking-info" id="tracking1">
                        <div class="tracking-timeline">
                          <div class="timeline-item completed">
                            <div class="timeline-icon">
                              <i class="bi bi-check-circle-fill"></i>
                            </div>
                            <div class="timeline-content">
                              <h5>Pedido Confirmado</h5>
                              <p>Tu pedido ha sido recibido y confirmado</p>
                              <span class="timeline-date">Feb 20, 2025 - 10:30 AM</span>
                            </div>
                          </div>

                          <div class="timeline-item completed">
                            <div class="timeline-icon">
                              <i class="bi bi-check-circle-fill"></i>
                            </div>
                            <div class="timeline-content">
                              <h5>En proceso</h5>
                              <p>Tu pedido está siendo preparado para el envío</p>
                              <span class="timeline-date">Feb 20, 2025 - 2:45 PM</span>
                            </div>
                          </div>

                          <div class="timeline-item active">
                            <div class="timeline-icon">
                              <i class="bi bi-box-seam"></i>
                            </div>
                            <div class="timeline-content">
                              <h5>Empaquetando</h5>
                              <p>Sus artículos están siendo empaquetados para el envío</p>
                              <span class="timeline-date">Feb 20, 2025 - 4:15 PM</span>
                            </div>
                          </div>

                          <div class="timeline-item">
                            <div class="timeline-icon">
                              <i class="bi bi-truck"></i>
                            </div>
                            <div class="timeline-content">
                              <h5>En tránsito</h5>
                              <p>Se espera que se envíe dentro de 24 horas</p>
                            </div>
                          </div>

                          <div class="timeline-item">
                            <div class="timeline-icon">
                              <i class="bi bi-house-door"></i>
                            </div>
                            <div class="timeline-content">
                              <h5>Entrega</h5>
                              <p>Entrega estimada: 22 de febrero de 2025</p>
                            </div>
                          </div>
                        </div>
                      </div>

                      <!-- Order Details -->
                      <div class="collapse order-details" id="details1">
                        <div class="details-content">
                          <div class="detail-section">
                            <h5>Información del Pedido</h5>
                            <div class="info-grid">
                              <div class="info-item">
                                <span class="label">Método de Pago</span>
                                <span class="value">Tarjeta de Crédito (**** 4589)</span>
                              </div>
                              <div class="info-item">
                                <span class="label">Método de Envío</span>
                                <span class="value">Entrega Exprés (2-3 días)</span>
                              </div>
                            </div>
                          </div>

                          <div class="detail-section">
                            <h5>Artículos (3)</h5>
                            <div class="order-items">
                              <div class="item">
                                <img src="assets/img/product/product-1.webp" alt="Product" loading="lazy">
                                <div class="item-info">
                                  <h6>Lorem ipsum dolor sit amet</h6>
                                  <div class="item-meta">
                                    <span class="sku">ID: PRD-001</span>
                                    <span class="qty">Cantidad: 1</span>
                                  </div>
                                </div>
                                <div class="item-price">$899.99</div>
                              </div>
                              <div class="item">
                                <img src="assets/img/product/product-2.webp" alt="Product" loading="lazy">
                                <div class="item-info">
                                  <h6>Consectetur adipiscing elit</h6>
                                  <div class="item-meta">
                                    <span class="sku">ID: PRD-002</span>
                                    <span class="qty">Cantidad: 2</span>
                                  </div>
                                </div>
                                <div class="item-price">$599.95</div>
                              </div>

                              <div class="item">
                                <img src="assets/img/product/product-3.webp" alt="Product" loading="lazy">
                                <div class="item-info">
                                  <h6>Sed do eiusmod tempor</h6>
                                  <div class="item-meta">
                                    <span class="sku">ID: PRD-003</span>
                                    <span class="qty">Cantidad: 1</span>
                                  </div>
                                </div>
                                <div class="item-price">$129.99</div>
                              </div>
                            </div>
                          </div>

                          <div class="detail-section">
                            <h5>Detalles de Precio</h5>
                            <div class="price-breakdown">
                              <div class="price-row">
                                <span>Subtotal</span>
                                <span>$1,929.93</span>
                              </div>
                              <div class="price-row">
                                <span>Envío</span>
                                <span>$15.99</span>
                              </div>
                              <div class="price-row">
                                <span>Impuesto</span>
                                <span>$159.98</span>
                              </div>
                              <div class="price-row total">
                                <span>Total</span>
                                <span>$2,105.90</span>
                              </div>
                            </div>
                          </div>

                          <div class="detail-section">
                            <h5>Dirección de Envío</h5>
                            <div class="address-info">
                              <p>Sarah Anderson<br>123 Main Street<br>Apt 4B<br>New York, NY 10001<br>United States</p>
                              <p class="contact">+1 (555) 123-4567</p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>

                    <!-- Order Card 2 -->
                    <div class="order-card" data-aos="fade-up" data-aos-delay="200">
                      <div class="order-header">
                        <div class="order-id">
                          <span class="label">ID de Pedido:</span>
                          <span class="value">#ORD-2024-1265</span>
                        </div>
                        <div class="order-date">15 de Febrero, 2025</div>
                      </div>
                      <div class="order-content">
                        <div class="product-grid">
                          <img src="assets/img/product/product-4.webp" alt="Product" loading="lazy">
                          <img src="assets/img/product/product-5.webp" alt="Product" loading="lazy">
                        </div>
                        <div class="order-info">
                          <div class="info-row">
                            <span>Estado</span>
                            <span class="status shipped">Enviado</span>
                          </div>
                          <div class="info-row">
                            <span>Artículos</span>
                            <span>2 artículos</span>
                          </div>
                          <div class="info-row">
                            <span>Total</span>
                            <span class="price">$459.99</span>
                          </div>
                        </div>
                      </div>
                      <div class="order-footer">
                        <button type="button" class="btn-track" data-bs-toggle="collapse" data-bs-target="#tracking2" aria-expanded="false">Rastrear Pedido</button>
                        <button type="button" class="btn-details" data-bs-toggle="collapse" data-bs-target="#details2" aria-expanded="false">Ver Detalles</button>
                      </div>

                      <!-- Order Tracking -->
                      <div class="collapse tracking-info" id="tracking2">
                        <div class="tracking-timeline">
                          <div class="timeline-item completed">
                            <div class="timeline-icon">
                              <i class="bi bi-check-circle-fill"></i>
                            </div>
                            <div class="timeline-content">
                              <h5>Pedido Confirmado</h5>
                              <p>Su pedido ha sido recibido y confirmado</p>
                              <span class="timeline-date">15 de Febrero, 2025 - 9:15 AM</span>
                            </div>
                          </div>

                          <div class="timeline-item completed">
                            <div class="timeline-icon">
                              <i class="bi bi-check-circle-fill"></i>
                            </div>
                            <div class="timeline-content">
                              <h5>Procesando</h5>
                              <p>Su pedido está siendo preparado para el envío</p>
                              <span class="timeline-date">15 de Febrero, 2025 - 11:30 AM</span>
                            </div>
                          </div>

                          <div class="timeline-item completed">
                            <div class="timeline-icon">
                              <i class="bi bi-check-circle-fill"></i>
                            </div>
                            <div class="timeline-content">
                              <h5>Empaquetado</h5>
                              <p>Sus artículos han sido empaquetados para el envío</p>
                              <span class="timeline-date">15 de Febrero, 2025 - 2:45 PM</span>
                            </div>
                          </div>

                          <div class="timeline-item active">
                            <div class="timeline-icon">
                              <i class="bi bi-truck"></i>
                            </div>
                            <div class="timeline-content">
                              <h5>En Tránsito</h5>
                              <p>Paquete en tránsito con el transportista</p>
                              <span class="timeline-date">16 de Febrero, 2025 - 10:20 AM</span>
                              <div class="shipping-info">
                                <span>Número de seguimiento: </span>
                                <span class="tracking-number">1Z999AA1234567890</span>
                              </div>
                            </div>
                          </div>

                          <div class="timeline-item">
                            <div class="timeline-icon">
                              <i class="bi bi-house-door"></i>
                            </div>
                            <div class="timeline-content">
                              <h5>Entrega</h5>
                              <p>Entrega estimada: 18 de Febrero, 2025</p>
                            </div>
                          </div>
                        </div>
                      </div>

                      <!-- Order Details -->
                      <div class="collapse order-details" id="details2">
                        <div class="details-content">
                          <div class="detail-section">
                            <h5>Información del Pedido</h5>
                            <div class="info-grid">
                              <div class="info-item">
                                <span class="label">Método de Pago</span>
                                <span class="value">Tarjeta de Crédito (**** 7821)</span>
                              </div>
                              <div class="info-item">
                                <span class="label">Método de Envío</span>
                                <span class="value">Envío Estándar (3-5 días)</span>
                              </div>
                            </div>
                          </div>

                          <div class="detail-section">
                            <h5>Artículos (2)</h5>
                            <div class="order-items">
                              <div class="item">
                                <img src="assets/img/product/product-4.webp" alt="Product" loading="lazy">
                                <div class="item-info">
                                  <h6>Ut enim ad minim veniam</h6>
                                  <div class="item-meta">
                                    <span class="sku">SKU: PRD-004</span>
                                    <span class="qty">Cantidad: 1</span>
                                  </div>
                                </div>
                                <div class="item-price">$299.99</div>
                              </div>

                              <div class="item">
                                <img src="assets/img/product/product-5.webp" alt="Product" loading="lazy">
                                <div class="item-info">
                                  <h6>Quis nostrud exercitation</h6>
                                  <div class="item-meta">
                                    <span class="sku">SKU: PRD-005</span>
                                    <span class="qty">Cantidad: 1</span>
                                  </div>
                                </div>
                                <div class="item-price">$159.99</div>
                              </div>
                            </div>
                          </div>

                          <div class="detail-section">
                            <h5>Detalles de Precio</h5>
                            <div class="price-breakdown">
                              <div class="price-row">
                                <span>Subtotal</span>
                                <span>$459.98</span>
                              </div>
                              <div class="price-row">
                                <span>Envío</span>
                                <span>$9.99</span>
                              </div>
                              <div class="price-row">
                                <span>Impuesto</span>
                                <span>$38.02</span>
                              </div>
                              <div class="price-row total">
                                <span>Total</span>
                                <span>$459.99</span>
                              </div>
                            </div>
                          </div>

                          <div class="detail-section">
                            <h5>Dirección de Envío</h5>
                            <div class="address-info">
                              <p>Sarah Anderson<br>123 Main Street<br>Apt 4B<br>New York, NY 10001<br>United States</p>
                              <p class="contact">+1 (555) 123-4567</p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>

                    <!-- Order Card 3 -->
                    <div class="order-card" data-aos="fade-up" data-aos-delay="300">
                      <div class="order-header">
                        <div class="order-id">
                          <span class="label">ID de Pedido:</span>
                          <span class="value">#ORD-2024-1252</span>
                        </div>
                        <div class="order-date">10 de Febrero, 2025</div>
                      </div>
                      <div class="order-content">
                        <div class="product-grid">
                          <img src="assets/img/product/product-6.webp" alt="Product" loading="lazy">
                        </div>
                        <div class="order-info">
                          <div class="info-row">
                            <span>Estado</span>
                            <span class="status delivered">Entregado</span>
                          </div>
                          <div class="info-row">
                            <span>Artículos</span>
                            <span>1 artículo</span>
                          </div>
                          <div class="info-row">
                            <span>Total</span>
                            <span class="price">$129.99</span>
                          </div>
                        </div>
                      </div>
                      <div class="order-footer">
                        <button type="button" class="btn-review">Escribir Reseña</button>
                        <button type="button" class="btn-details">Ver Detalles</button>
                      </div>
                    </div>

                    <!-- Order Card 4 -->
                    <div class="order-card" data-aos="fade-up" data-aos-delay="400">
                      <div class="order-header">
                        <div class="order-id">
                          <span class="label">ID de Pedido:</span>
                          <span class="value">#ORD-2024-1245</span>
                        </div>
                        <div class="order-date">5 de Febrero, 2025</div>
                      </div>
                      <div class="order-content">
                        <div class="product-grid">
                          <img src="assets/img/product/product-7.webp" alt="Product" loading="lazy">
                          <img src="assets/img/product/product-8.webp" alt="Product" loading="lazy">
                          <img src="assets/img/product/product-9.webp" alt="Product" loading="lazy">
                          <span class="more-items">+2</span>
                        </div>
                        <div class="order-info">
                          <div class="info-row">
                            <span>Estado</span>
                            <span class="status cancelled">Cancelado</span>
                          </div>
                          <div class="info-row">
                            <span>Artículos</span>
                            <span>5 artículos</span>
                          </div>
                          <div class="info-row">
                            <span>Total</span>
                            <span class="price">$1,299.99</span>
                          </div>
                        </div>
                      </div>
                      <div class="order-footer">
                        <button type="button" class="btn-reorder">Reordenar</button>
                        <button type="button" class="btn-details">Ver Detalles</button>
                      </div>
                    </div>
                  </div>

                  <!-- Pagination -->
                  <div class="pagination-wrapper" data-aos="fade-up">
                    <button type="button" class="btn-prev" disabled="">
                      <i class="bi bi-chevron-left"></i>
                    </button>
                    <div class="page-numbers">
                      <button type="button" class="active">1</button>
                      <button type="button">2</button>
                      <button type="button">3</button>
                      <span>...</span>
                      <button type="button">12</button>
                    </div>
                    <button type="button" class="btn-next">
                      <i class="bi bi-chevron-right"></i>
                    </button>
                  </div>
                </div>

                <!-- Wishlist Tab -->
                <div class="tab-pane fade" id="wishlist">
                  <div class="section-header" data-aos="fade-up">
                    <h2>Mi Lista de Deseos</h2>
                    <div class="header-actions">
                      <button type="button" class="btn-add-all">Agregar Todo al Carrito</button>
                    </div>
                  </div>

                  <div class="wishlist-grid">
                    <!-- Wishlist Item 1 -->
                    <div class="wishlist-card" data-aos="fade-up" data-aos-delay="100">
                      <div class="wishlist-image">
                        <img src="assets/img/product/product-1.webp" alt="Product" loading="lazy">
                        <button class="btn-remove" type="button" aria-label="Remove from wishlist">
                          <i class="bi bi-trash"></i>
                        </button>
                        <div class="sale-badge">-20%</div>
                      </div>
                      <div class="wishlist-content">
                        <h4>Lorem ipsum dolor sit amet</h4>
                        <div class="product-meta">
                          <div class="rating">
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-half"></i>
                            <span>(4.5)</span>
                          </div>
                          <div class="price">
                            <span class="current">$79.99</span>
                            <span class="original">$99.99</span>
                          </div>
                        </div>
                        <button type="button" class="btn-add-cart">Agregar al Carrito</button>
                      </div>
                    </div>

                    <!-- Wishlist Item 2 -->
                    <div class="wishlist-card" data-aos="fade-up" data-aos-delay="200">
                      <div class="wishlist-image">
                        <img src="assets/img/product/product-2.webp" alt="Product" loading="lazy">
                        <button class="btn-remove" type="button" aria-label="Remove from wishlist">
                          <i class="bi bi-trash"></i>
                        </button>
                      </div>
                      <div class="wishlist-content">
                        <h4>Consectetur adipiscing elit</h4>
                        <div class="product-meta">
                          <div class="rating">
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star"></i>
                            <span>(4.0)</span>
                          </div>
                          <div class="price">
                            <span class="current">$149.99</span>
                          </div>
                        </div>
                        <button type="button" class="btn-add-cart">Agregar al Carrito</button>
                      </div>
                    </div>

                    <!-- Wishlist Item 3 -->
                    <div class="wishlist-card" data-aos="fade-up" data-aos-delay="300">
                      <div class="wishlist-image">
                        <img src="assets/img/product/product-3.webp" alt="Product" loading="lazy">
                        <button class="btn-remove" type="button" aria-label="Remove from wishlist">
                          <i class="bi bi-trash"></i>
                        </button>
                        <div class="out-of-stock-badge">Agotado</div>
                      </div>
                      <div class="wishlist-content">
                        <h4>Sed do eiusmod tempor</h4>
                        <div class="product-meta">
                          <div class="rating">
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <span>(5.0)</span>
                          </div>
                          <div class="price">
                            <span class="current">$199.99</span>
                          </div>
                        </div>
                        <button type="button" class="btn-notify">Notificar Cuando Esté Disponible</button>
                      </div>
                    </div>
                  </div>
                </div>

                <!-- Payment Methods Tab -->
                <div class="tab-pane fade" id="wallet">
                  <div class="section-header" data-aos="fade-up">
                    <h2>Métodos de Pago</h2>
                    <div class="header-actions">
                      <button type="button" class="btn-add-new">
                        <i class="bi bi-plus-lg"></i>
                        Agregar Nueva Tarjeta
                      </button>
                    </div>
                  </div>

                  <div class="payment-cards-grid">
                    <!-- Payment Card 1 -->
                    <div class="payment-card default" data-aos="fade-up" data-aos-delay="100">
                      <div class="card-header">
                        <i class="bi bi-credit-card"></i>
                        <div class="card-badges">
                          <span class="default-badge">Predeterminado</span>
                          <span class="card-type">Visa</span>
                        </div>
                      </div>
                      <div class="card-body">
                        <div class="card-number">•••• •••• •••• 4589</div>
                        <div class="card-info">
                          <span>Expires 09/2026</span>
                        </div>
                      </div>
                      <div class="card-actions">
                        <button type="button" class="btn-edit">
                          <i class="bi bi-pencil"></i>
                          Editar
                        </button>
                        <button type="button" class="btn-remove">
                          <i class="bi bi-trash"></i>
                          Eliminar
                        </button>
                      </div>
                    </div>

                    <!-- Payment Card 2 -->
                    <div class="payment-card" data-aos="fade-up" data-aos-delay="200">
                      <div class="card-header">
                        <i class="bi bi-credit-card"></i>
                        <div class="card-badges">
                          <span class="card-type">Mastercard</span>
                        </div>
                      </div>
                      <div class="card-body">
                        <div class="card-number">•••• •••• •••• 7821</div>
                        <div class="card-info">
                          <span>Expira 05/2025</span>
                        </div>
                      </div>
                      <div class="card-actions">
                        <button type="button" class="btn-edit">
                          <i class="bi bi-pencil"></i>
                          Editar
                        </button>
                        <button type="button" class="btn-remove">
                          <i class="bi bi-trash"></i>
                          Eliminar
                        </button>
                        <button type="button" class="btn-make-default">Establecer como Predeterminado</button>
                      </div>
                    </div>
                  </div>
                </div>

                <!-- Reviews Tab -->
                <div class="tab-pane fade" id="reviews">
                  <div class="section-header" data-aos="fade-up">
                    <h2>Mis Reseñas</h2>
                    <div class="header-actions">
                      <div class="dropdown">
                        <button class="filter-btn" data-bs-toggle="dropdown">
                          <i class="bi bi-funnel"></i>
                          <span>Ordenar por: Recientes</span>
                        </button>
                        <ul class="dropdown-menu">
                          <li><a class="dropdown-item" href="#">Recientes</a></li>
                          <li><a class="dropdown-item" href="#">Calificación Más Alta</a></li>
                          <li><a class="dropdown-item" href="#">Calificación Más Baja</a></li>
                        </ul>
                      </div>
                    </div>
                  </div>

                  <div class="reviews-grid">
                    <!-- Review Card 1 -->
                    <div class="review-card" data-aos="fade-up" data-aos-delay="100">
                      <div class="review-header">
                        <img src="assets/img/product/product-1.webp" alt="Product" class="product-image" loading="lazy">
                        <div class="review-meta">
                          <h4>Lorem ipsum dolor sit amet</h4>
                          <div class="rating">
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <span>(5.0)</span>
                          </div>
                          <div class="review-date">Reseñado el 15 de Febrero de 2025</div>
                        </div>
                      </div>
                      <div class="review-content">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                      </div>
                      <div class="review-footer">
                        <button type="button" class="btn-edit">Edit Review</button>
                        <button type="button" class="btn-delete">Delete</button>
                      </div>
                    </div>

                    <!-- Review Card 2 -->
                    <div class="review-card" data-aos="fade-up" data-aos-delay="200">
                      <div class="review-header">
                        <img src="assets/img/product/product-2.webp" alt="Product" class="product-image" loading="lazy">
                        <div class="review-meta">
                          <h4>Consectetur adipiscing elit</h4>
                          <div class="rating">
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star"></i>
                            <span>(4.0)</span>
                          </div>
                          <div class="review-date">Reseñado el 10 de Febrero de 2025</div>
                        </div>
                      </div>
                      <div class="review-content">
                        <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                      </div>
                      <div class="review-footer">
                        <button type="button" class="btn-edit">Edit Review</button>
                        <button type="button" class="btn-delete">Delete</button>
                      </div>
                    </div>
                  </div>
                </div>

                <!-- Addresses Tab -->
                <div class="tab-pane fade" id="addresses">
                  <div class="section-header" data-aos="fade-up">
                    <h2>Mis Direcciones</h2>
                    <div class="header-actions">
                      <button type="button" class="btn-add-new">
                        <i class="bi bi-plus-lg"></i>
                        Agregar Nueva Dirección
                      </button>
                    </div>
                  </div>

                  <div class="addresses-grid">
                    <!-- Address Card 1 -->
                    <div class="address-card default" data-aos="fade-up" data-aos-delay="100">
                      <div class="card-header">
                        <h4>Casa</h4>
                        <span class="default-badge">Predeterminado</span>
                      </div>
                      <div class="card-body">
                        <p class="address-text">123 Main Street<br>Apt 4B<br>New York, NY 10001<br>United States</p>
                        <div class="contact-info">
                          <div><i class="bi bi-person"></i> Sarah Anderson</div>
                          <div><i class="bi bi-telephone"></i> +1 (555) 123-4567</div>
                        </div>
                      </div>
                      <div class="card-actions">
                        <button type="button" class="btn-edit">
                          <i class="bi bi-pencil"></i>
                          Editar
                        </button>
                        <button type="button" class="btn-remove">
                          <i class="bi bi-trash"></i>
                          Eliminar
                        </button>
                      </div>
                    </div>

                    <!-- Address Card 2 -->
                    <div class="address-card" data-aos="fade-up" data-aos-delay="200">
                      <div class="card-header">
                        <h4>Oficina</h4>
                      </div>
                      <div class="card-body">
                        <p class="address-text">456 Business Ave<br>Suite 200<br>San Francisco, CA 94107<br>United States</p>
                        <div class="contact-info">
                          <div><i class="bi bi-person"></i> Sarah Anderson</div>
                          <div><i class="bi bi-telephone"></i> +1 (555) 987-6543</div>
                        </div>
                      </div>
                      <div class="card-actions">
                        <button type="button" class="btn-edit">
                          <i class="bi bi-pencil"></i>
                          Editar
                        </button>
                        <button type="button" class="btn-remove">
                          <i class="bi bi-trash"></i>
                          Eliminar
                        </button>
                        <button type="button" class="btn-make-default">Establecer como Predeterminado</button>
                      </div>
                    </div>
                  </div>
                </div>

                <!-- Settings Tab -->
                <div class="tab-pane fade" id="settings">
                  <div class="section-header" data-aos="fade-up">
                    <h2>Configuración de la Cuenta</h2>
                  </div>

                  <div class="settings-content">
                    <!-- Personal Information -->
                    <div class="settings-section" data-aos="fade-up">
                      <h3>Información Personal</h3>
                      <form class="php-email-form settings-form">
                        <div class="row g-3">
                          <div class="col-md-6">
                            <label for="firstName" class="form-label">Nombre</label>
                            <input type="text" class="form-control" id="firstName" value="Sarah" required="">
                          </div>
                          <div class="col-md-6">
                            <label for="lastName" class="form-label">Apellido</label>
                            <input type="text" class="form-control" id="lastName" value="Anderson" required="">
                          </div>
                          <div class="col-md-6">
                            <label for="email" class="form-label">Correo Electrónico</label>
                            <input type="email" class="form-control" id="email" value="sarah@example.com" required="">
                          </div>
                          <div class="col-md-6">
                            <label for="phone" class="form-label">Teléfono</label>
                            <input type="tel" class="form-control" id="phone" value="+1 (555) 123-4567">
                          </div>
                        </div>

                        <div class="form-buttons">
                          <button type="submit" class="btn-save">Guardar Cambios</button>
                        </div>

                        <div class="loading">Cargando</div>
                        <div class="error-message"></div>
                        <div class="sent-message">¡Tus cambios se han guardado con éxito!</div>
                      </form>
                    </div>

                    <!-- Email Preferences -->
                    <div class="settings-section" data-aos="fade-up" data-aos-delay="100">
                      <h3>Preferencias de Correo Electrónico</h3>
                      <div class="preferences-list">
                        <div class="preference-item">
                          <div class="preference-info">
                            <h4>Actualizaciones de Pedidos</h4>
                            <p>Recibe notificaciones sobre el estado de tus pedidos</p>
                          </div>
                          <div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" id="orderUpdates" checked="">
                          </div>
                        </div>

                        <div class="preference-item">
                          <div class="preference-info">
                            <h4>Promociones</h4>
                            <p>Recibe correos sobre nuevas promociones y ofertas</p>
                          </div>
                          <div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" id="promotions">
                          </div>
                        </div>

                        <div class="preference-item">
                          <div class="preference-info">
                            <h4>Boletín</h4>
                            <p>Suscríbete a nuestro boletín semanal</p>
                          </div>
                          <div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" id="newsletter" checked="">
                          </div>
                        </div>
                      </div>
                    </div>

                    <!-- Security Settings -->
                    <div class="settings-section" data-aos="fade-up" data-aos-delay="200">
                      <h3>Seguridad</h3>
                      <form class="php-email-form settings-form">
                        <div class="row g-3">
                          <div class="col-md-12">
                            <label for="currentPassword" class="form-label">Contraseña Actual</label>
                            <input type="password" class="form-control" id="currentPassword" required="">
                          </div>
                          <div class="col-md-6">
                            <label for="newPassword" class="form-label">Nueva Contraseña</label>
                            <input type="password" class="form-control" id="newPassword" required="">
                          </div>
                          <div class="col-md-6">
                            <label for="confirmPassword" class="form-label">Confirmar Contraseña</label>
                            <input type="password" class="form-control" id="confirmPassword" required="">
                          </div>
                        </div>

                        <div class="form-buttons">
                          <button type="submit" class="btn-save">Actualizar Contraseña</button>
                        </div>

                        <div class="loading">Cargando</div>
                        <div class="error-message"></div>
                        <div class="sent-message">¡Tu contraseña ha sido actualizada con éxito!</div>
                      </form>
                    </div>

                    <!-- Delete Account -->
                    <div class="settings-section danger-zone" data-aos="fade-up" data-aos-delay="300">
                      <h3>Eliminar Cuenta</h3>
                      <div class="danger-zone-content">
                        <p>Una vez que elimines tu cuenta, no hay vuelta atrás. Por favor, asegúrate.</p>
                        <button type="button" class="btn-danger">Eliminar Cuenta</button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>

    </section><!-- /Account Section -->

  </main>

  
  <!-- Scroll Top -->
  <!--  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>-->v

  <!-- Preloader -->
   <!-- <div id="preloader"></div>-->

  <!-- Vendor JS Files -->
  <!--  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>-->
  <!--  <script src="assets/vendor/php-email-form/validate.js"></script>-->
  <!--  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>-->
  <!--  <script src="assets/vendor/aos/aos.js"></script>-->
  <!--  <script src="assets/vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>-->
  <!--  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>-->
  <!--  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>-->
   <!-- <script src="assets/vendor/drift-zoom/Drift.min.js"></script>-->
  <!--  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>-->

  <!-- Main JS File -->
  <!--  <script src="assets/js/main.js"></script> -->

<?php require_once '../footer.php'; ?>