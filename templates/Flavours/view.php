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
            <?= $this->Html->link(__('Edit Flavour'), ['action' => 'edit', $flavour->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Flavour'), ['action' => 'delete', $flavour->id], ['confirm' => __('Are you sure you want to delete # {0}?', $flavour->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Flavours'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Flavour'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="flavours view content">
            <h3><?= h($flavour->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Flavour') ?></th>
                    <td><?= h($flavour->flavour) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($flavour->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($flavour->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($flavour->modified) ?></td>
                </tr>
            </table>
            <div class="related">
                <h4><?= __('Related Popsicles') ?></h4>
                <?php if (!empty($flavour->popsicles)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Name') ?></th>
                            <th><?= __('Description') ?></th>
                            <th><?= __('Ingredient') ?></th>
                            <th><?= __('Price') ?></th>
                            <th><?= __('Image') ?></th>
                            <th><?= __('Calorie') ?></th>
                            <th><?= __('Latest') ?></th>
                            <th><?= __('Flavour Id') ?></th>
                            <th><?= __('Created') ?></th>
                            <th><?= __('Modified') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($flavour->popsicles as $popsicles) : ?>
                        <tr>
                            <td><?= h($popsicles->id) ?></td>
                            <td><?= h($popsicles->name) ?></td>
                            <td><?= h($popsicles->description) ?></td>
                            <td><?= h($popsicles->ingredient) ?></td>
                            <td><?= h($popsicles->price) ?></td>
                            <td><?= h($popsicles->image) ?></td>
                            <td><?= h($popsicles->calorie) ?></td>
                            <td><?= h($popsicles->latest) ?></td>
                            <td><?= h($popsicles->flavour_id) ?></td>
                            <td><?= h($popsicles->created) ?></td>
                            <td><?= h($popsicles->modified) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Popsicles', 'action' => 'view', $popsicles->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Popsicles', 'action' => 'edit', $popsicles->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Popsicles', 'action' => 'delete', $popsicles->id], ['confirm' => __('Are you sure you want to delete # {0}?', $popsicles->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>
