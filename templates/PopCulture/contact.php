<div class="row">
    <div class="col-m-3" style="background-color:#D5DBDB ;">
        <div class="text-center">
            <h5 class="py-5">
            <a href="https://goo.gl/maps/u9uwhZgaVdELj9AM6"><i class="fas fa-map-marker-alt"></i><br>33 Rue du Yacht Club,Hudson QC CA 94107</a></br/>
            <a href="tel:514-834-2316"><i class="fas fa-phone-volume"></i><br>(514)-8342316</a></br/>
            <a href="mailto: gourmetpopsicles@gmail.com"><i class="fas fa-envelope-open-text"></i><br>gourmetpopsicles@gmail.com</a>
            </h5>
            
        </div>
    </div>
    <div class="col-m-9">
        <div class="messages form content">
            <?= $this->Form->create($message) ?>
            <fieldset>
                <legend><h1><?= __('Let us get in touch') ?></h1></legend>
                <?php
                    echo $this->Form->control('name');
                    echo $this->Form->control('email');
                    echo $this->Form->control('phoneNumber');
                    echo $this->Form->control('message',['type'=>'textarea']);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Get in touch')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
