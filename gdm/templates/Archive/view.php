<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Archive $archive
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Archive'), ['action' => 'edit', $archive->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Archive'), ['action' => 'delete', $archive->id], ['confirm' => __('Are you sure you want to delete # {0}?', $archive->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Archive'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Archive'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="archive view content">
            <h3><?= h($archive->name) ?></h3>
            <table>
                <tr>
                    <th><?= __('Name') ?></th>
                    <td><?= h($archive->name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Category') ?></th>
                    <td><?= h($archive->category) ?></td>
                </tr>
                <tr>
                    <th><?= __('Link') ?></th>
                    <td><?= h($archive->link) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($archive->id) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
