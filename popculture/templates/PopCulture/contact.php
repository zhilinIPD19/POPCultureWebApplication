<div class="row">
    <div class="col-3" style="background-color:#D5DBDB ;">
        <div class="side-nav">
            <h5 class="py-5">
            <a href="#"><i class="fas fa-map-marker-alt"></i>&nbsp;<br>33 Rue du Yacht Club,Hudson QC CA 94107</a></br/>
            <a href="#"><i class="fas fa-phone-volume"></i>&nbsp;<br>(514)-8342316</a></br/>
            <a href="#"><i class="fas fa-envelope-open-text"></i>&nbsp;gourmetpopsicles@gmail.com</a>
            </h5>
            
        </div>
    </div>
    <div class="col-9">
        <div class="messages form content">
            <?= $this->Form->create($message) ?>
            <fieldset>
                <legend><h1><?= __('Please leave a message') ?></h1></legend>
                <?php
                    echo $this->Form->control('name');
                    echo $this->Form->control('email');
                    echo $this->Form->control('phoneNumber');
                    echo $this->Form->control('message',['type'=>'textarea']);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
