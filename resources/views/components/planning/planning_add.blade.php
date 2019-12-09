<div class="right__add__window" id="add__window__planning">
    <h2 class="main__right__title__h2">Додати планування</h2>
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
                            @include('components.arrow')
                        </div>
                        <ul class="category__list category__markbook__elem">
                            <li class="category__elem">testdsadsadsadsadsasadsaddsasdaasd</li>

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
    @include('components.add_category')
    <button id="save_markbook">Зберегти дані</button>
</div>
