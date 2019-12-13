
<main class="wrapper__main">
    <div class="main__left">
        @include('components.menu')
        <script>document.querySelectorAll('a.main__list__elem__a')[0].classList.add('main__list__select');</script>
    </div>
    <div class="main__right">
        <div class="main__right__inner">
            <!-- MarkBook -->
            @include('components.markbook.markbook_category')
            @include('components.markbook.markbook_add')
            @include('components.markbook.markbook_list')
            <!-- Planning -->
            @include('components.planning.planning_category')
            @include('components.planning.planning_add')
            @include('components.planning.planning_list')
            <!-- Record Day -->
            @include('components.record.record_caregory')
            @include('components.record.record_add')
            @include('components.record.record_table')
        </div>
    </div>
</main>
<footer class="footer">
    <h1 class="footer__h1">
        TimeSelf
    </h1>
</footer>

