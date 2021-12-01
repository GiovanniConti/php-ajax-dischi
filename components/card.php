<!-- HTML of a single card -->
<div class="card p-4">

  <img class="card-img-top" src="<?php echo $singolDisc['poster'] ?>" alt="card_discImg">

  <div class="card-body text-center p-0">
    <h5 class="card_discTitle card-title fs-3 pt-5 pb-3"><?php echo $singolDisc['title'] ?></h5>
    <h6 class="card_singer fs-4 mb-0"><?php echo $singolDisc['author'] ?></h6>
    <h6 class="card_year fs-5"><?php echo $singolDisc['year'] ?></h6>
  </div>
  
</div>