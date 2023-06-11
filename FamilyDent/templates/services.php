<section class="services">
    <div class="wrapper">
        <h2 class="services__title title">
            Наши услуги
        </h2>
        <ul class="services__list">
<?php
    $services = get_services_all();
    foreach($services as $service):
?>

            <li class="services__item">
                <a href="#">
                    <img src="<?php echo $service["service_photo"]?>" alt="">
                    <h3><?php echo $service["service_name"] ?></h3>
                    <p><?php echo $string = substr($service["service_text"], 0, 390) ?></p>
                </a>
            </li>                   
               
<?php endforeach; ?>
        </ul>
    </div>
</section>