<div class="right__inner__high">
    <div class="category main__right__category" id="category__plan__select">
        <div class="category__inner">
            <span class="category__span">Категорія: вибрано (100)</span>
            @include('components.arrow')
        </div>
        <ul class="category__list">
            <li class="category__elem">Всі</li>
            @foreach($getCategoryPlanning as $category_elem)
                <li class="category__elem">{{ $category_elem->name }}</li>
            @endforeach
        </ul>
    </div>
    <div class="main__right__button__inner">
        <button class="main__right__button" id="plan__button__inner">Додати</button>
        <button class="main__right__button__save" id="save__plan" style="display: none;">Зберегти</button>
    </div>
</div>
