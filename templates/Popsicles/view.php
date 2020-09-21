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
            <?= $this->Html->link(__('Edit Popsicle'), ['action' => 'edit', $popsicle->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Popsicle'), ['action' => 'delete', $popsicle->id], ['confirm' => __('Are you sure you want to delete # {0}?', $popsicle->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Popsicles'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Popsicle'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="popsicles view content">
            <h3><?= h($popsicle->name) ?></h3>
            <table>
                 <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($popsicle->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Name') ?></th>
                    <td><?= h($popsicle->name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Description') ?></th>
                    <td><?= h($popsicle->description) ?></td>
                </tr>
                <tr>
                    <th><?= __('Ingredient') ?></th>
                    <td><?= h($popsicle->ingredient) ?></td>
                </tr>
                <tr>
                    <th><?= __('Image') ?></th>
                    <td><?= $this->Html->image($popsicle->image, ["alt" => $popsicle->name,['pathPrefix' => '']]); ?></td>
                </tr>
                <tr>
                    <th><?= __('Flavour') ?></th>
                    <td><?= $popsicle->has('flavour') ? $this->Html->link($popsicle->flavour->flavour, ['controller' => 'Flavours', 'action' => 'view', $popsicle->flavour->flavour]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Category') ?></th>
                    <td><?php if (!empty($popsicle->categories)) : ?>
                        <?php foreach ($popsicle->categories as $categories) : ?>                            
                            <?= h($categories->category).'<br/> ' ?>       
                        <?php endforeach; ?><?php endif; ?></td>
                </tr>
                <tr>
                    <th><?= __('Calorie') ?></th>
                    <td><?= $this->Number->format($popsicle->calorie).'cal' ?></td>
                </tr>               
                <tr>
                    <th><?= __('Price') ?></th>
                    <td><?= $this->Number->format($popsicle->price).'$' ?></td>
                </tr>
                <tr>
                    <th><?= __('Latest') ?></th>
                    <td><?= $popsicle->latest ? 'Yes' : 'No'; ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($popsicle->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($popsicle->modified) ?></td>
                </tr>             
            </table>
            
        </div>
    </div>
</div>
