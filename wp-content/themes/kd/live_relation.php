<?php /* Template Name: Relacja na żywo */ ?>
<?php get_header(); ?>
<div class="container mt-75">
    <h2><?= get_the_title() ?></h2>
</div>
<div id="relations" class="container">



</div>
<script>

function getRelations()
{
    var lastRelationTimestamp = $('#relations .relation').first().data('timestamp');

    if (lastRelationTimestamp == undefined) {
        lastRelationTimestamp = 0;
    }
    console.log(lastRelationTimestamp);
    $.ajax({
        url: '<?php bloginfo('wpurl'); ?>/wp-admin/admin-ajax.php',
        type: 'GET',
        dataType: 'json',
        data: {
            action: 'get-relations',
            timestamp: lastRelationTimestamp,
        },
        success: function (data) {
            $.each(data, function(key,value){
                addRelation(value);
            });
            updateTimestamps();
        }
    });

    setTimeout(getRelations, 30*1000);
}

function addRelation(relation)
{
    var relationContainer = '<div class="row relation" data-timestamp="' + relation.timestamp + '"> \
            <div class="two columns time text-bold"> \
            </div> \
            <div class="ten columns content"> \
                ' + relation.content;

    if (relation.image != null) {
        relationContainer += '<div class="image"> \
                <img src="' + relation.image + '" /> \
            </div>';
    }

    relationContainer += '</div> \
        </div>';
    $('#relations').prepend(relationContainer);
}

function updateTimestamps()
{
    var relations = $('#relations .relation');
    var currentTimestamp = Math.floor($.now()/1000);
    var relationTimestamp = 0;
    var timeAgo = 0;
    $.each(relations, function(key, value) {

        relationTimestamp = $(value).data('timestamp');
        timeAgo = currentTimestamp - relationTimestamp;

        $(value).find('.time').html(formatTimestamp(timeAgo));
        console.log();
    });
}

function formatTimestamp(timestamp)
{
    var seconds = 0, minutes = 0, hours = 0, days = 0;
    var result = '';

    if (timestamp == 0) {
        timestamp = 1;
    }

    if (timestamp < 60) {
        return timestamp + ' s temu';
    } else if (timestamp < 3600) {
        return Math.floor(timestamp/60) + ' min temu';
    } else if (timestamp < 24*3600) {
        return Math.floor(timestamp/3600) + ' h ' + Math.floor((timestamp - Math.floor(timestamp/3600) * 3600)/60) + ' min temu';
    } else {
        return Math.floor(timestamp/(24*3600)) + ' d ' + Math.floor((timestamp - Math.floor(timestamp/(24*3600)) * 24*3600)/3600) + ' h ' + Math.floor((timestamp - Math.floor(timestamp/3600) * 3600 )/60) + ' min temu';
    }
}

getRelations();
</script>

<!-- enter main page content here -->
<?php get_footer(); ?>
