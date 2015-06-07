<div class="row">
    <?php for($i = 1; $i <= 9; $i++ ){ ?>
  <div class="feed-news col-xs-12">
      <?php if(($i%2)!=0): ?>
      <div class="media-left">
          <a href="#">
              <img src="http://placehold.it/177x100" alt="...">
          </a>
      </div>
      <?php endif ?>
      <div class="media-body">
          <a href="#"><h4 class="media-heading">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum doloribus sapiente delectus laboriosam in fuga ipsum tenetur! Tenetur, magnam, adipisci!</h4></a>
      </div>
      <hr>
  </div>
    <?php }; ?>
</div>


