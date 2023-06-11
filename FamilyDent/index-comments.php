<?php require "./templates/header.php"?>

<main class="main main__comments">
    <secction class="comments">
        <div class="wrapper">
            <h2 class="title">Оставьте ваш комментарий</h2>
            <form action="#" class="comments__form" method="post">
                <input type="text" name="name" id="name" placeholder="ФИО" require>
                <input type="email" name="email" id="email" placeholder="email" require>
                <input type="number" name="telephone" id="telephone" placeholder="telephone" require>
                <textarea name="text" id="text" cols="30" rows="10" placeholder="Введите ваш комментарий" require   ></textarea>
                <button type="submit">Отправить</button> 
                <?php 
                if (isset($_POST["name"]) && isset($_POST["email"]) && isset($_POST["telephone"]) && isset($_POST["text"])) {
                    $name = $_POST['name'];
                    $email = $_POST['email'];
                    $telephone = $_POST['telephone'];
                    $text = $_POST['text'];
                    send_to_db($name, $email, $telephone, $text);    
                }
                ?>
            </form>
        </div>
    </secction>

    <section class="comments-out">
       <div class="wrapper">
        <h2 class="title">Комментарии</h2>
       <ul class="comments-out__list">
            <?php 
                $comments = get_comments_all();

                foreach($comments as $comment):
            ?>
                <li class="comments-out__item">
                    <h4><?php echo $comment['name']?></h4>
                    <p><?php echo $comment['text']?></p>
                </li>
            <?php endforeach ?>
        </ul>
       </div>
    </section>
</main>

<?php require "./templates/footer.php"?>