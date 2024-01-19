<?php
require_once __DIR__ . '/inc/header.php';

?>

<div id="top" class="sa-app__body">
    <div class="mx-sm-2 px-2 px-sm-3 px-xxl-4 pb-6">
        <div class="container">
            <div class="py-5">
                <div class="row g-4 align-items-center">
                    <div class="col">
                        <nav class="mb-2" aria-label="breadcrumb">
                            <ol class="breadcrumb breadcrumb-sa-simple">
                                <li class="breadcrumb-item"><a href="<?php url('') ?>">Dashboard</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Orders</li>
                            </ol>
                        </nav>
                        <h1 class="h3 m-0">Orders</h1>
                    </div>
                    <div class="col-auto d-flex"><a href="app-order.html" class="btn btn-primary">New order</a></div>
                </div>
            </div>
            <div class="card">
                <div class="p-4"><input type="text" placeholder="Start typing to search for orders"
                        class="form-control form-control--search mx-auto" id="table-search" /></div>
                <div class="sa-divider"></div>
                <table class="sa-datatables-init text-nowrap" data-order="[[ 1, &quot;desc&quot; ]]"
                    data-sa-search-input="#table-search">
                    <thead>
                        <tr>
                            <th class="w-min" data-orderable="false"><input type="checkbox"
                                    class="form-check-input m-0 fs-exact-16 d-block" aria-label="..." /></th>
                            <th>Number</th>
                            <th>Email</th>
                            <th>Status</th>
                            <th>payment_mode</th>
                            <th>Date</th>
                            <th>shipping_price</th>
                            <th>discount</th>
                            <th>total_amount</th>
                            <th>Actions</th>
                            <th class="w-min" data-orderable="false"></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $subtotal  =  0;

                        if (is_array($data['orders']) || is_object($data['orders'])) : ?>
                        <?php foreach ($data['orders'] as $order) : ?>

                        <tr>
                            <td><input type="checkbox" class="form-check-input m-0 fs-exact-16 d-block"
                                    aria-label="..." /></td>
                            <td><a href="<?php echo url('admin/ordersdetails/' . $order['id']); ?>"
                                    class="text-reset">#<?php echo $order['id']; ?></a></td>
                            <td><a href="" class="text-reset"><?php echo $order['email']; ?></a></td>
                            <td>
                                <div class="d-flex fs-6">
                                    <div class="badge badge-sa-danger"><?php echo $order['status']; ?></div>
                                </div>
                            </td>
                            <td>
                                <div class="d-flex fs-6">
                                    <div class="badge badge-sa-success"><?php echo $order['payment_mode']; ?></div>
                                </div>
                            </td>

                            <td><?php echo $order['created_at']; ?></td>
                            <td><?php echo $order['shipping_price']; ?> vnđ</td>
                            <td><?php echo $order['discount']; ?> vnđ</td>
                            <td><?php echo $order['total_amount']; ?> vnđ</td>

                            <td>
                                <div class="dropdown"><button class="btn btn-sa-muted btn-sm" type="button"
                                        id="order-context-menu-0" data-bs-toggle="dropdown" aria-expanded="false"
                                        aria-label="More"><svg xmlns="http://www.w3.org/2000/svg" width="3" height="13"
                                            fill="currentColor">
                                            <path
                                                d="M1.5,8C0.7,8,0,7.3,0,6.5S0.7,5,1.5,5S3,5.7,3,6.5S2.3,8,1.5,8z M1.5,3C0.7,3,0,2.3,0,1.5S0.7,0,1.5,0 S3,0.7,3,1.5S2.3,3,1.5,3z M1.5,10C2.3,10,3,10.7,3,11.5S2.3,13,1.5,13S0,12.3,0,11.5S0.7,10,1.5,10z">
                                            </path>
                                        </svg></button>
                                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="order-context-menu-0">

                                        <li><a class="dropdown-item text-danger"
                                                href="<?php echo url('admin/orderdelete/' . $order['id']); ?>">Delete</a>
                                        </li>
                                    </ul>
                                </div>
                            </td>
                            <td></td>

                        </tr>
                        <?php endforeach; ?>
                        <?php else : ?>
                        <tr>
                            <td colspan="6">No items in the cart.</td>
                        </tr>
                        <?php endif; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<!-- sa-app__body / end -->
<!-- sa-app__footer -->
<?php
require_once __DIR__ . '/inc/footer.php';
?>