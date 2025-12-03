<?php require_once '../header.php'; ?>

  <main class="main">

    <!-- Page Title -->
    <div class="page-title light-background">
      <div class="container d-lg-flex justify-content-between align-items-center">
        <h1 class="mb-2 mb-lg-0">CARRITO</h1>
      </div>
    </div><!-- End Page Title -->

    <!-- Cart Section -->
    <section id="cart" class="cart section">

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row g-4">
          <div class="col-lg-8" data-aos="fade-up" data-aos-delay="200">
            <div class="cart-items">
              <div class="cart-header d-none d-lg-block">
                <div class="row align-items-center gy-4">
                  <div class="col-lg-6">
                    <h5>ProductO</h5>
                  </div>
                  <div class="col-lg-2 text-center">
                    <h5>Precio</h5>
                  </div>
                  <div class="col-lg-2 text-center">
                    <h5>Cantidad</h5>
                  </div>
                  <div class="col-lg-2 text-center">
                    <h5>Total</h5>
                  </div>
                </div>
              </div>

              <!-- Cart Item 1 -->
              <div class="cart-item" data-aos="fade-up" data-aos-delay="100">
                <div class="row align-items-center gy-4">
                  <div class="col-lg-6 col-12 mb-3 mb-lg-0">
                    <div class="product-info d-flex align-items-center">
                      <div class="product-image">
                        <img src="../../assets/img/product/product-2.webp" alt="Product" class="img-fluid" loading="lazy">
                      </div>
                      <div class="product-details">
                        <h6 class="product-title">Lorem ipsum dolor sit amet</h6>
                        <button class="remove-item" type="button">
                          <i class="bi bi-trash"></i> Eliminar
                        </button>
                      </div>
                    </div>
                  </div>
                  <div class="col-12 col-lg-2 text-center">
                    <div class="price-tag">
                      <span class="current-price">$89.99</span>
                    </div>
                  </div>
                  <div class="col-12 col-lg-2 text-center">
                    <div class="quantity-selector">
                      <button class="quantity-btn decrease">
                        <i class="bi bi-dash"></i>
                      </button>
                      <input type="number" class="quantity-input" value="1" min="1" max="10">
                      <button class="quantity-btn increase">
                        <i class="bi bi-plus"></i>
                      </button>
                    </div>
                  </div>
                  <div class="col-12 col-lg-2 text-center mt-3 mt-lg-0">
                    <div class="item-total">
                      <span>$89.99</span>
                    </div>
                  </div>
                </div>
              </div><!-- End Cart Item -->

              <!-- Cart Item 2 -->
              <div class="cart-item" data-aos="fade-up" data-aos-delay="200">
                <div class="row align-items-center gy-4">
                  <div class="col-lg-6 col-12 mb-3 mb-lg-0">
                    <div class="product-info d-flex align-items-center">
                      <div class="product-image">
                        <img src="../../assets/img/product/product-7.webp" alt="Product" class="img-fluid" loading="lazy">
                      </div>
                      <div class="product-details">
                        <h6 class="product-title">Consectetur adipiscing elit</h6>
                        <button class="remove-item" type="button">
                          <i class="bi bi-trash"></i> Eliminar
                        </button>
                      </div>
                    </div>
                  </div>
                  <div class="col-12 col-lg-2 text-center">
                    <div class="price-tag">
                      <span class="current-price">$64.99</span>
                      <span class="original-price">$79.99</span>
                    </div>
                  </div>
                  <div class="col-12 col-lg-2 text-center">
                    <div class="quantity-selector">
                      <button class="quantity-btn decrease">
                        <i class="bi bi-dash"></i>
                      </button>
                      <input type="number" class="quantity-input" value="2" min="1" max="10">
                      <button class="quantity-btn increase">
                        <i class="bi bi-plus"></i>
                      </button>
                    </div>
                  </div>
                  <div class="col-12 col-lg-2 text-center mt-3 mt-lg-0">
                    <div class="item-total">
                      <span>$129.98</span>
                    </div>
                  </div>
                </div>
              </div><!-- End Cart Item -->

              <!-- Cart Item 3 -->
              <div class="cart-item" data-aos="fade-up" data-aos-delay="300">
                <div class="row align-items-center gy-4">
                  <div class="col-lg-6 col-12 mb-3 mb-lg-0">
                    <div class="product-info d-flex align-items-center">
                      <div class="product-image">
                        <img src="../../assets/img/product/product-10.webp" alt="Product" class="img-fluid" loading="lazy">
                      </div>
                      <div class="product-details">
                        <h6 class="product-title">Sed do eiusmod tempor</h6>
                        <button class="remove-item" type="button">
                          <i class="bi bi-trash"></i> Eliminar
                        </button>
                      </div>
                    </div>
                  </div>
                  <div class="col-12 col-lg-2 text-center">
                    <div class="price-tag">
                      <span class="current-price">$49.99</span>
                    </div>
                  </div>
                  <div class="col-12 col-lg-2 text-center">
                    <div class="quantity-selector">
                      <button class="quantity-btn decrease">
                        <i class="bi bi-dash"></i>
                      </button>
                      <input type="number" class="quantity-input" value="1" min="1" max="10">
                      <button class="quantity-btn increase">
                        <i class="bi bi-plus"></i>
                      </button>
                    </div>
                  </div>
                  <div class="col-12 col-lg-2 text-center mt-3 mt-lg-0">
                    <div class="item-total">
                      <span>$49.99</span>
                    </div>
                  </div>
                </div>
              </div><!-- End Cart Item -->

              <div class="cart-actions">
                <div class="row g-3">
                  <div class="col-lg-6 col-md-6">
                    <div class="coupon-form">
                      <div class="input-group">
                        <input type="text" class="form-control" placeholder="Código de cupón">
                        <button class="btn btn-accent" type="button">Aplicar</button>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-6 col-md-6 text-md-end">
                    <button class="btn btn-outline-accent me-2">
                      <i class="bi bi-arrow-clockwise"></i> Actualizar
                    </button>
                    <button class="btn btn-outline-danger">
                      <i class="bi bi-trash"></i> Limpiar
                    </button>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4" data-aos="fade-up" data-aos-delay="300">
            <div class="cart-summary">
              <h4 class="summary-title">Resumen del Pedido</h4>

              <div class="summary-item">
                <span class="summary-label">Subtotal</span>
                <span class="summary-value">$269.96</span>
              </div>

              <div class="summary-item shipping-item">
                <span class="summary-label">Envío</span>
                <div class="shipping-options">
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="shipping" id="standard" checked="">
                    <label class="form-check-label" for="standard">
                      Envío Estándar - $4.99
                    </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="shipping" id="express">
                    <label class="form-check-label" for="express">
                      Envío Exprés - $12.99
                    </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="shipping" id="free">
                    <label class="form-check-label" for="free">
                      Envío Gratis (Pedidos superiores a $50.000)
                    </label>
                  </div>
                </div>
              </div>

              <div class="summary-item">
                <span class="summary-label">Impuesto</span>
                <span class="summary-value">$27.00</span>
              </div>

              <div class="summary-item discount">
                <span class="summary-label">Descuento</span>
                <span class="summary-value">-$0.00</span>
              </div>

              <div class="summary-total">
                <span class="summary-label">Total</span>
                <span class="summary-value">$301.95</span>
              </div>

              <div class="checkout-button">
                <a href="#" class="btn btn-accent w-100">
                  Proceder al Pago <i class="bi bi-arrow-right"></i>
                </a>
              </div>

              <div class="continue-shopping">
                <a href="#" class="btn btn-link w-100">
                  <i class="bi bi-arrow-left"></i> Continuar Comprando
                </a>
              </div>
            </div>
          </div>
        </div>

      </div>

    </section><!-- /Cart Section -->

  </main>

<?php require_once '../footer.php'; ?>