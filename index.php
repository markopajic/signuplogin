<?php
    include_once 'header.php'
?>

        <section class="index-intro">
            <?php
            if(isset($_SESSION["useruid"])) {
                echo "<p>Hello there " . $_SESSION["useruid"] . "</p>";
            }
            ?>
            <h1>This is an introduction</h1>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat tempore laborum ea, doloribus culpa deleniti nisi quam ex voluptates ab, repudiandae veritatis nulla voluptas. Beatae facere culpa sed distinctio ipsum.</p>
        </section>


        <section class="index-categories">
            <h2>Some Basic Categories</h2>
            <div class="index-categories-list">
                <div>
                    <h3>Fun Stuff</h3>
                </div>
                <div>
                    <h3>Serious Stuff</h3>
                </div>
                <div>
                    <h3>Exciting Stuff</h3>
                </div>
                <div>
                    <h3>Boring Stuff</h3>
                </div>
            </div>
        </section>


        
        <?php
    include_once 'footer.php'
?>