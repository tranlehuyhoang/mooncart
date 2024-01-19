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
                                <li class="breadcrumb-item active" aria-current="page">Customers</li>
                            </ol>
                        </nav>
                        <h1 class="h3 m-0">Customers</h1>
                    </div>
                    <div class="col-auto d-flex"> 
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="p-4"><input type="text" placeholder="Start typing to search for customers"
                        class="form-control form-control--search mx-auto" id="table-search" /></div>
                <div class="sa-divider"></div>
                <table class="sa-datatables-init" data-order="[[ 1, &quot;asc&quot; ]]"
                    data-sa-search-input="#table-search">
                    <thead>
                        <tr>
                            <th class="w-min" data-orderable="false"><input type="checkbox"
                                    class="form-check-input m-0 fs-exact-16 d-block" aria-label="..." /></th>
                            <th class=" ">Name</th>
                            <th class=" ">Role</th>
                            <th>Registered</th>
                            <th>Country</th>
                            <th>Spent</th>
                            <th class="w-min" data-orderable="false"></th>
                        </tr>
                    </thead>
                    <tbody>
               
                    <?php if (isset($data['customers'] ) && is_array($data['customers'])): ?>
    <?php foreach ($data['customers'] as $customer): ?>
        <tr>
            <td><input type="checkbox" class="form-check-input m-0 fs-exact-16 d-block" aria-label="..." /></td>
            <td>
                <div class="d-flex align-items-center">
                    <a href="app-customer.html" class="me-4">
                        <div class="sa-symbol sa-symbol--shape--rounded sa-symbol--size--lg">
                            <img src="<?php echo ASSETS_URL_ROOT . '/admin_assets/images/customers/customer-2-40x40.jpg' ?>"
                                width="40" height="40" alt="" />
                        </div>
                    </a>
                    <div>
                        <a href="app-customer.html" class="text-reset">
                            <?php echo ucfirst($customer['firstname']) . ' ' . ucfirst($customer['lastname'])?>
                        </a>
                        <div class="text-muted mt-n1"><?php echo $customer['email']?></div>
                    </div>
                </div>
            </td>
            <td class="text-nowrap"><?php echo $customer['role'] == 1 ? 'Admin' : 'Customer' ?></td>
            <td class="text-nowrap"><?php echo $customer['created_at']?></td>
            <td>VN</td>
            <td>
                <div class="sa-price">
                    <span class="sa-price__symbol">$</span>
                    <span class="sa-price__integer">34,392</span>
                    <span class="sa-price__decimal">.10</span>
                </div>
            </td>
            <td>
                <div class="dropdown">
                    <button class="btn btn-sa-muted btn-sm" type="button" id="customer-context-menu-1"
                        data-bs-toggle="dropdown" aria-expanded="false" aria-label="More">
                        <svg xmlns="http://www.w3.org/2000/svg" width="3" height="13" fill="currentColor">
                            <path
                                d="M1.5,8C0.7,8,0,7.3,0,6.5S0.7,5,1.5,5S3,5.7,3,6.5S2.3,8,1.5,8z M1.5,3C0.7,3,0,2.3,0,1.5S0.7,0,1.5,0 S3,0.7,3,1.5S2.3,3,1.5,3z M1.5,10C2.3,10,3,10.7,3,11.5S2.3,13,1.5,13S0,12.3,0,11.5S0.7,10,1.5,10z">
                            </path>
                        </svg>
                    </button>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="customer-context-menu-1">
                        <li>
                            <form action="<?php url('admin/update_to_admin')?>" method="post">
                                <input type="hidden" name="user_id" value="<?php echo $customer['id'] ?>">
                                <button class="dropdown-item">Cấp quyền</button>
                            </form>
                        </li>
                        <li>
                            <hr class="dropdown-divider" />
                        </li>
                        <li>
                            <a class="dropdown-item text-danger"
                                href="<?php url('admin/delete_customer/' . $customer['id']) ?>"
                                onclick="return confirm('Bạn có chắc chắn muốn xóa người dùng này?')">Delete</a>
                        </li>
                    </ul>
                </div>
            </td>
        </tr>
    <?php endforeach ?>
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