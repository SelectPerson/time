<div class="right__inner__high">
    <div class="category main__right__category" id="category__markbook__select">
        <div class="category__inner">
            <span class="category__span">Категорія: вибрано ({{ $getCountMark }})</span>
            @include('components.arrow')
        </div>
       <ul class="category__list">
            <li class="category__elem">Всі</li>
            @foreach($getCategoryMark as $category_elem)
               @if ($category_elem->category_mark == 1)
                   <li class="category__elem category__elem__select">
                       {{ $category_elem->name }}
                   </li>
               @elseif ($category_elem->category_mark == 0)
                   <li class="category__elem">
                       {{ $category_elem->name }}
                   </li>
               @endif


            @endforeach

        </ul>
        <div class="save_category_mark">Зберегти</div>
        <style>
            .save_category_mark {
                background-color: green;
                width: 90%;
                color: white;
                text-align: center;
                font-size: 20px;
                text-transform: uppercase;
                padding-top: 10px;
                padding-bottom: 10px;
                margin-top: 20px;
                cursor: pointer;
            }
        </style>
    </div>
    <div class="main__right__button__inner">
        <button class="main__right__button" id="add__markbook">Додати</button>
        <button class="main__right__button__save" id="save__markbook" style="display: none;">Зберегти</button>
    </div>
</div>
