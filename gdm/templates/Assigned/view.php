<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Assigned $assigned
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Assigned'), ['action' => 'edit', $assigned->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Assigned'), ['action' => 'delete', $assigned->id], ['confirm' => __('Are you sure you want to delete # {0}?', $assigned->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Assigned'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Assigned'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="assigned view content">
            <h3><?= h($assigned->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Clinician') ?></th>
                    <td><?= $assigned->has('clinician') ? $this->Html->link($assigned->clinician->id, ['controller' => 'Clinicians', 'action' => 'view', $assigned->clinician->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Patient') ?></th>
                    <td><?= $assigned->has('patient') ? $this->Html->link($assigned->patient->id, ['controller' => 'Patients', 'action' => 'view', $assigned->patient->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($assigned->id) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
