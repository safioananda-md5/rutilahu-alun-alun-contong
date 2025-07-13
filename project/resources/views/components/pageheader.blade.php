<section class="page-header">
    <div class="page-header-bg" style="background-image: url('{{ asset('assets/images/backgrounds/page-header-bg.jpg') }}')">
                                                         
    </div>
    <div class="page-header-shape-1"><img src="{{ asset('assets/images/shapes/page-header-shape-1.png') }}" alt=""></div>
    <div class="container">
        <div class="page-header__inner">
            <ul class="thm-breadcrumb list-unstyled">
                <li><a href="{{ route('index') }}">Home</a></li>
                <li><span>/</span></li>
                <li><?php echo (isset($title) ? $title   : '')?></li>
            </ul>
            <h2><?php echo (isset($subTitle) ? $subTitle   : '')?></h2>
        </div>
    </div>
</section>