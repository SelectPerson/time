<div class="right__add__window" id="add__window__record" style="display: none;">
    <h2 class="main__right__title__h2">Додавання запис дій</h2>
    <div class="add__window__main">
        <div class="add__window__main__inner">
            <ul class="add__window__main__inner__ul">
                <li class="add__window__main__elem">
                    <input type="text" placeholder="Зміст" class="right__add__markbook__input" name="about_record">
                </li>
                <li class="add__window__main__elem inner__time__elem">
                    <div class="inner__time__data">
                        <span class="time__span time__data__span">Дата</span>
                        <!-- <input type="date" data-date="" data-date-format="DD MMMM YYYY" value="2015-08-09"> -->
                            <input type="date" data-date="" data-date-format="DD MMMM YYYY" class="input__type__data" value="2015-12-31" name="data_record" id="data_record">
                    </div>
                    <div class="inner__time__from">
                        <span class="time__span">Від</span>
                        <input type="number" min="0" max="23" placeholder="Год" id="hour__first" class="input__type__number hour__input input__first__full" name="firstTime_from">
                        <input type="number" min="0" max="59" placeholder="Хв" id="minute__first" class="input__type__number input__type__number__second minute__input input__first__full" name="firstTime_to">
                    </div>

                    <div class="inner__time__to">
                        <span class="time__span">До</span>
                        <input type="number" min="0" max="23" placeholder="Год" id="hour__second" class="input__type__number hour__input input__second__full" name="SecondTime_from">
                        <input type="number" min="0" max="59" placeholder="Хв" id="minute__second" class="input__type__number input__type__number__second minute__input input__second__full" name="SecondTime_to">
                    </div>
                    <div class="inner__time__effective">
                        <span class="time__span__effective">Ефективність</span>
                        <input type="text" disabled="disabled" class="inner__time__effective__input" value="" name="record_effective">
                    </div>
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
                            <li class="category__elem">Всі</li>
                            @foreach($getCategoryRecord as $category_elem)
                                <li class="category__elem">{{ $category_elem->name }}</li>
                            @endforeach
                        </ul>
                    </div>
                </li>

                <li class="add__window__main__elem">
                    <button id="right__add__markbook__button">Створити категорію</button>
                </li>

            </ul>

        </div>
        <div class="markbook__inner__left">
            <textarea name="add__markboob__textarea" id="add__markboob__textarea" placeholder="Опис" name="record_full"></textarea>
            <!-- <button class="main__right__button">Зберегти</button> -->
        </div>
    </div>
    <div class="add_category">
        <div class="add_category__inner">
            <input type="text" placeholder="Назва категорії" id="name_category">
            <button id="add_category__button">Додати</button>
        </div>
    </div>
    <button id="save_markbook">Зберегти дані</button>
</div>

<script>
    let utc = new Date().toJSON().slice(0,10).replace(/-/g,'-');
    document.getElementById('data_record').value = utc;
</script>
