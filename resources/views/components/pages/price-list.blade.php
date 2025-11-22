<div id="price-list" class="card slide-in">
    <div class="card__theme card__theme--1 price-list">
        <div class="card__left">
            <div class="price-list__table">
                <div class="price-list__table__nav">
                    <div class="price-list__table__nav__opt price-list__table__nav__opt--1 active">
                        Basic
                    </div>
                    <div class="price-list__table__nav__opt price-list__table__nav__opt--2">
                        Standard
                    </div>
                    <div class="price-list__table__nav__opt price-list__table__nav__opt--3">
                        Premium
                    </div>
                </div>
                <div class="price-list__table__content">
                    @foreach ($priceLists as $option)
                        <div class="
                            price-list__table__content__opt 
                            price-list__table__content__opt--{{$loop->index + 1}} 
                            {{ $loop->index === 0 ? 'active' : '' }}
                        ">
                            <h4 class="price-list__table__content__title">
                                {{$option->title}}
                            </h4>
                            <div class="price-list__table__content__price">
                                €{{$option->price}}
                            </div>
                            <div class="price-list__table__content__description">
                                {{$option->description}}
                            </div>
                            <div class="price-list__table__content__delivery-time">
                                <i class="fa-solid fa-hourglass"></i>
                                {{$option->delivery_time}}
                            </div>
                            <div class="price-list__table__content__number-of-revisions">
                                <i class="fa-solid fa-arrows-rotate"></i>
                                {{$option->number_of_revisions}}
                            </div>
                            @foreach ($option->bundles as $bundle)
                                <div class="
                                    price-list__table__content__bundle 
                                    {{ $bundle->active ? 'active' : '' }}
                                ">
                                    <i class="fa-solid fa-check"></i> 
                                    {{ $bundle->name}}
                                </div>
                            @endforeach
                            <div class="price-list__table__content__button">
                                <a class="button--main" href="#contact-us">
                                    Contact us
                                </a>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
        <div class="card__right">
            <h1 class="title title--1 style--uppercase color--main-2">Price list</h1>
        </div>
    </div>
</div>