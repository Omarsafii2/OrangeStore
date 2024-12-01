<?php require 'views/partials/header.php'; ?>

x

    <form action="/products/Create" method="POST" class="mt-2">
        <div class="form-group">
            <input type="email" class="form-control" id="" aria-describedby="" placeholder="Enter the name of product">
        </div>
        <div class="form-group mt-2">
            <input type="password" class="form-control" id="" placeholder="price of the product">
        </div>
        <button type="submit" class="btn btn-primary mt-2">Submit</button>
    </form>


<?php require 'views/partials/footer.php'; ?>