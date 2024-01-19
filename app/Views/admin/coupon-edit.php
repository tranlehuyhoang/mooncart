<?php
require_once __DIR__ . '/inc/header.php';

?>

<div id="top" class="sa-app__body">
    <div class="mx-sm-2 px-2 px-sm-3 px-xxl-4 pb-6">
        <div class="container container--max--xl">
            <div class="py-5">
                <div class="row g-4 align-items-center">
                    <div class="col">
                        <nav class="mb-2" aria-label="breadcrumb">
                            <ol class="breadcrumb breadcrumb-sa-simple">
                                <li class="breadcrumb-item"><a href="<?php url('') ?>">Dashboard</a></li>
                                <li class="breadcrumb-item"><a href="app-coupons-list.html">Coupons</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Edit Coupon</li>
                            </ol>
                        </nav>
                        <h1 class="h3 m-0">Edit Coupon</h1>
                    </div>
                    <div class="col-auto d-flex"><button class="btn btn-secondary me-3">Delete</b><button onclick="submitForm()" class="btn btn-primary">Edit</button></div>
                </div>
            </div>
            <div class="sa-entity-layout" data-sa-container-query="{&quot;920&quot;:&quot;sa-entity-layout--size--md&quot;,&quot;1100&quot;:&quot;sa-entity-layout--size--lg&quot;}">
                <?php getFlash('error') ?>
                <form id="cate_form" action="<?php url('admin/couponedit/'.  $data['coupon']['id']) ?>" enctype="multipart/form-data" method="POST">
                    <div class="sa-entity-layout__body">
                        <div class="sa-entity-layout__main">
                            <div class="card">
                                <div class="card-body p-5">
                                    <div class="mb-5">
                                        <h2 class="mb-0 fs-exact-18">Basic information</h2>
                                    </div>
                                    <div class="mb-4"><label for="form-coupon/code" class="form-label">Code</label><input type="text" name="code" class="form-control" id="form-coupon/code" value="<?php echo $data['coupon']['code']?>" placeholder="QWERTY12" />
                                    </div>

                                    <div class="mb-4"><label for="form-coupon/value" class="form-label">Discount
                                            value</label><input name="discount" type="text" class="form-control" id="form-coupon/value" value="<?php echo $data['coupon']['discount']?>" /></div>
                                    <div class="mb-4"><label for="form-coupon/limit" class="form-label">Usage
                                            limit</label><input name="usage_limit" type="text" class="form-control" id="form-coupon/limit" value="<?php echo $data['coupon']['usage_limit']?>" /></div>
                                    <div class="mb-n2 pt-2"><label class="form-check"><input type="checkbox" class="form-check-input" name="type" /><span class="form-check-label">Only
                                                for registered customers</span></label></div>
                                </div>
                            </div>
                        </div>
                        <div class="sa-entity-layout__sidebar">
                            <div class="card w-100">
                                <div class="card-body p-5">
                                    <div class="mb-5">
                                        <h2 class="mb-0 fs-exact-18">Status</h2>
                                    </div>
                                    <div class="mb-n2 mt-n3"><label class="form-check"><input type="radio" class="form-check-input" name="is_active" value="1" checked="" /><span class="form-check-label">Enabled</span></label><label class="form-check mb-0"><input value="0" type="radio" class="form-check-input" name="is_active" /><span class="form-check-label">Disabled</span></label></div>
                                    <div class="  mr-4 ml-4 mt-4"> <label for="form-product/seo-title" class="form-label">Expries date
                                            </label><input value="<?php
                                            $timestamp = strtotime($data['coupon']['expires_at']);
                                            $formattedDate = date("m/d/Y", $timestamp);
                                           
                                            
                                            echo $formattedDate;?>" name="expires_at" type="text" class="form-control datepicker-here" id="form-product/publish-date" data-auto-close="true" data-language="en">
                                    </div>
                                </div>
                              
                            </div>
                           
                        </div>


                       
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<script>
    function submitForm() {
        document.getElementById('cate_form').submit();
    }
</script>
<!-- sa-app__body / end -->
<!-- sa-app__footer -->
<?php
require_once __DIR__ . '/inc/footer.php';
?>