<div class="popsicles index content">
    <?= $this->Html->link(__('New Popsicle'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Popsicles') ?></h3>
    <div class="row">
       
        <?php foreach ($popsicles as $popsicle): ?>
            <div class="col-md-4">
          <div class="card"> <img class="card-img-top" src= <?=$this->Url->image($popsicle->image);?>
              alt=<?=$popsicle->name;?>>
            <div class="card-body">
              <div class="row">
                <h4 class="card-title col-6">alt=<?=$popsicle->name;?></h4>
                <h4 class="card-title col-6 text-right"></h4>
              </div>
              <p class="card-text">alt=<?=$popsicle->description;?></p> <a href="#" class="btn btn-primary" contenteditable="true">Add to cart</a>
            </div>
          </div>
        </div>
        <?php endforeach; ?>
        
    </div>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(__('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')) ?></p>
    </div>
</div>
