<?php include_once 'header.php';?>

<div clas="whaper">
    <div class="container">
        <div class="row">
            <div class="principal col-xs-7">
                <h2>Noticias</h2>
                <div id="carousel-destaque" class="carousel slide" data-ride="carousel">
                    <?php include_once 'carousel.php';?>
                </div> <!-- end #carousel-destaque  -->

                <div class="ultimas">
                    <ul class="nav nav-tabs nav-justified">
                      <li role="presentation" class="active"><a href="#">últimas</a></li>
                      <li role="presentation"><a href="#">Mais Lidas</a></li>
                      <li role="presentation"><a href="#">Mais Comentadas</a></li>
                    </ul>
                    
                    <section class="newsfeed">
                        <?php include_once 'content-1.php';?>
                    </section>
                </div>
            </div>
            
            <div id="sidebar" class="col-xs-5">
                <?php include_once 'sidebar.php';?>
            </div> <!-- end #sidebar  -->
            
            <div class="blog col-xs-12" >
                <h2>Blog</h2>
                <?php include_once 'content-2.php';?>
            </div>
            
            
            <div class="links col-xs-4">
                <?php include_once 'enquete.php';?>
            </div>
            <div class="links col-xs-4">
                <?php include_once 'links.php';?>
            </div>
            <div class="links col-xs-4">
                <?php include_once 'agenda.php';?>
            </div>
        </div> <!-- end .row  -->
    </div><!-- end .container  -->
</div><!-- end .whaper -->

<div class="galeria col-xs-12">
<h2>Galeria</h2>
<ul>
    <li class="photo-1"><a href=""><figure><img src="http://placehold.it/640x640" alt="..."></figure></a></li>
    <li class="photo-2"><a href=""><figure><img src="http://placehold.it/640x640" alt="..."></figure></a></li>
    <li class="photo-3"><a href=""><figure><img src="http://placehold.it/640x640" alt="..."></figure></a></li>
    <li class="photo-4"><a href=""><figure><img src="http://placehold.it/640x640" alt="..."></figure></a></li>
    <li class="photo-5"><a href=""><figure><img src="http://placehold.it/640x640" alt="..."></figure></a></li>
    <li class="photo-6"><a href=""><figure><img src="http://placehold.it/640x640" alt="..."></figure></a></li>
    <li class="photo-7"><a href=""><figure><img src="http://placehold.it/640x640" alt="..."></figure></a></li>
    <li class="photo-8"><a href=""><figure><img src="http://placehold.it/640x640" alt="..."></figure></a></li>
    <li class="photo-9"><a href=""><figure><img src="http://placehold.it/640x640" alt="..."></figure></a></li>                 
</ul>
</div>

<?php include 'footer.php';?>