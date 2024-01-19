<?php

use App\Helpers\Format as Format;

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
                                <li class="breadcrumb-item active" aria-current="page">Coupons</li>
                            </ol>
                        </nav>
                        <h1 class="h3 m-0">Coupons</h1>
                    </div>
                    <div class="col-auto d-flex"><a href="<?php url('admin/couponadd')  ?>" class="btn btn-primary">Tạo mới</a></div>
                </div>
            </div>
            <div class="card">
                <div class="p-4"><input type="text" placeholder="Start typing to search for coupons"
                        class="form-control form-control--search mx-auto" id="table-search" /></div>
                <div class="sa-divider"></div>
                <table class="sa-datatables-init text-nowrap" data-order="[[ 1, &quot;asc&quot; ]]"
                    data-sa-search-input="#table-search">
                    <thead>
                        <tr>
                            <th class="w-min" data-orderable="false"><input type="checkbox"
                                    class="form-check-input m-0 fs-exact-16 d-block" aria-label="..." /></th>
                            <th>Code</th>
                            <th>Usage limit</th>
                            <th>Discount</th>
                            <th>Status</th>
                            <th>Start date</th>
                            <th>End date</th>
                            <th class="w-min" data-orderable="false"></th>
                        </tr>
                    </thead>
                    <tbody>
                          <?php if (isset($data['coupons'] ) && is_array($data['coupons'])): ?>
                            <?php foreach ($data['coupons'] as $coupon) : ?>

                        <tr>
                            <td><input type="checkbox" class="form-check-input m-0 fs-exact-16 d-block"
                                    aria-label="..." /></td>
                            <td><a href="app-coupon.html" class="text-reset"><?php echo strtoupper($coupon['code']) ?></a></td>
                            <td><?php echo $coupon['usage_limit']?></td>
                            <td><?php    Format::currency($coupon['discount'])?></td>
                            <td>
                                <div class="d-flex fs-16">
                                    <?php 
                                    if ($coupon['is_active'] ) {
                                        # code...
                                        echo '<div class="badge badge-sa-pill badge-sa-success">Active</div>';
                                    }else {
                                        echo '<div class="badge badge-sa-pill badge-sa-primary">Planned</div>';

                                    }
                                    ?>
                                </div>
                            </td>
                            <td><?php echo strtoupper($coupon['created_at']) ?></td>
                            <td><?php echo strtoupper($coupon['expires_at']) ?></td>
                            <td>
                                <div class="dropdown"><button class="btn btn-sa-muted btn-sm" type="button"
                                        id="coupon-context-menu-0" data-bs-toggle="dropdown" aria-expanded="false"
                                        aria-label="More"><svg xmlns="http://www.w3.org/2000/svg" width="3" height="13"
                                            fill="currentColor">
                                            <path
                                                d="M1.5,8C0.7,8,0,7.3,0,6.5S0.7,5,1.5,5S3,5.7,3,6.5S2.3,8,1.5,8z M1.5,3C0.7,3,0,2.3,0,1.5S0.7,0,1.5,0 S3,0.7,3,1.5S2.3,3,1.5,3z M1.5,10C2.3,10,3,10.7,3,11.5S2.3,13,1.5,13S0,12.3,0,11.5S0.7,10,1.5,10z">
                                            </path>
                                        </svg></button>
                                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="coupon-context-menu-0">
                                    <li><a class="dropdown-item" href="<?php url('admin/couponedit/'.$coupon['id'] )?>">Chỉnh sửa</a></li>
                        <li><a  onclick="return confirm('Bạn có chắc chắn muốn xóa mã giảm giá này?')" class="dropdown-item" href="<?php url('admin/coupondelete/'.$coupon['id'] )?>">Xóa </a></li>
                                    </ul>
                                </div>
                            </td>
                        </tr>
                         <?php endforeach; ?>
<?php endif ?>
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