<script type="text/javascript">
    $(function() {
        $('.restaurants .submit').hide();
    });
</script>
<div class="restaurants form">
<?php echo $this->Form->create($restaurant, ['default' => false, 'targetId' => 'editRestaurantDialog']); ?>
<?php
        echo $this->Form->hidden('id');
        echo $this->Form->control('name');
        echo $this->Form->control('street');
        echo $this->Form->control('city');
        echo $this->Form->control('state');
        echo $this->Form->control('zip');
        echo $this->Form->control('country');
        echo $this->Form->control('phone');
        echo $this->Form->control('hours');
        echo $this->Form->control('picture');
        echo $this->Form->control('picture_type');
        echo $this->Form->control('menu_text');
        echo $this->Form->control('comments');
        echo $this->Form->control('price_range_id');
        echo $this->Form->control('delivery');
        echo $this->Form->control('carry_out');
        echo $this->Form->control('dine_in');
        echo $this->Form->control('credit');
        echo $this->Form->control('website');
        echo $this->Form->control('user_id');
?>
<?= $this->Form->submit(__('Submit')); ?>
<?php echo $this->Form->end(); ?>
</div>
<?= $this->Flash->render() ?>
