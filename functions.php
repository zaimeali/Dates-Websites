<?php

    require_once __DIR__.'/resource/theme_files.php';
    require_once __DIR__.'/resource/customizer.php';

    add_action('wp_footer', 'your_function');
    function your_function()
    {
        $queryPost = new WP_Query(array(
            'post_type' => 'dateproduct',
            'order' => 'ASC',
        ));
        while($queryPost->have_posts())
        {
            $queryPost->the_post();
            $id = get_the_ID();
            $title = get_the_title();
            $title = str_replace("#038;", "", $title);
        ?>
            <script>
                // console.log(document.getElementById('datesFormSelect'));
                var select = document.getElementById('datesFormSelect');
                var option = document.createElement('option');
                option.text = '<?php echo $title; ?>';
                option.value = <?php echo $id; ?>;
                select.appendChild(option);
            </script>
        <?php
        }
        wp_reset_postdata();
    }

    // $queryPost = new WP_Query(array(
    //     'post_type' => 'dateproduct',
    //     'order' => 'ASC',
    // ));
    // while($queryPost->have_posts())
    // {
    //     $queryPost->the_post();
    //     $id = get_the_ID();
    //     $title = get_the_title();

        ?>
            <script>
                // var select = document.getElementById('datesFormSelect');
                // var option = document.createElement('option');
                // option.text = <?php // echo $title; ?>;
                // option.value = <?php // echo $id; ?>;
                // select.appendChild(option);
                // if(document.getElementById('datesFormSelect'))
                // {
                //     console.log("nice");
                // }
            </script>
        <?php
        // $insideContent = "<script>";
        // $insideContent .= "var select = document.getElementById('datesFormSelect');";
        // $insideContent .= "var option = document.createElement('option');";
        // $insideContent .= "option.text = '{$title}';";
        // $insideContent .= "option.value = '{$id}';";
        // $insideContent .= "select.appendChild(option);";
        // $insideContent .= "</script>";
        // echo $insideContent;
        // echo "<script>console.log('{$title}');</script>";
    // }
    