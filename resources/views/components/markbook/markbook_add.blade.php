<div class="right__add__window" id="add__window__markbook">
    <h2 class="main__right__title__h2">Додати закладку</h2>
    <div class="add__window__main">
        <div class="add__window__main__inner">
            <ul class="add__window__main__inner__ul">
                <li class="add__window__main__elem">
                    <input type="text" placeholder="Зміст" class="right__add__markbook__input" id="markbook_title">
                </li>
                <li class="add__window__main__elem">
                    <input type="text" placeholder="Посилання" class="right__add__markbook__input" id="link_mark">
                </li>
                <li class="add__window__main__elem">
                    <div class="category category__markbook">
                        <div class="category__inner category__markbook__inner">
                            <span class="category__span" id="category_mark">Категорія: не визначено</span>
                            @include('components.arrow')
                        </div>
                        <ul class="category__list category__markbook__elem" style="width: 99%;">
                            <li class="category__elem" style="border-top: 0">Без категорії</li>
                            @foreach($getCategoryAll as $category_elem)
                               <li class="category__elem add_select_mark" id="add_select_mark">{{ $category_elem->name }}</li>
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
            <textarea name="add__markboob__textarea" id="add__markboob__textarea" placeholder="Опис"></textarea>
            <!-- <button class="main__right__button">Зберегти</button> -->
        </div>
    </div>
    @include('components.add_category')
    <button id="save_markbook">Зберегти дані</button>
</div>
<script src="{{ asset('js/jquery.js') }}"></script>
<script src="{{ asset('js/category.js') }}"></script>
