<?php

use App\Helpers\Format;

require_once __DIR__ . '/inc/header.php';

?>

<?php
$subtotal  =  0;

if (is_array($data['order']) || is_object($data['order'])) : ?>
<?php foreach ($data['order'] as $order) : ?>
<div id="top" class="sa-app__body">
    <div class="mx-sm-2 px-2 px-sm-3 px-xxl-4 pb-6">
        <div class="container container--max--xl">
            <div class="py-5">
                <div class="row g-4 align-items-center">
                    <div class="col">
                        <nav class="mb-2" aria-label="breadcrumb">
                            <ol class="breadcrumb breadcrumb-sa-simple">
                                <li class="breadcrumb-item"><a href="<?php url('') ?>">Dashboard</a></li>
                                <li class="breadcrumb-item"><a href="app-orders-list.html">Orders</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Order #80294</li>
                            </ol>
                        </nav>
                        <h1 class="h3 m-0">Order #<?php echo $order['id'] ?></h1>
                    </div>
                    <div class="col-auto d-flex"><a href="#" class="btn btn-secondary me-3">Delete</a><a href="#"
                            class="btn btn-primary">Edit</a></div>
                </div>
            </div>
            <div class="sa-page-meta mb-5">
                <div class="sa-page-meta__body">
                    <div class="sa-page-meta__list">
                        <div class="sa-page-meta__item"><?php echo $order['created_at'] ?></div>
                        <div class="sa-page-meta__item">6 items</div>
                        <div class="sa-page-meta__item">Total <?php Format::currency($order['total_amount'])  ?>
                        </div>
                        <div class="sa-page-meta__item d-flex align-items-center fs-6"><span
                                class="badge badge-sa-success me-2">Paid</span><span
                                class="badge badge-sa-warning me-2">Partially Fulfilled</span></div>
                    </div>
                </div>
            </div>
            <div class="sa-entity-layout"
                data-sa-container-query="{&quot;920&quot;:&quot;sa-entity-layout--size--md&quot;}">
                <div class="sa-entity-layout__body">
                    <div class="sa-entity-layout__main">
                        <div class="sa-card-area"><textarea class="sa-card-area__area" rows="2"
                                placeholder="Notes about order"></textarea>
                            <div class="sa-card-area__card"><svg xmlns="http://www.w3.org/2000/svg" width="1em"
                                    height="1em" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit">
                                    <path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path>
                                    <path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path>
                                </svg></div>
                        </div>
                        <div class="card mt-5">
                            <div class="card-body px-5 py-4 d-flex align-items-center justify-content-between">
                                <h2 class="mb-0 fs-exact-18 me-4">Items</h2>
                                <div class="text-muted fs-exact-14"><a href="#">Edit items</a></div>
                            </div>
                            <div class="table-responsive">
                                <table class="sa-table">
                                    <tbody>
                                        <?php
                                                $subtotal  =  0;

                                                if (is_array($data['order_items']) || is_object($data['order_items'])) : ?>
                                        <?php foreach ($data['order_items'] as $order_item) : ?>
                                        <?php $subtotal += $order_item['quantity'] * $order_item['price'] ?>

                                        <tr>
                                            <td class="min-w-20x">
                                                <div class="d-flex align-items-center"><img
                                                        src="<?php echo ASSETS_URL_ROOT . '/public/upload/' ?><?php echo $order_item['product_image']  ?>"
                                                        class="me-4" width="40" height="40" alt="" /><a
                                                        href="app-product.html"
                                                        class="text-reset"><?php echo $order_item['product_name']  ?></a>
                                                </div>
                                            </td>
                                            <td class="text-end">
                                                <div class="sa-price"><span class="sa-price__symbol"></span><span
                                                        class="sa-price__integer"><?php Format::currency($order_item['price']) ?></span><span
                                                        class="sa-price__decimal"> </span></div>
                                            </td>
                                            <td class="text-end"><?php echo $order_item['quantity']  ?></td>
                                            <td class="text-end">
                                                <div class="sa-price"><span class="sa-price__symbol"></span><span
                                                        class="sa-price__integer"><?php Format::currency($order_item['price'] * $order_item['quantity'])  ?></span><span
                                                        class="sa-price__decimal"></span></div>

                                            </td>
                                        </tr>
                                        <?php endforeach; ?>
                                        <?php else : ?>
                                        <tr>
                                            <td colspan="6">No items in the cart.</td>
                                        </tr>
                                        <?php endif; ?>
                                    </tbody>
                                    <tbody class="sa-table__group">
                                        <tr>
                                            <td colSpan="3">Subtotal</td>
                                            <td class="text-end">
                                                <div class="sa-price"><span class="sa-price__symbol"></span><span
                                                        class="sa-price__integer">
                                                        <?php Format::currency($subtotal)  ?></span><span
                                                        class="sa-price__decimal"> </span></div>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td colSpan="3">Shipping
                                                <div class="text-muted fs-exact-13">giao hàng nhanh</div>
                                            </td>
                                            <td class="text-end">
                                                <div class="sa-price"><span class="sa-price__symbol"></span><span
                                                        class="sa-price__integer">
                                                        <?php Format::currency($order['shipping_price']) ?></span><span
                                                        class="sa-price__decimal"> </span></div>
                                            </td>
                                        </tr>
                                    </tbody>
                                    <tbody>
                                        <tr>
                                            <td colSpan="3">Total</td>
                                            <td class="text-end">
                                                <div class="sa-price"><span class="sa-price__symbol"></span><span
                                                        class="sa-price__integer"><?php Format::currency($subtotal + $order['shipping_price']) ?></span><span
                                                        class="sa-price__decimal"></span></div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="card mt-5">
                            <div class="card-body px-5 py-4 d-flex align-items-center justify-content-between">
                                <h2 class="mb-0 fs-exact-18 me-4">Transactions</h2>
                                <div class="text-muted fs-exact-14"><a href="#">Add transaction</a></div>
                            </div>
                            <div class="table-responsive">
                                <table class="sa-table text-nowrap">
                                    <tbody>
                                        <tr>
                                            <td>Payment
                                                <div class="text-muted fs-exact-13">via PayPal</div>
                                            </td>
                                            <td>October 7, 2020</td>
                                            <td class="text-end">
                                                <div class="sa-price"><span class="sa-price__symbol">$</span><span
                                                        class="sa-price__integer">2,000</span><span
                                                        class="sa-price__decimal">.00</span></div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Payment
                                                <div class="text-muted fs-exact-13">from account balance</div>
                                            </td>
                                            <td>November 2, 2020</td>
                                            <td class="text-end">
                                                <div class="sa-price"><span class="sa-price__symbol">$</span><span
                                                        class="sa-price__integer">50</span><span
                                                        class="sa-price__decimal">.00</span></div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Refund
                                                <div class="text-muted fs-exact-13">to PayPal</div>
                                            </td>
                                            <td>December 10, 2020</td>
                                            <td class="text-end text-danger">
                                                <div class="sa-price"><span class="sa-price__symbol">$</span><span
                                                        class="sa-price__integer">-325</span><span
                                                        class="sa-price__decimal">.00</span></div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="card mt-5">
                            <div class="card-body px-5 py-4 d-flex align-items-center justify-content-between">
                                <h2 class="mb-0 fs-exact-18 me-4">Balance</h2>
                            </div>
                            <table class="sa-table">
                                <tbody class="sa-table__group">
                                    <tr>
                                        <td>Order Total</td>
                                        <td class="text-end">
                                            <div class="sa-price"><span class="sa-price__symbol">$</span><span
                                                    class="sa-price__integer">5,882</span><span
                                                    class="sa-price__decimal">.00</span></div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Return Total</td>
                                        <td class="text-end">
                                            <div class="sa-price"><span class="sa-price__symbol">$</span><span
                                                    class="sa-price__integer">0</span><span
                                                    class="sa-price__decimal">.00</span></div>
                                        </td>
                                    </tr>
                                </tbody>
                                <tbody class="sa-table__group">
                                    <tr>
                                        <td>Paid by customer</td>
                                        <td class="text-end">
                                            <div class="sa-price"><span class="sa-price__symbol">$</span><span
                                                    class="sa-price__integer">-80</span><span
                                                    class="sa-price__decimal">.00</span></div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Refunded</td>
                                        <td class="text-end">
                                            <div class="sa-price"><span class="sa-price__symbol">$</span><span
                                                    class="sa-price__integer">0</span><span
                                                    class="sa-price__decimal">.00</span></div>
                                        </td>
                                    </tr>
                                </tbody>
                                <tbody>
                                    <tr>
                                        <td>Balance <span class="text-muted">(customer owes you)</span></td>
                                        <td class="text-end">
                                            <div class="sa-price"><span class="sa-price__symbol">$</span><span
                                                    class="sa-price__integer">5,802</span><span
                                                    class="sa-price__decimal">.00</span></div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="sa-entity-layout__sidebar">
                        <div class="card">
                            <div class="card-body d-flex align-items-center justify-content-between pb-0 pt-4">
                                <h2 class="fs-exact-16 mb-0">Customer</h2><a href="#" class="fs-exact-14">Edit</a>
                            </div>
                            <div class="card-body d-flex align-items-center pt-4">
                                <div class="sa-symbol sa-symbol--shape--circle sa-symbol--size--lg"><img
                                        src="<?php echo ASSETS_URL_ROOT . '/admin_assets/' ?>images/customers/customer-1-40x40.jpg"
                                        width="40" height="40" alt="" />
                                </div>
                                <div class="ms-3 ps-2">
                                    <div class="fs-exact-14 fw-medium"><?php echo $order['email']; ?></div>
                                    <div class="fs-exact-13 text-muted"><?php echo $order['firstname']; ?>
                                        <?php echo $order['lastname']; ?></div>
                                </div>
                            </div>
                        </div>
                        <div class="card mt-5">
                            <div class="card-body d-flex align-items-center justify-content-between pb-0 pt-4">
                                <h2 class="fs-exact-16 mb-0">Contact person</h2><a href="#" class="fs-exact-14">Edit</a>
                            </div>
                            <div class="card-body pt-4 fs-exact-14">
                                <div>Jessica Moore</div>
                                <div class="mt-1"><a href="#">moore@example.com</a></div>
                                <div class="text-muted mt-1">+38 (094) 730-24-25</div>
                            </div>
                        </div>
                        <div class="card mt-5">
                            <div class="card-body d-flex align-items-center justify-content-between pb-0 pt-4">
                                <h2 class="fs-exact-16 mb-0">Shipping Address</h2><a href="#"
                                    class="fs-exact-14">Edit</a>
                            </div>
                            <div class="card-body pt-4 fs-exact-14">Jessica Moore<br />Random Federation<br />115302,
                                Moscow<br />ul. Varshavskaya, 15-2-178</div>
                        </div>
                        <div class="card mt-5">
                            <div class="card-body d-flex align-items-center justify-content-between pb-0 pt-4">
                                <h2 class="fs-exact-16 mb-0">Billing Address</h2><a href="#"
                                    class="fs-exact-14">Edit</a>
                            </div>
                            <div class="card-body pt-4 fs-exact-14">Jessica Moore<br />Random Federation<br />115302,
                                Moscow<br />ul. Varshavskaya, 15-2-178</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php endforeach; ?>
<?php else : ?>
<tr>
    <td colspan="6">No items in the cart.</td>
</tr>
<?php endif; ?>

<!-- sa-app__body / end -->
<!-- sa-app__footer -->
<?php
require_once __DIR__ . '/inc/footer.php';
?>