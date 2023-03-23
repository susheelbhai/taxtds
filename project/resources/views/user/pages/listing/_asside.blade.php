<aside class="col-lg-4 col-md-12 car">
    <div class="widget">
        <!-- Search Fields -->
        <form class="form">
            <div class="widget-boxed main-search-field">
                <div class="widget-boxed-header">
                    <h4>Filters</h4>
                </div>
                <!-- Search Form -->
                <div class="trip-search">
                    <div class="form">
                        <!-- Form Lookin for -->
                        <div class="form-group looking">
                            <div class="first-select wide">
                                <div class="main-search-input-item">
                                    <input type="text" name="search" placeholder="Enter Keyword..."
                                        value="{{ request()->search }}" />
                                </div>
                            </div>
                        </div>
                        <!--/ End Form Lookin for -->
                        <!-- Form Location -->
                        <div class="form-group looking my-4">
                            <div class="first-select wide">
                                <div class="main-search-input-item">
                                    <input type="text" name="location" placeholder="where are you looking from?"
                                        value="{{ request()->location }}" />
                                </div>
                            </div>
                        </div>
                        <!--/ End Form Location -->
                        <input type="hidden" name="category" value="{{ request()->category }}">
                    </div>
                </div>
                <!--/ End Search Form -->
                <!-- Price Fields -->
                <div class="main-search-field-2 d-none">
                    <!-- Area Range -->
                    <div class="range-slider">
                        <label>60 KM</label>
                        <div id="km" data-min="0" data-max="1300" data-unit="KM"></div>
                        <div class="clearfix"></div>
                    </div>
                    <br>
                    <!-- Price Range -->
                    <div class="range-slider">
                        <label>Price Range</label>
                        <div id="price-range-km" data-min="0" data-max="600000" data-unit="$"></div>
                        <div class="clearfix"></div>
                    </div>
                </div>
                
                <div class="col-lg-12 no-pds">
                    <div class="at-col-default-mar">
                        <button class="btn btn-default hvr-bounce-to-right" type="submit">Search</button>
                    </div>
                </div>
            </div>
        </form>

        <!-- Start: Opening hour -->
        <div class="widget-boxed mt-5">
            <div class="widget-boxed-header">
                <h4>  Category</h4>
            </div>
            <div class="widget-boxed-body">
                <div class="side-list">
                    <ul>
                        <a href="?search={{ request()->search }}&location={{ request()->location }}&category=">
                            <li> {{ __('All Categoory') }} </li>
                        </a>
                        @foreach ($categories as $i)
                            <a href="?search={{ request()->search }}&location={{ request()->location }}&category={{ $i->id }}">
                                <li> {{ $i->name }} </li>
                            </a>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
        <!-- End: Opening hour -->


    </div>
</aside>
