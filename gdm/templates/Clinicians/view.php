<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Clinician $clinician
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Clinician'), ['action' => 'edit', $clinician->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Clinician'), ['action' => 'delete', $clinician->id], ['confirm' => __('Are you sure you want to delete # {0}?', $clinician->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Clinicians'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Clinician'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="clinicians view content">
            <h3><?= h($clinician->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Full Name') ?></th>
                    <td><?= h($clinician->full_name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Email') ?></th>
                    <td><?= h($clinician->email) ?></td>
                </tr>
                <tr>
                    <th><?= __('Password') ?></th>
                    <td><?= h($clinician->password) ?></td>
                </tr>
                <tr>
                    <th><?= __('Speciality') ?></th>
                    <td><?= h($clinician->speciality) ?></td>
                </tr>
                <tr>
                    <th><?= __('Patient Assigned') ?></th>
                    <td><?= h($clinician->patient_assigned) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($clinician->id) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
