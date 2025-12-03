<?php require_once '../header.php'; ?>

  <main class="main">

    <!-- Page Title -->
    <div class="page-title light-background">
      <div class="container d-lg-flex justify-content-between align-items-center">
        <h1 class="mb-2 mb-lg-0">PAGAR</h1>
      </div>
    </div><!-- End Page Title -->

    <!-- Checkout Section -->
    <section id="checkout" class="checkout section">

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row">
          <div class="col-lg-7">
            <!-- Checkout Form -->
            <div class="checkout-container" data-aos="fade-up">
              <form class="checkout-form">
                <!-- Customer Information -->
                <div class="checkout-section" id="customer-info">
                  <div class="section-header">
                    <div class="section-number">1</div>
                    <h3>Información del Cliente</h3>
                  </div>
                  <div class="section-content">
                    <div class="row">
                      <div class="col-md-6 form-group">
                        <label for="first-name">Primer Nombre</label>
                        <input type="text" name="first-name" class="form-control" id="primer-nombre" placeholder="Tu Primer Nombre" required="">
                      </div>
                      <div class="col-md-6 form-group">
                        <label for="last-name">Apellido</label>
                        <input type="text" name="last-name" class="form-control" id="apellido" placeholder="Tu Apellido" required="">
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="email">Correo Electrónico</label>
                      <input type="email" class="form-control" name="email" id="correo-electronico" placeholder="Tu Correo Electrónico" required="">
                    </div>
                    <div class="form-group">
                      <label for="phone">Número de Teléfono</label>
                      <input type="tel" class="form-control" name="phone" id="telefono" placeholder="Tu Número de Teléfono" required="">
                    </div>
                  </div>
                </div>

                <!-- Shipping Address -->
                <div class="checkout-section" id="shipping-address">
                  <div class="section-header">
                    <div class="section-number">2</div>
                    <h3>Dirección de Envío</h3>
                  </div>
                  <div class="section-content">
                    <div class="form-group">
                      <label for="address">Dirección</label>
                      <input type="text" class="form-control" name="address" id="address" placeholder="Dirección" required="">
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" id="save-address" name="save-address">
                      <label class="form-check-label" for="save-address">
                        Guardar esta dirección para futuros pedidos
                      </label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" id="billing-same" name="billing-same" checked="">
                      <label class="form-check-label" for="billing-same">
                        La dirección de facturación es la misma que la de envío
                      </label>
                    </div>
                  </div>
                </div>

                <!-- Payment Method -->
                <div class="checkout-section" id="payment-method">
                  <div class="section-header">
                    <div class="section-number">3</div>
                    <h3>Método de Pago</h3>
                  </div>
                  <div class="section-content">
                    <div class="payment-options">
                      <div class="payment-option active">
                        <input type="radio" name="payment-method" id="credit-card" checked="">
                        <label for="credit-card">
                          <span class="payment-icon"><i class="bi bi-credit-card-2-front"></i></span>
                          <span class="payment-label">Tarjeta de Crédito / Débito</span>
                        </label>
                      </div>
                      <div class="payment-option">
                        <input type="radio" name="payment-method" id="paypal">
                        <label for="paypal">
                          <span class="payment-icon"><i class="bi bi-paypal"></i></span>
                          <span class="payment-label">PayPal</span>
                        </label>
                      </div>


                    <div class="payment-details" id="credit-card-details">
                      <div class="form-group">
                        <label for="numero-tarjeta">Número de Tarjeta</label>
                        <div class="card-number-wrapper">
                          <input type="text" class="form-control" name="numero-tarjeta" id="numero-tarjeta" placeholder="1234 5678 9012 3456" required="">
                          <div class="card-icons">
                            <i class="bi bi-credit-card-2-front"></i>
                            <i class="bi bi-credit-card"></i>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-6 form-group">
                          <label for="expiry">Fecha de Expiración</label>
                          <input type="text" class="form-control" name="expiry" id="expiry" placeholder="MM/AA" required="">
                        </div>
                        <div class="col-md-6 form-group">
                          <label for="cvv">Código de Seguridad (CVV)</label>
                          <div class="cvv-wrapper">
                            <input type="text" class="form-control" name="cvv" id="cvv" placeholder="123" required="">
                            <span class="cvv-hint" data-bs-toggle="tooltip" data-bs-placement="top" title="Código de 3 dígitos en el reverso de su tarjeta">
                              <i class="bi bi-question-circle"></i>
                            </span>
                          </div>
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="card-name">Nombre en la Tarjeta</label>
                        <input type="text" class="form-control" name="card-name" id="card-name" placeholder="Juan Pérez" required="">
                      </div>
                    </div>

                    <div class="payment-details d-none" id="paypal-details">
                      <p class="payment-info">Será redirigido a PayPal para completar su compra de forma segura.</p>
                    </div>

                    <div class="payment-details d-none" id="apple-pay-details">
                      <p class="payment-info">Se le pedirá que autorice el pago con Apple Pay.</p>
                    </div>
                  </div>
                </div>

                <!-- Order Review -->
                <div class="checkout-section" id="order-review">
                  <div class="section-header">
                    <div class="section-number">4</div>
                    <h3>Revisar y Realizar Pedido</h3>
                  </div>
                  <div class="section-content">
                    <div class="form-check terms-check">
                      <input class="form-check-input" type="checkbox" id="terms" name="terms" required="">
                      <label class="form-check-label" for="terms">
                        Acepto los <a href="#" data-bs-toggle="modal" data-bs-target="#termsModal">Términos y Condiciones</a> y la <a href="#" data-bs-toggle="modal" data-bs-target="#privacyModal">Política de Privacidad</a>
                      </label>
                    </div>
                    <div class="success-message d-none">¡Su pedido ha sido realizado con éxito! Gracias por su compra.</div>
                    <div class="place-order-container">
                      <button type="submit" class="btn btn-primary place-order-btn">
                        <span class="btn-text">Realizar Pedido</span>
                        <span class="btn-price">$240.96</span>
                      </button>
                    </div>
                  </div>
                </div>
              </form>
            </div>
          </div>

          <div class="col-lg-5">
            <!-- Order Summary -->
            <div class="order-summary" data-aos="fade-left" data-aos-delay="200">
              <div class="order-summary-header">
                <h3>Resumen del Pedido</h3>
                <span class="item-count">2 Artículos</span>
              </div>

              <div class="order-summary-content">
                <div class="order-items">
                  <div class="order-item">
                    <div class="order-item-image">
                      <img src="assets/img/product/product-1.webp" alt="Product" class="img-fluid">
                    </div>
                    <div class="order-item-details">
                      <h4>Lorem Ipsum Dolor</h4>
                      <p class="order-item-variant">Color: Negro | Talla: M</p>
                      <div class="order-item-price">
                        <span class="quantity">1 ×</span>
                        <span class="price">$89.99</span>
                      </div>
                    </div>
                  </div>

                  <div class="order-item">
                    <div class="order-item-image">
                      <img src="assets/img/product/product-2.webp" alt="Product" class="img-fluid">
                    </div>
                    <div class="order-item-details">
                      <h4>Sit Amet Consectetur</h4>
                      <p class="order-item-variant">Color: White | Size: L</p>
                      <div class="order-item-price">
                        <span class="quantity">2 ×</span>
                        <span class="price">$59.99</span>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="promo-code">
                  <div class="input-group">
                    <input type="text" class="form-control" placeholder="Código Promocional" aria-label="Código Promocional">
                    <button class="btn btn-outline-primary" type="button">Aplicar</button>
                  </div>
                </div>

                <div class="order-totals">
                  <div class="order-subtotal d-flex justify-content-between">
                    <span>Subtotal</span>
                    <span>$209.97</span>
                  </div>
                  <div class="order-shipping d-flex justify-content-between">
                    <span>Envío</span>
                    <span>$9.99</span>
                  </div>
                  <div class="order-tax d-flex justify-content-between">
                    <span>Impuesto</span>
                    <span>$21.00</span>
                  </div>
                  <div class="order-total d-flex justify-content-between">
                    <span>Total</span>
                    <span>$240.96</span>
                  </div>
                </div>

                <div class="secure-checkout">
                  <div class="secure-checkout-header">
                    <i class="bi bi-shield-lock"></i>
                    <span>Pago Seguro</span>
                  </div>
                  <div class="payment-icons">
                    <i class="bi bi-credit-card-2-front"></i>
                    <i class="bi bi-credit-card"></i>
                    <i class="bi bi-paypal"></i>
                    <i class="bi bi-apple"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Terms and Privacy Modals -->
        <div class="modal fade" id="termsModal" tabindex="-1" aria-labelledby="termsModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-dialog-scrollable">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="termsModalLabel">Terms and Conditions</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam in dui mauris. Vivamus hendrerit arcu sed erat molestie vehicula. Sed auctor neque eu tellus rhoncus ut eleifend nibh porttitor. Ut in nulla enim. Phasellus molestie magna non est bibendum non venenatis nisl tempor.</p>
                <p>Suspendisse in orci enim. Vivamus hendrerit arcu sed erat molestie vehicula. Sed auctor neque eu tellus rhoncus ut eleifend nibh porttitor. Ut in nulla enim. Phasellus molestie magna non est bibendum non venenatis nisl tempor.</p>
                <p>Suspendisse in orci enim. Vivamus hendrerit arcu sed erat molestie vehicula. Sed auctor neque eu tellus rhoncus ut eleifend nibh porttitor. Ut in nulla enim. Phasellus molestie magna non est bibendum non venenatis nisl tempor.</p>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-bs-dismiss="modal">I Understand</button>
              </div>
            </div>
          </div>
        </div>

        <div class="modal fade" id="privacyModal" tabindex="-1" aria-labelledby="privacyModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-dialog-scrollable">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="privacyModalLabel">Privacy Policy</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam in dui mauris. Vivamus hendrerit arcu sed erat molestie vehicula. Sed auctor neque eu tellus rhoncus ut eleifend nibh porttitor. Ut in nulla enim.</p>
                <p>Suspendisse in orci enim. Vivamus hendrerit arcu sed erat molestie vehicula. Sed auctor neque eu tellus rhoncus ut eleifend nibh porttitor. Ut in nulla enim. Phasellus molestie magna non est bibendum non venenatis nisl tempor.</p>
                <p>Suspendisse in orci enim. Vivamus hendrerit arcu sed erat molestie vehicula. Sed auctor neque eu tellus rhoncus ut eleifend nibh porttitor. Ut in nulla enim. Phasellus molestie magna non est bibendum non venenatis nisl tempor.</p>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-bs-dismiss="modal">I Understand</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section><!-- /Checkout Section -->
  </main>
  <?php require_once '../footer.php'; ?>