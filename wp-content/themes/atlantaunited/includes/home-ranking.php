<div class="last-game-wrapper ranking">
    <div class="header">
        <p>Current Rank</p>
        <p class="ranking"><?php echo the_field('rank') ?></p>
    </div>
    <div class="score-wrapper mid-section ranking">

        <div class="total">
            <p>G<span class="tablet-hide">ames</span></p>
            <span><?php echo get_field('games_played') ?></span>
        </div>

        <div class="wins">
            <p>W<span class="tablet-hide">in</span></p>
            <span><?php echo get_field('wins') ?></span>
        </div>
        
        <div class="loss">
            <p>L<span class="tablet-hide">oss</span></p>
            <span><?php echo get_field('loss') ?></span>
        </div>
        
        <div class="draws">
            <p>D<span class="tablet-hide">raw</span></p>
            <span><?php echo get_field('draws') ?></span>
        </div>
    </div>
</div>