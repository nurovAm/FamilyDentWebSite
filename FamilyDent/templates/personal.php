<section class="personal">
    <div class="wrapper">
        <h2 class="personal__title title">
            Наши специалисты
        </h2>
        <ul class="personal__list">
<?php 
    $personal = get_personal_all();
    
    foreach($personal as $doctor):
        $specialization = get_specialization_by_id($doctor["id_specialization"]);
?>

    <li class="personal__item">
        <a href="#">
            <img src="<?php echo $doctor["photo"]?>" alt="">
            <h3><?php echo $doctor["surname"]," ", $doctor["name"]," ", $doctor["lastname"];?></h3>
            <span>
                <?php
                    echo $specialization["specialization_name"];
                ?>
            </span>
        </a>
    </li>

<?php endforeach; ?>               
                  
        </ul>
    </div>
</section>