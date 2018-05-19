<?php
    $cells = 6;
?>
<!DOCTYPE html>

<html>
<head>
    <title>Resize Example Two</title>
    <link rel="stylesheet" href="/css/style.css?v=<?php echo strtotime('now'); ?>" />
</head>
<body>
    <section id="one">
        <?php
            for($i=0; $i<$cells; $i++) {
                ?>
                <div class="cells">
                    <h2>
                        Test Header
                    </h2>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam vulputate erat enim, ac pulvinar nisi euismod a.
                        Morbi hendrerit sodales congue. Proin maximus sodales condimentum. Sed elit elit, posuere ut urna et, posuere vulputate metus.
                        Sed erat odio, gravida in aliquam ut, luctus vitae velit. Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                        Nullam vulputate erat enim, ac pulvinar nisi euismod a. Morbi hendrerit sodales congue. Proin maximus sodales condimentum.
                        Sed elit elit, posuere ut urna et, posuere vulputate metus. Sed erat odio, gravida in aliquam ut, luctus vitae velit.
                    </p>
                    <div class="clear"></div>
                </div>
                <?php
            }
        ?>
    </section>
    <section id="two">
        <?php
            for($i=0; $i<$cells; $i++) {
                ?>
                <div class="cells">
                    <h2>
                        Test Header
                    </h2>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam vulputate erat enim, ac pulvinar nisi euismod a.
                        Morbi hendrerit sodales congue. Proin maximus sodales condimentum. Sed elit elit, posuere ut urna et, posuere vulputate metus.
                        Sed erat odio, gravida in aliquam ut, luctus vitae velit. Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                        Nullam vulputate erat enim, ac pulvinar nisi euismod a. Morbi hendrerit sodales congue. Proin maximus sodales condimentum.
                        Sed elit elit, posuere ut urna et, posuere vulputate metus. Sed erat odio, gravida in aliquam ut, luctus vitae velit.
                    </p>
                    <div class="clear"></div>
                </div>
                <?php
            }
        ?>
    </section>
    <script
        src="https://code.jquery.com/jquery-1.12.4.min.js"
        integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ="
        crossorigin="anonymous"></script>
    <script src="/js/resize.js"></script>
    <script>
        $(document).ready(function(){
            let adj = 30;
            $('section').height($(window).height()-adj);
            resize($('#one .cells'),$('#one'));
            resize($('#two .cells'),$('#two'));
            $(window).resize(function(){
                resize($('#one .cells'),$('#one'));
                resize($('#two .cells'),$('#two'));
                $('section').height($(window).height()-adj);
            });
        });
    </script>
</body>
</html>