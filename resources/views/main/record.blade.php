<main class="wrapper__main">
    <div class="main__left">
        @include('components.menu')
        <script>document.querySelectorAll('a.main__list__elem__a')[3].classList.add('main__list__select');</script>

    </div>
    <div class="main__right">
        <div class="main__right__inner">

            <div class="right__inner__high">
                <div class="category main__right__category" id="category__record__select">
                    <div class="category__inner">
                        <span class="category__span">Категорія: вибрано (100)</span>
                        <div class="category__arrow">
                            <svg style="transform: rotate(90deg);" class="section-question__icon" width="10.54" height="24" viewBox="0 0 10.54 24"><polyline points="1.49 21.25 9.05 12 1.49 2.75" fill="none" stroke="#8e8d8d" stroke-linecap="round" stroke-miterlimit="10" stroke-width="1.5"></polyline></svg>
                        </div>
                    </div>
                    <ul class="category__list">
                        <li class="category__elem">testdsadsadsadsadsasadsaddsasdaasd</li>
                        <li class="category__elem">test</li>
                        <li class="category__elem">test</li>
                        <li class="category__elem">test</li>
                        <li class="category__elem">testdsadsadsadsadsasadsaddsasdaasd</li>
                        <li class="category__elem">test</li>
                        <li class="category__elem">test</li>
                        <li class="category__elem">test</li>
                        <li class="category__elem">testdsadsadsadsadsasadsaddsasdaasd</li>
                        <li class="category__elem">test</li>
                        <li class="category__elem">test</li>
                        <li class="category__elem">test</li>
                    </ul>
                </div>

                <div class="main__right__button__inner">


                    <button class="main__right__button" id="record__button__inner">Додати</button>

                    <button class="main__right__button__save" id="save__record" style="display: none;">Зберегти</button>
                </div>
            </div>
            <div class="date__filter__first">
                <span class="date__filter__span">Від</span><input type="date" class="date__filter__input">
                <span class="date__filter__span">До</span><input type="date" class="date__filter__input">
            </div>
            @include('components.record.record_add')
            <h2 class="main__right__title__h2">Запис дня</h2>
            <ul class="main__right__list">
                <li class="main__right__list__elem">Дата створення</li>
                <li class="main__right__list__elem">Опис</li>
                <li class="main__right__list__elem">Від</li>
                <li class="main__right__list__elem">До</li>
                <li class="main__right__list__elem">Ефективність</li>
                <li class="main__right__list__elem">Категорія</li>
            </ul>
            <ul class="main__right__list">
                <li class="main__right__list__elem">1. 14.11.2019 (15:14)</li>
                <li class="main__right__list__elem">Опис</li>
                <li class="main__right__list__elem">15:15</li>
                <li class="main__right__list__elem">17:16</li>
                <li class="main__right__list__elem">2:01</li>
                <li class="main__right__list__elem">PHP</li>
            </ul>
            <ul class="main__right__list">
                <li class="main__right__list__elem">2. 14.11.2019 (15:14)</li>
                <li class="main__right__list__elem">Опис</li>
                <li class="main__right__list__elem">15:15</li>
                <li class="main__right__list__elem">17:16</li>
                <li class="main__right__list__elem">2:01</li>
                <li class="main__right__list__elem">PHP</li>
            </ul>
            <ul class="main__right__list">
                <li class="main__right__list__elem">2. 14.11.2019 (15:14)</li>
                <li class="main__right__list__elem">Опис</li>
                <li class="main__right__list__elem">15:15</li>
                <li class="main__right__list__elem">17:16</li>
                <li class="main__right__list__elem">2:01</li>
                <li class="main__right__list__elem">PHP</li>
            </ul>
            <ul class="main__right__list">
                <li class="main__right__list__elem">2. 14.11.2019 (15:14)</li>
                <li class="main__right__list__elem">Опис</li>
                <li class="main__right__list__elem">15:15</li>
                <li class="main__right__list__elem">17:16</li>
                <li class="main__right__list__elem">2:01</li>
                <li class="main__right__list__elem">PHP</li>
            </ul>
        </div>
    </div>
</main>

