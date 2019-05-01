<div class="sidebar-cta">
    
    <h2 class="heading heading__lg font400">Find Your Perfect Job In Catering</h2>
    
    <a href="" class="button button__ghost button__fullwidth mt2">Submit CV</a>
    
</div>

<div class="sidebar">

<?php for ($x = 0; $x <= 5; $x++) {
    get_template_part('template-parts/beer', 'glass');
} ?>

    <h3 class="heading heading__md heading__alt-color mb1">Latest Jobs</h3>


<?php for ($x = 0; $x <= 3; $x++) {
    get_template_part('template-parts/job', 'card');
} ?>
    
</div>

<div class="sidebar-cta text-center">
    
    <a href="" class="heading__light"><h2 class="heading heading__md font400">Search All Jobs</h2></a>
    
</div>