<?php


function markupCard()
{
    require_once "./constants.php";
    foreach ($products as $product) : ?>
        <div class="card">
            <img src="<?php echo $product['img']; ?>" class="card-img-top" style="max-width: 18rem;" alt="<?php echo $product['name']; ?>">
            <div class="card-body d-flex flex-column justify-content-between">
                <h5 class="card-title"><?php echo $product["name"]; ?></h5>
                <p class="card-text"><?php echo $product["description"]; ?></p>
                <p class="card-text"><small class="text-body-secondary"><?php echo $product["price"]; ?></small></p>
            </div>
        </div>

<?php endforeach;
}
