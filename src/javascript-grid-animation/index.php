<?php
$key = "Animation";
$pageTitle = "Javascript Grid Animation";
$pageDescription = "ag-Grid can use animation for rows and columns inside the grid. Learn how this animation works and how it can be customised.";
$pageKeyboards = "Javascript Grid Animation";
include '../documentation-main/documentation_header.php';
?>

<div>

    <h2>Animation</h2>

    <p>
        The grid will animate the rows and columns in the following scenarios:
        <ul>
        <li>Column Animations:
            <ul>
                <li>Moving Columns</li>
            </ul>
        </li>
        <li>Row Animations
            <ul>
                <li>Filtering Rows</li>
                <li>Sorting Rows</li>
                <li>Expanding / Collapsing Row Groups</li>
            </ul>
        </li>
    </ul>
    </p>

    <h3>Column Animations</h3>

    <p>
        Column animations happen when you move a column. The default is for animations to
        be turned on. It is recommended that you leave the column move animations on unless
        your target platform (browser and hardware) is to slow to manage the animations.
        To turn OFF column animations, set the grid property <i>suppressColumnMoveAnimation=true</i>.
    </p>

    <p>
        The move column animation transitions the columns position only. So when you move a column,
        it animates to the new position. No other attribute apart from position is animated.
    </p>

    <h3>Row Animations</h3>

    <p>
        Row animations occur after filtering, sorting, resizing height and expanding / collapsing a row group.
        Each on these animations is turned OFF be default. They are all turned on
        using using the property <i>animateRows=true</i>.
    </p>

    <note>
        Column animations are on by default, row animations are off by default. This is to keep
        with what is expected to be the most common configuration as default.
    </note>

    <p>
        You do not need to know how the animations work, you just need to turn them on. However
        if you are creating a theme or otherwise want to adjust the animations, it will be useful
        for you to understand the sequence of rules which are as follows:
        <ul>
            <li><b>New Rows:</b> Rows that are new to the grid are placed in the new position and faded in.</li>
            <li><b>Old Rows:</b> Rows that are no longer in the grid are left in the same position and faded out.</li>
            <li><b>Moved Rows:</b> Rows that are in a new position get their position transitioned to the new position.</li>
            <li><b>Resized Height Rows:</b> Rows that get their height change will have the height transitioned to the new height.</li>
        </ul>
        In addition to the transition animations, old rows are placed behind new rows such that moving rows are
        on top of old rows when moved (hence old rows are not fading out on top of new rows, but behind new rows).
    </p>

    <note>
        Depending on your data set and users, sometimes row animation looks good, sometimes it doesn't.
        A large dataset will not look as nice as a small dataset when sorting and filtering as there will
        be large changes in the rows displayed, sometimes always replacing all the rows. A small dataset
        will look much nicer, especially on that fits all the data on the screen in one go, as then all rows
        will animate to new positions. Users will also have their preference, with users in high pressure
        situations (eg finance traders or air traffic control) may prefer no animation and focus on the data.
    </note>

    <h3>Example Animation</h3>

    <p>
        The example below shows the animations by the JavaScript calling the grid's api. So no touching, just looking!!!
    </p>

    <show-example example="exampleAnimation" example-height="450px"></show-example>

</div>

<?php include '../documentation-main/documentation_footer.php';?>
