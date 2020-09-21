<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Popsicle $popsicle
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Popsicles'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="popsicles form content">
            <?= $this->Form->create($popsicle,['type'=>'file']) ?>
            <fieldset>
                <legend><?= __('Add Popsicle') ?></legend>
                <?php
                    echo $this->Form->control('name');
                    echo $this->Form->control('description');
                    echo $this->Form->control('ingredient');
                    echo $this->Form->control('price');
                    echo $this->Form->control('image_file',['type'=>'file']);
                    echo $this->Form->control('calorie');
                    echo $this->Form->control('latest');
                    echo $this->Form->control('flavour_id', ['options' => $flavours,'empty' => '--Select--']);
                    echo $this->Form->control('categories._ids', ['options' => $categories,'empty' => '--Select--']);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
