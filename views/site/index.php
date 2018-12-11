<?php

/* @var $this yii\web\View */

$this->title = 'My Yii Application';
?>
<div class="container">
    
    <div class="row py-5">
        <div class="col">
            <div class="aboutUs"> <h1>About us</h1> </div>
            <!-- The description of the website-->
            <div class="aboutWebsite">
                Give similar suggestions to the movies and video games that you have enjoyed in the past and may also enjoy in the future. <br>
                <p>The suggestion process is crowd-sourced, as in users put the other titles that they feel are similar
                    to a certain movie or video game. Then we would compile the data and present similar titles to a movie or video game
                    based on how consistently people feel those titles are similar.</p>
            </div>
        </div>
    </div>
    <?php isset($games) ? "GO FUCK YOURSELF" : "YOUZ A GOOD GUY" ; ?>
    <div class="row py-5">
        <div class="col-md-3">
            <div class="benoit">
            <figure class="benoit">
                <img src="images/benoit.PNG" class="rounded-circle">
                <figcaption>Benoit: Frontend</figcaption>
            </figure>
            </div>
        </div>
        <div class="col-md-3">
            <div class="mathieu">
            <figure class="mathieu">
                <img src="images/Mathieu.PNG" class="rounded-circle">
                <figcaption>Mathieu: Frontend</figcaption>
            </figure>
            </div>
        </div>
        <div class="col-md-3">
            <div class="silan">
            <figure class="silan">
                <img src="images/silan.PNG" class="rounded-circle">
                <figcaption>Silan: Backend</figcaption>
            </figure>
            </div>
        </div>
        <div class="col-md-3">
            <div class="affan">
            <figure class="affan">
                <img src="images/affan.PNG" class="rounded-circle">
                <figcaption>Affan: Backend</figcaption>
            </figure>
            </div>
        </div>
    </div>
</div>