<!DOCTYPE html>
<html lang="en">

<x-head rtlMode='{{ isset($rtlMode) ? $rtlMode : "" }}' headTitle='{{ isset($headTitle) ? $headTitle : "" }}' css='{!! isset($css) ? $css : "" !!}' css2='{!! isset($css2) ? $css2 : "" !!}' css3='{!! isset($css3) ? $css3 : "" !!}'/>

<body class="custom-cursor <?php echo (isset($bodyClass) ? $bodyClass   : '')?>">

    <x-customcursor />

    <x-preloader />

    <div class="page-wrapper">

        <?php 

            if (!isset($header)) {
                ?>
                <x-header/>
                <x-strickyheader/>
                <?php
            }
        ?>

        <?php 

            if (isset($subTitle)) {
                ?>
                <x-pageheader title='{{ isset($title) ? $title : "" }}' subTitle='{{ isset($subTitle) ? $subTitle : "" }}' />
                <?php
            }
        ?>

        @yield('content')

        <?php 

            if (!isset($counterone)) {
                ?>
                <x-counterone/>
                <?php
            }
        ?>


        <?php 

            if (!isset($footer)) {
                ?>
                <x-footer/>
                <?php
            }
        ?>

    </div>

    <x-mobilenav />

    <x-searchpopup />

    <x-script script='{!! $script !!}' />

</body>

</html>