<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Flavour $flavour
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Flavours'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="flavours form content">
            <?= $this->Form->create($flavour) ?>
            <fieldset>
                <legend><?= __('Add Flavour') ?></legend>
                <?php
                    echo $this->Form->control('flavour');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
