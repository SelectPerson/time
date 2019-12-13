<main class="wrapper__main">
    <div class="main__left">
        @include('components.menu')
        <script>document.querySelectorAll('a.main__list__elem__a')[3].classList.add('main__list__select');</script>

    </div>
    <div class="main__right">
        <div class="main__right__inner">
            @include('components.record.record_caregory')
            <div class="date__filter__first" style="display: flex;">
                <div class="elem">
                    <span class="date__filter__span">Від</span><input type="date" class="date__filter__input">
                </div>
                <div class="elem">
                    <span class="date__filter__span">До</span><input type="date" class="date__filter__input">
                </div>
            </div>
            @include('components.record.record_add')
            @include('components.record.record_table')
        </div>
    </div>
</main>

