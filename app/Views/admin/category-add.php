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
                                <li class="breadcrumb-item"><a href="app-categories-list.html">Categories</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Edit Category</li>
                            </ol>
                        </nav>
                        <h1 class="h3 m-0">Edit Category</h1>
                    </div>
                    <div class="col-auto d-flex"><a href="#" class="btn btn-secondary me-3">Duplicate</a><a id="create_btn" href="#" class="btn btn-primary" onclick="submitForm()">Save</a>
</div>
                </div>
            </div>
            <?php if (isset($data['message'])): ?>
    <div class="message" style="color:red"><?php echo $data['message']; ?></div>
<?php endif; ?>
            <form id="cate_form" action="<?php url('admin/categoryadd') ?>" enctype="multipart/form-data" method="POST">
            <div class="sa-entity-layout"
                data-sa-container-query="{&quot;920&quot;:&quot;sa-entity-layout--size--md&quot;,&quot;1100&quot;:&quot;sa-entity-layout--size--lg&quot;}">
                <div class="sa-entity-layout__body">
                    <div class="sa-entity-layout__main">
                        <div class="card">
                            <div class="card-body p-5">
                                <div class="mb-5">
                                    <h2 class="mb-0 fs-exact-18">Basic information</h2>
                                </div>
                                <div class="mb-4"><label for="form-category/name" class="form-label">Name</label><input
                                        type="text" name="name" class="form-control" id="form-category/name" value="Hand Tools" />
                                </div>
                                <div class="mb-4"><label for="form-category/slug" class="form-label">Slug</label>
                                    <div class="input-group input-group--sa-slug"><span class="input-group-text"
                                            id="form-category/slug-addon">https://example.com/catalog/</span><input
                                            type="text" class="form-control" id="form-category/slug" name="slug"
                                            aria-describedby="form-category/slug-addon form-category/slug-help"
                                            value="hand-tools" /></div>
                                    <div id="form-category/slug-help" class="form-text">Unique human-readable category
                                        identifier. No longer than 255 characters.</div>
                                </div>
                                <div class="mb-4"><label for="form-category/description"
                                        class="form-label">Description</label><textarea id="form-category/description"
                                        class="sa-quill-control form-control"name="description"
                                        rows="8">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur ornare, mi in ornare elementum, libero nibh lacinia urna, quis convallis lorem erat at purus. Maecenas eu varius nisi.</textarea>
                                </div>
                            </div>
                        </div>
                        <div class="card mt-5">
                            
                        </div>
                    </div>
                    <div class="sa-entity-layout__sidebar">
                        <div class="card w-100">
                            <div class="card-body p-5">
                                <div class="mb-5">
                                    <h2 class="mb-0 fs-exact-18">Visibility</h2>
                                </div>
                                <div class="mb-4"><label class="form-check"><input  
                                
                                value="publish"  type="radio" class="form-check-input"
                                            name="status" /><span
                                            class="form-check-label">Published</span></label><label
                                        class="form-check"><input type="radio" class="form-check-input" 
                                        value="scheduled" name="status"
                                            checked="" /><span class="form-check-label">Scheduled</span></label>
                                    <label class="form-check mb-0"><input type="radio" class="form-check-input"
                                            name="status" 
                                            
                                            value="hidden" /><span class="form-check-label">Hidden</span></label>
                                </div>
                                <div><label for="form-category/seo-title" class="form-label">Publish date</label><input
                                name="publish_date"
                                        type="text" class="form-control datepicker-here" id="form-category/publish-date"
                                        data-auto-close="true" data-language="en" />
                                    <div class="form-text">The category will not be visible until the specified date.
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card w-100 mt-5">
                            <!-- #region -->
                        </div>
                        <div class="card w-100 mt-5">
                            <div class="card-body p-5">
                                <div class="mb-5">
                                    <h2 class="mb-0 fs-exact-18">Image</h2>
                                </div>
                                <div class="border p-4 d-flex justify-content-center">
    <input type="file" id="imageUpload" name="image" onchange="previewImage(event)">
    <div class="max-w-20x">
        <img id="preview" class="w-100 h-auto" width="320" height="320" alt="" />
    </div>
</div>
<div id="imageActions" class="mt-4 mb-n2">
    <a href="#" class="me-3 pe-2" onclick="replaceImage()">Replace image</a>
    <a href="#" class="text-danger me-3 pe-2" onclick="removeImage()">Remove image</a>
</div>

<script>
      function submitForm() {
        document.getElementById('cate_form').submit();
    }
    function previewImage(event) {
        var input = event.target;
        var reader = new FileReader();

        reader.onload = function () {
            var preview = document.getElementById('preview');
            preview.src = reader.result;
            document.getElementById('imageActions').style.display = 'block';
        };

        reader.readAsDataURL(input.files[0]);

        // Show the value of the file input
        console.log(input.value);
    }

    function replaceImage() {
        document.getElementById('imageUpload').click();
    }

    function removeImage() {
        var preview = document.getElementById('preview');
        preview.src = '';
        document.getElementById('imageActions').style.display = 'none';
    }
</script>        </div>
                        </div>
                    </div>
                </div>
            </div>
            </form>
        </div>
    </div>
</div>

<!-- sa-app__body / end -->
<!-- sa-app__footer -->
<?php
require_once __DIR__ . '/inc/footer.php';
?>