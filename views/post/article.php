<h1>Article</h1>
<button class="btn btn-success" id="btn">Click me & $_POST(123)</button>
<?php
$js = <<<Ajax
    $('#btn').on('click', function() {
        $.ajax({
            url: 'index.php?r=post/article',
            data: {title: '123'},
            type: 'POST',
            success: function(res) {
                alert(res);
            },
            error: function() {
                alert('Error');
            }
        });
    });
Ajax;
$this->registerJS($js, yii\web\View::POS_LOAD);
?>