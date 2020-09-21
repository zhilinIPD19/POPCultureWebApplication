<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Popsicle[]|\Cake\Collection\CollectionInterface $popsicles
 */
?>
<div class="popsicles index content">
    <?= $this->Html->link(__('New Popsicle'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Popsicles') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('name') ?></th>
                    <th><?= $this->Paginator->sort('description') ?></th>
                    <th><?= $this->Paginator->sort('ingredient') ?></th>
                    <th><?= $this->Paginator->sort('price') ?></th>
                    <th><?= $this->Paginator->sort('image') ?></th>
                    <th><?= $this->Paginator->sort('calorie') ?></th>
                    <th><?= $this->Paginator->sort('latest') ?></th>
                    <th><?= $this->Paginator->sort('flavour_id') ?></th>
         
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('modified') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($popsicles as $popsicle): ?>
                <tr>
                    <td><?= $this->Number->format($popsicle->id) ?></td>
                    <td><?= h($popsicle->name) ?></td>
                    <td><?= h($popsicle->description) ?></td>
                    <td><?= h($popsicle->ingredient) ?></td>
                    <td><?= $this->Number->format($popsicle->price.'$') ?></td>
                    <td><?= h($popsicle->image) ?></td>
                    <td><?= $this->Number->format($popsicle->calorie.'cal') ?></td>
                    <td><?= h($popsicle->latest) ?></td>
                    <td><?= $popsicle->has('flavour') ? $this->Html->link($popsicle->flavour->flavour, ['controller' => 'Flavours', 'action' => 'view', $popsicle->flavour->id]) : '' ?></td>
   
                    <td><?= h($popsicle->created) ?></td>
                    <td><?= h($popsicle->modified) ?></td>
                    
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $popsicle->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $popsicle->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $popsicle->id], ['confirm' => __('Are you sure you want to delete # {0}?', $popsicle->id)]) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
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
