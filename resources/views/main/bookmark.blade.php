<main class="wrapper__main">
    <div class="main__left">
        @include('components.menu')
        <script>document.querySelectorAll('a.main__list__elem__a')[1].classList.add('main__list__select');</script>
    </div>
    <div class="main__right">
        <div class="main__right__inner">
            <div class="right__inner__high">
                <div class="category main__right__category" id="category__markbook__select">
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
                    <button class="main__right__button" id="add__markbook">Додати</button>
                    <button class="main__right__button__save" id="save__markbook" style="display: none;">Зберегти</button>
                </div>
            </div>
            <div class="right__add__window" id="add__window__markbook">
                <h2 class="main__right__title__h2">Додати закладку</h2>
                <div class="add__window__main">
                    <div class="add__window__main__inner">
                        <ul class="add__window__main__inner__ul">
                            <li class="add__window__main__elem">
                                <input type="text" placeholder="Зміст" class="right__add__markbook__input">
                            </li>
                            <li class="add__window__main__elem">
                                <input type="text" placeholder="Посилання" class="right__add__markbook__input">
                            </li>
                            <li class="add__window__main__elem">
                                <div class="category category__markbook">
                                    <div class="category__inner category__markbook__inner">
                                        <span class="category__span">Категорія: вибрано (100)</span>
                                        <div class="category__arrow">
                                            <svg style="transform: rotate(90deg);" class="section-question__icon" width="10.54" height="24" viewBox="0 0 10.54 24"><polyline points="1.49 21.25 9.05 12 1.49 2.75" fill="none" stroke="#8e8d8d" stroke-linecap="round" stroke-miterlimit="10" stroke-width="1.5"></polyline></svg>
                                        </div>
                                    </div>
                                    <ul class="category__list category__markbook__elem">
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
                            </li>
                            <li class="add__window__main__elem">
                                <button id="right__add__markbook__button">Створити категорію</button>
                            </li>
                        </ul>

                    </div>
                    <div class="markbook__inner__left">
                        <textarea name="add__markboob__textarea" id="add__markboob__textarea" placeholder="Опис"></textarea>
                        <!-- <button class="main__right__button">Зберегти</button> -->
                    </div>
                </div>
                <div class="add_category">
                    <div class="add_category__inner">
                        <input type="text" placeholder="Назва категорії">
                        <button id="add_category__button">Додати</button>
                    </div>
                </div>
                <button id="save_markbook">Зберегти дані</button>
            </div>
            <!--  -->



            <h2 class="main__right__title__h2">Мої закладки</h2>
            <ul class="main__right__bookmark">

                <li class="main__right__bookmark__elem">
                    <h2>Налаштування Apache2(Ubuntu)</h2>
                    <h3>1. sudo nano text lorem100</h3>
                    <h3>Категорія: PHP</h3>
                    <h3>Посилання: <a href="#">http://google.com</a></h3>
                    <h3 class="priority__list priority__list__markbook" id="priority__list__markbook">
                        <span class="pririty__list__first">Пріоритет:</span>
                        <div class="pririty__list__second">
                            <svg style="transform: rotate(90deg);" class="section-question__icon" width="10.54" height="24" viewBox="0 0 10.54 24"><polyline points="1.49 21.25 9.05 12 1.49 2.75" fill="none" stroke="white" stroke-linecap="round" stroke-miterlimit="10" stroke-width="1.5"></polyline></svg>
                        </div>

                    </h3>
                    <ul class="priority__select">
                        <li class="priority__select__elem">Підняти в топ</li class="priority__select__elem">
                        <li class="priority__select__elem">Підняти вверх</li class="priority__select__elem">
                        <li class="priority__select__elem">Опустити в низ</li class="priority__select__elem">
                        <li class="priority__select__elem">Опустити в кінець</li class="priority__select__elem">
                    </ul>
                </li>

                <li class="main__right__bookmark__elem">
                    <h2>Зміст:</h2>
                    <h3>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perspiciatis ad atque, numquam adipisci modi, beatae nostrum voluptate molestiae nisi consequuntur in fuga nihil nulla accusamus. Incidunt ad, eius harum. Commodi.</h3>
                    <h3>Категорія: PHP</h3>
                    <h3 class="priority__list priority__list__markbook" id="priority__list__markbook">
                        <span class="pririty__list__first">Пріоритет:</span>
                        <div class="pririty__list__second">
                            <svg style="transform: rotate(90deg);" class="section-question__icon" width="10.54" height="24" viewBox="0 0 10.54 24"><polyline points="1.49 21.25 9.05 12 1.49 2.75" fill="none" stroke="white" stroke-linecap="round" stroke-miterlimit="10" stroke-width="1.5"></polyline></svg>
                        </div>

                    </h3>
                    <ul class="priority__select">
                        <li class="priority__select__elem">Підняти в топ</li class="priority__select__elem">
                        <li class="priority__select__elem">Підняти вверх</li class="priority__select__elem">
                        <li class="priority__select__elem">Опустити в низ</li class="priority__select__elem">
                        <li class="priority__select__elem">Опустити в кінець</li class="priority__select__elem">
                    </ul>
                </li>

                <li class="main__right__bookmark__elem">
                    <h2>Зміст:</h2>
                    <h3>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Culpa deserunt aperiam tempora sed, nesciunt vero tempore veritatis cupiditate ea voluptatibus!</h3>
                    <h3>Категорія: PHP</h3>
                    <h3>Посилання: <a href="#">http://google.com</a></h3>
                    <h3 class="priority__list priority__list__markbook" id="priority__list__markbook">
                        <span class="pririty__list__first">Пріоритет:</span>
                        <div class="pririty__list__second">
                            <svg style="transform: rotate(90deg);" class="section-question__icon" width="10.54" height="24" viewBox="0 0 10.54 24"><polyline points="1.49 21.25 9.05 12 1.49 2.75" fill="none" stroke="white" stroke-linecap="round" stroke-miterlimit="10" stroke-width="1.5"></polyline></svg>
                        </div>

                    </h3>
                    <ul class="priority__select">
                        <li class="priority__select__elem">Підняти в топ</li class="priority__select__elem">
                        <li class="priority__select__elem">Підняти вверх</li class="priority__select__elem">
                        <li class="priority__select__elem">Опустити в низ</li class="priority__select__elem">
                        <li class="priority__select__elem">Опустити в кінець</li class="priority__select__elem">
                    </ul>

                </li>
                <li class="main__right__bookmark__elem">
                    <h2>Зміст:</h2>
                    <h3>Текст про зміст</h3>
                    <h3>Категорія: PHP</h3>
                    <h3 class="priority__list priority__list__markbook" id="priority__list__markbook">
                        <span class="pririty__list__first">Пріоритет:</span>
                        <div class="pririty__list__second">
                            <svg style="transform: rotate(90deg);" class="section-question__icon" width="10.54" height="24" viewBox="0 0 10.54 24"><polyline points="1.49 21.25 9.05 12 1.49 2.75" fill="none" stroke="white" stroke-linecap="round" stroke-miterlimit="10" stroke-width="1.5"></polyline></svg>
                        </div>

                    </h3>
                    <ul class="priority__select">
                        <li class="priority__select__elem">Підняти в топ</li class="priority__select__elem">
                        <li class="priority__select__elem">Підняти вверх</li class="priority__select__elem">
                        <li class="priority__select__elem">Опустити в низ</li class="priority__select__elem">
                        <li class="priority__select__elem">Опустити в кінець</li class="priority__select__elem">
                    </ul>
                </li>
                </li>


            </ul>
        </div>
    </div>
</main>
