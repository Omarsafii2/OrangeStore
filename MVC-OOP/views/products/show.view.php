<?php
require 'views/partials/header.php';
?>
<main class="mx-4 my-4">
    <div class="container"></div>
    <h1 class="text-primary">products</h1>
    <div class="row ">
        <?php
        foreach ($products as $product):?>
        <div class="col-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title text-primary"><?php echo $product['name']; ?></h5>
                    <h6 class="card-subtitle mb-2 text-muted fs-4"><?php echo $product['price']; ?></h6>
                </div>
            </div>
        </div>

        <?php endforeach;            ?>
    </div>
</div>
</main>
<?php require 'views/partials/footer.php'; ?>