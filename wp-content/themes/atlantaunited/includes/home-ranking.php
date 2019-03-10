<div class="last-game-wrapper">
    <div class="header">
        <p>Current Rank</p>
        <p class="ranking"><?php echo the_field('rank') ?></p>
    </div>
    <div class="score-wrapper mid-section">

        <div class="total">
            <p>gp</p>
            <span><?php echo get_field('games_played') ?></span>
        </div>

        <div class="wins">
            <p>w</p>
            <span><?php echo get_field('wins') ?></span>
        </div>
        
        <div class="loss">
            <p>l</p>
            <span><?php echo get_field('loss') ?></span>
        </div>
        
        <div class="draws">
            <p>d</p>
            <span><?php echo get_field('draws') ?></span>
        </div>
    </div>
</div>