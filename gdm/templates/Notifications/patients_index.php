<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Notification[]|\Cake\Collection\CollectionInterface $notifications
 */
?>
<div class="notifications index content">
    <?= $this->Html->link(__('New Notification'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Notifications') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('clinician_id') ?></th>
                    <th><?= $this->Paginator->sort('patients_id') ?></th>
                    <th><?= $this->Paginator->sort('send_time') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($notifications as $notification): ?>
                <tr>
                    <td><?= $this->Number->format($notification->id) ?></td>
                    <td><?= $notification->has('clinician') ? $this->Html->link($notification->clinician->id, ['controller' => 'Clinicians', 'action' => 'view', $notification->clinician->id]) : '' ?></td>
                    <td><?= $notification->has('patient') ? $this->Html->link($notification->patient->id, ['controller' => 'Patients', 'action' => 'view', $notification->patient->id]) : '' ?></td>
                    <td><?= h($notification->send_time) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $notification->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $notification->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $notification->id], ['confirm' => __('Are you sure you want to delete # {0}?', $notification->id)]) ?>
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
