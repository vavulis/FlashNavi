<?php for ($i = 0; $i < count($this->cards); $i++) { ?>
<div class="col-lg-3 col-md-4 col-sm-6 portfolio-item">
    <a href="<?=$this->cards[$i]->getCommon_link()?>" class="mycard__common-link" target="blank">
        <div class="card h-100 mycard">
            <img class="card-img-top mycard__img" src="<?=$this->cards[$i]->getImg()?>" alt="<?=$this->cards[$i]->getTitle()?>">
            <div class="card-body mycard__body">
                <h4 class="card-title mycard__title"><?=$this->cards[$i]->getTitle()?></h4>
                <p class="card-text mycard__text"><?=$this->cards[$i]->getText()?></p>
            </div>
        </div>
    </a>
</div>
<?php } ?>