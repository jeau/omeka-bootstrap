<?php echo head(array('title' => metadata('exhibit', 'title'), 'bodyid'=>'exhibit', 'bodyclass'=>'summary')); ?>
<div class="row">
    <div class="span12">
        <h1><?php echo metadata('exhibit', 'title'); ?></h1>
        <?php echo exhibit_builder_page_nav(); ?>
    </div>
</div>
        
<div class="row">
    <div class="span9">
        <?php if ($exhibitDescription = metadata('exhibit', 'description', array('no_escape' => true))): ?>
            <div class="exhibit-description">
                <?php echo $exhibitDescription; ?>
            </div>
        <?php endif; ?>

        <?php if (($exhibitCredits = metadata('exhibit', 'credits'))): ?>
            <div class="exhibit-credits">
                <h3><?php echo __('Credits'); ?></h3>
                <p><?php echo $exhibitCredits; ?></p>
            </div>
        <?php endif; ?>
    </div>
    <div class="span3">
        <nav id="exhibit-pages">
            <div class="tabbable tabs-right">
            <ul class="nav nav-tabs">
                <?php set_exhibit_pages_for_loop_by_exhibit(); ?>
                <?php foreach (loop('exhibit_page') as $exhibitPage): ?>
                <?php echo exhibit_builder_page_summary($exhibitPage); ?>
                <?php endforeach; ?>
            </ul>
            </div>
        </nav>
    </div>
</div>
    
<div class="row">
    <div class="span12">
        
        
    </div>
</div>

<?php echo foot(); ?>