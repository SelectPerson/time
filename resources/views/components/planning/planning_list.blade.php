<h2 class="main__right__title__h2">Планування</h2>
<ul class="main__right__bookmark">
    @foreach($getJoinCategoryPlanning as $getElem)
        <li class="main__right__bookmark__elem">
            <h4 style="font-weight:bold;">Зміст</h4>
            <h5>{{ $getElem->title }}</h5>
            <h4 style="font-weight:bold;">Опис</h4>
            <h5>{{$getElem->about }} </h5>
            <h4 style="font-weight:bold;">Посилання</h4>
            <h5>{{$getElem->link }}</h5>
            <h4 style="font-weight:bold;">Категорія</h4>
            <h5>{{ $getElem->category_name }}</h5>
            {{--            <a href="#">Детальніше</a>--}}
            {{--            <h3 class="priority__list priority__list__planning" id="priority__list__planning">--}}
            {{--                <span class="pririty__list__first">Пріоритет:</span>--}}
            {{--                <div class="pririty__list__second">--}}
            {{--                    <svg style="transform: rotate(90deg);" class="section-question__icon" width="10.54" height="24" viewBox="0 0 10.54 24"><polyline points="1.49 21.25 9.05 12 1.49 2.75" fill="none" stroke="white" stroke-linecap="round" stroke-miterlimit="10" stroke-width="1.5"></polyline></svg>--}}
            {{--                </div>--}}
            {{--            </h3>--}}
            <ul class="priority__select">
                <li class="priority__select__elem">Підняти в топ</li>
                <li class="priority__select__elem">Підняти вверх</li>
                <li class="priority__select__elem">Опустити в низ</li>
                <li class="priority__select__elem">Опустити в кінець</li>
            </ul>
        </li>
    @endforeach

</ul>
