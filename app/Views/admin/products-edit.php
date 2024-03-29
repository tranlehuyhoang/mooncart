<?php
require_once __DIR__ . '/inc/header.php';

?>

<div id="top" class="sa-app__body">
    <form action="<?php url('admin/productedit/'. $data['product']['id']) ?>" enctype="multipart/form-data" method="POST">

        <div class="mx-sm-2 px-2 px-sm-3 px-xxl-4 pb-6">
            <div class="container">
                <div class="py-5">
                    <div class="row g-4 align-items-center">
                        <div class="col">
                            <nav class="mb-2" aria-label="breadcrumb">
                                <ol class="breadcrumb breadcrumb-sa-simple">
                                    <li class="breadcrumb-item"><a href="<?php url('') ?>">Dashboard</a></li>
                                    <li class="breadcrumb-item"><a href="app-products-list.html">Products</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Edit Product</li>
                                </ol>
                            </nav>
                            <h1 class="h3 m-0">Edit Product</h1>
                        </div>
                        <div class="col-auto d-flex"><a href="#" class="btn btn-secondary me-3">Duplicate</a><button href="#" type="submit" class="btn btn-primary">Save</button></div>
                    </div>
                </div>
                <div class="sa-entity-layout" data-sa-container-query="{&quot;920&quot;:&quot;sa-entity-layout--size--md&quot;,&quot;1100&quot;:&quot;sa-entity-layout--size--lg&quot;}">
                    <div class="sa-entity-layout__body">
                        <div class="sa-entity-layout__main">
                            <div class="card">
                                <div class="card-body p-5">
                                    <div class="mb-5">
                                        <h2 class="mb-0 fs-exact-18">Basic information</h2>
                                    </div>
                                    <div class="mb-4"><label for="form-product/name" class="form-label">Name</label><input type="text" class="form-control" id="form-product/name" name="name" value="<?php echo $data['product']['name']?>" />
                                    </div>
                                    <div class="mb-4"><label for="form-product/slug" class="form-label">Slug</label>
                                        <div class="input-group input-group--sa-slug"><span class="input-group-text" id="form-product/slug-addon">https://example.com/products/</span><input name="slug" type="text" class="form-control" id="form-product/slug" aria-describedby="form-product/slug-addon form-product/slug-help" value="<?php echo $data['product']['slug']?>" /></div>
                                        <div id="form-product/slug-help" class="form-text">Unique human-readable product
                                            identifier. No longer than 255 characters.</div>
                                    </div>
                                    <div class="mb-4"><label for="form-product/description" class="form-label">Description</label><textarea id="form-product/description" name="description" class="sa-quill-control form-control" rows="8">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur ornare, mi in ornare elementum, libero nibh lacinia urna, quis convallis lorem erat at purus. Maecenas eu varius nisi.</textarea>
                                    </div>
                                    <div><label for="form-product/short-description" class="form-label">Short
                                            description</label><textarea name="small_description" id="form-product/short-description" class="form-control" rows="2"><?php echo $data['product']['small_description'] ?>
                                            
                                            </textarea></div>
                                </div>
                            </div>
                            <div class="card mt-5">
                                <div class="card-body p-5">
                                    <div class="mb-5">
                                        <h2 class="mb-0 fs-exact-18">Pricing</h2>
                                    </div>
                                    <div class="row g-4">
                                        <div class="col"><label for="form-product/price" class="form-label">Giá khuyến mãi</label><input name="promotion_price" type="number" class="form-control" id="form-product/price" value="<?php echo $data['product']['promotion_price']?>" /></div>
                                        <div class="col"><label for="form-product/old-price" class="form-label">Giá gốc
                                                 </label><input name="price" value="<?php echo $data['product']['price']?>" type="number" class="form-control" id="form-product/old-price" /></div>
                                    </div>
                                    <div class="mt-4 mb-n2"><a href="#">Schedule discount</a></div>
                                </div>
                            </div>
                            <div class="card mt-5">
                                <div class="card-body p-5">
                                    <div class="mb-4 pt-2">
                                        <label class="form-check"><input type="checkbox"  <?php echo $data['product']['feature'] ? 'checked' : ''?> class="form-check-input" name="feature">
                                            <span class="form-check-label">Trending</span></label>
                                        <label class="form-check"><input type="checkbox"  <?php echo $data['product']['slide'] ? 'checked' : ''?> class="form-check-input" name="slide">
                                            <span class="form-check-label">Slide</span></label>
                                    </div>
                                    <hr>
                                </div>
                            </div>
                            <div class="card mt-5">
                                <div class="card-body p-5">
                                    <div class="mb-5">
                                        <h2 class="mb-0 fs-exact-18">Inventory</h2>
                                    </div>


                                    <div><label for="form-product/quantity" class="form-label">Stock
                                            quantity</label><input type="number" class="form-control" id="form-product/quantity" value="<?php echo $data['product']['quantity']?>" name="quantity" />
                                    </div>
                                </div>
                            </div>
                            <div class="card mt-5">
                                <div class="card-body p-5">
                                    <div class="mb-5">
                                        <h2 class="mb-0 fs-exact-18">Images</h2>
                                    </div>
                                </div>
                                <div class="mt-n5">
                                    <div class="sa-divider"></div>
                                    <div class="table-responsive">
                                        <table class="sa-table">
                                            <thead>
                                                <tr>
                                                    <th class="w-min">Image</th>
                                                    <th class="min-w-10x">Alt text</th>
                                                    <th class="w-min">Order</th>
                                                    <th class="w-min"></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            <?php foreach ($data['images'] as $image): ?>
    <tr>
        <td>
            <div class="sa-symbol sa-symbol--shape--rounded sa-symbol--size--lg">
                <img src="<?php echo ASSETS_URL_ROOT . '/upload/' .$image['image'] ?> " width="40" height="40" alt="" />
            </div>
        </td>
        <td><input type="text" class="form-control form-control-sm" /></td>
        <td><input type="number" class="form-control form-control-sm w-4x" value="0" /></td>
        <td>
            <a href="<?php url('admin/product_image_delete/'. $image['id'])?>" class="btn btn-sa-muted btn-sm mx-n3" type="button" aria-label="Delete image" data-bs-toggle="tooltip" data-bs-placement="right" title="Delete image">
                <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12" fill="currentColor">
                    <path d="M10.8,10.8L10.8,10.8c-0.4,0.4-1,0.4-1.4,0L6,7.4l-3.4,3.4c-0.4,0.4-1,0.4-1.4,0l0,0c-0.4-0.4-0.4-1,0-1.4L4.6,6L1.2,2.6 c-0.4-0.4-0.4-1,0-1.4l0,0c0.4-0.4,1-0.4,1.4,0L6,4.6l3.4-3.4c0.4-0.4,1-0.4,1.4,0l0,0c0.4,0.4,0.4,1,0,1.4L7.4,6l3.4,3.4 C11.2,9.8,11.2,10.4,10.8,10.8z"></path>
                </svg>
            </a>
        </td>
    </tr>
<?php endforeach; ?>
                                                <!-- #region -->
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="sa-divider"></div>

                                    <input name="images[]" hidden type="file" id="upload_media" multiple>


                                    <div class="px-5 py-4 my-2"><label for="upload_media">Tải lên ảnh mới</label></div>
                                </div>
                            </div>
                            <div class="card mt-5">
                                <div class="card-body p-5">
                                    <div class="mb-5">
                                        <h2 class="mb-0 fs-exact-18">Search engine optimization</h2>
                                        <div class="mt-3 text-muted">Provide information that will help improve the
                                            snippet
                                            and bring your product to the top of search engines.</div>
                                    </div>
                                    <div class="mb-4"><label for="form-product/seo-title" class="form-label">Page
                                            title</label><input name="meta_keyword" value="<?php echo $data['product']['meta_keyword'] ?>" type="text" class="form-control" id="form-product/seo-title" /></div>
                                    <div><label for="form-product/seo-description" class="form-label">Meta
                                            description</label><textarea name="meta_description" id="form-product/seo-description" class="form-control" rows="2"><?php echo $data['product']['meta_description'] ?>
                                            
                                          
                                            </textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="sa-entity-layout__sidebar">
                            <div class="card w-100">
                                <div class="card-body p-5">
                                    <div class="mb-5">
                                        <h2 class="mb-0 fs-exact-18">Visibility</h2>
                                    </div>
                                    <div class="mb-4"><label class="form-check"><input type="radio" <?php echo $data['product']['status'] = 'published' ? 'selected': '' ?> class="form-check-input" value="published" name="status" /><span class="form-check-label">Published</span></label><label class="form-check">
                                        
                                    <input <?php echo $data['product']['status'] = 'scheduled' ? 'selected': '' ?> type="radio" class="form-check-input" value="scheduled" name="status" checked="" /><span class="form-check-label">Scheduled</span></label>
                                        <label class="form-check mb-0">
                                            <input <?php echo $data['product']['status'] = 'hidden' ? 'selected': '' ?> type="radio" class="form-check-input" value="hidden" name="status" /><span class="form-check-label">Hidden</span></label>
                                    </div>
                                    <div> <label for="form-product/seo-title" class="form-label">Publish
                                            date</label>
                                            
                                            <input name="publish_date" type="text" class="form-control datepicker-here" value="<?php echo $data['product']['publish_date']   ?>" id="form-product/publish-date" data-auto-close="true" data-language="en" />
                                    </div>
                                </div>
                            </div>
                            <div class="card w-100 mt-5">
                                <div class="card-body p-5">
                                    <div class="mb-5">
                                        <h2 class="mb-0 fs-exact-18">Categories</h2>
                                    </div> <select name="category_id" class="sa-select2 form-select">
                                        <?php foreach ($data['categories'] as $category) : ?>
                                            <option <?php  echo $data['product']['category_id'] = $category['id'] ? 'selected' :''?> value="<?php echo $category['id']; ?>"><?php echo $category['name']; ?>
                                            </option>
                                        <?php endforeach; ?>
                                    </select>
                                    <div class="mt-4 mb-n2"><a href="#">Add new category</a></div>
                                </div>
                            </div>
                            <div class="card w-100 mt-5">
                                <div class="card-body p-5">
                                    <div class="mb-5">
                                        <h2 class="mb-0 fs-exact-18">Tags</h2>
                                    </div><select class="sa-select2 form-select" data-tags="true" multiple="">
                                        <option selected="">Universe</option>
                                        <option selected="">Sputnik</option>
                                        <option selected="">Steel</option>
                                        <option selected="">Rocket</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>

</div>

<!-- sa-app__body / end -->
<!-- sa-app__footer -->
<?php
require_once __DIR__ . '/inc/footer.php';
?>