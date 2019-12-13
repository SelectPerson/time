<h2 class="main__right__title__h2">Запис дій</h2>
<ul class="main__right__list">
    <li class="main__right__list__elem">Дата</li>
    <li class="main__right__list__elem">Опис</li>
    <li class="main__right__list__elem">Від</li>
    <li class="main__right__list__elem">До</li>
    <li class="main__right__list__elem">Ефективність</li>
    <li class="main__right__list__elem">Категорія</li>
</ul>
@foreach($getDay as $getDayElem)
    <ul class="main__right__list">
        <li class="main__right__list__elem">{{ $getDayElem->data }}</li>
        <li class="main__right__list__elem">{{ $getDayElem->about }}</li>
        <li class="main__right__list__elem">{{ $getDayElem->from_time }}</li>
        <li class="main__right__list__elem">{{ $getDayElem->to_time }}</li>
        <li class="main__right__list__elem">{{ $getDayElem->effective_time }}</li>
{{--        <li class="main__right__list__elem">{{ $getDayElem->category }}</li>--}}
        <li class="main__right__list__elem">PHP</li>
    </ul>
@endforeach


